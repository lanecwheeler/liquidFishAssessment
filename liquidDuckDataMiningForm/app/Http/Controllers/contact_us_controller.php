<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact_us_controller extends Controller
{
    public function show() {
    	return view ('contact_us_page');
    }
}
