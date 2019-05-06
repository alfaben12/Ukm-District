    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Pembayaran</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?= site_url('paymentz') ?>">Pembayaran</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    
    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                <br/>
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Invoice</th>
                            <th>Bank</th>
                            <th>Nama</th>
                            <th>Bukti</th>
                            <th>status</th>
                            <th width="25%">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($payment as $key => $val) {
                            ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $val['invoice'] ?></td>
                                <td><?= $val['bank'] ?></td>
                                <td><?= $val['bank_name'] ?></td>
                                <td align="center"> <a href="<?= base_url() ?>files/payment/<?= $val['file'] ?>" class="zoomple"><img src="<?= base_url() ?>files/payment/<?= $val['file'] ?>" width="150" height="90"></td>
                                <td><?= $val['status'] ?></td>
                                <td><a class="genric-btn info radius" href="<?= site_url() ?>paymentz/processChangeStatus?id=<?= $val['order_id'] ?>&status=<?= $val['status'] ?>"><?= $val['status'] == 'MENUNGGU' ? 'KONFIRMASI' : 'MENUNGGU' ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="genric-btn danger radius" href="<?= site_url() ?>paymentz/processDelete?id=<?= $val['id'] ?>">Hapus</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
    <script>
    $('#example').DataTable({
        "info": true,         // Will show "1 to n of n entries" Text at bottom
        "lengthChange": false // Will Disabled Record number per page
    });

    $(document).ready(function() { 	
        $('.zoomple').zoomple({ 
            bgColor : '#90D5D9',
            offset : {x:-150,y:-150},
            zoomWidth : 300,  
            zoomHeight : 300,
            roundedCorners : true
        });
	});
    </script>