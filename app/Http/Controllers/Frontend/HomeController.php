<?php

namespace App\Http\Controllers\frontend;

use App\Models\Room;
use App\Models\Roomtype;
use App\Models\Amenities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
      $allAmenities=Amenities::all();
        $roomtypes = Roomtype::all();
        // dd($roomtypes);
        return view('frontend.pages.home.home', compact('roomtypes','allAmenities'));
    }
    public function search(Request $request){
        //dd("habijabi");
        if($request->search){
           $roomtypes=Roomtype::where('name','LIKE','%'.$request->search.'%')->get(); 
        }
        else{
          $roomtypes=Roomtype::all();   
        };
        return view ('frontend.pages.home.home',compact('roomtypes'));
        }
}
