<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function list(){
        return view('admin.pages.room.list');
    }
    public function t_form(){
        return view('admin.pages.room.t_form');
    }
    public function type(){
        return view('admin.pages.room.roomtype');
    }
    public function a_form(){
        return view('admin.pages.room.a_form');
    }
    public function store(Request $request){
       dd($request->all()) ;
    }
}

