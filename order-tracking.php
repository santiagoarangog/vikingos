<?php require 'assets/template/header.php'; ?>
<!-- Body-->
  <body>
    <?php 
require 'assets/template/loader.php'; 
require 'assets/features/modals/logIn.php'; 
?>
    <main class="page-wrapper">
        <?php
require 'assets/template/shop/nav.php';
require 'assets/features/shoppingCart/shopping.php';
?>
    <!-- Page content-->
      <div class="container pt-4 mb-2 pb-6">
        <nav aria-label="breadcrumb">
          <ol class="py-1 my-2 breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="shop-ls.html">Shop</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Order tracking</li>
          </ol>
        </nav>
        <h1 class="mb-3 pb-4">Tracking order: <span class='fw-normal'>34VB5540K83</span></h1>
        <!-- Details-->
        <div class="row mb-4">
          <div class="col-sm-4 mb-2">
            <div class="bg-secondary h-100 p-4 text-center rounded"><span class="fw-medium text-heading me-2">Shipped via:</span>UPS Ground</div>
          </div>
          <div class="col-sm-4 mb-2">
            <div class="bg-secondary h-100 p-4 text-center rounded"><span class="fw-medium text-heading me-2">Status:</span>Processing order</div>
          </div>
          <div class="col-sm-4 mb-2">
            <div class="bg-secondary h-100 p-4 text-center rounded"><span class="fw-medium text-heading me-2">Expected date:</span>May 15, 2020</div>
          </div>
        </div>
        <!-- Progress-->
        <div class="card border-0 shadow">
          <div class="card-body">
            <div class="progress mb-3" style="height: 4px;">
              <div class="progress-bar" role="progressbar" style="width: 36%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="row pt-4">
              <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center mb-4">
                  <div class="bg-secondary rounded-circle border text-center" style="width: 60px; height: 60px; line-height: 54px;"><i class="ai-shopping-bag fs-xl text-muted align-middle"></i></div>
                  <div class="ps-3"><span class="badge bg-success rounded-pill mb-1"><i class="ai-check me-1"></i>Completed</span>
                    <h6 class="text-muted mb-0">Order placed</h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center mb-4">
                  <div class="rounded-circle border border-primary text-center" style="width: 60px; height: 60px; line-height: 54px;"><i class="ai-settings fs-xl text-primary align-middle"></i></div>
                  <div class="ps-3"><span class="badge bg-primary rounded-pill mb-1">In progress</span>
                    <h6 class="text-primary mb-0">Processing order</h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center mb-4">
                  <div class="rounded-circle border text-center" style="width: 60px; height: 60px; line-height: 54px;"><i class="ai-star fs-xl align-middle"></i></div>
                  <div class="ps-3"><span class="d-block text-muted fs-ms mb-1">Third step</span>
                    <h6 class="mb-0">Quality check</h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center mb-4">
                  <div class="rounded-circle border text-center" style="width: 60px; height: 60px; line-height: 54px;"><i class="ai-package fs-xl align-middle"></i></div>
                  <div class="ps-3"><span class="d-block text-muted fs-ms mb-1">Fourth step</span>
                    <h6 class="mb-0">Product dispatched</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer-->
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center text-center pt-4">
          <div class="form-check d-inline-block mt-2 me-3">
            <input class="form-check-input" type="checkbox" id="notify-me" checked>
            <label class="form-check-label fs-sm" for="notify-me">Notify me when order is delivered</label>
          </div><a class="btn btn-primary btn-sm mt-2" href="dashboard-orders.html">View order details</a>
        </div>
      </div>
    </main>
   <?php require 'assets/template/footer.php';?>
