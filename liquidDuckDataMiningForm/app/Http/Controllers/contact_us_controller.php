<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact_us_model;


class contact_us_controller extends Controller
{
    public function show() {
    	return view ('contact_us_page');
    }

    public function save_contact_info(Request $request) {
    	$this->validate($request, ['name' => 'required', 'email' => 'required|email', 'company' => 'required', 'phone' => 'required', 'subject' => 'required', 'message' => 'required']);
    	contact_us_model::create($request -> all());	

	    return back()->with('success', 'Thanks for the message!');
    }
}
