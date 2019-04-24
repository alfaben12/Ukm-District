<link rel="icon" href="<?= base_url() ?>assets/img/brand/favicon.png" type="image/png">
<!-- Font Awesome 5 -->
<link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css">
<!-- Page CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/libs/animate.css/animate.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/libs/swiper/dist/css/swiper.min.css">
<link type="text/css" href="<?= base_url() ?>assets/libs/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- Purpose CSS -->
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
        <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
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
        <!-- Header -->
        <section class="slice slice-xl bg-cover bg-size--cover" data-offset-top="#header-main" style="background-image: url('<?= base_url() ?>assets/img/backgrounds/img-16.jpg'); background-position: center center;">
            <span class="mask bg-dark opacity-3"></span>
            <div class="container py-6">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="h1 text-white">Daftar Produk</h2>
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark px-0 justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" class="">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" class="text-normal">Toko</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" class="text-normal">Produk</a>
                            </li>
                        </ol>
                        <p class="lead text-white mt-4">Hanya ada momen itu dan kepastian yang luar biasa bahwa segala sesuatu di bawah matahari hanya ditulis oleh satu tangan.</p>
                        <a href="javascript:void(0)" class="btn btn-white rounded-pill mt-4 shadow hover-shadow-lg hover-translate-y-n3">Mulai belanja</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Products -->
        <section class="slice slice-lg delimiter-bottom" id="sct-products">
            <div class="container">
                <div class="row">
				<div class="col-xl-12 col-lg-12 col-sm-12">
                        <div class="card card-product">
                        <div class="card-image">
                    <form class="row" id="filterForm" novalidate="novalidate">
                        <div class="col-md-2">
                            <div class="form-group">
                                <input class="form-control btn-sm" type="number" placeholder="Harga dari" name="price_from" id="price_from">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input class="form-control btn-sm" type="number" placeholder="Sampai" name="price_to" id="price_to">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="ukm_category_product_id" id="ukm_category_product_id" data-toggle="select" title="Kategori" class="form-control" style="width:100%">
                                    <option value="">Semua Kategori</option>
                                    <?php
									foreach ($category as $key => $val) {
										?>
                                        <option value="<?= $val['id'] ?>">
                                            <?= $val['name'] ?>
                                        </option>
                                        <?php
									}
									?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="ukm_region_id" id="ukm_region_id" data-toggle="select" title="Region" class="form-control" style="width:100%">
                                    <option value="">Semua Region</option>
                                    <?php
									foreach ($region as $key => $val) {
										?>
                                        <option value="<?= $val['id'] ?>">
                                            <?= $val['name'] ?>
                                        </option>
                                        <?php
									}
									?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                </div>
                </div>
                </div>
                </div>
                </form>

                <div class="row" id="div_product">
                    <!-- RENDER HERE PRODUCT -->
                </div>
                <!-- Load more -->
                <div class="mt-4 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination" id="pagination">
                            <!-- RENDER HERE PAGINATION -->
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <section class="slice slice-xl bg-cover bg-size--cover" style="background-image: url('<?= base_url() ?>assets/img/backgrounds/img-17.jpg'); background-position: center center;">
            <span class="mask bg-dark opacity-2"></span>
            <div class="container py-6">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-xl-6 text-center">
                        <div class="mb-5">
                            <h1 class="text-white">Selalu tepat waktu</h1>
                            <p class="lead text-white mt-2">Belanjalah sesuai kebutuhan, berbelanja disini tidak terlalu menguras dompet dan yang pasti buatan rumahan yang selalu asli rasanya.</p>
                        </div>
                        <form>
                            <div class="form-group mb-0">
                                <div class="input-group input-group-lg input-group-merge rounded-pill bg-white">
                                    <input type="email" class="form-control form-control-flush" name="email" placeholder="Ketik alamat email anda" aria-label="Enter your email address">
                                    <div class="input-group-append">
                                        <button class="btn btn-white text-dark" type="button">
                                            <span class="far fa-paper-plane"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

            $('#pagination').on('click', 'a', function(e) {
                e.preventDefault();
                var pageno = $(this).attr('data-ci-pagination-page');
                loadPagination(pageno);
            });
            $.ajax({
                url: '<?= site_url() ?>shops/getRenderedContent',
                type: 'GET',
                async: true,
                cache: false,
                dataType: 'json',
                beforeSend: function() {},
                complete: function() {},
                success: function(response) {
                    // for(var k=0; k < response.data.category.length; k++) {
                    // 	var category = '<li class="filter-list"><input class="pixel-radio" type="radio" id="ukm_category_product_id" name="ukm_category_product_id" value="'+ response.data.category[k]['id'] +'" '+ response.data.category[k]['id'] +'><label for="'+ response.data.category[k]['name'] +'">'+ response.data.category[k]['name'] +'</label></li>';
                    // 	$("#ul_category").append(category).fadeIn(500);
                    // }

                    // for(var k=0; k < response.data.product.length; k++) {
                    // 	if (response.data.product[k]['is_diskon'] == 1) {
                    // 		var price = '<h6 class="l-through">Rp. ' + response.data.product[k]['price'] + '</h6>' +
                    // 		'<h6>Rp. ' + response.data.product[k]['final_price'] + '</h6>';
                    // 	}else{
                    // 		var price = '<h6>Rp. ' + response.data.product[k]['price'] + '</h6>';
                    // 	}

                    // 	var product = 
                    // 	'<div class="col-lg-4 col-md-4 col-sm-6 mb-20">'+
                    // 		'<div class="single-related-product d-flex">'+
                    // 			'<a href="' + base_url + 'shops/showProduct?productName=' + response.data.product[k]['name'] + '"><img src="' + base_url + 'files/product/' + response.data.product[k]['image'] + '" alt="" width="100" height="70"></a>'+
                    // 			'<div class="desc">'+
                    // 				'<a href="' + base_url + 'shops/showProduct?productName=' + response.data.product[k]['name'] + '" class="title">Black lace Heels</a>'+
                    // 				'<div class="price">'+
                    // 					price +
                    // 				'</div>'+
                    // 			'</div>'+
                    // 		'</div>'+
                    // 	'</div>';
                    // 	$("#divTopSeller").append(product).fadeIn(500);
                    // }

                    loadPagination(0);
                }
            });

            function loadPagination(pagno) {
                $.ajax({
                    url: '<?= site_url() ?>shops/getUkmDataProduct/' + pagno,
                    data: {
                        pageno: pagno,
                        ukm_category_product_id: $('#ukm_category_product_id').val(),
                        region_id: $('#ukm_region_id').val(),
                        price_from: $("#price_from").val(),
                        price_to: $("#price_to").val()
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.data.code != 200) {
                            var product = 'Barang tidak ditemukan.'
                            $("#div_product").append(product).fadeIn(500);
                        }
                        $('#pagination').html(response.data.product.pagination);
                        createList(response.data.product.result);
                    }
                });
            }

            function createList(result) {
                $('#div_product').empty();
                for (k in result) {

                    if (result[k].is_diskon == 1) {
                        var price = '<h6>Rp. ' + result[k].final_price + '</h6>';
                    } else {
                        var price = '<h6>Rp. ' + result[k].price + '</h6>';
                    }
                    var product =

                        '<div class="col-xl-3 col-lg-4 col-sm-6">' +
                        '<div class="card card-product">' +
                        '<div class="card-image">' +
                        '<a href="' + base_url + 'shops/showProduct?productName=' + result[k].name + '">' +
                        '<img alt="Gambar produk UMKM" src="' + base_url + 'files/product/' + result[k].image + '" class="img-center img-fluid" width="250" height="150">' +
                        '</a>' +
                        '</div>' +
                        '<div class="card-body text-center pt-0">' +
                        '<h6><a href="' + base_url + 'shops/showProduct?productName=' + result[k].name + '">' + result[k].name + '</a></h6>' +
                        '<p class="text-sm">' + result[k].region_name.substr(0, 10) + "..." + '</p>' +
                        '<span class="card-price">' + price + '</span>' +
                        '<div class="product-colors mt-3">' +
                        '<button type="button" class="btn btn-primary btn-sm btn-icon" onclick="processAdd(' + result[k].id + ')">' +
                        '<span class="btn-inner--icon"><i class="far fa-shopping-bag"></i></span>' +
                        '<span class="btn-inner--text">Tambahkan</span>' +
                        '</button>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    $("#div_product").append(product).fadeIn(500);
                }
            }

            $("#filterForm").submit(function(event) {
                if ($("input[name='ukm_category_product_id']:checked").val() == '') {
                    alert('Kategori harus diisi.');
                }

                $.ajax({
                    url: '<?= site_url() ?>shops/getUkmDataProduct/0',
                    data: {
                        pageno: 0,
                        ukm_category_product_id: $('#ukm_category_product_id').val(),
                        region_id: $('#ukm_region_id').val(),
                        price_from: $("#price_from").val(),
                        price_to: $("#price_to").val()
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.data.code != 200) {
                            var product = 'Barang tidak ditemukan.'
                            $("#div_product").append(product).fadeIn(500);
                        }
                        $('#pagination').html(response.data.product.pagination);
                        createList(response.data.product.result);
                    }
                });
                event.preventDefault();
            });
        });

        function processAdd(productID) {
            $.ajax({
                url: '<?= site_url() ?>carts/proccessAdd',
                data: {
                    productID: productID,
                    qty: 1
                },
                type: 'POST',
                async: true,
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    $("#totalCart").empty();
                },
                complete: function() {},
                success: function(response) {
                    $("#totalCart").text(response.data.totalCart);
                }
            });
        }
    </script>
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->

    <script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
    <!-- Page JS -->
    <script src="<?= base_url() ?>assets/libs/swiper/dist/js/swiper.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/select2/dist/js/select2.min.js"></script>

    <!-- Purpose JS -->
    <script src="<?= base_url() ?>assets/js/purpose.js"></script>
    <!-- Demo JS - remove it when starting your project -->
    <script src="<?= base_url() ?>assets/js/demo.js"></script>