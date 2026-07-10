@extends('frontend.layouts.master')
@section('title', 'Behaviour Disorder ')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/behaviour-disorder.jpeg);">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">Behaviour Disorder</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Behaviour Disorder </li>
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
                        <img class="w-100" src="assets/images/services/behaviour-disorder.jpeg" alt="" />
                        <div class="h3 mt-4">Behaviour Disorder</div>
                        <p align="justify"> Behaviour Disorder refers to ongoing patterns of challenging behavior that can
                            affect a child's learning, relationships, and daily life. Children may experience frequent
                            anger, aggression, hyperactivity, difficulty following instructions, emotional outbursts, or
                            problems interacting with others.
                        <p>
                        <p align="justify">At our center, we provide personalized assessment and natural therapy to help
                            improve emotional balance, behavior, focus, and social skills. Our caring team partners with
                            families to support positive behavioral changes, build confidence, and help every child lead a
                            happier and more independent lif
                        </p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="feature-list mt-4">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">

                                            <div class="h5">Behaviour Disorder – Common Symptoms</div>
                                            <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Frequent anger or emotional outbursts</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Aggressive or disruptive behavior</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Difficulty following rules or instructions</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Poor attention and concentration</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Impulsive actions without thinking</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                    <span>Difficulty interacting with family or peers</span>
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
                                    <div class="acc-btn">What is a Behaviour Disorder?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">A behaviour disorder is a condition that causes persistent
                                                emotional or behavioural challenges, affecting a child's learning,
                                                relationships, and daily activities.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">What are the signs of a Behaviour Disorder?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Common signs include aggression, impulsive behaviour,
                                                frequent anger, hyperactivity, emotional outbursts, defiance, difficulty
                                                following rules, and poor social interactions.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can Behaviour Disorders be treated?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Yes. Early behavioural therapy and personalized intervention
                                                programs can help children improve emotional regulation, behaviour, and
                                                social skills.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How is a Behaviour Disorder diagnosed?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">A behaviour disorder is diagnosed through comprehensive
                                                behavioural assessments, observations, and discussions with parents,
                                                teachers, and healthcare professionals.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What treatments are available for Behaviour Disorders?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Treatment may include behavioural therapy, parent training,
                                                social skills training, counselling, and individualized intervention
                                                programs based on each child's needs.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can children with Behaviour Disorders lead successful lives?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Yes. With early intervention, professional support, and
                                                family involvement, children can develop positive behaviours, build
                                                confidence, and achieve success at home, school, and in social settings.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        </div>
                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>
    <!--End Services Details-->






@endsection
