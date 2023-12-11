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




            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
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
                           <a class="nav-link" href="gallery.html">Amenities</a>
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
                        <div class="list-inline-item me-5">
                           <h3><b><a href="{{route('web.profile',auth()->user()->id)}}" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                       <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                       <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <p></p>({{auth()->user()->role}})
                                 </a></b></h3>
                        </div>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('web.logout')}}">Logout</a>
                        </li>
                        @endauth
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col">
               <form action="{{route('website.search')}}" method="get">
                  <div class="input-group">
                     <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                     <button type="submit" class="btn btn-sm btn-outline-primary" data-mdb-ripple-init>search</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</header>





<!-- end header inner -->
<!-- end header -->