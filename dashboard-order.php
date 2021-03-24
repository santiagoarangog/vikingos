
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Around | Dashboard - Orders</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=z3cT79G2tOgvj75_i5Wjv7tkFZBcH5BsxhqsmYjcDrhDqEmaH9HGxaOUui8rDmW9nkTgNsIISHEE1YdPIeiovQ0P7zgMtYBvxLWYX8zJOF4" charset="UTF-8"></script><style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #737491;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #766df4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body style="background-color:#f7f7fc;">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Navbar (Floating light)-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="header navbar navbar-expand-lg navbar-dark navbar-floating navbar-sticky" data-scroll-header data-fixed-element>
        <div class="container px-0 px-xl-3">
          <button class="navbar-toggler ms-n2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="index.html"><img class="navbar-floating-logo d-none d-lg-block" src="img/logo/logo-light.png" alt="Around" width="153"><img class="navbar-stuck-logo" src="img/logo/logo-dark.png" alt="Around" width="153"><img class="d-lg-none" src="img/logo/logo-icon.png" alt="Around" width="58"></a>
          <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
            <div class="navbar-tool dropdown"><a class="navbar-tool-icon-box" href="account-profile.html"><img class="navbar-tool-icon-box-img" src="img/dashboard/avatar/main-sm.jpg" alt="Avatar"></a><a class="navbar-tool-label dropdown-toggle" href="account-profile.html"><small>Hello,</small>Amanda</a>
              <ul class="dropdown-menu dropdown-menu-end" style="width: 15rem;">
                <li><a class="dropdown-item d-flex align-items-center" href="dashboard-orders.html"><i class="ai-shopping-bag fs-base opacity-60 me-2"></i>Orders<span class="nav-indicator"></span><span class="ms-auto fs-xs text-muted">2</span></a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center" href="dashboard-sales.html"><i class="ai-dollar-sign fs-base opacity-60 me-2"></i>Sales<span class="ms-auto fs-xs text-muted">$735.00</span></a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center" href="dashboard-messages.html"><i class="ai-message-square fs-base opacity-60 me-2"></i>Messages<span class="nav-indicator"></span><span class="ms-auto fs-xs text-muted">1</span></a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center" href="dashboard-followers.html"><i class="ai-users fs-base opacity-60 me-2"></i>Followers<span class="ms-auto fs-xs text-muted">34</span></a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html"><i class="ai-star fs-base opacity-60 me-2"></i>Reviews<span class="ms-auto fs-xs text-muted">15</span></a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center" href="dashboard-favorites.html"><i class="ai-heart fs-base opacity-60 me-2"></i>Favorites<span class="ms-auto fs-xs text-muted">6</span></a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center" href="signin-illustration.html"><i class="ai-log-out fs-base opacity-60 me-2"></i>Sign out</a></li>
              </ul>
            </div>
          </div>
          <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
            <div class="offcanvas-cap navbar-shadow">
              <h5 class="mt-1 mb-0">Menu</h5>
              <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <!-- Menu-->
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Demos</a>
                  <div class="dropdown-menu"><a class="dropdown-column dropdown-column-img bg-secondary" href="index.html" style="background-image: url(img/demo/menu-banner.jpg);"></a>
                    <div class="dropdown-column"><a class="dropdown-item" href="index.html">Web Template Presentation</a><a class="dropdown-item" href="demo-business-consulting.html">Business Consulting</a><a class="dropdown-item" href="demo-shop-homepage.html">Shop Homepage</a><a class="dropdown-item" href="demo-booking-directory.html">Booking / Directory</a><a class="dropdown-item" href="demo-creative-agency.html">Creative Agency</a><a class="dropdown-item" href="demo-web-studio.html">Web Studio</a><a class="dropdown-item" href="demo-product-software.html">Product Landing - Software</a></div>
                    <div class="dropdown-column"><a class="dropdown-item" href="demo-product-gadget.html">Product Landing - Gadget</a><a class="dropdown-item" href="demo-mobile-app.html">Mobile App Showcase</a><a class="dropdown-item" href="demo-coworking-space.html">Coworking Space</a><a class="dropdown-item" href="demo-event-landing.html">Event Landing</a><a class="dropdown-item" href="demo-marketing-seo.html">Digital Marketing &amp; SEO</a><a class="dropdown-item" href="demo-food-blog.html">Food Blog</a><a class="dropdown-item" href="demo-personal-portfolio.html">Personal Portfolio</a></div>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Templates</a>
                  <div class="dropdown-menu">
                    <div class="dropdown-column mb-2 mb-lg-0">
                      <h5 class="dropdown-header">Blog</h5><a class="dropdown-item" href="blog-grid-rs.html">Grid Right Sidebar</a><a class="dropdown-item" href="blog-grid-ls.html">Grid Left Sidebar</a><a class="dropdown-item" href="blog-grid-ns.html">Grid No Sidebar</a><a class="dropdown-item" href="blog-list-rs.html">List Right Sidebar</a><a class="dropdown-item" href="blog-list-ls.html">List Left Sidebar</a><a class="dropdown-item" href="blog-list-ns.html">List No Sidebar</a><a class="dropdown-item" href="blog-single-rs.html">Single Post Right Sidebar</a><a class="dropdown-item" href="blog-single-ls.html">Single Post Left Sidebar</a><a class="dropdown-item" href="blog-single-ns.html">Single Post No Sidebar</a>
                    </div>
                    <div class="dropdown-column mb-2 mb-lg-0">
                      <h5 class="dropdown-header">Portfolio</h5><a class="dropdown-item" href="portfolio-style-1.html">Grid Style 1</a><a class="dropdown-item" href="portfolio-style-2.html">Grid Style 2</a><a class="dropdown-item" href="portfolio-style-3.html">Grid Style 3</a><a class="dropdown-item" href="portfolio-single-side-gallery-grid.html">Project Side Gallery (Grid)</a><a class="dropdown-item" href="portfolio-single-side-gallery-list.html">Project Side Gallery (List)</a><a class="dropdown-item" href="portfolio-single-carousel.html">Project Carousel</a><a class="dropdown-item" href="portfolio-single-wide-gallery.html">Project Wide Gallery</a>
                    </div>
                    <div class="dropdown-column mb-2 mb-lg-0">
                      <h5 class="dropdown-header">Shop</h5><a class="dropdown-item" href="shop-ls.html">Grid Left Sidebar</a><a class="dropdown-item" href="shop-rs.html">Grid Right Sidebar</a><a class="dropdown-item" href="shop-ns.html">Grid No Sidebar</a><a class="dropdown-item" href="shop-single.html">Single Product</a><a class="dropdown-item" href="checkout.html">Cart &amp; Checkout</a><a class="dropdown-item" href="order-tracking.html">Order Tracking</a>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Dashboard</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="dashboard-orders.html">Orders</a></li>
                        <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                        <li><a class="dropdown-item" href="dashboard-messages.html">Messages</a></li>
                        <li><a class="dropdown-item" href="dashboard-followers.html">Followers</a></li>
                        <li><a class="dropdown-item" href="dashboard-reviews.html">Reviews</a></li>
                        <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Account Settings</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="account-profile.html">Profile Info</a></li>
                        <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                        <li><a class="dropdown-item" href="account-notifications.html">Notifications</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="signin-illustration.html">Sign In - Illustration</a></li>
                    <li><a class="dropdown-item" href="signin-image.html">Sign In - Image</a></li>
                    <li><a class="dropdown-item" href="signin-signup.html">Sign In - Sign Up</a></li>
                    <li><a class="dropdown-item" href="password-recovery.html">Password Recovery</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">About</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contacts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                        <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                        <li><a class="dropdown-item" href="contacts-v3.html">Contacts v.3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Help Center</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                        <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                        <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">404 Not Found</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="404-simple.html">Simple Text</a></li>
                        <li><a class="dropdown-item" href="404-illustration.html">Illustration</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Coming Soon</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="coming-soon-image.html">Image</a></li>
                        <li><a class="dropdown-item" href="coming-soon-illustration.html">Illustration</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Docs / UI Kit</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="docs/dev-setup.html">
                        <div class="d-flex align-items-center">
                          <div class="fs-xl text-muted"><i class="ai-file-text"></i></div>
                          <div class="ps-3"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="components/typography.html">
                        <div class="d-flex align-items-center">
                          <div class="fs-xl text-muted"><i class="ai-layers"></i></div>
                          <div class="ps-3"><span class="d-block text-heading">UI Kit<span class="badge bg-danger ms-2">50+</span></span><small class="d-block text-muted">Flexible components</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="docs/changelog.html">
                        <div class="d-flex align-items-center">
                          <div class="fs-xl text-muted"><i class="ai-edit"></i></div>
                          <div class="ps-3"><span class="d-block text-heading">Changelog<span class="badge bg-success ms-2">v2.0.0</span></span><small class="d-block text-muted">Regular updates</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="mailto:support@createx.studio">
                        <div class="d-flex align-items-center">
                          <div class="fs-xl text-muted"><i class="ai-life-buoy"></i></div>
                          <div class="ps-3"><span class="d-block text-heading">Support</span><small class="d-block text-muted">support@createx.studio</small></div>
                        </div></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- Page content-->
      <!-- Slanted background-->
      <div class="position-relative bg-gradient" style="height: 480px;">
        <div class="shape shape-bottom shape-slant bg-secondary d-none d-lg-block">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
            <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
          </svg>
        </div>
      </div>
      <!-- Page content-->
      <div class="container position-relative zindex-5 pb-4 mb-md-3" style="margin-top: -350px;">
        <div class="row">
          <!-- Sidebar-->
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="bg-light rounded-3 shadow-lg">
              <div class="px-4 py-4 mb-1 text-center"><img class="d-block rounded-circle mx-auto my-2" src="img/dashboard/avatar/main.jpg" at="Amanda Wilson" width="110">
                <h6 class="mb-0 pt-1">Amanda Wilson</h6><span class="text-muted fs-sm">@amanda_w</span>
              </div>
              <div class="d-lg-none px-4 pb-4 text-center"><a class="btn btn-primary px-5 mb-2" href="#account-menu" data-bs-toggle="collapse"><i class="ai-menu me-2"></i>Account menu</a></div>
              <div class="d-lg-block collapse pb-2" id="account-menu">
                <h3 class="d-block bg-secondary fs-sm fw-semibold text-muted mb-0 px-4 py-3">Dashboard</h3><a class="d-flex align-items-center nav-link-style px-4 py-3 active" href="dashboard-orders.html"><i class="ai-shopping-bag fs-lg opacity-60 me-2"></i>Orders<span class="nav-indicator"></span><span class="text-muted fs-sm fw-normal ms-auto">2</span></a><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="dashboard-sales.html"><i class="ai-dollar-sign fs-lg opacity-60 me-2"></i>Sales<span class="text-muted fs-sm fw-normal ms-auto">$735.00</span></a><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="dashboard-messages.html"><i class="ai-message-square fs-lg opacity-60 me-2"></i>Messages<span class="nav-indicator"></span><span class="text-muted fs-sm fw-normal ms-auto">1</span></a><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="dashboard-followers.html"><i class="ai-users fs-lg opacity-60 me-2"></i>Followers<span class="text-muted fs-sm fw-normal ms-auto">34</span></a><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="dashboard-reviews.html"><i class="ai-star fs-lg opacity-60 me-2"></i>Reviews<span class="text-muted fs-sm fw-normal ms-auto">15</span></a><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="dashboard-favorites.html"><i class="ai-heart fs-lg opacity-60 me-2"></i>Favorites<span class="text-muted fs-sm fw-normal ms-auto">6</span></a>
                <h3 class="d-block bg-secondary fs-sm fw-semibold text-muted mb-0 px-4 py-3">Account settings</h3><a class="d-flex align-items-center nav-link-style px-4 py-3" href="account-profile.html">Profile info</a><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="account-payment.html">Payment methods</a>
                <div class="d-flex align-items-center border-top"><a class="d-block w-100 nav-link-style px-4 py-3" href="account-notifications.html">Notifications</a>
                  <div class="ms-auto px-3">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="notifications-switch" data-master-checkbox-for="#notification-settings" checked>
                      <label class="form-check-label" for="notifications-switch"></label>
                    </div>
                  </div>
                </div><a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="signin-illustration.html"><i class="ai-log-out fs-lg opacity-60 me-2"></i>Sign out</a>
              </div>
            </div>
          </div>
          <!-- Content-->
          <div class="col-lg-8">
            <div class="d-flex flex-column h-100 bg-light rounded-3 shadow-lg p-4">
              <div class="py-2 p-md-3">
                <!-- Title + Filters-->
                <div class="d-sm-flex align-items-center justify-content-between pb-2">
                  <h1 class="h3 mb-3 text-center text-sm-start">Orders history</h1>
                  <div class="d-flex align-items-center mb-3">
                    <label class="form-label text-nowrap pe-1 me-2 mb-0">Sort orders</label>
                    <select class="form-select form-select-sm">
                      <option>All</option>
                      <option>In progress</option>
                      <option>Delivered</option>
                      <option>Canceled</option>
                    </select>
                  </div>
                </div>
                <!-- Accordion with orders-->
                <div class="accordion" id="orders-accordion">
                  <!-- Order-->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="order-header-1">
                      <button class="accordion-button no-indicator d-flex flex-wrap align-items-center justify-content-between pe-4" data-bs-toggle="collapse" data-bs-target="#order-collapse-1" aria-expanded="true" aria-controls="order-collapse-1">
                        <div class="fs-sm fw-medium text-nowrap my-1 me-2"><i class="ai-hash fs-base me-1"></i><span class="d-inline-block align-middle">34VB5540K83</span></div>
                        <div class="text-nowrap text-body fs-sm fw-normal my-1 me-2"><i class="ai-clock text-muted me-1"></i>Aug 04, 2020</div>
                        <div class="bg-faded-info text-info fs-xs fw-medium py-1 px-3 rounded-1 my-1 me-2">In progress</div>
                        <div class="text-body fs-sm fw-medium my-1">$187.65</div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse show" id="order-collapse-1" aria-labelledby="order-header-1" data-bs-parent="#orders-accordion">
                      <div class="accordion-body pt-4 bg-secondary rounded-top-0 rounded-3">
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/01.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Mom High Waist Shorts</a></h5>
                              <div><span class="text-muted me-1">Size:</span>XS</div>
                              <div><span class="text-muted me-1">Color:</span>Blue</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$49.50</div>
                          </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/02.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Cotton T-shirt with Print</a></h5>
                              <div><span class="text-muted me-1">Size:</span>XS</div>
                              <div><span class="text-muted me-1">Color:</span>Black / Printed</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$17.99</div>
                          </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/03.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Floral Printed Sneakers</a></h5>
                              <div><span class="text-muted me-1">Size:</span>8.5</div>
                              <div><span class="text-muted me-1">Color:</span>Floral print</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$86.00</div>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Subtotal:</span><span class="fw-medium">$153.49</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Shipping:</span><span class="fw-medium">$27.31</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Tax:</span><span class="fw-medium">$6.85</span></div>
                          <div class="fs-sm my-2"><span class="text-muted me-1">Total:</span><span class="fw-medium">$187.65</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Order-->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="order-header-2">
                      <button class="accordion-button collapsed accordion-button no-indicator d-flex flex-wrap align-items-center justify-content-between pe-4" type="button" data-bs-toggle="collapse" data-bs-target="#order-collapse-2" aria-expanded="false" aria-controls="order-collapse-2">
                        <div class="fs-sm fw-medium text-nowrap my-1 me-2"><i class="ai-hash fs-base me-1"></i><span class="d-inline-block align-middle">47H76G09F33</span></div>
                        <div class="text-nowrap text-body fs-sm fw-normal my-1 me-2"><i class="ai-clock text-muted me-1"></i>Jul 30, 2020</div>
                        <div class="bg-faded-info text-info fs-xs fw-medium py-1 px-3 rounded-1 my-1 me-2">In progress</div>
                        <div class="text-body fs-sm fw-medium my-1">$789.34</div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="order-collapse-2" aria-labelledby="order-header-2" data-bs-parent="#orders-accordion">
                      <div class="accordion-body pt-4 bg-secondary rounded-top-0 rounded-3">
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/04.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Smart Watch Series 5</a></h5>
                              <div><span class="text-muted me-1">Screen:</span>42"</div>
                              <div><span class="text-muted me-1">Band color:</span>White</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$49.50</div>
                          </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/05.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Sport Running Sneakers</a></h5>
                              <div><span class="text-muted me-1">Size:</span>10.5</div>
                              <div><span class="text-muted me-1">Color:</span>White / Orange</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$145.00</div>
                          </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/06.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Wireless Bluetooth Headset</a></h5>
                              <div><span class="text-muted me-1">Brand:</span>Beats</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$258.00</div>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Subtotal:</span><span class="fw-medium">$776.99</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Shipping:</span><span class="fw-medium">$12.35</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Tax:</span><span class="fw-medium">&mdash;</span></div>
                          <div class="fs-sm my-2"><span class="text-muted me-1">Total:</span><span class="fw-medium">$789.34</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Order-->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="order-header-3">
                      <button class="accordion-button collapsed accordion-button no-indicator d-flex flex-wrap align-items-center justify-content-between pe-4" type="button" data-bs-toggle="collapse" data-bs-target="#order-collapse-3" aria-expanded="false" aria-controls="order-collapse-3">
                        <div class="fs-sm fw-medium text-nowrap my-1 me-2"><i class="ai-hash fs-base me-1"></i><span class="d-inline-block align-middle">78A6431D409</span></div>
                        <div class="text-nowrap text-body fs-sm fw-normal my-1 me-2"><i class="ai-clock text-muted me-1"></i>Jul 16, 2020</div>
                        <div class="bg-faded-danger text-danger fs-xs fw-medium py-1 px-3 rounded-1 my-1 me-2">Canceled</div>
                        <div class="text-body fs-sm fw-medium my-1">$215.40</div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="order-collapse-3" aria-labelledby="order-header-3" data-bs-parent="#orders-accordion">
                      <div class="accordion-body pt-4 bg-secondary rounded-top-0 rounded-3">
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/07.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">360 Degrees Camera</a></h5>
                              <div><span class="text-muted me-1">Category:</span>Electronics</div>
                              <div><span class="text-muted me-1">Color:</span>White</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$110.00</div>
                          </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/08.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Vintage Travel Backpack</a></h5>
                              <div><span class="text-muted me-1">Color:</span>Green / Brown</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$81.45</div>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Subtotal:</span><span class="fw-medium">$191.45</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Shipping:</span><span class="fw-medium">$15.20</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Tax:</span><span class="fw-medium">$8.75</span></div>
                          <div class="fs-sm my-2"><span class="text-muted me-1">Total:</span><span class="fw-medium">$215.40</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Order-->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="order-header-4">
                      <button class="accordion-button collapsed accordion-button no-indicator d-flex flex-wrap align-items-center justify-content-between pe-4" type="button" data-bs-toggle="collapse" data-bs-target="#order-collapse-4" aria-expanded="false" aria-controls="order-collapse-4">
                        <div class="fs-sm fw-medium text-nowrap my-1 me-2"><i class="ai-hash fs-base me-1"></i><span class="d-inline-block align-middle">112P45A90V2</span></div>
                        <div class="text-nowrap text-body fs-sm fw-normal my-1 me-2"><i class="ai-clock text-muted me-1"></i>May 28, 2020</div>
                        <div class="bg-faded-success text-success fs-xs fw-medium py-1 px-3 rounded-1 my-1 me-2">Delivered</div>
                        <div class="text-body fs-sm fw-medium my-1">$94.75</div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="order-collapse-4" aria-labelledby="order-header-4" data-bs-parent="#orders-accordion">
                      <div class="accordion-body pt-4 bg-secondary rounded-top-0 rounded-3">
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/09.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Sport Running Sneakers</a></h5>
                              <div><span class="text-muted me-1">Size:</span>11</div>
                              <div><span class="text-muted me-1">Color:</span>Gray</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$82.00</div>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Subtotal:</span><span class="fw-medium">$82.00</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Shipping:</span><span class="fw-medium">$9.00</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Tax:</span><span class="fw-medium">$3.75</span></div>
                          <div class="fs-sm my-2"><span class="text-muted me-1">Total:</span><span class="fw-medium">$94.75</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Order-->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="order-header-5">
                      <button class="accordion-button collapsed accordion-button no-indicator d-flex flex-wrap align-items-center justify-content-between pe-4" type="button" data-bs-toggle="collapse" data-bs-target="#order-collapse-5" aria-expanded="false" aria-controls="order-collapse-5">
                        <div class="fs-sm fw-medium text-nowrap my-1 me-2"><i class="ai-hash fs-base me-1"></i><span class="d-inline-block align-middle">502TR872W2</span></div>
                        <div class="text-nowrap text-body fs-sm fw-normal my-1 me-2"><i class="ai-clock text-muted me-1"></i>Apr 05, 2020</div>
                        <div class="bg-faded-success text-success fs-xs fw-medium py-1 px-3 rounded-1 my-1 me-2">Delivered</div>
                        <div class="text-body fs-sm fw-medium my-1">$128.00</div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="order-collapse-5" aria-labelledby="order-header-5" data-bs-parent="#orders-accordion">
                      <div class="accordion-body pt-4 bg-secondary rounded-top-0 rounded-3">
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/10.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Military Cotton Cap</a></h5>
                              <div><span class="text-muted me-1">Category:</span>Accessories</div>
                              <div><span class="text-muted me-1">Color:</span>Military</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$16.00</div>
                          </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between mb-3 pb-1">
                          <div class="order-item d-block d-sm-flex me-sm-3"><a class="d-table mx-sm-0 mx-auto flex-shrink-0" href="#"><img class="d-block rounded" src="img/dashboard/orders/11.jpg" alt="Thumbnail" width="105"></a>
                            <div class="fs-sm pt-2 ps-sm-3 text-center text-sm-start">
                              <h5 class="nav-heading fs-sm mb-2"><a href="#">Women Colorblock Sneakers</a></h5>
                              <div><span class="text-muted me-1">Size:</span>8.5</div>
                            </div>
                          </div>
                          <div class="fs-sm text-center pt-2 me-sm-3">
                            <div class="text-muted">Quantity:</div>
                            <div class="fw-medium">1</div>
                          </div>
                          <div class="fs-sm text-center pt-2">
                            <div class="text-muted">Subtotal:</div>
                            <div class="fw-medium">$102.00</div>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Subtotal:</span><span class="fw-medium">$118.00</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Shipping:</span><span class="fw-medium">$7.50</span></div>
                          <div class="fs-sm my-2 me-2"><span class="text-muted me-1">Tax:</span><span class="fw-medium">$2.50</span></div>
                          <div class="fs-sm my-2"><span class="text-muted me-1">Total:</span><span class="fw-medium">$128.00</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Pagination-->
                <nav class="d-md-flex justify-content-between align-items-center text-center text-md-start pt-grid-gutter">
                  <div class="d-md-flex align-items-center w-100"><span class="fs-sm text-muted me-md-3">Showing 5 of 13 orders</span>
                    <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                      <div class="progress-bar" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <button class="btn btn-outline-primary btn-sm" type="button">Load more orders</button>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer py-4">
      <div class="container d-md-flex align-items-center justify-content-between py-2 text-center text-md-end">
        <ul class="list-inline fs-sm mb-3 mb-md-0 order-md-2">
          <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Support</a></li>
          <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Contacts</a></li>
          <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Terms &amp; Conditions</a></li>
        </ul>
        <p class="fs-sm mb-0 me-3 order-md-1"><span class="text-muted me-1">© All rights reserved. Made by</span><a class="nav-link-style fw-normal" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></p>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>