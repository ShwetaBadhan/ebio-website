@extends('frontend.layouts.master')
@section('title', 'Paralysis')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/cerebral.jpeg);">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">Paralysis</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Paralysis</li>
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
                        <div class="h3 mt-4">Paralysis</div>
                        <p align="justify">Paralysis is the loss of muscle movement in one or more parts of the body, often
                            caused by nerve damage, stroke, or injury. It can affect daily activities, balance, and
                            independence, making even simple tasks challenging.</p>
                        <p align="justify">At our center, we offer personalized assessment and natural therapy designed to
                            support recovery, improve mobility, strengthen muscles, and enhance overall well-being. Our
                            dedicated team is committed to helping patients regain confidence and lead a more active life.
                        </p>
                        <div class="content mt-40">

                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="h5">Paralysis – Common Symptoms</div>
                                        <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Loss of movement in a body part</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Muscle weakness or stiffness</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Difficulty walking or standing</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Numbness or reduced sensation</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Poor balance and coordination</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Difficulty performing daily activities</span>
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
                        <div class=" mt-25">
                            <div class="h3">Frequently Asked Question</div>
                            {{-- <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem
                                ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p> --}}
                            <ul class="accordion-box">
                                <!--Block-->

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">What is paralysis?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Paralysis is the loss of muscle function in part of the
                                                body, often caused by injury, stroke, spinal cord damage, or neurological
                                                disorders.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What are the different types of paralysis?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Common types include monoplegia, hemiplegia, paraplegia, and
                                                quadriplegia, depending on the areas affected. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can paralysis improve over time?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Recovery depends on the underlying cause, severity of the
                                                condition, and rehabilitation efforts. Some individuals experience
                                                significant improvement. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What treatments are available for paralysis?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Treatment may include physical therapy, occupational
                                                therapy, assistive devices, rehabilitation programs, and medical management.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How important is rehabilitation after paralysis?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Rehabilitation plays a critical role in improving mobility,
                                                independence, strength, and quality of life.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">Can people with paralysis live independently?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Many individuals with paralysis achieve varying levels of
                                                independence through therapy, adaptive equipment, and support services.
                                            </div>
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
