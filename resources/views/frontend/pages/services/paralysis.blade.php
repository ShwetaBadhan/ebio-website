@extends('frontend.layouts.master')
@section('title', 'Paralysis')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
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
                        <img class="w-100" src="assets/images/services/autisum.png" alt="" />
                        <div class="h3 mt-4">Paralysis</div>
                        <p>Paralysis is a condition characterized by the loss of muscle function in one or more parts of the
                            body, often resulting from stroke, spinal cord injury, neurological disorders, or traumatic
                            injuries. Depending on the severity and underlying cause, paralysis can affect movement,
                            sensation, coordination, and daily activities. Early rehabilitation and specialized care play a
                            crucial role in maximizing recovery and improving independence.</p>
                        <p>At our center, we provide comprehensive evaluation, rehabilitation, and therapy programs tailored
                            to the individual needs of each patient. Our experienced team of healthcare professionals
                            focuses on restoring mobility, improving physical function, and enhancing overall quality of
                            life through personalized treatment plans.</p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>Our paralysis rehabilitation programs are designed to promote recovery, improve mobility,
                                    and help patients adapt to daily activities with confidence and independence.</p>

                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                        <div class="h5">Mobility & Physical Rehabilitation</div>
                                        <p>Our therapy programs focus on improving muscle strength, balance, coordination,
                                            posture, and movement through targeted exercises and advanced rehabilitation
                                            techniques. We aim to help patients regain functional mobility and maximize
                                            physical independence.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                        <div class="h5">Daily Living & Functional Recovery</div>
                                        <p>We assist patients in developing essential self-care skills, improving motor
                                            function, enhancing communication and cognitive abilities when needed, and
                                            adapting to everyday activities, helping them achieve a more active and
                                            fulfilling life.
                                        </p>
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
