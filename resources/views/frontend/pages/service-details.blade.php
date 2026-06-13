@extends('frontend.layouts.master')
@section('title', 'Service Details')
@section('content')

<!-- Start main-content -->
<section class="page-title" style="background-image: url(assets/images/bg/bg.jpg);">
    <div class="auto-container">
        <div class="row align-items-center">

            <!-- Left Side -->
            <div class="col-lg-7">
                <div class="title-outer">
                    <div class="h1 title">Service Details</div>

                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>

            <!-- Right Side Form -->
            <div class="col-lg-5">
            
                <div class="breadcrumb-form">
                <div class="form-header">
    <span class="form-tag">Get Started Today</span>
    <h3>Book Your Consultation</h3>
    <p>Speak with our experts and get personalized guidance for your healthcare needs.</p>
</div>
                    <form action="#" method="post">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>

                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="Date">
                            </div>
                            <div class="col-md-12">
                               <textarea name="form_message" rows="6" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="theme-btn btn-style-one w-100">
                                    <span class="btn-title">Book Consultation</span>
                                </button>
                            </div>
                        </div>
                    </form>
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
                  <ul>
                    <li><a href="{{ route('service-details') }}" class="current"><i class="fas fa-angle-right"></i><span>Autism</span></a></li>
                    <li class="current"><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i><span>Cerebral Palsy</span></a></li>
                    <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i><span>ADHD</span></a></li>
                    <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i><span>Cancer Treatment</span></a></li>
                    <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i><span>Paralysis</span></a></li>
                    <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i><span>Diabetes</span></a></li>
                    <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i><span>Lung Diseases</span></a></li>
                  </ul>
                </div>

                <div class="service-details-help">
                  <div class="help-shape-1"></div>
                  <div class="help-shape-2"></div> <div class="h2 help-title">Contact with <br /> us for any <br /> advice</div>
                  <div class="help-icon">
                    <span class=" lnr-icon-phone-handset"></span>
                  </div>
                  <div class="help-contact">
                    <p>Need help? Talk to an expert</p>
                    <a href="tel:12463330079">+892 ( 123 ) 112 - 9999</a>
                  </div>
                </div>

                <!--Start Services Details Sidebar Single-->
                <div class="sidebar-widget service-sidebar-single mt-4">
                  <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200m">
                    <a href="#" class="theme-btn btn-style-four"><span class="btn-title"><span class="fas fa-file-pdf"></span> download pdf file</span></a>
                  </div>
                </div>
              </div>
              <!--End Services Details Sidebar-->
            </div>
          </div>

          <!--Start Services Details Content-->
          <div class="col-xl-8 col-lg-8">
            <div class="services-details__content">
              <img class="w-100" src="assets/images/services/autisum.png" alt="" /> <div class="h3 mt-4">Service Overview</div>
              <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make </p>
              <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit  </p>
              <div class="content mt-40">
                <div class="text">
                  <div class="h3">We deliver gentle support every day</div>
                  <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <blockquote class="blockquote-one">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur</blockquote>
                </div>
                <div class="feature-list mt-4">
                  <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                      <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                      <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                      <img class="mb-3" src="assets/images/services/autisum.png" alt="images" />
                      <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" mt-25">
                <div class="h3">Frequently Asked Question</div>
                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <ul class="accordion-box">
                  <!--Block-->
                  <li class="accordion block">
                    <div class="acc-btn">What types of care services do you offer?
                      <i class="icon fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="acc-content">
                      <div class="content">
                        <div class="text">Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula, eget egestas magna mi ut arcu. Phasellus nec odio orci. Nunc id massa ante. Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id get egestas magna mi ut arcu.</div>
                      </div>
                    </div>
                  </li>
                  <!--Block-->
                  <li class="accordion block active-block">
                    <div class="acc-btn active">How do you ensure the safety of residents?
                      <i class="icon fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="acc-content current">
                      <div class="content">
                        <div class="text">Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula, eget egestas magna mi ut arcu. Phasellus nec odio orci. Nunc id massa ante. Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id get egestas magna mi ut arcu.</div>
                      </div>
                    </div>
                  </li>
                  <!--Block-->
                  <li class="accordion block">
                    <div class="acc-btn">Can I schedule a tour of your facility?
                      <i class="icon fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="acc-content">
                      <div class="content">
                        <div class="text">Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula, eget egestas magna mi ut arcu. Phasellus nec odio orci. Nunc id massa ante. Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id get egestas magna mi ut arcu.</div>
                      </div>
                    </div>
                  </li>
                  <!--Block-->
                  <li class="accordion block">
                    <div class="acc-btn">How do you personalize care for each resident?
                      <i class="icon fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="acc-content">
                      <div class="content">
                        <div class="text">Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula, eget egestas magna mi ut arcu. Phasellus nec odio orci. Nunc id massa ante. Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id get egestas magna mi ut arcu.</div>
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





<style>
.page-title {
    position: relative;
}

.page-title .auto-container {
    position: relative;
    z-index: 10;
}

.breadcrumb-form {
    position: relative;
    z-index: 99;
}

.breadcrumb-form{
    position: relative !important;
    z-index: 9999 !important;
}
.breadcrumb-form input{
    background: #fff;
    color: #222;
}

.breadcrumb-form input::placeholder{
    color: #777;
}
</style>
@endsection