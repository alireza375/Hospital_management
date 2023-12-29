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
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
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
                

                <li class="menu-title">Page</li> 

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-3-line"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{--  --}}
                        <li><a href="{{ route('all.user') }}">All Users</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-3-line"></i>
                        <span>Doctors</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.doctor') }}">All Doctors</a></li>
                        <li><a href="{{ route('add.doctor') }}">Add Doctor</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-3-line"></i>
                        <span>Patients</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.patient') }}">All Patients</a></li>
                        <li><a href="{{ route('add.patient') }}">Add Patient</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-3-line"></i>
                        <span>Staffs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.staff') }}">All Staffs</a></li>
                        <li><a href="{{ route('add.staff') }}">Add Staff</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Appoinment </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.appointment') }}">All Appoinments</a></li>
                        {{-- <li><a href="{{ route('add.appointment') }}">Add Appoinment</a></li> --}}
                        
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>