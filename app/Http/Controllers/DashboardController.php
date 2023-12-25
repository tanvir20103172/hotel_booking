<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $userCount=User::all()->count();
        $roomCount=Room::all()->count();
        $amenitiesCount=Amenities::all()->count();
        return view('admin.pages.dashboard.dashboard',compact('roomCount','userCount','amenitiesCount'));
    }
}
