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
                <div class="features-block col-xl-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class="flaticon-set-research"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('autism') }}">Autism</a></div>
                        <div class="features-details" align="justify">Autism, or Autism Spectrum Disorder (ASD), is a
                            complex
                            neurodevelopmental condition that affects how a person communicates, behaves, and interacts with
                            others.</div>
                        <div class="btn-view-details"><a href="{{ route('autism') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-consultation"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('adhd') }}">ADHD</a></div>
                        <div class="features-details" align="justify">We combine evidence-based ADHD care with
                            compassionate, personalized
                            support. Our experienced specialists have helped children, adolescents, and adults better
                            understand .</div>
                        <div class="btn-view-details"><a href="{{ route('adhd') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-consultation"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('speech-disorder') }}">Speech Disorder</a></div>
                        <div class="features-details" align="justify">We combine evidence-based speech therapy techniques
                            with
                            compassionate, child-centered care. Our experienced speech-language therapists help children
                        </div>
                        <div class="btn-view-details"><a href="{{ route('speech-disorder') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-consultation"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('behaviour-disorder') }}">Behaviour Disorder</a>
                        </div>
                        <div class="features-details" align="justify">We combine proven behavioral intervention strategies
                            with
                            compassionate, individualized care. Our experienced behavioral specialists help children develop

                        </div>
                        <div class="btn-view-details"><a href="{{ route('behaviour-disorder') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-patient"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('cerebral-palsy') }}">Cerebral Palsy</a></div>
                        <div class="features-details" align="justify">Our dedicated Cerebral Palsy care focuses on improving
                            mobility,
                            independence, and overall well-being. Through.</div>
                        <div class="btn-view-details"><a href="{{ route('cerebral-palsy') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="1000ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-medical-team"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('paralysis') }}">Paralysis</a></div>
                        <div class="features-details" align="justify">Our Paralysis Care Program offers personalized
                            rehabilitation, advanced therapies, and expert medical support to help .</div>
                        <div class="btn-view-details"><a href="{{ route('paralysis') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-blood-test"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('diabetes') }}">Diabetes</a></div>
                        <div class="features-details" align="justify">Our expert diabetes care combines advanced medical
                            treatment with
                            personalized lifestyle support to help patients manage blood sugar.</div>
                        <div class="btn-view-details"><a href="{{ route('diabetes') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6  mb-4 wow fadeInUp" data-wow-delay="1400ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-health-check"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('lung-diseases') }}">Lung Diseases</a></div>
                        <div class="features-details" align="justify">Our expert lung care services offer advanced
                            diagnosis and
                            personalized treatment for respiratory conditions, helping patients improve.</div>
                        <div class="btn-view-details"><a href="{{ route('lung-diseases') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>
                <div class="features-block col-xl-3 col-md-6 wow mb-4 fadeInUp mb-4" data-wow-delay="800ms">
                    <div class="inner">
                        <div class="shape"></div>
                        <div class="icon">
                            <i aria-hidden="true" class=" flaticon-set-healthcare"></i>
                        </div>
                        <div class="h4 features-title"><a href="{{ route('cancer-treatment') }}">Cancer Care Center</a>
                        </div>
                        <div class="features-details" align="justify">Our Cancer Care Center offers advanced, personalized
                            treatment for a
                            wide range of cancers. Combining expert medical care with compassionate support, we help
                            patients navigate every stage of their cancer journey with confidence and dignity.</div>
                        <div class="btn-view-details"><a href="{{ route('cancer-treatment') }}"
                                class="btn btn-plain-text-with-arrow-right">Read More</a></div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- end feature-section -->


@endsection
