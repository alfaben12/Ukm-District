<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="UMKM adalah usaha produktif yang dimiliki perorangan maupun badan usaha yang telah memenuhi kriteria sebagai usaha mikro (Pasuruan).">
  <meta name="author" content="Webpixels">
  <title>UMKM Pasuruan</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url() ?>assets/img/icons/flags/Lambang_Kabupaten_Pasuruan.png" type="image/png">
  <!-- Toastr -->
	
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>


<!-- start content Area -->
  <?= $content_for_layout; ?>
	<!-- End content Area -->
  <footer id="footer-main">
    <div class="footer footer-dark bg-dark">
      <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="<?= base_url() ?>index.html">
              <img src="<?= base_url() ?>assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
            </a>
            <p>Purpose adalah koleksi elemen UI yang unik dan indah yang semuanya fleksibel dan modular. Solusi lengkap dan dapat disesuaikan untuk membangun situs web impian Anda.</p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">Akun</h6>
            <ul class="list-unstyled">
              <li><a href="#">Penjual</a></li>
              <li><a href="#">Pembeli</a></li>
              <li><a href="#">UMKM Admin</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Tentang</h6>
            <ul class="list-unstyled text-small">
              <li><a href="#">Servis</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Karir</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Pengembang</h6>
            <ul class="list-unstyled">
              <li><a href="#">Ketentuan</a></li>
              <li><a href="#">Privasi</a></li>
              <li><a href="#">Dukungan</a></li>
            </ul>
          </div>
        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
          <div class="col-md-6">
            <div class="copyright text-sm font-weight-bold text-center text-md-left">
              &copy; 2018-2019 <a href="javascript:void(0)" class="font-weight-bold" target="_blank">UMKM Pasuruan</a>. All rights reserved.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href=""" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
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
    <a href="<?= site_url('carts') ?>" class="btn btn-warning btn-lg btn-icon-only rounded-circle text-white hover-scale-110 shadow-lg mr-3">
      <span class="btn-inner--icon"><i class="far fa-shopping-basket"><font size="3"><b id="totalCart"><b></font></i></span>
    </a>
  </div>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src='https://malsup.github.io/jquery.blockUI.js'></script>
  <script type="text/javascript">
  function blockUI(){
				$.blockUI({
						message: "<h4>Sedang diproses...</h4>"
				});
      }

      function unblockUI(){
				$.unblockUI();
      }
      $(document).ajaxStart(blockUI()).ajaxStop($.unblockUI);
	
  // Default Configuration
		$(document).ready(function() {
      toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "500",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
      <?php
      if ($this->session->flashdata('message') != '') {
        ?>
      toastr["info"]('<?= $this->session->flashdata('message'); ?>');
        <?php
      }
      ?>

      
		});

    function successNotice(message){
      toastr["success"](message);
    }

    function failNotice(message){
      toastr["info"](message);
    }

    function formErrorNotice(res){
      for (var i in res) {
        toastr["error"](res[i]);
      }
    }

  </script>
  
	<script>
	$(document).ready(function(){
		updateTotalCart();
	});

	function processClearCart(){
		$.ajax({
			url:  '<?= site_url() ?>carts/processClear',
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
				updateTotalCart();
				location.reload();
			}
		});
	}

	function updateTotalCart(){
		$.ajax({
			url:  '<?= site_url() ?>carts/getAllCart',
			type: 'GET',
			async: true,
			cache: false,
			dataType: 'json',
			beforeSend: function() {
				$("#totalCart").empty();
			},
			complete: function() {
			},
			success: function(response) {
				if (response.data.totalCart != 0) {
					$("#totalCart").text(response.data.totalCart);
				}
			}
		});
	}
  </script>
</body>

</html>