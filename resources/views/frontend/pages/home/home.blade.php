@extends('frontend.partial.master')

@section('rony')

      <!-- Header -->
      @include('frontend.partial.header')

      <!-- Slider -->
      @include('frontend.partial.slider')

      <!-- about -->
      @include('frontend.partial.about')
      

      <!-- our_room -->


<div class="our_room">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our Room</h2>

            </div>
         </div>
      </div>
      <div class="row">
      @foreach($roomtypes as $roomtype)
         <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
               <div class="room_img">
                  <figure><img height="30px" src="{{ url('/uploads/rooms/',$roomtype->room_image) }}"></figure>
               </div>
               <div class="bed_room">
                  <h3>{{$roomtype->name}}</h3>
                  <h4>BDT- {{$roomtype->amount}}/-</h4>
                  <a href="{{route('website.roomview',$roomtype->id)}}"class="btn btn-info text-light">View More</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<!-- end our_room -->
 
      <!-- gallery -->
      @include('frontend.partial.gallery')

      <!-- blog -->
      @include('frontend.partial.blog')

      <!--  contact -->
      @include('frontend.partial.contact')

      <!--  footer -->
      @include('frontend.partial.footer')

@endsection