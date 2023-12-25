<?php

namespace App\Http\Controllers\frontend;

use App\Models\Room;
use App\Models\Booking;
use App\Models\Roomtype;
use App\Models\Amenities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home(){
      $allAmenities=Amenities::all();
      $roomtypes = Roomtype::all();
       
        // dd($rooms);
        // dd($roomtypes);
        return view('frontend.pages.home.home', compact('roomtypes','allAmenities'));
    }
    public function room_search(Request $request){
      //dd($request);
      $valided=Validator::make($request->all(),[
        'checkin'=>'required',
        'checkout'=>'required'
    ]);

    if($valided->fails()){
       notify()->error('Failed');
        return redirect()->back();
    }
     
      $dates=json_encode($request->except('_token'));


      $rooms=Room::all();  
        //dd("habijabi");
        if($request->search){
           $room=Room::where('name','LIKE','%'.$request->search.'%')->get(); 
        }
        else{
          $rooms=Room::all();  
        }
        return view ('frontend.pages.search.search',compact('rooms','dates'));
        
        }
        

        
   
}
