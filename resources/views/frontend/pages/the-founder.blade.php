@extends('frontend.layouts.master')
@section('title', 'The Founder')
@section('content')

  <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/the-founder.png);">
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
                <p class="team-details__top-text-1">B.E.M.S , M.D.</p>
               <p>He is one of the best doctor in electropathy who earns a noteworthy position worldwide. He became pretty famous by treating thousands of Autism/ADHD, Brain Disorder and even Cancer patients through his own invented Electropathy and Biopathy medicine with 0% side effects.
</p>
                {{-- <div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div> --}}

              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </section>
  <!--Team Details End--> 


@endsection