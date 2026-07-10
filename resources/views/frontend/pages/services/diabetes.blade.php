@extends('frontend.layouts.master')
@section('title', 'Diabetes')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/diabetes.jpeg);">
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
                        <img class="w-100" src="assets/images/services/diabetes.jpeg" alt="" />
                        <div class="h3 mt-4">Diabetes</div>
                        <p align="justify">Diabetes is a condition in which the body is unable to properly regulate blood
                            sugar levels. If not managed effectively, it can affect the heart, kidneys, eyes, nerves, and
                            overall health.</p>
                        <p align="justify">At our center, we provide personalized natural care to support healthy blood
                            sugar management and overall wellness. Our goal is to help patients improve their energy,
                            maintain a healthier lifestyle, and reduce the risk of diabetes-related complications
                        </p>
                        <div class="content mt-40">
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="h5">Diabetes – Common Symptoms</div>
                                        <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Frequent urination</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Increased thirst</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Constant hunger</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Unexplained weight loss</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Fatigue or weakness</span>
                                            </li>
                                            <br>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-check-circle"></i>
                                                <span>Slow healing of cuts and wounds</span>
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
                                            <div class="text">Monitoring frequency varies depending on your treatment
                                                plan
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
