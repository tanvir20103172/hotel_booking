<?php

namespace App\Http\Controllers\frontend;

use id;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Roomtype;
use App\Models\Amenities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking_room;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
  public function home()
  {
    $allAmenities = Amenities::all();
    $roomtypes = Roomtype::all();

    // dd($rooms);
    // dd($roomtypes);
    return view('frontend.pages.home.home', compact('roomtypes', 'allAmenities'));
  }
  public function room_search(Request $request)
  {
    // dd($request->all());
    $valided = Validator::make($request->all(), [
      'checkin' => 'required',
      'checkout' => 'required'
    ]);

    if ($valided->fails()) {
      notify()->error('Failed');
      return redirect()->back();
    }

    $dates = json_encode($request->except('_token'));
// dd($dates);

    //get all room ids in this date range from booking_rooms
// dd($request->checkout);
    $roomIds=Booking_room::whereBetween('date',[$request->checkin,$request->checkout])->pluck('room_id')->toArray();
// dd($roomIds);
    $rooms = Room::whereNotIn('id',$roomIds)->get();
   
    return view('frontend.pages.search.search', compact('rooms', 'dates'));
  }

  public function about()
  {
    return view('frontend.pages.about.about');
  }

  public function read_more()
  {
    return view('frontend.pages.about.read_more');
  }
  public function our_rooms()
  {
    
    $roomtypes = Roomtype::all();
    return view('frontend.pages.our_room.our_room',compact('roomtypes'));
  }
  public function amenities()
  {
    $allAmenities = Amenities::all();
    return view('frontend.pages.amenities.amenities',compact('allAmenities'));
  }
  public function contuct_us()
  {
    return view('frontend.pages.contuct_us.contuct_us');
  }
  public function contuct_us_store()
  {
    
  }
}
