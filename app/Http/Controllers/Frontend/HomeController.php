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
}
