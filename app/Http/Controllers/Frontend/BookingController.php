<?php

namespace App\Http\Controllers\frontend;

use App\Models\Room;
use App\Models\Booking;
use App\Models\Booking_room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
  public function form(Request $request)
  {
    //dd($request);


    $rooms = json_encode(array_filter($request->room_no));

    $dates = json_decode($request->dates, true);
    // dd($dates);
    $checkin = $dates['checkin'];
    $checkout = $dates['checkout'];


    return view('frontend.pages.booking.form', compact('checkin', 'checkout', 'rooms'));
  }
  public function store(Request $request)
  {
    //dd($request);
    $valided = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'adults' => 'required',
      'children' => 'required',
      'checkin' => 'required',
      'checkout' => 'required'
    ]);

    if ($valided->fails()) {
      notify()->error('Failed');
      return redirect()->back();
    }

    $booking = Booking::create([
      'user_id' => auth()->user()->id,

      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
      'adults' => $request->adults,
      'children' => $request->children,
      'checkin' => $request->checkin,
      'checkout' => $request->checkout,
      'transaction_id' => date('YmdHis'),
      'payment_status' => 'pending'

    ]);

    //dd($booking);
    //insert data into booking table

    $rooms = json_decode($request->rooms, true);
    foreach ($rooms as $room) {
      $room_id = explode('_', $room)[1];

      $acctualRoom = Room::find($room_id);
      Booking_room::create([
        'booking_id' => $booking->id,
        'room_id' => $room_id,
        'quantity' => explode('_', $room)[0],
        'sub_total' => $acctualRoom->amount * explode('_', $room)[0],
        'date' => $request->checkin
      ]);
    }



    //insert data booking room

    notify()->success('Booking Successful');
    return redirect()->route('home');
  }

  public function booking_list($id)
  {
    $bookings = Booking::with('booking_room')->where('user_id', auth()->user()->id)->get();

    //dd($bookings);
    return view('frontend.pages.booking.list', compact('bookings'));
  }
  public function cancel_booking($id)
  {
    $bookings = Booking::find($id);
    //dd($bookings);
    if ($bookings) {
      $bookings->update([
        'status' => 'Cancelled'
      ]);
    }
    notify()->success('You cancel the booking');
    return redirect()->back();
  }

  public function payment($booking_id)
  {
    // dd($booking_id);
    $booking_details = Booking::with('booking_room')->find($booking_id) ;
     //dd($booking_details);
    $post_data = array();
    $post_data['total_amount'] = (int)$booking_details->booking_room->sum('sub_total'); # You cant not pay less than 10
    $post_data['currency'] = "BDT";
    $post_data['tran_id'] = $booking_details->transaction_id; // tran_id must be unique

    # CUSTOMER INFORMATION
    $post_data['cus_name'] = 'Customer Name';
    $post_data['cus_email'] = 'customer@mail.com';
    $post_data['cus_add1'] = 'Customer Address';
    $post_data['cus_add2'] = "";
    $post_data['cus_city'] = "";
    $post_data['cus_state'] = "";
    $post_data['cus_postcode'] = "";
    $post_data['cus_country'] = "Bangladesh";
    $post_data['cus_phone'] = '8801XXXXXXXXX';
    $post_data['cus_fax'] = "";

    # SHIPMENT INFORMATION
    $post_data['ship_name'] = "Store Test";
    $post_data['ship_add1'] = "Dhaka";
    $post_data['ship_add2'] = "Dhaka";
    $post_data['ship_city'] = "Dhaka";
    $post_data['ship_state'] = "Dhaka";
    $post_data['ship_postcode'] = "1000";
    $post_data['ship_phone'] = "";
    $post_data['ship_country'] = "Bangladesh";

    $post_data['shipping_method'] = "NO";
    $post_data['product_name'] = "Computer";
    $post_data['product_category'] = "Goods";
    $post_data['product_profile'] = "physical-goods";

    # OPTIONAL PARAMETERS
    $post_data['value_a'] = "ref001";
    $post_data['value_b'] = "ref002";
    $post_data['value_c'] = "ref003";
    $post_data['value_d'] = "ref004";

    $sslc = new SslCommerzNotification();
    # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
    $payment_options = $sslc->makePayment($post_data, 'hosted');

    if (!is_array($payment_options)) {
      print_r($payment_options);
      $payment_options = array();
    }
  }
}
