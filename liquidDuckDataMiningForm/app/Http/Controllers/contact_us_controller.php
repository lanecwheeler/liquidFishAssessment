<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact_us_model;
use Mail;


class contact_us_controller extends Controller
{
    public function show() {
    	return view ('contact_us_page');
    }

    public function save_contact_info(Request $request) {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'company' => 'required', 'phone' => 'required', 'subject' => 'required', 'message' => 'required']);
        
    	contact_us_model::create($request -> all());	

        Mail::send('contact_response_page', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'company' => $request->get('company'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message')
        ), function($message) use ($request) {
             $message->from('developer-test@liquidfish.com');
             $message->to($request->get('email'), $request->get('name'))->subject($request->get('subject'));
        });

	    return back()->with('success', 'Thanks for the message!');
    }
}
