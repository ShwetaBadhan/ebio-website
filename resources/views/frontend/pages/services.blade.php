@extends('frontend.layouts.master')
@section('title', 'Our Services')
@section('content')

  <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/resource/page-title.jpg);">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Our Services</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Our Services</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- start feature-section -->
    <section class="feature-section fix section-padding">
      <div class="auto-container">
        <div class="row gx-3">
          <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
              <div class="shape"></div>
              <div class="icon">
                <i aria-hidden="true" class="flaticon-set-research"></i>
              </div> <div class="h4 features-title"><a href="{{ route('service-details') }}">Autism</a></div>
              <div class="features-details">Autism, or Autism Spectrum Disorder (ASD), is a complex neurodevelopmental condition</div>
              <div class="btn-view-details"><a href="{{ route('service-details') }}" class="btn btn-plain-text-with-arrow-right">Read More</a></div>
            </div>
          </div>
          <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
            <div class="inner">
              <div class="shape"></div>
              <div class="icon">
                <i aria-hidden="true" class=" flaticon-set-patient"></i>
              </div> <div class="h4 features-title"><a href="{{ route('service-details') }}">Cerebral Palsy</a></div>
              <div class="features-details">Our fertility specialists have helped thousands of families achieve their dream.</div>
              <div class="btn-view-details"><a href="{{ route('service-details') }}" class="btn btn-plain-text-with-arrow-right">Read More</a></div>
            </div>
          </div>
          <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="600ms">
            <div class="inner">
              <div class="shape"></div>
              <div class="icon">
                <i aria-hidden="true" class=" flaticon-set-consultation"></i>
              </div> <div class="h4 features-title"><a href="{{ route('service-details') }}">ADHD</a></div>
              <div class="features-details">Our fertility specialists have helped thousands of families achieve their dream.</div>
              <div class="btn-view-details"><a href="{{ route('service-details') }}" class="btn btn-plain-text-with-arrow-right">Read More</a></div>
            </div>
          </div>
          <div class="features-block col-xl-3 col-md-6 wow fadeInUp mb-4" data-wow-delay="800ms">
            <div class="inner">
              <div class="shape"></div>
              <div class="icon">
                <i aria-hidden="true" class=" flaticon-set-healthcare"></i>
              </div> <div class="h4 features-title"><a href="{{ route('service-details') }}">Cancer Treatment</a></div>
              <div class="features-details">Our fertility specialists have helped thousands of families achieve their dream.</div>
              <div class="btn-view-details"><a href="{{ route('service-details') }}" class="btn btn-plain-text-with-arrow-right">Read More</a></div>
            </div>
          </div>
          <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="1000ms">
            <div class="inner">
              <div class="shape"></div>
              <div class="icon">
                <i aria-hidden="true" class=" flaticon-set-medical-team"></i>
              </div> <div class="h4 features-title"><a href="{{ route('service-details') }}">Paralysis</a></div>
              <div class="features-details">Our fertility specialists have helped thousands of families achieve their dream.</div>
              <div class="btn-view-details"><a href="{{ route('service-details') }}" class="btn btn-plain-text-with-arrow-right">Read More</a></div>
            </div>
          </div>
          <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="1200ms">
            <div class="inner">
              <div class="shape"></div>
              <div class="icon">
                <i aria-hidden="true" class=" flaticon-set-blood-test"></i>
              </div> <div class="h4 features-title"><a href="{{ route('service-details') }}">Diabetes</a></div>
              <div class="features-details">Our fertility specialists have helped thousands of families achieve their dream.</div>
              <div class="btn-view-details"><a href="{{ route('service-details') }}" class="btn btn-plain-text-with-arrow-right">Read More</a></div>
            </div>
          </div>
          <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="1400ms">
            <div class="inner">
              <div class="shape"></div>
              <div class="icon">
                <i aria-hidden="true" class=" flaticon-set-health-check"></i>
              </div> <div class="h4 features-title"><a href="{{ route('service-details') }}">Lung Diseases</a></div>
              <div class="features-details">Our fertility specialists have helped thousands of families achieve their dream.</div>
              <div class="btn-view-details"><a href="{{ route('service-details') }}" class="btn btn-plain-text-with-arrow-right">Read More</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end feature-section -->


@endsection