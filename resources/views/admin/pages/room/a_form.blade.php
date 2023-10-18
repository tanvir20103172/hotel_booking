@extends('admin.master')
@section('content')

<form action="{{route('roomlist.store')}}" method="post">
 @csrf
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Room Number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="room_number"  placeholder="Enter Room Number">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Type</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            AC
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Non AC
          </label>
        </div>
        
      </div>
    </div>
    
  </fieldset>
    
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection