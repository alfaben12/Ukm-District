    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>UMKM</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?= site_url('Umkz') ?>">UMKM</a>
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
                <a class="primary-btn" href="<?= site_url() ?>ukmz/add">Tambah UMKM</a>
            </span>
                <div class="table-responsive">
                <br/>
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Logo</th>
                            <th>Pemilik</th>
                            <th>Alamat</th>
                            <th>Provinsi</th>
                            <th>Terlihat</th>
                            <th width="20%">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($ukm as $key => $val) {
                            ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $val['name'] ?></td>
                                <td align="center"><img src="<?= base_url() ?>files/profile/<?= $val['logo'] ?>" width="90" height="90"></td>
                                <td><?= $val['founder'] ?></td>
                                <td><?= $val['address'] ?></td>
                                <td><?= $val['province'] ?></td>
                                <td><?= $val['views'] ?></td>
                                <td><a class="genric-btn info radius" href="<?= site_url() ?>ukmz/modify?id=<?= $val['id'] ?>">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="genric-btn danger radius" href="<?= site_url() ?>ukmz/processDelete?id=<?= $val['id'] ?>">Hapus</a></td>
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