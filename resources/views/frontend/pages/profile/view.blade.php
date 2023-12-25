@extends('frontend.partial.master')

@section('rony')
@include('frontend.partial.header')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <img src="{{url('uploads/users',auth()->user()->image)}}" alt="Upload Image" class="rounded-circle" width="150">
                                <div class="middle">
                                    <a class="btn btn-success" href="{{route('web.profile.form',auth()->user()->id)}}">Edit</a>
                                </div>
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">User:- {{auth()->user()->name}}</a></h2>

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Full Name</label>
                        </div>
                        <div class="col-md-8 col-6">
                            {{ auth()->user()->name }}
                        </div>
                    </div>
                    <hr />



                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Email</label>
                        </div>
                        <div class="col-md-8 col-6">
                            {{ auth()->user()->email }}
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Contact Info</label>
                        </div>
                        <div class="col-md-8 col-6">
                            {{ auth()->user()->phone }}
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Role</label>
                        </div>
                        <div class="col-md-8 col-6">
                            {{ auth()->user()->role }}
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Address</label>
                        </div>
                        <div class="col-md-8 col-6">
                            {{ auth()->user()->address }}
                        </div>
                    </div>
                    </hr>



                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                        Facebook, Google, Twitter Account that are connected to this account
                    </div>
                </div>

            </div>


        </div>

    </div>
</div>
</div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">User Id</th>
      <th scope="col">Room Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Adults</th>
      <th scope="col">Children</th>
      <th scope="col">Checkin</th>
      <th scope="col">Checkout</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($bookings as $booking)

<tr align='center'>
<th scope="row">{{$booking->id}}</th>
<td>{{$booking->created_at}}</td>
<td>{{auth()->user()->id}}</td>
<td>{{$booking->room->id}}</td>
<td>{{$booking->name}}</td>
<td>{{$booking->phone}}</td>
<td>{{$booking->adults}}</td>
<td>{{$booking->children}}</td>
<td>{{$booking->checkin}}</td>
<td>{{$booking->checkout}}</td>
<td>{{$booking->status}}</td>
<td>
 @if($booking->status=='pending')
    <a class="btn btn-danger" href="">Cancel Booking</a>
@endif  
</td>
</tr>

@endforeach

  </tbody>
</table>
@include('frontend.partial.footer')
@endsection
