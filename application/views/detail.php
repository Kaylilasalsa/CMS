<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Male_Fashion Template">
	<meta name="keywords" content="Male_Fashion, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $Judul_halaman;?></title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
		rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	<!-- Css Styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/nice-select.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/style.css" type="text/css">
</head>
<style>
	#carouselExampleControls {
		max-height: 600px;
		/* Sesuaikan nilai ini sesuai kebutuhan */
		overflow: hidden;
	}

	.carousel-item {
		height: 100%;
		object-fit: cover;
	}

	.carousel img {
		min-height: 100%;
		min-height: 100%;
		max
	}

	#carosel {
		margin-top: 100px;
		margin-bottom: 200px;
	}

	#logo {
		font-size: 30px;
		align-self: center;
		font-weight: bold;
		color: black;

	}

</style>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Begin -->
	<div class="offcanvas-menu-overlay"></div>
	<div class="offcanvas-menu-wrapper">
		<div class="offcanvas__option">
			<div class="offcanvas__links">
				<a href="#">Sign in</a>
				<a href="#">FAQs</a>
			</div>
			<div class="offcanvas__top__hover">
				<span>Usd <i class="arrow_carrot-down"></i></span>
				<ul>
					<li>USD</li>
					<li>EUR</li>
					<li>USD</li>
				</ul>
			</div>
		</div>
		<div class="offcanvas__nav__option">
			<a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
			<a href="#"><img src="<?=base_url('assets/front/')?>img/icon/heart.png" alt=""></a>
			<a href="#"><img src="<?=base_url('assets/front/')?>img/icon/cart.png" alt=""> <span>0</span></a>
			<div class="price">$0.00</div>
		</div>
		<div id="mobile-menu-wrap"></div>
		<div class="offcanvas__text">
			<p>Free shipping, 30-day return or refund guarantee.</p>
		</div>
	</div>
	<!-- Offcanvas Menu End -->

	<!-- Header Section Begin -->

	<!-- Breadcrumb Section Begin -->
	<!-- Breadcrumb Section End -->

	<!-- Blog Details Hero Begin -->

	<!-- Teks -->
	<div class="banner-content" style="flex: 1; text-align: left;">
		<img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>"
			style="width:300px; display: block; margin: auto;">
		<h1 class="banner-title mb-2" style="text-align:center;">
			<?= isset($konten->judul) ? $konten->judul : 'Judul tidak tersedia'; ?></h1>
		<h3 style="text-align:center; margin-bottom:20px;">Rp.<?=number_format($konten->harga,0,',','.')?></h3>
		<p style="text-align:center; font-size:20px;" class="banner-title mb-4">
			<?= isset($konten->keterangan) ? $konten->keterangan : 'Keterangan tidak tersedia'; ?></p>
		<div class="btn-wrap">

		</div>
	</div>
	<!-- Blog Details Hero End -->

	<!-- Footer Section Begin -->
	<section id="contact">
		<footer class="footer">
			<div class="container">
				<div class="row">
					<!-- Footer About Section -->
					<div class="col-lg-4 col-md-6 col-sm-5">
						<div class="footer__about">
							<div class="footer__logo">
								<a href="#">
									<img src="<?= base_url('assets/front/') ?>img/logo.png" alt="Footer Logo">
								</a>
							</div>
							<p><?= $konfig->profil_web; ?></p>
							<div class="d-flex justify-content-start mt-4">
								<!-- Facebook -->
								<a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
									style="width: 38px; height: 38px" href="<?= $konfig->facebook; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										style="fill: rgba(255, 255, 255, 1);">
										<path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 
                                    1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 
                                    4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
									</svg>
								</a>
								<!-- Instagram -->
								<a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
									style="width: 38px; height: 38px" href="<?= $konfig->instagram; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										style="fill: rgba(255, 255, 255, 1);">
										<path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 
                                    7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
										<circle cx="16.806" cy="7.207" r="1.078"></circle>
										<path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42
                                    c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 
                                    4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 
                                    1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 
                                    4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 
                                    3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 
                                    0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s 
                                    0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 
                                    5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 
                                    0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 
                                    4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 
                                    1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 
                                    5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 
                                    1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 
                                    4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 
                                    1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 
                                    3.654h-.011z"></path>
									</svg>
								</a>
							</div>
						</div>
					</div>

					<!-- Address Section -->
					<div class="col-lg-3 col-md-6 mb-5">
						<h3 class="text-primary mb-4">Address</h3>
						<div class="d-flex">
							<h4 class="fa fa-map-marker-alt text-primary"></h4>
							<div class="pl-3">
								<h5 class="text-white">Alamat Jl. Kaliurang No.10, Kocoran, Caturtunggal, Kec. Depok,
									Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</h5>
							</div>
						</div>
						<div class="d-flex">
							<h4 class="fa fa-envelope text-primary"></h4>
							<div class="pl-3">
								<h5 class="text-white">Email: <a href="mailto:supportiTabooks@gmail.com"
										class="text-white">emirafashion@gmail.com</a></h5>
							</div>
						</div>
						<div class="d-flex">
							<h4 class="fa fa-phone-alt text-primary"></h4>
							<div class="pl-3">
								<h5 class="text-white">Phone: <a href="tel:+6281233758482" class="text-white">+62
										812-2723-1818</a></h5>
							</div>
						</div>
					</div>

					<!-- Quick Links -->
					<div class="col-lg-3 col-md-6 mb-5">
						<h3 class="text-primary mb-4">Quick Links</h3>
						<div class="d-flex flex-column justify-content-start">
							<?php foreach ($kategori as $kate) { ?>
							<a class="text-white mb-2" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
								<i class="fa fa-angle-right mr-2"></i><?= $kate['nama_kategori'] ?>
							</a>
							<?php } ?>
						</div>
					</div>
				</div>

				<!-- Footer Copyright -->
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="footer__copyright__text">
							<p>
								Copyright © <script>
									document.write(new Date().getFullYear());

								</script>2024
								All rights reserved | kaylila salsa emira <i class="fa fa-heart-o"
									aria-hidden="true"></i>
								by <a href="" target="_blank"><?= $konfig->judul_web; ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</section>

	<!-- Footer Section End -->

	<!-- Search Begin -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search End -->

	<!-- Js Plugins -->
	<script src="<?=base_url('assets/front/')?>js/jquery-3.3.1.min.js"></script>
	<script src="<?=base_url('assets/front/')?>js/bootstrap.min.js"></script>
	<script src="<?=base_url('assets/front/')?>js/jquery.nice-select.min.js"></script>
	<script src="<?=base_url('assets/front/')?>js/jquery.nicescroll.min.js"></script>
	<script src="<?=base_url('assets/front/')?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url('assets/front/')?>js/jquery.countdown.min.js"></script>
	<script src="<?=base_url('assets/front/')?>js/jquery.slicknav.js"></script>
	<script src="<?=base_url('assets/front/')?>js/mixitup.min.js"></script>
	<script src="<?=base_url('assets/front/')?>js/owl.carousel.min.js"></script>
	<script src="<?=base_url('assets/front/')?>js/main.js"></script>
</body>

</html>
