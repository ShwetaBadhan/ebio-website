@extends('frontend.layouts.master')
@section('title', 'Blog Details')
@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Understanding Autism: Signs, Causes, and the Importance of Early Support</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Blog Details</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Blog Details Start-->
  <section class="blog-details pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <div class="blog-details__left">
            <div class="blog-details__img">
              <img src="assets/images/bg/bg.jpg" alt="">
              <div class="blog-details__date">
                <span class="day">28</span>
                <span class="month">Aug</span>
              </div>
            </div>
            <div class="blog-details__content">
              <ul class="list-unstyled blog-details__meta">
                <li><a href="{{ route('blog-details')}}"><i class="fas fa-user-circle"></i> Admin</a> </li>
                <li><a href="{{ route('blog-details')}}"><i class="fas fa-comments"></i> 02 Comments</a></li>
              </ul>
              <div class="h3 blog-details__title">What is Autism?</div>
              <p class="blog-details__text-2">Autism, also known as Autism Spectrum Disorder (ASD), is a neurodevelopmental condition that affects how a person communicates, interacts with others, learns, and experiences the world around them. It is called a "spectrum" because autism affects individuals differently, with varying strengths, challenges, and support needs.</p>
              <p class="blog-details__text-2">Autism is not an illness or disease. It is a lifelong condition that influences the way a person thinks, processes information, and responds to their environment.</p>
            </div>
           
           
          </div>
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="sidebar">
           
            <div class="sidebar__single sidebar__post"> <div class="h3 sidebar__title">Latest Posts</div>
              <ul class="sidebar__post-list list-unstyled">
                <li>
                  <div class="sidebar__post-image"> <img src="assets/images/bg/bg.jpg" alt=""> </div>
                  <div class="sidebar__post-content">
                    <div class="h3"> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="{{ route('blog-details')}}">Understanding Autism: Signs, Causes, and the Importance of Early Support</a>
                    </div>
                  </div>
                </li>
             
              </ul>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Details End-->

@endsection