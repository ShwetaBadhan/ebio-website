@extends('frontend.layouts.master')
@section('title', 'Achievements')
@section('content')

<!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/award.png);">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Achievements At Glance</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Achievements</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- start blog-section -->
    <section class="blog-section fix section-padding pt-100">
      <div class="auto-container">
        <div class="row gx-4">
          <div class="col-xl-4 col-md-6">
            <div class="blog-block wow fadeInUp" data-wow-delay="200ms">
              <div class="thumb">
                <img src="assets/images/awards/csr-award.jpg" alt="">
                <img src="assets/images/awards/csr-award.jpg" alt="">
                {{-- <span class="date">06</span> --}}
              </div>
              <div class="content"> <div class="h4 entry-title">
              {{-- <a href="{{ route('award-details') }}"> --}}
              Indian CSR Award</a></div>
                <div class="mascot-post-excerpt">In recognition of his exceptional contributions to healthcare and social responsibility,</div>
                {{-- <a href="{{ route('award-details') }}" class="link-btn">Read More<i class="fa fa-arrow-right"></i></a> --}}
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="blog-block wow fadeInUp" data-wow-delay="400ms">
              <div class="thumb">
                <img src="assets/images/awards/national-health-education.jpg" alt="">
                <img src="assets/images/awards/national-health-education.jpg" alt="">
                {{-- <span class="date">05</span> --}}
              </div>
              <div class="content"> <div class="h4 entry-title">
              {{-- <a href="{{ route('award-details') }}"> --}}
              National Health Care Award</a></div>
                <div class="mascot-post-excerpt">We are immensely proud to announce that Dr. Jaswinder Singh, a globally renowned</div>
                {{-- <a href="{{ route('award-details') }}" class="link-btn">Read More<i class="fa fa-arrow-right"></i></a> --}}
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="blog-block wow fadeInUp" data-wow-delay="600ms">
              <div class="thumb">
                <img src="assets/images/awards/IMG_4468.jpg" alt="">
                <img src="assets/images/awards/IMG_4468.jpg" alt="">
                {{-- <span class="date">04</span> --}}
              </div>
              <div class="content"> <div class="h4 entry-title">
              {{-- <a href="{{ route('award-details') }}"> --}}
              International Award Summit 2025</a></div>
                <div class="mascot-post-excerpt">Dr. Jaswinder Singh, a globally renowned expert in electropathy Medicine</div>
                {{-- <a href="{{ route('award-details') }}" class="link-btn">Read More<i class="fa fa-arrow-right"></i></a> --}}
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <!-- end blog-section -->

@endsection