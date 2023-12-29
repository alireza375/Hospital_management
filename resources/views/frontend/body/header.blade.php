@php
$route = Route::current()->getName();
@endphp

<div class="hero_area">

<!-- header section strats -->
<header class="header_section">
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <img src="images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#treatment">Treatment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#doctor">Doctors</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#appoinment">Appoinment</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            @if(Auth::check())
            @if(Auth::user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Dashboard
              </span>
            </a>
            @elseif(Auth::user()->role === 'user')
            <a href="{{ route('user') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Dashboard
              </span>
            </a>
            @endauth
            @else
            <a href="{{ route('login') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="{{ route('register') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Sign Up
              </span>
            </a>
            
            @endif

            
            
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>

<!-- end header section -->

<!-- slider section -->
<section class="slider_section ">
  <div class="dot_design">
    <img src="images/dots.png" alt="">
  </div>
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Mico <br>
                  <span>
                    Hospital
                  </span>
                </h1>
                <p>
                Feeling a little under the weather but grateful for the care and support of the hospital staff.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="images/slider-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- end slider section -->
</div>