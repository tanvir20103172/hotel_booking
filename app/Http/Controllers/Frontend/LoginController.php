<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('frontend.pages.login.form');
    }
    public function registration(){
        return view('frontend.pages.registration.form');
    }
}
