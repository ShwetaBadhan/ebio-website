@extends('frontend.layouts.master')
@section('title', 'ADHD')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">ADHD</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>ADHD</li>
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
                        <div class="h3 mt-4">ADHD</div>
                        <p>Attention Deficit Hyperactivity Disorder (ADHD) is a neurodevelopmental condition that affects attention, focus, impulse control, and activity levels. Children with ADHD may experience difficulties with concentration, organization, following instructions, and managing their emotions. With early intervention and the right support, children can develop effective coping strategies and thrive in academic, social, and daily life settings.</p>
                        <p>At our center, we provide comprehensive assessment and personalized intervention programs designed to meet the unique needs of each child. Our experienced professionals work closely with children and families to improve attention skills, behavioral regulation, emotional well-being, and overall development.</p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>Our ADHD intervention programs are tailored to help children improve concentration, manage impulsive behaviors, and develop essential life skills in a positive and encouraging environment.</p>
                              
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
                                    <div class="acc-btn">What is ADHD?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Attention-Deficit/Hyperactivity Disorder (ADHD) is a neurodevelopmental condition that affects attention, focus, impulse control, and activity levels.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">What are the signs of ADHD?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Common signs include difficulty concentrating, forgetfulness, impulsive behavior, restlessness, and trouble completing tasks.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can adults have ADHD?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Yes. ADHD can continue into adulthood and may affect work performance, relationships, and daily responsibilities. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How is ADHD diagnosed?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Diagnosis typically involves clinical assessments, behavioral evaluations, medical history reviews, and input from parents, teachers, or caregivers when appropriate. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What treatments are available for ADHD?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Treatment may include behavioral therapy, counseling, lifestyle modifications, educational support, and medication when recommended by a healthcare professional.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can people with ADHD lead successful lives?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Absolutely. With proper support and treatment, individuals with ADHD can thrive academically, professionally, and socially.</div>
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
