
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Around | Shop Single Product</title>
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
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Gs8P3pkveuWaMpr4zb01iwlGQAMX01CkjXOB2zZ0uA-4KRCUZ7hZHFTxIzQACpidTJBCgXsW-cLsxD5EtyxWAA" charset="UTF-8"></script><style>
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
    <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
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
      <!-- Size chart modal-->
      <div class="modal fade" id="sizeChart">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <ul class="nav nav-tabs pb-3" role="tablist" style="margin-bottom: -1rem;">
                <li class="nav-item"><a class="nav-link active" href="#mens" data-bs-toggle="tab" role="tab" aria-controls="mens" aria-selected="true">Men's sizes</a></li>
                <li class="nav-item"><a class="nav-link" href="#womens" data-bs-toggle="tab" role="tab" aria-controls="womens" aria-selected="false">Women's sizes</a></li>
              </ul>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="mens" role="tabpanel">
                  <div class="table-responsive">
                    <table class="table fs-sm text-center mb-0">
                      <thead>
                        <tr>
                          <th class="align-middle bg-secondary">US<br>Sizes</th>
                          <th class="align-middle">Euro<br>Sizes</th>
                          <th class="align-middle">UK<br>Sizes</th>
                          <th class="align-middle">Inches</th>
                          <th class="align-middle">CM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="bg-secondary fw-medium">6</td>
                          <td>39</td>
                          <td>5.5</td>
                          <td>9.25"</td>
                          <td>23.5</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">6.5</td>
                          <td>39</td>
                          <td>6</td>
                          <td>9.5"</td>
                          <td>24.1</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">7</td>
                          <td>40</td>
                          <td>6.5</td>
                          <td>9.625"</td>
                          <td>24.4</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">7.5</td>
                          <td>40-41</td>
                          <td>7</td>
                          <td>9.75"</td>
                          <td>24.8</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">8</td>
                          <td>41</td>
                          <td>7.5</td>
                          <td>9.9375"</td>
                          <td>25.4</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">8.5</td>
                          <td>41-42</td>
                          <td>8</td>
                          <td>10.125"</td>
                          <td>25.7</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">9</td>
                          <td>42</td>
                          <td>8.5</td>
                          <td>10.25"</td>
                          <td>26</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">9.5</td>
                          <td>42-43</td>
                          <td>9</td>
                          <td>10.4375"</td>
                          <td>26.7</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">10</td>
                          <td>43</td>
                          <td>9.5</td>
                          <td>10.5625"</td>
                          <td>27</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">10.5</td>
                          <td>43-44</td>
                          <td>10</td>
                          <td>10.75"</td>
                          <td>27.3</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">11</td>
                          <td>44</td>
                          <td>10.5</td>
                          <td>10.9375"</td>
                          <td>27.9</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">11.5</td>
                          <td>44-45</td>
                          <td>11</td>
                          <td>11.125"</td>
                          <td>28.3</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">12</td>
                          <td>45</td>
                          <td>11.5</td>
                          <td>11.25"</td>
                          <td>28.6</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">13</td>
                          <td>46</td>
                          <td>12.5</td>
                          <td>11.5625"</td>
                          <td>29.4</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">14</td>
                          <td>47</td>
                          <td>13.5</td>
                          <td>11.875"</td>
                          <td>30.2</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">15</td>
                          <td>48</td>
                          <td>14.5</td>
                          <td>12.1875"</td>
                          <td>31</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">16</td>
                          <td>49</td>
                          <td>15.5</td>
                          <td>12.5"</td>
                          <td>31.8</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="womens" role="tabpanel">
                  <div class="table-responsive">
                    <table class="table fs-sm text-center mb-0">
                      <thead>
                        <tr>
                          <th class="align-middle bg-secondary">US<br>Sizes</th>
                          <th class="align-middle">Euro<br>Sizes</th>
                          <th class="align-middle">UK<br>Sizes</th>
                          <th class="align-middle">Inches</th>
                          <th class="align-middle">CM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="bg-secondary fw-medium">4</td>
                          <td>35</td>
                          <td>2</td>
                          <td>8.1875"</td>
                          <td>20.8</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">4.5</td>
                          <td>35</td>
                          <td>2.5</td>
                          <td>8.375"</td>
                          <td>21.3</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">5</td>
                          <td>35-36</td>
                          <td>3</td>
                          <td>8.5"</td>
                          <td>21.6</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">5.5</td>
                          <td>36</td>
                          <td>3.5</td>
                          <td>8.75"</td>
                          <td>22.2</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">6</td>
                          <td>36-37</td>
                          <td>4</td>
                          <td>8.875"</td>
                          <td>22.5</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">6.5</td>
                          <td>37</td>
                          <td>4.5</td>
                          <td>9.0625"</td>
                          <td>23</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">7</td>
                          <td>37-38</td>
                          <td>5</td>
                          <td>9.25"</td>
                          <td>23.5</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">7.5</td>
                          <td>38</td>
                          <td>5.5</td>
                          <td>9.375"</td>
                          <td>23.8</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">8</td>
                          <td>38-39</td>
                          <td>6</td>
                          <td>9.5"</td>
                          <td>24.1</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">8.5</td>
                          <td>39</td>
                          <td>6.5</td>
                          <td>9.6875"</td>
                          <td>24.6</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">9</td>
                          <td>39-40</td>
                          <td>7</td>
                          <td>9.875"</td>
                          <td>25.1</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">9.5</td>
                          <td>40</td>
                          <td>7.5</td>
                          <td>10"</td>
                          <td>25.4</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">10</td>
                          <td>40-41</td>
                          <td>8</td>
                          <td>10.1875"</td>
                          <td>25.9</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">10.5</td>
                          <td>41</td>
                          <td>8.5</td>
                          <td>10.3125"</td>
                          <td>26.2</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">11</td>
                          <td>41-42</td>
                          <td>9</td>
                          <td>10.5"</td>
                          <td>26.7</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">11.5</td>
                          <td>42</td>
                          <td>9.5</td>
                          <td>10.6875"</td>
                          <td>27.1</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">12</td>
                          <td>42-43</td>
                          <td>10</td>
                          <td>10.875"</td>
                          <td>27.6</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
      <!-- Product gallery + info-->
      <section class="sidebar-enabled sidebar-end border-bottom mb-5 mb-md-6">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 content py-4">
              <nav aria-label="breadcrumb">
                <ol class="py-1 my-2 breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Shop</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Single product</li>
                </ol>
              </nav>
              <h1 class="mb-3 pb-4">Sport Running Sneakers</h1>
              <!-- Product gallery-->
              <div class="product-gallery">
                <div class="product-gallery-preview order-sm-2">
                  <div class="product-gallery-preview-item active" id="first"><img src="img/shop/single/gallery/01.jpg" alt="Product preview"></div>
                  <div class="product-gallery-preview-item" id="second"><img src="img/shop/single/gallery/02.jpg" alt="Product preview"></div>
                  <div class="product-gallery-preview-item" id="third"><img src="img/shop/single/gallery/03.jpg" alt="Product preview"></div>
                  <div class="product-gallery-preview-item" id="fourth"><img src="img/shop/single/gallery/04.jpg" alt="Product preview"></div>
                </div>
                <div class="product-gallery-thumblist order-sm-1"><a class="product-gallery-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>
              </div>
              <!-- Sharing-->
              <div class="d-flex align-items-center justify-content-center justify-content-md-end py-4 pt-md-0 pt-lg-5">
                <h6 class="text-nowrap my-2 me-3">Share product:</h6><a class="btn-social bs-outline bs-facebook ms-2 my-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-outline bs-twitter ms-2 my-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-outline bs-google ms-2 my-2" href="#"><i class="ai-google"></i></a><a class="btn-social bs-outline bs-email ms-2 my-2" href="#"><i class="ai-mail"></i></a>
              </div>
            </div>
            <!-- Product info-->
            <div class="col-lg-4 sidebar bg-secondary pt-5 ps-lg-4 pb-md-2">
              <div class="ps-lg-4 pb-5"><a class="d-inline-block text-decoration-none" href="#reviews" data-scroll>
                  <div class="star-rating-lg mt-n1 me-2 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                  </div><span class="text-body fs-sm">(4.2) based on 15 reviews</span></a>
                <div class="py-4">
                  <del class="text-muted me-2">$140.00</del><span class="h4 mb-0">$85.00</span>
                </div>
                <div class="fs-sm pb-1 mb-2"><span class="fw-medium text-heading">Choose color - </span><span class="ms-1" id="colorOptionText">Gray</span></div>
                <div class="d-inline-block bg-light rounded px-3 mb-4">
                  <div class="form-check form-option form-option-color form-check-inline mt-2">
                    <input class="form-check-input" type="radio" name="color" id="gray" value="Gray" data-label="colorOptionText" checked>
                    <label class="form-option-label rounded-circle" for="gray"><span class="form-option-color-indicator rounded-circle" style="background-color: #707175;"></span></label>
                  </div>
                  <div class="form-check form-option form-option-color form-check-inline mt-2">
                    <input class="form-check-input" type="radio" name="color" id="blue" value="Blue" data-label="colorOptionText">
                    <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color-indicator rounded-circle" style="background-color: #0a66cc;"></span></label>
                  </div>
                  <div class="form-check form-option form-option-color form-check-inline mt-2">
                    <input class="form-check-input" type="radio" name="color" id="brown" value="Brown" data-label="colorOptionText">
                    <label class="form-option-label rounded-circle" for="brown"><span class="form-option-color-indicator rounded-circle" style="background-color: #987875;"></span></label>
                  </div>
                  <div class="form-check form-option form-option-color form-check-inline mt-2">
                    <input class="form-check-input" type="radio" name="color" id="white" value="White" data-label="colorOptionText">
                    <label class="form-option-label rounded-circle" for="white"><span class="form-option-color-indicator rounded-circle" style="background-color: #e8e6e2;"></span></label>
                  </div>
                  <div class="form-check form-option form-option-color form-check-inline mt-2">
                    <input class="form-check-input" type="radio" name="color" id="purple" value="Purple" data-label="colorOptionText">
                    <label class="form-option-label rounded-circle" for="purple"><span class="form-option-color-indicator rounded-circle" style="background-color: #846ba6;"></span></label>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <label class="mb-0">Choose size</label><a class="nav-link-style fs-sm" href="#sizeChart" data-bs-toggle="modal"><i class="ai-bar-chart-2 fs-xl mt-n1 me-1"></i>Size chart</a>
                </div>
                <div class="me-lg-n2">
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s6_5" disabled>
                    <label class="form-option-label" for="s6_5">6.5</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s7" disabled>
                    <label class="form-option-label" for="s7">7</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s7_5">
                    <label class="form-option-label" for="s7_5">7.5</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s8">
                    <label class="form-option-label" for="s8">8</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s8_5">
                    <label class="form-option-label" for="s8_5">8.5</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s9">
                    <label class="form-option-label" for="s9">9</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s9_5">
                    <label class="form-option-label" for="s9_5">9.5</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s10">
                    <label class="form-option-label" for="s10">10</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s10_5">
                    <label class="form-option-label" for="s10_5">10.5</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s11" checked>
                    <label class="form-option-label" for="s11">11</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s11_5">
                    <label class="form-option-label" for="s11_5">11.5</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s12">
                    <label class="form-option-label" for="s12">12</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s12_5">
                    <label class="form-option-label" for="s12_5">12.5</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s13" disabled>
                    <label class="form-option-label" for="s13">13</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s14" disabled>
                    <label class="form-option-label" for="s14">14</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s15" disabled>
                    <label class="form-option-label" for="s15">15</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s16" disabled>
                    <label class="form-option-label" for="s16">16</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s17" disabled>
                    <label class="form-option-label" for="s17">17</label>
                  </div>
                  <div class="form-check form-option form-option-size form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size" id="s18" disabled>
                    <label class="form-option-label" for="s18">18</label>
                  </div>
                </div>
                <div class="d-flex mt-4 mb-3">
                  <input class="form-control me-3" type="number" style="width: 5rem;" min="1" value="1">
                  <button class="btn btn-primary d-block w-100" type="button">Add to Cart</button>
                </div>
                <button class="btn btn-outline-secondary d-block w-100 mb-grid-gutter" type="button"><i class="ai-heart fs-lg me-2"></i>Add to Wishlist</button>
                <p class="fs-sm mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p><a class="fancy-link fs-sm" href="#more-info" data-scroll>Read more</a>
                <hr class="my-4">
                <ul class="list-unstyled fs-sm">
                  <li><span class="text-heading fw-medium me-2">SKU:</span>HB125CAE78</li>
                  <li><span class="text-heading fw-medium me-2">Category:</span><a class="text-body text-decoration-none" href="#">Men's shoes</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Product description-->
      <section class="mt-1 pt-3 pt-md-0 pb-5 pb-md-6 mb-5 mb-md-6 border-bottom" id="more-info">
        <div class="container">
          <div class="row align-items-center pb-3 mb-5">
            <div class="col-lg-5 col-md-6 offset-lg-1 order-md-2 pb-2 mb-4 pb-md-0 mb-md-0">
              <div class="bg-secondary bg-size-cover bg-position-center rounded-3 py-7 px-4 text-center" style="background-image: url(img/shop/single/video.jpg);"><a class="btn-video btn-video-sm my-4" href="https://www.youtube.com/watch?v=d1qnvK3ID_w"></a></div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-1 order-md-1">
              <h2 class="h3 mb-4">High quality materials</h2>
              <p class="fs-sm">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 offset-lg-2"><img class="d-block mx-auto mb-4 mb-md-0" src="img/shop/single/map.png" alt="Map" width="290"></div>
            <div class="col-lg-4 col-md-6 offset-lg-2 offset-md-1">
              <h2 class="h3 mb-4">Where is it made?</h2>
              <h6 class="mb-3">Apparel Manufacturer, Ltd.</h6>
              <p class="fs-sm pb-2">​Sam Tower, 6 Road No 32, Dhaka 1875, Bangladesh</p>
              <div class="d-flex mb-2">
                <div class="me-4 pe-2 text-center">
                  <h4 class="h2 text-primary mb-1">3268</h4>
                  <p class="text-heading">Workers</p>
                </div>
                <div class="me-4 pe-2 text-center">
                  <h4 class="h2 text-primary mb-1">43%</h4>
                  <p class="text-heading">Female</p>
                </div>
                <div class="text-center">
                  <h4 class="h2 text-primary mb-1">57%</h4>
                  <p class="text-heading">Male</p>
                </div>
              </div>
              <h6 class="mb-3">Factory information</h6>
              <p class="fs-sm">​Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Reviews-->
      <section class="pb-5 pt-2 pt-md-0 mb-5 mb-sm-6 border-bottom" id="reviews">
        <div class="container pb-3">
          <div class="row pb-3">
            <div class="col-lg-4 col-md-5">
              <h2 class="h3 mb-4">15 Reviews</h2>
              <div class="star-rating-lg mt-n1 me-2 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
              </div><span class="text-heading">4.2 Overall rating</span>
              <p class="pt-3 fs-sm text-muted">12 out of 15 (80%)<br>Customers recommended this product</p>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle">5</span><i class="ai-star fs-sm ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 47%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="ms-3">7</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle">4</span><i class="ai-star fs-sm ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 20%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="ms-3">3</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle">3</span><i class="ai-star fs-sm ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 14%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="ms-3">2</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle">2</span><i class="ai-star fs-sm ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 14%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="ms-3">2</span>
              </div>
              <div class="d-flex align-items-center">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle">1</span><i class="ai-star fs-sm ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 7%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="ms-3">1</span>
              </div>
            </div>
          </div>
          <hr class="my-5">
          <div class="row">
            <!-- Reviews list-->
            <div class="col-md-7">
              <div class="d-flex justify-content-end pb-4 mb-2">
                <div class="d-flex align-items-center">
                  <label class="form-label px-0 mb-0 text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                  <select class="form-select form-select-sm" id="sort-reviews">
                    <option>Newest</option>
                    <option>Oldest</option>
                    <option>Popular</option>
                    <option>High rating</option>
                    <option>Low rating</option>
                  </select>
                </div>
              </div>
              <!-- Review-->
              <div class="pb-grid-gutter border-bottom">
                <div class="d-flex align-items-center mb-2 pb-1">
                  <div class="star-rating-lg me-2 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i>
                  </div><span class="fs-sm text-muted">83% of users found this review helpful</span>
                </div>
                <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cumque nihil impedit quo minus.</p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center me-3"><img class="rounded-circle" src="img/testimonials/07.jpg" alt="Barbara Palson" width="42">
                    <div class="ps-2 ms-1">
                      <h6 class="fs-sm mb-n1">Barbara Palson</h6><span class="fs-xs text-muted">3 days ago</span>
                    </div>
                  </div>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">15</button>
                    <button class="btn-dislike" type="button">3</button>
                  </div>
                </div>
              </div>
              <!-- Review-->
              <div class="pt-grid-gutter pb-grid-gutter border-bottom">
                <div class="d-flex align-items-center mb-2 pb-1">
                  <div class="star-rating-lg me-2 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                  </div><span class="fs-sm text-muted">76% of users found this review helpful</span>
                </div>
                <p class="fs-md">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center me-3"><img class="rounded-circle" src="img/testimonials/08.jpg" alt="Daniel Adams" width="42">
                    <div class="ps-2 ms-1">
                      <h6 class="fs-sm mb-n1">Daniel Adams</h6><span class="fs-xs text-muted">1 week ago</span>
                    </div>
                  </div>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">22</button>
                    <button class="btn-dislike" type="button">17</button>
                  </div>
                </div>
              </div>
              <!-- Review-->
              <div class="pt-grid-gutter pb-grid-gutter border-bottom">
                <div class="d-flex align-items-center mb-2 pb-1">
                  <div class="star-rating-lg me-2 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i>
                  </div><span class="fs-sm text-muted">90% of users found this review helpful</span>
                </div>
                <p class="fs-md">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center me-3"><img class="rounded-circle" src="img/testimonials/06.jpg" alt="Tim Brooks" width="42">
                    <div class="ps-2 ms-1">
                      <h6 class="fs-sm mb-n1">Tim Brooks</h6><span class="fs-xs text-muted">2 weeks ago</span>
                    </div>
                  </div>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">9</button>
                    <button class="btn-dislike" type="button">1</button>
                  </div>
                </div>
              </div>
              <!-- Review-->
              <div class="pt-grid-gutter pb-grid-gutter border-bottom">
                <div class="d-flex align-items-center mb-2 pb-1">
                  <div class="star-rating-lg me-2 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                  </div><span class="fs-sm text-muted">64% of users found this review helpful</span>
                </div>
                <p class="fs-md">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center me-3"><img class="rounded-circle" src="img/testimonials/05.jpg" alt="Emili Parker" width="42">
                    <div class="ps-2 ms-1">
                      <h6 class="fs-sm mb-n1">Emili Parker</h6><span class="fs-xs text-muted">1 month ago</span>
                    </div>
                  </div>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">34</button>
                    <button class="btn-dislike" type="button">22</button>
                  </div>
                </div>
              </div>
              <!-- Review-->
              <div class="pt-grid-gutter pb-grid-gutter border-bottom">
                <div class="d-flex align-items-center mb-2 pb-1">
                  <div class="star-rating-lg me-2 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                  </div><span class="fs-sm text-muted">87% of users found this review helpful</span>
                </div>
                <p class="fs-md">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center me-3"><img class="rounded-circle" src="img/testimonials/09.jpg" alt="Jessica Miller" width="42">
                    <div class="ps-2 ms-1">
                      <h6 class="fs-sm mb-n1">Jessica Miller</h6><span class="fs-xs text-muted">1 month ago</span>
                    </div>
                  </div>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">26</button>
                    <button class="btn-dislike" type="button">5</button>
                  </div>
                </div>
              </div>
              <!-- Pagination-->
              <nav class="d-lg-flex justify-content-between align-items-center text-center text-lg-start pt-grid-gutter pb-3">
                <div class="d-lg-flex align-items-center w-100"><span class="fs-sm text-muted me-lg-3">Showing 5 of 15 reviews</span>
                  <div class="progress w-100 my-3 mx-auto mx-lg-0" style="max-width: 10rem; height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <button class="btn btn-outline-primary btn-sm" type="button">Show older reviews</button>
              </nav>
            </div>
            <!-- Review form-->
            <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
              <div class="bg-secondary py-5 px-4 rounded-3">
                <div class="px-xl-3">
                  <h3 class="h4 pb-2">Write a review</h3>
                  <form class="needs-validation" method="post" novalidate>
                    <div class="mb-3 pb-1">
                      <label class="form-label px-0" for="review-name">Your name<span class="text-danger">*</span></label>
                      <input class="form-control" type="text" required id="review-name">
                      <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                    </div>
                    <div class="mb-3 pb-1">
                      <label class="form-label px-0" for="review-email">Your email<span class="text-danger">*</span></label>
                      <input class="form-control" type="email" required id="review-email">
                      <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                    </div>
                    <div class="mb-3 pb-1">
                      <label class="form-label px-0" for="review-rating">Rating<span class="text-danger">*</span></label>
                      <select class="form-select" required id="review-rating">
                        <option value="">Choose rating</option>
                        <option value="5">5 stars</option>
                        <option value="4">4 stars</option>
                        <option value="3">3 stars</option>
                        <option value="2">2 stars</option>
                        <option value="1">1 star</option>
                      </select>
                      <div class="invalid-feedback">Please choose rating!</div>
                    </div>
                    <div class="mb-3 pb-1">
                      <labe class="form-label px-0l" for="review-text">Review<span class="text-danger">*</span></labe>
                      <textarea class="form-control" rows="6" required id="review-text"></textarea>
                      <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                    </div>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Related products (carousel)-->
      <section class="container pt-3 pb-5 mb-3 mb-sm-0 pt-sm-0 pb-sm-6">
        <h2 class="h3 text-center mb-5">You may also like</h2>
        <div class="tns-carousel-wrapper">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16}, &quot;780&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1000&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 23}}}">
            <!-- Item-->
            <div class="pb-2">
              <div class="card card-product card-hover mx-1"><a class="card-img-top" href="#"><img src="img/shop/catalog/13.jpg" alt="Product thumbnail"></a>
                <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's shoes</a>
                  <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="#">Sport Running Sneakers</a></h3><span class="text-heading fw-semibold">$154.00</span>
                </div>
                <div class="card-footer">
                  <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                  </div>
                  <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="pb-2">
              <div class="card card-product card-hover mx-1"><span class="badge badge-floating badge-pill badge-danger">Sale</span><a class="card-img-top" href="#"><img src="img/shop/catalog/14.jpg" alt="Product thumbnail"></a>
                <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's shoes</a>
                  <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="#">Sport Running Sneakers</a></h3>
                  <del class="fs-sm text-muted me-1">$130.00</del><span class="text-heading fw-semibold">$98.00</span>
                </div>
                <div class="card-footer">
                  <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                  </div>
                  <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="pb-2">
              <div class="card card-product card-hover mx-1"><a class="card-img-top" href="#"><img src="img/shop/catalog/15.jpg" alt="Product thumbnail"></a>
                <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's shoes</a>
                  <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="#">Sport Running Sneakers</a></h3><span class="text-heading fw-semibold">$127.00</span>
                </div>
                <div class="card-footer">
                  <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i>
                  </div>
                  <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="pb-2">
              <div class="card card-product card-hover mx-1"><a class="card-img-top" href="#"><img src="img/shop/catalog/16.jpg" alt="Product thumbnail"></a>
                <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's shoes</a>
                  <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="#">Sport Running Sneakers</a></h3><span class="text-heading fw-semibold">$135.00</span>
                </div>
                <div class="card-footer">
                  <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                  </div>
                  <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="pb-2">
              <div class="card card-product card-hover mx-1"><span class="badge badge-floating badge-pill badge-danger">Sale</span><a class="card-img-top" href="#"><img src="img/shop/catalog/17.jpg" alt="Product thumbnail"></a>
                <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's shoes</a>
                  <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="#">Sport Running Sneakers</a></h3>
                  <del class="fs-sm text-muted me-1">$140.00</del><span class="text-heading fw-semibold">$85.00</span>
                </div>
                <div class="card-footer">
                  <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                  </div>
                  <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
    <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="vendor/lg-video.js/dist/lg-video.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>