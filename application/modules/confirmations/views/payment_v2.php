    <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Page CSS -->
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
                            <h6 class="mb-1">Akun</h6>
                            <p class="mb-0">Akun untuk mengelola.</p>
                            </div>
                        </div>
                        </a>
                        <ul class="dropdown-menu">
                        <li class="text-sm text-muted dropdown-header px-0">Akun</li>
                        <li>
                            <a class="dropdown-item" href="<?= site_url('dashboardz') ?>">
                            Akses Akun
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
                  <a href="<?= site_url('confirmations') ?>" class="btn btn-white btn-icon">
                    <span class="btn-inner--icon"><i class="far fa-truck"></i></span>
                    <span class="btn-inner--text d-none d-md-inline-block">Pengiriman</span>
                  </a>
                  <a href="<?= site_url('confirmations/payment') ?>" class="btn btn-white btn-icon active">
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
          <form id="formPayment">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-8">
                      <div class="custom-control custom-checkbox">
                        <input type="radio" class="custom-control-input" name="radio-payment" id="radio-payment-card" value="0" checked="">
                        <label class="custom-control-label h6 mb-0 lh-180" for="radio-payment-card">Transfer</label>
                      </div>
                      <p class="text-muted mt-2 mb-0">Transfer uang yang aman menggunakan rekening bank Anda. Kami mendukung Mastercard, Visa, dan beberapa bank nasional.</p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="row mt-3">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <input type="number" class="form-control" id="phoneWa" placeholder="Nomor WA" autocomplete="off" maxlength="19">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="far fa-people"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <input type="text" class="form-control" id="bankName" placeholder="Nama Rekening" autocomplete="off" maxlength="19">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="far fa-people"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <input type="text" class="form-control" id="bank" placeholder="Bank (BNI, MANDIRI, dll)" autocomplete="off" maxlength="5">
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                      <input type="file" name="file-1[]" id="file-1" class="custom-input-file" data-multiple-caption="{count} file terpilih" multiple />
                        <label for="file-1">
                            <i class="fa fa-upload"></i>
                            <span>Pilih file…</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add money using PayPal -->
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-8">
                      <div class="custom-control custom-checkbox">
                        <input type="radio" class="custom-control-input" name="radio-payment" id="radio-payment-paypal" value="1">
                        <label class="custom-control-label h6 mb-0 lh-180" for="radio-payment-paypal">PayPal</label>
                      </div>
                      <p class="text-sm text-muted mt-2 mb-0">Bayar pesanan Anda menggunakan platform yang paling dikenal dan aman untuk transfer uang online. Anda akan dialihkan ke PayPal untuk menyelesaikan pembelian Anda.</p>
                    </div>
                    <div class="col-4 text-right">
                      <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/cards/paypal-256x160.png" width="70">
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4 text-right">
                <a href="shop-landing.html" class="btn btn-link text-sm text-dark font-weight-bold">Lanjutkan belanja</a>
                <button type="submit" class="btn btn-sm btn-success">Selesai</button>
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
            url: '<?= site_url() ?>confirmations/getInfoOrder',
            data: {
                inv: '<?= $this->input->get('inv') ?>',
                orderID: '<?= $this->input->get('orderID') ?>',
                totalCost: '<?= $this->input->get('totalCost') ?>',
                totalItem: '<?= $this->input->get('totalItem') ?>',
                contact: '<?= $this->input->get('contact') ?>'
            },
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#listItem").empty();
            },
            complete: function() {},
            success: function(response) {
                $("#totalItem").text(response.data.detail[0]['total_item']);
                var cart = '';
                for (var k in response.data.item) {
                    if (k == 0) {
                      cart +=
                      '<div class="row">'+
                      '<div class="col-8">'+
                      '<div class="media align-items-center">'+
                      '<img class="mr-2" alt="Gambar produk UMKM" src="' + base_url + 'files/product/' + response.data.item[k].product_image + '" style="width: 42px;">'+
                      '<div class="media-body">'+
                      '<div class="text-limit lh-100">'+
                      '<small class="font-weight-bold mb-0">'+ response.data.item[k].product_name +'</small>'+
                      '</div>'+
                      '<small class="text-muted">'+ response.data.item[k].qty +' x Rp. '+ response.data.item[k].price +'</small>'+
                      '</div>'+
                      '</div>'+
                      '</div>'+
                      '<div class="col-4 text-right lh-100">'+
                      '<small class="text-dark">Rp. '+ response.data.item[k].subtotal +'</small>'+
                      '</div>'+
                      '</div>';
                    }else{
                      cart +=
                      '<div class="row mt-3 pt-3 delimiter-top">'+
                      '<div class="col-8">'+
                      '<div class="media align-items-center">'+
                      '<img class="mr-2" alt="Gambar produk UMKM" src="' + base_url + 'files/product/' + response.data.item[k].product_image + '" style="width: 42px;">'+
                      '<div class="media-body">'+
                      '<div class="text-limit lh-100">'+
                      '<small class="font-weight-bold mb-0">'+ response.data.item[k].product_name +'</small>'+
                      '</div>'+
                      '<small class="text-muted">'+ response.data.item[k].qty +' x Rp. '+ response.data.item[k].price +'</small>'+
                      '</div>'+
                      '</div>'+
                      '</div>'+
                      '<div class="col-4 text-right lh-100">'+
                      '<small class="text-dark">Rp. '+ response.data.item[k].subtotal +'</small>'+
                      '</div>'+
                      '</div>';
                    }
                }
                    cart += '<div class="row mt-3 pt-3 border-top">'+
                    '<div class="col-8 text-right">'+
                    '<small class="font-weight-bold">Subtotal:</small>'+
                    '</div>'+
                    '<div class="col-4 text-right">'+
                    '<span class="text-sm font-weight-bold">Rp. '+ response.data.detail[0]['subtotal'] +'</span>'+
                    '</div>'+
                    '</div>'+
                    '<div class="row mt-3 pt-3 border-top">'+
                    '<div class="col-8 text-right">'+
                    '<div class="media align-items-center">'+
                    '<i class="far fa-shipping-fast"></i>'+
                    '<div class="media-body">'+
                    '<div class="text-limit lh-100">'+
                    '<small class="font-weight-bold mb-0">Pengiriman</small>'+
                    '</div>'+
                    '<small class="text-muted">'+ response.data.detail[0]['shipping_method'] +'</small>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="col-4 text-right">'+
                    '<span class="text-sm font-weight-bold">Rp. '+ response.data.detail[0]['price_shipping'] +'</span>'+
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
                    '<span class="text-sm font-weight-bold" id="textTotal">Rp. '+ response.data.detail[0]['total'] +'</span>'+
                    '</div>'+
                    '</div>';
                    $("#listItem").append(cart).fadeIn(500);
            }
        });

        $("#formPayment").submit(function(event) {
                var file = $('#file-1').prop("files")[0];
                var phoneWa = $('#phoneWa').val();
                var bank = $('#bank').val();
                var bankName = $('#bankName').val();

                if (typeof $("input[name='radio-payment']:checked").val() === 'undefined') {
                    alert('Silahkan pilih jenis pembayaran.');
                }else if ($("input[name='radio-payment']:checked").val() == '1') {
                    alert('Pembayaran melalui paypal belum tersedia.');
                }else if (phoneWa === '') {
                    alert('No WA harus di isi.');
                }else if (bank === '') {
                    alert('Bank harus di isi.');
                }else if (bankName === '') {
                    alert('Nama rekening harus di isi.');
                }else{
                    var frm_data = new FormData();
                    frm_data.append('file', file);
                    frm_data.append('phoneWa', phoneWa);
                    frm_data.append('bank', bank);
                    frm_data.append('bankName', bankName);

                    /* AJAX FUNCTION MULTIPART*/
                    $.ajax({
                        url: "<?= site_url() ?>confirmations/processPayment?inv=<?= $this->input->get('inv') ?>&orderID=<?= $this->input->get('orderID') ?>&totalCost=<?= $this->input->get('totalCost') ?>&totalItem=<?= $this->input->get('totalItem') ?>&contact=<?= $this->input->get('contact') ?>",
                        type: "POST",
                        data: frm_data,
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success: function(response) {
                            if (response.code == 201) {
                                window.location = response.base_url;
                            }else{
                                alert(response.message);
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
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>