@extends('admin.master')
@section('content')

<form action="{{route('amenities.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Amenities Type</label>
    <input type="text" class="form-control" name="amenities"  placeholder="Enter Amenities">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection