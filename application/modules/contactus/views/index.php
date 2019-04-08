<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Contact Us</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Contact</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
			<div  class="mapBox">
        <iframe class="h-100 w-100" src="<?= site_url('contactus/maps') ?>" allowfullscreen=""></iframe>
             
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>Sumberejo, Kucur</h6>
							<p>Lapangan segogor.</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">085606330792</a></h6>
							<p><?php date('Y-m-d') ?></p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">support@ukm.com</a></h6>
							<p>Kirim pesan apapun!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan judul" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Masukkan pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->
<script>
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
    </script>