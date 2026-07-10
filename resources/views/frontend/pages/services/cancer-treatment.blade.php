@extends('frontend.layouts.master')
@section('title', 'Cancer Treatment')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('assets/images/bg/cancer care center.png');">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">Cancer Care center</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Cancer Treatment</li>
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
                        <img class="w-100" src="assets/images/services/cancer care center.png" alt="" />
                        <div class="h3 mt-4">Cancer Care Center</div>
                        <p align="justify">Cancer is a condition in which abnormal cells grow uncontrollably and can affect
                            different parts of the body. Early detection, proper care, and ongoing support play an important
                            role in improving a patient's quality of life.</p>
                        <p align="justify">At our center, we provide personalized natural supportive care designed to
                            enhance overall well-being, strengthen the body's natural healing process, and improve quality
                            of life during the treatment journey. We work closely with patients and their families to
                            provide compassionate care and holistic support.</p>
                        <div class="content mt-40">
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="h5">Cancer – Common Symptoms</div>
                                        <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Unexplained weight loss</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Persistent fatigue or weakness</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>A lump or swelling in any part of the body</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Ongoing pain that does not improve</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Changes in skin, moles, or unusual bleeding</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Persistent cough, difficulty swallowing</span>
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
                            <p align="justify">Note: These symptoms do not always indicate cancer, but if they persist or
                                worsen, it is important to consult a qualified healthcare professional for proper evaluation
                                and diagnosis</p>

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
                                    <div class="acc-btn active">What cancer treatments are available?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Treatment options may include surgery, chemotherapy,
                                                radiation therapy, immunotherapy, targeted therapy, or a combination of
                                                these approaches.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How is the best treatment plan determined?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Treatment depends on the type of cancer, stage of the
                                                disease, overall health, and individual patient needs. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What are the common side effects of cancer treatment?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Side effects can vary but may include fatigue, nausea, hair
                                                loss, appetite changes, and weakened immunity. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How long does cancer treatment take?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">The duration varies depending on the cancer type and
                                                treatment plan, ranging from a few weeks to several months or longer.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can cancer be cured?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Some cancers can be cured, while others can be effectively
                                                managed with ongoing treatment and monitoring.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">What support services are available during treatment?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Many patients benefit from nutritional counseling,
                                                psychological support, pain management, rehabilitation, and patient
                                                education programs.</div>
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
