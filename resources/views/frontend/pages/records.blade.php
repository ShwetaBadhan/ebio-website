@extends('frontend.layouts.master')
@section('title', 'Records')
@section('content')

 <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/record.png);">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Our Records</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Our Records</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- start services-section -->
    <section class="services-section">
      <div class="outer-box fix section-padding">
        <div class="outer-container fix">
          <div class="swiper services-slider pb-0">
            <div class="swiper-wrapper">
              <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="200ms">
                <div class="inner-block">
                  <div class="content-box">
                    <div class="inner-box">
                      <div class="icon">
                       
                      </div> <div class="h4 service-title">
                      {{-- <a href="{{ route('record-details') }}"> --}}
                      Exclusive World Records</a></div>
                      <div class="service-details">Dr. Jaswinder Singh, a global pioneer in electropathy and holistic medicine, for achieving Exclusive World Records in 2025</div>
                      {{-- <a class="link-btn-style" href="{{ route('record-details') }}">Read More<i class="flaticon-common-arrow-right1"></i></a> --}}
                    </div>
                  </div>
                  <div class="image">
                    <img src="assets/images/records/1.jpg" alt="">
                    <img src="assets/images/records/1.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-block">
                  <div class="content-box">
                    <div class="inner-box">
                      <div class="icon">
                       
                      </div> <div class="h4 service-title">
                      {{-- <a href="{{ route('record-details') }}"> --}}
                      Indo International Achievers</a></div>
                      <div class="service-details">Dr. Jaswinder Singh, a globally renowned electropathy Expert, for his extraordinary contributions to alternative medicine. </div>
                      {{-- <a class="link-btn-style" href="{{ route('record-details') }}">Read More<i class="flaticon-common-arrow-right1"></i></a> --}}
                    </div>
                  </div>
                  <div class="image">
                    <img src="assets/images/records/2.jpg" alt="">
                    <img src="assets/images/records/2.jpg" alt="">
                  </div>
                </div>
              </div>
             
            </div>
            <div class="services-dot"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end services-section -->

@endsection