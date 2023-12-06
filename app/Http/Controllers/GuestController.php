<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function list(){
        $AllGuest=Registration::all();
        return view('admin.pages.guest.list',compact('AllGuest'));
    }
}
