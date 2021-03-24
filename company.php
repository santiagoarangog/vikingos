<?php require 'assets/template/header.php';?>
<!-- Body-->
<body>
<?php
require 'assets/template/loader.php';
require 'assets/features/modals/logIn.php';
?>
  <!-- Body-->
  <body>
        <?php
$module = 'company';
require 'assets/template/shop/nav.php';
require 'assets/features/shoppingCart/shopping.php';
?>
      <!-- Page content-->

      <!-- Hero with parallax effect-->
      <section class="position-relative">
          <!-- <div class="shape shape-bottom shape-curve-side bg-body">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 250">
              <path fill="currentColor" d="M3000,0v250H0v-51c572.7,34.3,1125.3,34.3,1657.8,0C2190.3,164.8,2637.7,98.4,3000,0z"></path>
            </svg>
          </div> -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-65"></div>
        <div class="position-relative zindex-5 container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 order-md-2 overflow-hidden">
              <div class="parallax me-n7 me-md-0" style="max-width: 1030px;"><img class="d-block" src="assets/img/parallax/lines.png" alt="Lines">
                <div class="parallax-layer" style="z-index: 2;" data-depth="0.13"><img src="assets/img/parallax/image.png" alt="Image"></div>
                <div class="parallax-layer" style="z-index: 3;" data-depth="0.25"><img src="assets/img/parallax/shape-1.png" alt="Badge"></div>
                <div class="parallax-layer" data-depth="0.2"><img src="assets/img/parallax/shape-2.png" alt="Shape"></div>
                <div class="parallax-layer" style="z-index: 3;" data-depth="0.5"><img src="assets/img/parallax/shape-3.png" alt="Badge"></div>
                <div class="parallax-layer" style="z-index: 3;" data-depth="0.45"><img src="assets/img/parallax/shape-4.png" alt="Badge"></div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 pt-4 pb-5 py-md-5">
              <div class="mx-auto me-lg-4 ps-xl-3 order-md-1 text-center text-md-start" style="max-width: 420px;">
                <h1 class="text-light mb-3">Un equipo de profesionales</h1>
                <p class="text-light fs-lg">Estamos prestos para brindar la mejor asesoria y servicio</p>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start pb-3 pb-xl-5 mb-5">
                    <a class="btn btn-success me-4" href="https://web.whatsapp.com/send?phone=573105973233" target="_blank"><i class="fab fa-whatsapp fs-base text-light me-1 align-middle"></i> Contactanos</a>
                  <div class="d-flex align-items-center">
                      <i class="fas fa-phone-alt fs-base text-light me-1 align-middle"></i><a class="text-light text-decoration-none" href="tel:+573105973233">+ 57 3105973233</a>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                  <h2 class="h4 text-light mb-0 me-4">Our<br>Awards</h2>
                  <div class="bg-light opacity-50 me-4" style="width: 1px; height: 72px;"></div>
                  <div class="me-4"><img src="img/demo/marketing-seo/hero/award-1.png" alt="Award" width="102"></div>
                  <div><img src="img/demo/marketing-seo/hero/award-2.png" alt="Award" width="72"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Clients (carousel)-->
      <section class="bg-secondary py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to" src="assets/img/" alt="Logo" width="180"><img class="swap-from" src="img/demo/marketing-seo/clients/01_gray.png" alt="Logo" width="180"></a></div>
            <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to" src="assets/img/img/demo/marketing-seo/clients/02_color.png" alt="Logo" width="180"><img class="swap-from" src="img/demo/marketing-seo/clients/02_gray.png" alt="Logo" width="180"></a></div>
            <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to" src="assets/img/img/demo/marketing-seo/clients/03_color.png" alt="Logo" width="180"><img class="swap-from" src="img/demo/marketing-seo/clients/03_gray.png" alt="Logo" width="180"></a></div>
            <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to" src="assets/img/img/demo/marketing-seo/clients/04_color.png" alt="Logo" width="180"><img class="swap-from" src="img/demo/marketing-seo/clients/04_gray.png" alt="Logo" width="180"></a></div>
            <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to" src="assets/img/img/demo/marketing-seo/clients/05_color.png" alt="Logo" width="180"><img class="swap-from" src="img/demo/marketing-seo/clients/05_gray.png" alt="Logo" width="180"></a></div>
            <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to" src="assets/img/img/demo/marketing-seo/clients/06_color.png" alt="Logo" width="180"><img class="swap-from" src="img/demo/marketing-seo/clients/06_gray.png" alt="Logo" width="180"></a></div>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="container py-5 py-md-6 py-lg-7">
        <div class="row align-items-center mt-3 mt-md-0">
          <div class="col-lg-4 col-md-5 order-md-2 text-center text-md-start mb-5 mb-md-0">
            <h2 class="mb-3">Our services</h2>
            <p class="text-muted mb-4 pb-2">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint doloremque.</p><a class="btn btn-primary" href="#">See all services</a>
          </div>
          <div class="col-lg-8 col-md-7 order-md-1 bg-position-start-bottom bg-repeat-0" style="background-image: url(img/demo/marketing-seo/services/bg-shape.svg);">
            <div class="mx-auto mx-md-0 ms-xl-7" style="max-width: 600px;">
              <div class="row align-items-center">
                <div class="col-sm-6">
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/marketing-seo/services/01.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">SEO Website Audit</h3>
                    <p class="fs-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/marketing-seo/services/02.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Email Marketing</h3>
                    <p class="fs-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="mx-auto mx-md-0" style="max-width: 600px;">
              <div class="row align-items-center">
                <div class="col-sm-6">
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/marketing-seo/services/03.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Content Marketing</h3>
                    <p class="fs-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/marketing-seo/services/04.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Link Building</h3>
                    <p class="fs-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About-->
      <section class="bg-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mt-3 mt-md-0 py-5 py-md-0">
              <h2 class="text-lg-nowrap pb-2 text-center text-md-start">Respect For Your Business</h2>
              <p class="pb-2 text-center text-md-start">Our values ind aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
              <ul class="list-unstyled fs-sm pb-1 d-table mx-auto mx-md-0">
                <li class="d-flex mb-2"><i class="ai-check-circle text-success fs-lg me-3"></i><span>Excepteur sint</span></li>
                <li class="d-flex mb-2"><i class="ai-check-circle text-success fs-lg me-3"></i><span>Quam lacus suspendisse</span></li>
                <li class="d-flex mb-2"><i class="ai-check-circle text-success fs-lg me-3"></i><span>Elementum pulvinar etiam</span></li>
              </ul>
              <div class="text-center text-md-start"><a class="fw-medium" href="#">Learn more<i class="ai-chevron-right fs-xl ms-1 mt-n1 align-middle"></i></a></div>
            </div>
            <div class="col-md-8">
              <div class="parallax ms-auto" style="max-width: 757px;"><img class="d-block" src="img/demo/marketing-seo/about-img/lines.png" alt="Lines">
                <div class="parallax-layer" style="z-index: 2;" data-depth="0.15"><img src="img/demo/marketing-seo/about-img/image.png" alt="Image"></div>
                <div class="parallax-layer" style="z-index: 3;" data-depth="0.3"><img src="img/demo/marketing-seo/about-img/badge.png" alt="Badge"></div>
                <div class="parallax-layer" data-depth="0.25"><img src="img/demo/marketing-seo/about-img/shape.png" alt="Shape"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Case Studies-->
      <section class="bg-secondary py-5 py-md-6">
        <div class="container py-2">
          <h2 class="text-center">Our Case Studies</h2>
          <p class="text-center text-muted mb-5 pb-1">Click any project below to see the results!</p>
          <div class="row">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/marketing-seo/case-studies/01.jpg" alt="Corogy">
                <div class="card-body">
                  <h3 class="h5 mb-0">Corogy</h3>
                </div></a></div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/marketing-seo/case-studies/02.jpg" alt="SoapBar">
                <div class="card-body">
                  <h3 class="h5 mb-0">SoapBar</h3>
                </div></a></div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/marketing-seo/case-studies/03.jpg" alt="WAKA Coffee">
                <div class="card-body">
                  <h3 class="h5 mb-0">WAKA Coffee</h3>
                </div></a></div>
          </div>
          <div class="pt-3 text-center"><a class="btn btn-primary" href="#">See all Case Studies</a></div>
        </div>
      </section>
      <!-- Team-->
      <section class="container pt-5 pb-4 pb-md-5 pb-lg-6 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-2 pt-md-0 mb-5">Our Team</h2>
        <div class="row pb-3 pb-md-0">
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 20rem;"><a class="card-floating-icon fs-base" href="#"><i class="ai-linkedin"></i></a>
              <div class="card-img-top card-img-gradient"><img src="img/team/01.jpg" alt="Sarah Cole"></div>
              <div class="card-body text-center">
                <h3 class="h6 card-title mb-2">Sarah Cole</h3>
                <p class="fs-xs text-body mb-0">Social media strategist</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 20rem;"><a class="card-floating-icon fs-base" href="#"><i class="ai-linkedin"></i></a>
              <div class="card-img-top card-img-gradient"><img src="img/team/02.jpg" alt="Charlie Welch"></div>
              <div class="card-body text-center">
                <h3 class="h6 card-title mb-2">Charlie Welch</h3>
                <p class="fs-xs text-body mb-0">Instagram expert</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 20rem;"><a class="card-floating-icon fs-base" href="#"><i class="ai-linkedin"></i></a>
              <div class="card-img-top card-img-gradient"><img src="img/team/03.jpg" alt="Emma Brown"></div>
              <div class="card-body text-center">
                <h3 class="h6 card-title mb-2">Emma Brown</h3>
                <p class="fs-xs text-body mb-0">Content creator</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 20rem;"><a class="card-floating-icon fs-base" href="#"><i class="ai-linkedin"></i></a>
              <div class="card-img-top card-img-gradient"><img src="img/team/04.jpg" alt="Rosalie Lyons"></div>
              <div class="card-body text-center">
                <h3 class="h6 card-title mb-2">Rosalie Lyons</h3>
                <p class="fs-xs text-body mb-0">Social media educator</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 20rem;"><a class="card-floating-icon fs-base" href="#"><i class="ai-linkedin"></i></a>
              <div class="card-img-top card-img-gradient"><img src="img/team/05.jpg" alt="Jane Tanaka"></div>
              <div class="card-body text-center">
                <h3 class="h6 card-title mb-2">Jane Tanaka</h3>
                <p class="fs-xs text-body mb-0">Social media strategist</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 20rem;"><a class="card-floating-icon fs-base" href="#"><i class="ai-linkedin"></i></a>
              <div class="card-img-top card-img-gradient"><img src="img/team/06.jpg" alt="Sanomi Smith"></div>
              <div class="card-body text-center">
                <h3 class="h6 card-title mb-2">Sanomi Smith</h3>
                <p class="fs-xs text-body mb-0">Model and influencer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 20rem;"><a class="card-floating-icon fs-base" href="#"><i class="ai-linkedin"></i></a>
              <div class="card-img-top card-img-gradient"><img src="img/team/07.jpg" alt="Olivia Jones"></div>
              <div class="card-body text-center">
                <h3 class="h6 card-title mb-2">Olivia Jones</h3>
                <p class="fs-xs text-body mb-0">Content creator</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 20rem;"><a class="card-floating-icon fs-base" href="#"><i class="ai-linkedin"></i></a>
              <div class="card-img-top card-img-gradient"><img src="img/team/08.jpg" alt="Richard Davis"></div>
              <div class="card-body text-center">
                <h3 class="h6 card-title mb-2">Richard Davis</h3>
                <p class="fs-xs text-body mb-0">Travel content creator</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
      <section class="bg-secondary py-5 py-md-6 py-lg-7">
        <div class="container">
          <h2 class="text-center mb-5">What our clients say about us</h2>
          <div class="row justify-content-center">
            <div class="col-xl-11">
              <div class="tns-carousel-wrapper">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                  <!-- Item-->
                  <div>
                    <div class="pb-3 pb-md-0 ps-md-7 ms-md-3">
                      <div class="bg-size-cover bg-position-center rounded-3 py-7" style="background-image: url(img/demo/business-consulting/testimonials/02.jpg);">
                        <div class="d-md-flex align-items-center ms-md-n7 text-center text-md-start">
                          <div class="card card-body d-none d-md-flex py-grid-gutter px-grid-gutter border-0 shadow-lg me-6 scale-up" style="max-width: 28rem;">
                            <blockquote class="blockquote">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                              <footer class="blockquote-footer">Miguel Sánchez, CEO Company Ltd.</footer>
                            </blockquote>
                          </div><a class="btn-video btn-video-sm my-4" href="https://www.youtube.com/watch?v=PjNJfOrKT3I" data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;Video caption&lt;/h6&gt;"></a>
                        </div>
                      </div>
                      <div class="d-md-none mt-n6 px-3 scale-up">
                        <div class="card card-body py-grid-gutter px-grid-gutter border-0 shadow mx-auto" style="max-width: 28rem;">
                          <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            <footer class="blockquote-footer">Miguel Sánchez, CEO Company Ltd.</footer>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div>
                    <div class="pb-3 pb-md-0 ps-md-7 ms-md-3">
                      <div class="bg-size-cover bg-position-center rounded-3 py-7" style="background-image: url(img/demo/business-consulting/testimonials/01.jpg);">
                        <div class="d-md-flex align-items-center ms-md-n7 text-center text-md-start">
                          <div class="card card-body d-none d-md-flex py-grid-gutter px-grid-gutter border-0 shadow-lg me-6 scale-up" style="max-width: 28rem;">
                            <blockquote class="blockquote">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                              <footer class="blockquote-footer">Paul Anderson, CEO Company Ltd.</footer>
                            </blockquote>
                          </div><a class="btn-video btn-video-sm my-4" href="https://www.youtube.com/watch?v=YwIQnTkP060" data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;Video caption&lt;/h6&gt;"></a>
                        </div>
                      </div>
                      <div class="d-md-none mt-n6 px-3 scale-up">
                        <div class="card card-body py-grid-gutter px-grid-gutter border-0 shadow mx-auto" style="max-width: 28rem;">
                          <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            <footer class="blockquote-footer">Paul Anderson, CEO Company Ltd.</footer>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog-->
      <section class="container py-5 py-md-6 py-lg-7 mb-4 mb-md-0">
        <h2 class="mb-5 mt-3 mt-md-0 text-center">From the blog</h2>
        <div class="tns-carousel-wrapper">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}">
            <!-- Article-->
            <div class="pb-2">
              <article class="card card-hover h-100 pt-4 pb-5 mx-1"><span class="badge badge-lg badge-floating badge-floating-end bg-success">New</span>
                <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Marketing</a>
                  <h3 class="h4 nav-heading mb-4"><a href="#">Top 5 SEO Tips to Increase Your Website's Traffic</a></h3>
                </div>
                <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/02.jpg" alt="Sanomi Smith" width="42">
                    <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sanomi Smith</span></div></a>
                  <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Feb 12</a></div>
                </div>
              </article>
            </div>
            <!-- Article-->
            <div class="pb-2">
              <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">CMS</a>
                  <h3 class="h4 nav-heading mb-4"><a href="#">List of Excellent Learning Management Systems</a></h3>
                </div>
                <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                    <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Tim Brooks</span></div></a>
                  <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 27</a></div>
                </div>
              </article>
            </div>
            <!-- Article-->
            <div class="pb-2">
              <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Web development</a>
                  <h3 class="h4 nav-heading mb-4"><a href="#">Build Complete Websites in a Fraction of Time With This Handy Tool</a></h3>
                </div>
                <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/04.jpg" alt="Charlie Welch" width="42">
                    <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Charlie Welch</span></div></a>
                  <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 15</a></div>
                </div>
              </article>
            </div>
            <!-- Article-->
            <div class="pb-2">
              <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Project management</a>
                  <h3 class="h4 nav-heading mb-4"><a href="#">What You Can Learn About Managing Projects</a></h3>
                </div>
                <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/07.jpg" alt="Sarah Palson" width="42">
                    <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sarah Palson</span></div></a>
                  <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Dec 19</a></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact form + Details-->
      <section class="bg-dark py-5 py-sm-6 py-md-7">
        <div class="container py-3 py-sm-0">
          <div class="row">
            <form class="col-xl-6 col-lg-7 col-md-7 needs-validation mb-5 mb-md-0" novalidate>
              <h2 class="text-light pb-4">Ready for changes? Contact us</h2>
              <div class="input-group mb-3"><i class="ai-user position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input class="form-control rounded" type="text" placeholder="Name" required>
              </div>
              <div class="input-group mb-3"><i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input class="form-control rounded" type="email" placeholder="Email" required>
              </div>
              <div class="mb-3 pb-1">
                <textarea class="form-control" rows="6" placeholder="Project description" required></textarea>
              </div>
              <div class="row pt-2">
                <div class="col-lg-6 col-md-8">
                  <button class="btn btn-primary d-block w-100" type="submit">Send Request</button>
                </div>
              </div>
            </form>
            <div class="col-xl-3 col-lg-4 offset-xl-3 offset-lg-1 col-md-5">
              <h2 class="text-light pb-2">Contacts</h2>
              <ul class="list-unstyled fs-sm mb-4 pb-2">
                <li><a class="nav-link-style nav-link-light" href="mailto:contact@example.com">contact@example.com</a></li>
                <li><a class="nav-link-style nav-link-light" href="tel:+15262200459">+ 1 526 220 0459</a></li>
              </ul>
              <h3 class="h6 pb-2 text-light">Or connect with us on:</h3><a class="btn-social bs-facebook bs-light bs-lg me-2 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-twitter bs-light bs-lg me-2 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-instagram bs-light bs-lg me-2 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-linkedin bs-light bs-lg me-2 mb-2" href="#"><i class="ai-linkedin"></i></a>
            </div>
          </div>
        </div>
      </section>
    </main>
   <?php require 'assets/template/footer.php';?>
