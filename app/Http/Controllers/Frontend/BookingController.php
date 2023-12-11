<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking($Roomtypeid){
        Booking::create([
                'user_id'=>auth()->user()->id,
                'roomtype_id'=>$Roomtypeid,
        ]);  
        notify()->success('Booking Successful');
        return redirect()->back();
    }
}
