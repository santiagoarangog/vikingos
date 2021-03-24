
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Around | Checkout</title>
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
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=BpeSgZEJPuZRqhi0nXjaehjW-OhEmB9Jc12pTVSvHkNiXcmUXlCo7aHV6mD07mEjv_xHNBvBVIdjp0Kw9KC9WQ" charset="UTF-8"></script><style>
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
  <body>
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
      <!-- Coupon code modal-->
      <div class="modal fade" id="modal-coupon" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Coupon code</h4>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="modal-body needs-validation" novalidate>
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Your coupon code" required>
                <button class="btn btn-primary" type="submit">Apply code</button>
              </div>
            </form>
          </div>
        </div>
      </div>
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
      <form class="sidebar-enabled sidebar-end needs-validation" novalidate>
        <div class="container">
          <div class="row">
            <!-- Content-->
            <div class="col-lg-8 content py-4">
              <nav aria-label="breadcrumb">
                <ol class="py-1 my-2 breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="shop-ls.html">Shop</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
              </nav>
              <h1 class="mb-3 pb-4">Checkout</h1>
              <div class="alert d-flex alert-info fs-md mb-5" role="alert"><i class="ai-alert-circle fs-xl me-3"></i>
                <div>Have a coupon code? <a href='#modal-coupon' data-bs-toggle='modal' class='alert-link'>Click here to enter your code</a></div>
              </div>
              <h2 class="h3 pb-3">Billing details</h2>
              <div class="row mb-4">
                <div class="col-sm-6 mb-3 pb-1">
                  <label class="form-label" for="ch-fn">First name<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="text" id="ch-fn" required>
                </div>
                <div class="col-sm-6 mb-3 pb-1">
                  <label class="form-label" for="ch-ln">Last names<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="text" id="ch-ln" required>
                </div>
                <div class="col-12 mb-3 pb-1">
                  <label class="form-label" for="ch-company">Company name</label>
                  <input class="form-control" type="text" id="ch-company">
                </div>
                <div class="col-12 mb-3 pb-1">
                  <label class="form-label" for="ch-country">Country<sup class="text-danger ms-1">*</sup></label>
                  <select class="form-select" id="ch-country" required>
                    <option value="" selected disabled hidden>Choose country</option>
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                    <option value="Francee">France</option>
                    <option value="Germany">Germany</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="USA">USA</option>
                  </select>
                </div>
                <div class="col-12 mb-3 pb-1">
                  <label class="form-label" for="ch-address">Street address<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="text" id="ch-address" placeholder="House number and street name" required>
                </div>
                <div class="col-12 mb-3 pb-1">
                  <input class="form-control" type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                </div>
                <div class="col-12 mb-3 pb-1">
                  <label class="form-label" for="ch-city">Town / City<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="text" id="ch-city" required>
                </div>
                <div class="col-12 mb-3 pb-1">
                  <label class="form-label" for="ch-county">County</label>
                  <input class="form-control" type="text" id="ch-county">
                </div>
                <div class="col-12 mb-3 pb-1">
                  <label class="form-label" for="ch-postcode">Postcode<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="text" id="ch-postcode" required>
                </div>
                <div class="col-sm-6 mb-3 pb-1">
                  <label class="form-label" for="ch-phone">Phone<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="text" id="ch-phone" required>
                </div>
                <div class="col-sm-6 mb-3 pb-1">
                  <label class="form-label" for="ch-email">Email address<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="email" id="ch-email" required>
                </div>
              </div>
              <h2 class="h3 pb-3">Additional information</h2>
              <div class="mb-3 pb-1 pb-3 pb-lg-5">
                <label class="form-label" for="ch-order-notes">Order notes</label>
                <textarea class="form-control" id="ch-order-notes" rows="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
              </div>
            </div>
            <!-- Sidebar-->
            <div class="col-lg-4 sidebar bg-secondary pt-5 ps-lg-4 pb-md-2">
              <div class="ps-lg-4 mb-3 pb-5">
                <h2 class="h4 pb-3">Your cart</h2>
                <div class="d-flex align-items-center mb-4"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/05.jpg" alt="Product" width="60"></a>
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
                <div class="d-flex align-items-center mb-4"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/02.jpg" alt="Product" width="60"></a>
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
                <div class="d-flex align-items-center mb-4"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/06.jpg" alt="Product" width="60"></a>
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
                <hr class="mt-0 mb-4">
                <div class="d-flex justify-content-between mb-3"><span class="h6 mb-0">Subtotal:</span><span class="text-nav">$776.99</span></div>
                <div class="d-flex justify-content-between mb-3"><span class="h6 mb-0">Tax:</span><span class="text-nav">&mdash;</span></div>
                <div class="d-flex justify-content-between mb-3"><span class="h6 mb-0">Shipping:</span><span class="text-nav">$12.35</span></div>
                <div class="d-flex justify-content-between mb-3"><span class="h6 mb-0">Total:</span><span class="h6 mb-0">$789.34</span></div>
                <div class="accordion pt-4 mb-grid-gutter" id="payment-methods">
                  <div class="accordion-item bg-white shadow">
                    <h2 class="accordion-header" id="heading-1">
                      <button class="accordion-button no-indicator" type="button">
                        <div class="form-check w-100" data-bs-toggle="collapse" data-bs-target="#credit-card" aria-expanded="true" aria-controls="credit-card">
                          <input class="form-check-input" type="radio" id="credit-card-radio" name="payment_method" checked>
                          <label class="form-check-label d-flex align-items-center fs-base text-heading mb-0 mt-1" for="credit-card-radio"><span>Credit Card</span><img class="ms-3" src="img/shop/cards.png" alt="Accepted cards" width="130"></label>
                        </div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse show" id="credit-card" aria-labelledby="heading-1" data-bs-parent="#payment-methods">
                      <div class="accordion-body">
                        <div class="mb-3 pb-1">
                          <label class="form-label" for="cc-number">Card number</label>
                          <input class="form-control bg-none" type="text" id="cc-number" data-format="card" placeholder="0000 0000 0000 0000">
                        </div>
                        <div class="row g-0">
                          <div class="col-7 px-2">
                            <label class="form-label" for="cc-expiry">Expiry date</label>
                            <input class="form-control bg-none" type="text" id="cc-expiry" data-format="date" placeholder="mm/yy">
                          </div>
                          <div class="col-5 px-2">
                            <label class="form-label" for="cc-cvc">CVC</label>
                            <input class="form-control bg-none" type="text" id="cc-cvc" data-format="cvc" placeholder="000">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item bg-white shadow">
                    <h2 class="accordion-header" id="heading-2">
                      <button class="accordion-button no-indicator" type="button">
                        <div class="form-check w-100" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                          <input class="form-check-input" type="radio" id="paypal-radio" name="payment_method">
                          <label class="form-check-label d-flex align-items-center fs-base text-heading mb-0 mt-1" for="paypal-radio"><span>PayPal</span><img class="ms-3" src="img/shop/paypal.png" alt="PayPal" width="20"></label>
                        </div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="paypal" aria-labelledby="heading-2" data-bs-parent="#payment-methods">
                      <div class="accordion-body">
                        <p class="fs-ms">By clicking on the button below you will be redirected to your PayPal account to complete the payment.</p><a class="d-inline-block" href="#"><img class="d-block" src="img/shop/paypal-button.png" alt="PayPal" width="200"></a>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item bg-white shadow">
                    <h2 class="accordion-header" id="heading-3">
                      <button class="accordion-button no-indicator collapsed" type="button">
                        <div class="form-check w-100" data-bs-toggle="collapse" data-bs-target="#cash" aria-expanded="false" aria-controls="cash">
                          <input class="form-check-input" type="radio" id="cash-radio" name="payment_method">
                          <label class="form-check-label d-flex align-items-center fs-base text-heading mb-0 mt-1" for="cash-radio">Cash on delivery</label>
                        </div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="cash" aria-labelledby="heading-3" data-bs-parent="#payment-methods">
                      <div class="accordion-body">
                        <p class="fs-ms mb-0">You have selected to pay with cash upon delivery.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary d-block w-100" type="submit">Place order</button>
              </div>
            </div>
          </div>
        </div>
      </form>
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
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/cleave.js/dist/cleave.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>