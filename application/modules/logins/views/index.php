<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
						<a href="<?= site_url('logins/') ?>">Masuk/Daftar</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url('assets/') ?>img/login.jpg" alt="">
						<div class="hover">
							<h4>Selamat datang di website baru</h4>
							<p>Ada kemajuan yang dibuat dalam sains dan teknologi setiap hari, dan contoh yang baik dari ini adalah</p>
							<a class="primary-btn" href="#" onclick="alert('Belum tersedia.')">Membuat Akun</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Masuk untuk mengakses</h3>
						<form class="row login_form" method="post" id="loginForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" class="primary-btn">Masuk</button>
								<a href="#">Lupa Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--================End Login Box Area =================-->
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