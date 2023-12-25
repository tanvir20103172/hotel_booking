@extends('frontend.partial.master')

@section('rony')

<!-- Header -->
@include('frontend.partial.header')



<form action="{{route('web.booking.form')}}" method="post">
    @csrf
    <input type="hidden" value="{{$dates}}" name="dates">

<div class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Room List</h2>

                </div>
            </div>
        </div>
        <div class="row">
            @foreach($rooms as $room)
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img height="30px" src="{{ url('/uploads/rooms/',$room->image) }}"></figure>
                    </div>
                    <div class="bed_room">
                        <h3>{{$room->room_name}}</h3>
                        <h4>BDT- {{$room->amount}}/-</h4>
                        <h4>Room No- {{$room->room_no}}</h4>
                        <p class="card-text">Room Type: AC </p>
                        <p class="card-text">Max: 2 preson </p>
                        <p class="card-text">Size: 45m<sup>2</sup></p>
                        <p class="card-text">View: Sea View</p>
                        <p class="card-text">Bed:1</p>
                        <label for="cars">Select Room:</label>
                        <select id="cars" name="room_no[]">
                            <option value="">Select Nummber of room</option>
                            <option value="1_{{$room->id}}">01</option>
                            <option value="2_{{$room->id}}">02</option>
                            <option value="3_{{$room->id}}">03</option>
                            <option value="4_{{$room->id}}">04</option>
                        </select>
                    </div>
                    <div>

                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <!-- <a href="" class=" col-2 btn btn-info text-light container" >Booking Now</a> -->
        <button class="btn btn-success" type="submit">Book Now</button>
    </div>
</div>
</form>
<!--  footer -->
@include('frontend.partial.footer')

@endsection