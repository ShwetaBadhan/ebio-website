@extends('frontend.layouts.master')
@section('title', 'Our Services')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/services.png);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <div class="h1 title">Our Services</div>
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
                        </div>
                        <div class="h4 features-title"><a href="{{ route('autism') }}">Autism</a></div>
                        <div class="features-details">Autism, or Autism Spectrum Disorder (ASD), is a complex
                            neurodevelopmental condition</div>
                        <div class="btn-view-details"><a href="{{ route('autism') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-patient"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('cerebral-palsy') }}">Cerebral Palsy</a></div>
                        <div class="features-details">Our fertility specialists have helped thousands of families achieve
                            their dream.</div>
                        <div class="btn-view-details"><a href="{{ route('cerebral-palsy') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-consultation"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('adhd') }}">ADHD</a></div>
                        <div class="features-details">Our fertility specialists have helped thousands of families achieve
                            their dream.</div>
                        <div class="btn-view-details"><a href="{{ route('adhd') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 wow fadeInUp mb-4" data-wow-delay="800ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-healthcare"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('cancer-treatment') }}">Cancer Care Center</a></div>
                        <div class="features-details">Our fertility specialists have helped thousands of families achieve
                            their dream.</div>
                        <div class="btn-view-details"><a href="{{ route('cancer-treatment') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="1000ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-medical-team"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('paralysis') }}">Paralysis</a></div>
                        <div class="features-details">Our fertility specialists have helped thousands of families achieve
                            their dream.</div>
                        <div class="btn-view-details"><a href="{{ route('paralysis') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-blood-test"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('diabetes') }}">Diabetes</a></div>
                        <div class="features-details">Our fertility specialists have helped thousands of families achieve
                            their dream.</div>
                        <div class="btn-view-details"><a href="{{ route('diabetes') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="1400ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-health-check"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('lung-diseases') }}">Lung Diseases</a></div>
                        <div class="features-details">Our fertility specialists have helped thousands of families achieve
                            their dream.</div>
                        <div class="btn-view-details"><a href="{{ route('lung-diseases') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end feature-section -->


@endsection
