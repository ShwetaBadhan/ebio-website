@extends('frontend.layouts.master')
@section('title', 'Record Details')
@section('content')

   <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Record Details</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Record Details</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--Project Details Start-->
    <section class="project-details pt-120">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="project-details__top">
              <div class="project-details__img"> <img src="assets/images/records/1.jpg" alt=""> </div>
            </div>
          </div>
        </div>
        <div class="project-details__content">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="project-details__content-left"> <div class="h3 mb-4">Exclusive World Records</div>
                <p class="">Dr. Jaswinder Singh, a global pioneer in electropathy and holistic medicine, for achieving Exclusive World Records in 2025 - a testament to his unparalleled contributions to alternative and integrative healthcare.</p>
                <p class="mb-5">As the driving force behind E-BIO-CARES, he has redefined medical possibilities, proving that dedication, research, and compassion can push the boundaries of what was once deemed incurable. His tireless efforts in training, education, and medical research have not only enhanced patient care but also paved the way for future generations of holistic healers.</p>
                <p class="mb-5">This prestigious world record achievement acknowledges Dr. Jaswinder Singh's extraordinary impact on global health, his commitment to excellence, and his unwavering belief in the power of electropathy to transform lives.</p>
              </div>
            </div>
           
          </div>
        </div>
       
      </div>
    </section>
    <!--Project Details End-->

@endsection