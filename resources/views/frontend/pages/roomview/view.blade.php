@extends('frontend.partial.master')

@section('rony')
@include('frontend.partial.header')



<div class="container">
  <div class="row mt-5">
    
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="{{url('/uploads/rooms/',$Roomtype->room_image)}}" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Room Name: {{$Roomtype->name}}</h4>
          <p class="card-text">Ammount: BDT- {{$Roomtype->amount}}/-</p>
          <a href="" class="col-12 btn btn-primary">Booking Now</a>
        </div>
      </div>
    
    </div>


    <div class="col-md-3"></div>
  </div>
</div>


<!--  footer -->
@include('frontend.partial.footer')
@endsection