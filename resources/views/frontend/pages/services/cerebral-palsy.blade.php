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
                        <p>Cerebral Palsy Spectrum Disorder is a developmental condition that affects how a person
                            communicates, interacts, learns, and experiences the world around them. Every individual with
                            Cerebral Palsy is unique, with different strengths, abilities, and challenges. Early identification and
                            personalized support can help children develop essential life skills, improve communication, and
                            build confidence for a brighter future.</p>
                        <p>At our center, we provide comprehensive Cerebral Palsy assessment, therapy, and intervention programs
                            designed to support each child's individual needs. Our dedicated team works closely with
                            families to create a nurturing environment that promotes growth, independence, and social
                            development.</p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>Our Cerebral Palsy support programs focus on creating meaningful progress through structured learning, therapeutic activities, and family-centered care. We understand that every child learns differently, and our individualized approach ensures the best possible outcomes.</p>
                              
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <!-- <img class="mb-3" src="assets/images/services/autisum.png" alt="images" /> -->
                                         <div class="h5">Physical Mobility & Motor Skills</div>
                                        <p>Our therapy programs focus on improving muscle strength, balance, coordination, posture, and movement patterns. Through targeted exercises and therapeutic interventions, we help children enhance mobility and perform daily activities more independently.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <!-- <img class="mb-3" src="assets/images/services/autisum.png" alt="images" /> -->
                                        <div class="h5">Functional Independence & Daily Living</div>
                                        <p>We assist children in developing essential life skills, improving hand-eye coordination, enhancing self-care abilities, and increasing participation in school, home, and social environments, helping them lead more active and fulfilling lives.</p>
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
                                            <div class="text">Cerebral Palsy (CP) is a neurological condition that affects movement, muscle coordination, posture, and balance due to damage to the developing brain.</div>
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
                                            <div class="text">Symptoms may include muscle stiffness, poor coordination, difficulty walking, involuntary movements, speech difficulties, and challenges with daily activities.</div>
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
                                            <div class="text">There is currently no cure for Cerebral Palsy, but therapies and supportive treatments can help improve mobility, independence, and quality of life. </div>
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
                                            <div class="text">Treatment options may include physical therapy, occupational therapy, speech therapy, medications, assistive devices, and specialized rehabilitation programs. </div>
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
                                            <div class="text">Early intervention often provides the best outcomes by helping children develop essential motor and communication skills.</div>
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
                                            <div class="text">Yes. Ongoing therapy can help maintain mobility, reduce pain, and improve overall function throughout adulthood.</div>
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
