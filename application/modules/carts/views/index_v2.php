  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Purpose CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/purpose.css" id="stylesheet">
  
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
              <a href="<?= site_url('shops') ?>" class="nav-link d-lg-none">Belanja yuk!</a>
              <a href="<?= site_url('shops') ?>" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Pergi ke toko ...">
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
                  <a href="<?= site_url('carts') ?>" class="btn btn-white btn-icon active">
                    <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                    <span class="btn-inner--text d-none d-md-inline-block">Keranjang</span>
                  </a>
                  <a href="<?= site_url('confirmations') ?>" class="btn btn-white btn-icon">
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
    <section class="slice slice-lg">
      <div class="container">
        <!-- Shopping cart table -->
        <form id="formCart">
            <div class="table-responsive">
            <table class="table table-cards align-items-center">
                <thead>
                <tr>
                    <th scope="col" class="sort" data-sort="product">Produk</th>
                    <th scope="col" class="sort" data-sort="size">Kategori</th>
                    <th scope="col" class="sort" data-sort="price">Harga</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col" class="sort" data-sort="total">Total</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody class="list" id="resultCart">
                <!-- RENDER HERE -->
                </tbody>
            </table>
            </div>
        </form>
        <!-- Cart information -->
        <div class="card mt-5 bg-secondary">
          <div class="card-body">
            <div class="row justify-content-between align-items-center">
              <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                <div class="d-flex align-items-center justify-content-md-end">
                  <span class="h6 text-muted d-inline-block mr-3 mb-0">Total pembelian:</span>
                  <span class="h4 mb-0" id="totalAmount"></span>
                </div>
              </div>
              <div class="col-md-6 order-md-1">
                <button type="button" class="btn btn-animated btn-primary btn-animated-y" onclick="processUpdate()">
                  <span class="btn-inner--visible">Perbarui</span>
                  <span class="btn-inner--hidden">
                    <i class="far fa-sync"></i>
                  </span>
                </button>
                <a href="<?= site_url('confirmations') ?>" class="btn btn-animated btn-primary btn-animated-y">
                  <span class="btn-inner--visible">Checkout</span>
                  <span class="btn-inner--hidden">
                    <i class="far fa-shopping-cart"></i>
                  </span>
                </a>
                <a href="<?= site_url('shops') ?>" class="btn btn-link text-sm text-dark font-weight-bold">Lanjutkan belanja</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    var base_url = '<?= base_url() ?>';
    $(document).ready(function() {
        processRenderAllCart();
    });

    function processRenderAllCart(){
        $.ajax({
            url: '<?= site_url() ?>carts/getAllCart',
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#totalCart").empty();
                $("#resultCart").empty();
                $("#totalAmount").empty();
            },
            complete: function() {},
            success: function(response) {
                $("#totalCart").text(response.data.totalCart);
                $("#totalAmount").text(response.data.totalAmount);
                if (response.data.cart.length == 0) {
                  location.reload(); 
                }else{
                  for (var k in response.data.cart) {
                    var cart =
                    '<tr>'+
                    '<th scope="row">'+
                    '<div class="media align-items-center">'+
                    '<img alt="Gambar produk UMKM" src="'+ response.data.cart[k].image +'" style="width: 80px;">'+
                    '<div class="media-body pl-3">'+
                    '<div class="lh-100">'+
                    '<span class="text-dark font-weight-bold mb-0">'+ response.data.cart[k].name +'</span>'+
                    '</div>'+
                    '<span class="font-weight-bold text-muted">Kuantitas: '+ response.data.cart[k].qty +'</span>'+
                    '</div>'+
                    '</div>'+
                    '</th>'+
                    '<td class="price">'+
                    'Rp. '+ response.data.cart[k].price +
                    '</td>'+
                    '<td>'+
                    '<span class="badge badge-dot mr-4">'+
                    '<i class="bg-"></i>'+
                    '<span class="status">'+ response.data.cart[k].category +'</span>'+
                    '</span>'+
                    '</td>'+
                    '<td>'+
                    '<input type="text" name="qty[]" class="form-control form-control-sm text-center" style="width: 80px;" value="'+ response.data.cart[k].qty +'">'+
                    '<input type="hidden" name="rowID[]" value="'+ response.data.cart[k].rowid +'" title="Row ID:" class="input-text">' +
                    '<input type="hidden" name="productID[]" value="'+ response.data.cart[k].id +'" title="Produk ID:" class="input-text">' +
                    '</td>'+
                    '<td class="total">'+
                    'Rp. '+ response.data.cart[k].subtotal +
                    '</td>'+
                    '<td class="text-right">'+
                    '<div class="actions ml-3">'+
                    '<a href="' + base_url + 'shops/showProduct?productName=' + response.data.cart[k].name + '" class="action-item mr-2" data-toggle="tooltip" title="Lihat produk">'+
                    '<i class="far fa-external-link-alt"></i>'+
                    '</a>'+
                    '<a href="javascript:void(0)" class="action-item mr-2" data-toggle="tooltip" title="Hapus" rowid="' + response.data.cart[k].rowid + '" onclick="processDeleteCart(this)">'+
                    '<i class="far fa-times"></i>'+
                    '</a>'+
                    '</div>'+
                    '</td>'+
                    '</tr>'+
                    '<tr class="table-divider"></tr>';
                    $("#resultCart").append(cart).fadeIn(500);
                }
                }
            }
        });
    }

    function processUpdate(){
		$.ajax({
			url:  '<?= site_url() ?>carts/proccessUpdate',
			data: $("#formCart").serialize(),
			type: 'POST',
			async: true,
			cache: false,
			dataType: 'json',
			beforeSend: function() {
                $("#totalCart").empty();
                $("#resultCart").empty();
			},
			complete: function() {
			},
			success: function(response) {
				processRenderAllCart();
			}
		});
	}

    function processGetCoupon(){
		$.ajax({
			url:  '<?= site_url() ?>carts/proccessGetCoupon',
			type: 'POST',
			async: true,
			cache: false,
			dataType: 'json',
			beforeSend: function() {
			},
			complete: function() {
			},
			success: function(response) {
                alert(response.message);
			}
		});
    }
    
    function processDeleteCart(key){
        var rowid = $(key).attr('rowid');
		$.ajax({
            url:  '<?= site_url() ?>carts/processDeleteCart',
            data: {rowid: rowid},
			type: 'POST',
			async: true,
			cache: false,
			dataType: 'json',
			beforeSend: function() {
			},
			complete: function() {
			},
			success: function(response) {
                alert(response.message);
                processRenderAllCart();
			}
		});
	}
</script>

  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>
