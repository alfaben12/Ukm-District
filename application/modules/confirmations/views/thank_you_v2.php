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
                <a class="nav-link px-0" href="coming-soon.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/Lambang_Kabupaten_Pasuruan.png">
                  <span class="d-none d-lg-inline-block">Pasuruan</span>
                  <span class="d-lg-none">ID</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm">
                  <a href="coming-soon.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/es.svg">Spanish</a>
                  <a href="coming-soon.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/ro.svg">Romanian</a>
                  <a href="coming-soon.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/gr.svg">Greek</a>
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
    <!-- Header (coming-soon) -->
    <section class="slice slice-lg bg-primary spotlight" data-spotlight>
      <div class="spotlight-holder py-6 py-md-9">
        <div class="container pb-md-8 position-relative zindex-100">
          <div class="col px-0">
            <div class="row justify-content-center">
              <div class="col-lg-7 text-center">
                <h6 class="h1 my-4 text-white">Terima kasih ...</h6>
                <p class="px-md-5 text-white mb-5">
					Terima kasih sudah membeli produk di website kami, kami akan memproses secepatnya, semoga harimu menyenangkan.
				</p>

				<a href="<?= $send_to_wa ?>" target="blank" class="btn btn-slack btn-icon-label" style="color:white;">
                    <span class="btn-inner--icon">
					  <i class="fab fa-whatsapp"></i>
                    </span>
                    <span class="btn-inner--text">Selesai</span>
				</a>
				<br/>
                <p class="px-md-5 text-white mb-5">
					Atau<br/>
				<font color="white" size="2" style="cursor: copy;" id="message_to_wa"><?= $message ?></font>
                <br/><br/>
				<font color="white" size="2">Salin text diatas dan kirim ke <?= $wa ?> (WA).<br/></font>
					<button type="button" class="btn btn-animated btn-success btn-animated-x btn-sm" id="copyButton">
						<span class="btn-inner--visible">Salin pesan</span>
						<span class="btn-inner--hidden">
						<i class="far fa-copy"></i>
						</span>
					</button>
				</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shape-container" data-shape-position="bottom">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 1000 300" style="enable-background:new 0 0 1000 300;" xml:space="preserve" class="ie-shape-wave-1">
          <path d="M 0 246.131 C 0 246.131 31.631 250.035 47.487 249.429 C 65.149 248.755 82.784 245.945 99.944 241.732 C 184.214 221.045 222.601 171.885 309.221 166.413 C 369.892 162.581 514.918 201.709 573.164 201.709 C 714.375 201.709 772.023 48.574 910.547 21.276 C 939.811 15.509 1000 24.025 1000 24.025 L 1000 300.559 L -0.002 300.559 L 0 246.131 Z" />
        </svg>
      </div>
    </section>
    <!-- Call to action (v5) -->
    <section class="slice slice-lg pt-0 zindex-101">
      <div class="container">
        <ul class="nav justify-content-center mb-4">
          <li class="nav-item">
            <a class="nav-link h3 px-4" href="" target="_blank"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link h3 px-4" href="" target="_blank"><i class="fab fa-facebook"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link h3 px-4" href="" target="_blank"><i class="fab fa-github"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link h3 px-4" href="" target="_blank"><i class="fab fa-dribbble"></i></a>
          </li>
        </ul>
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

  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
  <!-- Page JS -->
  <script src="<?= base_url() ?>assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>
  <script>
	var button = document.getElementById("copyButton");
    var content = document.getElementById("message_to_wa");

    button.addEventListener("click", function() {
        var range = document.createRange();
        var selection = window.getSelection();

        selection.removeAllRanges();

        range.selectNodeContents(content);
        selection.addRange(range);

        document.execCommand('copy');
        alert('Berhasil di salin.')
	}, false);
	
  </script>