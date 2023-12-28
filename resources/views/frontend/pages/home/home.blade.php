@extends('frontend.partial.master')

@section('rony')

      <!-- Header -->
      @include('frontend.partial.header')

      <!-- Slider -->
      @include('frontend.partial.slider')

      <!-- about -->
      @include('frontend.partial.about')

      <!-- our rooms -->
      @include('frontend.partial.rooms')      
 
      <!-- gallery -->
      @include('frontend.partial.roomlist')

      <!-- blog -->
      @include('frontend.partial.amenities')

      <!--  contact -->
      @include('frontend.partial.contact')

      <hr>

      <!--  review -->
      @include('frontend.partial.review')

      <hr>

      <!--  footer -->
      @include('frontend.partial.footer')

@endsection