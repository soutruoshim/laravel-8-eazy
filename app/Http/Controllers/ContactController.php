<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        // load view from cd resources/views/contact.blade.php
        return view('contact');
    }
}
