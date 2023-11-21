<!-- banner -->
<section class="banner_main">
   <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div style="z-index: 1000000; position:absolute; top: 200px; left: 700px; font-family: fantasy">
            <h1 class="text-white display-2">Hotel Sea View</h1>
         </div>
         <div class="carousel-item active">
            <img class="first-slide" src="{{url('frontend/images/banner1.jpg')}}" alt="First slide">
            <div class="container">
            </div>
         </div>
         <div class="carousel-item">
            <img class="second-slide" src="{{url('frontend/images/banner2.jpg')}}" alt="Second slide">
         </div>
         <div class="carousel-item">
            <img class="third-slide" src="{{url('frontend/images/banner3.jpg')}}" alt="Third slide">
         </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>


   <div class="booking_ocline">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <div class="book_room">
                  <h1>Book a Room Online</h1>
                  <form class="book_now">
                     <div class="row">
                        <div class="col-md-12">
                           <span>Arrival</span>
                           <img class="date_cua" src="{{url('frontend/images/date.png')}}">
                           <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                        </div>
                        <div class="col-md-12">
                           <span>Departure</span>
                           <img class="date_cua" src="{{url('frontend/images/date.png')}}">
                           <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                        </div>
                        <div class="col-md-12">
                           <button class="book_btn">Book Now</button>
                        </div>


                     </div>
                  </form>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end banner -->