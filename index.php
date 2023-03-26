<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Basic Page Needs
================================================== -->
	<title>Jogjacagar | Sistem Informasi Cagar Budaya</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="author" content="Jogjacagar">
	<!-- CSS
================================================== -->
	<link rel="stylesheet" href="https://jogjacagar.jogjaprov.go.id/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://jogjacagar.jogjaprov.go.id/assets/css/style.css" rel="stylesheet" id="colors">
	<link rel="stylesheet" href="https://jogjacagar.jogjaprov.go.id/assets/css/main-color.css" id="colors">
	<link rel="stylesheet" href="https://jogjacagar.jogjaprov.go.id/assets/dist/css/twig-custom.css">
	<link href="https://jogjacagar.jogjaprov.go.id/assets/plugins/select2/select2.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">

	<script src="https://jogjacagar.jogjaprov.go.id/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>

	<style>
		.main-result-search {
			position: absolute;
			box-shadow: 5px 5px 2px #DCDEDE;
			top: 110%;
			right: 10%;
			width: 80%;
			max-height: 500px;
			overflow: scroll;
			background-color: white;
			border-radius: 5px;
			padding: 5px;
			display: none;
		}

		.result-item-search>a {
			cursor: pointer;
			width: 100%;

		}

		.result-item-search a:hover {
			color: lightblue;


		}

		.result-item-search {
			text-align: center;
		}
	</style>
</head>

<body class="dark-header_">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header Container
================================================== -->
		<header id="header-container">

			<!-- Header -->
			<div id="header">
				<div class="container">

					<!-- Left Side Content -->
					<div class="left-side">

						<!-- Logo -->
						<div id="logo">
							<a href="https://jogjacagar.jogjaprov.go.id/"><img src="https://jogjacagar.jogjaprov.go.id/assets/images/logo_jogacagar_new.png" alt=""></a>
						</div>

						<!-- Mobile Navigation -->
						<div class="mmenu-trigger">
							<button class="hamburger hamburger--collapse" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>

						<!-- Main Navigation -->
						<nav id="navigation" class="style-1">
							<ul id="responsive">

								<li><a class="current" href="https://jogjacagar.jogjaprov.go.id/">Beranda</a>
								</li>

								<li><a href="#">Kategori</a>
									<ul>
										<li><a
												href="https://jogjacagar.jogjaprov.go.id/benda-warisan-cagar-budaya">Benda</a>
										</li>
										<li><a
												href="https://jogjacagar.jogjaprov.go.id/bangunan-warisan-cagar-budaya">Bangunan</a>
										</li>
										<li><a
												href="https://jogjacagar.jogjaprov.go.id/struktur-warisan-cagar-budaya">Struktur</a>
										</li>
										<li><a
												href="https://jogjacagar.jogjaprov.go.id/situs-warisan-cagar-budaya">Situs</a>
										</li>
										<li><a
												href="https://jogjacagar.jogjaprov.go.id/kawasan-warisan-cagar-budaya">Kawasan</a>
										</li>
									</ul>
								</li>

								<li><a href="#">Informasi</a>
									<ul>
										<li><a
												href="https://jogjacagar.jogjaprov.go.id/daftar-warisan-dan-cagar-budaya">Informasi
												Data WB-CB</a></li>
										<li><a href="https://jogjacagar.jogjaprov.go.id/time-line-cagar-budaya-diy">Timeline
												Data WB-CB</a></li>
										<li><a href="https://jogjacagar.jogjaprov.go.id/dicision-suport-system">Simulasi
												Rekomendasi Data WB-CB</a></li>
										<li><a href="https://jogjacagar.jogjaprov.go.id/Petainteraktif">Sebaran Data
												WB-CB</a></li>
										<li><a href="https://jogjacagar.jogjaprov.go.id/regulasi">Regulasi</a></li>

									</ul>
								</li>


							</ul>
						</nav>
						<div class="clearfix"></div>
						<!-- Main Navigation / End -->

					</div>
					<!-- Left Side Content / End -->
					<!-- Right Side Content / End -->
					<div class="right-side">
						<!-- Header Widget -->
						<div class="header-widget">
							<!-- User Menu -->
							<div class="logo">
								<a href="#"><img src="https://jogjacagar.jogjaprov.go.id/assets/images/img/logo-danais.png" alt style="max-height: 35px;"></a>
									<a href="https://budaya.jogjaprov.go.id"
										target='_blank'><img src="https://jogjacagar.jogjaprov.go.id/assets/images/img/logo-diy.png" alt style="max-height:45px; "></a>
							</div>
						</div>
					</div>
					<!-- Header Widget / End -->
				</div>
				<!-- Right Side Content / End -->
			</div>
	</div>
	<!-- Header / End -->

	</header>
	<div class="clearfix"></div>
	<!-- Header Container / End -->
	<script>
		var lengthSlider = '3'
	</script>
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header Container
================================================== -->

		<!-- Header Container / End -->


		<!-- Bannerf
================================================== -->

		<div class="home-search-carousel carousel-not-ready">
			<div class="home-search-slide"
				style="background-image: url(https://jogjacagar.jogjaprov.go.id/./assets/uploads/files/slider/2.jpg)">
				<div class="home-search-slider-headlines">
					<div class="container">
						<div class="col-md-12">
							<h3><span class="typed-words-1"  style="font-weight:bold; font-family: 'Noto Sans JP', sans-serif;"></span>
							</h3>
						</div>
					</div>
				</div>
			</div>

			<div class="home-search-slide"
				style="background-image: url(https://jogjacagar.jogjaprov.go.id/./assets/uploads/files/slider/GedungAgung.JPG)">
				<div class="home-search-slider-headlines">
					<div class="container">
						<div class="col-md-12">
							<h3><span class="typed-words-2"  style="font-weight:bold; font-family: 'Noto Sans JP', sans-serif;"></span>
							</h3>
						</div>
					</div>
				</div>
			</div>

			<div class="home-search-slide"
				style="background-image: url(https://jogjacagar.jogjaprov.go.id/./assets/uploads/files/slider/imogiri2.JPG)">
				<div class="home-search-slider-headlines">
					<div class="container">
						<div class="col-md-12">
							<h3><span class="typed-words-3"  style="font-weight:bold; font-family: 'Noto Sans JP', sans-serif;"></span>
							</h3>
						</div>
					</div>
				</div>
			</div>

			<!-- Item -->


			<!-- Item -->

			<!-- Search -->

		</div>


		<!-- Content kategori cgar budaya
================================================== -->
		<section class="fullwidth margin-top-0 padding-top-0 padding-bottom-70 background-gradient">
			<div class="container search-cont">
				<div class="col-md-12" style="position:relative;">

					<div class="main-search-input">

						<div class="main-search-input-item">
							<input type="text" placeholder="Nama Cagar Budaya" id="nama-warisan-cagar-budaya" value="" />
					</div>

							<div class="main-search-input-item">
								<select  class="chosen-select" id="kategori-search">
							<option value="">Semua Kategori</option>
							<option value="1">Benda</option>
							<option value="2">Struktur</option>
							<option value="3">Bangunan</option>
							<option value="4">Situs</option>
							<option value="5">Kawasan</option>
						</select>
							</div>

							<button class="button" type="button" id="btn-search">Cari</button>

						</div>
						<div class="main-result-search" style="z-index:999;">
							<div style="text-align:right;margin:3px;">
								<span id="close-search" style="cursor:pointer;">X</span>
							</div>
							<div class="result-item-search">
							</div>

						</div>
					</div>
				</div>
		</section>
		<section class="fullwidth margin-top-0 padding-top-0 padding-bottom-70 background-gradient">

			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<h3 class="headline centered margin-top-0">
							<strong class="headline-with-separator" style="margin-top:20px;">Kategori Cagar Budaya</strong>
						</h3>
					</div>

					<div class="col-md-12">
						<div class="categorxies-boxes-container-alt margin-top-5 margin-bottom-30">

							<!-- Box -->
							<a href="https://jogjacagar.jogjaprov.go.id/benda-warisan-cagar-budaya"
								class="category-small-box-alt">
								<i class="icon-struktur2" style="background-image:url('./assets/depan/image/benda.png');background-repeat:no-repeat;background-position:center;"></i>
								<h4>Benda</h4>
								<span class="category-box-counter-alt">1621</span>
							</a>

							<!-- Box -->
							<a href="https://jogjacagar.jogjaprov.go.id/struktur-warisan-cagar-budaya"
								class="category-small-box-alt">
								<i class="icon-struktur2" style="background-image:url('./assets/depan/image/struktur.png');background-repeat:no-repeat;background-position:center;"></i>
								<h4>Struktur</h4>
								<span class="category-box-counter-alt">261</span>
							</a>

							<!-- Box -->
							<a href="https://jogjacagar.jogjaprov.go.id/bangunan-warisan-cagar-budaya"
								class="category-small-box-alt">
								<i style="background-image:url('./assets/depan/image/bangunan.png');background-repeat:no-repeat;background-position:center;"></i>
								<h4>Bangunan</h4>
								<span class="category-box-counter-alt">1467</span>
							</a>

							<!-- Box -->
							<a href="https://jogjacagar.jogjaprov.go.id/situs-warisan-cagar-budaya"
								class="category-small-box-alt">
								<i style="background-image:url('./assets/depan/image/situs.png');background-repeat:no-repeat;background-position:center;"></i>
								<h4>Situs</h4>
								<span class="category-box-counter-alt">323</span>
							</a>

							<!-- Box -->
							<a href="https://jogjacagar.jogjaprov.go.id/kawasan-warisan-cagar-budaya"
								class="category-small-box-alt">
								<i style="background-image:url('./assets/depan/image/kawasan.png');background-repeat:no-repeat;background-position:center;"></i>
								<h4>Kawasan</h4>
								<span class="category-box-counter-alt">31</span>
							</a>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Category Boxes / End -->

	</div>

	<section>
		<!-- Content 2
	================================================== -->
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h3 class="headline centered margin-top-50">
						<strong class="headline-with-separator">Objek Cagar Budaya</strong>
						<span>Cagar Budaya di Daerah Istimewa Yogyakarta</span>
					</h3>
				</div>

			</div>
		</div>


		<!-- Categories Carousel -->
		<div class="fullwidth-carousel-container margin-top-25 ">
			<div class="fullwidth-slick-carousel category-carousel" id="corousel-objeck-cagar-budaya">
				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="https://jogjacagar.jogjaprov.go.id/detail/4391/ruas-jalan-sepanjang-sumbu-filosofi"
							class="category-box"
							data-background-image="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_c5af72efc66b56cbb4bf9db39981cbbc.jpg"
							style="position:relative;">
							<div class="category-box-content">

								<h3>Ruas Jalan Sepanjang...</h3>
							</div>

						</a>
					</div>
				</div>
				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="https://jogjacagar.jogjaprov.go.id/detail/4390/regol-brajanala-kraton-yogyakarta"
							class="category-box"
							data-background-image="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_d679556bb0b1c861c32817bb934680c7.jpg"
							style="position:relative;">
							<div class="category-box-content">

								<h3>Regol Brajanala...</h3>
							</div>

						</a>
					</div>
				</div>
				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="https://jogjacagar.jogjaprov.go.id/detail/4389/struktur-cagar-budaya-benteng-kraton-yogyakarta"
							class="category-box"
							data-background-image="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_1c9a1032970182481422d07e8922c3d4.jpg"
							style="position:relative;">
							<div class="category-box-content">

								<h3>Struktur Cagar...</h3>
							</div>

						</a>
					</div>
				</div>
				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="https://jogjacagar.jogjaprov.go.id/detail/4388/kompleks-pasiraman-umbul-binangun-tamansari-kraton-yogyakarta"
							class="category-box"
							data-background-image="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_a7f1e77c70f8395dfbfa6e4fc1418d07.jpg"
							style="position:relative;">
							<div class="category-box-content">

								<h3>Kompleks Pasiraman...</h3>
							</div>

						</a>
					</div>
				</div>
				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="https://jogjacagar.jogjaprov.go.id/detail/4387/alun-alun-lor-dan-alun-alun-kidul-kraton"
							class="category-box"
							data-background-image="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_60bd59ebf8c0f1368ca87293920889fa.jpg"
							style="position:relative;">
							<div class="category-box-content">

								<h3>Alun-alun Lor dan...</h3>
							</div>

						</a>
					</div>
				</div>
				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="https://jogjacagar.jogjaprov.go.id/detail/4386/jalan-rukunan-kotagede"
							class="category-box"
							data-background-image="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_5038a67559cba66ed181b0847310a210.jpg"
							style="position:relative;">
							<div class="category-box-content">

								<h3>Jalan Rukunan Kotagede</h3>
							</div>

						</a>
					</div>
				</div>
				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="https://jogjacagar.jogjaprov.go.id/detail/4380/makam-raja-raja-mataram-di-kotagede"
							class="category-box"
							data-background-image="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_d210f89feddbf919e428bb8acc00d93b.jpg"
							style="position:relative;">
							<div class="category-box-content">

								<h3>Makam Raja-raja...</h3>
							</div>

						</a>
					</div>
				</div>
				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="https://jogjacagar.jogjaprov.go.id/detail/4379/kompleks-kepatihan" class="category-box"
							data-background-image="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_36e697c889538c5c619d61d296659715.jpg"
							style="position:relative;">
							<div class="category-box-content">

								<h3>Kompleks Kepatihan</h3>
							</div>

						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Categories Carousel / End -->

	<!-- Content 3
	================================================== -->
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-top-50">
					<strong class="headline-with-separator">Objek Warisan Budaya</strong>
					<span>Warisan Budaya di Daerah Istimewa Yogyakarta</span>
				</h3>
			</div>

		</div>
	</div>


	<!-- Categories Carousel -->
	<div class="fullwidth-carousel-container margin-top-25">
		<div class="fullwidth-slick-carousel category-carousel">
		</div>
	</div>
	</section>
	<!-- Categories Carousel / End -->
	<!-- Fullwidth Section -->
	<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h3 class="headline centered margin-bottom-45">
						Objek Cagar Budaya terbaru
						<span>Cagar Budaya yang baru saja ditambahkan</span>
					</h3>
				</div>
			</div>
		</div>

		<!-- Carousel / Start -->
		<div class="simple-fw-slick-carousel dots-nav">

			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4391/ruas-jalan-sepanjang-sumbu-filosofi"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_c5af72efc66b56cbb4bf9db39981cbbc.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Ruas Jalan Sepanjang Sumbu Filosofi</h3>
							<span>Struktur  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4390/regol-brajanala-kraton-yogyakarta"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_d679556bb0b1c861c32817bb934680c7.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Regol Brajanala Kraton Yogyakarta</h3>
							<span>Struktur  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4389/struktur-cagar-budaya-benteng-kraton-yogyakarta"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_1c9a1032970182481422d07e8922c3d4.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Struktur Cagar Budaya Benteng Kraton Yogyakarta</h3>
							<span>Struktur  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4388/kompleks-pasiraman-umbul-binangun-tamansari-kraton-yogyakarta"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_a7f1e77c70f8395dfbfa6e4fc1418d07.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Kompleks Pasiraman Umbul Binangun Tamansari Kraton Yogyakarta</h3>
							<span>Struktur  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4387/alun-alun-lor-dan-alun-alun-kidul-kraton"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_60bd59ebf8c0f1368ca87293920889fa.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Alun-alun Lor dan Alun-alun Kidul Kraton </h3>
							<span>Struktur  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4386/jalan-rukunan-kotagede"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_5038a67559cba66ed181b0847310a210.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Jalan Rukunan Kotagede</h3>
							<span>Struktur  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4380/makam-raja-raja-mataram-di-kotagede"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_d210f89feddbf919e428bb8acc00d93b.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Makam Raja-raja Mataram di Kotagede</h3>
							<span>Situs  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4379/kompleks-kepatihan"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_36e697c889538c5c619d61d296659715.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Kompleks Kepatihan</h3>
							<span>Situs  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4378/masjid-agung-puro-pakualaman"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_4e567a882424e537b93bfbf12bff163e.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Masjid Agung Puro Pakualaman</h3>
							<span>Situs  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>
			<div class="fw-carousel-item">
				<a href="https://jogjacagar.jogjaprov.go.id/detail/4376/watu-gilang-kotagede"
					class="listing-item-container compact">
					<div class="listing-item">
						<img src="https://jogjacagar.jogjaprov.go.id/assets/uploads/files/thumbs/thumb_176602c58ae17bf52e71fd81cea18faf.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" >


						<div class="listing-item-content">
							<h3> Watu Gilang Kotagede</h3>
							<span>Benda  </span>
							<span><hr></span>
							<span>Cagar Budaya</span>
						</div>
					</div>
				</a>
			</div>


			<!-- Listing Item / End -->

		</div>
	</section>
	<!-- Carousel / End -->
	<!-- Listings -->
	<!-- Listings / End -->
	<section class="fullwidth taxonomy-gallery-container margin-top-70 padding-top-75 padding-bottom-70"
		data-background-color="#f9f9f9">

		<!-- Info Section -->
		<div class="container">
			<div class="row">
				<div class="col-md-4">

					<!-- Infobox -->
					<div class="taxonomy-gallery-text">
						<h2>Bangunan 3D<br> Cagar Budaya</h2>
							<p>Pendokumentasian Bangunan 3D Cagar Budaya menggunakan LIDAR</p>
							<a href="https://jogjacagar.jogjaprov.go.id/3d-tugu-yogyakarta"
								class="button margin-top-25">Melihat Bangunan 3D</a>

					</div>

					<!-- Infobox / End -->

				</div>
			</div>
		</div>
		<!-- Info Section / End -->

		<div class="gallery-wrap">
			<a href="https://jogjacagar.jogjaprov.go.id/3d-tugu-yogyakarta" class="item">
				<h3>Tugu Yogyakarta <span></span></h3>
				<img src="https://jogjacagar.jogjaprov.go.id/assets/images/3d1.jpg" alt="">


			</a>

				<a href="https://jogjacagar.jogjaprov.go.id/3d-panggung-krapyak" class="item">
					<h3>Panggung Krapyak <span></span></h3>
					<img src="https://jogjacagar.jogjaprov.go.id/assets/images/3d2.jpg" alt="">



			</a>

					<a href="https://jogjacagar.jogjaprov.go.id/3d-plengkung-nirbaya" class="item">
						<h3>Candi Banyunibo<span></span></h3>
						<img src="https://jogjacagar.jogjaprov.go.id/assets/images/2.jpg" alt="">
                			</a>

		</div>


	</section>
	<section class="fullwidth border-top padding-bottom-80 padding-top-80 margin-top-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="boxed-photo-banner">
						<!-- Infobox -->
						<div class="boxed-photo-banner-text">
							<h2>Peta Interaktif Jogjacagar</h2>
							<p>Berbagai macam Cagar Budaya dan Warisan Budaya yang tersebar di Yogyakarta</p>
							<a href="https://jogjacagar.jogjaprov.go.id/Petainteraktif"
								class="button margin-top-25">Jelajah</a>
						</div>
						<!-- Infobox / End -->
						<img src="https://jogjacagar.jogjaprov.go.id/assets/images/slider-bg-02.jpg" alt="">
					</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Flip banner -->
	<a href="https://jogjacagar.jogjaprov.go.id/Petainteraktif" class="flip-banner parallax"
		data-background="images/slider-bg-02.jpg" data-color="#f91942" data-color-opacity="0.85" data-img-width="2500"
		data-img-height="1666">
		<div class="flip-banner-content">
			<h2 class="flip-visible">Jelajahi Objek-objek Cagar Budaya dan Warisan Budaya</h2>
			<h2 class="flip-hidden">Jelajah<i class="sl sl-icon-arrow-right"></i></h2>
		</div>
	</a>
	<!-- Flip banner / End -->





	<!-- Wrapper / End -->




	<section>
		<div id="footer" class="sticky-footer">
			<!-- Main -->
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-6">
						<img
            class="footer-logo"
            src="https://jogjacagar.jogjaprov.go.id/assets/images/logo_jogacagar_new.png"
            alt=""
          />
						<a href="https://budaya.jogjaprov.go.id/"><img
              src="https://jogjacagar.jogjaprov.go.id/assets/images/img/logo-diy.png"
              alt
              style="max-height: 60px; margin: 5px"
          /></a>
							<a href="#"><img
              src="https://jogjacagar.jogjaprov.go.id/assets/images/img/logo-danais.png"
              alt
              style="max-height: 60px; margin: 5px"
          /></a>

								<br /><br />
								<p></p>
								<h5>Pengunjung</h5>
								<p class="hit-counter">
									Online : <b id="hit-online">-</b> | Harian : <b id="hit-day">-</b> |
									Bulanan : <b id="hit-month">-</b> | Tahunan :
									<b id="hit-year">-</b> | Total : <b id="hit-total">-</b>
								</p>
					</div>

					<div class="col-md-3 col-sm-6">
						<h4>Helpful Links</h4>
						<ul class="footer-links">
							<li>
								<a target="_blank" href="https://kemdikbud.go.id">Kemendikbud</a>
							</li>
							<li>
								<a target="_blank" href="https://kemenpar.go.id">Kementerian Pariwisata</a>
							</li>
							<li>
								<a target="_blank" href="https://pariwisata.jogjakota.go.id">Pariwisata Kota Jogja</a>
							</li>
							<li>
								<a target="_blank" href="https://jogjaprov.go.id">Pemprov DIY</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>

					<div class="col-md-3 col-sm-12">
						<h4>Alamat:</h4>
						<div class="text-widget">
							<span
              >Jalan Cendana No.11, Semaki, Umbulharjo, Kota Yogyakarta, Daerah
              Istimewa Yogyakarta 55166</span>
							<br />
            Phone: <span><a href="#"> (0274) 562628 / (0274) 562628 </a></span><br />
            E-Mail:<span>
              <a href="mailto:budaya@jogjaprov.go.id"
                >budaya@jogjaprov.go.id</a
              > </span><br />
            Instagram:<span>
              <a
                href="https://www.instagram.com/dinaskebudayaandiy"
                target="_blank"
                >dinaskebudayaandiy</a
              > </span><br />
            Youtube:<span>
              <a href="https://www.youtube.com/c/tasteofjogjatv" target="_blank"
                >tasteofjogja</a
              > </span><br />
          </div>

							<ul class="social-icons margin-top-20">
								<li>
									<a class="instagram" href="https://www.instagram.com/dinaskebudayaandiy"
										target="_blank"><i class="instagram"></i></a>
								</li>
								<li>
									<a class="youtube" href="https://www.youtube.com/c/tasteofjogjatv"
										target="_blank"><i class="youtube"></i></a>
								</li>
							</ul>
						</div>
					</div>

					<!-- Copyright -->
					<div class="row">
						<div class="col-md-12">
							<div class="copyrights">
								© 2022 Dinas Kebudayaan Daerah Istimewa Yogyakarta.
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- Back To Top Button -->
	<div id="backtotop"><a href="#"></a></div>

	<script type="text/javascript">
		hit();
  hit_result();
  function hit() {
    $.ajax({
      type: "get",
      url: 'https://jogjacagar.jogjaprov.go.id/ajax/hit/',
      success: function (xhr) {},
    });
  }
  function hit_result() {
    $.ajax({
      type: "get",
      url: 'https://jogjacagar.jogjaprov.go.id/ajax/hit_result/',
      success: function (xhr) {
        $("#hit-online").text(xhr.online);
        $("#hit-day").text(xhr.day);
        $("#hit-month").text(xhr.month);
        $("#hit-year").text(xhr.year);
        $("#hit-total").text(xhr.total);
      },
    });
  }
	</script>

	<!-- Scripts
================================================== -->
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/scripts/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/scripts/jquery-migrate-3.3.2.min.js">
	</script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/mmenu.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/chosen.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/slick.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/rangeslider.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/magnific-popup.min.js">
	</script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/waypoints.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/counterup.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/tooltips.min.js"></script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/custom.js"></script>

	<!-- Leaflet // Docs: https://leafletjs.com/ -->
	<script src="https://jogjacagar.jogjaprov.go.id/assets/scripts/leaflet.min.js"></script>

	<!-- Leaflet Maps Scripts -->
	<script src="https://jogjacagar.jogjaprov.go.id/assets/scripts/leaflet-markercluster.min.js"></script>
	<script src="https://jogjacagar.jogjaprov.go.id/assets/scripts/leaflet-gesture-handling.min.js"></script>
	<script src="https://jogjacagar.jogjaprov.go.id/assets/scripts/leaflet-listeo.js"></script>

	<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
	<script src="https://jogjacagar.jogjaprov.go.id/assets/scripts/leaflet-autocomplete.js"></script>
	<script src="https://jogjacagar.jogjaprov.go.id/assets/scripts/leaflet-control-geocoder.js"></script>

	<!-- Typed Script -->
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/typed.js"></script>

	<script>
		for (i = 1; i <= lengthSlider; i++) {
    var typed = new Typed(".typed-words-" + i, {
      strings: [
        "Sistem Informasi Cagar Budaya <br> Daerah Istimewa Yogyakarta",
      ],
      typeSpeed: 80,
      backSpeed: 80,
      backDelay: 4000,
      startDelay: 1000,
      loop: true,
      showCursor: true,
    });
  }
	</script>
	<script>
		$(window).on("load", function () {
    $(".msps-shapes").addClass("shapes-animation");
  });
	</script>

	<script src="https://jogjacagar.jogjaprov.go.id/assets/scripts/parallax.min.js"></script>
	<script>
		$(document).ready(function (e) {
    $(".msps-slider").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 1000,
      fade: true,
      cssEase: "linear",
    });
    setInterval(function (e) {
      animateCorouselCagarBudaya("slick-slide0");
      animateCorouselWarisan("slick-slide");
      animateCorouselTerbaru("slick-slide");
    }, 5000);
  });
  var indexCorousel = 0;
  var indexCorouselWarisan = 17;
  var indexCorouselTerbaru = 30;
  function animateCorouselCagarBudaya(elm) {
    $(`#${elm}${indexCorousel}`).trigger("click");
    if (indexCorousel == 8) {
      indexCorousel = 0;
    } else {
      indexCorousel++;
    }
  }
  function animateCorouselWarisan(elm) {
    $(`#${elm}${indexCorouselWarisan}`).trigger("click");
    if (indexCorouselWarisan == 10) {
      indexCorouselWarisan = 17;
    } else {
      indexCorouselWarisan--;
    }
  }
  function animateCorouselTerbaru(elm) {
    $(`#${elm}${indexCorouselTerbaru}`).trigger("click");
    if (indexCorouselTerbaru == 39) {
      indexCorouselTerbaru = 30;
    } else {
      indexCorouselTerbaru++;
    }
  }
	</script>

	<!-- REVOLUTION SLIDER SCRIPT -->
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/themepunch.tools.min.js">
	</script>
	<script type="text/javascript" src="https://jogjacagar.jogjaprov.go.id/assets/scripts/themepunch.revolution.min.js">
	</script>

	<script type="text/javascript">
		var tpj = jQuery;
  var revapi4;
  $(document).ready(function () {
    if ($("#rev_slider_4_1").revolution == undefined) {
      revslider_showDoubleJqueryError("#rev_slider_4_1");
    } else {
      revapi4 = $("#rev_slider_4_1")
        .show()
        .revolution({
          sliderType: "standard",
          jsFileLocation: "scripts/",
          sliderLayout: "auto",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "on",
            touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false,
            },
            arrows: {
              style: "zeus",
              enable: true,
              hide_onmobile: true,
              hide_under: 600,
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              tmp: '<div class="tp-title-wrap"></div>',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 40,
                v_offset: 0,
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 40,
                v_offset: 0,
              },
            },
            bullets: {
              enable: false,
              hide_onmobile: true,
              hide_under: 600,
              style: "hermes",
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              direction: "horizontal",
              h_align: "center",
              v_align: "bottom",
              h_offset: 0,
              v_offset: 32,
              space: 5,
              tmp: "",
            },
          },
          viewPort: {
            enable: true,
            outof: "pause",
            visible_area: "80%",
          },
          responsiveLevels: [1200, 992, 768, 480],
          visibilityLevels: [1200, 992, 768, 480],
          gridwidth: [1180, 1024, 778, 480],
          gridheight: [640, 500, 400, 300],
          lazyType: "none",
          parallax: {
            type: "mouse",
            origo: "slidercenter",
            speed: 2000,
            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 25, 47, 48, 49, 50, 51, 55],
            type: "mouse",
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          },
        });
    }
  }); /*ready*/
	</script>
	<script>
		$(document).on("click", "#btn-search", function (e) {
    searchCagar();
  });
  $(document).on("click", "#close-search", function (e) {
    closeSearch();
  });
  setInterval(function (e) {
    $(".slick-arrow").trigger("click");
  }, 15000);

  function searchCagar() {
    $(".result-item-search").html("");
    let kategoriSearch = $("#kategori-search").val();
    let namaWarisan = $("#nama-warisan-cagar-budaya").val();
    let alamatWarisan = $("#alamat-warisan").val();
    $.ajax({
      type: "POST",
      url: "https://jogjacagar.jogjaprov.go.id//Cagar_budaya/searchCagar",
      data: {
        kategori: kategoriSearch,
        namaCagarBudaya: namaWarisan,
        alamatCagarBudaya: alamatWarisan,
      },
      dataType: "JSON",
      success: function (e) {
        $(".result-item-search").html(e);
        $(".main-result-search").css("display", "block");
      },
    });
  }
  function closeSearch() {
    $(".main-result-search").css("display", "none");
  }
	</script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems ! 
	The following part can be removed on Server for On Demand Loading) -->
	<script src="https://jogjacagar.jogjaprov.go.id/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://jogjacagar.jogjaprov.go.id/assets/plugins/select2/select2.min.js"></script>

</body>

</html>
