    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Produk</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?= site_url('productz') ?>">Produk</a>
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
            <span class="input-group-btn">
                <a class="primary-btn" href="<?= site_url() ?>productz/add">Tambah Produk</a>
            </span>
                <div class="table-responsive">
                <br/>
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Harga Akhir</th>
                            <th>Terjual</th>
                            <th width="20%">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($productUkm as $key => $val) {
                            ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $val['name'] ?></td>
                                <td align="center"><img src="<?= base_url() ?>files/product/<?= $val['image'] ?>" width="150" height="90"></td>
                                <td><?= $val['price'] ?></td>
                                <td><?= $val['is_diskon'] == 1 ? 'Ya' : 'Tidak' ?></td>
                                <td><?= $val['is_diskon'] == 1 ? $val['final_price'] : $val['price'] ?></td>
                                <td><?= $val['sold_count'] ?></td>
                                <td><a class="genric-btn info radius" href="<?= site_url() ?>productz/modify?id=<?= $val['id'] ?>">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="genric-btn danger radius" href="<?= site_url() ?>productz/processDelete?id=<?= $val['id'] ?>">Hapus</a></td>
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