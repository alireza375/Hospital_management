@extends('frontend.main_master')
@section('main')

@section('title')
Home | Mico Hospital
@endsection

@php
$date = date('d-F-Y')

@endphp
  
<!-- treatment section -->
<section class="treatment_section layout_padding" id ="treatment">
  <div class="side_img">
    <img src="{{asset ('frontend\assets\images/treatment-side-img.jpg')}}" alt="">
  </div>
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Hospital <span>Treatment</span>
      </h2>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="box ">
          <div class="img-box">
            <img src="{{asset ('frontend\assets\images/t1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Nephrologist Care
            </h4>
            <p>
            A nephrologist is a doctor with expertise in the care of kidneys. 
            Your kidneys are part of your urinary system. They're bean-shaped organs that filter your blood and remove waste, which leave your body as urine (pee).
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="box ">
          <div class="img-box">
            <img src="images/t2.png" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Eye Care
            </h4>
            <p>
              Your eyes are an important part of your health. Most people rely on their eyes to see and 
              make sense of the world around them.  You should get your eyes checked as often as your health care provider recommends it. 
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="box ">
          <div class="img-box">
            <img src="{{asset ('frontend\assets\images/t3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Pediatrician Clinic
            </h4>
            <p>
              A Pediatrician is a child's physician who provides preventive health maintenance for healthy children, medical care for children who are acutely ill.
              </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="box ">
          <div class="img-box">
            <img src="{{asset ('frontend\assets\images/t4.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Parental Care
            </h4>
            <p>
              Parental care is a suite of offspring-directed behaviors demonstrated by adults (or sub-adult alloparents), which may have direct consequences for the survival, growth, and psychosocial development of offspring.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end treatment section -->

<style>
  .team_section .team-carousel {
  margin-top: 45px !important;
  padding: 0 45px !important;
}

.team_section .team-carousel .owl-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex !important;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-top: 20px !important;
}

.team_section .team-carousel .owl-nav button {
  position: absolute;
  top: 50%;
  width: 50px;
  height: 50px;
  background-color: #ffffff;
  outline: none;
  color: #000000;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  font-size: 28px;
  font-weight: bold;
}

.team_section .team-carousel .owl-nav button:hover {
  background-color: #252525;
  color: #ffffff;
}

.team_section .team-carousel .owl-nav button.owl-prev {
  left: -25px;
}

.team_section .team-carousel .owl-nav button.owl-next {
  right: -25px;
}
</style>

<!-- Team Start -->
<section class="team_section layout_padding" id="doctor">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our <span>Doctors</span>
      </h2>
    </div>
    <div class="carousel-wrap ">
      <div class="owl-carousel team-carousel">
        @foreach($doctors as $doc)
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img class="img-fluid" src="{{asset ($doc->image)}}" alt="">
            </div>
            <div class="detail-box">
              <div class="text-center p-4">
                <h5 class="mb-0">{{$doc->name}}</h5><br>
                <h6>{{$doc->department}}</h6>
              </div>
            </div>
          </div>
        </div> 
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- Team End -->

<!-- contact section -->
<section class="contact_section layout_padding-bottom" id="contact">
  <div class="container">
    <div class="heading_container">
      <h2>
        Get In Touch
      </h2>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="form_container">
          <form action="">
            <div>
              <input type="text" placeholder="Full Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="btn_box">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-5">
        <div class="img-box">
          <img src="{{('frontend\assets\images/contact-img.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->

<!-- info section -->
<section class="info_section " id ="about">
  <div class="container">
    <div class="info_top">
      <div class="info_logo">
        <a href="">
          <img src="{{asset ('frontend\assets\images/logo.png')}}" alt="">
        </a>
      </div>
    </div>
    <div class="info_bottom layout_padding2">
      <div class="row info_main_row">
        <div class="col-md-6 col-lg-3">
          <h5>
            Address
          </h5>
          <div class="info_contact">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                12 KDA street, Khulna Bangladesh
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +01 1234567890
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>
                micohospital@gmail.com
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_links">
            <h5>
              Useful link
            </h5>
            <div class="info_links_menu">
              <a class="active" href="">
                Home
              </a>
              <a href="#about">
                About
              </a>
              <a href="#treatment">
                Treatment
              </a>
              <a href="#doctor">
                Doctors
              </a>
              <a href="#appoinment">
                Appoinment
              </a>
              <a href="#contact">
                Contact us
              </a>
            </div>
          </div>
        </div>
        <!--  -->
        {{-- <div class="col-md-6 col-lg-3">
          <div class="info_post">
            <h5>
              News
            </h5>
            <div class="post_box">
              <div class="img-box">
                <img src="{{asset ('frontend\assets\images/post3.jpg')}}" alt="">
              </div>
              <p>
                Normal
                distribution
              </p>
            </div>
            <div class="post_box">
              <div class="img-box">
                <img src="{{asset ('frontend\assets\images/post4.png')}}" alt="">
              </div>
              <p>
                Normal
                distribution
              </p>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
</section>
<!-- end info_section -->

@endsection