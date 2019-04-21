<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title>UMKM Pasuruan</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url() ?>assets/img/brand/favicon.png" type="image/png">
	<!-- start content Area -->
	<?php echo $content_for_layout; ?>
	<!-- End content Area -->

	<script>
	$(document).ready(function(){
		updateTotalCart();

	});

	function processClearCart(){
		$.ajax({
			url:  '<?= site_url() ?>carts/processClear',
			type: 'POST',
			async: true,
			cache: false,
			dataType: 'json',
			beforeSend: function() {
			},
			complete: function() {
			},
			success: function(response) {
				alert(response.message);
				updateTotalCart();
				location.reload();
			}
		});
	}

	function updateTotalCart(){
		$.ajax({
			url:  '<?= site_url() ?>carts/getAllCart',
			type: 'GET',
			async: true,
			cache: false,
			dataType: 'json',
			beforeSend: function() {
				$("#totalCart").empty();
			},
			complete: function() {
			},
			success: function(response) {
				if (response.data.totalCart != 0) {
					$("#totalCart").text(response.data.totalCart);
				}
			}
		});
	}
	</script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104437451-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-104437451-1');
  </script>
</body>

</html>