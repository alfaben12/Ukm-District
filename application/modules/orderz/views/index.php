    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Pesanan</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?= site_url('orderz') ?>">Pesanan</a>
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
                            <th>invoice</th>
                            <th>Nama</th>
                            <th>WA</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Produk</th>
                            <th width="10%">Total</th>
                            <th>Status</th>
                            <th width="10%">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($order as $key => $val) {
                            ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $val['invoice'] ?></td>
                                <td><?= $val['full_name'] ?></td>
                                <td><?= $val['phone_wa'] ?></td>
                                <td><?= $val['address'] ?></td>
                                <td><?= $val['city'] ?></td>
                                <td><center><?= $val['total_item'] ?></center></td>
                                <td><?= $val['total'] ?></td>
                                <td><?= $val['status'] ?></td>
                                <td><a class="genric-btn danger radius" href="<?= site_url() ?>orderz/processDelete?id=<?= $val['id'] ?>">Hapus</a></td>
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
    </script>