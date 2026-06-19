@extends('frontend.layouts.master')
@section('title', 'Diabetes')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">Diabetes</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Diabetes</li>
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
                        <div class="h3 mt-4">Diabetes</div>
                        <p>Diabetes is a chronic health condition that affects how the body processes blood sugar (glucose).
                            If not properly managed, diabetes can lead to serious complications affecting the heart,
                            kidneys, eyes, nerves, and overall well-being. Early diagnosis, lifestyle modifications, regular
                            monitoring, and appropriate medical care are essential for maintaining healthy blood sugar
                            levels and preventing long-term complications.</p>
                        <p>At our center, we provide comprehensive diabetes care focused on prevention, management, and
                            long-term health improvement. Our experienced healthcare professionals work closely with
                            patients to develop personalized treatment plans that address their specific needs, lifestyle,
                            and health goals.</p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>Our diabetes management programs are designed to help patients control blood sugar
                                    levels, prevent complications, and improve overall health through a holistic and
                                    patient-centered approach.</p>

                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                        <div class="h5">Blood Sugar Management & Monitoring</div>
                                        <p>We provide comprehensive assessments, regular monitoring, medication management,
                                            and individualized treatment plans to help patients maintain optimal blood
                                            glucose levels and reduce the risk of diabetes-related complications.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                        <div class="h5">Lifestyle Support & Preventive Care</div>
                                        <p>Our team offers nutritional counseling, weight management guidance, exercise
                                            recommendations, and education on healthy lifestyle practices to support
                                            long-term diabetes control and overall well-being.
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
                                    <div class="acc-btn active">What is diabetes?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Diabetes is a chronic condition that affects how the body
                                                processes blood sugar (glucose), leading to elevated glucose levels.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What are the common symptoms of diabetes?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Symptoms may include excessive thirst, frequent urination,
                                                fatigue, blurred vision, and unexplained weight changes. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What is the difference between Type 1 and Type 2 diabetes?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Type 1 diabetes occurs when the body produces little or no
                                                insulin, while Type 2 diabetes develops when the body becomes resistant to
                                                insulin. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can diabetes be controlled?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Yes. Diabetes can often be managed through medication,
                                                healthy eating, physical activity, blood sugar monitoring, and regular
                                                medical care.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What complications can occur if diabetes is not managed?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Uncontrolled diabetes may lead to heart disease, kidney
                                                problems, nerve damage, vision loss, and other health complications.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">How often should I monitor my blood sugar levels?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Monitoring frequency varies depending on your treatment plan
                                                and should be discussed with your healthcare provider.
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
