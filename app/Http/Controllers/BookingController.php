<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list(){
        return view('admin.pages.booking.list');
    } 
}
