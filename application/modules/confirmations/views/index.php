<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Confirmation</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?= site_url('confirmation') ?>">Confirmation</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<section class="checkout_area section_gap">
        <div class="container">
            <!-- <div class="returning_customer">
                <div class="check_title">
                    <h2>Returning Customer? <a href="#">Click here to login</a></h2>
                </div>
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                    customer, please proceed to the Billing &amp; Shipping section.</p>
                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="placeholder" data-placeholder="Username or Email"></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="password" class="form-control" id="password" name="password">
                        <span class="placeholder" data-placeholder="Password"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">login</button>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option" name="selector">
                            <label for="f-option">Remember me</label>
                        </div>
                        <a class="lost_pass" href="#">Lost your password?</a>
                    </div>
                </form>
            </div>
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Have a coupon? <a href="#">Click here to enter your code</a></h2>
                </div>
                <input type="text" placeholder="Enter coupon code">
                <a class="tp_btn" href="#">Apply Coupon</a>
            </div> -->
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Pengiriman </h3>
                        <form class="row contact_form" id="formConfirmation" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="firstName">
                                <span class="placeholder" data-placeholder="Nama depan"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="lastName">
                                <span class="placeholder" data-placeholder="Nama belakang"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Nama perusahaan">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="phoneNumber">
                                <span class="placeholder" data-placeholder="Nomor HP (WA)"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email">
                                <span class="placeholder" data-placeholder="Alamat Email"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="address">
                                <span class="placeholder" data-placeholder="Alamat (contoh: Jln. ikan piranha no.10 RT001 RW003)"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Kabupaten/Kota"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="district" name="district">
                                <span class="placeholder" data-placeholder="Desa"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Kode pos">
                            </div>
                            <!-- <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Create an account?</label>
                                </div>
                            </div> -->
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Note pesanan</h3>
                                    <!-- <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Ship to a different address?</label> -->
                                </div>
                                <textarea class="form-control" name="note" id="note" rows="1" placeholder="Note pesanan"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <div id="productCart">
                                <!-- RENDER HERE CART -->
                                </div>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span id="totalAmount"></span></a></li>
                                <li><a href="#">Shipping <span>0</span></a></li>
                                <li><a href="#">Total <span id="totalFinalAmount"></span></a></li>
                            </ul>
                            <div id="paymentUkm">
                            <!-- RENDER PAYMENT HERE -->
                            </div>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option8" name="paypal" disabled="" value="0">
                                    <label for="f-option8">Paypal </label>
                                    <img data-cfsrc="img/product/card.jpg" alt="" src="https://colorlib.com/preview/theme/karma/img/product/card.jpg">
                                    <div class="check"></div>
                                </div>
                                <p>Membayar via PayPal belum tersedia.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="agree" value="yes">
                                <label for="f-option4">Saya sudah membaca dan menerima </label>
                                <a href="#">syarat &amp; ketentuan*</a>
                            </div>
                            <a class="primary-btn" id="submitCheckOut" href="javascript:void(0)">Proceed to Paypal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function() {
		var base_url = '<?= base_url() ?>';

        $.ajax({
            url: '<?= site_url() ?>carts/getAllCart',
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#totalAmount").empty();
                $("#totalFinalAmount").empty();
            },
            complete: function() {},
            success: function(response) {
                $("#totalAmount").text(response.data.totalAmount);
                $("#totalFinalAmount").text(response.data.totalAmount);
                for (var k in response.data.cart) {
                    var cart =
                        '<li><a href="' + base_url + 'shops/showProduct?productName=' + response.data.cart[k].name + '">'+ response.data.cart[k].name +' <span class="middle">x '+ response.data.cart[k].qty +'</span> <span class="last">'+ response.data.cart[k].subtotal +'</span></a></li>';
                    $("#productCart").append(cart).fadeIn(500);
                }
            }
        });

        $.ajax({
            url: '<?= site_url() ?>confirmations/getPayment',
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#paymentUkm").empty();
            },
            complete: function() {},
            success: function(response) {
                for (var k in response.data.payment) {
                    if (response.data.payment[k].id == 1) {
                        var checked = 'checked=""';
                    }else{
                        var checked = '';
                    }

                    var payment =
                        '<div class="payment_item">' +
                            '<div class="radion_btn">' +
                                '<input type="radio" id="f-option'+ k +'" value="'+ response.data.payment[k].id +'" name="paymentID" '+ checked +'>' +
                                '<label for="f-option'+ k +'">'+ response.data.payment[k].bank +'</label>' +
                                '<div class="check"></div>' +
                            '</div>' +
                            '<p>'+ response.data.payment[k].description +'</p>' +
                        '</div>';
                    $("#paymentUkm").append(payment).fadeIn(500);
                }
            }
        });

        $("#submitCheckOut").click(function(event) {

            if ($("input[name='agree']:checked").val() != 'yes') {
                alert('Ceklis syarat dan ketentuan.');
            }else{
                var paymentID = $("input[name='paymentID']:checked").val();
				$.ajax({
					url: '<?= site_url() ?>confirmations/processCheckOut',
					data: $("#formConfirmation").serialize() + "&paymentID=" + paymentID,
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
                        // if (response.code == 200) {
						//     window.location = response.redirect;
                        // }else{
                        //     alert(response.message);
                        // }
					}
				});
            }
			event.preventDefault();
		});
    });
    </script>