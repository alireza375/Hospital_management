

<!-- header section strats -->
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="logo-box">
                <a href="#" class="logo logo-dark text-center">
                </a>
            <div class="text-center mt-4">
                <div class="mb-3">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" height="82"
                        class="logo-dark mx-auto" alt="">
                </div>
            </div>
        </div>

    </div>

        <div class="d-flex">

            @php
            $id = Auth::user()->id;
            $userData = App\Models\User::find($id);
            @endphp 

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ (!empty($userData->photo)) ? url('upload/user_image/'.$userData->photo) : url('upload/no_image.jpg') }}"
                        alt="">
                    <span class="d-none d-xl-inline-block ms-1">{{ $userData->name }}
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </span>
                </button>

                <div class="dropdown-menu dropdown-menu-end">
               
                    <i class="ri-user-line align-middle me-1 "></i>Account</a>
                           
                    <a class="dropdown-item" href="{{ route('user.profile') }}">
                        <i class="fa fa-user" aria-hidden="true"></i> My Profile</a>

                    <a class="dropdown-item" href="{{ route('user.change.password') }}">
                        <i class="fa fa-key"></i> Change Password</a>
   
                    <a class="dropdown-item" href="{{ route('edit.profile') }}">
                        <i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                    
                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}">
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- end header section -->
