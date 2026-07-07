@extends('frontend.layouts.master')
@section('title', 'Behaviour Disorder ')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
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
                        <img class="w-100" src="assets/images/services/autisum.png" alt="" />
                        <div class="h3 mt-4">Behaviour Disorder</div>
                        <p> Behaviour disorders can impact a child's emotional control, social skills, and daily activities. Children may experience aggression, hyperactivity, defiance, impulsive behavior, or difficulty following routines. Early behavioural therapy helps children develop positive habits and emotional well-being.</p>
                                              <p>
                                                At our center, we offer professional behavioural assessments and individualized therapy programs tailored to each child's needs. Our specialists work with children and families to improve behaviour, emotional regulation, social interaction, and overall development.</p>
                        <div class="content mt-40">
                            <div class="text">
                                <div class="h3">We Deliver Personalized Care Every Day</div>
                                <p>At Ebiocare, our individualized behavioural therapy programs empower children to manage emotions, develop positive behaviours, and build essential social and life skills in a supportive environment.</p>
                              
                            </div>
                            <div class="feature-list mt-4">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                         <div class="h5">Attention & Learning Enhancement</div>
                                        <p>We help children improve focus, concentration, listening skills, task completion, and academic performance through structured activities and individualized therapeutic strategies designed to support learning and development.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                                        <div class="h5">Behavioral & Emotional Development</div>
                                        <p>Our programs focus on improving self-regulation, impulse control, emotional management, social interactions, and organizational skills, helping children build stronger relationships and succeed at home, school, and in the community.</p>
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
            <div class="text">A behaviour disorder is a condition that causes persistent emotional or behavioural challenges, affecting a child's learning, relationships, and daily activities.</div>
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
            <div class="text">Common signs include aggression, impulsive behaviour, frequent anger, hyperactivity, emotional outbursts, defiance, difficulty following rules, and poor social interactions.</div>
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
            <div class="text">Yes. Early behavioural therapy and personalized intervention programs can help children improve emotional regulation, behaviour, and social skills.</div>
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
            <div class="text">A behaviour disorder is diagnosed through comprehensive behavioural assessments, observations, and discussions with parents, teachers, and healthcare professionals.</div>
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
            <div class="text">Treatment may include behavioural therapy, parent training, social skills training, counselling, and individualized intervention programs based on each child's needs.</div>
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
            <div class="text">Yes. With early intervention, professional support, and family involvement, children can develop positive behaviours, build confidence, and achieve success at home, school, and in social settings.</div>
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
