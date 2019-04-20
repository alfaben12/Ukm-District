<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Pembayaran</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?= site_url('confirmations/payment') ?>">Pembayaran</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<section class="tracking_box_area section_gap">
		<div class="container">
			<div class="row order_d_inner" id="orderPaymentInfo">
				<!-- RENDER payment info here -->
			</div>
			<div class="tracking_box_inner">
                <p>To track your order please enter your Order ID in the box below and press the "Track" button. This
                    was given to you on your receipt and in the confirmation email you should have received.</p>
                <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="order" name="order" placeholder="Order ID" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Order ID'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Billing Email Address" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Billing Email Address'">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">Track Order</button>
                    </div>
                </form>
            </div>
		</div>
	</section>
    <script>
    $(document).ready(function() {
        var base_url = '<?= base_url() ?>';
        $.ajax({
            url: '<?= site_url() ?>confirmations/getInfoOrder',
            data: {
                inv: '<?= $this->input->get('inv') ?>',
                orderID: '<?= $this->input->get('orderID') ?>',
                totalCost: '<?= $this->input->get('totalCost') ?>',
                totalItem: '<?= $this->input->get('totalItem') ?>',
                contact: '<?= $this->input->get('contact') ?>'
            },
            type: 'GET',
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $("#orderPaymentInfo").empty();
            },
            complete: function() {},
            success: function(response) {
                var orderPaymentInfo =
                    '<div class="col-lg-4">' +
                    '<div class="details_item">' +
                    '<h4>Info Pesanan</h4>' +
                    '<ul class="list">' +
                    '<li><a href="'+ base_url + 'tracking/show?inv='+ response.data[0]['invoice'] +'&orderID='+ response.data[0]['id'] +'&totalCost='+ response.data[0]['total'] +'&totalItem='+ response.data[0]['total_item'] +'&contact='+ response.data[0]['phone_wa'] +'"><span>Invoice</span> : <text style="color: blue;">'+ response.data[0]['invoice'] +'</text></a></li>' +
                    '<li><a href="javascript:void(0)"><span>Email</span> : '+ response.data[0]['email'] +'</a></li>' +
                    '<li><a href="javascript:void(0)"><span>Tanggal</span> : '+ response.data[0]['order_at'] +'</a></li>' +
                    '<li><a href="javascript:void(0)"><span>Status</span> : '+ response.data[0]['status'] +'</a></li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-lg-4">' +
                    '<div class="details_item">' +
                    '<h4>Alamat Pengiriman</h4>' +
                    '<ul class="list">' +
                    '<li><a href="javascript:void(0)"><span>Penerima</span> : '+ response.data[0]['full_name'] +'</a></li>' +
                    '<li><a href="javascript:void(0)"><span>Alamat</span> : '+ response.data[0]['address'] +'</a></li>' +
                    '<li><a href="javascript:void(0)"><span>Desa </span> : '+ response.data[0]['district'] +'</a></li>' +
                    '<li><a href="javascript:void(0)"><span>Kota/Kabupaten</span> : '+ response.data[0]['city'] +'</a></li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-lg-4">' +
                    '<div class="details_item">' +
                    '<h4>Pembayaran</h4>' +
                    '<ul class="list">' +
                    '<li><a href="javascript:void(0)"><span>Nama</span> : '+ response.data[0]['bank_name'] +'</a></li>' +
                    '<li><a href="javascript:void(0)"><span>Bank</span> : '+ response.data[0]['bank'] +'</a></li>' +
                    '<li><a href="javascript:void(0)"><span>Rekening </span> : '+ response.data[0]['bank_rekening'] +'</a></li>' +
                    '<li><a href="javascript:void(0)"><span>Total</span> : '+ response.data[0]['total'] +'</a></li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>';
                    $("#orderPaymentInfo").append(orderPaymentInfo).fadeIn(500);
                // for (var k in response.data.cart) {
                //     var cart =
                //         '<tr>' +
                //         '<td>' +
                //         '<div class="media">' +
                //         '<div class="d-flex">' +
                //         '<img src="'+ response.data.cart[k].image +'" alt="" width="150" height="100">' +
                //         '</div>' +
                //         '<div class="media-body">' +
                //         '<p>'+ response.data.cart[k].name +'</p>' +
                //         '</div>' +
                //         '</div>' +
                //         '</td>' +
                //         '<td>' +
                //         '<h5>'+ response.data.cart[k].price +'</h5>' +
                //         '</td>' +
                //         '<td>' +
                //         '<div class="product_count">' +
                //         '<input type="hidden" name="rowID[]" value="'+ response.data.cart[k].rowid +'" title="Row ID:" class="input-text">' +
                //         '<input type="hidden" name="productID[]" value="'+ response.data.cart[k].id +'" title="Row ID:" class="input-text">' +
                //         '<input type="number" name="qty[]" maxlength="12" value="'+ response.data.cart[k].qty +'" title="Quantity:" class="input-text">' +
                //         '</div>' +
                //         '</td>' +
                //         '<td>' +
                //         '<h5>'+ response.data.cart[k].subtotal +'</h5>' +
                //         '</td>' +
                //         '</tr>';
                //     $("#resultCart").append(cart).fadeIn(500);
                // }
            }
        });
    });
    </script>