  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Purpose CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/purpose.css" id="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

</head>

<body>
  <header class="header header-transparent" id="header-main">
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
                <a class="nav-link px-0" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/Lambang_Kabupaten_Pasuruan.png">
                  <span class="d-none d-lg-inline-block">Pasuruan</span>
                  <span class="d-lg-none">ID</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm">
                  <a href="blog-article.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/es.svg">Spanish</a>
                  <a href="blog-article.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/ro.svg">Romanian</a>
                  <a href="blog-article.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/gr.svg">Greek</a>
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
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light bg-white" id="navbar-main">
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
    <section class="slice">
    <div class="container pt-6">
    <br/>
    <br/>
        <div class="row justify-content-center">
          <div class="col-md-9">
            <h1 class="lh-150 mb-3" id="ukmName" style="text-align:center;"></h1>
            <div class="media align-items-center mt-5">
              <div>
                <a href="javascript:void()" class="avatar rounded-circle mr-3" id="logo">
                </a>
              </div>
              <div class="media-body">
                <span class="d-block h6 mb-0" id="founder"></span>
                <span class="text-sm text-muted" id="joinAt"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <!-- Article body -->
            <article>
              <figure class="figure" id="cover_image">
                </figure>
              <p class="lead" id="description"></p>
            </article>
            <hr>
            <h5 class="mb-4">Komentar</h5>
            <div class="mb-3" id="commentsArea">
              <!-- RENDER HERE -->
            </div>

            <div class="media">
                <img alt="Gambar" class="rounded-circle shadow mr-4" src="<?= base_url() ?>files/profile/default.jpg" style="width: 64px;">
                <div class="media-body">
                  <div class="media-comment-bubble left-top">
                  <form id="commentForm">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="validationCustom01">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama" required>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustomUsername">Email</label>
                                <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                            <label for="validationCustom03">Komentar</label>
                            <textarea rows="3" class="form-control" placeholder="Komentar" name="message" required></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="agree" value="yes" data-toggle="indeterminate" required>
                            <label class="custom-control-label" for="customCheck2">
                            Saya sudah membaca dan menerima
                            <a href="#">syarat</a> &amp; <a href="#">ketentuan.</a>
                            </label>
                        </div>
                        </div>
                        <div style="text-align:right;">
                          <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- Blog (v4) -->
    <!-- <section class="slice slice-lg bg-section-secondary delimiter-top delimiter-bottom">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class=" mt-4">Latest from the blog</h3>
          <div class="fluid-paragraph mt-3">
            <p class="lead lh-180">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <a href="blog-article.html#">
                <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/light/img-1-800x600.jpg" class="card-img-top">
              </a>
              <div class="card-body py-5 text-center">
                <a href="blog-article.html#" class="d-block h5 lh-150">Choose the best solution for your business</a>
                <h6 class="text-muted mt-4 mb-0">20 Aug 2019</h6>
              </div>
              <div class="card-footer delimiter-top">
                <div class="row">
                  <div class="col text-center">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item pr-4">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-share mr-1 text-muted"></i> 131</a>
                      </li>
                      <li class="list-inline-item pr-4">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                      </li>
                      <li class="list-inline-item">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> 14</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <a href="blog-article.html#">
                <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/light/img-2-800x600.jpg" class="card-img-top">
              </a>
              <div class="card-body py-5 text-center">
                <a href="blog-article.html#" class="d-block h5 lh-150">How to find the right design for your specific product</a>
                <h6 class="text-muted mt-4 mb-0">23 Aug 2019</h6>
              </div>
              <div class="card-footer delimiter-top">
                <div class="row">
                  <div class="col text-center">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item pr-4">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-share mr-1 text-muted"></i> 131</a>
                      </li>
                      <li class="list-inline-item pr-4">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                      </li>
                      <li class="list-inline-item">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> 14</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <a href="blog-article.html#">
                <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/light/img-3-800x600.jpg" class="card-img-top">
              </a>
              <div class="card-body py-5 text-center">
                <a href="blog-article.html#" class="d-block h5 lh-150">How to win buyers and influence sales with marketing</a>
                <h6 class="text-muted mt-4 mb-0">27 Aug 2019</h6>
              </div>
              <div class="card-footer delimiter-top">
                <div class="row">
                  <div class="col text-center">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item pr-4">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-share mr-1 text-muted"></i> 131</a>
                      </li>
                      <li class="list-inline-item pr-4">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                      </li>
                      <li class="list-inline-item">
                        <a href="blog-article.html#" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> 14</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Subscribe -->
    <!-- <section class="slice slice-lg">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class=" mt-4">Subscribe for weekly news</h3>
          <div class="fluid-paragraph mt-3">
            <p class="lead lh-180">Customization has never been easier. Purpose has all the right tools in order to make your website building process a breeze.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-7">
            <form class="mt-4">
              <div class="form-group mb-0">
                <div class="input-group input-group-lg input-group-merge rounded-pill bg-dark">
                  <input type="email" class="form-control form-control-flush" name="email" placeholder="Enter your email address" aria-label="Enter your email address">
                  <div class="input-group-append">
                    <button class="btn btn-dark" type="button">
                      <span class="far fa-paper-plane"></span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> -->
  </div>

  <script>
    $(document).ready(function() {
        var base_url = '<?= base_url() ?>';
        getAllData();
        
        function getAllData(){
            $.ajax({
                url:  '<?= site_url() ?>ukms/getUkmDataDetailProfile',
                type: 'GET',
                data: {
                    ukmName: '<?= $this->input->get('ukmName') ?>'
                },
                async: true,
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    $("#founder").empty();
                    $("#ukmName").empty();
                    $("#joinAt").empty();
                    $("#description").empty();
                    $("#cover_image").empty();
                    $("#logo").empty();
                    $("#commentsArea").empty();
                },
                complete: function() {
                },
                success: function(response) {
                    $("#founder").text(response.data.profile[0]['founder']);
                    $("#ukmName").text(response.data.profile[0]['name']);
                    $("#joinAt").text(response.data.profile[0]['join_app_at'] ? response.data.profile[0]['join_app_at'].split(' ')[0] : undefined);
                    $("#description").text(response.data.profile[0]['description']);
                    
                    var cover = 
                    '<img alt="Gambar cover" src="'+ base_url + 'files/profile/' +response.data.profile[0]['logo_cover'] +'" class="img-fluid rounded" width="810" height="600">' +
                    '<figcaption class="mt-3 text-muted">'+ response.data.profile[0]['quotes'] +'</figcaption>';
                    $("#cover_image").append(cover).fadeIn(500);

                    var logo = '<img src="'+ base_url + 'files/profile/' +response.data.profile[0]['logo'] +'">';
                    $("#logo").append(logo).fadeIn(500);
                    
                    for(var j=0; j < response.data.comment.length; j++) {
                        var comment =
                        '<div class="media media-comment">'+
                        '<img alt="Image placeholder" class="rounded-circle shadow mr-4" src="'+ base_url + 'files/profile/' +response.data.profile[0]['logo'] +'" style="width: 64px;">'+
                        '<div class="media-body">'+
                        '<div class="media-comment-bubble left-top">'+
                        '<h6 class="mt-0">'+ response.data.comment[j]['name'] +'</h6>'+
                        '<p class="text-sm lh-160">' + response.data.comment[j]['message'] +
                        '<div class="icon-actions">'+
                        '<a href="javascript:void(0)">'+
                        '<i class="far fa-date"></i>'+
                        '<span class="text-muted">'+ response.data.comment[j]['create_at'] +'</span>'+
                        '</a>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
                        '</div>';
                        $("#commentsArea").append(comment).fadeIn(500);
                    }
                }
            });
        }

        $("#commentForm").submit(function(event) {
				$.ajax({
					url: '<?= site_url() ?>ukms/processAddComent?ukmName=<?= $this->input->get('ukmName') ?>',
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
                        getAllData();
					}
				});
				event.preventDefault();
			});
    });
    </script>

  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
  <!-- Page JS -->
  <script src="<?= base_url() ?>assets/libs/autosize/dist/autosize.min.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>