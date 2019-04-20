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
<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Terima kasih. Pesanan Anda telah diterima.</h3>
			<div class="row order_d_inner" id="orderPaymentInfo">
				<!-- RENDER HERE -->
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive" id="tableOrderItem">
					<!-- RENDER HERE -->
				</div>
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
                $("#tableOrderItem").empty();
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
                    var orderItem = '';
                    var listItem = '';
                    
                    listItem += '<table class="table">'+
						'<thead>'+
							'<tr>'+
								'<th scope="col">Produk</th>'+
								'<th scope="col">Kuantitas</th>'+
								'<th scope="col">Total</th>'+
						'</tr>'+
					'</thead>'+
                        '<tbody>';
                            for (var k in response.item) {
                                listItem += 
                        '<tr>'+
                            '<td>'+
                                '<p>'+ response.item[k].product_name +'</p>'+
                            '</td>'+
                            '<td>'+
                                '<h5>x '+ response.item[k].qty +'</h5>'+
                            '</td>'+
                            '<td>'+
                                '<p>'+ response.item[k].subtotal +'</p>'+
                            '</td>'+
                        '</tr>';
                    }
                    
                    listItem +=
							'<tr>'+
								'<td>'+
									'<h4>Subtotal</h4>'+
							'</td>'+
								'<td>'+
									'<h5></h5>'+
							'</td>'+
								'<td>'+
									'<p>'+ response.data[0]['total'] +'</p>'+
							'</td>'+
						'</tr>'+
							'<tr>'+
								'<td>'+
									'<h4>Pengiriman</h4>'+
							'</td>'+
								'<td>'+
									'<h5></h5>'+
							'</td>'+
								'<td>'+
									'<p>0</p>'+
							'</td>'+
						'</tr>'+
							'<tr>'+
								'<td>'+
									'<h4>Total</h4>'+
							'</td>'+
								'<td>'+
									'<h5></h5>'+
							'</td>'+
								'<td>'+
									'<p>'+ response.data[0]['total'] +'</p>'+
							'</td>'+
						'</tr>'+
					'</tbody>'+
                '</table>';
                
                $("#tableOrderItem").append(listItem).fadeIn(500);
            }
        });
    });
    </script>