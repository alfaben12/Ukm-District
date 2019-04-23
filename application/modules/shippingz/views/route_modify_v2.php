	<!-- Font Awesome 5 -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Purpose CSS -->
  <link type="text/css" href="<?= base_url() ?>assets/libs/select2/dist/css/select2.min.css" rel="stylesheet">
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
						<a class="dropdown-item" href="<?= site_url('profilez') ?>">
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
				<a href="<?= site_url('logins/logout') ?>" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Pergi ke toko ...">
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
					<a href="<?= site_url($this->uri->segment(1)) ?>" class="btn btn-white btn-icon">
					<span class="btn-inner--icon"><i class="far fa-align-left"></i></span>
					<span class="btn-inner--text d-none d-md-inline-block">List</span>
					</a>
					<a href="<?= site_url($this->uri->segment(1)) ?>" class="btn btn-white btn-icon active">
					<span class="btn-inner--icon"><i class="far fa-plus"></i></span>
					<span class="btn-inner--text d-none d-md-inline-block">Edit</span>
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
			<div>
				<div class="row row-grid align-items-center">
					<div class="col-lg-6">
                    <?php
                    foreach ($route as $key => $val) {
                        ?>
						<form id="routeForm">
							<h3>Edit rute</h3>
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" value="<?= $val['name'] ?>" placeholder="Masukkan nama">
							</div>
							<div class="form-group">
								<select name="method_id"  data-toggle="select" title="Jeni" class="form-control" style="width:100%">
									<option value="">Pilih jenis pengiriman</option>
									<?php
									foreach ($method as $j => $met) {
										?>
											<option value="<?= $met['id'] ?>" <?= $val['shipping_method_id'] == $met['id'] ? 'selected=""' : '' ?>><?= $met['name'] ?></option>
										<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<input type="number" class="form-control" id="price" name="price" value="<?= $val['price'] ?>" placeholder="Masukkan harga">
							</div>
							<div style="text-align:right;">
								<button class="btn btn-primary" type="submit">Perbarui</button>
							</div>
                        </form>
                        <?php
                    }
                    ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>

	<script>
		$(document).ready(function(){
			$("#routeForm").submit(function(event) {
				/* AJAX FUNCTION MULTIPART*/
				$.ajax({
                    url: "<?= site_url($this->uri->segment(1)) ?>/processModify?id=<?= $this->input->get('id') ?>",
					type: "POST",
					data: $(this).serialize(),
					dataType: "json",
					cache: false,
					beforeSend: function() {
					},
					complete: function() {
					},
					success: function(response) {
						if (response.code == 200) {
							window.location = response.redirect;
						}else{
							alert(response.message);
						}
					}
				});
				event.preventDefault();
			});
		});
	</script>

	<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
	<script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
    <script src="<?= base_url() ?>assets/libs/select2/dist/js/select2.min.js"></script>

	<!-- Purpose JS -->
	<script src="<?= base_url() ?>assets/js/purpose.js"></script>
	<!-- Demo JS - remove it when starting your project -->
	<script src="<?= base_url() ?>assets/js/demo.js"></script>
