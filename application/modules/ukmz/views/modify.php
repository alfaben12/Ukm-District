<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Halaman UKM</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?= site_url('ukms/ukmDetailProfileTicketDesk?ukmName=Kopi Kutjur') ?>">UKM</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

<?php
foreach ($ukm as $key => $val) {
    ?>
    <form id="ukmForm" type="POST">
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img src="<?= base_url() ?>files/profile/<?= $val['logo_cover'] ?>" alt="post" width="750" height="350">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#" id="a_category_producs"><?= $val['category_products_id'] ?></a>
                                </div>
                                <ul class="blog_meta list">
                                    <li id="li_joinAt"><?= $val['join_app_at'] ?><a href="#"><i class="lnr lnr-calendar-full"></i></a></li>
                                    <li id="li_views"><?= $val['views'] ?><a href="#"><i class="lnr lnr-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2 id="h2_ukmName">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $val['name'] ?>" placeholder="Masukkan nama">
                            </h2>
                            <p id="p_description">
                                <textarea class="form-control" id="description" name="description" placeholder="Masukkan deskripsi" style="height: 400px;"><?= $val['description'] ?></textarea>
                            </p>
                            Provinsi : <input type="text" class="form-control" id="province" name="province" value="<?= $val['province'] ?>" placeholder="Masukkan province">
                            <br/>
                            Region : <input type="text" class="form-control" id="region" name="region" value="<?= $val['region'] ?>" placeholder="Masukkan region">
                            <br/>
                            Alamat : <input type="text" class="form-control" id="address" name="address" value="<?= $val['address'] ?>" placeholder="Masukkan address">
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget author_widget">
                            <div id="logo">
                                <img src="<?= base_url() ?>files/profile/<?= $val['logo'] ?>" alt="post" width="120" height="120">
                            </div>
                            <h4 id="h4_founder">
                            <input type="text" class="form-control" id="founder" name="founder" value="<?= $val['founder'] ?>" placeholder="Masukkan founder">
                            </h4>
                            <p>Pengelola UKM</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p id="p_quote" style="height:100%">
                            <textarea class="form-control" id="quotes" name="quotes" placeholder="Masukkan quotes" style="height: 250px;"><?= $val['quotes'] ?></textarea>
                            </p>
                        </aside>
                    </div>
                    <br/>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <button class="primary-btn" style="width:100%;" type="submit">Perbarui</button>
                    </aside>
                </div>
            </div>
        </div>
    <!--================Blog Area =================-->
    </form>
    </section>
    
    <?php
}
?>
    <script>
        $(document).ready(function(){

            $("#ukmForm").submit(function(event) {
                // var name = $('#name').val();
                // var ukm_category_product_id = $('#ukm_category_product_id').val();
                // var price = $('#price').val();
                // var stock = $('#stock').val();
                // var sold_count = $('#sold_count').val();
                // var is_diskon = is_diskon_pars;
                // var final_price = $('#final_price').val();
                // var description = $('#description').val();

                // var frm_data = new FormData();
                // frm_data.append('name', name);
                // frm_data.append('ukm_category_product_id', ukm_category_product_id);
                // frm_data.append('price', price);
                // frm_data.append('stock', stock);
                // frm_data.append('sold_count', sold_count);
                // frm_data.append('is_diskon', is_diskon);
                // frm_data.append('final_price', final_price);
                // frm_data.append('description', description);
                
                /* AJAX FUNCTION MULTIPART*/
                $.ajax({
                    url: "<?= site_url() ?>ukmz/processModify?id=<?= $this->input->get('id') ?>",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    cache: false,
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