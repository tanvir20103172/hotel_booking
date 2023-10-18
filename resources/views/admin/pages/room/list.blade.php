@extends('admin.master')
@section('content')

<h2>Room List </h2>
<a href="{{url('/room/list/form')}}" class="btn btn-success">Add Room</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rana</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Kobita</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    
  </tbody>
</table>

@endsection