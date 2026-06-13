 <!-- Main Footer -->
    <footer class="main-footer footer-style-one mb-0">
      <div class="footer-area-two">
        <div class="outer-box">
          <div class="bg bg-image"><img src="assets/images/background/footer-bg1-1.png" alt=""></div>
          <!-- Widgets Section -->
          <div class="widgets-section">
            <div class="auto-container">
              <div class="row">
                <!-- Footer Column -->
                <div class="footer-column border-0 col-xl-3 col-lg-9">
                  <div class="footer-widget about-widget wow fadeInLeft">
                    <div class="widget-content">
                      <div class="logo"><a href="{{ route('home') }}"><img src="assets/images/logo-ebio.jpg" alt=""></a></div>
                      <div class="text text-white">Contrary to popular belief, Lorem Ipsum is not simply random text this isni It has rootsThe property business.</div>
                      <div class="social-widget">
                        <ul class="social-icon-list1">
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="footer-column border-0 col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget links-widget style-two col wow fadeInLeft" data-wow-delay="400ms"> <div class="h4 widget-title">Quick Link</div>
                    <div class="widget-content">
                      <ul class="user-links">
                        <li><a href="{{ route('service-details') }}">Autism</a></li>
                        <li><a href="{{ route('service-details') }}">Cerebral Palsy</a></li>
                        <li><a href="{{ route('service-details') }}">ADHD</a></li>
                        <li><a href="{{ route('service-details') }}">Cancer Treatment</a></li>
                        <li><a href="{{ route('service-details') }}">Paralysis</a></li>
                        <li><a href="{{ route('service-details') }}">Diabetes</a></li>
                        <li><a href="{{ route('service-details') }}">Lung Diseases</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer-column border-0 col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget contact-widget style-two col wow fadeInLeft" data-wow-delay="400ms"> <div class="h4 widget-title">Contact</div>
                    <div class="widget-content">
                      {{-- <div class="text">Lorem Ipsum is simply is dumi omy is text dummy text</div> --}}
                      <div class="info">
                        <i aria-hidden="true" class=" flaticon-common-email-1"></i>
                        <span>info@ebiocares.com</span>
                      </div>
                      <div class="info">
                        <i aria-hidden="true" class=" flaticon-common-location"></i>
                        <span>V.P.O Phoolpur 144026, Near Lambra, Jalandhar(Pb.)India</span>
                      </div>
                      <div class="info">
                        <i aria-hidden="true" class=" flaticon-common-call-1"></i>
                        <span>+91 98720-01445</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="footer-column border-0 col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget newsletter-widget style-two col wow fadeInLeft" data-wow-delay="400ms"> <div class="h4 widget-title">About</div>
                    <div class="widget-content">
                      <div class="text">Contrary to popular belief, Lorem Ipsum is not simply random text this isni It has rootsThe property business.</div>
                      <div class="form-clt">
                        <input type="email" name="email" id="email2" placeholder="Email Address" required="">
                        <button class="submit-btn" type="submit"><i class="fa-regular fa-paper-plane"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="auto-container">
            <div class="footer-bottom">
              <div class="inner-container justify-content-center justify-content-md-between">
                <p class="copyright-text">© Copyright <?php echo date('Y')?> E-Bio Cares.</p>
                <ul class="d-flex align-items-center">
                  <li><a href="#0">Terms & Condition</a></li>
                  <li><a href="#0">Privacy Policy</a></li>
                  <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End Main Footer -->