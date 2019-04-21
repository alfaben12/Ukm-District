<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>Purpose Website UI Kit - Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url() ?>assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/@fortawesome/fontawesome-pro/css/all.min.css"><!-- Page CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/animate.css/animate.min.css">
  <link type="text/css" href="<?= base_url() ?>assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/swiper/dist/css/swiper.min.css">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/purpose.css" id="stylesheet">
</head>

<body class="g-sidenav-show g-sidenav-pinned" style="opacity: 1;">
  <header class="header" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-light bg-white border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <span class="navbar-text mr-3">Purpose - Website UI Kit</span>
          </div>
          <div>
            <ul class="nav">
              <li class="nav-item dropdown ml-lg-2">
                <a class="nav-link px-0" href="shop-product.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/us.svg">
                  <span class="d-none d-lg-inline-block">United States</span>
                  <span class="d-lg-none">EN</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm">
                  <a href="shop-product.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/es.svg">Spanish</a>
                  <a href="shop-product.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/ro.svg">Romanian</a>
                  <a href="shop-product.html#" class="dropdown-item"><img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/flags/gr.svg">Greek</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="ml-auto">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="../utility/support.html">Support</a>
              </li>
              <li class="nav-item">
                <a href="shop-product.html#" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="far fa-search"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checkout-cart.html"><i class="far fa-shopping-cart"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="shop-product.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <h6 class="dropdown-header">User menu</h6>
                  <a class="dropdown-item" href="shop-product.html#">
                    <i class="far fa-user"></i>Account
                  </a>
                  <a class="dropdown-item" href="shop-product.html#">
                    <span class="float-right badge badge-primary">4</span>
                    <i class="far fa-envelope"></i>Messages
                  </a>
                  <a class="dropdown-item" href="shop-product.html#">
                    <i class="far fa-cog"></i>Settings
                  </a>
                  <div class="dropdown-divider" role="presentation"></div>
                  <a class="dropdown-item" href="shop-product.html#">
                    <i class="far fa-sign-out-alt"></i>Sign out
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-light bg-white border-bottom py-2" id="navbar-main">
      <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="<?= base_url() ?>index.html">
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
              <a class="nav-link" href="<?= base_url() ?>index.html">Overview</a>
            </li>
            <!-- Pages menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="shop-product.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="shop-product.html#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <svg width="147px" height="109px" viewBox="0 0 147 109" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Code_2</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Code_2" transform="translate(1.000000, 1.000000)">
            <path d="M144.1,8.5 L144.1,98.1 C144.1,102.2 140.8,105.6 136.6,105.6 L8.1,105.6 C4,105.6 0.6,102.3 0.6,98.1 L0.6,0.6 L136.1,0.6 C140.6,0.6 144.1,4.2 144.1,8.5 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M133.7,0.6 C139.4,0.6 144.1,5.3 144.1,11 L144.1,98.1 C144.1,102.2 140.9,105.6 137,105.6 L14.3,105.6 C10.4,105.6 7.2,102.3 7.2,98.1 L7.2,0.6 L133.7,0.6 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M95.9,19.5 L0.7,19.5 L0.7,8.1 C0.7,4 4,0.6 8.2,0.6 L136.7,0.6 C140.8,0.6 144.2,3.9 144.2,8.1 L144.2,19.5 L119.2,19.5" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M134.9,19.2 L143,19.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M124.4,19.2 L125.4,19.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1.3,19.2 L87.5,19.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle id="Oval" class="fill-primary-300" fill-rule="nonzero" cx="13.5" cy="10.2" r="3.2"></circle>
            <circle id="Oval" class="fill-primary-200" fill-rule="nonzero" cx="24.1" cy="10.2" r="3.2"></circle>
            <circle id="Oval" class="fill-primary-200" fill-rule="nonzero" cx="34.7" cy="10.2" r="3.2"></circle>
            <path d="M0.7,62.6 L0.7,61.4" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M0.7,55.2 L0.7,8 C0.7,3.9 4,0.5 8.2,0.5 L136.7,0.5 C140.8,0.5 144.2,3.8 144.2,8 L144.2,98.1 C144.2,102.2 140.9,105.6 136.7,105.6 L8.2,105.6 C4.1,105.6 0.7,102.3 0.7,98.1 L0.7,77" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <g id="Group" transform="translate(18.000000, 31.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M22.1,20.1 L48.5,20.2" id="Shape" class="stroke-neutral"></path>
                <path d="M80.9,20.1 L111.3,20.3" id="Shape" class="stroke-neutral"></path>
                <path d="M60.5,58.3 L91,58.5" id="Shape" class="stroke-primary"></path>
                <path d="M57.5,20.1 L72.3,20.2" id="Shape" class="stroke-primary"></path>
                <path d="M0.6,19.9 L11.4,20" id="Shape" class="stroke-neutral"></path>
                <path d="M37.8,32.8 L53.7,33" id="Shape" class="stroke-primary"></path>
                <path d="M62.5,32.8 L103,33.3" id="Shape" class="stroke-neutral"></path>
                <path d="M0.6,32.7 L27.2,32.8" id="Shape" class="stroke-neutral"></path>
                <path d="M37.8,45.5 L74.7,45.7" id="Shape" class="stroke-primary"></path>
                <path d="M0.6,45.4 L27.2,45.5" id="Shape" class="stroke-neutral"></path>
                <path d="M29.9,58.3 L50.3,58.4" id="Shape" class="stroke-neutral"></path>
                <path d="M0.6,58.1 L17,58.2" id="Shape" class="stroke-primary"></path>
                <path d="M0.5,0.4 L75.3,0.7" id="Shape" class="stroke-neutral"></path>
            </g>
        </g>
    </g>
</svg>
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Landing</h6>
                          <p class="mb-0">A great point to start from.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../landing/agency.html">
                          Agency
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/app.html">
                          App
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/blog.html">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/classic.html">
                          Classic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/cloud-hosting.html">
                          Cloud hosting
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/digital.html">
                          Digital
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/event-music.html">
                          Event music
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/features.html">
                          Features
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/presentation.html">
                          Presentation
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/saas.html">
                          Saas
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/services.html">
                          Services
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../landing/software.html">
                          Software
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="shop-product.html#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <svg width="147px" height="110px" viewBox="0 0 147 110" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Code</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Code" transform="translate(2.000000, 1.000000)">
            <path d="M137.6,97.2 L21.2,97.2 C18.4,97.2 16.1,94.9 16.1,92.1 L16.1,10.2 C16.1,7.4 18.4,5.1 21.2,5.1 L137.6,5.1 C140.4,5.1 142.7,7.4 142.7,10.2 L142.7,92.1 C142.7,94.9 140.4,97.2 137.6,97.2 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
            <path d="M12.8,5.6 C13.6,2.8 16.2,0.7 19.3,0.7 L136.6,0.7 C140.4,0.7 143.4,3.7 143.4,7.5 L143.4,89.8 C143.4,93.3 140.8,96.2 137.4,96.6" id="Shape" class="stroke-primary-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M131.2,18 L131.2,99.9 C131.2,103.7 128.1,106.7 124.4,106.7 L7,106.7 C3.2,106.7 0.2,103.6 0.2,99.9 L0.2,10.8 L124,10.8 C128,10.8 131.2,14 131.2,18 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M121.7,10.8 C126.9,10.8 131.2,15.1 131.2,20.3 L131.2,99.9 C131.2,103.7 128.3,106.7 124.7,106.7 L12.6,106.7 C9,106.7 6.1,103.6 6.1,99.9 L6.1,10.8 L121.7,10.8 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M87.2,28 L0.2,28 L0.2,17.6 C0.2,13.8 3.2,10.8 7,10.8 L124.3,10.8 C128.1,10.8 131.1,13.8 131.1,17.6 L131.1,28 L108.2,28" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M122.8,27.7 L130.2,27.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M113.2,27.7 L114.1,27.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M0.7,27.7 L79.5,27.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle id="Oval" class="fill-primary-300" fill-rule="nonzero" cx="11.8" cy="19.5" r="2.9"></circle>
            <circle id="Oval" class="fill-primary-200" fill-rule="nonzero" cx="21.5" cy="19.5" r="2.9"></circle>
            <circle id="Oval" class="fill-primary-200" fill-rule="nonzero" cx="31.2" cy="19.5" r="2.9"></circle>
            <polyline id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="47.8 82.9 33.5 65.8 47.8 48.7"></polyline>
            <polyline id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="83.9 82.9 98.2 65.8 83.9 48.7"></polyline>
            <path d="M72.1,48.3 L59.6,84.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M0.2,67.4 L0.2,66.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M0.2,60.6 L0.2,17.5 C0.2,13.7 3.2,10.7 7,10.7 L124.3,10.7 C128.1,10.7 131.1,13.7 131.1,17.5 L131.1,99.8 C131.1,103.6 128.1,106.6 124.3,106.6 L7,106.6 C3.2,106.6 0.2,103.6 0.2,99.8 L0.2,80.5" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Secondary</h6>
                          <p class="mb-0">Examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../secondary/about-classic.html">
                          About classic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/about.html">
                          About
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/blog.html">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/blog-article.html">
                          Blog article
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/blog-masonry.html">
                          Blog masonry
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/careers.html">
                          Careers
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/careers-single.html">
                          Careers single
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/contact.html">
                          Contact
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/contact-simple.html">
                          Contact simple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/get-started.html">
                          Get started
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/portfolio-fullscreen.html">
                          Portfolio fullscreen
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/pricing-charts.html">
                          Pricing charts
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/pricing-comparison.html">
                          Pricing comparison
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/pricing-simple.html">
                          Pricing simple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/services.html">
                          Services
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../secondary/team.html">
                          Team
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="shop-product.html#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <svg width="131px" height="151px" viewBox="0 0 131 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Secure_Files</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Secure_Files" transform="translate(1.000000, 2.000000)">
            <g id="Group" transform="translate(8.000000, 5.000000)">
                <path d="M98.3,24 L119.5,108.9 C120.2,111.8 118.4,114.7 115.5,115.3 L32.7,134.9 C29.8,135.6 26.9,133.8 26.3,130.9 L0.3,21.5 C-0.4,18.6 1.4,15.7 4.3,15.1 L64.3,0.9 L98.3,24 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M98.5,24.5 L119.6,109.2 C120.2,111.9 118.6,114.7 115.8,115.3 L37.2,133.9 C34.5,134.5 31.7,132.9 31.1,130.1 L6.1,24.5 C5.5,21.8 7.1,19 9.9,18.4 L69.7,4.2 L98.5,24.5 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M64.3,0.9 L69.9,24.4 C70.7,27.6 74.2,29.7 77.4,28.9 L98.3,23.9" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M67.8,2.6 L72.9,23.9 C73.6,26.8 76.8,28.7 79.7,28 L98.7,23.5" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M68.9,6.9 L74,28.2 C74.7,31.1 77.9,33 80.8,32.3 L99.8,27.8 L98.8,23.5" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M68.7,19.2 L69.9,24.3 C70.7,27.5 74.2,29.6 77.4,28.8 L98.3,23.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M64.3,0.9 L67.3,13.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M9.5,60.1 L0.3,21.5 C-0.4,18.6 1.4,15.7 4.3,15.1 L64.3,0.9 L98.3,24 L119.5,108.9 C120.2,111.8 118.4,114.7 115.5,115.3 L32.7,134.9 C29.8,135.6 26.9,133.8 26.3,130.9 L8.8,57.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group">
                <path d="M122.2,62.5 L90.1,143.9 C89,146.6 85.9,148 83.1,146.8 L4.3,114.7 C1.6,113.6 0.2,110.5 1.4,107.7 L43.9,3.5 C45,0.8 48.1,-0.6 50.9,0.6 L108,23.9 L122.2,62.5 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M122.1,63 L90.1,144.1 C89,146.7 86.1,147.9 83.5,146.9 L8.7,116.4 C6.1,115.3 4.9,112.4 5.9,109.8 L46.9,9.3 C48,6.7 50.9,5.5 53.5,6.5 L110.4,29.7 L122.1,63 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M108,24 L98.9,46.3 C97.6,49.4 99.3,53.1 102.4,54.4 L122.3,62.5" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M109.9,27.4 L101.6,47.7 C100.5,50.5 102,53.9 104.8,55 L122.9,62.4" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M108.2,31.5 L99.9,51.8 C98.8,54.6 100.3,58 103.1,59.1 L121.2,66.5 L122.9,62.4" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M100.9,41.5 L98.9,46.4 C97.6,49.5 99.3,53.2 102.4,54.5 L122.3,62.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M108,24 L103.1,36.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M35,25.3 L35.5,24.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M37.8,18.4 L43.8,3.6 C44.9,0.9 48,-0.5 50.8,0.7 L107.9,24 L122.1,62.6 L90,144 C88.9,146.7 85.8,148.1 83,146.9 L4.2,114.8 C1.5,113.7 0.1,110.6 1.3,107.8 L29.9,37.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group" transform="translate(18.000000, 10.000000)">
                <path d="M96,118.2 C96,121.2 93.6,123.6 90.6,123.6 L5.5,123.6 C2.5,123.6 0.1,121.2 0.1,118.2 L0.1,5.7 C0.1,2.7 2.5,0.3 5.5,0.3 L67.2,0.3 L94.9,30.6 L95.5,81.4 L96,118.2 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M95.6,81.6 L92.8,81.6 C92.8,76.2 93.3,71.2 89.6,65.1 C89.6,65.1 89.6,65.1 89.6,65.1 C89.5,64.9 87.5,62 87.3,62 C80.9,54.7 70.5,52.5 61.7,56.4 L55.1,61 C51.1,65 48.6,70.5 48.6,76.6 L48.6,81.7 L44.4,81.7 C42.5,81.7 40.9,83.2 40.9,85.2 L40.9,123.8 L90.6,123.8 C93.6,123.8 96,121.4 96,118.4 L95.6,81.6 Z M86.8,81.6 L54.7,81.6 L54.7,76.5 C54.7,62.6 71.5,54.8 82.1,65.2 C87.5,70.5 86.8,76.5 86.8,81.6 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M29.2,89.9 L80.3,89.9" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14,89.9 L23,89.9" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M57.3,76.1 L80.1,76.1" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14.5,76.1 L47.7,76.1" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M71.7,62.3 L80.6,62.3" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14.9,62.3 L63.6,62.3" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M38.6,104.9 L41.6,104.9" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14.9,104.9 L33,104.9" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M49.6,48.6 L81,48.6" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.3,48.6 L39.6,48.6" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.8,17.1 L56.6,17.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.8,26.8 L31.4,26.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M67.3,0.5 L67.3,24.6 C67.3,27.9 70.2,30.8 73.6,30.8 L95.1,30.8" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M70.3,2.9 L70.3,24.8 C70.3,27.8 73,30.4 76,30.4 L95.5,30.4" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M70.3,7.3 L70.3,29.2 C70.3,32.2 73,34.8 76,34.8 L95.5,34.8 L95.5,30.4" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M67.3,19.3 L67.3,24.6 C67.3,27.9 70.2,30.8 73.6,30.8 L95.1,30.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M67.3,0.5 L67.3,13.5" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M0.2,29.2 L0.2,27.9" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M0.2,21.7 L0.2,5.7 C0.2,2.7 2.6,0.3 5.6,0.3 L67.3,0.3 L95,30.6 L96,118.1 C96,121.1 93.6,123.5 90.6,123.5 L5.5,123.5 C2.5,123.5 0.1,121.1 0.1,118.1 L0.1,42.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group" transform="translate(66.000000, 60.000000)">
                <path d="M46.5,8.3 C42.6,4.9 37.5,2.8 32,2.8 C19.8,2.8 9.9,12.7 9.9,24.9 L9.9,28 L13.9,28 L13.9,22.9 C13.9,14.1 21.1,6.9 29.9,6.9 C34.9,6.9 39.3,9.2 42.2,12.7 C44.5,15.5 45.9,19.1 45.9,23 L45.9,28.1 L52,28.1 L52,23 C51.9,17.3 49.9,12.2 46.5,8.3 Z" id="Shape" class="fill-primary-400" fill-rule="nonzero"></path>
                <path d="M55.8,78.9 L3.6,78.9 C1.6,78.9 4.54747351e-13,77.3 4.54747351e-13,75.3 L4.54747351e-13,31.6 C4.54747351e-13,29.6 1.6,28 3.6,28 L55.8,28 C57.8,28 59.4,29.6 59.4,31.6 L59.4,75.3 C59.4,77.3 57.8,78.9 55.8,78.9 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M59.4,33.7 L59.4,75.7 C59.4,77.5 58,78.9 56.2,78.9 L8,78.9 C6.2,78.9 4.8,77.5 4.8,75.7 L4.8,33.7 C4.8,31.9 6.2,30.5 8,30.5 L56.2,30.5 C56.5,30.5 56.7,30.5 57,30.6 C58.4,30.9 59.4,32.2 59.4,33.7 Z" id="Shape" class="fill-primary-500" fill-rule="nonzero"></path>
                <path d="M57,30.6 L57,69 C57,70.8 55.6,72.2 53.8,72.2 L5.6,72.2 C5.3,72.2 5,72.2 4.8,72.1 L4.8,33.7 C4.8,31.9 6.2,30.5 8,30.5 L56.2,30.5 C56.5,30.5 56.7,30.5 57,30.6 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M0.1,43.1 L0.1,42.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M59.4,75.6 C59.3,77.4 57.8,78.8 56,78.8 L3.6,78.8 C1.7,78.8 0.2,77.3 0.2,75.4 L0.2,50.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M59.4,54.6 L59.4,71.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M0.1,38.9 L0.1,31.4 C0.1,29.5 1.6,28 3.5,28 L55.9,28 C57.8,28 59.3,29.5 59.3,31.4 L59.3,44.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M24.3,49 C24.2,51.8 25,53.7 27.6,54.4 L27.6,61.8 C27.6,62.7 28.3,63.5 29.3,63.5 C30.2,63.5 32,62.8 32,61.8 L32,55 C34.5,54.3 36.4,51.9 36.4,49.2 C36.4,45.6 33.3,42.8 29.6,43.2 C26.8,43.5 24.6,45.8 24.3,48.6 C24.3,48.6 24.3,48.8 24.3,49" id="Shape" class="fill-primary-600" fill-rule="nonzero"></path>
                <path d="M27.9,61.3 L27.9,61.7 C27.9,62.7 28.7,63.5 29.7,63.5 C30.7,63.5 31.5,62.7 31.5,61.7 L31.5,54.2 C34.3,53.4 36.3,50.8 36.3,47.8 C36.3,43.9 32.9,40.7 28.9,41.2 C25.8,41.5 23.4,44 23,47.1 C23,47.4 23,47.6 23,47.9" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M24.2,51.3 C25.1,52.6 26.4,53.6 28,54.1 L28,56.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M16.6,5.2 C16.5,5.3 16.4,5.4 16.3,5.4 M14.3,7.3 C10.3,11.3 7.8,16.8 7.8,22.9 L7.8,28 L13.9,28 L13.9,22.9 C13.9,14.1 21.1,6.9 29.9,6.9 C38.7,6.9 45.9,14.1 45.9,22.9 L45.9,28 L52,28 L52,22.9 C52,10.7 42.1,0.8 29.9,0.8 C26.7,0.8 23.7,1.5 20.9,2.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </g>
    </g>
</svg>
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Authentication</h6>
                          <p class="mb-0">Examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Basic</li>
                      <li>
                        <a class="dropdown-item" href="../authentication/basic-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../authentication/basic-register.html">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../authentication/basic-recover.html">
                          Recover
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Cover</li>
                      <li>
                        <a class="dropdown-item" href="../authentication/cover-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../authentication/cover-register.html">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../authentication/cover-recover.html">
                          Recover
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Simple</li>
                      <li>
                        <a class="dropdown-item" href="../authentication/simple-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../authentication/simple-register.html">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../authentication/simple-recover.html">
                          Recover
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="shop-product.html#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <svg width="148px" height="144px" viewBox="0 0 148 144" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Task</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Task" transform="translate(2.000000, 2.000000)">
            <g id="Group" transform="translate(0.000000, 137.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M1.1,0.4 L0,0.4" id="Shape"></path>
                <path d="M21.2,0.4 L5.4,0.4" id="Shape"></path>
                <path d="M26.9,0.4 L25.9,0.4" id="Shape"></path>
                <path d="M113.4,0.4 L32.6,0.4" id="Shape"></path>
                <path d="M142.9,0.4 L118,0.4" id="Shape"></path>
            </g>
            <path d="M22.5,8.7 L102.5,8.7 C104.5,8.7 106.1,10.3 106.1,12.3 L106.1,133.3 C106.1,135.3 104.5,136.9 102.5,136.9 L10.8,136.9 C8.8,136.9 7.2,135.3 7.2,133.3 L7.2,12.3 C7.2,10.3 8.8,8.7 10.8,8.7 L16.1,8.7" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M16,8.7 L17.5,8.7" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M106.1,17.7 L106.1,133.3 C106.1,135.3 104.5,136.9 102.5,136.9 L14.9,136.9 C12.9,136.9 11.3,135.3 11.3,133.3 L11.3,17.7 C11.3,15.7 12.9,14.1 14.9,14.1 L102.5,14.1 C104.5,14.1 106.1,15.7 106.1,17.7 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M99.9,25.4 L99.9,128.5 C99.9,130 98.7,131.2 97.2,131.2 L19.6,131.2 C18.1,131.2 16.9,130 16.9,128.5 L16.9,25.4 C16.9,23.9 18.1,22.7 19.6,22.7 L97.2,22.7 C98.7,22.7 99.9,23.9 99.9,25.4 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M108.1,75.6 L108.1,128 C108.1,129.7 106.7,131.2 104.9,131.2 L81.6,131.2 C75.6,125.3 71.9,117.1 71.9,108 C71.9,90 86.5,75.4 104.5,75.4 C105.7,75.4 106.9,75.5 108.1,75.6 Z" id="Shape" class="fill-primary-400" fill-rule="nonzero"></path>
            <path d="M7.2,93.7 L7.2,12.3 C7.2,10.3 8.8,8.7 10.8,8.7 L12.9,8.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24.6,8.7 L102.5,8.7 C104.5,8.7 106.1,10.3 106.1,12.3 L106.1,133.3 C106.1,135.3 104.5,136.9 102.5,136.9 L10.8,136.9 C8.8,136.9 7.2,135.3 7.2,133.3 L7.2,112.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M19,8.7 L19.2,8.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M85.3,10.3 C85.3,12 84.6,13.5 83.6,14.5 C82.5,15.6 81,16.3 79.4,16.3 L34,16.3 C30.7,16.3 28,13.6 28,10.3 C28,9.4 28.2,8.6 28.5,7.9 C28.8,7.2 29.2,6.6 29.8,6.1 C30.9,5 32.4,4.4 34,4.4 L53.9,4.4 C53.8,4.7 53.7,5.1 53.7,5.4 C53.7,7.1 55,8.4 56.7,8.4 C58.4,8.4 59.7,7.1 59.7,5.4 C59.7,5 59.6,4.7 59.5,4.4 L79.4,4.4 C81.9,4.4 84,5.9 84.9,8 C85.1,8.6 85.3,9.4 85.3,10.3 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M79.7,7.3 C82,7.3 84,8.4 84.8,10 C85.1,10.5 85.3,11.1 85.3,11.8 C85.3,13 84.7,14.1 83.7,15 C82.7,15.8 81.3,16.3 79.7,16.3 L37.2,16.3 C34.1,16.3 31.6,14.3 31.6,11.8 C31.6,11.2 31.8,10.6 32.1,10 C32.4,9.5 32.8,9 33.3,8.6 C34.3,7.8 35.7,7.3 37.3,7.3 L79.7,7.3 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
            <g id="Group" transform="translate(27.000000, 0.000000)" class="stroke-primary" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M8.4,16.2 L6.9,16.2 C3.6,16.2 0.9,13.5 0.9,10.2 C0.9,9.3 1.1,8.5 1.4,7.8 C1.7,7.1 2.1,6.5 2.7,6 C3.8,4.9 5.3,4.3 6.9,4.3 L19.1,4.3" id="Shape"></path>
                <path d="M37.3,16.2 L14.7,16.2" id="Shape"></path>
                <path d="M25.3,4.3 L26.9,4.3 C26.8,4.6 26.7,5 26.7,5.3 C26.7,7 28,8.3 29.7,8.3 C31.4,8.3 32.7,7 32.7,5.3 C32.7,4.9 32.6,4.6 32.5,4.3 L52.4,4.3 C54.9,4.3 57,5.8 57.9,7.9 C58.2,8.6 58.4,9.4 58.4,10.3 C58.4,12 57.7,13.5 56.7,14.5 C55.8,15.4 54.6,16 53.2,16.2" id="Shape"></path>
                <path d="M29.5,0.4 C29.6,0.4 29.6,0.4 29.7,0.4 C32.2,0.4 34.2,2.4 34.2,4.9 C34.2,7.4 32.2,9.4 29.7,9.4 C27.2,9.4 25.2,7.4 25.2,4.9 C25.2,4 25.4,3.2 25.9,2.6" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            </g>
            <g id="Group" transform="translate(26.000000, 41.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M50.9,0.1 L62.2,0.1" id="Shape" class="stroke-primary-300"></path>
                <path d="M17.8,0.1 L42.8,0.1" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,0.1 L9,0.1" id="Shape" class="stroke-primary-300"></path>
                <path d="M25.7,8.7 L30.3,8.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M0.8,8.7 L15.9,8.7" id="Shape" class="stroke-primary"></path>
            </g>
            <g id="Group" transform="translate(26.000000, 61.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M50.9,0.7 L62.2,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M17.8,0.7 L42.8,0.7" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,0.7 L9,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M25.7,9.2 L30.3,9.2" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,9.2 L15.9,9.2" id="Shape" class="stroke-primary-300"></path>
            </g>
            <g id="Group" transform="translate(26.000000, 82.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M50.9,0.2 L62.2,0.2" id="Shape" class="stroke-primary"></path>
                <path d="M17.8,0.2 L42.8,0.2" id="Shape" class="stroke-primary-300"></path>
                <path d="M0.8,0.2 L9,0.2" id="Shape" class="stroke-primary"></path>
                <path d="M25.7,8.7 L30.3,8.7" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,8.7 L15.9,8.7" id="Shape" class="stroke-primary-300"></path>
            </g>
            <g id="Group" transform="translate(26.000000, 102.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M50.9,0.7 L62.2,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M17.8,0.7 L42.8,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M0.8,0.7 L9,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M25.7,9.3 L30.3,9.3" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,9.3 L15.9,9.3" id="Shape" class="stroke-primary"></path>
            </g>
            <circle id="Oval" stroke-width="3" class="fill-primary-400 stroke-primary-400" fill-rule="nonzero" cx="111.7" cy="107.4" r="32.7"></circle>
            <path d="M101.3,138.4 C88.3,134.1 79,121.8 79,107.4 C79,89.3 93.7,74.7 111.7,74.7 C113.5,74.7 115.2,74.8 116.9,75.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M140.1,91.1 C142.8,95.9 144.4,101.4 144.4,107.3 C144.4,125.4 129.7,140 111.7,140 C111.5,140 111.2,140 111,140" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M125.6,77.7 C127.5,78.6 129.2,79.6 130.9,80.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M108.6,120.2 C107.4,120.2 106.3,119.7 105.5,118.9 L96.3,109.7 C94.6,108 94.6,105.2 96.3,103.5 C98,101.8 100.8,101.8 102.5,103.5 L108.6,109.6 L122.4,95.8 C124.1,94.1 126.9,94.1 128.6,95.8 C130.3,97.5 130.3,100.3 128.6,102 L111.7,118.9 C110.9,119.8 109.7,120.2 108.6,120.2 Z" id="Shape" stroke-width="3" class="stroke-primary fill-neutral" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Account</h6>
                          <p class="mb-0">Account management made cool.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Account</li>
                      <li>
                        <a class="dropdown-item" href="../account/account-billing.html">
                          Billing
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/account-notifications.html">
                          Notifications
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/account-profile.html">
                          Profile
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/account-profile-public.html">
                          Profile public
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/account-settings.html">
                          Settings
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Board</li>
                      <li>
                        <a class="dropdown-item" href="../account/board-connections.html">
                          Connections
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/board-overview.html">
                          Overview
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/board-projects.html">
                          Projects
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/board-tasks.html">
                          Tasks
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Listing</li>
                      <li>
                        <a class="dropdown-item" href="../account/listing-orders.html">
                          Orders
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/listing-projects.html">
                          Projects
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../account/listing-users.html">
                          Users
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="shop-product.html#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <svg width="153px" height="132px" viewBox="0 0 153 132" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Cart_Add_2</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Cart_Add_2" transform="translate(2.000000, 2.000000)">
            <g id="Group" transform="translate(16.000000, 127.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M1.6,0.9 L0.5,0.9" id="Shape"></path>
                <path d="M95.3,0.9 L7.9,0.9" id="Shape"></path>
                <path d="M126.2,0.9 L100.3,0.9" id="Shape"></path>
                <path d="M132.6,0.9 L130.8,0.9" id="Shape"></path>
            </g>
            <path d="M133,34 C131.3,31.6 128.6,30.3 125.7,30.3 C125.7,30.3 125.7,30.3 125.6,30.3 L46,30.3 C43.4,30.3 41.3,32.4 41.3,35 C41.3,37.6 43.4,39.7 46,39.7 L125.4,39.7 L115.8,70.7 C115.1,72.9 113.1,74.3 110.9,74.3 L44.9,74.3 L25.9,11.6 C24.6,7.4 20.8,4.5 16.3,4.5 L4.8,4.5 C2.2,4.5 0.1,6.6 0.1,9.2 C0.1,11.8 2.2,13.9 4.8,13.9 L16.3,13.9 C16.6,13.9 16.9,14.1 17,14.4 L40,90.1 C41.8,95.9 47.2,99.8 53.2,99.8 L111.3,99.8 C113.9,99.8 116,97.7 116,95.1 C116,92.5 113.9,90.4 111.3,90.4 L53.2,90.4 C51.2,90.4 49.4,89.1 48.8,87.2 L47.7,83.6 L110.9,83.6 C117.3,83.6 122.8,79.5 124.7,73.4 L134.3,42.3 C135.3,39.4 134.8,36.4 133,34 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M134.6,41.3 C134.5,41.6 134.5,41.9 134.4,42.2 L124.8,73.3 C122.9,79.4 117.4,83.5 111,83.5 L47.9,83.5 L50.9,90.8 C51.5,92.7 53.2,94 55.3,94 L111.6,94 C113.5,94 115.1,95.1 115.9,96.8 C115.2,98.4 113.5,99.6 111.6,99.6 L53.5,99.6 C47.4,99.6 42.1,95.7 40.2,89.9 L17.2,14.2 C17.1,13.9 16.8,13.7 16.5,13.7 L5,13.7 C3.1,13.7 1.5,12.6 0.7,10.9 C1.4,9.3 3.1,8.1 5,8.1 L16.5,8.1 C20.9,8.1 24.8,11 26.1,15.2 L45.1,74.2 L111.1,74.2 C113.4,74.2 115.4,72.7 116,70.6 L125.6,43.4 L124.4,43.4 L125.6,39.7 L46.2,39.7 C44.3,39.7 42.6,38.6 41.9,36.9 C42.6,35.3 44.2,34.1 46.2,34.1 L125.9,34.1 C128.8,34.1 131.5,35.5 133.2,37.8 C133.8,38.9 134.4,40.1 134.6,41.3 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
            <path d="M119.5,39.6 L125.5,39.6 L115.9,70.6 C115.2,72.8 113.2,74.2 111,74.2 L45,74.2 L26,11.5 C24.7,7.3 20.9,4.4 16.4,4.4 L4.9,4.4 C2.3,4.4 0.2,6.5 0.2,9.1 C0.2,11.7 2.3,13.8 4.9,13.8 L16.4,13.8 C16.7,13.8 17,14 17.1,14.3 L40.1,90 C41.9,95.8 47.3,99.7 53.3,99.7 L111.4,99.7 C114,99.7 116.1,97.6 116.1,95 C116.1,92.4 114,90.3 111.4,90.3 L53.3,90.3 C51.3,90.3 49.5,89 48.9,87.1 L47.8,83.5 L111,83.5 C117.4,83.5 122.9,79.4 124.8,73.3 L134.4,42.2 C135.3,39.4 134.8,36.4 133,34 C131.3,31.6 128.6,30.3 125.7,30.3 C125.7,30.3 125.7,30.3 125.6,30.3 L121,30.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M47.3,30.3 L46.1,30.3 C43.5,30.3 41.4,32.4 41.4,35 C41.4,37.6 43.5,39.7 46.1,39.7 L48.8,39.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle id="Oval" stroke-width="3" class="stroke-primary fill-primary-400" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="55.4" cy="117.3" r="10.3"></circle>
            <circle id="Oval" stroke-width="3" class="stroke-primary fill-primary-100" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="55.4" cy="117.3" r="4.9"></circle>
            <circle id="Oval" stroke-width="3" class="stroke-primary fill-primary-400" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="104.8" cy="117.3" r="10.3"></circle>
            <circle id="Oval" stroke-width="3" class="stroke-primary fill-primary-100" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="104.8" cy="117.3" r="4.9"></circle>
            <g id="Group" transform="translate(53.000000, 0.000000)">
                <path d="M47.3,54.8 C42.6,57.9 37,59.7 31,59.7 C14.5,59.7 1.2,46.4 1.2,29.9 C1.2,13.4 14.5,0.1 31,0.1 C47.5,0.1 60.8,13.4 60.8,29.9 C60.7,40.3 55.4,49.5 47.3,54.8" id="Shape" class="fill-primary-500" fill-rule="nonzero"></path>
                <path d="M40.1,58.5 C39.8,58.6 39.6,58.6 39.3,58.7 C36.6,59.5 33.7,60 30.7,60 C24.1,60 17.9,57.8 13,54.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M1.2,34.6 C1,33.2 0.9,31.7 0.9,30.2 C0.9,13.7 14.2,0.4 30.7,0.4 C47.2,0.4 60.5,13.7 60.5,30.2 C60.5,39.4 56.3,47.7 49.7,53.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M6.2,47.2 C5.9,46.7 5.5,46.2 5.2,45.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <g transform="translate(13.000000, 12.000000)" fill-rule="nonzero" id="Shape">
                    <path d="M17.9,33.7 C15.9,33.7 13.7,32.2 13.7,29.5 L13.7,22.1 L6.3,22.1 C3.6,22.1 2.1,19.9 2.1,17.9 C2.1,16.8 2.5,15.8 3.1,15 C3.9,14.1 5,13.6 6.2,13.6 L13.6,13.6 L13.6,6.2 C13.6,3.5 15.8,2 17.8,2 C19.8,2 22,3.5 22,6.2 L22,13.6 L29.4,13.6 C30.7,13.6 31.8,14.1 32.5,15 C33.2,15.8 33.5,16.8 33.5,17.9 C33.5,19.9 32,22.1 29.3,22.1 L21.9,22.1 L21.9,29.5 C22.2,32.3 20,33.7 17.9,33.7 Z" class="fill-neutral"></path>
                    <path d="M17.9,3.5 C19.3,3.5 20.6,4.4 20.6,6.2 C20.6,8.1 20.6,11.5 20.6,15.1 C24.2,15.1 27.6,15.1 29.5,15.1 C33.1,15.1 33.1,20.5 29.5,20.5 C27.6,20.5 24.2,20.5 20.6,20.5 C20.6,24.1 20.6,27.5 20.6,29.4 C20.6,31.2 19.2,32.1 17.9,32.1 C16.5,32.1 15.2,31.2 15.2,29.4 C15.2,27.5 15.2,24.1 15.2,20.5 C11.6,20.5 8.2,20.5 6.3,20.5 C2.7,20.5 2.7,15.1 6.3,15.1 C8.2,15.1 11.6,15.1 15.2,15.1 C15.2,11.5 15.2,8.1 15.2,6.2 C15.2,4.4 16.6,3.5 17.9,3.5 Z M17.9,0.5 C16.5,0.5 15.1,1 14,1.9 C12.8,3 12.1,4.5 12.1,6.2 L12.1,12.1 L6.2,12.1 C3,12.1 0.5,14.6 0.5,17.8 C0.5,19.2 1,20.6 1.9,21.7 C3,22.9 4.5,23.6 6.2,23.6 L12.1,23.6 L12.1,29.5 C12.1,32.7 14.6,35.2 17.8,35.2 C21.1,35.2 23.5,32.8 23.5,29.5 L23.5,23.6 L29.4,23.6 C32.6,23.6 35.1,21.1 35.1,17.9 C35.1,14.6 32.7,12.2 29.4,12.2 L23.5,12.2 L23.5,6.3 C23.7,3 21.2,0.5 17.9,0.5 Z" class="fill-primary"></path>
                </g>
            </g>
        </g>
    </g>
</svg>
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Shop</h6>
                          <p class="mb-0">Complete flow for online shops.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Shop</li>
                      <li>
                        <a class="dropdown-item" href="shop-landing.html">
                          Landing
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="shop-products.html">
                          Products
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="shop-product.html">
                          Product
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Checkout</li>
                      <li>
                        <a class="dropdown-item" href="checkout-cart.html">
                          Cart
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="checkout-cart-empty.html">
                          Cart empty
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="checkout-customer.html">
                          Customer
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="checkout-payment.html">
                          Payment
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="checkout-shipping.html">
                          Shipping
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="shop-product.html#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <svg width="150px" height="151px" viewBox="0 0 150 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Cog_Wheels</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Cog_Wheels" transform="translate(2.000000, 1.000000)">
            <path d="M145.9,44.4 L145.9,36.9 C145.9,34.9 144.4,33.2 142.5,32.9 L139.4,32.4 C137.9,32.2 136.7,31.2 136.2,29.8 C135.8,28.8 135.4,27.8 134.9,26.8 C134.3,25.5 134.4,23.9 135.3,22.7 L137.2,20.2 C138.4,18.6 138.2,16.4 136.8,15 L131.5,9.7 C130.1,8.3 127.9,8.1 126.3,9.3 L123.8,11.2 C122.6,12.1 121,12.2 119.7,11.6 C118.7,11.1 117.7,10.7 116.7,10.3 C115.3,9.8 114.3,8.6 114.1,7.1 L113.6,4 C113.3,2 111.6,0.6 109.6,0.6 L102.1,0.6 C100.1,0.6 98.4,2.1 98.1,4 L97.6,7.1 C97.4,8.6 96.4,9.8 95,10.3 C94,10.7 93,11.1 92,11.6 C90.7,12.2 89.1,12.1 87.9,11.2 L85.4,9.3 C83.8,8.1 81.6,8.3 80.2,9.7 L74.9,15 C73.5,16.4 73.3,18.6 74.5,20.2 L76.4,22.7 C77.3,23.9 77.4,25.5 76.8,26.8 C76.3,27.8 75.9,28.8 75.5,29.8 C75,31.2 73.8,32.2 72.3,32.4 L69.2,32.9 C67.2,33.2 65.8,34.9 65.8,36.9 L65.8,44.4 C65.8,46.4 67.3,48.1 69.2,48.4 L72.3,48.9 C73.8,49.1 75,50.1 75.5,51.5 C75.9,52.5 76.3,53.5 76.8,54.5 C77.4,55.8 77.3,57.4 76.4,58.6 L74.5,61.1 C73.3,62.7 73.5,64.9 74.9,66.3 L80.2,71.6 C81.6,73 83.8,73.2 85.4,72 L87.9,70.1 C89.1,69.2 90.7,69.1 92,69.7 C93,70.2 94,70.6 95,71 C96.4,71.5 97.4,72.7 97.6,74.2 L98.1,77.3 C98.4,79.3 100.1,80.7 102.1,80.7 L109.6,80.7 C111.6,80.7 113.3,79.2 113.6,77.3 L114.1,74.2 C114.3,72.7 115.3,71.5 116.7,71 C117.7,70.6 118.7,70.2 119.7,69.7 C121,69.1 122.6,69.2 123.8,70.1 L126.3,72 C127.9,73.2 130.1,73 131.5,71.6 L136.8,66.3 C138.2,64.9 138.4,62.7 137.2,61.1 L135.3,58.6 C134.4,57.4 134.3,55.8 134.9,54.5 C135.4,53.5 135.8,52.5 136.2,51.5 C136.7,50.1 137.9,49.1 139.4,48.9 L142.5,48.4 C144.5,48.1 145.9,46.4 145.9,44.4 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M113,85.8 L113,96.3 C113,99.1 110.9,101.5 108.2,101.9 L103.8,102.5 C101.7,102.8 100,104.2 99.3,106.2 C98.8,107.7 98.2,109.1 97.5,110.5 C97,111.5 96.9,112.6 97,113.7 C97.1,114.7 97.5,115.6 98.1,116.4 L100.7,120 C101.7,121.3 102,122.9 101.7,124.4 C101.5,125.5 101,126.6 100.1,127.4 L92.7,134.8 C91.8,135.7 90.8,136.2 89.7,136.4 C88.2,136.7 86.6,136.3 85.4,135.4 L81.8,132.8 C81,132.2 80.2,131.9 79.3,131.8 C78.2,131.6 77.1,131.8 76,132.3 C74.6,133 73.2,133.5 71.7,134.1 C69.7,134.8 68.3,136.5 68,138.6 L67.4,143 C67,145.8 64.6,147.8 61.8,147.8 L51.3,147.8 C49.7,147.8 48.2,147.1 47.1,145.9 C46.4,145.1 45.9,144.1 45.7,142.9 L45.1,138.5 C45,137.6 44.6,136.8 44.1,136 C44.1,136 44.1,136 44.1,136 C43.4,135.1 42.5,134.4 41.4,134 C40.7,133.8 40,133.5 39.3,133.2 C38.6,132.9 37.9,132.6 37.1,132.2 C35.2,131.3 33,131.5 31.3,132.8 L27.7,135.4 C25.5,137.1 22.3,136.8 20.3,134.9 L12.9,127.5 C11.9,126.5 11.3,125.1 11.3,123.8 C11.2,122.5 11.6,121.2 12.4,120.2 L15,116.6 C16.3,114.9 16.5,112.7 15.6,110.8 C14.9,109.4 14.4,108 13.8,106.5 C13.1,104.5 11.4,103.1 9.3,102.8 L4.9,102.2 C2.1,101.8 0.1,99.4 0.1,96.6 L0.1,86.1 C0.1,83.3 2.2,80.9 4.9,80.5 L9.3,79.9 C11.4,79.6 13.1,78.2 13.8,76.2 C14.3,74.7 14.9,73.3 15.6,71.9 C16.5,70 16.3,67.8 15,66.1 L12.4,62.5 C10.7,60.2 11,57.1 12.9,55.1 L20.3,47.7 C22.3,45.7 25.4,45.5 27.7,47.2 L31.3,49.8 C33,51.1 35.2,51.3 37.1,50.4 C38.5,49.7 39.9,49.2 41.4,48.6 C43.4,47.9 44.8,46.2 45.1,44.1 L45.7,39.7 C46.1,36.9 48.5,34.9 51.3,34.9 L61.8,34.9 C63.4,34.9 64.8,35.5 65.8,36.6 C65.8,36.8 65.7,37.1 65.7,37.3 L65.7,44.8 C65.7,46.8 67.2,48.5 69.1,48.8 L71.9,49.2 L72.2,49.2 C72.8,49.3 73.3,49.5 73.8,49.8 C74.5,50.3 75.1,51 75.4,51.8 C75.8,52.8 76.2,53.8 76.7,54.8 C77.3,56.2 77.2,57.7 76.3,58.9 L74.4,61.4 C73.2,63 73.4,65.2 74.8,66.6 L80.1,71.9 C81.5,73.3 83.7,73.5 85.3,72.3 L87.8,70.4 C89,69.5 90.6,69.4 91.9,70 C92.9,70.5 93.9,70.9 94.9,71.3 C95.9,71.7 96.7,72.4 97.2,73.3 C97.4,73.6 97.5,74 97.5,74.3 C97.5,74.3 97.5,74.4 97.5,74.4 L98,77.5 C98.3,79.5 100,80.9 102,80.9 L109.5,80.9 C109.6,80.9 109.7,80.9 109.8,80.9 C110.2,81.1 110.6,81.4 111,81.7 C112.3,82.7 113,84.2 113,85.8 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M113,84.9 L113,98.1 C113,100 111.6,101.7 109.7,101.9 L105.3,102.5 C102.6,102.9 100.3,104.8 99.4,107.4 C98.9,108.8 98.3,110.2 97.7,111.5 C97.3,112.3 97.1,113 97,113.6 C96.2,118.3 100.8,121.2 101.7,124.2 C102.1,125.3 101.9,126.5 100.7,127.7 C92.7,135.7 92.6,136.3 90.5,136.3 C90.2,136.3 89.9,136.3 89.7,136.2 C89.2,136.1 88.7,135.9 88.2,135.5 L84.6,132.8 C83.3,131.8 81.8,131.3 80.2,131.3 C79.9,131.3 79.6,131.3 79.2,131.4 C78.4,131.5 77.6,131.7 76.9,132.1 C75.6,132.7 74.2,133.3 72.8,133.8 C64.5,136.8 70.4,147.4 63.4,147.4 L50.2,147.4 C48.8,147.4 47.6,146.7 46.9,145.5 C46.6,145.1 46.4,144.6 46.4,144.1 C46,141.2 45.9,138 43.9,135.7 C43.9,135.7 43.9,135.7 43.9,135.7 C43.2,134.9 42.2,134.2 40.9,133.8 C40.1,133.5 39.6,133.2 39.1,132.9 C38.7,132.7 38.3,132.4 37.7,132.1 C29.7,128.3 25.5,139.1 20.5,134.2 L13.6,128 L12.2,126.7 C11.1,125.6 10.8,124.5 11.1,123.3 C11.9,119.6 18.2,115.6 15.2,109.5 C14.6,108.2 14,106.8 13.5,105.4 C10.5,97.1 3.4,104.8 3.4,97.8 L3.4,87.3 C3.4,80.4 14.1,86.3 17,77.9 C19.5,70.8 21.7,71.2 15.3,62.6 C14.2,61.1 14.3,58.9 15.7,57.6 C23.7,49.6 23.8,49 25.9,49 C29.2,49 31.2,53.9 36.2,53.9 C38.7,53.9 39.2,53 43.5,51.5 C46.1,50.6 48,48.3 48.4,45.6 L49,41.2 C49.3,39.3 50.9,37.9 52.8,37.9 L61.1,37.9 L61.1,44.2 C61.1,48.4 64.2,52 68.3,52.6 L71.2,53 C71.6,54 72,55 72.4,56 L70.7,58.3 C68.2,61.6 68.6,66.4 71.5,69.3 L76.8,74.6 C78.4,76.2 80.5,77.1 82.8,77.1 C84.6,77.1 86.4,76.5 87.8,75.4 L90.1,73.7 C91.1,74.2 92.1,74.6 93.1,74.9 L93.5,77.8 C94.1,81.9 97.7,85 101.9,85 L109.4,85 C110.6,85 111.7,84.7 112.8,84.3 C113,84.7 113,84.8 113,84.9 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
            <path d="M145.9,44.4 L145.9,36.9 C145.9,34.9 144.4,33.2 142.5,32.9 L139.4,32.4 C137.9,32.2 136.7,31.2 136.2,29.8 C135.8,28.8 135.4,27.8 134.9,26.8 C134.3,25.5 134.4,23.9 135.3,22.7 L137.2,20.2 C138.4,18.6 138.2,16.4 136.8,15 L131.5,9.7 C130.1,8.3 127.9,8.1 126.3,9.3 L123.8,11.2 C122.6,12.1 121,12.2 119.7,11.6 C118.7,11.1 117.7,10.7 116.7,10.3 C115.3,9.8 114.3,8.6 114.1,7.1 L113.6,4 C113.3,2 111.6,0.6 109.6,0.6 L102.1,0.6 C100.1,0.6 98.4,2.1 98.1,4 L97.6,7.1 C97.4,8.6 96.4,9.8 95,10.3 C94,10.7 93,11.1 92,11.6 C90.7,12.2 89.1,12.1 87.9,11.2 L85.4,9.3 C83.8,8.1 81.6,8.3 80.2,9.7 L74.9,15 C73.5,16.4 73.3,18.6 74.5,20.2 L76.4,22.7 C77.3,23.9 77.4,25.5 76.8,26.8 C76.3,27.8 75.9,28.8 75.5,29.8 C75,31.2 73.8,32.2 72.3,32.4 L69.2,32.9 C67.2,33.2 65.8,34.9 65.8,36.9 L65.8,44.4 C65.8,46.4 67.3,48.1 69.2,48.4 L72.3,48.9 C73.8,49.1 75,50.1 75.5,51.5 C75.9,52.5 76.3,53.5 76.8,54.5 C77.4,55.8 77.3,57.4 76.4,58.6 L74.5,61.1 C73.3,62.7 73.5,64.9 74.9,66.3 L80.2,71.6 C81.6,73 83.8,73.2 85.4,72 L87.9,70.1 C89.1,69.2 90.7,69.1 92,69.7 C93,70.2 94,70.6 95,71 C96.4,71.5 97.4,72.7 97.6,74.2 L98.1,77.3 C98.4,79.3 100.1,80.7 102.1,80.7 L109.6,80.7 C111.6,80.7 113.3,79.2 113.6,77.3 L114.1,74.2 C114.3,72.7 115.3,71.5 116.7,71 C117.7,70.6 118.7,70.2 119.7,69.7 C121,69.1 122.6,69.2 123.8,70.1 L126.3,72 C127.9,73.2 130.1,73 131.5,71.6 L136.8,66.3 C138.2,64.9 138.4,62.7 137.2,61.1 L135.3,58.6 C134.4,57.4 134.3,55.8 134.9,54.5 C135.4,53.5 135.8,52.5 136.2,51.5 C136.7,50.1 137.9,49.1 139.4,48.9 L142.5,48.4 C144.5,48.1 145.9,46.4 145.9,44.4 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M145.9,46 L145.9,37.1 C145.9,35.2 144.5,33.6 142.6,33.3 L139.6,32.9 C138.2,32.7 137,31.7 136.5,30.4 C136.1,29.4 135.7,30.2 135.3,29.3 C134.7,28 134.1,25.8 135,24.6 L135.9,21 C137,19.5 138.5,19.2 137.1,17.9 L132.1,12.9 C130.8,11.6 128.6,11.4 127.1,12.5 L124.7,14.3 C123.6,15.2 122,15.3 120.7,14.7 C119.8,14.3 118.8,13.9 117.8,13.5 C116.5,13 115.5,11.9 115.3,10.4 L114.9,7.4 C114.6,5.5 113,4.1 111.1,4.1 L104,4.1 C102.1,4.1 100.5,5.5 100.2,7.4 L99.8,10.4 C99.6,11.8 98.6,13 97.3,13.5 C96.3,13.9 95.3,14.3 94.4,14.7 C93.1,15.3 91.6,15.2 90.4,14.3 L88,12.5 C86.5,11.4 84.3,11.5 83,12.9 L78,17.9 C76.7,19.2 76.5,21.4 77.6,22.9 L79.4,25.3 C80.3,26.4 80.4,28 79.8,29.3 C79.4,30.2 79,31.2 78.6,32.2 C78.1,33.5 77,34.5 75.5,34.7 L72.5,35.1 C70.6,35.4 69.2,37 69.2,38.9 L69.2,47.8 C69.2,49.7 68.8,48.7 70.7,48.9 L73.7,49.3 C75.1,49.5 73.6,49.6 74.1,50.9 C74.5,51.9 74.9,51.1 75.3,52 C75.9,53.3 77.6,57.5 76.7,58.6 L74.9,61 C73.8,62.5 73.9,64.7 75.3,66 L81.2,71.9 C82.5,73.2 82.9,72.5 84.4,71.4 L88.6,69.6 C89.7,68.7 93,69.5 94.3,70.1 C95.2,70.5 94.4,70.1 95.4,70.4 C96.7,70.9 97.7,72 97.9,73.5 L98.3,76.5 C98.6,78.4 102,80.7 103.9,80.7 L111,80.7 C112.9,80.7 114.5,79.3 114.8,77.4 L115.2,74.4 C115.4,73 116.4,71.8 117.7,71.3 C118.7,70.9 119.7,70.5 120.6,70.1 C121.9,69.5 123.4,69.6 124.6,70.5 L127,72.3 C128.5,73.4 130.7,73.3 132,71.9 L137,66.9 C138.3,65.6 138.5,63.4 137.4,61.9 L135.6,59.5 C134.7,58.4 134.6,56.8 135.2,55.5 C135.6,54.6 136,53.6 136.4,52.6 C136.9,51.3 138,50.3 139.5,50.1 L142.5,49.7 C144.5,49.6 145.9,47.9 145.9,46 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <circle id="Oval" class="fill-neutral" fill-rule="nonzero" cx="105.8" cy="40.7" r="14"></circle>
            <path d="M104.5,26.8 C104.9,26.8 105.4,26.7 105.8,26.7 C113.5,26.7 119.8,33 119.8,40.7 C119.8,48.4 113.5,54.7 105.8,54.7 C98.1,54.7 91.8,48.4 91.8,40.7 C91.8,37.6 92.8,34.7 94.5,32.4" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M97.8,29.2 C98.3,28.8 98.9,28.5 99.4,28.2" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M123.8,11.2 C122.6,12.1 121,12.2 119.7,11.6 C118.7,11.1 117.7,10.7 116.7,10.3 C115.3,9.8 114.3,8.6 114.1,7.1 L113.6,4 C113.3,2 111.6,0.6 109.6,0.6 L102.1,0.6 C100.1,0.6 98.4,2.1 98.1,4 L97.6,7.1 C97.4,8.6 96.4,9.8 95,10.3 C94,10.7 93,11.1 92,11.6 C90.7,12.2 89.1,12.1 87.9,11.2 L85.4,9.3 C83.8,8.1 81.6,8.3 80.2,9.7 L74.9,15 C73.5,16.4 73.3,18.6 74.5,20.2 L76.4,22.7 C77.3,23.9 77.4,25.5 76.8,26.8 C76.3,27.8 75.9,28.8 75.5,29.8 C75,31.2 73.8,32.2 72.3,32.4 L69.2,32.9 C67.2,33.2 65.8,34.9 65.8,36.9 L65.8,44.4 C65.8,46.4 67.3,48.1 69.2,48.4 L72.3,48.9 C73.8,49.1 75,50.1 75.5,51.5 C75.9,52.5 76.3,53.5 76.8,54.5 C77.4,55.8 77.3,57.4 76.4,58.6 L74.5,61.1 C73.3,62.7 73.5,64.9 74.9,66.3 L80.2,71.6 C81.6,73 83.8,73.2 85.4,72 L87.9,70.1 C89.1,69.2 90.7,69.1 92,69.7 C93,70.2 94,70.6 95,71 C96.4,71.5 97.4,72.7 97.6,74.2 L98.1,77.3 C98.4,79.3 100.1,80.7 102.1,80.7 L109.6,80.7 C111.6,80.7 113.3,79.2 113.6,77.3 L114.1,74.2 C114.3,72.7 115.3,71.5 116.7,71 C117.7,70.6 118.7,70.2 119.7,69.7 C121,69.1 122.6,69.2 123.8,70.1 L126.3,72 C127.9,73.2 130.1,73 131.5,71.6 L136.8,66.3 C138.2,64.9 138.4,62.7 137.2,61.1 L135.3,58.6 C134.4,57.4 134.3,55.8 134.9,54.5 C135.4,53.5 135.8,52.5 136.2,51.5 C136.7,50.1 137.9,49.1 139.4,48.9 L142.5,48.4 C144.5,48.1 145.9,46.4 145.9,44.4 L145.9,36.9 C145.9,34.9 144.4,33.2 142.5,32.9 L139.4,32.4 C137.9,32.2 136.7,31.2 136.2,29.8 C135.8,28.8 135.4,27.8 134.9,26.8 C134.3,25.5 134.4,23.9 135.3,22.7 L137.2,20.2 C138.4,18.6 138.2,16.4 136.8,15 L131.5,9.7 C130.7,8.9 129.6,8.5 128.5,8.5" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M42.7,77 C46.3,73.5 51.1,71.4 56.5,71.4 C67.4,71.4 76.2,80.2 76.2,91.1 C76.2,102 67.4,110.8 56.5,110.8 C45.6,110.8 36.8,102 36.8,91.1 C36.8,85.6 39,80.6 42.7,77" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M28.7,73.1 C29.2,72.4 29.7,71.7 30.2,71" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M33.3,114.7 C27.2,108.7 23.4,100.3 23.4,91.1 C23.4,87 24.2,83 25.5,79.4" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M45.2,122.2 C43.7,121.7 42.3,121 40.9,120.3" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M88.2,100.5 C87.6,102.6 86.7,104.7 85.7,106.6" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M53.3,58.2 C54.3,58.1 55.4,58.1 56.4,58.1 C59.7,58.1 62.9,58.6 65.9,59.5" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M42,61.3 C42.1,61.2 42.2,61.2 42.3,61.1" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M33.3,67.5 C35.8,65 38.8,62.9 42,61.4" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M46.2,74.3 C46.3,74.2 46.4,74.2 46.5,74.1" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M51.3,72.1 C52.9,71.7 54.7,71.4 56.4,71.4 C67.3,71.4 76.1,80.2 76.1,91.1 C76.1,102 67.3,110.8 56.4,110.8 C45.5,110.8 36.7,102 36.7,91.1 C36.7,87.5 37.7,84.1 39.3,81.2" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M22.1,46.2 C23.9,45.5 26,45.7 27.6,46.9 L31.2,49.5 C32.9,50.8 35.1,51 37,50.1 C38.4,49.4 39.8,48.9 41.3,48.3 C43.3,47.6 44.7,45.9 45,43.8 L45.6,39.4 C46,36.6 48.4,34.6 51.2,34.6 L58.4,34.6" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M16.5,51.2 L16.8,50.9" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M102.2,103 C100.8,103.6 99.7,104.8 99.2,106.3 C98.7,107.8 98.1,109.2 97.4,110.6 C96.9,111.6 96.8,112.7 96.9,113.8 C97,114.8 97.4,115.7 98,116.5 L100.6,120.1 C101.6,121.4 101.9,123 101.6,124.5 C101.4,125.6 100.9,126.7 100,127.5 L92.6,134.9 C91.7,135.8 90.7,136.3 89.6,136.5 C88.1,136.8 86.5,136.4 85.3,135.5 L81.7,132.9 C80.9,132.3 80.1,132 79.2,131.9 C78.1,131.7 77,131.9 75.9,132.4 C74.5,133.1 73.1,133.6 71.6,134.2 C69.6,134.9 68.2,136.6 67.9,138.7 L67.3,143.1 C66.9,145.9 64.5,147.9 61.7,147.9 L51.2,147.9 C49.6,147.9 48.1,147.2 47,146 C46.3,145.2 45.8,144.2 45.6,143 L45,138.6 C44.9,137.7 44.5,136.9 44,136.1 C44,136.1 44,136.1 44,136.1 C43.3,135.2 42.4,134.5 41.3,134.1 C40.6,133.9 39.9,133.6 39.2,133.3 C38.5,133 37.8,132.7 37,132.3 C35.1,131.4 32.9,131.6 31.2,132.9 L27.6,135.5 C25.4,137.2 22.2,136.9 20.2,135 L12.8,127.6 C11.8,126.6 11.2,125.2 11.2,123.9 C11.1,122.6 11.5,121.3 12.3,120.3 L14.9,116.7 C16.2,115 16.4,112.8 15.5,110.9 C14.8,109.5 14.3,108.1 13.7,106.6 C13,104.6 11.3,103.2 9.2,102.9 L4.8,102.3 C2,101.9 0,99.5 0,96.7 L0,86.2 C0,83.4 2.1,81 4.8,80.6 L9.2,80 C11.3,79.7 13,78.3 13.7,76.3 C14.2,74.8 14.8,73.4 15.5,72 C16.4,70.1 16.2,67.9 14.9,66.2 L12.3,62.6 C10.9,60.7 10.8,58.1 12.1,56.2" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M112.8,84.5 C112.9,84.9 113,85.4 113,85.9 L113,96.4 C113,99.1 111.2,101.3 108.6,101.9" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Utility</h6>
                          <p class="mb-0">Error pages and everything else.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../utility/coming-soon.html">
                          Coming soon
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../utility/error-404.html">
                          Error 404
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../utility/faq.html">
                          Faq
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../utility/support.html">
                          Support
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../utility/topic.html">
                          Topic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../utility/topic-simple.html">
                          Topic simple
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Sections menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="shop-product.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sections</a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="<?= base_url() ?>sections.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <figure style="width: 50px;">
                          <svg width="145px" height="113px" viewBox="0 0 145 113" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Apps</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apps" transform="translate(2.000000, 1.000000)">
            <path d="M31,0.5 L13,0.5 C6,0.5 0.4,6.2 0.4,13.1 L0.4,31.1 C0.4,38.1 6.1,43.7 13,43.7 L31,43.7 C38,43.7 43.6,38 43.6,31.1 L43.6,13.1 C43.6,6.1 37.9,0.5 31,0.5 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M31,5.1 L17.6,5.1 C10.6,5.1 5,10.8 5,17.7 L5,31.1 C5,38.1 10.7,43.7 17.6,43.7 L31,43.7 C38,43.7 43.6,38 43.6,31.1 L43.6,17.7 C43.6,10.8 37.9,5.1 31,5.1 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M31,0.5 L13,0.5 C6,0.5 0.4,6.2 0.4,13.1 L0.4,31.1 C0.4,38.1 6.1,43.7 13,43.7 L31,43.7 C38,43.7 43.6,38 43.6,31.1 L43.6,13.1 C43.6,6.1 37.9,0.5 31,0.5 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M31,56.2 L13,56.2 C6,56.2 0.4,61.9 0.4,68.8 L0.4,86.8 C0.4,93.8 6.1,99.4 13,99.4 L31,99.4 C38,99.4 43.6,93.7 43.6,86.8 L43.6,68.8 C43.6,61.8 37.9,56.2 31,56.2 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M31,60.8 L17.6,60.8 C10.6,60.8 5,66.5 5,73.4 L5,86.8 C5,93.8 10.7,99.4 17.6,99.4 L31,99.4 C38,99.4 43.6,93.7 43.6,86.8 L43.6,73.4 C43.6,66.5 37.9,60.8 31,60.8 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M31,56.2 L13,56.2 C6,56.2 0.4,61.9 0.4,68.8 L0.4,86.8 C0.4,93.8 6.1,99.4 13,99.4 L31,99.4 C38,99.4 43.6,93.7 43.6,86.8 L43.6,68.8 C43.6,61.8 37.9,56.2 31,56.2 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M86.7,0.5 L68.7,0.5 C61.7,0.5 56.1,6.2 56.1,13.1 L56.1,31.1 C56.1,38.1 61.8,43.7 68.7,43.7 L86.7,43.7 C93.7,43.7 99.3,38 99.3,31.1 L99.3,13.1 C99.3,6.1 93.6,0.5 86.7,0.5 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M86.7,0.5 L68.7,0.5 C61.7,0.5 56.1,6.2 56.1,13.1 L56.1,31.1 C56.1,38.1 61.8,43.7 68.7,43.7 L86.7,43.7 C93.7,43.7 99.3,38 99.3,31.1 L99.3,13.1 C99.3,6.1 93.6,0.5 86.7,0.5 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M86.7,56.2 L68.7,56.2 C61.7,56.2 56.1,61.9 56.1,68.8 L56.1,86.8 C56.1,93.8 61.8,99.4 68.7,99.4 L86.7,99.4 C93.7,99.4 99.3,93.7 99.3,86.8 L99.3,68.8 C99.3,61.8 93.6,56.2 86.7,56.2 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M86.7,60.8 L73.3,60.8 C66.3,60.8 60.7,66.5 60.7,73.4 L60.7,86.8 C60.7,93.8 66.4,99.4 73.3,99.4 L86.7,99.4 C93.7,99.4 99.3,93.7 99.3,86.8 L99.3,73.4 C99.3,66.5 93.6,60.8 86.7,60.8 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M86.7,56.2 L68.7,56.2 C61.7,56.2 56.1,61.9 56.1,68.8 L56.1,86.8 C56.1,93.8 61.8,99.4 68.7,99.4 L86.7,99.4 C93.7,99.4 99.3,93.7 99.3,86.8 L99.3,68.8 C99.3,61.8 93.6,56.2 86.7,56.2 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <g id="Group" transform="translate(68.000000, 18.000000)">
                <path d="M73,36.8 C73,33.5 70.3,30.8 67,30.8 C64,30.8 61.6,33 61.1,35.8 L58.4,35.8 L58.4,31.2 C58.4,27.9 55.7,25.2 52.4,25.2 C49.1,25.2 46.4,27.9 46.4,31.2 L46.4,35.7 L43.9,35.7 L43.9,26.4 C43.9,22.8 41,19.9 37.4,19.9 C33.8,19.9 30.9,22.8 30.9,26.4 L30.9,35.6 L28.7,35.6 L28.7,8.2 C28.7,4.6 25.8,1.7 22.2,1.7 C18.6,1.7 15.7,4.6 15.7,8.2 L15.7,47.7 L15.7,50.9 L15.7,64.5 L13.4,64.5 L13.4,54.9 C13.4,47.8 7.6,42 0.5,42 L0.5,65.7 C0.5,67.1 0.9,68.3 1.7,69.4 C1.7,69.4 1.7,69.5 1.7,69.5 C4.1,73.3 17.5,84.7 23.6,89.9 C25.6,91.6 28.2,92.5 30.8,92.5 L57.1,92.5 C65.8,92.5 72.9,85.4 72.9,76.7 L72.9,36.8 L73,36.8 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M73,36 L73,75.8 C73,84.5 65.9,91.6 57.2,91.6 L31,91.6 C28.4,91.6 25.8,90.7 23.8,89 C17.6,83.8 4.3,72.3 1.9,68.6 C1.9,68.6 1.9,68.5 1.9,68.5 C1.2,67.4 0.7,66.2 0.7,64.8 L0.7,41 C7.8,41 13.6,46.8 13.6,53.9 L13.6,63.5 L15.9,63.5 L15.9,7.2 C15.9,3.6 18.8,0.7 22.4,0.7 C26,0.7 28.9,3.6 28.9,7.2 L28.9,34.6 L31.1,34.6 L31.1,25.4 C31.1,21.8 34,18.9 37.6,18.9 C41.2,18.9 44.1,21.8 44.1,25.4 L44.1,34.7 L46.6,34.7 L46.6,30.2 C46.6,26.9 49.3,24.2 52.6,24.2 C55.9,24.2 58.6,26.9 58.6,30.2 L58.6,34.8 L61.3,34.8 C61.8,32 64.2,29.8 67.2,29.8 C70.3,30 73,32.7 73,36 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M73,40.6 L73,75.7 C73,84.4 65.9,91.5 57.2,91.5 L31,91.5 C28.4,91.5 25.8,90.6 23.8,88.9 C17.6,83.7 4.3,72.2 1.9,68.5 C1.9,68.5 1.9,68.4 1.9,68.4 C1.2,67.3 0.7,66.1 0.7,64.7 L0.7,45.6 C7.8,45.6 13.6,51.4 13.6,58.5 L13.6,68.1 L15.9,68.1 L15.9,11.8 C15.9,8.2 18.8,5.3 22.4,5.3 C26,5.3 28.9,8.2 28.9,11.8 L28.9,39.2 L31.1,39.2 L31.1,30 C31.1,26.4 34,23.5 37.6,23.5 C41.2,23.5 44.1,26.4 44.1,30 L44.1,39.3 L46.6,39.3 L46.6,34.7 C46.7,31.4 49.3,28.8 52.6,28.8 C55.9,28.8 58.6,31.5 58.6,34.8 C58.6,34.8 58.6,34.8 58.6,34.8 L58.6,39.4 L61.3,39.4 C61.8,36.6 64.2,34.4 67.2,34.4 C70.3,34.6 73,37.3 73,40.6 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M73,36.8 C73,33.5 70.3,30.8 67,30.8 C64,30.8 61.6,33 61.1,35.8 L58.4,35.8 L58.4,31.2 C58.4,27.9 55.7,25.2 52.4,25.2 C49.1,25.2 46.4,27.9 46.4,31.2 L46.4,35.7 L43.9,35.7 L43.9,26.4 C43.9,22.8 41,19.9 37.4,19.9 C33.8,19.9 30.9,22.8 30.9,26.4 L30.9,35.6 L28.7,35.6 L28.7,8.2 C28.7,4.6 25.8,1.7 22.2,1.7 C18.6,1.7 15.7,4.6 15.7,8.2 L15.7,47.7 L15.7,50.9 L15.7,64.5 L13.4,64.5 L13.4,54.9 C13.4,47.8 7.6,42 0.5,42 L0.5,65.7 C0.5,67.1 0.9,68.3 1.7,69.4 C1.7,69.4 1.7,69.5 1.7,69.5 C4.1,73.3 17.5,84.7 23.6,89.9 C25.6,91.6 28.2,92.5 30.8,92.5 L57.1,92.5 C65.8,92.5 72.9,85.4 72.9,76.7 L72.9,36.8 L73,36.8 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </g>
    </g>
</svg>
                        </figure>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Explore all sections</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                  <div class="row">
                    <div class="col-sm-4">
                      <a href="<?= base_url() ?>sections.html#headers" class="dropdown-item">Headers</a>
                      <a href="<?= base_url() ?>sections.html#footers" class="dropdown-item">Footers</a>
                      <a href="<?= base_url() ?>sections.html#blog" class="dropdown-item">Blog</a>
                      <a href="<?= base_url() ?>sections.html#call-to-action" class="dropdown-item">Call to action</a>
                      <a href="<?= base_url() ?>sections.html#clients" class="dropdown-item">Clients</a>
                      <a href="<?= base_url() ?>sections.html#collapse" class="dropdown-item">Collapse</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="<?= base_url() ?>sections.html#covers" class="dropdown-item">Covers</a>
                      <a href="<?= base_url() ?>sections.html#features" class="dropdown-item">Features</a>
                      <a href="<?= base_url() ?>sections.html#milestone" class="dropdown-item">Milestone</a>
                      <a href="<?= base_url() ?>sections.html#pricing" class="dropdown-item">Pricing</a>
                      <a href="<?= base_url() ?>sections.html#projects" class="dropdown-item">Projects</a>
                      <a href="<?= base_url() ?>sections.html#subscribe" class="dropdown-item">Subscribe</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="<?= base_url() ?>sections.html#swiper" class="dropdown-item">Swiper</a>
                      <a href="<?= base_url() ?>sections.html#tables" class="dropdown-item">Tables</a>
                      <a href="<?= base_url() ?>sections.html#team" class="dropdown-item">Team</a>
                      <a href="<?= base_url() ?>sections.html#testimonials" class="dropdown-item">Testimonials</a>
                      <a href="<?= base_url() ?>sections.html#video" class="dropdown-item">Video</a>
                    </div>
                  </div>
                </div>
                <div class="delimiter-top py-3 px-4">
                  <span class="badge badge-soft-success">Yaass!</span>
                  <p class="mt-2 mb-0">
                    Explore, switch, customize any component, section or page and make your website rich its full potential.
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="shop-product.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="<?= base_url() ?>docs/index.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <svg width="145px" height="149px" viewBox="0 0 145 149" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>DOC_File</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="DOC_File" transform="translate(1.000000, 1.000000)">
            <path d="M140.8,36.4 L142,139.8 C142,143.3 139.2,146.1 135.7,146.1 L35.2,146.1 C31.7,146.1 28.9,143.3 28.9,139.8 L28.9,6.9 C28.9,3.4 31.7,0.6 35.2,0.6 L108.1,0.6 L140.8,36.4 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M63,106.3 L123.3,106.3" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M45.1,106.3 L55.7,106.3" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M96.3,90 L123.2,90" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M45.6,90 L84.9,90" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M113.3,73.8 L123.7,73.8" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M46.1,73.8 L103.6,73.8" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M74.2,124.1 L77.7,124.1" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M46.1,124.1 L67.5,124.1" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M87.2,57.5 L124.2,57.5" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M46.7,57.5 L75.3,57.5" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M47.2,20.3 L95.4,20.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M47.2,31.8 L65.6,31.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M108,0.7 L108,29.2 C108,33.1 111.5,36.5 115.4,36.5 L140.7,36.5" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M111.6,3.5 L111.6,29.4 C111.6,33 114.8,36 118.3,36 L141.3,36" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M111.6,8.7 L111.6,34.6 C111.6,38.2 114.8,41.2 118.3,41.2 L141.3,41.2 L141.3,36" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M108,22.9 L108,29.1 C108,33 111.5,36.4 115.4,36.4 L140.7,36.4" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M108,0.7 L108,16" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M28.8,34.6 L28.8,33.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M28.8,25.8 L28.8,6.9 C28.8,3.4 31.6,0.6 35.1,0.6 L108,0.6 L140.7,36.4 L141.9,139.8 C141.9,143.3 139.1,146.1 135.6,146.1 L35.1,146.1 C31.6,146.1 28.8,143.3 28.8,139.8 L28.8,50.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M59.4,84.8 L5.6,84.8 C2.8,84.8 0.5,82.5 0.5,79.7 L0.5,55.2 C0.5,52.4 2.8,50.1 5.6,50.1 L59.4,50.1 C62.2,50.1 64.5,52.4 64.5,55.2 L64.5,79.7 C64.5,82.5 62.2,84.8 59.4,84.8 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M60,84.8 L11.7,84.8 C9.2,84.8 7.3,82.8 7.3,80.4 L7.3,59.4 C7.3,56.9 9.3,55 11.7,55 L60,55 C62.5,55 64.4,57 64.4,59.4 L64.4,80.4 C64.5,82.8 62.5,84.8 60,84.8 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
            <path d="M59.4,84.8 L5.6,84.8 C2.8,84.8 0.5,82.5 0.5,79.7 L0.5,55.2 C0.5,52.4 2.8,50.1 5.6,50.1 L59.4,50.1 C62.2,50.1 64.5,52.4 64.5,55.2 L64.5,79.7 C64.5,82.5 62.2,84.8 59.4,84.8 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <text id="D" class="fill-primary" font-family="Helvetica" font-size="20.9718" font-weight="normal">
                <tspan x="8.6125" y="74.8013">D</tspan>
            </text>
            <text id="O" class="fill-primary" font-family="Helvetica" font-size="20.9718" font-weight="normal">
                <tspan x="25.2258" y="74.8013">O</tspan>
            </text>
            <text id="C" class="fill-primary" font-family="Helvetica" font-size="20.9718" font-weight="normal">
                <tspan x="42.8938" y="74.8013">C</tspan>
            </text>
        </g>
    </g>
</svg>
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Documentation</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url() ?>docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <svg width="143px" height="151px" viewBox="0 0 143 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid" style="height: 50px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Mobile_UI</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Mobile_UI" transform="translate(2.000000, 1.000000)">
            <path d="M16.8,51.5 C14.3,46.7 12.8,41.2 12.8,35.4 C12.8,16.3 28.3,0.8 47.4,0.8 C60.6,0.8 72,8.2 77.9,19" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1,7"></path>
            <circle id="Oval" stroke-width="3" class="stroke-primary-300 fill-neutral" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="20.1" cy="13.9" r="4.6"></circle>
            <g id="Group" transform="translate(0.000000, 147.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M21.7,0.8 L0,0.8" id="Shape"></path>
                <path d="M27,0.8 L26,0.8" id="Shape"></path>
                <path d="M107.3,0.8 L32.3,0.8" id="Shape"></path>
                <path d="M132.9,0.8 L111.6,0.8" id="Shape"></path>
                <path d="M138.4,0.8 L136.8,0.8" id="Shape"></path>
            </g>
            <g id="Group" transform="translate(25.000000, 24.000000)">
                <path d="M90.7,115 C90.7,119.9 86.7,123.9 81.8,123.9 L8.9,123.9 C4,123.9 -4.54747351e-13,119.9 -4.54747351e-13,115 L-4.54747351e-13,9.3 C-4.54747351e-13,4.4 4,0.4 8.9,0.4 L81.8,0.4 C86.7,0.4 90.7,4.4 90.7,9.3 L90.7,115 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M90.7,9.2 L90.7,115 C90.7,119.9 86.7,123.9 81.8,123.9 L8.9,123.9 C4,123.9 -4.54747351e-13,119.9 -4.54747351e-13,115 L-4.54747351e-13,9.3 C-4.54747351e-13,4.4 4,0.4 8.9,0.4 L81.8,0.4 C86.8,0.3 90.7,4.3 90.7,9.2 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
                <rect id="Rectangle-path" class="fill-neutral" fill-rule="nonzero" x="0.1" y="10.2" width="90.7" height="99.5"></rect>
                <path d="M0.1,11 L0.1,9.2 C0.1,4.3 4.1,0.3 9,0.3 L81.9,0.3 C86.8,0.3 90.8,4.3 90.8,9.2 L90.8,115 C90.8,119.9 86.8,123.9 81.9,123.9 L9,123.9 C4.1,123.9 0.1,119.9 0.1,115 L0.1,25.4" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M0.1,15.7 L0.1,15" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <circle id="Oval" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" cx="45.9" cy="116.6" r="3"></circle>
                <path d="M83.5,10.6 L90.1,10.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M6.3,10.6 L78.2,10.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M75.1,109.3 L0.7,109.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M90.1,109.3 L80.6,109.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M42.9,5.5 L50.7,5.5" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M37.8,5.5 L38.4,5.5" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group" transform="translate(48.000000, 56.000000)" fill-rule="nonzero">
                <path d="M39.5,60.1 L5.6,60.1 C3.6,60.1 2,58.5 2,56.5 L2,7.8 C2,5.8 3.6,4.2 5.6,4.2 L39.5,4.2 C41.5,4.2 43.1,5.8 43.1,7.8 L43.1,56.5 C43.1,58.5 41.5,60.1 39.5,60.1 Z" id="Shape" class="fill-primary-200"></path>
                <path d="M0.4,9.2 L0.4,3.6 C0.4,1.9 1.8,0.5 3.5,0.5 L41.6,0.5 C43.3,0.5 44.7,1.9 44.7,3.6 L44.7,53.4 C44.7,55.1 43.3,56.5 41.6,56.5 L3.5,56.5 C1.8,56.5 0.4,55.1 0.4,53.4 L0.4,22.7" id="Shape" stroke-width="3" class="stroke-primary-300 fill-neutral" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M0.4,14.3 L0.4,13.7" id="Shape" stroke-width="3" class="stroke-primary-300 fill-neutral" stroke-linecap="round" stroke-linejoin="round"></path>
                <circle id="Oval" stroke-width="3" class="stroke-primary-300 fill-neutral" stroke-linecap="round" stroke-linejoin="round" cx="22.5" cy="19.9" r="7.3"></circle>
                <path d="M12.7,38.9 L32.4,38.9" id="Shape" stroke-width="3" class="stroke-primary-300 fill-neutral" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18.6,45.5 L26.5,45.5" id="Shape" stroke-width="3" class="stroke-primary-300 fill-neutral" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group" transform="translate(101.000000, 59.000000)" fill-rule="nonzero" class="stroke-primary-300 fill-neutral" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M0.9,33.9 L0.9,3.9 C0.9,2.2 2.3,0.8 4,0.8 L35,0.8 C36.7,0.8 38.1,2.2 38.1,3.9 L38.1,44.7 C38.1,46.4 36.7,47.8 35,47.8 L4,47.8 C2.3,47.8 0.9,46.4 0.9,44.7 L0.9,39.9" id="Shape"></path>
                <circle id="Oval" cx="19.5" cy="17.1" r="6.1"></circle>
                <path d="M11.2,33.1 L27.8,33.1" id="Shape"></path>
                <path d="M16.2,38.6 L22.8,38.6" id="Shape"></path>
            </g>
            <g id="Group" transform="translate(1.000000, 59.000000)" fill-rule="nonzero" class="stroke-primary-300 fill-neutral" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M0.2,33.9 L0.2,3.9 C0.2,2.2 1.6,0.8 3.3,0.8 L34.3,0.8 C36,0.8 37.4,2.2 37.4,3.9 L37.4,44.7 C37.4,46.4 36,47.8 34.3,47.8 L3.3,47.8 C1.6,47.8 0.2,46.4 0.2,44.7 L0.2,39.9" id="Shape"></path>
                <circle id="Oval" cx="18.8" cy="17.1" r="6.1"></circle>
                <path d="M10.5,33.1 L27.1,33.1" id="Shape"></path>
                <path d="M15.5,38.6 L22.1,38.6" id="Shape"></path>
            </g>
        </g>
    </g>
</svg>
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Components</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                  <div class="row">
                    <div class="col-sm-6">
                      <a href="<?= base_url() ?>docs/getting-started/installation.html" class="dropdown-item">Installation</a>
                      <a href="<?= base_url() ?>docs/getting-started/file-structure.html" class="dropdown-item">File structure</a>
                      <a href="<?= base_url() ?>docs/getting-started/build-tools.html" class="dropdown-item">Build tools</a>
                      <a href="<?= base_url() ?>docs/getting-started/customization.html" class="dropdown-item">Customization</a>
                    </div>
                    <div class="col-sm-6">
                      <a href="<?= base_url() ?>docs/getting-started/plugins.html" class="dropdown-item">Using plugins</a>
                      <a href="<?= base_url() ?>docs/components/index.html" class="dropdown-item">Components</a>
                      <a href="<?= base_url() ?>docs/plugins/animate.html" class="dropdown-item">Plugins</a>
                      <a href="<?= base_url() ?>docs/support.html" class="dropdown-item">Support</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item d-lg-none d-xl-block">
              <a class="nav-link" href="<?= base_url() ?>docs/changelog.html" target="_blank">What's new</a>
            </li>
            <li class="nav-item mr-0">
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="" data-original-title="Go to Bootstrap Themes">
                <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                <span class="btn-inner--text">Purchase now</span>
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
            <input type="text" class="form-control" placeholder="Type and hit enter ...">
          </div>
        </div>
      </form>
      <div class="omnisearch-suggestions">
        <h6 class="heading">Search Suggestions</h6>
        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a class="list-link" href="shop-product.html#">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="shop-product.html#">
                  <i class="far fa-search"></i>
                  <span>iphone 8</span> in Smartphones
                </a>
              </li>
              <li>
                <a class="list-link" href="shop-product.html#">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="shop-product.html#">
                  <i class="far fa-search"></i>
                  <span>beats pro solo 3</span> in Headphones
                </a>
              </li>
              <li>
                <a class="list-link" href="shop-product.html#">
                  <i class="far fa-search"></i>
                  <span>smasung galaxy 10</span> in Phones
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content">
    <section class="py-2 delimiter-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h6 class="mb-0">Macbook Pro Touch Bar</h6>
          </div>
          <div class="col-md-6">
            <nav class="nav justify-content-md-end mb-0">
              <a href="shop-product.html#" class="nav-link text-sm pl-0">Overview</a>
              <a href="shop-product.html#" class="nav-link text-sm">Tech specs</a>
              <a href="shop-product.html#" class="nav-link text-sm pr-0">Setup &amp; Tips</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="slice">
      <div class="container">
        <div class="row row-grid">
          <div class="col-lg-6">
            <div data-toggle="sticky" data-sticky-offset="30" style="" class="">
              <a href="<?= base_url() ?>assets/img/theme/light/shop-product-lg-2.jpg" data-fancybox="">
                <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/light/shop-product-lg-2.jpg" class="img-fluid">
              </a>
              <div class="mt-4 text-center">
                <a href="<?= base_url() ?>assets/img/theme/light/shop-product-lg-2.jpg" data-fancybox="">View gallery</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="pl-lg-5">
              <!-- Product title -->
              <h5 class="h4">Macbook Pro Touch Bar</h5>
              <h6 class="text-sm">Processor 256GB Storage</h6>
              <!-- Rating -->
              <div class="row align-items-center">
                <div class="col-6">
                  <span class="static-rating static-rating-sm d-block"><i class="star far fa-star voted"></i>
                    <i class="star far fa-star voted"></i>
                    <i class="star far fa-star voted"></i>
                    <i class="star far fa-star voted"></i>
                    <i class="star far fa-star"></i></span>
                </div>
                <div class="col-6 text-right">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                      <span class="badge badge-pill badge-soft-info">ID: #548970</span>
                    </li>
                    <li class="list-inline-item">
                      <span class="badge badge-pill badge-soft-success">In stock</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Description -->
              <div class="py-4 my-4 border-top border-bottom">
                <h6 class="text-sm">Description:</h6>
                <p class="text-sm mb-0">
                  Wherever your ideas take you, you’ll get there faster than ever with high‑performance processors and memory, advanced graphics, blazing‑fast storage, and more.
                </p>
              </div>
              <dl class="row">
                <dt class="col-sm-3"><span class="h6 text-sm mb-0">Display</span></dt>
                <dd class="col-sm-9"><span class="text-sm">13.3-inch LED-backlit display with IPS</span></dd>
                <dt class="col-sm-3"><span class="h6 text-sm mb-0">Processor</span></dt>
                <dd class="col-sm-9"><span class="text-sm">2.3GHz dual-core Intel Core i5, Turbo Boost up to 3.6GHz</span></dd>
                <dt class="col-sm-3"><span class="h6 text-sm mb-0">Camera</span></dt>
                <dd class="col-sm-9"><span class="text-sm">720p FaceTime HD camera</span></dd>
                <dt class="col-sm-3"><span class="h6 text-sm mb-0">Memory</span></dt>
                <dd class="col-sm-9"><span class="text-sm">8 GB RAM or 16 GB RAM</span></dd>
                <dt class="col-sm-3"><span class="h6 text-sm mb-0">Graphics</span></dt>
                <dd class="col-sm-9"><span class="text-sm">Intel Iris Plus Graphics 640</span></dd>
              </dl>
              <!-- Size -->
              <div class=" py-4 my-4 border-top border-bottom">
                <!-- Processor -->
                <h6>Processor</h6>
                <a href="shop-product.html#" class="text-sm">Which processor is right for you?</a>
                <div class="btn-group-toggle btn-group-options row mx-0 mt-3 mb-5" data-toggle="buttons">
                  <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm active">
                    <input type="radio" name="radio-processor" value="1" checked="">
                    2.6GHz 6‑core 8th‑generation Intel Core i7 processor, Turbo Boost up to 4.3GHz
                  </label>
                  <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm">
                    <input type="radio" name="radio-processor" value="2">
                    2.9GHz 6‑core 8th‑generation Intel Core i9 processor, Turbo Boost up to 4.8GHz
                  </label>
                </div>
                <!-- Memory -->
                <h6 class="mt-5">Memory</h6>
                <a href="shop-product.html#" class="text-sm">How much memory is right for you?</a>
                <div class="btn-group-toggle btn-group-options row mx-0 mt-3 mb-5" data-toggle="buttons">
                  <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm">
                    <input type="radio" name="radio-memory" value="1" checked="">
                    16GB 2400MHz DDR4 memory
                  </label>
                  <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm active">
                    <input type="radio" name="radio-memory" value="2">
                    32GB 2400MHz DDR4 memory
                  </label>
                </div>
                <!-- Storage -->
                <h6 class="mt-5">Storage</h6>
                <a href="shop-product.html#" class="text-sm">How much storage is right for you?</a>
                <div class="btn-group-toggle btn-group-options row mx-0 mt-3 mb-5" data-toggle="buttons">
                  <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm active">
                    <input type="radio" name="radio-storage" value="1" checked="">
                    512GB SSD storage
                  </label>
                  <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm">
                    <input type="radio" name="radio-storage" value="2">
                    1TB SSD storage
                  </label>
                  <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm">
                    <input type="radio" name="radio-storage" value="3">
                    2TB SSD storage
                  </label>
                  <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm">
                    <input type="radio" name="radio-storage" value="4">
                    4TB SSD storage
                  </label>
                </div>
                <div class="row align-items-center">
                  <div class="col-sm-6 mb-4 mb-sm-0">
                    <span class="d-block h3 mb-0">$2,600</span>
                    <a href="shop-product.html#" class="text-sm">Choose a financing option</a>
                  </div>
                  <div class="col-sm-6 text-sm-right">
                    <!-- Add to cart -->
                    <button type="button" class="btn btn-primary btn-icon">
                      <span class="btn-inner--icon"><i class="far fa-shopping-bag"></i></span>
                      <span class="btn-inner--text">Add to bag</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice slice-lg delimiter-top" id="sct-suggested-products">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class="h6">Suggested products<i class="far fa-angle-down text-xs ml-3"></i></h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
              <div class="card-image">
                <a href="shop-product.html#">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/light/product-1.png" class="img-center img-fluid">
                </a>
              </div>
              <div class="card-body text-center pt-0">
                <h6><a href="shop-product.html#">Home Base</a></h6>
                <p class="text-sm">
                  Customize your home experience with this product.
                </p>
                <span class="card-price">$129 USD</span>
                <div class="product-colors mt-3">
                  <a href="shop-product.html#" style="background-color: #59ad46;" data-toggle="tooltip" data-original-title="Green"></a>
                  <a href="shop-product.html#" style="background-color: #04050a;" data-toggle="tooltip" data-original-title="Black"></a>
                  <a href="shop-product.html#" style="background-color: #62aedd;" data-toggle="tooltip" data-original-title="Blueish"></a>
                  <a href="shop-product.html#" style="background-color: #e84385;" data-toggle="tooltip" data-original-title="Pink"></a>
                </div>
              </div>
              <div class="actions card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Add to cart">
                  <i class="far fa-shopping-bag"></i>
                </button>
                <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Wishlist">
                  <i class="far fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
              <div class="card-image">
                <a href="shop-product.html#">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/light/product-2.png" class="img-center img-fluid">
                </a>
              </div>
              <div class="card-body text-center pt-0">
                <h6><a href="shop-product.html#">Home Controller</a></h6>
                <p class="text-sm">
                  Customize your home experience with this product.
                </p>
                <span class="card-price">$49 USD</span>
                <div class="product-colors mt-3">
                  <a href="shop-product.html#" style="background-color: #59ad46;" data-toggle="tooltip" data-original-title="Green"></a>
                  <a href="shop-product.html#" style="background-color: #04050a;" data-toggle="tooltip" data-original-title="Black"></a>
                  <a href="shop-product.html#" style="background-color: #62aedd;" data-toggle="tooltip" data-original-title="Blueish"></a>
                  <a href="shop-product.html#" style="background-color: #e84385;" data-toggle="tooltip" data-original-title="Pink"></a>
                </div>
              </div>
              <div class="actions card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Add to cart">
                  <i class="far fa-shopping-bag"></i>
                </button>
                <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Wishlist">
                  <i class="far fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
              <div class="card-image">
                <a href="shop-product.html#">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/light/product-3.png" class="img-center img-fluid">
                </a>
              </div>
              <div class="card-body text-center pt-0">
                <h6><a href="shop-product.html#">Adapt Earphones</a></h6>
                <p class="text-sm">
                  Customize your home experience with this product.
                </p>
                <span class="card-price">$65 USD</span>
                <div class="product-colors mt-3">
                  <a href="shop-product.html#" style="background-color: #59ad46;" data-toggle="tooltip" data-original-title="Green"></a>
                  <a href="shop-product.html#" style="background-color: #04050a;" data-toggle="tooltip" data-original-title="Black"></a>
                  <a href="shop-product.html#" style="background-color: #62aedd;" data-toggle="tooltip" data-original-title="Blueish"></a>
                  <a href="shop-product.html#" style="background-color: #e84385;" data-toggle="tooltip" data-original-title="Pink"></a>
                </div>
              </div>
              <div class="actions card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Add to cart">
                  <i class="far fa-shopping-bag"></i>
                </button>
                <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Wishlist">
                  <i class="far fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
              <div class="card-image">
                <a href="shop-product.html#">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/light/product-4.png" class="img-center img-fluid">
                </a>
              </div>
              <div class="card-body text-center pt-0">
                <h6><a href="shop-product.html#">Smart Pixel 3</a></h6>
                <p class="text-sm">
                  Customize your home experience with this product.
                </p>
                <span class="card-price">$299 USD</span>
                <div class="product-colors mt-3">
                  <a href="shop-product.html#" style="background-color: #59ad46;" data-toggle="tooltip" data-original-title="Green"></a>
                  <a href="shop-product.html#" style="background-color: #04050a;" data-toggle="tooltip" data-original-title="Black"></a>
                  <a href="shop-product.html#" style="background-color: #62aedd;" data-toggle="tooltip" data-original-title="Blueish"></a>
                  <a href="shop-product.html#" style="background-color: #e84385;" data-toggle="tooltip" data-original-title="Pink"></a>
                </div>
              </div>
              <div class="actions card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Add to cart">
                  <i class="far fa-shopping-bag"></i>
                </button>
                <button type="button" class="action-item" data-toggle="tooltip" data-original-title="Wishlist">
                  <i class="far fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice slice-xl bg-cover bg-size--cover" style="background-image: url('<?= base_url() ?>assets/img/backgrounds/img-15.jpg'); background-position: center center;">
      <span class="mask bg-dark opacity-2"></span>
      <div class="container py-6">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-xl-7 text-center">
            <div class="mb-5">
              <h1 class="text-white">Try a new experience</h1>
              <p class="lead text-white mt-2">You get all Bootstrap components fully customized. Besides, you receive another numerous plugins out of the box and ready to use.</p>
            </div>
            <a href="shop-product.html#" class="btn btn-white btn-icon rounded-pill shadow hover-shadow-lg hover-translate-y-n3">
              <span class="btn-inner--text">Get started</span>
              <span class="btn-inner--icon"><i class="far fa-angle-right"></i></span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="slice-sm bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="px-4 py-3 text-lg-center">
              <h6 class="text-sm text-white text-uppercase ls-1">Free shipping in 48/72H</h6>
              <p class="text-white opacity-7">
                Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod
              </p>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="px-4 py-3 text-lg-center">
              <h6 class="text-sm text-white text-uppercase ls-1">Free returns</h6>
              <p class="text-white opacity-7">
                Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="px-4 py-3 text-lg-center">
              <h6 class="text-sm text-white text-uppercase ls-1">Secure payment</h6>
              <ul class="list-inline mt-2">
                <li class="list-inline-item">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/cards/visa.png" width="30">
                </li>
                <li class="list-inline-item">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/cards/mastercard.png" width="30">
                </li>
                <li class="list-inline-item">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/cards/maestro.png" width="30">
                </li>
                <li class="list-inline-item">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets/img/icons/cards/paypal.png" width="30">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer id="footer-main">
    <div class="footer footer-dark bg-dark">
      <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="<?= base_url() ?>index.html">
              <img src="<?= base_url() ?>assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
            </a>
            <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">Account</h6>
            <ul class="list-unstyled">
              <li><a href="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/pages/account-profile.html">Profile</a></li>
              <li><a href="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/pages/account-settings.html">Settings</a></li>
              <li><a href="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/pages/account-billing.html">Billing</a></li>
              <li><a href="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/pages/account-notifications.html">Notifications</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">About</h6>
            <ul class="list-unstyled text-small">
              <li><a href="shop-product.html#">Services</a></li>
              <li><a href="shop-product.html#">Contact</a></li>
              <li><a href="shop-product.html#">Careers</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Company</h6>
            <ul class="list-unstyled">
              <li><a href="shop-product.html#">Terms</a></li>
              <li><a href="shop-product.html#">Privacy</a></li>
              <li><a href="shop-product.html#">Support</a></li>
            </ul>
          </div>
        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
          <div class="col-md-6">
            <div class="copyright text-sm font-weight-bold text-center text-md-left">
              © 2018-2019 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="customizer">
    <a href="shop-product.html#modal-customizer" class="btn btn-warning btn-lg btn-icon-only rounded-circle text-white hover-scale-110 shadow-lg mr-3" data-toggle="modal">
      <span class="btn-inner--icon"><i class="far fa-palette"></i></span>
    </a>
    <a href="<?= base_url() ?>docs/support.html" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg mr-3 d-none d-lg-inline-block">
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
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="" data-original-title="Close Customizer">
            <span aria-hidden="true">×</span>
          </button>
          <div class="text-center mx-auto mt-4 mb-5" style="width: 80px;">
            <svg width="100px" height="139px" viewBox="0 0 100 139" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="injected-svg svg-inject img-fluid">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Click</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Click" transform="translate(2.000000, 2.000000)">
            <g id="Group" transform="translate(12.000000, 29.000000)">
                <path d="M83.7,41.8 C83.7,38 80.6,34.9 76.8,34.9 C73.4,34.9 70.5,37.4 70,40.7 L66.9,40.7 L66.9,35.4 C66.9,31.6 63.8,28.5 60,28.5 C56.2,28.5 53.1,31.6 53.1,35.4 L53.1,40.6 L50.3,40.6 L50.3,29.9 C50.3,25.8 47,22.5 42.9,22.5 C38.8,22.5 35.5,25.8 35.5,29.9 L35.5,40.5 L33,40.5 L33,8.9 C33,4.8 29.7,1.5 25.6,1.5 C21.5,1.5 18.2,4.8 18.2,8.9 L18.2,54.4 L18.2,58.1 L18.2,73.8 L15.5,73.8 L15.5,62.7 C15.5,54.5 8.8,47.8 0.6,47.8 L0.6,75.1 C0.6,76.7 1.1,78.1 1.9,79.4 C1.9,79.4 1.9,79.5 1.9,79.5 C4.7,83.8 20.1,97 27.2,103 C29.5,105 32.5,106 35.5,106 L65.8,106 C75.9,106 84,97.8 84,87.8 L84,41.8 L83.7,41.8 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M83.7,40.9 L83.7,86.7 C83.7,96.8 75.5,104.9 65.5,104.9 L35.2,104.9 C32.1,104.9 29.2,103.8 26.9,101.9 C19.8,95.9 4.4,82.7 1.6,78.4 C1.6,78.4 1.6,78.3 1.6,78.3 C0.8,77.1 0.3,75.6 0.3,74 L0.3,46.7 C8.5,46.7 15.2,53.4 15.2,61.6 L15.2,72.7 L17.9,72.7 L17.9,7.8 C17.9,3.7 21.2,0.4 25.3,0.4 C29.4,0.4 32.7,3.7 32.7,7.8 L32.7,39.4 L35.2,39.4 L35.2,28.8 C35.2,24.7 38.5,21.4 42.6,21.4 C46.7,21.4 50,24.7 50,28.8 L50,39.5 L52.8,39.5 L52.8,34.3 C52.8,30.5 55.9,27.4 59.7,27.4 C63.5,27.4 66.6,30.5 66.6,34.3 L66.6,39.6 L69.7,39.6 C70.3,36.3 73.1,33.8 76.5,33.8 C80.6,34 83.7,37.1 83.7,40.9 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M83.7,46.3 L83.7,86.8 C83.7,96.9 75.5,105 65.5,105 L35.2,105 C32.1,105 29.2,103.9 26.9,102 C19.8,96 4.4,82.8 1.6,78.5 C1.6,78.5 1.6,78.4 1.6,78.4 C0.8,77.2 0.3,75.7 0.3,74.1 L0.3,52.1 C8.5,52.1 15.2,58.8 15.2,67 L15.2,78.1 L17.9,78.1 L17.9,13.2 C17.9,9.1 21.2,5.8 25.3,5.8 C29.4,5.8 32.7,9.1 32.7,13.2 L32.7,44.8 L35.2,44.8 L35.2,34.2 C35.2,30.1 38.5,26.8 42.6,26.8 C46.7,26.8 50,30.1 50,34.2 L50,44.9 L52.8,44.9 L52.8,39.5 C52.9,35.7 55.9,32.7 59.7,32.7 C63.5,32.7 66.6,35.8 66.6,39.6 C66.6,39.6 66.6,39.6 66.6,39.6 L66.6,44.9 L69.7,44.9 C70.3,41.6 73.1,39.1 76.5,39.1 C80.6,39.3 83.7,42.4 83.7,46.3 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M83.7,41.7 C83.6,37.9 80.5,34.9 76.8,34.9 C73.4,34.9 70.5,37.4 70,40.7 L66.9,40.7 L66.9,35.4 C66.9,31.6 63.8,28.5 60,28.5 C56.2,28.5 53.1,31.6 53.1,35.4 L53.1,40.6 L50.3,40.6 L50.3,29.9 C50.3,25.8 47,22.5 42.9,22.5 C38.8,22.5 35.5,25.8 35.5,29.9 L35.5,40.5 L33,40.5 L33,8.9 C33,4.8 29.7,1.5 25.6,1.5 C21.5,1.5 18.2,4.8 18.2,8.9 L18.2,16.4" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M17.8,34.1 L17.8,54.2 L17.8,57.9 L17.8,73.6 L15.1,73.6 L15.1,62.5 C15.1,54.3 8.4,47.6 0.2,47.6 L0.2,74.9 C0.2,76.5 0.7,77.9 1.5,79.2 C1.5,79.2 1.5,79.3 1.5,79.3 C4.3,83.6 19.7,96.8 26.8,102.8 C29.1,104.8 32.1,105.8 35.1,105.8 L65.4,105.8 C75.5,105.8 83.6,97.6 83.6,87.6 L83.6,52.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M17.8,22.4 L17.8,23.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group" class="stroke-primary" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                <path d="M35.8,0.3 L35.8,14.1" id="Shape"></path>
                <path d="M10.8,10.9 L20.6,20.6" id="Shape"></path>
                <path d="M0.7,36 L14.5,36" id="Shape"></path>
                <path d="M57.6,35.4 L71.4,35.4" id="Shape"></path>
                <path d="M11.2,60.9 L21,51.1" id="Shape"></path>
                <path d="M51.1,20.2 L60.9,10.5" id="Shape"></path>
            </g>
        </g>
    </g>
</svg>
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
              <input type="radio" name="skin" value="default" checked="">
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
              <input type="radio" name="mode" value="light" checked="">
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
  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="<?= base_url() ?>assets/js/purpose.core.js"></script>
  <!-- Page JS -->
  <script src="<?= base_url() ?>assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
  <script src="<?= base_url() ?>assets/libs/swiper/dist/js/swiper.min.js"></script>
  <!-- Purpose JS -->
  <script src="<?= base_url() ?>assets/js/purpose.js"></script><div class="mask-body mask-body-light d-xl-none" data-action="sidenav-unpin" data-target="undefined"></div>
  <!-- Demo JS - remove it when starting your project -->
  <script src="<?= base_url() ?>assets/js/demo.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-104437451-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-104437451-1');
  </script>


</body></html>