<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;

class ContactController extends Controller
{
    public function index() {
    	$contacts = Contact::All();
    	return view('admin.contact.index' , compact('contacts'));
    }

    public function export() {
    	\Excel::create('Contact form', function($excel){

             $excel->sheet('Subcategorías' , function($sheet){
                $contacts = Contact::All();

                $excel = array();

                foreach ($contacts as $key => $value) {

                    $full_name  = $value->fullName;
                    $email		= $value->email;
                    $address    = $value->address;
                    $phone      = $value->phone;

                    $array = array($full_name, $email, $address, $phone);
                
                    array_push($excel , $array);
                }
           
                $sheet->fromArray($excel, null, 'A1', false, false)->prependRow(array('Full name' , 'Email' , 'Address', 'Phone'));
                $sheet->setBorder('A1:C4', 'thin');

                $sheet->cells('A1:D1', function($cells) {
        
                    $cells->setAlignment('center');
                    $cells->setBackground('#85C3FE');

                    $cells->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                    ));

                });

             });

        })->export('xls');
    }
}
