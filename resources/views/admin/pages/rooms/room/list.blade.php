@extends('admin.master')

@section('content')
<h1>Room List</h1>
<a href="{{route('roomlist.form')}}"class="btn btn-success">Add Room </a>
<table class="table">
<table class="table table-striped">
  <thead>
    <tr align="center">
      <th scope="col">Id</th>
      <th scope="col">Room No</th>
      <th scope="col">Type</th>
      <th scope="col">No of Accomodate</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($rooms as $key=> $room)
    <tr align="center">
      <th scope="row">{{$key+1}}</th>
      <td>{{$room->room_no}}</td>
      <td>{{$room->type}}</td>
      <td>{{$room->no_o_accomodate}}</td>
      
      <td>
          <a class="btn btn-outline-success" herf=""><h6>Edit</h6></a>
          <a class="btn btn-outline-danger" herf=""><h6>Delete</h6></a>
          <a class="btn btn-outline-primary" herf=""><h6>View</h6></a>
          
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$rooms->links()}}
@endsection