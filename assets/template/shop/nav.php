        <!-- Navbar (Solid background + shadow)-->
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        <header class="header">
            <div class="topbar topbar-dark bg-dark">
                <div class="container d-md-flex align-items-center px-0 px-xl-3">
                    <div class="d-none d-md-block text-nowrap me-3">
                    <i class="fas fa-phone-alt fs-base text-muted me-1 align-middle"></i>
                    <span class="text-muted me-2">Ventas al por mayor y al detal</span>
                    <a class="topbar-link me-1" href="tel:3105973233">(+57) 3105973233</a> <i class="fas fa-angle-right text-muted me-1 align-middle"></i>5110738 <i class="fas fa-angle-right text-muted me-1 align-middle"></i>5120482 &nbsp;<a class="topbar-link me-1" href="tel:3206572484"><i class="fab fa-whatsapp fs-base text-muted me-1 align-middle"></i>(+57) 3206572484</a>
                    </div>
                    <div class="d-flex text-md-end ms-md-auto"><a class="topbar-link pe-2 me-4" href="order-tracking.php">
                        <i class="fas fa-map-marker-alt fs-base opacity-60 me-1 align-middle"></i>Ratrear <span class='d-none d-sm-inline'>pedido</span></a>
                    <div class="ms-auto ms-md-0 me-3">
                       <img class="me-2" src="assets/img/co.png" alt="Español" width="20">Col
                    </div>
                        <div class="topbar-link">
                        $ Pesos (COP)
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
                    <button class="navbar-toggler ms-n2 me-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button>
                    <a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href=""><img class="d-none d-lg-block" src="assets/img/logoVikingos.png" alt="Comercializadora Vikingos" width="75"><img class="d-lg-none" src="assets/img/logoVikingos.png" alt="Comercializadora Vikingos" width="58"></a>
                    <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
                        <!-- Buscar -->
                        <div class="navbar-tool"><a class="navbar-tool-icon-box me-2" href="#" data-bs-toggle="search">
                            <i class="fas fa-search text-muted me-1 align-middle"></i></a>
                        </div>
                        <!-- Cuenta -->
                        <div class="navbar-tool d-none d-sm-flex">
                            <a class="navbar-tool-icon-box me-2" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view">
                                <i class="fas fa-user text-muted me-1 align-middle"></i>
                            </a>
                        </div>
                        <!-- Carrito -->
                        <div class="border-start me-2" style="height: 30px;"></div>
                        <div class="navbar-tool me-2"><a class="navbar-tool-icon-box" href="#" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart">
                            <i class="fas fa-cart-plus text-muted me-1 align-middle"></i><span class="navbar-tool-badge">3</span></a>
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
                                <li class="nav-item <?php if($module == 'home'){ echo 'active';}?>">
                                    <a class="nav-link" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item <?php if($module == 'company'){ echo 'active';}?>">
                                    <a class="nav-link" href="company.php">Quiénes somos</a>
                                </li>
                                <li class="nav-item <?php if($module == 'products'){ echo 'active';}?>">
                                    <a class="nav-link" href="#">Nuestros productos</a>
                                </li>
                                <li class="nav-item <?php if ($module == 'contact') {echo 'active';}?>">
                                    <a class="nav-link" href="#">Contactanos</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-cap border-top"><a class="btn btn-translucent-primary d-block w-100" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view"><i class="ai-user fs-lg me-2"></i>Sign in</a></div>
                    </div>
                </div>
            </div>
        </header>
