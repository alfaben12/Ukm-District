  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Page CSS -->
  <link type="text/css" href="<?= base_url() ?>assets/libs/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/purpose.css" id="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
</head>

<body>
  <header class="header header-transparent" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <span class="navbar-text mr-3">UMKM Pasuruan</span>
          </div>
          <div>
          <ul class="nav">
              <li class="nav-item dropdown ml-lg-2">
                <a class="nav-link px-0" href="<?= site_url() ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/us.svg">
                  <span class="d-none d-lg-inline-block">Pasuruan</span>
                  <span class="d-lg-none">ID</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm">
                  <a href="<?= site_url() ?>" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/es.svg">Spanish</a>
                  <a href="<?= site_url() ?>" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/ro.svg">Romanian</a>
                  <a href="<?= site_url() ?>" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/gr.svg">Greek</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="ml-auto">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('helps') ?>">Bantuan</a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url() ?>" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="far fa-search"></i></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="checkout-cart.html"><i class="far fa-shopping-cart"></i></a>
              </li> -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="<?= site_url() ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <h6 class="dropdown-header">User menu</h6>
                  <a class="dropdown-item" href="<?= site_url() ?>">
                    <i class="far fa-user"></i>Account
                  </a>
                  <a class="dropdown-item" href="<?= site_url() ?>">
                    <span class="float-right badge badge-primary">4</span>
                    <i class="far fa-envelope"></i>Messages
                  </a>
                  <a class="dropdown-item" href="<?= site_url() ?>">
                    <i class="far fa-cog"></i>Settings
                  </a>
                  <div class="dropdown-divider" role="presentation"></div>
                  <a class="dropdown-item" href="<?= site_url() ?>">
                    <i class="far fa-sign-out-alt"></i>Sign out
                  </a>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark" id="navbar-main">
    <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="<?= site_url() ?>">
          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/brand/white.png" id="navbar-logo" style="height: 50px;">
        </a>
        <!-- Navbar collapse trigger -->
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar nav -->
        <div class="collapse navbar-collapse" id="navbar-main-collapse">
          <ul class="navbar-nav align-items-lg-center">
            <!-- Home - Overview  -->
            <li class="nav-item ">
              <a class="nav-link" href="<?= site_url() ?>">Beranda</a>
            </li>
            <!-- Pages menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="<?= site_url() ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Halaman</a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="<?= site_url() ?>" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Secure_Files.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Otentikasi</h6>
                          <p class="mb-0">Contoh untuk skenario apa pun.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Umum</li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('logins') ?>">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('logins/register') ?>">
                          Daftar
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="<?= site_url() ?>" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Task.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Account</h6>
                          <p class="mb-0">Account management made cool.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Akun</li>
                      <li>
                        <a class="dropdown-item" href="../account/account-notifications.html">
                          Akses Akun
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">List</li>
                      <li>
                        <a class="dropdown-item" href="../account/listing-orders.html">
                          Produk
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="<?= site_url() ?>" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Cart_Add_2.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Belanja</h6>
                          <p class="mb-0">Alur lengkap untuk toko online.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Toko</li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('shops') ?>">
                          Produk
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Checkout</li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('carts') ?>">
                          Keranjang
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Sections menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="<?= site_url() ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bagian</a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="<?= base_url() ?>" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Apps.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Jelajahi semua.</h6>
                          <p class="mb-0">Contoh bagian yang mengagumkan untuk skenario apa pun.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="<?= site_url() ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokumentasi</a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="<?= base_url() ?>blogs" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Blog</h6>
                          <p class="mb-0">Mari membaca tulisan seputar kita.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-lg-none d-xl-block">
              <a class="nav-link" href="<?= site_url() ?>" target="_blank">Apa yang baru?</a>
            </li>
            <li class="nav-item mr-0">
              <a href="<?= site_url('shops') ?>" target="_blank" class="nav-link d-lg-none">Belanja yuk!</a>
              <a href="<?= site_url('shops') ?>" target="_blank" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Pergi ke toko ...">
                <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                <span class="btn-inner--text">Belanja yuk!</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
  </header>
  <!-- Omnisearch -->
  <div id="omnisearch" class="omnisearch">
    <div class="container">
      <!-- Search form -->
      <form class="omnisearch-form">
        <div class="form-group">
          <div class="input-group input-group-merge input-group-flush">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="ketik kata kunci ...">
          </div>
        </div>
      </form>
      <!-- <div class="omnisearch-suggestions">
        <h6 class="heading">Search Suggestions</h6>
        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a class="list-link" href="<?= site_url() ?>">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="<?= site_url() ?>">
                  <i class="far fa-search"></i>
                  <span>iphone 8</span> in Smartphones
                </a>
              </li>
              <li>
                <a class="list-link" href="<?= site_url() ?>">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="<?= site_url() ?>">
                  <i class="far fa-search"></i>
                  <span>beats pro solo 3</span> in Headphones
                </a>
              </li>
              <li>
                <a class="list-link" href="<?= site_url() ?>">
                  <i class="far fa-search"></i>
                  <span>smasung galaxy 10</span> in Phones
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <div class="main-content">
    <!-- Header (account) -->
    <header class="header-account-page bg-primary d-flex align-items-end">
      <!-- Header container -->
      <div class="container">
        <div class="row">
          <div class=" col-lg-12">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-md-5 mb-4 mb-md-0">
                <span class="h2 mb-0 text-white d-block"><?= $greeting ?></span>
                <span class="text-white">Semoga harimu menyenangkan!</span>
              </div>
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <div class="btn-group btn-group-nav shadow" role="group" aria-label="Basic example">
                <div class="btn-group" role="group">
                  <a href="<?= site_url('carts') ?>" class="btn btn-white btn-icon">
                    <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                    <span class="btn-inner--text d-none d-md-inline-block">Keranjang</span>
                  </a>
                  <a href="<?= site_url('confirmations') ?>" class="btn btn-white btn-icon active">
                    <span class="btn-inner--icon"><i class="far fa-truck"></i></span>
                    <span class="btn-inner--text d-none d-md-inline-block">Pengiriman</span>
                  </a>
                  <a href="<?= site_url('confirmations/payment') ?>" class="btn btn-white btn-icon">
                    <span class="btn-inner--icon"><i class="far fa-credit-card"></i></span>
                    <span class="btn-inner--text d-none d-md-inline-block">Pembayaran</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="slice">
      <div class="container">
        <div class="row row-grid">
          <div class="col-lg-8">
            <form id="formConfirmation">
              <!-- Title -->
              <!-- <div class="actions-toolbar py-2 mb-4">
                <h5 class="mb-1">Saved addresses</h5>
                <p class="text-sm text-muted mb-0">Use one of your saved addresses for fast checkout.</p>
              </div> -->
              <!-- Table of addresses -->
              <!-- <div class="table-responsive">
                <table class="table table-cards align-items-center">
                  <tbody class="list">
                    <tr>
                      <th scope="row">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="radio-address" id="tbl-addresses-check-1" checked>
                          <label class="custom-control-label" for="tbl-addresses-check-1"></label>
                        </div>
                      </th>
                      <td>
                        <span class="font-weight-600 text-dark">Address 1</span><span class="badge badge-pill badge-soft-info ml-2">Primary</span></td>
                      <td>
                        <p class="mb-0 text-muted text-limit text-sm">1333 Deerfield, State College PA, 16803</p>
                      </td>
                      <td>
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="checkout-shipping.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="checkout-shipping.html#"><i class="far fa-edit text-muted"></i>Edit address</a>
                              <a class="dropdown-item" href="checkout-shipping.html#"><i class="far fa-trash-alt text-danger"></i>Move to trash</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="table-divider"></tr>
                    <tr>
                      <th scope="row">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="radio-address" id="tbl-addresses-check-2">
                          <label class="custom-control-label" for="tbl-addresses-check-2"></label>
                        </div>
                      </th>
                      <td>
                        <span class="font-weight-600 text-dark">Address 2</span></td>
                      <td>
                        <p class="mb-0 text-muted text-limit text-sm">2047 Main Street, State Chicago CH, 20067</p>
                      </td>
                      <td>
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="checkout-shipping.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="checkout-shipping.html#"><i class="far fa-edit text-muted"></i>Edit address</a>
                              <a class="dropdown-item" href="checkout-shipping.html#"><i class="far fa-trash-alt text-danger"></i>Move to trash</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="table-divider"></tr>
                    <tr>
                      <th scope="row">
                        <div class="custom-control custom-checkbox">
                          <input type="radio" class="custom-control-input" name="radio-address" id="tbl-addresses-check-3">
                          <label class="custom-control-label" for="tbl-addresses-check-3"></label>
                        </div>
                      </th>
                      <td>
                        <span class="font-weight-600 text-dark">Address 3</span></td>
                      <td>
                        <p class="mb-0 text-muted text-limit text-sm">5078 Third Street, State New York NY, 33006</p>
                      </td>
                      <td>
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="checkout-shipping.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="checkout-shipping.html#"><i class="far fa-edit text-muted"></i>Edit address</a>
                              <a class="dropdown-item" href="checkout-shipping.html#"><i class="far fa-trash-alt text-danger"></i>Move to trash</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div> -->
              <div class="mt-5">
                <!-- Title -->
                <div class="actions-toolbar py-2 mb-4">
                  <h5 class="mb-1">Alamat pengiriman</h5>
                  <p class="text-sm text-muted mb-0">Isi info alamat Anda untuk pesanan atau pembayaran yang akan datang.</p>
                </div>
                <!-- New address form -->
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label">Pembayaran</label>
                      <select class="form-control" data-toggle="select" id="selectPayment" name="paymentID" title="Pembayaran">
                        <!-- RENDER HERE -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">Nama depan<font color="red" size="2">*</font></label>
                      <input class="form-control" type="text" placeholder="Nama depan" name="firstName">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">Nama belakang<font color="red" size="2">*</font></label>
                      <input class="form-control" type="text" placeholder="Nama belakang" name="lastName">
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label">Perusahaan</label>
                      <input class="form-control" type="text" placeholder="Perusahaan" name="company">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">No HP (WA)<font color="red" size="2">*</font></label>
                      <input class="form-control" type="text" placeholder="Nomor HP (WA)" name="phoneNumber">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">Email<font color="red" size="2">*</font></label>
                      <input class="form-control" type="email" placeholder="Alamat email" name="email">
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label">Alamat<font color="red" size="2">*</font></label>
                      <input class="form-control" type="text" placeholder="Alamat (contoh: Jln. ikan piranha no.10 RT001 RW003)" name="address">
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label">Kota/Kabupaten<font color="red" size="2">*</font></label>
                      <input class="form-control" type="text" placeholder="Kota atau kabupaten" name="city">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">Desa<font color="red" size="2">*</font></label>
                      <input class="form-control" type="text" placeholder="Desa atau kelurahan" name="district">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">Kode pos</label>
                      <input class="form-control" type="text" placeholder="Kode pos" name="zip">
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label">Note</label>
                      <textarea class="form-control" placeholder="Pesan khusus" rows="3" name="note"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-5">
                <!-- Title -->
                <div class="actions-toolbar py-2 mb-4">
                  <h5 class="mb-1">Jenis pengiriman</h5>
                  <p class="text-sm text-muted mb-0">Isi info alamat Anda untuk pesanan atau pembayaran yang akan datang.</p>
                </div>
                <!-- Shipping method options -->
                <div class="row row-grid mt-4" id="div_shippingMethod">
                  <!-- RENDER SHIPPING METHOD HERE -->
                </div>
              </div>
              <div class="mt-4 text-left">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck2" name="agree" value="yes" data-toggle="indeterminate">
                <label class="custom-control-label" for="customCheck2">
                  Saya sudah membaca dan menerima
                  <a href="#">syarat</a> &amp; <a href="#">ketentuan.</a>
                </label>
              </div>
              </div>
              <div class="mt-4 text-right">
                <a href="shop-landing.html" class="btn btn-link text-sm text-dark font-weight-bold">Lanjutkan belanja</a>
                <button type="button" class="btn btn-sm btn-success" id="submitCheckOut">Pembayaran</button>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div data-toggle="sticky" data-sticky-offset="30">
              <div class="card" id="card-summary">
                <div class="card-header py-3">
                  <div class="row align-items-center">
                    <div class="col-6">
                      <span class="h6">Ringkasan</span>
                    </div>
                    <div class="col-6 text-right">
                      <span class="badge badge-pill badge-soft-success"><font id="totalItem"></font> items</span>
                    </div>
                  </div>
                </div>
                <div class="card-body" id="listItem">
                  
                  <!-- RENDER HERE -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    $(document).ready(function() {
		var base_url = '<?= base_url() ?>';

        $.ajax({
            url: '<?= site_url() ?>carts/getAllCart',
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#totalAmount").empty();
                $("#totalFinalAmount").empty();
                $("#listItem").empty();
            },
            complete: function() {},
            success: function(response) {
                $("#totalItem").text(response.data.totalCart);
                var cart = '';
                for (var k in response.data.cart) {
                    if (k == 0) {
                      cart +=
                      '<div class="row">'+
                      '<div class="col-8">'+
                      '<div class="media align-items-center">'+
                      '<img class="mr-2" alt="Gambar produk UMKM" src="'+ response.data.cart[k].image +'" style="width: 42px;">'+
                      '<div class="media-body">'+
                      '<div class="text-limit lh-100">'+
                      '<small class="font-weight-bold mb-0">'+ response.data.cart[k].name +'</small>'+
                      '</div>'+
                      '<small class="text-muted">'+ response.data.cart[k].qty +' x Rp. '+ response.data.cart[k].price +'</small>'+
                      '</div>'+
                      '</div>'+
                      '</div>'+
                      '<div class="col-4 text-right lh-100">'+
                      '<small class="text-dark">Rp. '+ response.data.cart[k].subtotal +'</small>'+
                      '</div>'+
                      '</div>';
                    }else{
                      cart +=
                      '<div class="row mt-3 pt-3 delimiter-top">'+
                      '<div class="col-8">'+
                      '<div class="media align-items-center">'+
                      '<img class="mr-2" alt="Gambar produk UMKM" src="'+ response.data.cart[k].image +'" style="width: 42px;">'+
                      '<div class="media-body">'+
                      '<div class="text-limit lh-100">'+
                      '<small class="font-weight-bold mb-0">'+ response.data.cart[k].name +'</small>'+
                      '</div>'+
                      '<small class="text-muted">'+ response.data.cart[k].qty +' x Rp. '+ response.data.cart[k].price +'</small>'+
                      '</div>'+
                      '</div>'+
                      '</div>'+
                      '<div class="col-4 text-right lh-100">'+
                      '<small class="text-dark">Rp. '+ response.data.cart[k].subtotal +'</small>'+
                      '</div>'+
                      '</div>';
                    }
                }
                    cart += '<div class="row mt-3 pt-3 border-top">'+
                    '<div class="col-8 text-right">'+
                    '<small class="font-weight-bold">Subtotal:</small>'+
                    '</div>'+
                    '<div class="col-4 text-right">'+
                    '<span class="text-sm font-weight-bold">Rp. '+ response.data.totalAmount +'</span>'+
                    '</div>'+
                    '</div>'+
                    '<div class="row mt-3 pt-3 border-top">'+
                    '<div class="col-8 text-right">'+
                    '<div class="media align-items-center">'+
                    '<i class="far fa-shipping-fast"></i>'+
                    '<div class="media-body">'+
                    '<div class="text-limit lh-100">'+
                    '<small class="font-weight-bold mb-0">Shipping</small>'+
                    '</div>'+
                    '<small class="text-muted">Sesuai pilihan</small>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="col-4 text-right">'+
                    '<span class="text-sm font-weight-bold">Akumulasi</span>'+
                    '</div>'+
                    '</div>'+
                    '<div class="row mt-3 pt-3 border-top">'+
                    '<div class="col-8 text-right">'+
                    '<small class="text-sm font-weight-bold">Pajak:</small>'+
                    '</div>'+
                    '<div class="col-4 text-right">'+
                    '<span class="text-sm font-weight-bold">0%</span>'+
                    '</div>'+
                    '</div>'+
                    '<div class="row mt-3 pt-3 border-top">'+
                    '<div class="col-8 text-right">'+
                    '<small class="text-uppercase font-weight-bold">Total:</small>'+
                    '</div>'+
                    '<div class="col-4 text-right">'+
                    '<span class="text-sm font-weight-bold" id="textTotal">Rp. '+ response.data.totalAmount +' + Akumulasi</span>'+
                    '</div>'+
                    '</div>';
                    $("#listItem").append(cart).fadeIn(500);
            }
        });

        $.ajax({
            url: '<?= site_url() ?>confirmations/getPayment',
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#selectPayment").empty();
            },
            complete: function() {},
            success: function(response) {
              var opt = document.getElementById('selectPayment');
              opt.innerHTML = opt.innerHTML +
                    '<option selected disabled>Pilih pembayaran</option>';
                for (var k in response.data.payment) {
                    opt.innerHTML = opt.innerHTML +
                    '<option value="'+ response.data.payment[k].id +'">('+ response.data.payment[k].bank +') '+ response.data.payment[k].rekening +' '+ response.data.payment[k].name +'</option>';
                }
            }
        });

        $.ajax({
            url: '<?= site_url() ?>confirmations/getShipping',
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#div_shippingMethod").empty();
            },
            complete: function() {},
            success: function(response) {
                for (var k in response.data.shippingMethod) {
                    var method = 
                    '<div class="col-md-6">'+
                    '<div class="card">'+
                    '<div class="card-body">'+
                    '<div class="row align-items-center">'+
                    '<div class="col-8">'+
                    '<div class="custom-control custom-checkbox">'+
                    '<input type="radio" name="shippingMethodID" class="custom-control-input" id="shiiping-method-'+ response.data.shippingMethod[k].id +'" value="'+ response.data.shippingMethod[k].id +'">'+
                    '<label class="custom-control-label text-dark font-weight-bold" for="shiiping-method-'+ response.data.shippingMethod[k].id +'">'+ response.data.shippingMethod[k].name +'</label>'+
                    '</div>'+
                    '</div>'+
                    '<div class="col-4 text-right">'+
                    '<span class="h6">Akumulasi</span>'+
                    '</div>'+
                    '</div>'+
                    '<p class="text-muted text-sm mt-3 mb-0">'+ response.data.shippingMethod[k].description +'</p>'+
                    '</div>'+
                    '</div>'+
                    '</div>';
                    $("#div_shippingMethod").append(method).fadeIn(500);
                }
            }
        });

        $("#submitCheckOut").click(function(event) {
            if (typeof $("input[name='shippingMethodID']:checked").val() === 'undefined') {
                alert('Silahkan pilih jenis pengiriman.');
                return false;
            }else if ($("input[name='agree']:checked").val() != 'yes') {
                alert('Ceklis syarat dan ketentuan.');
                return false;
            } else{
                var shippingMethodID = $("input[name='shippingMethodID']:checked").val();
                $.ajax({
                  url: '<?= site_url() ?>confirmations/processCheckRegionShipping',
                  data: {
                    total: $("#textTotal").text() ? $("#textTotal").text().split(' ')[1] : undefined,
                    destination: $("input[name='city']").val(),
                    shippingMethodID: shippingMethodID
                  },
                  type: 'GET',
                  dataType: 'json',
                  async: true,
                  cache: false,
                  dataType: 'json',
                  beforeSend: function() {
                  },
                  complete: function() {
                  },
                  success: function(response) {
					  alert(response.message);
                      if(response.code == 200){
                        if (confirm(response.message)) {
                          $.ajax({
                            url: '<?= site_url() ?>confirmations/processCheckOut',
                            data: $("#formConfirmation").serialize() +"&shippingMethodID=" + shippingMethodID,
                            type: 'POST',
                            dataType: 'json',
                            async: true,
                            cache: false,
                            dataType: 'json',
                            beforeSend: function() {
                            },
                            complete: function() {
                            },
                            success: function(response) {
                                var form_error = '';
                                if (response.code == 201) {
                                  window.location = response.base_url;
                                }else{
                                    for (var i in response.error) {
                                        form_error += response.error[i];
                                    }
                                }
                            }
                          });
                        } else {
                          alert('Konfirmasi dibatalkan.');
                        }
                      }
                  }
                });
              }
        event.preventDefault();
      });
    });
    </script>

  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
  <!-- Page JS -->
  <script src="<?= base_url() ?>assets/libs/sticky-kit/dist/sticky-kit.min.js"></script>
  <script src="<?= base_url() ?>assets/libs/select2/dist/js/select2.min.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>