<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Roomtype;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $roomtypes = Roomtype::all();
        // dd($roomtypes);
        return view('frontend.pages.home.home', compact('roomtypes'));
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
