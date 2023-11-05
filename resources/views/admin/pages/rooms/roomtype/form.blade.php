@extends('admin.master')
@section('content')

<form action="{{route('roomtype.store')}}" method="post" >

  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Room Image</label>
    <input type="file" class="form-control" name="room_image" placeholder="Choose file">  
  </div>
  
  <form >
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="number" class="form-control" name="amount" placeholder="Enter amount"> 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
@endsection