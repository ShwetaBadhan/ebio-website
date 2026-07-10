@extends('frontend.layouts.master')
@section('title', 'Cerebral Palsy')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/cerebral.jpeg);">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">Cerebral Palsy</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Cerebral Palsy</li>
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
                        <img class="w-100" src="assets/images/services/cerebral.jpeg" alt="" />
                        <div class="h3 mt-4">Cerebral Palsy</div>
                        <p align="justify">Cerebral Palsy (CP) is a neurological condition that affects a child's movement,
                            muscle control, balance, and posture. Children with CP may have difficulty walking, sitting,
                            speaking, or performing everyday activities, but with the right support, they can improve their
                            abilities and quality of life.
                        </p>
                        <p align="justify">At our center, we provide personalized assessment and natural therapy to help
                            improve mobility, coordination, muscle strength, balance, and overall development. Our
                            compassionate team works closely with families to help every child achieve greater independence
                            and confidence.
                        </p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="feature-list mt-4">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="h5">Cerebral Palsy (CP) – Common Symptoms</div>
                                            <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Delayed milestones like sitting or walking</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Poor balance and coordination</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Muscle stiffness or weakness</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Difficulty walking or moving</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Involuntary body movements</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Speech or swallowing difficulties</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="h5">Our Holistic Care Approach</div>
                                            <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>100% Natural Extracts</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>No Chemicals</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>No Color, Smell or Taste</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Personalized Treatment</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Supports Natural Healing</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Safe & Gentle Care</span>
                                                </li>
                                            </ul>
                                        </div>
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
                                    <div class="acc-btn">What is Cerebral Palsy?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Cerebral Palsy (CP) is a neurological condition that affects
                                                movement, muscle coordination, posture, and balance due to damage to the
                                                developing brain.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">What are the common symptoms of Cerebral Palsy?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Symptoms may include muscle stiffness, poor coordination,
                                                difficulty walking, involuntary movements, speech difficulties, and
                                                challenges with daily activities.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can Cerebral Palsy be cured?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">There is currently no cure for Cerebral Palsy, but therapies
                                                and supportive treatments can help improve mobility, independence, and
                                                quality of life. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What treatments are available for Cerebral Palsy?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Treatment options may include physical therapy, occupational
                                                therapy, speech therapy, medications, assistive devices, and specialized
                                                rehabilitation programs. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How early should treatment begin?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Early intervention often provides the best outcomes by
                                                helping children develop essential motor and communication skills.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can adults with Cerebral Palsy benefit from therapy?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Yes. Ongoing therapy can help maintain mobility, reduce
                                                pain, and improve overall function throughout adulthood.</div>
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
