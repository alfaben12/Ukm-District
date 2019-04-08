<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>UKM Produk</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
						<a href="<?= site_url('shops') ?>">Produk</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
			<form class="row contact_form" id="filterForm" novalidate="novalidate">
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Cari Produk</div>
					<div>
						<div class="head">Kategori Produk</div>
						<ul id="ul_category"></ul>
					</div>
					<div>
						<div class="head">Harga</div>
						<div class="form-group">
							<input type="text" class="form-control" id="minHarga" name="minHarga" placeholder="Min Harga" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Min Harga'"><br/>
							<input type="text" class="form-control" id="maxHarga" name="maxHarga" placeholder="Max Harga" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Max Harga'">
						</div>
					</div>
					<div class="common-filter">
						<button type="submit" value="submit" class="primary-btn">Send Message</button>
					</div>
				</div>
				</form>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
					</div>
					<div class="sorting mr-auto">
					</div>
					   <!-- Paginate -->
   						<div class="pagination" id='pagination'></div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row" id="div_product">
						<!-- single product -->
						
						<!-- end single product -->
					</div>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Penjualan Terlaris</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row" id="divTopSeller">
						
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<!-- <img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt=""> -->
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->
	<script>
		$(document).ready(function() {
			var base_url = '<?= base_url() ?>';

			$('#pagination').on('click', 'a', function(e) {
				e.preventDefault();
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});
			$.ajax({
				url:  '<?= site_url() ?>shops/getRenderedContent',
				type: 'GET',
				async: true,
				cache: false,
				dataType: 'json',
				beforeSend: function() {
				},
				complete: function() {
				},
				success: function(response) {
					for(var k=0; k < response.data.category.length; k++) {
						var category = '<li class="filter-list"><input class="pixel-radio" type="radio" id="ukm_category_product_id" name="ukm_category_product_id" value="'+ response.data.category[k]['id'] +'" '+ response.data.category[k]['id'] +'><label for="'+ response.data.category[k]['name'] +'">'+ response.data.category[k]['name'] +'</label></li>';
						$("#ul_category").append(category).fadeIn(500);
					}

					for(var k=0; k < response.data.product.length; k++) {
						if (response.data.product[k]['is_diskon'] == 1) {
							var price = '<h6 class="l-through">Rp. ' + response.data.product[k]['price'] + '</h6>' +
							'<h6>Rp. ' + response.data.product[k]['final_price'] + '</h6>';
						}else{
							var price = '<h6>Rp. ' + response.data.product[k]['price'] + '</h6>';
						}

						var product = 
						'<div class="col-lg-4 col-md-4 col-sm-6 mb-20">'+
							'<div class="single-related-product d-flex">'+
								'<a href="' + base_url + 'shops/showProduct?productName=' + response.data.product[k]['name'] + '"><img src="' + base_url + 'files/product/' + response.data.product[k]['image'] + '" alt="" width="100" height="70"></a>'+
								'<div class="desc">'+
									'<a href="' + base_url + 'shops/showProduct?productName=' + response.data.product[k]['name'] + '" class="title">Black lace Heels</a>'+
									'<div class="price">'+
										price +
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>';
						$("#divTopSeller").append(product).fadeIn(500);
					}
						

					loadPagination(0);
				}
			});

			function loadPagination(pagno) {
				$.ajax({
					url: '<?= site_url() ?>shops/getUkmDataProduct/'+ pagno,
					data: {
						pageno: pagno,
						ukm_category_product_id: $('input[name=ukm_category_product_id]:checked').val(),
						price_from: $("#minHarga").val(),
						price_to: $("#maxHarga").val()
					},
					type: 'GET',
					dataType: 'json',
					success: function(response) {
						if (response.data.code != 200) {
							var product = 'Barang tidak ditemukan.'
							$("#div_product").append(product).fadeIn(500);
						}
						$('#pagination').html(response.data.product.pagination);
						createList(response.data.product.result);
					}
				});
			}

			function createList(result) {
				$('#div_product').empty();
				for (k in result) {

					if (result[k].is_diskon == 1) {
						var price = '<h6 class="l-through">Rp. ' + result[k].price + '</h6>' +
						'<h6>Rp. ' + result[k].final_price + '</h6>';
					}else{
						var price = '<h6>Rp. ' + result[k].price + '</h6>';
					}
					var product =
						'<div class="col-lg-4 col-md-6">' +
						'<div class="single-product">' +
						'<img class="img-fluid" src="' + base_url + 'files/product/' + result[k].image + '" alt="" width="255" height="255">' +
						'<div class="product-details">' +
						'<h6><a href="' + base_url + 'shops/showProduct?productName=' + result[k].name + '">' + result[k].name + '</a></h6>' +
						'<div class="price">' +
						price +
						'</div>' +
						'<div class="prd-bottom">' +
						'<a href="" class="social-info">' +
						'<span class="ti-bag"></span>' +
						'<p class="hover-text">add to bag</p>' +
						'</a>' +
						'<a href="" class="social-info">' +
						'<span class="lnr lnr-heart"></span>' +
						'<p class="hover-text">Wishlist</p>' +
						'</a>' +
						'<a href="" class="social-info">' +
						'<span class="lnr lnr-sync"></span>' +
						'<p class="hover-text">compare</p>' +
						'</a>' +
						'<a href="" class="social-info">' +
						'<span class="lnr lnr-move"></span>' +
						'<p class="hover-text">view more</p>' +
						'</a>' +
						'</div>' +
						'</div>' +
						'</div>' +
						'</div>';
					$("#div_product").append(product).fadeIn(500);
				}
			}

			$("#filterForm").submit(function(event) {
				if ($("input[name='ukm_category_product_id']:checked").val() == '') {
					alert('Kategori harus diisi.');
				}

				$.ajax({
					url: '<?= site_url() ?>shops/getUkmDataProduct/0',
					data: {
						pageno: 0,
						ukm_category_product_id: $("input[name='ukm_category_product_id']:checked").val(),
						price_from: $("#minHarga").val(),
						price_to: $("#maxHarga").val()
					},
					type: 'GET',
					dataType: 'json',
					success: function(response) {
						if (response.data.code != 200) {
							var product = 'Barang tidak ditemukan.'
							$("#div_product").append(product).fadeIn(500);
						}
						$('#pagination').html(response.data.product.pagination);
						createList(response.data.product.result);
					}
				});
				event.preventDefault();
			});
		});
	</script>