<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Foodwagon | Responsive, Ecommerce &amp; Business Templatee</title>

    <style>
      .modal {
    z-index: 1050;
}

    </style>
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('restaurant/assets/img/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('restaurant/assets/img/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('restaurant/assets/img/favicons/favicon-16x16.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('restaurant/assets/img/favicons/favicon.ico') ?>">
    <link rel="manifest" href="<?php echo base_url('restaurant/assets/img/favicons/manifest.json') ?>">
    <meta name="msapplication-TileImage" content="<?php echo base_url('restaurant/assets/img/favicons/mstile-150x150.png')?>">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?php echo base_url('restaurant/assets/css/theme.css')?>" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="<?php echo base_url('restaurant/index.html')?>"><img class="d-inline-block" src="<?php echo base_url('restaurant/assets/img/gallery/logo.svg')?>" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">foodwaGon</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
              <p class="mb-0 fw-bold text-lg-center">Deliver to: <i class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Current Location </span><span>Mirpur 1 Bus Stand, Dhaka</span></p>
            </div>
            <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
              <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food" aria-label="Search" />
              </div>
              <a href="<?php echo base_url().'TransaksiC/riwayat_transaksi'; ?>" class="btn btn-white shadow-warning text-warning">
    <i class="fas fa-hamburger me-2"></i>Riwayat Transaksi
</a>
<!-- Logout Button -->
<a href="#" class="btn btn-white shadow-warning text-warning" data-bs-toggle="modal" data-bs-target="#logoutModal">
    <i class="fas fa-sign-out-alt me-2"></i> Keluar
</a>

            </form>
          </div>
        </div>
      </nav>
      <!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Keluar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin keluar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="<?php echo base_url().'DashboardC/logout'; ?>" class="btn btn-warning">Keluar</a>
      </div>
    </div>
  </div>
</div>

      <section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
          <div class="row flex-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img class="img-fluid" src="<?php echo base_url('restaurant/assets/img/gallery/hero-header.png')?>" alt="hero-header" /></a></div>
            <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
              <h1 class="text-800 mb-5 fs-4">Within a few clicks, find meals that<br class="d-none d-xxl-block" />are accessible near you</h1>
              <div class="card w-xxl-75">
                <div class="card-body">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-motorcycle me-2"></i>Delivery</button>
                      <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-shopping-bag me-2"></i>Pickup</button>
                    </div>
                  </nav>
                  <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <form class="row gx-2 gy-2 align-items-center">
                        <div class="col">
                          <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                            <label class="visually-hidden" for="inputDelivery">Address</label>
                            <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text" placeholder="Enter Your Address" />
                          </div>
                        </div>
                        <div class="d-grid gap-3 col-sm-auto">
                          <button class="btn btn-danger" type="submit">Find Food</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <form class="row gx-4 gy-2 align-items-center">
                        <div class="col">
                          <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                            <label class="visually-hidden" for="inputPickup">Address</label>
                            <input class="form-control input-box form-foodwagon-control" id="inputPickup" type="text" placeholder="Enter Your Address" />
                          </div>
                        </div>
                        <div class="d-grid gap-3 col-sm-auto">
                          <button class="btn btn-danger" type="submit">Find Food</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="row h-100 gx-2 mt-7">
            <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="<?php echo base_url('restaurant/assets/img/gallery/discount-item-1.png')?>" alt="..." />
                  <div class="card-actions">
                    <div class="badge badge-foodwagon bg-primary p-4">
                      <div class="d-flex flex-between-center">
                        <div class="text-white fs-7">15</div>
                        <div class="d-block text-white fs-2">% <br />
                          <div class="fw-normal fs-1 mt-2">Off</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days Remaining</span></span>
                </div><a class="stretched-link" href="#"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="<?php echo base_url('restaurant/assets/img/gallery/discount-item-2.png')?>" alt="..." />
                  <div class="card-actions">
                    <div class="badge badge-foodwagon bg-primary p-4">
                      <div class="d-flex flex-between-center">
                        <div class="text-white fs-7">10</div>
                        <div class="d-block text-white fs-2">% <br />
                          <div class="fw-normal fs-1 mt-2">Off</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate">Ocean Blue Ring</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days Remaining</span></span>
                </div><a class="stretched-link" href="#"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="<?php echo base_url('restaurant/assets/img/gallery/discount-item-3.png')?>" alt="..." />
                  <div class="card-actions">
                    <div class="badge badge-foodwagon bg-primary p-4">
                      <div class="d-flex flex-between-center">
                        <div class="text-white fs-7">25</div>
                        <div class="d-block text-white fs-2">% <br />
                          <div class="fw-normal fs-1 mt-2">Off</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate">Brown Leathered Wallet</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days Remaining</span></span>
                </div><a class="stretched-link" href="#"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="<?php echo base_url('restaurant/assets/img/gallery/discount-item-4.png')?>" alt="..." />
                  <div class="card-actions">
                    <div class="badge badge-foodwagon bg-primary p-4">
                      <div class="d-flex flex-between-center">
                        <div class="text-white fs-7">20</div>
                        <div class="d-block text-white fs-2">% <br />
                          <div class="fw-normal fs-1 mt-2">Off</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate">Silverside Wristwatch</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days Remaining</span></span>
                </div><a class="stretched-link" href="#"></a>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-primary-gradient">

        <div class="container">
          <div class="row justify-content-center g-0">
            <div class="col-xl-9">
              <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="<?php echo base_url('restaurant/assets/img/gallery/location.png')?>" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Select location</h5>
                    <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="<?php echo base_url('restaurant/assets/img/gallery/order.png')?>" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Choose order</h5>
                    <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="<?php echo base_url('restaurant/assets/img/gallery/pay.png')?>" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Pay advanced</h5>
                    <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="<?php echo base_url('restaurant/assets/img/gallery/meals.png')?>" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                    <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->


        <section class="py-4 overflow-hidden">
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Menu Makanan</h5>
            </div>
            <div class="col-12">
                <div class="carousel slide" id="carouselMakananItems" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <?php 
                        // Use traditional anonymous function syntax instead of arrow functions
                        $makananItems = array_filter($makanan, function($item) {
                            return $item->kategori === 'Makanan';
                        });
                        $chunkedMakananItems = array_chunk($makananItems, 5);
                        foreach ($chunkedMakananItems as $index => $items): 
                        ?>
                            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" data-bs-interval="10000">
                                <div class="row gx-3 h-100 align-items-center">
                                    <?php foreach ($items as $item): ?>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-3">
                                                <img class="img-fluid rounded-3 h-100" src="data:image/*;base64,<?php echo base64_encode($item->gambar); ?>" alt="<?php echo htmlspecialchars($item->nama_makanan); ?>">
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 text-truncate mb-1"><?php echo htmlspecialchars($item->nama_makanan); ?></h5>
                                                    <div>
                                                        <span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span>
                                                        <span class="text-primary">Cikarang Selatan</span>
                                                    </div>
                                                    <span class="text-1000 fw-bold">Rp. <?php echo number_format($item->harga, 2); ?></span>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <a class="btn btn-lg btn-danger" role="button" href="#!"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#orderModal<?php echo $item->id_makanan; ?>"
                                                    data-harga="<?php echo $item->harga; ?>"
                                                    data-nama="<?php echo htmlspecialchars($item->nama_makanan); ?>">
                                                    Pesan Sekarang
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Order Modal -->
                                        <div class="modal fade" id="orderModal<?php echo $item->id_makanan; ?>" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel<?php echo $item->id_makanan; ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="orderModalLabel<?php echo $item->id_makanan; ?>"><?php echo htmlspecialchars($item->nama_makanan); ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="orderForm<?php echo $item->id_makanan; ?>">
                                                            <div class="form-group">
                                                                <label for="jumlah<?php echo $item->id_makanan; ?>">Jumlah</label>
                                                                <input type="number" class="form-control item-quantity" id="jumlah<?php echo $item->id_makanan; ?>" min="1" value="1" required>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <h6 id="totalHarga<?php echo $item->id_makanan; ?>">Sub Total: Rp <?php echo number_format($item->harga, 0, ',', '.'); ?></h6>
                                                            </div>
                                                            <input type="hidden" id="harga<?php echo $item->id_makanan; ?>" value="<?php echo $item->harga; ?>">
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" onclick="submitOrder('<?php echo $item->id_makanan; ?>')">Pilih Makanan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev carousel-icon" type="button" data-bs-target="#carouselMakananItems" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next carousel-icon" type="button" data-bs-target="#carouselMakananItems" data-bs-slide="next">
                        <span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>



      <script>
          document.querySelectorAll('.modal').forEach(modal => {
              modal.addEventListener('show.bs.modal', function (event) {
                  const button = event.relatedTarget;
                  const modalId = modal.getAttribute('id');
                  const hargaMakanan = parseFloat(button.getAttribute('data-harga'));
                  const itemQuantity = modal.querySelector(`#jumlah${modalId.replace('orderModal', '')}`);
                  const itemTotalPrice = modal.querySelector(`#totalHarga${modalId.replace('orderModal', '')}`);

                  itemQuantity.value = 1;
                  itemTotalPrice.textContent = `Sub Total: Rp ${hargaMakanan.toFixed(0)}`;

                  itemQuantity.addEventListener('input', function() {
                      const quantity = parseInt(itemQuantity.value);
                      const totalPrice = hargaMakanan * quantity;
                      itemTotalPrice.textContent = `Sub Total: Rp ${totalPrice.toFixed(0)}`;
                  });
              });
          });
      </script>
      <!-- <Menu Makanan> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <Menu Minuman> begin ============================-->
      <section class="py-4 overflow-hidden">
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Menu Minuman</h5>
            </div>
            <div class="col-12">
                <div class="carousel slide" id="carouselMinumanItems" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <?php 
                        // Use traditional anonymous function syntax instead of arrow functions
                        $minumanItems = array_filter($makanan, function($item) {
                            return $item->kategori === 'Minuman';
                        });
                        $chunkedMinumanItems = array_chunk($minumanItems, 5);
                        foreach ($chunkedMinumanItems as $index => $items): 
                        ?>
                            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" data-bs-interval="10000">
                                <div class="row gx-3 h-100 align-items-center">
                                    <?php foreach ($items as $item): ?>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-3">
                                                <img class="img-fluid rounded-3 h-100" src="data:image/*;base64,<?php echo base64_encode($item->gambar); ?>" alt="<?php echo htmlspecialchars($item->nama_makanan); ?>">
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 text-truncate mb-1"><?php echo htmlspecialchars($item->nama_makanan); ?></h5>
                                                    <div>
                                                        <span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span>
                                                        <span class="text-primary">Cikarang Selatan</span>
                                                    </div>
                                                    <span class="text-1000 fw-bold">Rp. <?php echo number_format($item->harga, 2); ?></span>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <a class="btn btn-lg btn-danger" role="button" href="#!"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#orderModal<?php echo $item->id_makanan; ?>"
                                                    data-harga="<?php echo $item->harga; ?>"
                                                    data-nama="<?php echo htmlspecialchars($item->nama_makanan); ?>">
                                                    Pesan Sekarang
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Order Modal -->
                                        <div class="modal fade" id="orderModal<?php echo $item->id_makanan; ?>" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel<?php echo $item->id_makanan; ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="orderModalLabel<?php echo $item->id_makanan; ?>"><?php echo htmlspecialchars($item->nama_makanan); ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="orderForm<?php echo $item->id_makanan; ?>">
                                                            <div class="form-group">
                                                                <label for="jumlah<?php echo $item->id_makanan; ?>">Jumlah</label>
                                                                <input type="number" class="form-control item-quantity" id="jumlah<?php echo $item->id_makanan; ?>" min="1" value="1" required>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <h6 id="totalHarga<?php echo $item->id_makanan; ?>">Sub Total: Rp <?php echo number_format($item->harga, 0, ',', '.'); ?></h6>
                                                            </div>
                                                            <input type="hidden" id="harga<?php echo $item->id_makanan; ?>" value="<?php echo $item->harga; ?>">
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" onclick="submitOrder('<?php echo $item->id_makanan; ?>')">Pilih Minuman</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev carousel-icon" type="button" data-bs-target="#carouselMinumanItems" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next carousel-icon" type="button" data-bs-target="#carouselMinumanItems" data-bs-slide="next">
                        <span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


      <script>
          document.querySelectorAll('.modal').forEach(modal => {
              modal.addEventListener('show.bs.modal', function (event) {
                  const button = event.relatedTarget;
                  const modalId = modal.getAttribute('id');
                  const hargaMakanan = parseFloat(button.getAttribute('data-harga'));
                  const itemQuantity = modal.querySelector(`#jumlah${modalId.replace('orderModal', '')}`);
                  const itemTotalPrice = modal.querySelector(`#totalHarga${modalId.replace('orderModal', '')}`);

                  itemQuantity.value = 1;
                  itemTotalPrice.textContent = `Sub Total: Rp ${hargaMakanan.toFixed(0)}`;

                  itemQuantity.addEventListener('input', function() {
                      const quantity = parseInt(itemQuantity.value);
                      const totalPrice = hargaMakanan * quantity;
                      itemTotalPrice.textContent = `Sub Total: Rp ${totalPrice.toFixed(0)}`;
                  });
              });
          });

          
      </script>
    <!-- <Menu Minuman> close ============================-->
    <!-- ============================================-->
     
    
    
    <!-- ============================================-->
    <!-- <section table> begin ============================-->
    <section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Detail Pembelian</h2>
        <h4>ID Pembelian :</h4>
        <table class="table table-striped table-bordered">
            <thead style="text-align:center;">
                <tr>
                    <!-- <th>ID Makanan</th> -->
                    <th>Nama Makanan</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Sub Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Detail Pembelian akan ditambahkan di sini oleh JavaScript -->
            </tbody>
        </table>
        <!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus pesanan ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
            </div>
        </div>
    </div>
</div>

        <h5 class="total-harga mb-4">Total Harga : Rp 0</h5>
        <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary" id="pesanButton">
    Pesan
</button>

<!-- Modal Informasi Pesanan Kosong -->
<div class="modal fade" id="emptyOrderModal" tabindex="-1" aria-labelledby="emptyOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emptyOrderModalLabel">Informasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Mohon pilih pesanan terlebih dahulu.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Pesan -->
<div class="modal fade" id="confirmOrderModal" tabindex="-1" aria-labelledby="confirmOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmOrderModalLabel">Konfirmasi Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda ingin memesan ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmOrderButton">Ya, Pesan</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('pesanButton').addEventListener('click', function() {
        if (detailPesanan.length === 0) {
            const emptyOrderModal = new bootstrap.Modal(document.getElementById('emptyOrderModal'));
            emptyOrderModal.show();
        } else {
            const confirmOrderModal = new bootstrap.Modal(document.getElementById('confirmOrderModal'));
            confirmOrderModal.show();
        }
    });

    document.getElementById('confirmOrderButton').addEventListener('click', function() {
    // Create an order object
    const orderData = {
        id_trs: generateUniqueId(), // Function to generate a unique transaction ID
        total_harga: detailPesanan.reduce((sum, item) => sum + item.total, 0),
        detailPesanan: detailPesanan.map(item => ({
            id_makanan: item.idMakanan,
            jumlah: item.jumlah,
            harga_satuan: item.harga,
            subtotal: item.total
        }))
    };

    // Send AJAX request to submit order
    fetch('<?= site_url('transaksic/submitOrder') ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(orderData),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Pesanan Anda telah dikonfirmasi!");
            // Reset detailPesanan and update the table
            detailPesanan = [];
            updateDetailPesananTable();
            const confirmOrderModal = bootstrap.Modal.getInstance(document.getElementById('confirmOrderModal'));
            confirmOrderModal.hide();
        } else {
            alert("Terjadi kesalahan saat mengkonfirmasi pesanan.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert("Terjadi kesalahan. Silakan coba lagi.");
    });
});

// Helper function to generate a unique transaction ID
function generateUniqueId() {
    return 'TR' + Date.now().toString(36); // Generates a unique ID based on timestamp
}

</script>

        </div>
    </div>
</section>

<!-- JavaScript untuk Menambah Data ke Tabel -->
<script>
  let detailPesanan = []; // Array untuk menyimpan detail pesanan sementara

function submitOrder(itemId) {
    // Ambil elemen terkait pesanan
    const namaMakanan = document.querySelector(`#orderModal${itemId} .modal-title`).textContent;
    const hargaMakanan = parseFloat(document.querySelector(`#harga${itemId}`).value);
    const jumlahMakanan = parseInt(document.querySelector(`#jumlah${itemId}`).value);

    // Hitung total harga untuk item ini (sub total)
    const totalHargaItem = hargaMakanan * jumlahMakanan;

    // Cari apakah item sudah ada di detailPesanan berdasarkan itemId
    const existingOrderIndex = detailPesanan.findIndex(pesanan => pesanan.idMakanan === itemId);

    if (existingOrderIndex !== -1) {
        // Jika item sudah ada, perbarui jumlah dan total harga
        detailPesanan[existingOrderIndex].jumlah += jumlahMakanan;
        detailPesanan[existingOrderIndex].total = detailPesanan[existingOrderIndex].harga * detailPesanan[existingOrderIndex].jumlah;
    } else {
        // Jika item belum ada, tambahkan sebagai pesanan baru
        const pesananBaru = {
            idMakanan: itemId,
            namaMakanan,
            kategori: "Minuman",
            harga: hargaMakanan,
            jumlah: jumlahMakanan,
            total: totalHargaItem // Sub Total untuk item ini
        };
        detailPesanan.push(pesananBaru);
    }

    // Perbarui tampilan tabel
    updateDetailPesananTable();

    // Tutup modal
    document.querySelector(`#orderModal${itemId} .btn-close`).click();
}

function updateDetailPesananTable() {
    const tbody = document.querySelector('table tbody');
    tbody.innerHTML = ''; // Kosongkan isi tabel sebelum diisi ulang

    detailPesanan.forEach((pesanan, index) => {
        const row = document.createElement('tr');

        row.innerHTML = `
            <td>${pesanan.namaMakanan}</td>
            <td>${pesanan.kategori}</td>
            <td>Rp ${pesanan.harga.toLocaleString('id-ID')}</td>
            <td>${pesanan.jumlah}</td>
            <td>Rp ${pesanan.total.toLocaleString('id-ID')}</td> <!-- Tampilkan Sub Total -->
             <td style="text-align:center;"><a onclick="confirmHapusPesanan(${index})" class="text-danger" > <i class="fas fa-trash-alt"></i></a></td>
            
        `;

        tbody.appendChild(row);
    });

    // Perbarui total harga keseluruhan
    updateTotalHarga();
}

function updateTotalHarga() {
    const totalHarga = detailPesanan.reduce((sum, pesanan) => sum + pesanan.total, 0);
    document.querySelector('.total-harga').textContent = `Total Harga : Rp ${totalHarga.toLocaleString('id-ID')}`;
}

function hapusPesanan(index) {
    detailPesanan.splice(index, 1); // Hapus item dari array
    updateDetailPesananTable(); // Perbarui tampilan tabel
}

function confirmHapusPesanan(index) {
    indexPesananUntukDihapus = index;
    const confirmDeleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
    confirmDeleteModal.show();
}

document.getElementById('confirmDeleteButton').addEventListener('click', function() {
    if (indexPesananUntukDihapus !== null) {
        detailPesanan.splice(indexPesananUntukDihapus, 1);
        updateDetailPesananTable();
        indexPesananUntukDihapus = null; // Reset setelah dihapus
    }
    const confirmDeleteModal = bootstrap.Modal.getInstance(document.getElementById('confirmDeleteModal'));
    confirmDeleteModal.hide();
});



</script>
    <!-- ============================================-->
    <!-- <section> end ============================-->

      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card card-span mb-3 shadow-lg">
                <div class="card-body py-0">
                  <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="<?php echo base_url('restaurant/assets/img/gallery/pizza.png')?>" alt="..." /></div>
                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                      <h1 class="card-title mt-xl-5 mb-4">Wanna eat hot & <span class="text-primary">spicy Pizza?</span></h1>
                      <p class="fs-1">Pair up with a friend and enjoy the hot and crispy pizza pops. Try it with the best deals.</p>
                      <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0">
        <div class="bg-holder" style="background-image:url(<?php echo base_url('restaurant/assets/img/gallery/cta-two-bg.png')?>);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xxl-9 py-7 text-center">
              <h1 class="fw-bold mb-4 text-white fs-6">Are you ready to order <br />with the best deals? </h1><a class="btn btn-danger" href="#"> PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
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
              <h5 class="lh-lg fw-bold text-500">FOLLOW US</h5>
              <div class="text-start my-3"> <a href="#!">
                  <svg class="svg-inline--fa fa-instagram fa-w-14 fs-2 me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#BDBDBD" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                  </svg></a><a href="#!">
                  <svg class="svg-inline--fa fa-facebook fa-w-16 fs-2 mx-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#BDBDBD" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                  </svg></a><a href="#!">
                  <svg class="svg-inline--fa fa-twitter fa-w-16 fs-2 mx-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#BDBDBD" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                  </svg></a></div>
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
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?php echo base_url('restaurant/vendors/@popperjs/popper.min.js')?>"></script>
    <script src="<?php echo base_url('restaurant/vendors/bootstrap/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('restaurant/vendors/is/is.min.js')?>"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo base_url('restaurant/vendors/fontawesome/all.min.js')?>"></script>
    <script src="<?php echo base_url('restaurant/assets/js/theme.js')?>"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>