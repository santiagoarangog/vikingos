
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Around | Shop Grid Left Sidebar</title>
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
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=8CKI33eRG0fGCSX9bM9F4Kt9h5Fo-sMHIH_4hvHp-b_weINmdd8zRderLLJt-j9WN-NFmM0a72_AWmlNDEAzRw" charset="UTF-8"></script><style>
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
    <link rel="stylesheet" media="screen" href="vendor/nouislider/distribute/nouislider.min.css"/>
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
  <body class="is-sidebar">
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
      <!-- Sign In Modal-->
      <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content border-0">
            <div class="view show" id="modal-signin-view">
              <div class="modal-header border-0 bg-dark px-4">
                <h4 class="modal-title text-light">Sign in</h4>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close "></button>
              </div>
              <div class="modal-body px-4">
                <p class="fs-ms text-muted">Sign in to your account using email and password provided during registration.</p>
                <form class="needs-validation" novalidate>
                  <div class="mb-3">
                    <div class="input-group"><i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <input class="form-control rounded" type="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="input-group"><i class="ai-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <div class="password-toggle w-100">
                        <input class="form-control" type="password" placeholder="Password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="keep-signed">
                      <label class="form-check-label fs-sm" for="keep-signed">Keep me signed in</label>
                    </div><a class="nav-link-style fs-ms" href="password-recovery.html">Forgot password?</a>
                  </div>
                  <button class="btn btn-primary d-block w-100" type="submit">Sign in</button>
                  <p class="fs-sm pt-3 mb-0">Don't have an account? <a href='#' class='fw-medium' data-view='#modal-signup-view'>Sign up</a></p>
                </form>
              </div>
            </div>
            <div class="view" id="modal-signup-view">
              <div class="modal-header border-0 bg-dark px-4">
                <h4 class="modal-title text-light">Sign up</h4>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close"></button>
              </div>
              <div class="modal-body px-4">
                <p class="fs-ms text-muted">Registration takes less than a minute but gives you full control over your orders.</p>
                <form class="needs-validation" novalidate>
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Full name" required>
                  </div>
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Email" required>
                  </div>
                  <div class="mb-3 password-toggle">
                    <input class="form-control" type="password" placeholder="Password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                  <div class="mb-3 password-toggle">
                    <input class="form-control" type="password" placeholder="Confirm password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                  <button class="btn btn-primary d-block w-100" type="submit">Sign up</button>
                  <p class="fs-sm pt-3 mb-0">Already have an account? <a href='#' class='fw-medium' data-view='#modal-signin-view'>Sign in</a></p>
                </form>
              </div>
            </div>
            <div class="modal-body text-center px-4 pt-2 pb-4">
              <hr class="my-0">
              <p class="fs-sm fw-medium text-heading pt-4">Or sign in with</p><a class="btn-social bs-facebook bs-lg mx-1 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-twitter bs-lg mx-1 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-instagram bs-lg mx-1 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-google bs-lg mx-1 mb-2" href="#"><i class="ai-google"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Shopping cart off-canvas-->
      <div class="offcanvas offcanvas-end" id="shoppingCart">
        <div class="offcanvas-cap navbar-shadow px-4 mb-2">
          <h5 class="mt-1 mb-0">Your cart</h5>
          <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4" data-simplebar>
          <div class="d-flex align-items-center mb-3"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/05.jpg" alt="Product" width="60"></a>
            <div class="w-100 ps-2 ms-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="me-3">
                  <h4 class="nav-heading fs-md mb-1"><a class="fw-medium" href="shop-single.html">Smart Watch Series 5</a></h4>
                  <div class="d-flex align-items-center fs-sm"><span class="me-2">$364.99</span><span class="me-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" min="1" value="1">
                  </div>
                </div>
                <div class="ps-3 border-start"><a class="d-block text-danger text-decoration-none fs-xl" href="#" data-bs-toggle="tooltip" title="Remove"><i class="ai-x-circle"></i></a></div>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-3"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/02.jpg" alt="Product" width="60"></a>
            <div class="w-100 ps-2 ms-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="me-3">
                  <h4 class="nav-heading fs-md mb-1"><a class="fw-medium" href="shop-single.html">Running Sneakers, Collection</a></h4>
                  <div class="d-flex align-items-center fs-sm"><span class="me-2">$145.00</span><span class="me-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" min="1" value="1">
                  </div>
                </div>
                <div class="ps-3 border-start"><a class="d-block text-danger text-decoration-none fs-xl" href="#" data-bs-toggle="tooltip" title="Remove"><i class="ai-x-circle"></i></a></div>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-3"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/06.jpg" alt="Product" width="60"></a>
            <div class="w-100 ps-2 ms-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="me-3">
                  <h4 class="nav-heading fs-md mb-1"><a class="fw-medium" href="shop-single.html">Wireless Bluetooth Headset</a></h4>
                  <div class="d-flex align-items-center fs-sm"><span class="me-2">$258.00</span><span class="me-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" min="1" value="1">
                  </div>
                </div>
                <div class="ps-3 border-start"><a class="d-block text-danger text-decoration-none fs-xl" href="#" data-bs-toggle="tooltip" title="Remove"><i class="ai-x-circle"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="offcanvas-cap d-block border-top px-4 mb-2">
          <div class="d-flex justify-content-between mb-4"><span>Total:</span><span class="h6 mb-0">$776.99</span></div><a class="btn btn-primary btn-sm d-block w-100" href="checkout.html"><i class="ai-credit-card fs-base me-2"></i>Checkout</a>
        </div>
      </div>
      <!-- Navbar (Solid background + shadow)-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="header">
        <div class="topbar topbar-dark bg-dark">
          <div class="container d-md-flex align-items-center px-0 px-xl-3">
            <div class="d-none d-md-block text-nowrap me-3"><i class="ai-phone fs-base text-muted me-1 align-middle"></i><span class="text-muted me-2">Support</span><a class="topbar-link me-1" href="tel:9107848015">910-784-8015</a></div>
            <div class="d-flex text-md-end ms-md-auto"><a class="topbar-link pe-2 me-4" href="order-tracking.html"><i class="ai-map-pin fs-base opacity-60 me-1 align-middle"></i>Track <span class='d-none d-sm-inline'>your order</span></a>
              <div class="dropdown ms-auto ms-md-0 me-3"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" alt="English" width="20">Eng</a>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/fr.png" alt="Français" width="20">Français</a><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/de.png" alt="Deutsch" width="20">Deutsch</a><a class="dropdown-item" href="#"><img class="mt-n1 me-2" src="img/flags/it.png" alt="Italiano" width="20">Italiano</a></div>
              </div>
              <div class="dropdown"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown">$ Dollar (US)</a>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">€ Euro (EU)</a><a class="dropdown-item" href="#">£ Pound (UK)</a><a class="dropdown-item" href="#">¥ Yen (JP)</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light navbar-shadow navbar-sticky" data-scroll-header data-fixed-element>
          <div class="navbar-search bg-light">
            <div class="container d-flex flex-nowrap align-items-center"><i class="ai-search fs-xl"></i>
              <input class="form-control form-control-xl navbar-search-field" type="text" placeholder="Search site">
              <div class="d-none d-sm-block flex-shrink-0 ps-2 me-4 border-start border-end" style="width: 10rem;">
                <select class="form-select ps-2 pe-0">
                  <option value="all">All categories</option>
                  <option value="clothing">Clothing</option>
                  <option value="shoes">Shoes</option>
                  <option value="electronics">Electronics</option>
                  <option value="accessoriies">Accessories</option>
                  <option value="software">Software</option>
                  <option value="automotive">Automotive</option>
                </select>
              </div>
              <div class="d-flex align-items-center"><span class="text-muted fs-xs d-none d-sm-inline">Close</span>
                <button class="btn-close p-2" type="button" data-bs-toggle="search"></button>
              </div>
            </div>
          </div>
          <div class="container px-0 px-xl-3">
            <button class="navbar-toggler ms-n2 me-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="index.html"><img class="d-none d-lg-block" src="img/logo/logo-dark.png" alt="Around" width="153"><img class="d-lg-none" src="img/logo/logo-icon.png" alt="Around" width="58"></a>
            <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
              <div class="navbar-tool"><a class="navbar-tool-icon-box me-2" href="#" data-bs-toggle="search"><i class="ai-search"></i></a></div>
              <div class="navbar-tool d-none d-sm-flex"><a class="navbar-tool-icon-box me-2" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view"><i class="ai-user"></i></a></div>
              <div class="border-start me-2" style="height: 30px;"></div>
              <div class="navbar-tool me-2"><a class="navbar-tool-icon-box" href="#" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart"><i class="ai-shopping-cart"></i><span class="navbar-tool-badge">3</span></a></div>
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
                  <li class="nav-item dropdown dropdown-mega active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Templates</a>
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
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Account</a>
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
              <div class="offcanvas-cap border-top"><a class="btn btn-translucent-primary d-block w-100" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view"><i class="ai-user fs-lg me-2"></i>Sign in</a></div>
            </div>
          </div>
        </div>
      </header>
      <!-- Page content-->
      <div class="sidebar-enabled">
        <div class="container">
          <div class="row">
            <!-- Sidebar-->
            <div class="sidebar col-lg-3 pt-lg-5">
              <div class="offcanvas offcanvas-collapse" id="shop-sidebar">
                <div class="offcanvas-cap navbar-shadow px-4 mb-3">
                  <h5 class="mt-1 mb-0">Refine your selection</h5>
                  <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body px-4 pt-3 pt-lg-0 ps-lg-0 pe-lg-2 pe-xl-4" data-simplebar>
                  <!-- Categories-->
                  <div class="widget widget-categories mb-5">
                    <h3 class="widget-title">Categories</h3>
                    <ul id="categories">
                      <li><a class="widget-link" href="#clothing" data-bs-toggle="collapse">Clothing<small class="text-muted ps-1 ms-2">235</small></a>
                        <ul class="collapse show" id="clothing" data-bs-parent="#categories">
                          <li><a class="widget-link" href="#">View all</a></li>
                          <li><a class="widget-link" href="#">Blazers &amp; Suits</a></li>
                          <li><a class="widget-link" href="#">Cardigans</a></li>
                          <li><a class="widget-link" href="#">Dresses</a></li>
                          <li><a class="widget-link" href="#">Hoodie &amp; Sweatshirts</a></li>
                          <li><a class="widget-link" href="#">Jackets &amp; Coats</a></li>
                          <li><a class="widget-link" href="#">Jeans</a></li>
                          <li><a class="widget-link" href="#">Lingerie</a></li>
                          <li><a class="widget-link" href="#">Sportswear</a></li>
                        </ul>
                      </li>
                      <li><a class="widget-link collapsed" href="#shoes" data-bs-toggle="collapse">Shoes<small class="text-muted ps-1 ms-2">210</small></a>
                        <ul class="collapse" id="shoes" data-bs-parent="#categories">
                          <li><a class="widget-link" href="#">View all</a></li>
                          <li><a class="widget-link" href="#">Athletic shoes</a></li>
                          <li><a class="widget-link" href="#">Balerinas &amp; Flats</a></li>
                          <li><a class="widget-link" href="#">Boots</a></li>
                          <li><a class="widget-link" href="#">Clogs &amp; Mules</a></li>
                          <li><a class="widget-link" href="#">Flip Flops</a></li>
                          <li><a class="widget-link" href="#">Loafers</a></li>
                          <li><a class="widget-link" href="#">Sandals</a></li>
                          <li><a class="widget-link" href="#">Sneakers</a></li>
                        </ul>
                      </li>
                      <li><a class="widget-link collapsed" href="#electronics" data-bs-toggle="collapse">Electronics<small class="text-muted ps-1 ms-2">197</small></a>
                        <ul class="collapse" id="electronics" data-bs-parent="#categories">
                          <li><a class="widget-link" href="#">View all</a></li>
                          <li><a class="widget-link" href="#">Computers &amp; Accessories</a></li>
                          <li><a class="widget-link" href="#">TV, Video &amp; Audio</a></li>
                          <li><a class="widget-link" href="#">Smartphones &amp; Tablets</a></li>
                          <li><a class="widget-link" href="#">Cameras, Photo &amp; Video</a></li>
                          <li><a class="widget-link" href="#">Headphones</a></li>
                          <li><a class="widget-link" href="#">Wearable Electronics</a></li>
                          <li><a class="widget-link" href="#">Printers &amp; Ink</a></li>
                          <li><a class="widget-link" href="#">Video Games</a></li>
                        </ul>
                      </li>
                      <li><a class="widget-link collapsed" href="#accessories" data-bs-toggle="collapse">Accessories<small class="text-muted ps-1 ms-2">124</small></a>
                        <ul class="collapse" id="accessories" data-bs-parent="#categories">
                          <li><a class="widget-link" href="#">View all</a></li>
                          <li><a class="widget-link" href="#">Bags</a></li>
                          <li><a class="widget-link" href="#">Belts</a></li>
                          <li><a class="widget-link" href="#">Hats</a></li>
                          <li><a class="widget-link" href="#">Jewelry</a></li>
                          <li><a class="widget-link" href="#">Cosmetics</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <!-- Price range-->
                  <div class="widget mt-n1 mb-5">
                    <h3 class="widget-title">Price</h3>
                    <div class="px-2">
                      <div class="range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                        <div class="range-slider-ui"></div>
                        <div class="d-flex">
                          <div class="w-50 pe-2 me-2">
                            <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                              <input class="form-control range-slider-value-min" type="text">
                            </div>
                          </div>
                          <div class="w-50 ps-2">
                            <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                              <input class="form-control range-slider-value-max" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Brand (checkboxes)-->
                  <div class="widget mb-5">
                    <h3 class="widget-title">Brand</h3>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="adidas" checked>
                      <label class="form-check-label text-nav" for="adidas">Adidas<span class="fs-xs text-muted ms-2">425</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="bilabong">
                      <label class="form-check-label text-nav" for="bilabong">Bilabong<span class="fs-xs text-muted ms-2">27</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="klein">
                      <label class="form-check-label text-nav" for="klein">Calvin Klein<span class="fs-xs text-muted ms-2">365</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="electrolux">
                      <label class="form-check-label text-nav" for="electrolux">Electrolux<span class="fs-xs text-muted ms-2">56</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="motorolla">
                      <label class="form-check-label text-nav" for="motorolla">Motorolla<span class="fs-xs text-muted ms-2">104</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="nb">
                      <label class="form-check-label text-nav" for="nb">New Balance<span class="fs-xs text-muted ms-2">197</span></label>
                    </div>
                  </div>
                  <!-- Size (checkboxes)-->
                  <div class="widget mb-5">
                    <h3 class="widget-title">Size</h3>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="xs">
                      <label class="form-check-label text-nav" for="xs">XS<span class="fs-xs text-muted ms-2">38</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="s" checked>
                      <label class="form-check-label text-nav" for="s">S<span class="fs-xs text-muted ms-2">173</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="m">
                      <label class="form-check-label text-nav" for="m">M<span class="fs-xs text-muted ms-2">226</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="l">
                      <label class="form-check-label text-nav" for="l">L<span class="fs-xs text-muted ms-2">345</span></label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="xl">
                      <label class="form-check-label text-nav" for="xl">XL<span class="fs-xs text-muted ms-2">104</span></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 content py-4 mb-2 mb-sm-0 pb-sm-5">
              <nav aria-label="breadcrumb">
                <ol class="py-1 my-2 breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Shop grid</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Left sidebar</li>
                </ol>
              </nav>
              <!-- Active filters-->
              <div class="d-flex flex-wrap align-items-center mb-2">
                <label class="me-3 mt-1 mb-2 fs-sm text-dark">Your selection:</label><a class="active-filter me-2 my-2" href="#">Clothing</a><a class="active-filter me-2 my-2" href="#">Shirts &amp; Tops</a><a class="active-filter me-2 my-2" href="#">Brand name</a><a class="active-filter my-2" href="#">Size</a>
              </div>
              <!-- Sorting + Pager-->
              <div class="d-flex justify-content-between align-items-center py-3 mb-3">
                <div class="d-flex justify-content-center align-items-center">
                  <select class="form-select me-2" style="width: 15.25rem;">
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="newness">Sort by newness</option>
                    <option value="price: low to high">Sort by price: low to high</option>
                    <option value="price: high to low">Sort by price: high to low</option>
                  </select>
                  <div class="d-none d-sm-block fs-sm text-nowrap ps-1 mb-1">of 135 products</div>
                </div>
                <div class="d-none d-lg-flex justify-content-center align-items-center">
                  <label class="pe-1 me-2 mb-0 form-label px-0">Show</label>
                  <select class="form-select me-2" style="width: 5rem;">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option>
                  </select>
                  <div class="fs-sm text-nowrap ps-1 mb-1">products per page</div>
                </div>
              </div>
              <!-- Shop grid-->
              <div class="row">
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/01.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's clothing</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Simple Cotton Gray T-shirt</a></h3><span class="text-heading fw-semibold">$19.00</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/02.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Electronics</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Wireless Headphones</a></h3><span class="text-heading fw-semibold">$165.00</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><span class="badge badge-floating badge-pill bg-success">New</span><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/03.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Accessories</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Military Cotton Cap</a></h3><span class="text-heading fw-semibold">$28.00</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><span class="badge badge-floating badge-pill bg-danger">Sale</span><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/04.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Electronics</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">360 Degrees Camera</a></h3>
                      <del class="fs-sm text-muted me-1">$120.40</del><span class="text-heading fw-semibold">$98.75</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/05.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's shoes</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Sport Running Sneakers</a></h3><span class="text-heading fw-semibold">$140.00</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/06.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Backpacks</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Vintage Travel Backpack</a></h3><span class="text-heading fw-semibold">$82.00</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/07.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Accessories</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">3-Color Sun Stash Hat</a></h3><span class="text-heading fw-semibold">$25.99</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/08.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Electronics</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Speaker with Voice Control</a></h3><span class="text-heading fw-semibold">$49.99</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/09.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Women's shoes</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Women Colorblock Sneakers</a></h3><span class="text-heading fw-semibold">$154.00</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/10.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Accessories</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Polarized Sunglasses</a></h3><span class="text-heading fw-semibold">Out of stock</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-details" href="shop-single.html"><i class="ai-arrow-right"></i><span class="btn-tooltip">Details</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/11.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's shoes</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Sport Running Shoes</a></h3><span class="text-heading fw-semibold">$127.00</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- Item-->
                <div class="col-md-4 col-sm-6 mb-grid-gutter">
                  <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/12.jpg" alt="Product thumbnail"></a>
                    <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Electronics</a>
                      <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Smart Watch Series 5</a></h3><span class="text-heading fw-semibold">$349.99</span>
                    </div>
                    <div class="card-footer">
                      <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                      </div>
                      <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Pagination-->
              <div class="d-md-flex justify-content-between align-items-center pt-3 pb-2">
                <div class="d-flex justify-content-center align-items-center mb-4">
                  <label class="pe-1 me-2 mb-0 form-label px-0">Show</label>
                  <select class="form-select me-2" style="width: 5rem;">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option>
                  </select>
                  <div class="fs-sm text-nowrap ps-1 mb-1">products per page</div>
                </div>
                <nav class="mb-4" aria-label="Page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><i class="ai-chevron-left"></i></a></li>
                    <li class="page-item d-sm-none"><span class="page-link page-link-static">2 / 10</span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">2<span class="visually-hidden">(current)</span></span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                    <li class="page-item d-none d-sm-block">...</li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">10</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="ai-chevron-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5 pt-md-6">
      <div class="container pt-3 pb-0 pt-md-0 pb-md-3">
        <div class="row mb-4">
          <div class="col-md-4">
            <div class="widget widget-light pb-2 mb-4">
              <h4 class="widget-title">Shop departments</h4>
              <ul>
                <li><a class="widget-link" href="#">Closing</a></li>
                <li><a class="widget-link" href="#">Shoes</a></li>
                <li><a class="widget-link" href="#">Electronics</a></li>
                <li><a class="widget-link" href="#">Accessories</a></li>
                <li><a class="widget-link" href="#">Software</a></li>
                <li><a class="widget-link" href="#">Automotive</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget widget-light pb-2 mb-4">
              <h4 class="widget-title">Customer zone</h4>
              <ul>
                <li><a class="widget-link" href="#">Your account</a></li>
                <li><a class="widget-link" href="#">Shipping rates &amp; policies</a></li>
                <li><a class="widget-link" href="#">Refunds &amp; replacements</a></li>
                <li><a class="widget-link" href="#">Order tracking</a></li>
                <li><a class="widget-link" href="#">Delivery info</a></li>
                <li><a class="widget-link" href="#">Taxes &amp; fees</a></li>
                <li><a class="widget-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget widget-light pb-3 mb-4" style="max-width: 24rem;">
              <h3 class="widget-title">Stay informed</h3>
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ai-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
            <div class="widget widget-light pt-1 mb-4">
              <h4 class="widget-title">Download our app</h4>
              <div class="d-flex flex-wrap pt-1"><a class="btn-market btn-outline btn-apple me-3 mb-3" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a><a class="btn-market btn-outline btn-google mb-3" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-darker pt-2">
        <div class="container py-sm-3">
          <div class="row pb-4 mb-2 pt-5 py-md-5">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex align-items-center"><i class="ai-truck text-primary" style="font-size: 2.125rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 fs-xs text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex align-items-center"><i class="ai-refresh-cw text-primary" style="font-size: 2.125rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 fs-xs text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex align-items-center"><i class="ai-life-buoy text-primary" style="font-size: 2.125rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 fs-xs text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex align-items-center"><i class="ai-credit-card text-primary" style="font-size: 2.125rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 fs-xs text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light my-0 mb-5">
          <div class="d-sm-flex align-items-center mb-4 pb-3">
            <div class="d-flex flex-wrap align-items-center me-3"><a class="d-block me-grid-gutter mt-n1 mb-3" href="index.html" style="width: 108px;"><img src="img/logo/logo-footer.png" alt="Around"></a>
              <ul class="list-inline fs-sm pt-2 mb-3">
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">About</a></li>
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">Outlets</a></li>
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">Affiliates</a></li>
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">Support</a></li>
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">Terms of use</a></li>
              </ul>
            </div>
            <div class="d-flex pt-2 pt-sm-0 ms-auto"><a class="btn-social bs-twitter bs-light me-2 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-facebook bs-light me-2 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-instagram bs-light me-2 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-pinterest bs-light me-2 mb-2" href="#"><i class="ai-pinterest"></i></a><a class="btn-social bs-youtube bs-light mb-2" href="#"><i class="ai-youtube"></i></a></div>
          </div>
          <div class="d-sm-flex justify-content-between align-items-center pb-4 pb-sm-2">
            <div class="order-sm-2 mb-4 mb-sm-3"><img src="img/footer/cards.png" alt="Payment methods" width="181"></div>
            <div class="order-sm-1 mb-3">
              <p class="fs-ms mb-0"><span class="text-light opacity-50 me-1">© All rights reserved. Made by</span><a class="nav-link-style nav-link-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Sidebar toggle button-->
    <button class="btn btn-primary btn-sm sidebar-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar"><i class="ai-filter fs-base me-2"></i>Filters</button>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/nouislider/distribute/nouislider.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>