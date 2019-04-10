    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Produk</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?= site_url('productz/modify?id='. $this->input->get('id')) ?>">Perbarui Produk</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    
    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="row">
                <h2>Perbarui Produk UKM</h2>
				<div class="col-lg-12">
                <br/>
                <?php
                    foreach ($productUkm as $key => $val) {
                        ?>
                        <form class="row contact_form" id="productForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <table width="100%">
                                    <tr>
                                        <td width="25%">Gambar</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <img src="<?= base_url() ?>files/product/<?= $val['image'] ?>" width="100" height="60"> Tidak dapat diubah
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" value="<?= $val['name'] ?>" placeholder="Masukkan nama">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kategori</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <select name="ukm_category_product_id" id="ukm_category_product_id" class="form-control" style="width:100%">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="1" <?= $val['ukm_category_product_id'] == 1 ? 'selected=""' : '' ?>>Minuman</option>
                                                    <option value="2" <?= $val['ukm_category_product_id'] == 2 ? 'selected=""' : '' ?>>Makanan</option>
                                                    <option value="3" <?= $val['ukm_category_product_id'] == 3 ? 'selected=""' : '' ?>>Pakaian</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="price" name="price" value="<?= $val['price'] ?>" placeholder="Masukkan harga">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="stock" name="stock" value="<?= $val['stock'] ?>" placeholder="Masukkan stok">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table width="100%">
                                    <tr>
                                        <td width="25%">Terjual</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="sold_count" name="sold_count" value="<?= $val['sold_count'] ?>" placeholder="Masukan jumlah terjual">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Diskon</td>
                                        <td>:</td>
                                        <td>
                                        <div class="form-group">
                                                <input type="checkbox" id="is_diskon" name="is_diskon" placeholder="Diskon?" <?= $val['is_diskon'] == 1 ? 'checked=""' : '' ?>>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="tr_finalPrice" <?= $val['is_diskon'] == 0 ? 'style="display:none;"' : '' ?>>
                                        <td>Harga Akhir</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="final_price" name="final_price" value="<?= $val['final_price'] ?>" placeholder="Masukkan harga akhir">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" id="description" name="description" placeholder="Masukkan deskripsi"><?= $val['description'] ?></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="primary-btn">Perbarui</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
				</div>
			</div>
        </div>
    </section>
    <!--================End Cart Area =================-->
    <script>
        $(document).ready(function(){
            var is_diskon_pars = 0;
            $('#example').DataTable({
                "info": true,         // Will show "1 to n of n entries" Text at bottom
                "lengthChange": false // Will Disabled Record number per page
            });

            $('#is_diskon').change(function(){
                if ($(this).is(':checked')) {
                    $('#tr_finalPrice').show();
                    var is_diskon_pars = 1;
                }else{
                    $('#tr_finalPrice').hide();
                    $('#final_price').val('');
                    var is_diskon_pars = 0;
                }
            });

            $("#productForm").submit(function(event) {
                if ($('#is_diskon').is(':checked')) {
                    $('#tr_finalPrice').show();
                    var is_diskon_pars = 1;
                }else{
                    $('#tr_finalPrice').hide();
                    $('#final_price').val('');
                    var is_diskon_pars = 0;
                }
            
                var name = $('#name').val();
                var ukm_category_product_id = $('#ukm_category_product_id').val();
                var price = $('#price').val();
                var stock = $('#stock').val();
                var sold_count = $('#sold_count').val();
                var is_diskon = is_diskon_pars;
                var final_price = $('#final_price').val();
                var description = $('#description').val();

                var frm_data = new FormData();
                frm_data.append('name', name);
                frm_data.append('ukm_category_product_id', ukm_category_product_id);
                frm_data.append('price', price);
                frm_data.append('stock', stock);
                frm_data.append('sold_count', sold_count);
                frm_data.append('is_diskon', is_diskon);
                frm_data.append('final_price', final_price);
                frm_data.append('description', description);
                
                /* AJAX FUNCTION MULTIPART*/
                $.ajax({
                    url: "<?= site_url() ?>productz/processModify?id=<?= $this->input->get('id') ?>",
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