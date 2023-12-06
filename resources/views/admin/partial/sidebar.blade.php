        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-solid fa-bell-concierge" style="color: #000000;"></i>  
                </div>
                <div class="sidebar-brand-text mx-3">Hotel Sea View</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/dashboard')}}">
                <i class="fa-solid fa-gauge" style="color: #000000;"></i>
                    <span><b>Dashboard  </b></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('user.list')}}">
                <i class="fa-solid fa-user" style="color: #000000;"></i>
                    <span><b>User</b></span></a>
            </li>
           
            <li class="nav-item active">
                <a class="nav-link" href="{{route('guest')}}">    
                <i class="fa-solid fa-users" style="color: #000000;"></i>
                    <span><b>Guest </b> </span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="{{route('hotel')}}">
                <i class="fa-solid fa-hotel" style="color: #000000;"></i>
                    <span><b>Hotel  </b></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('room.list')}}">
                <i class="fa-solid fa-house-chimney" style="color: #000000;"></i>
                    <span><b>Rooms </span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="{{route('roomtype.list')}}">
                <i class="fa-solid fa-house-chimney" style="color: #000000;"></i>
                    <span><b>Rooms Type </b></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/amenities/list')}}">
                <i class="fa-solid fa-arrows-to-eye" style="color: #000000;"></i>
                    <span><b>Amenities </b></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('booking.list')}}">
                <i class="fa-solid fa-key" style="color: #000000;"></i>
                    <span> <b>Booking </b></span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="{{route('payment.list')}}">
                <i class="fa-solid fa-money-bill" style="color: #000000;"></i>
                    <span> <b>Payment </b></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('report')}}">
                <i class="fa-solid fa-file" style="color: #000000;"></i>
                    <span> Report </b></span></a>
            </li>
   



           

            

           

            

            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->