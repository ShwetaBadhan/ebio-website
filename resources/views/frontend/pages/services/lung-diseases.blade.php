@extends('frontend.layouts.master')
@section('title', 'Lung Diseases')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
        <div class="auto-container">
            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">
                    <div class="title-outer">
                        <div class="h1 title">Lung Diseases</div>

                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Lung Diseases</li>
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
                        <div class="h3 mt-4">Lung Diseases</div>
                        <p>Lung diseases encompass a wide range of respiratory conditions that affect the lungs and airways,
                            making it difficult to breathe and perform daily activities comfortably. Common lung conditions
                            include asthma, chronic obstructive pulmonary disease (COPD), bronchitis, pneumonia, pulmonary
                            fibrosis, and other respiratory disorders. Early diagnosis and timely treatment are essential to
                            improve lung function, manage symptoms, and enhance overall quality of life.</p>
                        <p>At our center, we provide comprehensive evaluation, diagnosis, and treatment services for various
                            lung diseases. Our experienced healthcare professionals use advanced diagnostic tools and
                            personalized treatment plans to address each patient's unique respiratory health needs.</p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>Our lung disease management programs are designed to help patients achieve better
                                    breathing, improved lung function, and enhanced quality of life through personalized and
                                    comprehensive care.</p>

                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                        <div class="h5">Advanced Diagnosis & Respiratory Treatment</div>
                                        <p>We offer detailed respiratory assessments, lung function testing, medication
                                            management, and customized treatment plans to effectively manage a variety of
                                            lung conditions and reduce the risk of complications.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                        <div class="h5">Pulmonary Rehabilitation & Lifestyle Support</div>
                                        <p>Our team provides breathing exercises, pulmonary rehabilitation programs,
                                            lifestyle counseling, smoking cessation guidance, and preventive care strategies
                                            to help patients strengthen lung function and improve daily living.
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
                                <li class="accordion block">
                                    <div class="acc-btn">What are common types of lung disease?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Common lung conditions include asthma, chronic obstructive
                                                pulmonary disease (COPD), pulmonary fibrosis, pneumonia, and chronic
                                                bronchitis. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">What symptoms may indicate lung disease?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Symptoms can include shortness of breath, chronic cough,
                                                wheezing, chest tightness, and reduced exercise tolerance. </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">How are lung diseases diagnosed?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Diagnosis may involve physical examinations, pulmonary
                                                function tests, imaging studies, and laboratory testing.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Can lung disease be treated?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Many lung conditions can be managed effectively with
                                                medications, respiratory therapy, lifestyle changes, and specialized care.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">When should I seek medical attention for breathing problems?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">You should seek medical evaluation if you experience
                                                persistent shortness of breath, worsening cough, chest pain, or breathing
                                                difficulties.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Can pulmonary rehabilitation help?
                                        <i class="icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Yes. Pulmonary rehabilitation programs can improve breathing
                                                efficiency, physical endurance, and overall quality of life for many
                                                patients.</div>
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
