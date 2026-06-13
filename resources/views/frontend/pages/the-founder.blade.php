@extends('frontend.layouts.master')
@section('title', 'The Founder')
@section('content')

  <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/resource/page-title.jpg);">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Biography</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Biography</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

      <!--Team Details Start-->
  <section class="team-details">
    <div class="container pt-120 pb-100">
      <div class="team-details__top pb-70">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__top-left">
              <div class="team-details__top-img"> <img src="assets/images/about/drbio.jpg" alt="">
                <div class="team-details__big-text"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__top-right">
              <div class="team-details__top-content"> <div class="h3 team-details__top-name">Dr. Jaswinder Singh</div>
                <p class="team-details__top-title">Renowned Electropathy/Biopathy Specialist</p>
                <p class="team-details__top-text-1">M.D., B.E.M.S (Electropathy/Biopathy Medicine).</p>
               <p>He is one of the best doctor in electropathy who earns a noteworthy position worldwide. He became pretty famous by treating thousands of Autism/ADHD, Brain Disorder and even Cancer patients through his own invented Electropathy and Biopathy medicine with 0% side effects.
</p>
                <div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="team-details__bottom pt-100">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__bottom-left"> <div class="h4 team-details__bottom-left-title">Personal Experience</div>
              <p class="team-details__bottom-left-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__bottom-right">
              <div class="team-details__progress">
                <div class="team-details__progress-single"> <div class="h4 team-details__progress-title">Tecnology</div>
                  <div class="bar">
                    <div class="bar-inner count-bar" data-percent="90%">
                      <div class="count-text">90%</div>
                    </div>
                  </div>
                </div>
                <div class="team-details__progress-single"> <div class="h4 team-details__progress-title">Marketing</div>
                  <div class="bar">
                    <div class="bar-inner count-bar" data-percent="80%">
                      <div class="count-text">80%</div>
                    </div>
                  </div>
                </div>
                <div class="team-details__progress-single"> <div class="h4 team-details__progress-title">Business</div>
                  <div class="bar marb-0">
                    <div class="bar-inner count-bar" data-percent="75%">
                      <div class="count-text">75%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Team Details End--> 

  <!--Contact Details Start-->
  <section class="team-contact-form">
    <div class="container pt-120 pb-120">
      <div class="sec-title text-center"> <div class="h2 section-title__title">Feel Free to Write Our <br /> Tecnology Experts</div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" class="" action="https://html.kodesolution.com/2026/fertilys-html/includes/sendmail.php" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
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
              <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
            </div>
            <div class="mb-3 text-center">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="theme-btn btn-style-four" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
              <button type="reset" class="theme-btn btn-style-four"><span class="btn-title">Reset</span></button>
            </div>
          </form>
          <!-- Contact Form Validation-->
        </div>
      </div>
    </div>
  </section>
  <!--Contact Details End-->

@endsection