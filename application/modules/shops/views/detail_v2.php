  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Page CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/animate.css/animate.min.css">
  <link type="text/css" href="<?= base_url() ?>assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/swiper/dist/css/swiper.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/purpose.css" id="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
</head>

<body>
  <header class="header" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-light bg-white border-bottom">
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
    <nav class="navbar navbar-main navbar-expand-lg navbar-light bg-white border-bottom py-2" id="navbar-main">
      <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="<?= site_url() ?>">
          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/brand/dark.png" id="navbar-logo" style="height: 50px;">
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
    </nav>
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
    <section class="py-2 delimiter-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h6 class="mb-0">UMKM Produk</h6>
          </div>
          <div class="col-md-6">
            <nav class="nav justify-content-md-end mb-0">
              <a href="<?= site_url() ?>" class="nav-link text-sm pl-0">Peninjau</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="slice">
      <div class="container" id="div_productDetail">
              <!-- RENDER HERE -->
      </div>
    </section>
    <section class="slice-sm bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="px-4 py-3 text-lg-center">
              <h6 class="text-sm text-white text-uppercase ls-1">Pengiriman cepat 48/72 Jam</h6>
              <p class="text-white opacity-7">
                Menggunakan kurir dari POS Indonesia
              </p>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="px-4 py-3 text-lg-center">
              <h6 class="text-sm text-white text-uppercase ls-1">Pengembalian gratis</h6>
              <p class="text-white opacity-7">
                Jika produk tidak sesuai, dapat dikembalikan gratis
              </p>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="px-4 py-3 text-lg-center">
              <h6 class="text-sm text-white text-uppercase ls-1">Pembayaran aman</h6>
              <p class="text-white opacity-7">
                Pembayaran melalui bank transfer adalah cara yang cukup aman
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    $(document).ready(function() {
        var base_url = '<?= base_url() ?>';
        getAllData();
        function getAllData(){
            $.ajax({
                url:  '<?= site_url() ?>shops/getUkmDataDetailProduk',
                type: 'GET',
                data: {
                    productName: '<?= $this->input->get('productName') ?>'
                },
                async: true,
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    $('#h3_name').empty();
                    $('#h2_price').empty();
                    $('#font_category').empty();
                    $('#font_stok').empty();
                    $('#p_description').empty();
                },
                complete: function() {
                },
                success: function(response) {
                    if (response.data.product[0]['is_diskon'] == 1) {
						var price = 'Rp. ' + response.data.product[0]['final_price'];
					}else{
                        var price = 'Rp. ' + response.data.product[0]['price'];
                    }

                    if (response.data.product[0]['stock'] == 0) {
						var stock = 'Habis';
					}else{
                        var stock = 'Tersedia '+ response.data.product[0]['stock'];
                    }
                    
                    $('#h3_name').text(response.data.product[0]['name']);
                    $('#font_category').text(response.data.product[0]['category_name']);
                    $('#font_stock').text(stock);
                    $('#p_description').text(response.data.product[0]['description']);

                    var detail = '';
                    detail += 
					'<div class="row row-grid">'+
					'<div class="col-lg-6">'+
					'<div data-toggle="sticky" data-sticky-offset="30">'+
					'<a href="' + base_url + 'files/product/' + response.data.product[0]['image'] + '" data-fancybox>'+
					'<img alt="Gambar produk UMKM" <img src="' + base_url + 'files/product/' + response.data.product[0]['image'] + '" alt="" width="550" height="350" class="img-fluid">'+
					'</a>'+
					'<div class="mt-4 text-center">'+
					'<a href="' + base_url + 'files/product/' + response.data.product[0]['image'] + '" data-fancybox>Lihat</a>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'<div class="col-lg-6">'+
					'<div class="pl-lg-5">'+
					'<h5 class="h4">' + response.data.product[0]['name'] + '</h5>'+
					'<div class="row align-items-center">'+
					'<div class="col-6">'+
                    '<span class="static-rating static-rating-sm d-block">';
                    for (let i = 0; i < response.data.product[0]['rating']; i++) {
    					detail += '<i class="star far fa-star voted"></i>';
                    }
                    
                    for (let i = 0; i < parseInt(5 - response.data.product[0]['rating']); i++) {
    					detail += '<i class="star far fa-star"></i>';
                    }

                    detail += 
					'</span>'+
					'</div>'+
					'<div class="col-6 text-right">'+
					'<ul class="list-inline mb-0">'+
					'<li class="list-inline-item">'+
					'<span class="badge badge-pill badge-soft-success">'+ stock +'</span>'+
					'</li>'+
					'</ul>'+
					'</div>'+
					'</div>'+
					'<div class="py-4 my-4 border-top border-bottom">'+
					'<h6 class="text-sm">Deskripsi:</h6>'+
                    '<p class="text-sm mb-0">'+
                    response.data.product[0]['description'] +
					'</p>'+
					'</div>'+
					'<dl class="row">'+
					'<dt class="col-sm-3"><span class="h6 text-sm mb-0">Harga</span></dt>'+
					'<dd class="col-sm-9"><span class="text-sm">' + price + '</span></dd>'+
					'<dt class="col-sm-3"><span class="h6 text-sm mb-0">Stok</span></dt>'+
					'<dd class="col-sm-9"><span class="text-sm"></span>' + response.data.product[0]['stock'] + '</dd>'+
					'<dt class="col-sm-3"><span class="h6 text-sm mb-0">Area</span></dt>'+
					'<dd class="col-sm-9"><span class="text-sm"></span>' + response.data.product[0]['region_name'] + '</dd>'+
					'<dt class="col-sm-3"><span class="h6 text-sm mb-0">Terjual</span></dt>'+
					'<dd class="col-sm-9"><span class="text-sm"></span>' + response.data.product[0]['sold_count'] + '</dd>'+
					'<dt class="col-sm-3"><span class="h6 text-sm mb-0">Dilihat</span></dt>'+
					'<dd class="col-sm-9"><span class="text-sm"></span>' + response.data.product[0]['views'] + 'x</dd>'+
					'</dl>'+
					'<div class=" py-4 my-4 border-top border-bottom">'+
					'<div class="row align-items-center">'+
					'<div class="col-sm-6 mb-4 mb-sm-0">'+
					'<input type="text" class="form-control" id="qty" placeholder="Kuantitas">'+
					'</div>'+
					'<div class="col-sm-6 text-sm-right">'+
					'<button type="button" class="btn btn-primary btn-icon" onclick="processAdd('+ response.data.product[0]['id'] +')">'+
					'<span class="btn-inner--icon"><i class="far fa-shopping-bag"></i></span>'+
					'<span class="btn-inner--text">Tambahkan</span>'+
					'</button>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
                    '</div>';
                    
					$("#div_productDetail").append(detail).fadeIn(500);
                }
            });
        }

	});
	
	function processAdd(productID){
        var qty = $("#qty").val();
        if (qty == '' || qty == 0) {
            alert('Kuantitas tidak boleh 0');
        }else{
            $.ajax({
                url:  '<?= site_url() ?>carts/proccessAdd',
                data: {
                    productID: productID,
                    qty: qty
                },
                type: 'POST',
                async: true,
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    $("#totalCart").empty();
                },
                complete: function() {
                },
                success: function(response) {
                    $("#totalCart").text(response.data.totalCart);
                }
            });
        }
	}
    </script>
    
  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
  <!-- Page JS -->
  <script src="<?= base_url() ?>assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
  <script src="<?= base_url() ?>assets/libs/swiper/dist/js/swiper.min.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>