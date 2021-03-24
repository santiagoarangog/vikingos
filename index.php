<?php require 'assets/template/header.php'; ?>
<!-- Body-->
<body>
<?php 
require 'assets/template/loader.php'; 
require 'assets/features/modals/logIn.php'; 
?>
    <main class="page-wrapper">
        <?php
        $module = 'home';
        require 'assets/template/shop/nav.php';
        require 'assets/features/shoppingCart/shopping.php';
        ?>
        <!-- Page content-->
        <!-- Hero - Featured Products (tabs)-->
        <section class="position-relative bg-vikingos pt-5 pt-lg-6 pb-7 mb-7 overflow-hidden">
            <div class="shape shape-bottom shape-curve bg-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
          </svg>
            </div>
            <!-- Tabs-->
            <div class="container pb-7">
                <div class="row align-items-center pb-7">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs media-tabs media-tabs-light justify-content-center justify-content-lg-start pb-3 mb-4 pb-lg-0 mb-lg-0" role="tablist">
                            <li class="nav-item me-3 mb-3">
                                <a class="nav-link active" href="#camera" data-bs-toggle="tab" role="tab">
                                    <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded" src="assets/img/products/299892747.jpg" alt="Product" width="60">
                                        <div class="w-100 ps-2 ms-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="fs-sm pe-1">HE BATIDORA 3-1</div><i class="fas fa-angle-right lead ms-2 me-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-3 mb-3">
                                <a class="nav-link" href="#sneakers" data-bs-toggle="tab" role="tab">
                                    <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded" src="assets/img/products/bd-olla-arroz-rc200.jpg" alt="Product" width="60">
                                        <div class="w-100 ps-2 ms-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="fs-sm pe-1">Olla Arrocera</div><i class="fas fa-angle-right lead ms-2 me-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-3 mb-3">
                                <a class="nav-link" href="#vr" data-bs-toggle="tab" role="tab">
                                    <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded" src="assets/img/products/he-horno-tostador.jpg" alt="Product" width="60">
                                        <div class="w-100 ps-2 ms-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="fs-sm pe-1">Horno tostador</div><i class="fas fa-angle-right lead ms-2 me-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="camera">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                                        <div class="mx-auto" style="max-width: 443px;"><img src="assets/img/products/299892747.jpg" alt="Security Camera"></div>
                                    </div>
                                    <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                                        <div class="ps-xl-5">
                                            <h2 class="h1 text-light">HE BATIDORA 3-1</h2>
                                            <p class="fs-lg text-light mb-lg-5">Stay connected 24/7. Free trial for 30 days</p><a class="btn btn-translucent-light" href="#">Get now - $45.00</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sneakers">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                                        <div class="mx-auto" style="max-width: 443px;"><img src="assets/img/products/bd-olla-arroz-rc200.jpg" alt="Running Sneakers"></div>
                                    </div>
                                    <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                                        <div class="ps-xl-5">
                                            <h2 class="h1 text-light">Olla Arrocera</h2>
                                            <p class="fs-lg text-light mb-lg-5">Run like never before. Money back guarantee</p><a class="btn btn-translucent-light" href="#">Get now - $99.00</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vr">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                                        <div class="mx-auto" style="max-width: 443px;"><img src="assets/img/products/he-horno-tostador.jpg" alt="VR Headset"></div>
                                    </div>
                                    <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                                        <div class="ps-xl-5">
                                            <h2 class="h1 text-light">Horno tostador</h2>
                                            <p class="fs-lg text-light mb-lg-5">Run like never before. Money back guarantee</p><a class="btn btn-translucent-light" href="#">Get now - $180.00</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories (carousel)-->
        <section class="container position-relative zindex-5" style="margin-top: -290px;">
            <div class="tns-carousel-wrapper">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;gutter&quot;: 24, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;560&quot;:{&quot;items&quot;:2},&quot;850&quot;:{&quot;items&quot;:3}}}">
                    <!-- Category-->
                    <div class="pb-2"><a class="card card-category shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-end bg-success">Desde $50.000</span><img class="card-img-top" src="assets/img/products/bd-olla-arroz-rc200.jpg" alt="Clothing">
                <div class="card-body">
                  <h4 class="card-title">Hogar</h4>
                </div></a></div>
                    <!-- Category-->
                    <div class="pb-2"><a class="card card-category shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-end bg-info">Desde $50.000</span><img class="card-img-top" src="assets/img/products/bd-olla-arroz-rc200.jpg" alt="Electronics">
                <div class="card-body">
                  <h4 class="card-title">Electronicos</h4>
                </div></a></div>
                    <!-- Category-->
                    <div class="pb-2"><a class="card card-category shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-end bg-danger">Desde $50.000</span><img class="card-img-top" src="assets/img/products/bd-olla-arroz-rc200.jpg" alt="Accessories">
                <div class="card-body">
                  <h4 class="card-title">Infantil</h4>
                </div></a></div>
                    <!-- Category-->
                    <div class="pb-2"><a class="card card-category shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-end bg-warning">Desde $50.000</span><img class="card-img-top" src="assets/img/products/bd-olla-arroz-rc200.jpg" alt="Kids">
                <div class="card-body">
                  <h4 class="card-title">Acero inoxidable</h4>
                </div></a></div>
                </div>
            </div>
        </section>

        <!-- Trending products (grid)-->
        <section class="container pt-5 mt-5 mt-md-0 pt-md-6 pt-lg-7">
            <h2 class="text-center mb-5">Productos recomendados para tí</h2>
            <div class="row pb-1">
                <!-- Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-product card-hover">
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-product card-hover">
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-product card-hover"><span class="badge badge-floating rounded-pill bg-success">New</span>
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-product card-hover">
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-product card-hover"><span class="badge badge-floating rounded-pill bg-danger">Sale</span>
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-product card-hover">
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-product card-hover"><span class="badge badge-floating rounded-pill bg-warning">Top rated</span>
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-product card-hover">
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
                <div class="col-lg-3 col-md-4 col-sm-6 d-none d-md-block d-lg-none mb-grid-gutter">
                    <div class="card card-product card-hover">
                        <a class="card-img-top" href="shop-single.html"><img src="assets/img/products/299892747.jpg" alt="Product thumbnail"></a>
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
            </div>
            <div class="text-center"><a class="btn btn-outline-primary" href="shop-ls.html">More products</a></div>
        </section>

        <!-- New arrivals (widget) + Promo banner-->
        <section class="container pt-5 mt-3 mt-md-0 pt-md-6 pt-lg-7">
            <div class="row">
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="card h-100 p-4">
                        <div class="p-2">
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-1">
                                <h3 class="fs-xl mb-0">New arrivals</h3><a class="fs-sm fw-medium me-n2" href="shop-ls.html">View more<i class="ai-chevron-right fs-lg ms-1 align-middle"></i></a>
                            </div>
                            <div class="d-flex align-items-center pb-2 mb-1">
                                <a class="d-block flex-shrink-0" href="#"><img class="rounded" src="img/demo/shop-homepage/thumbnails/04.jpg" alt="Product" width="60"></a>
                                <div class="ps-2 ms-1">
                                    <h4 class="fs-md nav-heading mb-1"><a class="fw-medium" href="#">Block-colored Hooded Top</a></h4>
                                    <p class="fs-sm mb-0">$27.50</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-2 mb-1">
                                <a class="d-block flex-shrink-0" href="#"><img class="rounded" src="img/demo/shop-homepage/thumbnails/05.jpg" alt="Product" width="60"></a>
                                <div class="ps-2 ms-1">
                                    <h4 class="fs-md nav-heading mb-1"><a class="fw-medium" href="#">Smart Watch Series 5</a></h4>
                                    <p class="fs-sm mb-0">$364.99</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-2 mb-1">
                                <a class="d-block flex-shrink-0" href="#"><img class="rounded" src="img/demo/shop-homepage/thumbnails/02.jpg" alt="Product" width="60"></a>
                                <div class="ps-2 ms-1">
                                    <h4 class="fs-md nav-heading mb-1"><a class="fw-medium" href="#">Running Sneakers, Collection</a></h4>
                                    <p class="fs-sm mb-0">$145.00</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a class="d-block flex-shrink-0" href="#"><img class="rounded" src="img/demo/shop-homepage/thumbnails/06.jpg" alt="Product" width="60"></a>
                                <div class="ps-2 ms-1">
                                    <h4 class="fs-md nav-heading mb-1"><a class="fw-medium" href="#">Bluetooth Headset</a></h4>
                                    <p class="fs-sm mb-0">$258.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bg-secondary rounded-3 pt-5 px-3 ps-sm-5 pe-sm-2">
                        <div class="d-sm-flex align-items-end text-center text-sm-start ps-2">
                            <div class="me-sm-n6 pb-5">
                                <h2 class="h1 text-sm-nowrap">Virtual Reality</h2>
                                <p class="pb-2 mx-auto mx-sm-0" style="max-width: 14rem;">Gadgets from top brands at discounted price</p>
                                <div class="d-inline-block bg-faded-danger text-danger fs-sm fw-medium rounded-1 px-3 py-2">Limited time offer</div>
                                <div class="countdown pt-3 h4 justify-content-center justify-content-sm-start" data-countdown="10/01/2021 07:00:00 PM">
                                    <div class="countdown-days"><span class="countdown-value">0</span><span class="countdown-label fs-xs text-muted">Days</span></div>
                                    <div class="countdown-hours"><span class="countdown-value">0</span><span class="countdown-label fs-xs text-muted">Hours</span></div>
                                    <div class="countdown-minutes"><span class="countdown-value">0</span><span class="countdown-label fs-xs text-muted">Mins</span></div>
                                </div><a class="btn btn-primary" href="#">Get one now</a>
                            </div>
                            <div><img src="img/demo/shop-homepage/banner.png" alt="Promo banner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brands-->
        <section class="container pt-5 mt-3 mt-md-0 pt-md-6 pt-lg-7 pb-md-4">
            <h2 class="mb-5 text-center">Shop by brand</h2>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/01_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/01_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/02_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/02_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/03_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/03_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/04_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/04_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/05_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/05_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/06_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/06_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/07_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/07_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/08_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/08_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/09_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/09_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/10_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/10_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/11_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/11_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter">
                    <a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
                        <div class="card-body px-1 py-0 text-center">
                            <div class="swap-image"><img class="swap-to" src="img/shop/brands/12_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/12_gray.png" alt="Brand logo" width="150"></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Reviews-->
        <section class="bg-secondary py-5 py-md-6 mt-4 mt-md-5">
            <div class="container-fluid py-3 py-md-0">
                <h2 class="mb-5 text-center">Trusted reviews</h2>
                <div class="tns-carousel-wrapper">
                    <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16}, &quot;520&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 12}, &quot;860&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}, &quot;1080&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 23}, &quot;1380&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 23}, &quot;1600&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 23}}}">
                        <!-- Review Card-->
                        <div class="py-2">
                            <div class="card h-100 border-0 shadow mx-1">
                                <div class="card-body">
                                    <a class="d-flex align-items-center nav-heading mb-3" href="#"><img src="img/demo/shop-homepage/thumbnails/01.jpg" alt="Product thumb" width="60">
                                        <div class="fs-md fw-medium ps-2 ms-1">Outdoor HD Cloud Security Camera</div>
                                    </a>
                                    <div class="mb-2 pb-1 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                                    </div>
                                    <p class="fs-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                                </div>
                                <footer class="fs-sm px-4 pb-4">
                                    <div class="d-flex align-items-center border-top mb-n2 pt-3"><img class="rounded-circle" src="img/testimonials/01.jpg" alt="Emma Brown" width="42">
                                        <div class="text-heading fw-medium ps-2 ms-1 mt-n1">Emma Brown</div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <!-- From Instagram-->
                        <div class="py-2"><a class="card h-100 border-0 shadow mx-1" href="#"><span class="card-floating-icon"><i class="ai-instagram"></i></span><img class="card-img-top" src="img/demo/shop-homepage/instagram/01.jpg" alt="Image">
                  <footer class="fs-sm mt-auto py-2 px-4">
                    <div class="d-flex align-items-center py-2"><img class="rounded-circle" src="img/testimonials/02.jpg" alt="@morni.janeffel" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">@morni.janeffel</div>
                    </div>
                  </footer></a></div>
                        <!-- Review Card-->
                        <div class="py-2">
                            <div class="card h-100 border-0 shadow mx-1">
                                <div class="card-body">
                                    <a class="d-flex align-items-center nav-heading mb-3" href="#"><img src="img/demo/shop-homepage/thumbnails/02.jpg" alt="Product thumb" width="60">
                                        <div class="fs-md fw-medium ps-2 ms-1">Running Sneakers, Sports Collection</div>
                                    </a>
                                    <div class="mb-2 pb-1 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i>
                                    </div>
                                    <p class="fs-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                                </div>
                                <footer class="fs-sm px-4 pb-4">
                                    <div class="d-flex align-items-center border-top mb-n2 pt-3"><img class="rounded-circle" src="img/testimonials/06.jpg" alt="Edward Chew" width="42">
                                        <div class="text-heading fw-medium ps-2 ms-1 mt-n1">Edward Chew</div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <!-- From Instagram-->
                        <div class="py-2"><a class="card h-100 border-0 shadow mx-1" href="#"><span class="card-floating-icon"><i class="ai-instagram"></i></span><img class="card-img-top" src="img/demo/shop-homepage/instagram/02.jpg" alt="Image">
                  <footer class="fs-sm mt-auto py-2 px-4">
                    <div class="d-flex align-items-center py-2"><img class="rounded-circle" src="img/testimonials/09.jpg" alt="@jane.palson" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">@jane.palson</div>
                    </div>
                  </footer></a></div>
                        <!-- Review Card-->
                        <div class="py-2">
                            <div class="card h-100 border-0 shadow mx-1">
                                <div class="card-body">
                                    <a class="d-flex align-items-center nav-heading mb-3" href="#"><img src="img/demo/shop-homepage/thumbnails/06.jpg" alt="Product thumb" width="60">
                                        <div class="fs-md fw-medium ps-2 ms-1">Wireless Bluetooth Headset</div>
                                    </a>
                                    <div class="mb-2 pb-1 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                                    </div>
                                    <p class="fs-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                                </div>
                                <footer class="fs-sm px-4 pb-4">
                                    <div class="d-flex align-items-center border-top mb-n2 pt-3"><img class="rounded-circle" src="img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                                        <div class="text-heading fw-medium ps-2 ms-1 mt-n1">Tim Brooks</div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <!-- From Instagram-->
                        <div class="py-2"><a class="card h-100 border-0 shadow mx-1" href="#"><span class="card-floating-icon"><i class="ai-instagram"></i></span><img class="card-img-top" src="img/demo/shop-homepage/instagram/03.jpg" alt="Image">
                  <footer class="fs-sm mt-auto py-2 px-4">
                    <div class="d-flex align-items-center py-2"><img class="rounded-circle" src="img/testimonials/05.jpg" alt="@sarah.cole" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">@sarah.cole</div>
                    </div>
                  </footer></a></div>
                        <!-- Review Card-->
                        <div class="py-2">
                            <div class="card h-100 border-0 shadow mx-1">
                                <div class="card-body">
                                    <a class="d-flex align-items-center nav-heading mb-3" href="#"><img src="img/demo/shop-homepage/thumbnails/04.jpg" alt="Product thumb" width="60">
                                        <div class="fs-md fw-medium ps-2 ms-1">Block-colored Hooded Top</div>
                                    </a>
                                    <div class="mb-2 pb-1 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                                    </div>
                                    <p class="fs-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                                </div>
                                <footer class="fs-sm px-4 pb-4">
                                    <div class="d-flex align-items-center border-top mb-n2 pt-3"><img class="rounded-circle" src="img/testimonials/04.jpg" alt="Michael Smith" width="42">
                                        <div class="text-heading fw-medium ps-2 ms-1 mt-n1">Michael Smith</div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <!-- From Instagram-->
                        <div class="py-2"><a class="card h-100 border-0 shadow mx-1" href="#"><span class="card-floating-icon"><i class="ai-instagram"></i></span><img class="card-img-top" src="img/demo/shop-homepage/instagram/04.jpg" alt="Image">
                  <footer class="fs-sm mt-auto py-2 px-4">
                    <div class="d-flex align-items-center py-2"><img class="rounded-circle" src="img/testimonials/02.jpg" alt="@morni.janeffel" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">@morni.janeffel</div>
                    </div>
                  </footer></a></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   <?php require 'assets/template/footer.php'; ?>