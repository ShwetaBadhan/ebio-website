@extends('frontend.layouts.master')
@section('title', 'Contact Us')
@section('content')

  <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Contact Us</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Contact U</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Contact Details Start-->
  <section class="contact-details">
    <div class="container pt-110 pb-70">
      <div class="row">
        <div class="col-xl-7 col-lg-6">
          <div class="sec-title black">
            <div class="h2">Feel free to write</div>
          </div>
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" action="" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
            </div>
            <div class="mb-5">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="theme-btn btn-style-four" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>

              <button type="reset" class="theme-btn btn-style-four" data-loading-text="Please wait..."><span class="btn-title">Reset</span></button>
              
            </div>
          </form>
          <!-- Contact Form Validation-->
        </div>
        <div class="col-xl-5 col-lg-6">
          <div class="contact-details__right">
            <div class="sec-title black">
              <div class="h2">Get in touch with us</div>
              <div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>
            </div>
            <ul class="list-unstyled contact-details__info">
              <li>
                <div class="icon">
                  <span class="fa-classic fa-light fa-phone-plus"></span>
                </div>
                <div class="text"> <div class="h6 mb-1">Have any question?</div>
                  <a href="tel:919872001445"><span>Free</span> +91 98720-01445</a>
                </div>
              </li>
              <li>
                <div class="icon">
                  <span class="fal fa-envelope"></span>
                </div>
                <div class="text"> <div class="h6 mb-1">Write email</div>
                 <span> info@ebiocares.com</span>
                </div>
              </li>
              <li>
                <div class="icon">
                  <span class="fal fa-location-arrow"></span>
                </div>
                <div class="text"> <div class="h6 mb-1">Visit anytime</div>
                  <span>V.P.O Phoolpur 144026, Near Lambra, Jalandhar(Pb.)India</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Details End-->

  <!-- Map Section-->
  <section class="map-section">
    <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d109221.37461258726!2d75.36409038799117!3d31.188356090276997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x391964aa569e7355%3A0x8fbd263103a38861!2sPunjab!3m2!1d31.1471305!2d75.34121789999999!4m5!1s0xa8123c1222b46f17%3A0x3d6fe4dc89abc523!2sEBio%20Cares%2C%20near%20lambra%2C%20VPO%2C%20Phoolpur%2C%20Jalandhar%2C%20Punjab%20144026!3m2!1d31.254499!2d75.55927989999999!5e0!3m2!1sen!2sin!4v1781331499254!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  <!--End Map Section-->

@endsection