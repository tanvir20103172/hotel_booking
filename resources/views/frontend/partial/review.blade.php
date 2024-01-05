<div class="container">
  <div class="text-center">
    <h1 >Read Customer Reviews</h1>
    @auth
    <a class="btn btn-primary" href="{{route('web.review')}}">Give Review</a>
    @endauth
  </div>


  @foreach($reviewRatings as $review)
  <div class="container justify-content-center  ">
    <div class=" row">
      <div class="card col-md-4 col-sm-6 mt-2 float-left ">
        <img src="{{url('uploads/users',$review->user->image)}}" class="wpx-100 img-round mgb-20 ">
        <p class="fs-110 font-cond-l" contenteditable="false">"{{$review->review}}"</p>
        <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Guest Name:{{$review->user->name}}</h5>
        <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Role:{{$review->user->role}}</small>
      </div>
    </div>
  </div>

  @endforeach

