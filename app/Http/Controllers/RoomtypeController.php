<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    public function list(){
       $roomtypes=Roomtype::paginate(3);
        return view('admin.pages.rooms.roomtype.list',compact('roomtypes'));
    }
public function form(){
    return view('admin.pages.rooms.roomtype.form');
    }

public function store(Request $request){

    Roomtype::create([
        'room_image'=>$request->room_image,
        'name'=>$request->name,
        'amount'=>$request->amount,
         
       

    ]);
    return redirect()->back();
    } 
}

