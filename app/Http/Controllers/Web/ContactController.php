<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;
use App\Mail\ContactForm;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            
            $contact = Contact::create([
                'name' => request('name'),
                'lastname' => request('lastname'),
                'email' => request('email'),
                'address' => request('address'),
                'phone' => request('phone'),
                'message' => request('message')
            ]);

            \Mail::to('elio.garcia.solis@gmail.com')->send(new ContactForm($contact)); 

            return response()->json(true);
            
        }
    }

}
