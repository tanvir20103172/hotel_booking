<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RoomController extends Controller
{
    
       public function list(){
              $rooms=Room::paginate(3);
               return view('admin.pages.rooms.room.list',compact('rooms'));
           }
        public function form(){
          return view('admin.pages.rooms.room.form');
}
       public function store(Request $request){
              $valided=Validator::make($request->all(),[
                     'room_no'=>'required',
                     'type'=>'required',
                     'no_of_accomodate'=>'required'
                 ]);
         
                 if($valided->fails()){
                     return redirect()->back()->witherrors($valided);
                 }
                 
         
                 Room::create([
                     'room_no'=>$request->room_no,
                     'type'=>$request->type,
                     'no_of_accomodate'=>$request->no_of_accomodate,
                     'action'=>$request->action
         
                 ]);
                 // notify()->success('Laravel Notify is awesome!');
                 return redirect()->back()->witherrors($valided);
       } 
}