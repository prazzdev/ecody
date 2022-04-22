<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="file/img/icon3.png">

	<!-- CSS -->
	<?php $css = "file/style/css/"; ?>
	<link rel="stylesheet" type="text/css" href="<?= $css ?>style.css">
	<!-- finished CSS -->

	<style>
	.promo {
		background-image: url('file/data/images/slide1.jpg');
		background-size: all;
		background-repeat: repeat;
}
	</style>
	<title>E-Commerce Student</title>
</head>
<body>

<div class="container">

	<header>
		<form action="" method="POST">
			<input type="text" name="keyword" autofocus autocomplete="off">
			<button type="submit">Cari</button>
		</form>
	</header>

	<!-- BODY ~ SLIDE GAMBAR -->
	<div class="slide">
		<img src="file/data/images/slide1.jpg">
	</div>
	<!-- finished BODY ~ SLIDE GAMBAR -->

	<!-- BODY ~ KATEGORI -->
	<div class="kategori">
		<div id="ls">
			<img src="file/data/images/slide1.jpg">
			<h4>Elektronik</h4>
		</div>
		<div id="ls">
			<img src="file/data/images/slide1.jpg">
			<h4>Pakaian</h4>
		</div>
		<div id="ls">
			<img src="file/data/images/slide1.jpg">
			<h4>Makanan</h4>
		</div>
		<div id="ls">
			<img src="file/data/images/slide1.jpg">
			<h4>Jasa</h4>
		</div>
	</div>
	<!-- finished BODY ~ KATEGORI -->


	<!-- BODY ~ PRODUK TERBARU -->
	<div class="produk_baru">
		<div id="tl"> <!-- TITLE -->
			<h3>Produk Terbaru</h3>
		</div>
		<div class="list_produk"> <!-- LIST PRODUK -->
			
			<?php for( $p = 0; $p <= 5; $p++ ) : ?>
				<?php echo '<div class="produk"> <!-- PRODUK -->
				<img src="file/data/images/slide1.jpg">
				<div class="desk">
					<div id="nama_produk">
						Sweater Unisex
					</div>
					<div id="harga">
						Rp. 50.000
					</div>
				</div>
			</div> <!-- finished PRODUK -->'; ?>
			<?php endfor; ?>

		</div>
	</div>
	<!-- finished BODY ~ PRODUK TERBARU -->


	<!-- BODY ~ PRODUK PROMO -->
	<div class="promo"> <!-- PROMO -->
		<div id="tl"> <!-- TITLE PROMO -->
			Promo Terbaik
		</div>
		<div class="slide_promo"> <!-- SLIDE PROMO -->
			<?php for( $x = 0; $x <= 3; $x++ ) : ?>
			<?php echo '<div id="slide_produk"> <!-- SLIDE PRODUK PROMO -->
				<img src="file/data/images/slide1.jpg">
				<div class="desk">
					<div id="nama_produk">
						Sweater Unisex
					</div>
					<div id="harga">
						Rp. 50.000
					</div>
					<div id="discount">
						5%
					</div>
					<div id="after_discount">
						Rp. 45.000
					</div>
				</div>
			</div> <!-- finished SLIDE PRODUK PROMO -->'; ?>
			<?php endfor; ?>

		</div>
		<div id="all_promo">
			>
		</div>
	</div>
	<!-- finished BODY ~ PRODUK PROMO -->





	<!-- FIXED MENU BOTTOM -->
	<div class="toolbar">
		<div id="ls">
			<a href="#">
			<img src="file/data/images/toolbars/home.png">
			<h4>Beranda</h4>
			</a>
		</div>
		<div id="ls">
			<a href="#">
			<img src="file/data/images/toolbars/promo.png">
			<h4>Promo</h4>
			</a>
		</div>
		<div id="ls">
			<a href="#">
			<img src="file/data/images/toolbars/help.png">
			<h4>Jual Barang</h4>
			</a>
		</div>
		<div id="ls">
			<a href="#">
			<img src="file/data/images/toolbars/opsi.png">
			<h4>Opsi</h4>
			</a>
		</div>
	</div>
	<!-- finished FIXED MENU BOTTOM -->




</div>

</body>
</html>