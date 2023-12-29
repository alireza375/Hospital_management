<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                
            <li class="menu-title">Menu</li> 

                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i> 
                        <span>Home page</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard-outline"></i> 
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Contacts </span>
                    </a>
                        
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href=Mailto:rbably782@gmail.com>Mail</a></li>                      
                    </ul>
                </li>
                
                <li>
                    {{--  --}}
                    <a href="{{ route('all.user.appointment') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard-outline"></i> 
                        <span>Appoinment</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-3-line"></i>
                        <span>Doctor List </span>
                    </a>
                        
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route ('all.neurology')}}">Neurology</a></li>
                        <li><a href="{{ route ('all.dental')}}">Dental</a></li>                      
                        <li><a href="{{ route ('all.eye_care')}}">Eye Care</a></li>                      
                        <li><a href="{{ route ('all.gynocologist')}}">Gynocologist</a></li>                      

                    </ul>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>