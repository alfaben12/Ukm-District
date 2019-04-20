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
                <p>Untuk menyelesaikan pesanan Anda, silahkan masukkan nomor WA dan bukti pembayaran untuk konfirmasi. Ini telah diberikan kepada Anda pada tanda terima dan dalam email atau WA konfirmasi yang seharusnya Anda terima.</p>
                <form class="row tracking_form" id="formPayment" novalidate="novalidate">
                    <div class="col-md-12 form-group">
                        <input type="number" class="form-control" id="phoneWa" name="phoneWa" placeholder="Nomor WA">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="bank" name="bank" placeholder="Bank (contoh: BNI, BRI, BCA, MANDIRI, dan lain-lain)">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="bankName" name="bankName" placeholder="Nama rekening">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="file" name="file" placeholder="Masukkan bukti transfer">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">Konfirmasi Pembayaran</button>
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
            }
        });

        $("#formPayment").submit(function(event) {
                var file = $('#file').prop("files")[0];
                var phoneWa = $('#phoneWa').val();
                var bank = $('#bank').val();
                var bankName = $('#bankName').val();

                if (phoneWa === '') {
                    alert('No WA harus di isi.');
                }else if (bank === '') {
                    alert('Bank harus di isi.');
                }else if (bankName === '') {
                    alert('Nama rekening harus di isi.');
                }else{
                    var frm_data = new FormData();
                    frm_data.append('file', file);
                    frm_data.append('phoneWa', phoneWa);
                    frm_data.append('bank', bank);
                    frm_data.append('bankName', bankName);

                    /* AJAX FUNCTION MULTIPART*/
                    $.ajax({
                        url: "<?= site_url() ?>confirmations/processPayment?inv=<?= $this->input->get('inv') ?>&orderID=<?= $this->input->get('orderID') ?>&totalCost=<?= $this->input->get('totalCost') ?>&totalItem=<?= $this->input->get('totalItem') ?>&contact=<?= $this->input->get('contact') ?>",
                        type: "POST",
                        data: frm_data,
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success: function(response) {
                            if (response.code == 201) {
                                window.location = response.base_url;
                            }else{
                                alert(response.message);
                            }
                        }
                    });
                }
                event.preventDefault();
            });
    });
    </script>