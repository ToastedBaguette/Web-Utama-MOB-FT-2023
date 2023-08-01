@extends('layouts.appwebsite')

@section('header')
<header id="navbar" class="main-header main-header-overlay" style='position: fixed; background-color:transparent;'>
	<div class="mainbar-wrap">
		<div class="container-fluid mainbar-container">
			<div class="mainbar">
				<div class="row mainbar-row align-items-lg-stretch px-4">
					<div class="col pr-5">
						<div class="navbar-header">
							<a class="navbar-brand" href="#content" rel="home">
								<span class="navbar-brand-inner">
									<img class="logo-dark" src="{{ url ('./img/mobft.png') }}" alt="Ave HTML Template">
									<img class="logo-sticky" src="{{ url ('./img/mobft.png') }}"
										alt="Ave HTML Template">
									<img class="mobile-logo-default" src="{{ url ('./img/mobft.png') }}"
										alt="Ave HTML Template">
									<img class="logo-default" src="{{ url('./img/mobft.png') }}"
										style="max-height:50px;" alt="Ave HTML Template">
								</span>
							</a>
							<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile"
								data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false"
								data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
								<span class="sr-only">Toggle navigation</span>
								<span class="bars">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</span>
							</button>
						</div><!-- /.navbar-header -->
					</div><!-- /.col -->
					<div class="col">
						<div class="collapse navbar-collapse" id="main-header-collapse">
							<ul id="primary-nav"
								class="main-nav nav align-items-lg-stretch justify-content-lg-end main-nav-hover-underline-1"
								data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }'
								data-localscroll="true">
								<li class="is-active">
									<a href="#content">
										<span class="link-icon"></span>
										<span class="link-txt">
											<span class="link-ext"></span>
											<span class="txt text-white">Beranda</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#storyline">
										<span class="link-icon"></span>
										<span class="link-txt">
											<span class="link-ext"></span>
											<span class="txt text-white">Storyline</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#jadwal">
										<span class="link-icon"></span>
										<span class="link-txt">
											<span class="link-ext"></span>
											<span class="txt text-white">Jadwal</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#rectorcup">
										<span class="link-icon"></span>
										<span class="link-txt">
											<span class="link-ext"></span>
											<span class="txt text-white">Rector Cup</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#faq">
										<span class="link-icon"></span>
										<span class="link-txt">
											<span class="link-ext"></span>
											<span class="txt text-white">FAQ</span>
										</span>
									</a>
								</li>

								@guest
								<li>
									<div id="divLogin">
										<a id="aLogin"
											class="btn btn-solid text-uppercase circle btn-bordered border-thick font-size-12 font-weight-semibold"
											href="{{route('login')}}">
											<span>
												<span class="btn-gradient-bg"></span>
												<span class="btn-txt">Masuk</span>
												<svg xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
													class="btn-gradient-border" width="100%" height="100%">
													<defs>
														<linearGradient id="svg-border-5c77b6395a8f2" x1="0%" y1="0%"
															x2="100%" y2="0%">
															<stop offset="0%"></stop>
															<stop offset="100%"></stop>
														</linearGradient>
													</defs>
												</svg>
											</span>
										</a>
										<div>
								</li>
								@else
								<li>
									<a href="/dashboard">
										<span class="link-icon"></span>
										<span class="link-txt">
											<span class="link-ext"></span>
											<span class="txt text-white">Dasbor ></span>
										</span>
									</a>
								</li>
								<div class="header-module">
									<div class="header-module">
									</div><!-- /.header-module -->
								</div><!-- /.header-module -->
								@endguest
							</ul><!-- /#primary-nav  -->
						</div><!-- /#main-header-collapse -->
					</div><!-- /.col -->
				</div><!-- /.mainbar-row -->
			</div><!-- /.mainbar -->
		</div><!-- /.mainbar-container -->
	</div><!-- /.mainbar-wrap -->
</header><!-- /.main-header -->

@endsection

@section('content')
<main class="content bg-cover" style="background-image: url('./img/bg5.png');">

	<section id="content" class="vc_row py-5 fullheight d-flex flex-wrap align-items-center"
		style="background-color: transparent;">
		<div class="container">
			<div class="row">

				<div class="lqd-column col-lg-6 col-md-6 col-6" style="margin-left:0;" data-custom-animations="true"
					data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>

					<div class="ld-fancy-heading">
						<h2 class="h1 text-white mt-20" data-fittext="true"
							data-fittext-options='{"compressor":0.5,"maxFontSize":"currentFontSize","minFontSize":"35"}'
							data-split-text="true" data-split-options='{"type":"lines"}'>
							<span id="titleHome" class="ld-fh-txt text-glow2"> Selamat Datang di <br> <br> MOB FT
								2023</span>
						</h2>
						<div class="lqd-column col-md-11 col-xs-12">

							<div class="lqd-column-inner">

								<div class="row">

									<!-- <div class="lqd-column col-md-10">

										<div class="countdown text-arapawa" data-fittext="true" data-fittext-options='{ "compressor": 0.75, "minFontSize": 60, "maxFontSize": 60 }' data-plugin-countdown="true" data-countdown-options='{"until":"2021-07-10"}' style="text-shadow: 0px 0px 20px #bababa">
										</div>

									</div> -->


								</div><!-- /.row -->

								<!-- modul dan liat kelompok -->

								<a target="_blank" href="https://tinyurl.com/ModulMOBFT2021" id="downloadButton"
									class="btn btn-outline btn-sm circle btn-bordered font-size-14 ltr-sp-025 px-2 lh-15 font-weight-semibold">
									<span>
										<span class="btn-txt">Unduh Modul</span>
									</span>
								</a>

								<a href="https://docs.google.com/spreadsheets/d/1tIwmGb42Bvs2QpwJ935UoiMC4wXKMwg9CnjgULeAtkw/edit#gid=0"
									target="_blank"
									class="btn btn-outline btn-sm circle btn-bordered font-size-14 ltr-sp-025 px-2 lh-15 font-weight-semibold">
									<span>
										<span class="btn-txt">Lihat Kelompok</span>
									</span>
								</a>

								<!-- end of modul dan liat kelompok  -->


							</div><!-- /.lqd-column-inner -->
						</div><!-- /.lqd-column col-md-8 -->

					</div><!-- /.ld-fancy-heading -->


				</div>
				<div id="jam" style=" margin-top:4vh;max-width:100%;max-height:100%;"
					class="lqd-column col-lg-6 col-md-6 col-6" data-custom-animations="true"
					data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
					<img src="./img/logo.gif" alt="Minimalism" />
				</div>
				<!-- /.lqd-column -->

				<!-- /.lqd-column -->

			</div><!-- /.row -->
			<div class="scroll-down" id="tandascroll"></div>
		</div><!-- /.container -->
	</section>

	<section id="storyline" class="vc_row pt-100 pb-50 fullheight d-flex flex-wrap align-items-center ">
		<div class="container">
			<div class="row d-flex flex-wrap align-items-center">

				<div class="lqd-column col-md-6">

					<div class="liquid-img-group-container mb-md-0">
						<div class="liquid-img-group-inner">
							<div class="liquid-img-group-single">
								<div class="liquid-img-group-img-container">
									<div class="liquid-img-container-inner">
										<figure>
											<img id="gambarTerbang" src="./img/terbang.png" class="terbang"
												alt="Setup Ave" />
										</figure>
									</div><!-- /.liquid-img-container-inner -->
								</div><!-- /.liquid-img-group-img-container -->
							</div><!-- /.liquid-img-group-single -->
						</div><!-- /.liquid-img-group-inner -->
					</div><!-- /.liquid-img-group-container -->

				</div><!-- /.col-md-6 -->

				<div class="lqd-column col-md-6 pl-md-6 pr-md-7" style="margin:0;">

					<header class="fancy-header text-center mb-35">
						<h2 class="font-size-40 text-white text-glow">Storyline</h2>
						<p id="tulisan" class="text-justify text-glow2">Ferdy dan Nayla adalah sepasang ilmuwan yang
							berhasil menciptakan mesin waktu.
							Dengan pimpinan mereka, Roamerus kembali ke masa lalu untuk mempelajari kehidupan-kehidupan
							di masa lampau.
							Ketika melewati masa-masa dalam sejarah, tiba-tiba mesin waktu mulai tidak bisa dikontrol
							dan akhirnya mereka terpaksa
							untuk berhenti pada suatu masa yang tidak diketahui. Saat menyadarinya, ternyata mereka
							terdampar di tepi kota bernama Horizon.
							Di kota yang sangat maju itulah Ferdy dan Nayla memulai perjalanan mereka dan menemukan hal
							- hal baru yang telah melampaui masa sekarang.
							Apa saja yang dilakukan Ferdy dan Nayla di Kota Horizon?
							Akankah Ferdy dan Nayla berhasil memperbaiki mesin waktu mereka? Ikuti perjalanan Ferdy dan
							Nayla di Kota Horizon
							dan bantu mereka agar dapat kembali ke masa kini ! </p>
					</header>

				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->

		</div><!-- /.container -->
	</section>

	<section id="jadwal" class="vc_row pt-90 pb-90 mt-100 mb-100 bg-cover" data-parallax="true"
		data-parallax-options='{"parallaxBG":true}'>
		<div class="container">
			<div class="row">

				<div class="lqd-column col-md-6 col-md-offset-3 px-md-5 mb-60 mt-50">
					<header class="fancy-heading text-center">
						<h2 class="mt-0 font-size-44 text-white text-glow">Jadwal MOB FT 2023</h2>
						<!-- <p class="font-size-17 lh-175">Jadwal MOB FT 2021:</p> -->
					</header><!-- /.fancy-heading -->
				</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

				<div class="lqd-column col-md-10 col-md-offset-1 mb-70">

					<div class="one-roadmap" data-custom-animations="true"
						data-ca-options='{"triggerHandler": "inview", "animationTarget": ".one-roadmap-item", "duration": 1200, "delay": 150, "easing": "easeOutQuint", "initValues": { "translateY": 50, "translateZ": -150, "rotateX": -95, "opacity": 0 }, "animations": { "translateY": 0, "translateZ": 0, "rotateX": 0, "opacity": 1 }}'>

						<div class="one-roadmap-inner">

							<?php
									use Carbon\Carbon;
									if (strtotime(Carbon::now()) > strtotime("July 25 2021")){
										echo "<div class='one-roadmap-item one-roadmap-item-checked text-white text-glow2'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info '>
											<h6 >24 Juli 2021</h6>
											<p>Pra-MOB</p>
										</div>
										<span class='one-roadmap-mark'>
										<i>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
												<path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
											</svg>
										</i>
										</span>
										</div>";
									}
									else {
										echo "<div class='one-roadmap-item text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>24 Juli 2021</h6>
											<p>Pra-MOB</p>
										</div>
										<span class='one-roadmap-mark'>
										</span>
										</div>";
									}
								?>
							<?php
									if (strtotime(Carbon::now()) > strtotime("July 31 2021")){
										echo "<div class='one-roadmap-item one-roadmap-item-checked text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>30 Juli 2021</h6>
											<p>MOB FT Hari Pertama</p>
										</div>
										<span class='one-roadmap-mark'>
										<i>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
												<path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
											</svg>
										</i>
										</span>
										</div>";
									}
									else {
										echo "<div class='one-roadmap-item text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>30 Juli 2021</h6>
											<p>MOB FT Hari Pertama</p>
										</div>
										<span class='one-roadmap-mark'>
										</span>
										</div>";
									}
								?>
							<?php
									if (strtotime(Carbon::now()) > strtotime("August 01 2021")){
										echo "<div class='one-roadmap-item one-roadmap-item-checked text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>31 Juli 2021</h6>
											<p>MOB FT Hari Kedua</p>
										</div>
										<span class='one-roadmap-mark'>
										<i>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
												<path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
											</svg>
										</i>
										</span>
										</div>";
									}
									else {
										echo "<div class='one-roadmap-item text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>31 Juli 2021</h6>
											<p>MOB FT Hari Kedua</p>
										</div>
										<span class='one-roadmap-mark'>
										</span>
										</div>";
									}
								?>
							<?php
									if (strtotime(Carbon::now()) > strtotime("August 03 2021")){
										echo "<div class='one-roadmap-item one-roadmap-item-checked text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>02 Agustus 2021</h6>
											<p>MOB FT Hari Ketiga</p>
										</div>
										<span class='one-roadmap-mark'>
										<i>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
												<path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
											</svg>
										</i>
										</span>
										</div>";
									}
									else {
										echo "<div class='one-roadmap-item text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>02 Agustus 2021</h6>
											<p>MOB FT Hari Ketiga</p>
										</div>
										<span class='one-roadmap-mark'>
										</span>
										</div>";
									}
								?>
							<?php
									if (strtotime(Carbon::now()) > strtotime("August 04 2021")){
										echo "<div class='one-roadmap-item one-roadmap-item-checked text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>03 Agustus 2021</h6>
											<p>MOB FT Hari Keempat</p>
										</div>
										<span class='one-roadmap-mark'>
										<i>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
												<path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
											</svg>
										</i>
										</span>
										</div>";
									}
									else {
										echo "<div class='one-roadmap-item text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>03 Agustus 2021</h6>
											<p>MOB FT Hari Keempat</p>
										</div>
										<span class='one-roadmap-mark'>
										</span>
										</div>";
									}
								?>
							<?php
									if (strtotime(Carbon::now()) > strtotime("August 05 2021")){
										echo "<div class='one-roadmap-item one-roadmap-item-checked text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>04 Agustus 2021</h6>
											<p>Rector Cup Hari Pertama</p>
										</div>
										<span class='one-roadmap-mark'>
										<i>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
												<path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
											</svg>
										</i>
										</span>
										</div>";
									}
									else {
										echo "<div class='one-roadmap-item text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>04 Agustus 2021</h6>
											<p>Rector Cup Hari Pertama</p>
										</div>
										<span class='one-roadmap-mark'>
										</span>
										</div>";
									}
								?>
							<?php
									if (strtotime(Carbon::now()) > strtotime("August 06 2021")){
										echo "<div class='one-roadmap-item one-roadmap-item-checked text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>05 Agustus 2021</h6>
											<p>Rector Cup Hari Kedua</p>
										</div>
										<span class='one-roadmap-mark'>
										<i>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
												<path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
											</svg>
										</i>
										</span>
										</div>";
									}
									else {
										echo "<div class='one-roadmap-item text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>05 Agustus 2021</h6>
											<p>Rector Cup Hari Kedua</p>
										</div>
										<span class='one-roadmap-mark'>
										</span>
										</div>";
									}
								?>
							<?php
									if (strtotime(Carbon::now()) > strtotime("August 07 2021")){
										echo "<div class='one-roadmap-item one-roadmap-item-checked text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>06 Agustus 2021</h6>
											<p>Rector Cup Hari Ketiga dan Hari Apresiasi Seni</p>
										</div>
										<span class='one-roadmap-mark'>
										<i>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
												<path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
											</svg>
										</i>
										</span>
										</div>";
									}
									else {
										echo "<div class='one-roadmap-item text-white'>

										<span class='one-roadmap-bar'></span>

										<div class='one-roadmap-info'>
											<h6>06 Agustus 2021</h6>
											<p>Rector Cup Hari Ketiga dan Hari Apresiasi Seni</p>
										</div>
										<span class='one-roadmap-mark'>
										</span>
										</div>";
									}
								?>

						</div><!-- /.one-roadmap-inner -->

					</div><!-- /.one-roadmap -->

				</div><!-- /.lqd-column col-md-10 -->

			</div><!-- /.row -->
		</div><!-- /.container -->

	</section>

	<!-- Rector Cup -->
	<section id="rectorcup" class="vc_row pt-150 pb-70 mt-100 ">
		<div class="lqd-particles-bg-wrap">
			<div class="ld-particles-container">
				<div class="ld-particles-inner" id="particles-1559739661542-e9d04c39-a9eb" data-particles="true"
					data-particles-options='{"particles":{"number":{"value":4}, "color":{"value":["#fdc14c", "#fd5c4c", "#48bb0f"]}, "shape":{"type":["circle"]}, "opacity":{"random":true, "anim":{"enable":true, "opacity_min":0.80000000000000004, "speed":1, "sync":true}}, "size":{"value":5, "random":true, "anim":{"enable":true, "size_min":52}}, "move":{"enable":true, "direction":"none", "speed":1, "random":true, "out_mode":"out"}}, "interactivity":[]}'>
				</div><!-- /.ld-particles-inner -->
			</div><!-- /.ld-particles-container -->
		</div><!-- /.lqd-particles-bg-wrap -->

		<div class="container">
			<div class="row mb-150">

				<div class="lqd-column col-md-6 col-md-offset-3">
					<header class="fancy-heading text-center mb-4">
						<h2 style="margin-bottom: 100px;" class="font-size-40 my-0 text-white text-glow">Rector Cup</h2>
					</header>
				</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

				<div class="lqd-column col-md-10 col-md-offset-1">
					<div id="showMedal" style="display:none;">
						<img style="object-fit: cover; position: relative" src="./img/medal_Images/medal2.png" />
						<div>
							<h2 class="text-glow4" id="text-glow4"
								style="position: absolute; top: 50%; left: 25%; transform: translate(-50%, 50%); ">
								{{$perak[0]->Jumlah}}</h2>
							<h2 class="text-glow4" id="text-glow4"
								style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, 50%);">
								{{$emas[0]->Jumlah}}</h2>
							<h2 class="text-glow4" id="text-glow4"
								style="position: absolute; top: 50%; left: 75%; transform: translate(-50%, 50%);">
								{{$perunggu[0]->Jumlah}}</h2>
						</div>
					</div>
				</div>

			</div>
			<div id="infoRC" style="display:none;" style="margin:20px 20px;" class="row mt-5 mb-100">

				<div class="lqd-column col-md-6 col-md-offset-3">

					<div class="carousel-container carousel-vertical-3d">

						<div class="carousel-items">

							<div class="carousel-item">

								<div class="iconbox iconbox-side iconbox-round iconbox-shadow iconbox-heading-sm iconbox-filled iconbox-filled iconbox-filled-hover"
									id="iconbox-carousel-1" data-animate-icon="true"
									data-plugin-options='{"color":"rgb(131, 11, 176):rgb(186, 0, 255)", "hoverColor":"#fff"}'>
									<span class="iconbox-fill-el iconbox-fill-el-hover bg-gradient-secondary-br"></span>
									<div class="iconbox-icon-wrap">
										<span class="iconbox-icon-container">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500">
												<defs>
													<style>
														.cls-1 {
															fill: none;
														}

														.cls-2 {
															fill: url(#linear-gradient);
														}

														.cls-3 {
															fill: url(#linear-gradient-2);
														}

														.cls-4 {
															fill: url(#linear-gradient-3);
														}

														.cls-5 {
															fill: url(#linear-gradient-4);
														}

														.cls-6 {
															fill: url(#linear-gradient-5);
														}

														.cls-7 {
															fill: url(#linear-gradient-6);
														}

														.cls-8 {
															clip-path: url(#clip-path);
														}

														.cls-9 {
															fill: url(#linear-gradient-7);
														}
													</style>
													<linearGradient id="linear-gradient" x1="286.44" y1="92.6"
														x2="345.9" y2="92.6" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#7df5d0" />
														<stop offset="1" stop-color="#209c8c" />
													</linearGradient>
													<linearGradient id="linear-gradient-2" x1="243.86" y1="463.12"
														x2="287.74" y2="463.12" xlink:href="#linear-gradient" />
													<linearGradient id="linear-gradient-3" x1="203.49" y1="233.23"
														x2="396.32" y2="233.23" xlink:href="#linear-gradient" />
													<linearGradient id="linear-gradient-4" x1="157.5" y1="63.39"
														x2="216.95" y2="63.39" xlink:href="#linear-gradient" />
													<linearGradient id="linear-gradient-5" x1="107.07" y1="127.45"
														x2="258.51" y2="127.45" xlink:href="#linear-gradient" />
													<linearGradient id="linear-gradient-6" x1="215.65" y1="361.5"
														x2="299.9" y2="361.5" xlink:href="#linear-gradient" />
													<clipPath id="clip-path">
														<path class="cls-1"
															d="M537.43,322.58h32.19l-32.19-32Zm0-73v7.7c0,13.42,3.66,17.05,9.52,22.87L581,314c5.53,5.49,8.69,8.63,21.72,8.63h61.83l-30.92-30.69V239.75l-26.26,26.07L581.1,239.75v56.43L560.27,275.5V219.07L537.43,196.4Zm66.88-66.88h-51.1l54.15,53.75,26.91-26.71,20.18,20v53.43l22.84,22.67V248c0-13.42-3.66-17.05-9.52-22.87l-34-33.78c-5.53-5.49-8.69-8.63-21.72-8.63Zm40.8,0,32.19,32v-32Z" />
													</clipPath>
													<linearGradient id="linear-gradient-7" x1="730.64" y1="1124.71"
														x2="731.42" y2="1124.71"
														gradientTransform="matrix(0, 229.22, 229.22, 0, -257192.72, -167310.62)"
														xlink:href="#linear-gradient" />
												</defs>
												<g id="Layer_1" data-name="Layer 1">
													<ellipse id="_Path_" data-name="&lt;Path&gt;" class="cls-2"
														cx="316.17" cy="92.6" rx="29.73" ry="32.86" />
													<g id="_Group_" data-name="&lt;Group&gt;">
														<path id="_Path_2" data-name="&lt;Path&gt;" class="cls-3"
															d="M243.86,441.89a310.8,310.8,0,0,0,43.88,48.53,269.09,269.09,0,0,1-38.55-54.6Q246.46,439,243.86,441.89Z" />
														<path id="_Path_3" data-name="&lt;Path&gt;" class="cls-4"
															d="M250.94,105.21C280.12,145,297.14,188.8,239.4,250.87c-57.51,61.82-35.73,129.28-5.28,176.82,2.13-3.12,4.29-6.44,6.46-9.93-16.78-39.94-22.81-90.1,17.57-133.78,47.43-51.3,120.78-77.61,138.17-245.19C396.32,38.78,346.26,198.39,250.94,105.21Z" />
													</g>
													<g id="_Group_2" data-name="&lt;Group&gt;">
														<ellipse id="_Path_4" data-name="&lt;Path&gt;" class="cls-5"
															cx="187.22" cy="63.39" rx="29.73" ry="32.86" />
														<path id="_Path_5" data-name="&lt;Path&gt;" class="cls-6"
															d="M258.51,215.56C207.39,156.7,224.24,114.5,252.46,76,157.14,169.18,107.07,9.57,107.07,9.57c16.29,157,81.72,190,128.92,235.75A175.58,175.58,0,0,0,258.51,215.56Z" />
														<path id="_Path_6" data-name="&lt;Path&gt;" class="cls-7"
															d="M265.82,285c39,83.56-50.17,176.24-50.17,176.24s117.4-100,75-199.43C281.89,269.52,273.54,277,265.82,285Z" />
													</g>
												</g>
												<g id="Layer_2" data-name="Layer 2">
													<g class="cls-8">
														<rect class="cls-9" x="513.3" y="158.58" width="188.12"
															height="188.12"
															transform="translate(-48.5 303.27) rotate(-27)" />
													</g>
												</g>
											</svg>
										</span>
									</div><!-- /.iconbox-icon-wrap -->
									<div class="contents  titleRC">
										<h3 class="font-weight-semibold" id="judulAtas">Olahraga</h3>
										<p style="color: darkgray">Mobile Legends Bang Bang, DOTA 2, PUBG Mobile, Catur,
											dan Lari.<br><br><br></p>
									</div><!-- /.contents -->
								</div><!-- /.iconbox -->

							</div><!-- /.carousel-item -->

							<div class="carousel-item">

								<div class="iconbox iconbox-side iconbox-round iconbox-shadow iconbox-heading-sm iconbox-filled iconbox-filled iconbox-filled-hover"
									id="iconbox-carousel-2" data-animate-icon="true"
									data-plugin-options='{"color":"rgb(131, 11, 176):rgb(186, 0, 255)","hoverColor":"#fff"}'>
									<span class="iconbox-fill-el iconbox-fill-el-hover bg-gradient-secondary-br"></span>
									<div class="iconbox-icon-wrap">
										<span class="iconbox-icon-container smallRC">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500">
												<defs>
													<style>
														.cls-1 {
															fill: url(#linear-gradient);
														}

														.cls-2 {
															fill: url(#linear-gradient-2);
														}

														.cls-3 {
															fill: url(#linear-gradient-3);
														}

														.cls-4 {
															stroke: #fff;
															stroke-miterlimit: 10;
															fill: url(#linear-gradient-4);
														}
													</style>
													<linearGradient id="linear-gradient" x1="19.85" y1="190.06"
														x2="225.27" y2="190.06" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#7df5d0" />
														<stop offset="1" stop-color="#209c8c" />
													</linearGradient>
													<linearGradient id="linear-gradient-2" x1="132.03" y1="341.85"
														x2="337.59" y2="341.85" xlink:href="#linear-gradient" />
													<linearGradient id="linear-gradient-3" x1="278.81" y1="109.57"
														x2="483.68" y2="109.57" xlink:href="#linear-gradient" />
													<linearGradient id="linear-gradient-4" x1="19.71" y1="318.7"
														x2="178.04" y2="318.7" xlink:href="#linear-gradient" />
												</defs>
												<g id="Layer_9" data-name="Layer 9">
													<path class="cls-1"
														d="M225.27,189.26a23.72,23.72,0,0,1-23.66,23.82c-11.52-2-15.18-6.73-23.51-10.53v52.08a9.84,9.84,0,0,0,.08,1.23A11.24,11.24,0,0,1,167.58,266a5.28,5.28,0,0,0-.63,0H114.64s0,0,0,0h-.44l0-.06c3.73-8.75,9.46-15.38,9.49-23a7,7,0,0,0,0-.9,23.47,23.47,0,0,0-46.92.76c2,11.37,6.64,15,10.41,23.22H31.14l-.71,0h0a11.1,11.1,0,0,1-4.32-1.17l-.11-.05-.13-.06-.24-.14a4.47,4.47,0,0,1-.42-.24L24.6,264a11.29,11.29,0,0,1-4.75-9.2V234.17h0V148.66h0v-23.3a11.29,11.29,0,0,1,11.29-11.28H166.95a11.27,11.27,0,0,1,5.05,1.19,11.13,11.13,0,0,1,1.11.66c.19.13.37.25.54.39a11.13,11.13,0,0,1,4.5,7.82,10,10,0,0,0-.05,1.06v50h0v.08c8.87-3.76,15.59-9.6,23.34-9.62a7.21,7.21,0,0,1,.91,0A23.73,23.73,0,0,1,225.27,189.26Z" />
													<path class="cls-2"
														d="M337.59,277.13V406.57a11.27,11.27,0,0,1-11.28,11.28H272.5c1.94-4.67,4.19-7.88,6.22-11.35a38.44,38.44,0,0,0,5.12-13.82h0a23.73,23.73,0,0,0-47.44-.84,7.09,7.09,0,0,0,0,.91c0,8.25,6.59,15.38,10.28,25.12H190.5a11.28,11.28,0,0,1-11.29-11.28V354.41c-8.34,3.81-12,8.56-23.53,10.54a23.73,23.73,0,0,1-.73-47.45,7.12,7.12,0,0,1,.91,0c7.75,0,14.48,5.86,23.35,9.63v-50a11.28,11.28,0,0,1,11.29-11.28h56.31c-2,4.29-4.19,7.34-6.16,10.84a37.91,37.91,0,0,0-4.48,12.72h0a23.73,23.73,0,0,0,47.45.84,6.9,6.9,0,0,0,0-.89c0-4.32-1.8-8.31-4-12.54-1.81-3.42-3.92-7-5.61-11h52.3A11.27,11.27,0,0,1,337.59,277.13Z" />
													<path class="cls-3"
														d="M375.67,7.6,479.1,83a11.15,11.15,0,0,1,2.44,15.58l-31.35,43c-2.6-4.28-3.86-7.94-5.45-11.59a38,38,0,0,0-8.06-12.14h0a23.46,23.46,0,0,0-28.31,37.41,7,7,0,0,0,.71.55c6.59,4.81,16.13,3.69,26.07,6.42l-32.72,44.88a11.16,11.16,0,0,1-15.59,2.45l-41.68-30.39c-1.82,8.88-.16,14.58-5.29,24.94A23.47,23.47,0,0,1,301.51,177a7,7,0,0,1,.52-.73c4.54-6.18,13.12-8.16,21.3-13l-39.94-29.12A11.16,11.16,0,0,1,281,118.56l32.81-45c2.28,4.07,3.43,7.63,5.08,11.24a37.49,37.49,0,0,0,7.55,11h0a23.47,23.47,0,0,0,28.32-37.42,6.82,6.82,0,0,0-.7-.54c-3.45-2.52-7.69-3.41-12.37-4.08-3.79-.55-7.87-.94-12-1.92L360.09,10A11.15,11.15,0,0,1,375.67,7.6Z" />
													<path class="cls-4"
														d="M178,407.79A11.26,11.26,0,0,1,166.81,418H31a11.12,11.12,0,0,1-5.28-1.31,11.28,11.28,0,0,1-6-10V386.11h0V300.6h0V277.3A11.29,11.29,0,0,1,31,266H87.06c-3.76-8.21-8.44-11.85-10.41-23.22a23.47,23.47,0,0,1,46.92-.76,7,7,0,0,1,0,.9c0,7.67-5.79,14.32-9.51,23.1h.44s0,0,0,0h52.31A11.27,11.27,0,0,1,178,276.07a10,10,0,0,0-.05,1.06v50c-1.11-.48-2.2-1-3.26-1.5-7.31-3.64-13.3-8.1-20.08-8.12a4.37,4.37,0,0,0-.91,0,23.71,23.71,0,0,0-20.83,14,23.47,23.47,0,0,0-2.1,9.65,23.72,23.72,0,0,0,23.66,23.82c11.52-2,15.18-6.73,23.52-10.53v52.15A9.84,9.84,0,0,0,178,407.79Z" />
												</g>
											</svg></span>
									</div><!-- /.iconbox-icon-wrap -->
									<div class="contents titleRC">
										<h3 class="font-weight-semibold" id="judulAtas">Penalaran</h3>
										<p style="color: darkgray">Debat Indonesia, Debat Inggris, Karya Tulis Ilmiah,
											Video Pendek, dan PKM-GT.<br><br><br></p>
									</div><!-- /.contents -->
								</div><!-- /.iconbox -->

							</div><!-- /.carousel-item -->

							<div class="carousel-item">

								<div class="iconbox iconbox-side iconbox-round iconbox-shadow iconbox-heading-sm iconbox-filled iconbox-filled iconbox-filled-hover"
									id="iconbox-carousel-3" data-animate-icon="true"
									data-plugin-options='{"color":"rgb(131, 11, 176):rgb(186, 0, 255)","hoverColor":"#fff"}'>
									<span class="iconbox-fill-el iconbox-fill-el-hover bg-gradient-secondary-br"></span>
									<div class="iconbox-icon-wrap">
										<span class="iconbox-icon-container">
											<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500">
												<defs>
													<style>
														.cls-1 {
															fill: url(#linear-gradient);
														}

														.cls-2 {
															fill: url(#linear-gradient-2);
														}

														.cls-3 {
															fill: url(#linear-gradient-3);
														}
													</style>
													<linearGradient id="linear-gradient" x1="56.54" y1="90.65"
														x2="262.62" y2="268.73" gradientUnits="userSpaceOnUse">
														<stop offset="0" stop-color="#7df6d2" />
														<stop offset="1" stop-color="#1f9c8b" />
													</linearGradient>
													<linearGradient id="linear-gradient-2" x1="90.45" y1="342.01"
														x2="405" y2="202.1" xlink:href="#linear-gradient" />
													<linearGradient id="linear-gradient-3" x1="90.37" y1="247.58"
														x2="229.77" y2="295.07" xlink:href="#linear-gradient" />
												</defs>
												<path class="cls-1"
													d="M195.06,261.63h0c-1.14.73-6.2,3.35-14.09-1.22a40.74,40.74,0,0,1-9.73-8.33C156.4,235.43,116,114.6,106,96.46c-9-16.35-2.34-20.92-1-21.63,1.56-.67,9.2-2.85,16.29,14.24,3.93,9.46,22.89,40.4,41.52,71.91,19,32.18,37.67,65,39.6,76.06C205.87,256.92,196.82,261,195.06,261.63Z" />
												<path class="cls-2"
													d="M354.32,153.79c-34.82-24.7-80-33.26-122-29.17-12.86,1.25-25.88,2.54-38,7s-23.5,12.42-29.26,24a39,39,0,0,0-2.21,5.42c19,32.18,37.67,65,39.6,76.06,3.43,19.88-5.62,24-7.38,24.59h0c-1.14.73-6.2,3.35-14.09-1.22-5,9-13.74,15.79-23,20.71-10.67,5.7-22.3,9.46-32.93,15.25-15.08,8.2-28.14,20.78-34.94,36.55s-6.76,34.81,2,49.59c10.25,17.37,30.18,26.43,49.47,32.32,70.9,21.67,159.41,11,219.72-34.7,25.1-19,43-47.12,50.2-77.73a128.34,128.34,0,0,0,3.25-28.58C415,228.37,391.82,180.39,354.32,153.79ZM160.73,388.32a25.66,25.66,0,1,1,25.66-25.66A25.66,25.66,0,0,1,160.73,388.32Zm163.1-214.88a25.66,25.66,0,1,1-25.66,25.66A25.66,25.66,0,0,1,323.83,173.44Zm-84.4,227.1a25.66,25.66,0,1,1,25.66-25.66A25.66,25.66,0,0,1,239.43,400.54Zm5.36-201.44a25.66,25.66,0,1,1,25.66-25.66A25.65,25.65,0,0,1,244.79,199.1Zm79,172.51A25.66,25.66,0,1,1,349.49,346,25.66,25.66,0,0,1,323.83,371.61ZM364,296.77a25.66,25.66,0,1,1,25.66-25.66A25.66,25.66,0,0,1,364,296.77Z" />
												<path class="cls-3"
													d="M218.93,265.41c3.7,4.93,3.66,11.67,2.84,17.78s-2.24,12.36-.76,18.34a20,20,0,0,0,18.42,14.77c-6.2,4.35-14.5,4.88-21.79,2.87s-13.77-6.27-19.74-10.93c-5-3.89-9.81-8.19-13.16-13.57s-5.1-12-3.57-18.15C184.37,263.69,209.81,253.25,218.93,265.41Z" />
											</svg>
										</span>
									</div><!-- /.iconbox-icon-wrap -->
									<div class="contents titleRC">
										<h3 class="font-weight-semibold " id="judulAtas">Seni</h3>
										<p style="color: darkgray">Paduan Suara, Cover Dance, Band, Solo Singer, Short
											Comic, Desain Poster, Cipta Lagu, Stand Up Comedy, MC Formal, Face Painting,
											dan Fotografi.</p>
									</div><!-- /.contents -->
								</div><!-- /.iconbox -->

							</div><!-- /.carousel-item -->

						</div><!-- /.carousel-items -->

					</div><!-- /.carousel-container -->

				</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

			</div><!-- /.row -->
			@if(count($menangToday) > 0)
			<div class="row" id="tabelRC" style="display:none;" data-custom-animations="true"
				data-ca-options='{"triggerHandler": "inview", "animationTarget": ".fancy-box-cell", "duration": 1200, "delay": 150, "easing": "easeOutQuint", "initValues": { "translateY": 50, "translateZ": -150, "rotateX": -95, "opacity": 0 }, "animations": { "translateY": 0, "translateZ": 0, "rotateX": 0, "opacity": 1 }}'>

				<div class="lqd-column col-md-12" id="tabelRC2">

					<div class="fancy-box fancy-box-offer fancy-box-offer-header">

						<div class="fancy-box-cell fancy-box-header">
							<h3 class="text-glow2 " style="font-size:20pt;" id="textRC">Cabang Rector Cup</h3>
						</div><!-- /.justify-content-center -->

						<div id="hilang" class="fancy-box-cell text-center">
							<p id="hilang" class="text-glow2 text-white">Medali</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" style="display:none">
							<!-- Sengaja Kosong -->
						</div><!-- /.fancy-box-cell -->

					</div><!-- /.fancy-box fancy-box-booking -->

					<!-- Foreach di sini -->

					@foreach($menangToday as $m)
					<div class="fancy-box fancy-box-offer fancy-box-heading-sm" id="tabelCabor">

						<div class="fancy-box-cell fancy-box-header" id="caborDesktop">

							<figure class="fancy-box-image ">
								<div>
									<img src=".\img\icon\{{$m->nama_cabang}}.svg" class="glow" alt="Icon Cabang"
										style="width: 60%; height: 60%">
								</div>
							</figure>
							<h3 style="margin-left:-10px;" class="text-glow2" id="textRC2">
								<?php echo $m->nama_cabang; ?>
							</h3>

						</div><!-- /.justify-content-center -->

						<div class="fancy-box-cell text-center" id="caborResponsif">
							<figure class="fancy-box-image">
								<div style="width: 55%; margin: 0 auto;">
									<img src=".\img\icon\{{$m->nama_cabang}}.svg" class="glow" alt="Icon Cabang"
										style="width: 60%; height: 60%;">
								</div>
							</figure>
							<h3 style="margin-left:-10px;" class="text-glow2" id="textRC2">
								<?php echo $m->nama_cabang; ?>
							</h3>
						</div><!-- /.fancy-box-cell -->

						<div style="margin-top: -100px; margin-bottom:-100px;" class="fancy-box-cell text-center">
							<span class="iconbox-icon-container">
								<img src="./img/{{$m->medali}}.png" alt="{{$m->medali}}">
							</span>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" style="display:none">
							<!-- Sengaja Kosong -->
						</div><!-- /.fancy-box-cell -->

					</div><!-- /.fancy-box fancy-box-booking -->
					@endforeach

					<!-- End Foreach -->
				</div><!-- /.lqd-column col-md-12 -->

			</div><!-- /.row -->
			@endif
		</div>
	</section>
	<!-- End Rector Cup -->


	<!-- FAQ -->
	<section id="faq" class="vc_row pt-70 pb-50" data-custom-animations="true"
		data-ca-options='{"triggerHandler": "inview", "animationTarget": ".fancy-box-cell", "duration": 1200, "delay": 150, "easing": "easeOutQuint", "initValues": { "translateY": 50, "translateZ": -150, "rotateX": -95, "opacity": 0 }, "animations": { "translateY": 0, "translateZ": 0, "rotateX": 0, "opacity": 1 }}'>
		<div class="container">
			<div class="row">

				<div class="lqd-column col-md-6 col-md-offset-3">

					<header class="fancy-heading text-center mb-4 mt-100">
						<h2 class="font-size-40 my-0 text-white text-glow">FAQ</h2>
					</header>

				</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

				<div id="faqBox" class="lqd-column col-md-8 col-md-offset-2">

					<div class="lqd-column-inner transparent-card px-2 px-md-6 pt-55 pb-40 faqInner"
						style="border-radius: 1rem;">

						<div class="accordion accordion-tall accordion-body-underlined accordion-expander-lg"
							id="crypto-accordion-1" role="tablist">

							<div class="accordion-item panel  active">
								<div class="accordion-heading textFaq" role="tab" id="crypto-accordion-heading-1">
									<h4 class="accordion-title font-size-19">
										<a class="text-white" data-toggle="collapse" data-parent="#crypto-accordion-1"
											href="#crypto-accordion-panel-1" aria-expanded="true"
											aria-controls="crypto-accordion-panel-1">
											Kapan MOB FT 2021 dilaksanakan?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-panel-1" class="accordion-collapse collapse in textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-1">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Jadwal MOB bisa kalian lihat
											pada bagian "Jadwal" di Website MOB FT</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading textFaq" role="tab" id="crypto-accordion-heading-2">
									<h4 class="accordion-title font-size-19 ">
										<a class="collapsed text-white " data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-2"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-2">
											Apa saja yang perlu disiapkan saat MOB FT 2021?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-2" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-2">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Kalian bisa mempersiapkan
											perangkat elektronik (disarankan laptop/komputer), wifi/kuota internet,
											modul wajib print, dan alat tulis.
											Jangan lupa makan dan istirahat yang cukup juga teman-teman!</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-3">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-3"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-3">
											Apakah MOB FT 2021 berlangsung online sepenuhnya?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-3" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-3">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Sayangnya iya teman-teman,
											karena kondisi saat ini belum memungkinkan dan PPKM Jawa-Bali diperpanjang.
											Jangan lupa juga tetap menggunakan prokes, jaga kesahatan, dan #stayathome!
										</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-4">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-4"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-4">
											Apakah rector cup bersifat wajib?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-4" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-4">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Pastinya dong, semua mahasiswa
											baru wajib berkontribusi dalam rector cup</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-5">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-5"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-5">
											Bagaimana cara mendaftar rector cup?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-5" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-5">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Kalian bisa daftar Rector cup
											ketika Pra-MOB FT yang nantinya akan dipandu oleh Maping kelompok Beta,
											pendaftarannya sendiri akan dilakukan melalui website MOB FT 2021. Yuk
											daftar dan berpartisipasi di Rector Cup untuk membuat Teknik bangga!</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-6">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-6"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-6">
											Pembagian kelompoknya bagaimana?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-6" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-6">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Kalian bisa menekan tombol
											"Lihat Kelompok" di "Beranda" untuk melihat kalian ada di kelompok berapa
										</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-7">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-7"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-7">
											List group line dapat dilihat di mana?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-7" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-7">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Untuk link group besar MOB FT
											bisa kalian cek di linktree yang di share pada Instagram MOB FT 2021
											(@mobft2021)
											dan untuk group tiap kelompok Alpha dan Beta akan diberitahukan melalui
											group besar MOB FT </p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-8">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-8"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-8">
											Apakah modul wajib diprint?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-8" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-8">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Wajib dong dan semua halaman
											harus diprint ya</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-9">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-9"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-9">
											Apakah print modul harus berwarna atau hitam putih?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-9" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-9">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Untuk print modul kalian diberi
											kebebasan untuk memilih apakah mau berwarna atau hitam putih, yang penting
											modul diprint</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-10">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-10"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-10">
											Modul diprint menggunakan ukuran kertas apa?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-10" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-10">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Modul minimal diprint
											menggunakan ukuran kertas A4 ya</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-11">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-11"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-11">
											Apakah modul boleh diprint bolak balik?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-11" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-11">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Kalian diberikan kebebasan
											untuk memilih mau diprint bolak balik atau tidak</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-12">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-12"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-12">
											Apabila terjadi kendala saat MOB FT berlangsung, siapa yang harus saya
											hubungi?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-12" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-12">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Kalian bisa menghubungi Maping
											dengan menggunakan format nama sesuai yang tertera di modul</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-13">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-13"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-13">
											Apakah ada spesifikasi khusus mengenai peralatan yang perlu disiapkan
											(spesifikasi laptop, spesifikasi smartphone, dsb)?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-13" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-13">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">
											Perangkat yang digunakan harus memiliki kamera atau webcam karena semua
											peserta MOB FT 2021
											<b>WAJIB</b> menyalakan kamera selama acara MOB FT berlangsung. Jadi
											pastikan diperangkat yang digunakan terdapat kamera atau webcam ya
										</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-14">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-14"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-14">
											Apa saja kriteria kelulusan MOB FT 2021?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-14" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-14">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Kriteria kelulusan bisa dilihat
											di Modul MOB FT 2021 pada bagian Poin Kelulusan</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-15">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-15"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-15">
											Jika tidak lulus MOB FT 2021, konsekuensi apa yang akan diterima?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-15" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-15">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Peserta harus mengulang MOB FT
											pada tahun berikutnya. Jadi ikuti proses MOB dengan sungguh-sungguh ya
											teman-teman, agar tidak mengulang tahun depan </p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

							<div class="accordion-item panel">
								<div class="accordion-heading text-white textFaq" role="tab"
									id="crypto-accordion-heading-16">
									<h4 class="accordion-title font-size-19">
										<a class="collapsed text-white" data-toggle="collapse"
											data-parent="#crypto-accordion-1" href="#crypto-accordion-collapse-16"
											aria-expanded="false" aria-controls="crypto-accordion-collapse-16">
											Apabila lupa password untuk login website, siapa yang harus saya hubungi?
											<span class="accordion-expander">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-plus-lg" viewBox="0 0 16 16">
														<path
															d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
													</svg>
												</i>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="#fff" class="bi bi-dash-lg" viewBox="0 0 16 16">
														<path
															d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
													</svg>
												</i>
											</span>
										</a>
									</h4>
								</div><!-- /.accordion-heading -->
								<div id="crypto-accordion-collapse-16" class="accordion-collapse collapse textFaq2"
									role="tabpanel" aria-labelledby="crypto-accordion-heading-16">
									<div class="accordion-content">
										<p style="color: lightgray" class="text-justify">Kalian bisa menghubungi Maping
											yang bersangkutan pada sesi tersebut, jangan lupa menggunakan format nama
											sesuai yang tertera di modul</p>
									</div><!-- /.accordion-content -->
								</div><!-- /.collapse -->
							</div><!-- /.accordion-item -->

						</div> <!-- /.accordion-item panel -->

					</div><!-- /.lqd-column-inner transparent-card px-2 px-md-6 pt-55 pb-40 faqInner -->

				</div><!-- /.lqd-column col-md-8 col-md-offset-2 -->

			</div><!-- /. row -->

		</div><!-- /.container -->

	</section>
	<!-- End FAQ -->

	<section class="vc_row pt-90 pb-50 bg-cover" style="margin-top: 20vh;">
		<div class="container">
			<div class="row">

				<div class="lqd-column col-md-6 col-md-offset-3 text-center mb-55 ">

					<header class="fancy-heading px-md-5">
						<h2 class="mt-0 text-glow2">Diselenggarakan oleh</h2>
						<!-- <p>Huge collection of elements, rich customization options, flexible layouts, and instant results!</p> -->
					</header>

				</div><!-- /.lqd-column col-md-6 col-md-offset-3 text-center -->

				<div class="lqd-column col-md-12">

					<div class="liquid-portfolio-list">
						<div style="width:70%; margin:auto;" class="row liquid-portfolio-list-row"
							data-liquid-masonry="true">

							<div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
								<article
									class="ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext">
									<div class="ld-pf-inner">
										<div class="ld-pf-image">
											<figure data-responsive-bg="true">
												<img src="./img/logoubaya.png" alt="Minimalism" />
											</figure>
										</div><!-- /.ld-pf-image -->
									</div><!-- /.ld-pf-inner -->
								</article>
							</div><!-- /.masonry-item -->

							<div style="margin-top:1vh; width:230px"
								class="col-md-4 col-sm-6 col-xs-12 masonry-item teknik">
								<article
									class="ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext">
									<div class="ld-pf-inner">
										<div class="ld-pf-image">
											<figure data-responsive-bg="true">
												<img src="./img/teknik.png" alt="Minimalism" />
											</figure>
										</div><!-- /.ld-pf-image -->

									</div><!-- /.ld-pf-inner -->
								</article>
							</div><!-- /.masonry-item -->

							<div style="margin-top:1vh;" class="col-md-4 col-sm-6 col-xs-12 masonry-item">
								<article
									class="ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext">
									<div class="ld-pf-inner">
										<div class="ld-pf-image">
											<figure data-responsive-bg="true">
												<img src="./img/logobem.png" alt="Minimalism" />
											</figure>
										</div><!-- /.ld-pf-image -->

									</div><!-- /.ld-pf-inner -->
								</article>
							</div><!-- /.masonry-item -->


						</div><!-- /.liquid-portfolio-list-row -->
					</div><!-- /.liquid-portfolio-list -->

				</div><!-- /.lqd-column col-md-12 -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<br><br>
	<img id="bawah" style="bottom: 0; margin-top:-200px;" class="bg-cover" src="./img/bawah.png">
</main><!-- /#content.content -->

<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script>
	$( document ).ready(function() {

	var current = new Date();
	var rc  = new Date("August 4, 2021 00:00:00")
	// var rc  = new Date("July 4, 2021 00:00:00")

	if(current.getTime()>rc.getTime())
	{
		$('#tabelRC').show();
		$('#showMedal').show();
		$('#infoRC').remove();
		document.getElementById("#tabelRC").style.marginTop = "-5000px";
	}
	else
	{
		$('#infoRC').show();
		$('#showMedal').hide();
		$('#tabelRC').hide();
	}
});


</script>
@endsection