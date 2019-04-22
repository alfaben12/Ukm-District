  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Page CSS -->
  <link type="text/css" href="<?= base_url() ?>assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css" rel="stylesheet">
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
                <a class="nav-link px-0" href="contact.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/Lambang_Kabupaten_Pasuruan.png">
                  <span class="d-none d-lg-inline-block">Pasuruan</span>
                  <span class="d-lg-none">ID</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm">
                  <a href="contact.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/es.svg">Spanish</a>
                  <a href="contact.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/ro.svg">Romanian</a>
                  <a href="contact.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/gr.svg">Greek</a>
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
                        <a href="<?= site_url() ?>" class="list-group-item list-group-item-action" role="button">
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
                        <a href="<?= site_url() ?>blogs" class="list-group-item list-group-item-action" role="button">
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
    <section class="slice bg-primary pb-250" data-offset-top="#header-main">
      <!-- SVG background -->
      <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
        <figure class="w-100 d-none d-lg-block">
          <img alt="Image placeholder" src="<?= base_url() ?>assets/img/svg/backgrounds/bg-3.svg" class="svg-inject">
        </figure>
      </div>
      <div class="container py-5 pt-lg-6 position-relative zindex-100">
        <div class="row">
          <div class="col-lg-5">
            <h1 class="text-white">Ada yang anda pikirkan?</h1>
            <a href="contact.html#sct_contact_form" class="btn btn-secondary rounded-pill btn-icon hover-translate-y-n3 mt-4" data-scroll-to data-scroll-to-offset="140">
              <span class="btn-inner--icon"><i class="far fa-pencil-alt"></i></span>
              <span class="btn-inner--text">Kontak kami</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="slice slice-lg pt-lg-5">
      <div class="container position-relative zindex-100">
        <div class="row mt--200">
            <div class="col-lg-12">
            <div class="card bg-dark opacity-container text-white overflow-hidden shadow border-0" style="height: 400px;">
            <iframe class="h-100 w-100" src="<?= site_url('contactus/maps') ?>" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="sct_contact_form" class="slice slice-lg" data-delimiter-before="1">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-lg-6">
            <h3>Kontak kami</h3>
            <p class="lead">Jika ada sesuatu yang dapat kami bantu, cukup beri tahu kami. Kami akan dengan senang hati menawarkan bantuan kepada Anda.</p>
            <form class="mt-5" id="contactForm">
              <div class="form-group">
                <label class="sr-only">Judul</label>
                <input class="form-control" placeholder="Judul" name="subject" type="text">
              </div>
              <div class="form-group">
                <label class="sr-only">Nama</label>
                <input class="form-control" placeholder="Nama" name="name" type="text">
              </div>
              <div class="form-group">
                <label class="sr-only">Email </label>
                <input class="form-control" placeholder="Email" name="email" type="text">
              </div>
              <div class="form-group">
                <label class="sr-only">Pesan</label>
                <textarea class="form-control textarea-autosize" name="message" rows="5" placeholder="Type your message"></textarea>
              </div>
              <div style="text-align:right;">
                <button class="btn btn-primary" type="submit">Kirim</button>
              </div>
            </form>
          </div>
          <div class="col-lg-5 ml-lg-auto">
            <h3>Pasuruan</h3>
            <p class="lead my-4">E: <a href="javascript:void(0)">support@umkm.pasuruan.com</a><br>T: +6285606330792</p>
            <p>UMKM adalah jenis usaha yang dipisahkan berdasarkan aset dan omzet.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action (v5) -->
    <section class="slice slice-lg bg-section-secondary" id=sct-call-to-action><a href="contact.html#sct-call-to-action" class="tongue tongue-up tongue-section-primary" data-scroll-to>
        <i class="far fa-angle-up"></i>
      </a>
      <div class="container">
      <div class="row justify-content-center align-items-center">
          <div class="col-lg-8 text-center">
            <div class="mt-5">
              <a href="<?= site_url('shops') ?>" class="btn btn-primary rounded-pill hover-translate-y-n3">Lanjutkan belanja<span class="badge badge-pill badge-soft-warning badge-floating border-">Yukkk</span></a>
              <a href="<?= site_url() ?>" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Lanjutkan belanja">Lihat profile kami</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    $(document).ready(function(){

    $("#contactForm").submit(function(event) {
				$.ajax({
					url: '<?= site_url() ?>contactus/processSend/',
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
                        alert(response.message);
					}
				});
				event.preventDefault();
      });
    })
      
    </script>

  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
  <!-- Page JS -->
  <script src="<?= base_url() ?>assets/libs/autosize/dist/autosize.min.js"></script>
  <script src="<?= base_url() ?>assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>