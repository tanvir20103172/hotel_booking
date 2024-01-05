<footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('web.about')}}"> about</a></li>
                        <li><a href="{{route('web.room')}}">Our Room</a></li>
                        <li><a href="{{route('web.amenities')}}">Amenity</a></li>
                        <li><a href="{{route('web.contuct')}}">Contact Us</a></li>
                        @guest
                        <li><a href="{{route('website.login')}}">Login</a></li>
                        <li><a href="{{route('website.registration')}}">Registration</a></li>
                        @endguest
                        @auth
                        <li><a href="{{route('web.profile',auth()->user()->id)}}"> My Profile</a></li>
                        <li><a href="{{route('web.booking.list',auth()->user()->id)}}"> Booking List</a></li>
                        <li><a href="{{route('web.logout')}}"> Logout</a></li>
                        @endauth
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © 2023 All Rights Reserved. Md. Tanvir Ahammad 
                        <br><br>
                        Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
   </footer>