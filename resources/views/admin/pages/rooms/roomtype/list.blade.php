@extends('admin.master')

@section('content')
<h1>Room Type</h1>
<a href="{{route('roomtype.form')}}"class="btn btn-success">Add Room Type</a>
<table class="table">
<table class="table table-striped">
  <thead>
    <tr align="center">
      <th scope="col">Id</th>
      <th scope="col">Room Image</th>
      <th scope="col">Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($roomtypes as $key=> $roomtype)
    <tr align="center">
      <th scope="row">{{$key+1}}</th>
      <td>{{$roomtype->room_image}}</td>
      <td>{{$roomtype->name}}</td>
      <td>{{$roomtype->amount}}</td>
      
      <td>
          <a class="btn btn-outline-success" herf=""><h6>Edit</h6></a>
          <a class="btn btn-outline-danger" herf=""><h6>Delete</h6></a>
          <a class="btn btn-outline-primary" herf=""><h6>View</h6></a>
          
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$roomtypes->links()}}
@endsection