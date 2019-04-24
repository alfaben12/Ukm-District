<!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url()  ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Purpose CSS -->
  <link rel="stylesheet" href="<?= base_url()  ?>assets/css/purpose.css" id="stylesheet">
  
</head>

<body>
  <header class="header header-transparent" id="header-main">
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light bg-white" id="navbar-main">
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
                <a href="<?= site_url('shops') ?>" class="btn btn-sm btn-dark btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Pergi ke toko ...">
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
    <section class="slice slice-lg min-vh-100 d-flex align-items-center bg-section-secondary">
      <!-- SVG background -->
      <div class="bg-absolute-cover bg-size--contain d-none d-lg-block">
        <figure class="w-100">
          <img alt="Image placeholder" src="<?= base_url()  ?>assets/img/svg/backgrounds/bg-3.svg" class="svg-inject">
        </figure>
      </div>
      <div class="container py-5 px-md-0 d-flex align-items-center">
        <div class="w-100">
          <div class="row row-grid justify-content-center justify-content-lg-between align-items-center">
            <div class="col-sm-8 col-lg-6 col-xl-5 order-lg-2">
              <div class="card shadow zindex-100 mb-0">
                <div class="card-body px-md-5 py-5">
                  <div class="mb-5">
                    <h6 class="h3">Login</h6>
                    <p class="text-muted mb-0">Masuk ke akun Anda untuk melanjutkan..</p>
                  </div>
                  <span class="clearfix"></span>
                  <form role="form" id="loginForm">
                    <div class="form-group">
                      <label class="form-control-label">Username</label>
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" id="input-email" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group mb-4">
                      <div class="d-flex align-items-center justify-content-between">
                        <div>
                          <label class="form-control-label">Password</label>
                        </div>
                        <div class="mb-2">
                          <a href="javascript:void(0)" class="small text-muted text-underline--dashed border-primary">Lupa password?</a>
                        </div>
                      </div>
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" id="input-password" placeholder="Password">
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="far fa-eye"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-4"><button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                        <span class="btn-inner--text">Masuk</span>
                        <span class="btn-inner--icon"><i class="far fa-long-arrow-alt-right"></i></span>
                      </button></div>
                  </form>
                </div>
                <div class="card-footer px-md-5"><small>Belum terdaftar?</small>
                  <a href="basic-login.html#" class="small font-weight-bold">Buat akun</a></div>
              </div>
            </div>
            <div class="col-lg-5 order-lg-1 d-none d-lg-block">
              <blockquote>
                <h3 class="h2 mb-4">
                Jaga wajah Anda selalu ke arah sinar matahari dan bayangan akan jatuh di belakang Anda.                </h3>
                <footer>— <cite class="text-lg">John Sulivan</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="customizer">
    <a href="basic-login.html#modal-customizer" class="btn btn-warning btn-lg btn-icon-only rounded-circle text-white hover-scale-110 shadow-lg mr-3" data-toggle="modal">
      <span class="btn-inner--icon"><i class="far fa-palette"></i></span>
    </a>
    <a href="<?= base_url()  ?>docs/support.html" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg mr-3 d-none d-lg-inline-block">
      <span class="btn-inner--icon"><i class="far fa-question"></i></span>
    </a>
    <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg d-none d-lg-inline-block">
      <span class="btn-inner--icon"><i class="far fa-shopping-basket"></i></span>
    </a>
  </div>
  <!-- Customizer modal -->
  <div class="modal fade fixed-right" id="modal-customizer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
      <form class="modal-content" id="form-customizer">
        <div class="modal-body">
          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Close Customizer">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="text-center mx-auto mt-4 mb-5" style="width: 80px;">
            <img alt="Image placeholder" src="<?= base_url()  ?>assets/img/icons/essential/detailed/Click.svg" class="svg-inject img-fluid">
          </div>
          <h5 class="text-center mb-2">Choose (your) Purpose</h5>
          <p class="text-center mb-4">
            Customize your preview experience by selecting skin colors and modes.
          </p>
          <hr class="mb-4">
          <!-- Skin color -->
          <h6 class="mb-1">Skin color</h6>
          <p class="small text-muted mb-3">
            Set a new theme color palette.
          </p>
          <div class="btn-group-toggle row mx-0 mb-5" data-toggle="buttons">
            <label class="btn btn-sm btn-neutral active col mb-2">
              <input type="radio" name="skin" value="default" checked>
              Default
            </label>
            <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
              <input type="radio" name="skin" value="blue">
              Blue
            </label>
            <!-- <label class="btn btn-sm btn-neutral col mb-2">
                        <input type="radio" name="skin" value="blue">
                        Blue
                    </label>
                    <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
                        <input type="radio" name="skin" value="red">
                        Red
                    </label> -->
          </div>
          <!-- Skin mode -->
          <h6 class="mb-1">Skin mode</h6>
          <p class="small text-muted mb-3">
            Set the theme's mode: light or dark.
          </p>
          <div class="btn-group-toggle row mx-0 mb-4" data-toggle="buttons">
            <label class="btn btn-sm btn-neutral active flex-fill mb-2 mr-2">
              <input type="radio" name="mode" value="light" checked>
              <i class="far fa-sun mr-2"></i> Light
            </label>
            <label class="btn btn-sm btn-neutral flex-fill mb-2 mr-2">
              <input type="radio" name="mode" value="dark">
              <i class="far fa-moon mr-2"></i> Dark
            </label>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="submit" class="btn btn-block btn-primary mt-auto">
            Preview
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
        $(document).ready(function(){
            $("#loginForm").submit(function(event) {
				$.ajax({
					url: '<?= site_url() ?>logins/processLogin/',
					data: $(this).serialize(),
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
  <script src="<?= base_url()  ?>assets/js/purpose.core.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url()  ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url()  ?>assets/js/demo.js"></script>