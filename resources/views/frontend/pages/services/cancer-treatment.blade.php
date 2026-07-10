@extends('frontend.layouts.master')
@section('title', 'Cancer Treatment')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/cancer care center.jpeg);">
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
                        <img class="w-100" src="assets/images/services/cancer care center.jpeg" alt="" />
                        <div class="h3 mt-4">Cancer Care Center</div>
                        <p>Cancer treatment involves a comprehensive approach to diagnosing, managing, and treating various
                            types of cancer. Advances in medical science have made it possible to detect cancer earlier and
                            provide more effective treatment options, improving outcomes and quality of life for patients.
                            Every cancer journey is unique, which is why personalized treatment plans are essential for
                            achieving the best possible results.</p>
                        <p>At our center, we provide compassionate and patient-centered cancer care through a
                            multidisciplinary approach. Our experienced healthcare professionals work closely with patients
                            and their families to develop individualized treatment plans based on the type, stage, and
                            specific needs of each case.</p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>Our cancer treatment services are designed to provide expert medical care, emotional
                                    support, and personalized guidance throughout the treatment process. We are committed to
                                    helping patients navigate their journey with confidence and hope.</p>

                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <!-- <img class="mb-3" src="assets/images/services/autisum.png" alt="images" /> -->
                                        <div class="h5">Advanced Diagnosis & Personalized Treatment</div>
                                        <p>We offer thorough evaluations and customized treatment plans that may include
                                            chemotherapy, targeted therapy, immunotherapy, radiation therapy, or other
                                            specialized treatments based on individual patient needs and medical
                                            recommendations.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <!-- <img class="mb-3" src="assets/images/services/autisum.png" alt="images" /> -->
                                        <div class="h5">Supportive Care & Recovery Management</div>
                                        <p>Our team provides ongoing monitoring, symptom management, nutritional guidance,
                                            rehabilitation support, and emotional counseling to help patients maintain their
                                            strength, manage treatment side effects, and improve overall quality of life
                                            during and after treatment.
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
