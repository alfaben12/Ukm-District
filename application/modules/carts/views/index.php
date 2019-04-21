<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Keranjang</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?= site_url('carts') ?>">Keranjang</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <form id="formCart">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="resultCart">
                            <!-- RENDER -->
                        </tbody>
                    </table>
                <form>
                <table class="table">
                    <tbody>
                        <tr class="bottom_button">
                            <td>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="cupon_text d-flex align-items-center">
                                    <input type="text" placeholder="Coupon Code">
                                    <a class="primary-btn" href="javascript:void(0)" onclick="processGetCoupon()">Apply</a>
                                    <a href="javascript:void(0)" onclick="processUpdate()" class="gray_btn">Update</a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td colspan="2">
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5 id="totalAmount"></h5>
                            </td>
                        </tr>
                        <tr class="shipping_area">
                            <td>

                            </td>
                            <td colspan="2">
                                <h5>Pengiriman</h5>
                            </td>
                            <td>
                                <div class="shipping_box">
                                    <ul class="list">
                                        <li class="active"><a href="#">Pengiriman Lokal: Rp. 0</a></li>
                                    </ul>
                                    <!-- <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                    <select class="shipping_select" style="display: none;">
                                        <option value="1">Bangladesh</option>
                                        <option value="2">India</option>
                                        <option value="4">Pakistan</option>
                                    </select>
                                    <div class="nice-select shipping_select" tabindex="0"><span class="current">Bangladesh</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Bangladesh</li>
                                            <li data-value="2" class="option">India</li>
                                            <li data-value="4" class="option">Pakistan</li>
                                        </ul>
                                    </div>
                                    <select class="shipping_select" style="display: none;">
                                        <option value="1">Select a State</option>
                                        <option value="2">Select a State</option>
                                        <option value="4">Select a State</option>
                                    </select>
                                    <div class="nice-select shipping_select" tabindex="0"><span class="current">Select a State</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Select a State</li>
                                            <li data-value="2" class="option">Select a State</li>
                                            <li data-value="4" class="option">Select a State</li>
                                        </ul>
                                    </div>
                                    <input type="text" placeholder="Postcode/Zipcode">
                                    <a class="gray_btn" href="#">Update Details</a> -->
                                </div>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="<?= site_url('shops') ?>">Lanjutkan belanja</a>
                                    <a class="primary-btn" href="<?= site_url('confirmations') ?>">Proses Checkout</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '<?= site_url() ?>carts/getAllCart',
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#totalCart").empty();
                $("#resultCart").empty();
                $("#totalAmount").empty();
            },
            complete: function() {},
            success: function(response) {
                $("#totalCart").text(response.data.totalCart);
                $("#totalAmount").text(response.data.totalAmount);
                for (var k in response.data.cart) {
                    var cart =
                        '<tr>' +
                        '<td>' +
                        '<div class="media">' +
                        '<div class="d-flex">' +
                        '<img src="'+ response.data.cart[k].image +'" alt="" width="150" height="100">' +
                        '</div>' +
                        '<div class="media-body">' +
                        '<p>'+ response.data.cart[k].name +'</p>' +
                        '</div>' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<h5>'+ response.data.cart[k].price +'</h5>' +
                        '</td>' +
                        '<td>' +
                        '<div class="product_count">' +
                        '<input type="hidden" name="rowID[]" value="'+ response.data.cart[k].rowid +'" title="Row ID:" class="input-text">' +
                        '<input type="hidden" name="productID[]" value="'+ response.data.cart[k].id +'" title="Row ID:" class="input-text">' +
                        '<input type="number" name="qty[]" maxlength="12" value="'+ response.data.cart[k].qty +'" title="Quantity:" class="input-text">' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<h5>'+ response.data.cart[k].subtotal +'</h5>' +
                        '</td>' +
                        '</tr>';
                    $("#resultCart").append(cart).fadeIn(500);
                }
            }
        });
    });

    function processUpdate(){
		$.ajax({
			url:  '<?= site_url() ?>carts/proccessUpdate',
			data: $("#formCart").serialize(),
			type: 'POST',
			async: true,
			cache: false,
			dataType: 'json',
			beforeSend: function() {
                $("#totalCart").empty();
                $("#resultCart").empty();
			},
			complete: function() {
			},
			success: function(response) {
				$("#totalCart").text(response.data.totalCart);
                $("#totalAmount").text(response.data.totalAmount);
                for (var k in response.data.cart) {
                    var cart =
                        '<tr>' +
                        '<td>' +
                        '<div class="media">' +
                        '<div class="d-flex">' +
                        '<img src="'+ response.data.cart[k].image +'" alt="" width="150" height="100">' +
                        '</div>' +
                        '<div class="media-body">' +
                        '<p>'+ response.data.cart[k].name +'</p>' +
                        '</div>' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<h5>'+ response.data.cart[k].price +'</h5>' +
                        '</td>' +
                        '<td>' +
                        '<div class="product_count">' +
                        '<input type="hidden" name="rowID[]" value="'+ response.data.cart[k].rowid +'" title="Row ID:" class="input-text">' +
                        '<input type="hidden" name="productID[]" value="'+ response.data.cart[k].id +'" title="Row ID:" class="input-text">' +
                        '<input type="number" name="qty[]" maxlength="12" value="'+ response.data.cart[k].qty +'" title="Quantity:" class="input-text">' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<h5>'+ response.data.cart[k].subtotal +'</h5>' +
                        '</td>' +
                        '</tr>';
                    $("#resultCart").append(cart).fadeIn(500);
                }
			}
		});
	}

    function processGetCoupon(){
		$.ajax({
			url:  '<?= site_url() ?>carts/proccessGetCoupon',
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
			}
		});
	}
</script>