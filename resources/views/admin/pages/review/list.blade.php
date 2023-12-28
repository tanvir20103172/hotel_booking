@extends('admin.master')

@section('content')
<h2>Payment List</h2>
<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Review</th>
      <th scope="col">Action</th>

    </tr>
  </thead>

  @foreach($reviews as $review)
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$review->user->name}}</td>
      <td>{{$review->review}}</td>
      <td>
        <a class="btn btn-success" href="">view</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    
  </tbody>
  @endforeach
</table>





@endsection