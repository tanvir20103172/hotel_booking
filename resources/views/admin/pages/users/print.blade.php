@extends('admin.master')

@section('content')
<h2>User Information</h2>

<table class="table">
  <thead>
    <tr align="center">
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($users as $key=>$user)
    <tr align="center">
      <th scope="row">{{$key+1}}</th>
      <td>
        <img style="border-radius: 50%;" height="40" width="40" src="{{url('uploads/users',$user->image)}}" alt="">
      </td>
      <td>{{$user->name}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
      
    </tr>
    @endforeach
    <button class="btn btn-success" onclick="printlist()">Print List</button>
    <script>
    function printlist() {
        window.print();
    }
    </script>
  </tbody>
</table>

@endsection