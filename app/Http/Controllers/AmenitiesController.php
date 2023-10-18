<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    public function list(){
        return view('admin.pages.amenities.list');
    }
    public function form(){
        return view('admin.pages.amenities.form');
    }
    public function store(Request $request){
        dd($request->all());
    }
}
