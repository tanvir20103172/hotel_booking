<?php

namespace App\Http\Controllers\frontend;

use App\Models\Room;
use App\Models\Booking;
use App\Models\Booking_room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function form(Request $request){
        //dd($request);

        
        $rooms = json_encode(array_filter( $request->room_no));
       
        $dates=json_decode($request->dates,true);
        // dd($dates);
        $checkin=$dates['checkin'];
        $checkout=$dates['checkout'];

        
        return view('frontend.pages.booking.form',compact('checkin','checkout','rooms'));
    }
    public function store(Request $request){
      //dd($request);
      $valided=Validator::make($request->all(),[
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'adults'=>'required',
        'children'=>'required',
        'checkin'=>'required',
        'checkout'=>'required'
    ]);

    if($valided->fails()){
       notify()->error('Failed');
        return redirect()->back();
    }
       
       $booking=Booking::create([
            'user_id'=>auth()->user()->id,
           
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'adults'=>$request->adults,
            'children'=>$request->children,
            'checkin'=>$request->checkin,
            'checkout'=>$request->checkout,

        ]);
        
           //dd($booking);
          //insert data into booking table

        $rooms=json_decode($request->rooms,true);
        foreach($rooms as $room)
        {
            $room_id=explode('_',$room)[1];
            
            $acctualRoom=Room::find($room_id);
            Booking_room::create([
                'booking_id'=>$booking->id,
                'room_id'=>$room_id,
                'quantity'=>explode('_',$room)[0],
                'sub_total'=>$acctualRoom->amount * explode('_',$room)[0],
                'date'=>$request->checkin
              ]);
        }


  
          //insert data booking room
  
        notify()->success('Booking Successful');
        return redirect()->route('home');
    }
   
        
}
