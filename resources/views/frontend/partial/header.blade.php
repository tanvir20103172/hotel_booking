<!-- loader  -->
<div class="loader_bg">
   <div class="loader"><img src="{{url('frontend/images/loading.gif')}}" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
   <!-- header inner -->
   <div class="header">
      <div class="container">
         <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
               <div class="full">
                  <div class="center-desk">
                     <h1 class="text-center">Hotel Sea View</h1>
                  </div>
               </div>
            </div>
      
             <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col">
             <form action="{{route('website.search')}}" method="get">
               <div class="input-group">
                  <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                  <button type="submit" class="btn btn-sm btn-outline-primary" data-mdb-ripple-init>search</button>
               </div>
               </form>
             </div>
           
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
               <nav class="navigation navbar navbar-expand-md navbar-dark ">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsExample04">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="room.html">Our room</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        @guest
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('website.login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('website.registration')}}">Registration</a>
                        </li>
                        @endguest

                        @auth
                        <li class="nav-item">
                           <a class="nav-link" href="">Logout</a>
                        </li>
                        @endauth
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- end header inner -->
<!-- end header -->