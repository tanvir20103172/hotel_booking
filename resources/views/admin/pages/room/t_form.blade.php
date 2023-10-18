@extends('admin.master')
@section('content')

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Room Image</label>
    <input type="file" class="form-control"  > 
  </div>
  
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  placeholder="Input name"> 
  </div>
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="number" class="form-control"  placeholder="Input amount"> 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
@endsection