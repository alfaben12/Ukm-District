  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Purpose CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/purpose.css" id="stylesheet">
  
  	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> 
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
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/Lambang_Kabupaten_Pasuruan.png">
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
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Task.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Akun</h6>
                          <p class="mb-0">Akun untuk mengelola.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Akun</li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('ukmz') ?>">
                          Profile
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">List</li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('productz') ?>">
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
                          <h6 class="mb-1">Pesanan</h6>
                          <p class="mb-0">Alur lengkap untuk toko online.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Toko</li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('orderz') ?>">
                          Pembeli
                        </a>
                      </li>
                    </ul>
				  </li>
				  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="<?= site_url() ?>" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Secure_Files.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Pembayaran</h6>
                          <p class="mb-0">Pembayaran dari pesanan.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">List</li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('paymentz') ?>">
                          Pembeli
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('paymentz/kurir') ?>">
                          Kurir
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
                    <a href="<?= site_url('kurirz') ?>" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Group.svg" class="svg-inject img-fluid" style="height: 50px;">
                      </figure>
                      <div class="media-body ml-3">
                        <h6 class="mb-1">Pihak luar</h6>
                        <p class="mb-0">POS Indonesia pihak pembantu untuk UMKM.</p>
                      </div>
                      </div>
                    </a>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="<?= site_url('shippingz') ?>" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Cog_Wheels.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                        <h6 class="mb-1">Pengiriman</h6>
                        <p class="mb-0">Biaya pengiriman dan rute POS Indonesia untuk UMKM.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="<?= site_url('shippingz/method') ?>">
                          Cara pengiriman
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('shippingz') ?>">
                          Rute pengiriman
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="<?= site_url('regions/ukm') ?>" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Cog_Wheels.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Area</h6>
                          <p class="mb-0">Area untuk UMKM.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="<?= site_url('regionz') ?>">
                          Area UMKM
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="<?= site_url('regionz/shipping') ?>">
                          Area Pengiriman
                        </a>
                      </li>
                    </ul>
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
                  <li>
                        <a href="<?= site_url() ?>contactus" class="list-group-item list-group-item-action" role="button">
                        <div class="media d-flex align-items-center">
                            <!-- SVG icon -->
                            <figure style="width: 50px;">
                            <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
                            </figure>
                            <!-- Media body -->
                            <div class="media-body ml-3">
                            <h6 class="mb-1">Kontak</h6>
                            <p class="mb-0">Kirim pesan untuk kita.</p>
                            </div>
                        </div>
                        </a>
                    </li>
                </ul>
              </div>
            </li>
            <li class="nav-item mr-0">
              <a href="<?= site_url('logins/logout') ?>" class="nav-link d-lg-none">Keluar</a>
              <a href="<?= site_url('logins/logout') ?>" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Keluar dari akun ...">
                <span class="btn-inner--icon"><i class="far fa-sign-out-alt"></i></span>
                <span class="btn-inner--text">Keluar</span>
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
                <span class="h2 mb-0 text-white d-block">Hallo, Anda sedang di halaman admin</span>
                <span class="text-white">Semoga harimu menyenangkan!</span>
              </div>
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <div class="btn-group btn-group-nav shadow" role="group" aria-label="Basic example">
                <div class="btn-group" role="group">
                  <a href="<?= site_url('productz') ?>" class="btn btn-white btn-icon active">
                    <span class="btn-inner--icon"><i class="far fa-align-left"></i></span>
                    <span class="btn-inner--text d-none d-md-inline-block">List</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="slice slice-lg">
      <div class="container">
        <!-- Shopping table table -->
            <div class="table-responsive">
            <table id="example" class="table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Invoice</th>
                            <th>Bank</th>
                            <th>Nama</th>
                            <th>Bukti</th>
                            <th>status</th>
                            <th width="25%">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($payment as $key => $val) {
                            ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $val['invoice'] ?></td>
                                <td><?= $val['bank'] ?></td>
                                <td><?= $val['bank_name'] ?></td>
                                <td align="center"> <a href="<?= base_url() ?>files/payment/<?= $val['file'] ?>" class="zoomple"><img src="<?= base_url() ?>files/payment/<?= $val['file'] ?>" width="150" height="90"></td>
                                <td><?= $val['status'] ?></td>
                                <td><a class="btn btn-primary btn-sm" href="<?= site_url() ?>paymentz/processChangeStatus?id=<?= $val['order_id'] ?>&status=<?= $val['status'] ?>"><?= $val['status'] == 'MENUNGGU' ? 'KONFIRMASI' : 'MENUNGGU' ?></a>&nbsp;&nbsp;<a class="btn btn-danger btn-sm" href="<?= site_url() ?>paymentz/processDelete?id=<?= $val['id'] ?>">Hapus</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
      </div>
    </section>
  </div>

  <script>
    $('#example').DataTable({
        "info": true,         // Will show "1 to n of n entries" Text at bottom
        "lengthChange": false // Will Disabled Record number per page
    });
    </script>

  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>
