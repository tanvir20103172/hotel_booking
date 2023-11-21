@extends('frontend.partial.master')

@section('rony')

      <!-- Header -->
      @include('frontend.partial.header')

      <!-- Slider -->
      @include('frontend.partial.slider')

      <!-- about -->
      @include('frontend.partial.about')
      
      <!-- our_room -->
      @include('frontend.partial.rooms')
      
      <!-- gallery -->
      @include('frontend.partial.gallery')

      <!-- blog -->
      @include('frontend.partial.blog')

      <!--  contact -->
      @include('frontend.partial.contact')

      <!--  footer -->
      @include('frontend.partial.footer')

@endsection