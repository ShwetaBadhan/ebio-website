@extends('frontend.layouts.master')
@section('title', 'Autism')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/autism.jpeg);">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">Autism</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Autism</li>
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
                        <img class="w-100" src="assets/images/services/autism.jpeg" alt="" />
                        <div class="h3 mt-4">Autism</div>
                        <p align="justify">Autism Spectrum Disorder (ASD) is a developmental condition that affects how a person communicates, interacts, learns, and experiences the world around them. Every individual with autism is unique, with different strengths, abilities, and challenges. Early identification and personalized support can help children develop essential life skills, improve communication, and build confidence for a brighter future. At our center, we provide comprehensive autism assessment, therapy, and intervention programs designed to support each child's individual needs. Our dedicated team works closely with families to create a nurturing environment that promotes growth, independence, and social development. 
</p>
                        
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>Our autism support programs focus on creating meaningful progress through structured learning, therapeutic activities, and family-centered care. We understand that every child learns differently, and our individualized approach ensures the best possible outcomes.</p>
                              
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="h5">Common Autism Symptoms</div>
                                         <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Delayed speech or language development</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Limited eye contact</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Difficulty interacting with others</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Repetitive movements or behaviors</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Prefers to play alone</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Difficulty understanding emotions or social cues</span>
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
                                <li class="accordion block">
                                    <div class="acc-btn">What is Autism Spectrum Disorder (ASD)?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Autism Spectrum Disorder (ASD) is a neurodevelopmental condition that affects communication, social interaction, behavior, and sensory processing. Every autistic person is unique, with different strengths, challenges, and support needs. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">What are the early signs of autism?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Common early signs may include delayed speech, limited eye contact, difficulty with social interaction, repetitive behaviors, strong interest in specific topics, and unusual sensory sensitivities. Early assessment can help identify support needs. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">At what age can autism be diagnosed?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Autism can often be identified as early as 18–24 months, although some individuals may receive a diagnosis later in childhood or adulthood. A comprehensive evaluation by qualified professionals is recommended. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What therapies and support services are available for autism?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Support may include speech therapy, occupational therapy, behavioral interventions, social skills training, educational support, and family counseling. Treatment plans should be personalized to each individual's needs and goals. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can autistic individuals live independent and fulfilling lives?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Many autistic individuals live independently, pursue education and careers, and build meaningful relationships. The level of support needed varies from person to person, and appropriate services can help maximize independence and quality of life. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How can families support a loved one with autism?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Families can support autistic individuals by learning about autism, creating predictable routines, encouraging communication, respecting sensory needs, and working closely with therapists, educators, and healthcare professionals.</div>
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
