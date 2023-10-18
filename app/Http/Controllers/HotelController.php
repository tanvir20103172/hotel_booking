<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function list(){
        return view('admin.pages.hotel.list');
    }
    public function form(){
        return view('admin.pages.hotel.form');
    }
    public function store(Request $request){
       dd($request->all());
    }
}
