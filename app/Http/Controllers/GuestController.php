<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function list(){
        return view('admin.pages.guest.list');
    }
}
