
    <!-- Main Header-->
    <header class="main-header header-style-two">
      <div class="header-lower ">
        <div class="inner-container">
          <!-- Main box -->
          <div class="main-box">
            <div class="left-box">
              <div class="logo-box">
                <div class="logo">
                  <a href="{{ route('home') }}"><img src="{{ url ('assets/images/logo-ebio.jpg')}}" alt="Logo" /></a>
                </div>
              </div>
              <!--Nav Box-->
              <div class="nav-outer">
                <nav class="nav main-menu">
                  <ul class="navigation">
                    <li class="current">
                      <a href="{{ route('home') }}">Home</a>
                    
                    </li>
                    <li class="dropdown">
                      <a href="javascript:void(0)">Who We Are</a>
                     <ul>
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('the-founder') }}">The Founder</a></li>
                        <li><a href="{{ route('awards') }}">Awards</a></li>
                        <li><a href="{{ route('records') }}">Records</a></li>
                      </ul>
                    </li>
                   
                    <li class="dropdown"><a href="{{ route('services') }}">Services</a>
                      <ul>
                        <li><a href="{{ route('autism') }}">Autism</a></li>
                        <li><a href="{{ route('cerebral-palsy') }}">Cerebral Palsy</a></li>
                        <li><a href="{{ route('adhd') }}">ADHD</a></li>
                        <li><a href="{{ route('cancer-treatment') }}">Cancer Treatment</a></li>
                        <li><a href="{{ route('paralysis') }}">Paralysis</a></li>
                        <li><a href="{{ route('diabetes') }}">Diabetes</a></li>
                        <li><a href="{{ route('lung-diseases') }}">Lung Diseases</a></li>
                      </ul>
                    </li>
                    {{-- <li class="dropdown"><a href="#">Projects</a>
                      <ul>
                        <li><a href="page-projects.html">Project Grid</a></li>
                        <li><a href="{{ route('service-details') }}">Project Details</a></li>
                      </ul>
                    </li> --}}
                    <li><a href="{{ route('contact-us') }}">Contact Us</a>
                     
                    </li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="right-box">
              
              <a class="theme-btn btn-style-three" href="{{ route('contact-us') }}">
                <span class="btn-title">Book Appointment </span>
              </a>
              <!--Mobile Navigation Toggler-->
              <button class="mobile-nav-toggler">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
          <div class="upper-box">
            <div class="nav-logo">
              <a href="{{ route('home') }}"><img src="{{ url('assets/images/logo-ebio.jpg') }}" alt=""></a>
            </div>
            <div class="close-btn"><i class="icon fa fa-times"></i></div>
          </div>

          <ul class="navigation clearfix">
            <!--Keep This Empty / Menu will come through Javascript-->
          </ul>
          <ul class="contact-list-one">
            <li>
              <!-- Contact Info Box -->
              <div class="contact-info-box">
                <i class="icon lnr-icon-phone-handset"></i>
                <span class="title">Call Now</span>
                <a href="tel:+92880098670">+92 (8800) - 98670</a>
              </div>
            </li>
            <li>
              <!-- Contact Info Box -->
              <div class="contact-info-box">
                <span class="icon lnr-icon-envelope1"></span>
                <span class="title">Send Email</span>
                <a href="https://html.kodesolution.com/cdn-cgi/l/email-protection#caa2afa6ba8aa9a5a7baaba4b3e4a9a5a7"><span class="__cf_email__" data-cfemail="97fff2fbe7d7f4f8fae7f6f9eeb9f4f8fa">[email&#160;protected]</span></a>
              </div>
            </li>
            <li>
              <!-- Contact Info Box -->
              <div class="contact-info-box">
                <span class="icon lnr-icon-clock"></span>
                <span class="title">Send Email</span>
                Mon - Sat 8:00 - 6:30, Sunday - CLOSED
              </div>
            </li>
          </ul>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </nav>
      </div>
      <!-- End Mobile Menu -->

      <!-- Header Search -->
      <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
          <form method="post" action="https://html.kodesolution.com/2026/fertilys-html/{{ route('home') }}">
            <div class="form-group">
              <input type="search" name="search-field" value="" placeholder="Search..." required="" />
              <button type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
      <!-- End Header Search -->

      <!-- Sticky Header  -->
      <div class="sticky-header">
        <div class="auto-container">
          <div class="inner-container">
            <!--Logo-->
            <div class="logo">
              <a href="{{ route('home') }}"><img src="{{ url ('assets/images/logo-ebio.jpg')}}" alt=""></a>
            </div>

            <!--Right Col-->
            <div class="nav-outer">
              <!-- Main Menu -->
              <nav class="main-menu">
                <div class="navbar-collapse show collapse clearfix">
                  <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                  </ul>
                </div>
              </nav>
              <!-- Main Menu End-->

              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            
             <a class="theme-btn btn-style-three" href="{{ route('contact-us') }}">
                <span class="btn-title">Book Appointment </span>
              </a>
          </div>
        </div>
      </div>
      <!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->