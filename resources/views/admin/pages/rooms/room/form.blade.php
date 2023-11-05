@extends('admin.master')
@section('content')

<form action="{{route('roomlist.store')}}" method="post" >

  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Room No</label>
    <input type="text" class="form-control" name="room_no" placeholder="Enter room no" required>  
  </div>
  @error('room_no')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  
  <form >
  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
    <input type="text" class="form-control" name="type" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type" required>
  </div>
  @error('type')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">No of Accomodate</label>
    <input type="text" class="form-control" name="no_of_accomodate" placeholder="No of Accomodate" required> 
  </div>
  @error('no_of_accomodate')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
 
  <button type="submit" class="btn btn-primary">Submit</button>
@endsection