 @extends('layout.home')

  @section('content')
  <!-- Page preloader-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-corporate">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-xxl-stick-up-offset="130px" data-md-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-top-card rd-navbar-collapse">
              <div class="rd-navbar-top-card-inner">
                <ul class="list-inline">
                  <li class="box-inline"><span class="icon icon-md-smaller icon-gray-light mdi mdi-phone"></span>
                    <ul class="list-comma">
                      <li><a href="tel:#">1-800-1234-567</a></li>
                      <li><a href="tel:#">1-800-6780-345</a></li>
                    </ul>
                  </li>
                  <li class="box-inline"><span class="icon icon-md-smaller icon-gray-light mdi mdi-map-marker"></span><a href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></li>
                  <li class="box-inline"><span class="icon icon-md-smaller icon-gray-light mdi mdi-email"></span><a href="/cdn-cgi/l/email-protection#e7c4"><span class="__cf_email__" data-cfemail="fe939f9792be9a9b939192979095d0918c99">[email&#160;protected]</span></a></li>
                </ul>
                <ul class="list-inline">
                  <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                  <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                </ul>
              </div>
              <div class="rd-navbar-top-card-inner"><a class="button button-sm button-secondary" href="#">Book a truck</a></div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar card-->
              <div class="rd-navbar-card">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img class="logo-default" src="images/logo-default-143x36.png" alt="" width="143" height="36"/><img class="logo-inverse" src="images/logo-inverse-143x36.png" alt="" width="143" height="36"/></a></div>
              </div>
              <div class="rd-navbar-aside-center">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="index.html">Home</a>
                    </li>
                    <li><a href="about-us.html">About Us</a>
                    </li>
                    <li><a href="#">Gallery</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="grid-gallery.html">Grid Gallery</a>
                        </li>
                        <li><a href="grid-album-gallery.html">Grid Album Gallery</a>
                        </li>
                        <li><a href="fullwidth-gallery.html">Fullwidth Gallery</a>
                        </li>
                        <li><a href="single-project.html">Single Project</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Blog</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="classic-blog.html">Classic Blog</a>
                        </li>
                        <li><a href="grid-blog.html">Grid Blog</a>
                        </li>
                        <li><a href="masonry-blog.html">Masonry Blog</a>
                        </li>
                        <li><a href="modern-blog.html">Modern Blog</a>
                        </li>
                        <li><a href="audio-post.html">Audio Post</a>
                        </li>
                        <li><a href="image-post.html">Image Post</a>
                        </li>
                        <li><a href="single-post.html">Single Post</a>
                        </li>
                        <li><a href="video-post.html">Video Post</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Pages</a>
                      <!-- RD Navbar Megamenu-->
                      <ul class="rd-navbar-megamenu">
                        <li>
                          <ul class="rd-megamenu-list">
                            <li><a href="about-me.html">About Me</a></li>
                            <li><a href="our-history.html">Our History</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="single-service.html">Single Service</a></li>
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="single-job.html">Single Job</a></li>
                          </ul>
                        </li>
                        <li>
                          <ul class="rd-megamenu-list">
                            <li><a href="login-page.html">Login Page</a></li>
                            <li><a href="registration-page.html">Registration Page</a></li>
                            <li><a href="pricing-page.html">Pricing Page</a></li>
                            <li><a href="404-page.html">404 Page</a></li>
                            <li><a href="503-page.html">503 Page</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                          </ul>
                        </li>
                        <li>
                          <ul class="rd-megamenu-list">
                            <li><a href="under-construction.html">Under Construction</a></li>
                            <li><a href="accordions.html">Accordions</a></li>
                            <li><a href="forms.html">Forms</a></li>
                            <li><a href="countdown.html">Countdown</a></li>
                            <li><a href="grid-system.html">Grid System</a></li>
                            <li><a href="tables.html">Tables</a></li>
                          </ul>
                        </li>
                        <li>
                          <ul class="rd-megamenu-list">
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="radials.html">Radials</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="tooltips.html">Tooltips</a></li>
                            <li><a href="search-results.html">Search Results</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                  </ul>
                </div>
                <div class="rd-navbar-aside-right-inner">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                    <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <label class="form-label form-label" for="rd-navbar-search-form-input">Search...</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit mdi mdi-magnify"></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary" href="#">Book a truck</a></div>
            </div>
          </nav>
        </div>
  </header>


    <div class="page-loader">
      <div class="page-loader-body">
        <div class="page-loader__logo"><img src="images/logo-default-143x36.png" alt="" width="143" height="36"/>
        </div>
        <div class="preloader-wrapper big active">
          <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
<section class="section">
        <div class="swiper-form-wrap">
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left context-dark" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-slide-bg="images/landing-trucking-slider-1.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row justify-content-sm-center justify-content-md-start row-ten">
                      <div class="col-md-6 col-lg-4 col-xxl-3">
                        <h3 data-caption-animate="fxBlurInRight" data-caption-delay="50">Safety, quality, professionalism</h3>
                        <p class="heading-5" data-caption-animate="fxBlurInRight" data-caption-delay="350">We provide customers worldwide with reliable transportation services.</p><a class="button button-default-outline button-sm" href="#" data-caption-animate="fxBlurInRight" data-caption-delay="650">learn more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="images/landing-trucking-slider-2.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row justify-content-sm-center justify-content-md-start row-ten">
                      <div class="col-md-6 col-lg-4 col-xxl-3">
                        <h3 data-caption-animate="fxBlurInRight" data-caption-delay="50">A partnership based on trust</h3>
                        <p class="heading-5" data-caption-animate="fxBlurInRight" data-caption-delay="350">We partner with transportation and delivery companies worldwide.</p><a class="button button-default-outline button-sm" href="#" data-caption-animate="fxBlurInRight" data-caption-delay="650">learn more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="images/landing-trucking-slider-3.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row justify-content-sm-center justify-content-md-start row-ten">
                      <div class="col-md-6 col-lg-4 col-xxl-3">
                        <h3 data-caption-animate="fxBlurInRight" data-caption-delay="50">Comfortable Payment System</h3>
                        <p class="heading-5" data-caption-animate="fxBlurInRight" data-caption-delay="350">You can pay for our services using any modern method of payment.</p><a class="button button-default-outline button-sm" href="#" data-caption-animate="fxBlurInRight" data-caption-delay="650">learn more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper controls-->
            <div class="swiper-pagination-wrap">
              <div class="container container-bigger">
                <div class="row row-ten">
                  <div class="col-sm-12">
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container container-bigger form-request-wrap">
            <div class="row justify-content-sm-center justify-content-lg-end row-ten">
              <div class="col-lg-4 col-xxl-3">
                <div class="form-request">
                  <h4>Request a Quote</h4>
                  <p>Get in touch with us if you have any queries and we will get back to you as soon as possible.</p>
                  <!-- RD Mailform-->
                  <form class="rd-mailform">
                    <div class="form-wrap form-wrap-validation">
                      <!-- Select 2-->
                      <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="city">
                        <option value="1">Sender City</option>
                        <option value="2">Chicago</option>
                        <option value="3">San Francisco</option>
                      </select>
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <!-- Select 2-->
                      <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="city">
                        <option value="1">Recipient City</option>
                        <option value="2">Chicago</option>
                        <option value="3">San Francisco</option>
                      </select>
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <!-- Select 2-->
                      <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="city">
                        <option value="1">Type of Delivery</option>
                        <option value="2">Type 1</option>
                        <option value="3">Type 2</option>
                      </select>
                    </div>
                    <div class="form-wrap form-button">
                      <button class="button button-block button-secondary" type="submit">get started</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="section section-lg bg-default text-center">
        <div class="container-wide">
          <h3>services</h3>
          <div class="divider divider-default"></div>
          <div class="row row-50 justify-content-sm-center" data-lightgallery="group">
            <div class="col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/landing-trucking-original-1.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/landing-trucking-01-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="single-project.html">Transportation</a></div>
            </div>
            <div class="col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/landing-trucking-original-2.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/landing-trucking-02-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="single-project.html">Logistics</a></div>
            </div>
            <div class="col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/landing-trucking-original-3.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/landing-trucking-03-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="single-project.html">Towing Service</a></div>
            </div>
            <div class="col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/landing-trucking-original-4.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/landing-trucking-04-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="single-project.html">Passenger Transportation</a></div>
            </div>
            <div class="col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/landing-trucking-original-5.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/landing-trucking-05-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="single-project.html">Storage</a></div>
            </div>
            <div class="col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/landing-trucking-original-6.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/landing-trucking-06-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="single-project.html">Express Delivery</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- a few words about us-->
      <section class="section section-lg bg-gray-lighter">
        <div class="container container-bigger">
          <div class="row row-ten row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-xl-row-reverse">
            <div class="col-md-9 col-lg-5 col-xxl-4 text-gray-light">
              <h3>A few words about us</h3>
              <div class="divider divider-default"></div>
              <p class="heading-5">Express provides professional trucking and transportation services to enable our customers with the same day delivery of any cargo.</p>
              <p>Our numerous services include but are not limited to transportation of oversized, rare and unusual commercial and military cargo, as well as the planning, coordination and implementation/transportation of any hazardous cargos. We even provide storage services to our clients.</p><a class="button button-default-outline" href="about-us.html">learn more</a>
            </div>
            <div class="col-md-9 col-lg-5"><img src="images/landing-trucking-07-720x459.jpg" alt="" width="720" height="459"/>
            </div>
          </div>
        </div>
      </section>
      <!--our advantages-->
      <section class="section section-lg text-center">
        <div class="container-wide">
          <h3>our advantages</h3>
          <div class="divider divider-default"></div>
          <div class="row row-50 justify-content-sm-center">
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal-modern">
                <div class="box-minimal-icon mdi mdi-thumb-up"></div>
                <h6 class="box-minimal-title">Best Service</h6>
                <div class="box-minimal-text">Our mission is to attract and retain customers by providing Best in Class transportation solutions and fostering a profitable, disciplined culture service.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal-modern">
                <div class="box-minimal-icon mdi mdi-account-multiple"></div>
                <h6 class="box-minimal-title">Reputation</h6>
                <div class="box-minimal-text">We have established a strong presence in the transportation industry. Our award-winning services earn a reputation for quality and excellence that few can rival.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal-modern">
                <div class="box-minimal-icon mdi mdi-lock"></div>
                <h6 class="box-minimal-title">Safety & Security</h6>
                <div class="box-minimal-text">Safety for our employees, customers and community we work in will always remain our primary focus in all the policies, procedures and programs that govern our business.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal-modern">
                <div class="box-minimal-icon mdi mdi-library"></div>
                <h6 class="box-minimal-title">qualified employees</h6>
                <div class="box-minimal-text">Our team is comprised of some of the best qualified managers and drivers in the industry. We can match your transportation needs and preferences of cargo delivery.</div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- pricing-->
      <section class="section section-lg bg-gray-lighter text-center">
        <div class="container container-wide">
          <h3>pricing</h3>
          <div class="divider divider-default"></div>
          <div class="row row-lg row-50 justify-content-sm-center">
            <!-- Pricing Box XL-->
            <div class="col-md-6 col-xl-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
                  <h4>basic</h4>
                </div>
                <div class="pricing-box-price">
                  <div class="heading-2"><sup>$</sup>49.00</div>
                </div><a class="button button-sm button-secondary" href="#">order now</a>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-truck"></span></div>
                        <div class="unit-body"><span>Local Delivery</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-home"></span></div>
                        <div class="unit-body"><span>Warehousing</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-earth"></span></div>
                        <div class="unit-body"><span>Overseas Shipping</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-package"></span></div>
                        <div class="unit-body"><span>Free Packaging</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md icon-primary mdi mdi-headset"></span></div>
                        <div class="unit-body"><span>24/7 Customer Support</span></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Pricing Box XL-->
            <div class="col-md-6 col-xl-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
                  <h4>standard</h4>
                </div>
                <div class="pricing-box-price">
                  <div class="heading-2"><sup>$</sup>69.00</div>
                </div><a class="button button-sm button-secondary" href="#">order now</a>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-truck"></span></div>
                        <div class="unit-body"><span>Nationwide Delivery</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-cube-outline"></span></div>
                        <div class="unit-body"><span>Free Storage</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-truck-delivery"></span></div>
                        <div class="unit-body"><span>Less-Than-Truckload</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-map-marker-circle"></span></div>
                        <div class="unit-body"><span>Cargo Tracking</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md icon-primary mdi mdi-headset"></span></div>
                        <div class="unit-body"><span>Support Service</span></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Pricing Box XL-->
            <div class="col-md-6 col-xl-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
                  <h4>gold</h4>
                </div>
                <div class="pricing-box-price">
                  <div class="heading-2"><sup>$</sup>88.00</div>
                </div><a class="button button-sm button-secondary" href="#">order now</a>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-truck"></span></div>
                        <div class="unit-body"><span>International Delivery</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center"> 
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-truck-delivery"></span></div>
                        <div class="unit-body"><span>Logistics</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-airplane"></span></div>
                        <div class="unit-body"><span>Ocean and Air Freight</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-package"></span></div>
                        <div class="unit-body"><span>Premium Packaging </span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md icon-primary mdi mdi-headset"></span></div>
                        <div class="unit-body"><span>Cargo Tracking & Support</span></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Pricing Box XL-->
            <div class="col-md-6 col-xl-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
                  <h4>platinum</h4>
                </div>
                <div class="pricing-box-price">
                  <div class="heading-2"><sup>$</sup>108.00</div>
                </div><a class="button button-sm button-secondary" href="#">order now</a>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-truck"></span></div>
                        <div class="unit-body"><span>Local & Worldwide Delivery</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-clock-fast"></span></div>
                        <div class="unit-body"><span>Long-Term Storage</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-train"></span></div>
                        <div class="unit-body"><span>Railway Shipping</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-package-variant-closed"></span></div>
                        <div class="unit-body"><span>Oversize Freight</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm flex-row align-items-center">
                        <div class="unit-left"><span class="icon icon-md icon-primary mdi mdi-headset"></span></div>
                        <div class="unit-body"><span>Extended Support</span></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- do you need a consultation?-->
      <section class="section section-md bg-gradient-1 text-center text-md-left">
        <div class="container-wide">
          <div class="row row-50 justify-content-sm-center">
            <div class="col-xxl-8">
              <div class="box-cta box-cta-inline">
                <div class="box-cta-inner">
                  <h3 class="box-cta-title">do you need a consultation?</h3>
                  <p>Express can give you lots of advantages, from which you will surely benefit.</p>
                </div>
                <div class="box-cta-inner"><a class="button button-secondary" href="about-us.html">learn more</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Blog posts-->
      <section class="section section-lg bg-default text-center">
        <div class="container-wide">
          <h3>Latest blog posts</h3>
          <div class="divider divider-default"></div>
          <div class="row row-50 justify-content-sm-center row-xxl-90">
            <div class="col-sm-12 col-md-8 col-xl-6">
              <div class="post-blog-large">
                <figure class="post-blog-large-image"><img src="images/landing-trucking-09-868x640.jpg" alt="" width="868" height="640"/>
                </figure>
                <ul class="post-blog-meta">
                  <li><span>by</span>&nbsp;<a href="about-me.html">Ronald Chen</a></li>
                  <li>
                    <time datetime="2017">Feb, 27 2017 at 5:47 pm</time>
                  </li>
                </ul>
                <div class="post-blog-large-caption">
                  <ul class="post-blog-tags">
                    <li><a class="button-tags" href="single-post.html">blog</a></li>
                  </ul><a class="post-blog-large-title" href="single-post.html">Improving on Strategic <br class="d-none d-xl-inline">Sourcing</a>
                  <p class="post-blog-large-text">These days, sourcing has become a common discipline in supply chain and transportation management. There is an organizational expectation that transportation modes will be sourced and...</p><a class="button button-xs button-secondary" href="single-post.html">Continue reading</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8 col-xl-6">
              <div class="post-blog-large">
                <figure class="post-blog-large-image"><img src="images/landing-trucking-10-868x640.jpg" alt="" width="868" height="640"/>
                </figure>
                <ul class="post-blog-meta">
                  <li><span>by</span>&nbsp;<a href="about-me.html">Ronald Chen</a></li>
                  <li>
                    <time datetime="2017">Feb, 27 2017 at 5:47 pm</time>
                  </li>
                </ul>
                <div class="post-blog-large-caption">
                  <ul class="post-blog-tags">
                    <li><a class="button-tags" href="single-post.html">blog</a></li>
                  </ul><a class="post-blog-large-title" href="single-post.html">How Transportation and Procurement Can Improve Spendings</a>
                  <p class="post-blog-large-text">Negotiating truckload rates has always been a key element to transportation relationships and budgeting—and it always will be. But lately, we’ve seen what feels like a trend: corporate procurement...</p><a class="button button-xs button-secondary" href="single-post.html">Continue reading</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12"><a class="button button-secondary" href="classic-blog.html">view all blog posts</a></div>
          </div>
        </div>
      </section>

      <!-- Icon carousel-->
      <section class="section section-2-columns bg-gray-lighter bg-additional-gray-darker">
        <div class="container-custom">
          <div class="row justify-content-md-center align-items-lg-center justify-content-xl-start row-0">
            <div class="col-md-10 col-lg-6">
              <div class="section-lg">
                <div class="container-custom-inner">
                  <h3>What people say</h3>
                  <hr class="divider divider-default">
                  <!-- Slick Carousel-->
                  <div class="slider-widget">
                    <div class="slick-slider" id="slick-1" data-autoplay="true" data-arrows="true" data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-custom-arrows="true">
                      <div class="item">
                        <article class="quote-classic">
                          <div class="quote-classic-header"><img class="quote-classic-image" src="images/quote-user-2-210x210.jpg" alt="" width="210" height="210"/>
                            <div class="quote-classic-meta">
                              <p class="quote-classic-cite">Mary McMillan</p>
                              <p class="quote-classic-small">Regular customer</p>
                            </div>
                          </div>
                          <div class="quote-classic-text">
                            <p>Express is more than a transportation company, they are a professional family. They have given us an opportunity to build and grow our business throughout years of dedicated partnership and loyalty that still remain unrivaled.</p>
                          </div>
                        </article>
                      </div>
                      <div class="item">
                        <article class="quote-classic">
                          <div class="quote-classic-header"><img class="quote-classic-image" src="images/quote-user-1-210x210.jpg" alt="" width="210" height="210"/>
                            <div class="quote-classic-meta">
                              <p class="quote-classic-cite">James Smith</p>
                              <p class="quote-classic-small">Regular customer</p>
                            </div>
                          </div>
                          <div class="quote-classic-text">
                            <p>For the past 5 years, Express has been a great partner and absolutely vital in the development of our international shipping business. They have an excellent track record of picking up and delivering our loads on time without issue.</p>
                          </div>
                        </article>
                      </div>
                      <div class="item">
                        <article class="quote-classic">
                          <div class="quote-classic-header"><img class="quote-classic-image" src="images/quote-user-3-210x210.jpg" alt="" width="210" height="210"/>
                            <div class="quote-classic-meta">
                              <p class="quote-classic-cite">Morgan McMillan</p>
                              <p class="quote-classic-small">Regular customer</p>
                            </div>
                          </div>
                          <div class="quote-classic-text">
                            <p>Express has proven to be a very dependable trucking company. This is highlighted by their excellent communication and sense of urgency on every shipment. I would recommend them to anybody looking for great rates and greater services.</p>
                          </div>
                        </article>
                      </div>
                    </div>
                    <div class="slider-widget-aside">
                      <div class="icon icon-lg-smaller mdi mdi-format-quote"></div>
                      <div class="slider-nav">
                        <button class="slick-prev mdi mdi-arrow-left-bold-circle" type="button" data-slick="slick-1"></button>
                        <button class="slick-next mdi mdi-arrow-right-bold-circle" type="button" data-slick="slick-1"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-additional-item">
              <div class="section-lg">
                <div class="container-custom-inner container-custom-inner-1 text-center">
                  <div class="row row-120">
                    <div class="col-sm-6 col-md-3 col-lg-6">
                      <div class="counter-wrap"><span class="icon icon-secondary mdi mdi-television-guide"></span>
                        <div class="heading-3"><span class="counter" data-speed="1000">62000</span><span class="counter-preffix">+</span></div>
                        <p>Successful Deliveries</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6">
                      <div class="counter-wrap"><span class="icon icon-secondary mdi mdi-account-multiple-outline"></span>
                        <div class="heading-3"><span class="counter" data-step="3000">246000</span></div>
                        <p>Happy Clients</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6">
                      <div class="counter-wrap"><span class="icon icon-secondary mdi mdi-clock"></span>
                        <div class="heading-3"><span class="counter" data-step="3000">1200</span></div>
                        <p>Hours of Work</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6">
                      <div class="counter-wrap"><span class="icon icon-secondary mdi mdi-code-tags"></span>
                        <div class="heading-3"><span class="counter" data-step="3000">12000</span></div>
                        <p>Solutions</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-wrap section-reverse bg-default">
        <div class="section-wrap-inner section-lg">
          <div class="container container-bigger">
            <div class="row row-50">
              <div class="col-lg-6 col-xxl-5 text-lg-left">
                <div class="section-wrap-content">
                  <h3>contact information</h3>
                  <div class="divider divider-default"></div>
                  <p class="text-spacing-sm">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can visit our office personally.</p>
                  <ul class="list-xs list-darker">
                    <li class="box-inline"><span class="icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span>
                      <div><a class="text-spacing-sm" href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></div>
                    </li>
                    <li class="box-inline"><span class="icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                      <ul class="list-comma">
                        <li><a class="text-spacing-sm" href="tel:#">1-800-1234-567</a></li>
                        <li><a class="text-spacing-sm" href="tel:#">1-800-6780-345</a></li>
                      </ul>
                    </li>
                    <li class="box-inline"><span class="icon icon-md-smaller icon-secondary mdi mdi-email-open"></span><a class="text-spacing-sm" href="/cdn-cgi/l/email-protection#9cbf"><span class="__cf_email__" data-cfemail="7914181015391d1c14161510171257160b1e">[email&#160;protected]</span></a></li>
                  </ul>
                  <ul class="list-inline-md">
                    <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-google" href="#"></a></li>
                    <li><a class="icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="section-wrap-aside section-wrap-aside-custom">
            <!-- Google Map-->
            <div class="google-map-container google-map-container__model google-map-default" data-zoom="15" data-center="6036 Richmond hwy., Alexandria, VA, 2230" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png">
              <div class="google-map"></div>
              <ul class="google-map-markers">
                <li data-location="6036 Richmond hwy., Alexandria, VA, 2230" data-description="6036 Richmond hwy., Alexandria, VA, 2230"></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
 
<footer class="section page-footer page-footer-minimal text-center bg-gray-darker">
        <div class="container container-wide">
          <div class="row justify-content-sm-center align-items-md-center row-30">
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-left"><a href="index.html"><img class="default-logo" src="images/logo-default-143x36.png" alt="" width="143" height="36"/><img class="inverse-logo" src="images/logo-inverse-143x36.png" alt="" width="143" height="36"/></a></div>
            <div class="col-md-10 col-lg-7 col-xl-4">
              <p class="right">&#169;&nbsp;<span class="copyright-year"></span> All Rights Reserved&nbsp;<a href="#">Terms of Use</a>&nbsp;and&nbsp;<a href="privacy-policy.html">Privacy Policy</a></p>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-right">
              <ul class="group-xs group-middle">
                <li><a class="icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-google" href="#"></a></li>
                <li><a class="icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-linkedin" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
</div>
   
    <div class="snackbars" id="form-output-global"></div>
    <script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>
    <script data-cfasync="false" src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    
  @endsection