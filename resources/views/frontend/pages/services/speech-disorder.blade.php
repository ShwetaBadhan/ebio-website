@extends('frontend.layouts.master')
@section('title', 'Speech Disorder')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">Speech Disorder</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Speech Disorder </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side Form -->
                <div class="col-lg-5">

                    <div class="breadcrumb-form">
                      @include('frontend.components.service-form')
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end main-content -->


    <!--Start Services Details-->
    <section class="services-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <div class="service-sidebar">
                        <!--Start Services Details Sidebar Single-->
                        <div class="sidebar-widget service-sidebar-single">

                            <div class="sidebar-service-list">
                                @include('frontend.components.service-sidebar')
                            </div>

                            <div class="service-details-help">
                                @include('frontend.components.sidebar-details')
                            </div>

                        </div>
                        <!--End Services Details Sidebar-->
                    </div>
                </div>

                <!--Start Services Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img class="w-100" src="assets/images/services/autisum.png" alt="" />
                        <div class="h3 mt-4">Speech Disorder</div>
                        <p>Speech disorders can affect a child's ability to speak clearly, communicate effectively, and express thoughts with confidence. Difficulties may include speech delay, unclear pronunciation, stammering, or language development challenges. Early speech therapy helps improve communication, confidence, and social interaction.</p>
                        <p>At our center, we provide comprehensive speech and language assessments along with personalized speech therapy programs. Our experienced speech therapists help children develop clear speech, language skills, and effective communication for success at home, school, and in everyday life.</p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>At Ebiocare, our personalized speech therapy programs help children develop clear communication, expressive language, and confidence through evidence-based intervention and compassionate care.</p>
                              
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                         <div class="h5">Attention & Learning Enhancement</div>
                                        <p>We help children improve focus, concentration, listening skills, task completion, and academic performance through structured activities and individualized therapeutic strategies designed to support learning and development.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                        <div class="h5">Behavioral & Emotional Development</div>
                                        <p>Our programs focus on improving self-regulation, impulse control, emotional management, social interactions, and organizational skills, helping children build stronger relationships and succeed at home, school, and in the community.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mt-25">
                            <div class="h3">Frequently Asked Question</div>
                            {{-- <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem
                                ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p> --}}
                            <ul class="accordion-box">
                                <!--Block-->
                                  <li class="accordion block">
                                    <div class="acc-btn">What is a Speech Disorder?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">A speech disorder is a condition that affects a child's ability to speak clearly, pronounce words correctly, or communicate effectively. It may involve speech delay, stammering, voice disorders, or language difficulties.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">What are the signs of a Speech Disorder?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Common signs include delayed speech, unclear pronunciation, stammering, difficulty understanding or expressing language, and trouble communicating with others.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can speech disorders be treated?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Yes. With early diagnosis and personalized speech therapy, many children can improve their communication, language development, and speech clarity.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How is a Speech Disorder diagnosed?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">A speech disorder is diagnosed through a comprehensive speech and language assessment conducted by a qualified speech-language therapist.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What treatments are available for Speech Disorders?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Treatment may include speech therapy, language intervention, articulation therapy, fluency therapy, voice therapy, and parent-guided communication strategies based on the child's needs.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can children with Speech Disorders communicate effectively?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Yes. With consistent therapy and family support, most children develop stronger communication skills and gain confidence in everyday interactions.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>
    <!--End Services Details-->






@endsection
