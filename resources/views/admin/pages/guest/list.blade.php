@extends('admin.master')

@section('content')
<h1>Guest Information</h1>

<table class="table">
  <thead>
    <tr align="center">
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Contuct Number</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($AllGuest as  $key=>$Guest)
    <tr align="center">
      <th scope="row">{{$key+1}}</th>
      <td>{{$Guest->first_name}}</td>
      <td>{{$Guest->last_name}}</td>
      <td>{{$Guest->contuct_number}}</td>
      <td>{{$Guest->email}}</td>
     
      <td>
          <a href="" type="button" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">View</a>
          <a href="" type="button" class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection