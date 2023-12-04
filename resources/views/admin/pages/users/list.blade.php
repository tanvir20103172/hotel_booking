@extends('admin.master')

@section('content')
<h2>User Information</h2>
<a href="{{route('user.form')}}"class="btn btn-success">Add User</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $key=>$user)
    <tr align="center">
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      <td>
      
          <a type="button" href="" class="btn btn-outline-success">Edit</a>
          <a type="button" href=""class="btn btn-outline-danger">Delete</a>
          
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection