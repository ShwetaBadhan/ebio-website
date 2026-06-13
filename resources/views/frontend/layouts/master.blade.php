<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>@yield('title','Ebio-Cares')</title>
  <!-- Stylesheets -->
  <link href="{{ url ('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ url ('assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{ url ('assets/css/style-home-1.css')}}" rel="stylesheet" />

  <link rel="shortcut icon" href="{{ url ('assets/images/favicon.png')}}" type="image/x-icon" />
  <link rel="icon" href="{{ url ('assets/images/favicon.png')}}" type="image/x-icon" />

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>


<body>

 <!-- Back-to-top start -->
    <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Back-to-top start -->

@include('frontend.components.navbar')

@yield('content')

@include('frontend.components.footer')


<!-- End Page Wrapper -->


<script src="{{ url ('assets/js/jquery.js')}}"></script>
<script src="{{ url ('assets/js/popper.min.js')}}"></script>
<script src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ url ('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{ url ('assets/js/jquery-ui.js')}}"></script>
<script src="{{ url ('assets/js/wow.js')}}"></script>
<script src="{{ url ('assets/js/select2.min.js')}}"></script>
<script src="{{ url ('assets/js/appear.js')}}"></script>
<script src="{{ url ('assets/js/bxslider.js')}}"></script>
<script src="{{ url ('assets/js/knob.js')}}"></script>
<script src="{{ url ('assets/js/swiper.min.js')}}"></script>
<script src="{{ url ('assets/js/aos.js')}}"></script>
<script src="{{ url ('assets/js/gsap.min.js')}}"></script>
<script src="{{ url ('assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{ url ('assets/js/splitType.js')}}"></script>
<script src="{{ url ('assets/js/gsap-scroll-smoother.js')}}"></script>
<script src="{{ url ('assets/js/gsap-scroll-to-plugin.js')}}"></script>
<script src="{{ url ('assets/js/SplitText.min.js')}}"></script>
<script src="{{ url ('assets/js/custom-gsap.js')}}"></script>
<script src="{{ url ('assets/js/script.js')}}"></script>

</body>

</html>