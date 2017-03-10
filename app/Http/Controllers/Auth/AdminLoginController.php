<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:admin');
	}

    public function showLoginForm() {
    	return view('auth.adminLogin');
    }

    public function login() {
    	// Validate the form data
    	$this->validate(request() , [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	$credentials = [
    		'email' => request('email'),
    		'password' => request('password')
    	];

    	// Attemp to log the user in admin model
    	if (\Auth::guard('admin')->attempt($credentials, request('remember'))) {
    		// if successful, redirect to the admin panel
    		return redirect()->intended(route('admin.panel'));
    	}
    	
    	// if unsuccesful redirect back 
    	return redirect()->back()->withInput(request()->only('email'));
    	
    }
}
