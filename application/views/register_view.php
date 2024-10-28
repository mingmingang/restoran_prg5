<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Foodwagon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('restaurant/assets/css/theme.css')?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('restaurant/assets/img/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('restaurant/assets/img/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('restaurant/assets/img/favicons/favicon-16x16.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('restaurant/assets/img/favicons/favicon.ico') ?>">
    <link rel="manifest" href="<?php echo base_url('restaurant/assets/img/favicons/manifest.json') ?>">
    <meta name="msapplication-TileImage" content="<?php echo base_url('restaurant/assets/img/favicons/mstile-150x150.png')?>">
    <meta name="theme-color" content="#ffffff">
    <style>
        body {
            background-color: #f8f9fa; /* Latar belakang halaman */
        }
        .card {
            margin-top: 60px; /* Menjaga jarak atas untuk card */
        }
        .navbar {
            margin-bottom: 20px; /* Menjaga jarak antara navbar dan konten */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="<?php echo base_url('restaurant/index.html')?>"><img class="d-inline-block" src="<?php echo base_url('restaurant/assets/img/gallery/logo.svg')?>" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">foodwaGon</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
              <p class="mb-0 fw-bold text-lg-center">Deliver to: <i class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Current Location </span><span>Mirpur 1 Bus Stand, Dhaka</span></p>
            </div>
            <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
            
              <a href="<?php echo base_url().'DashboardC'; ?>" class="btn btn-white shadow-warning text-warning">
              <i class="fas fa-home me-2"></i>Beranda
              </a>
            </form>
          </div>
        </div>
      </nav>

    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="mb-0">Register</h5> <!-- Judul untuk registrasi -->
                        </div>
                        <div class="card-body">
                        <form action="<?php echo site_url('UserC/save'); ?>" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </form>
                            <p class="mt-3 text-center">
                                Sudah punya akun? <a style="color:orange;" href="<?php echo site_url('UserC/login'); ?>"><strong>Masuk di sini</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-0 pt-7 bg-1000">

<div class="container">
  <div class="row justify-content-lg-between">
    <h5 class="lh-lg fw-bold text-white">OUR TOP CITIES</h5>
    <div class="col-6 col-md-4 col-lg-auto mb-3">
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San Francisco</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Miami</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San Diego</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">East Bay</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Long Beach</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-4 col-lg-auto mb-3">
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Los Angeles</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Washington DC</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Seattle</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Portland</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Nashville</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-4 col-lg-auto mb-3">
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New York City</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Orange County</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Atlanta</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Charlotte</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Denver</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-4 col-lg-auto mb-3">
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Chicago</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Phoenix</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Las Vegas</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Sacramento</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Oklahoma City</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-4 col-lg-auto mb-3">
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Columbus</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New Mexico</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Albuquerque</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Sacramento</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New Orleans</a></li>
      </ul>
    </div>
  </div>
  <hr class="text-900" />
  <div class="row">
    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
      <h5 class="lh-lg fw-bold text-white">COMPANY</h5>
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">About Us</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Team</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Careers</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">blog</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 col-lg-3 mb-3">
      <h5 class="lh-lg fw-bold text-white">CONTACT</h5>
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Help &amp; Support</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Partner with us </a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with us</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with us</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
      <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy Policy</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Cookie Policy</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
      <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
      <ul class="list-unstyled mb-md-4 mb-lg-0">
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
        <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy Policy</a></li>
      </ul>
    </div>
    <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
      <h3 class="text-500 my-4">Receive exclusive offers and <br />discounts in your mailbox</h3>
      <div class="row input-group-icon mb-5">
        <div class="col-auto"><i class="fas fa-envelope input-box-icon text-500 ms-3"></i>
          <input class="form-control input-box bg-800 border-0" type="email" placeholder="Enter Email" aria-label="email" />
        </div>
        <div class="col-auto">
          <button class="btn btn-primary" type="submit">Subscribe</button>
        </div>
      </div>
    </div>
  </div>
  <hr class="border border-800" />
  <div class="row flex-center pb-3">
    <div class="col-md-6 order-0">
      <p class="text-200 text-center text-md-start">All rights Reserved &copy; Your Company, 2021</p>
    </div>
    <div class="col-md-6 order-1">
      <p class="text-200 text-center text-md-end"> Made with&nbsp;
        <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFB30E" viewBox="0 0 16 16">
          <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
        </svg>&nbsp;by&nbsp;<a class="text-200 fw-bold" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
      </p>
    </div>
  </div>
</div><!-- end of .container-->

</section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
