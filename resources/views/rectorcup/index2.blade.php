@extends('layouts.appwebsite')

@section('header')
<header class="main-header main-header-overlay" style='position: fixed; background-color:#33334D;'>

    <div class="mainbar-wrap">
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="row mainbar-row align-items-lg-stretch px-4">

                    <div class="col">
                        <div class="navbar-header">
                            <a class="navbar-brand pt-35 pb-35" href="#" rel="home">
                                <span class="navbar-brand-inner">
                                    <img class="logo-dark" src="{{ url ('website/assets/img/logo/logo-1.svg') }}" alt="Ave HTML Template">
                                    <img class="logo-sticky" src="{{ url ('website/assets/img/logo/logo-1.svg') }}" alt="Ave HTML Template">
                                    <img class="mobile-logo-default" src="{{ url ('website/assets/img/logo/logo-1.svg') }}" alt="Ave HTML Template">
                                    <img class="logo-default" src="{{ url ('website/assets/img/logo/logo-light.svg') }}" alt="Ave HTML Template">
                                </span>
                            </a>
                            <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
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

                        <ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-end main-nav-hover-underline-1" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">
							<li>
								<a href="{{ url('/') }}">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt">Home</span>
									</span>
								</a>
                            </li>
                        @guest
                           <!-- guest ga bisa ke page ini -->
                        @else
                            @if (Auth::user()->divisi == 'MAPING')

                            <li class="nav-item dropdown">
                                <a  class="nav-link" href="{{ url('maping') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Maping
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a  class="nav-link" href="{{ url('daypresensi') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Presensi
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a  class="nav-link" href="{{ url('alfa') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Alfa
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a  class="nav-link" href="{{ url('beta') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Beta
                                </a>
                            </li>
                            @endif

                            @if (Auth::user()->divisi == 'SFD')

                            <li class="nav-item dropdown">
                                <a  class="nav-link" href="{{ url('sfd') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Input Pelanggaran
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a  class="nav-link" href="{{ url('rekap') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Rekap Pelanggaran
                                </a>
                            </li>
                            @endif

                            @if (Auth::user()->status == 'maharu')
                            <li class="is-active">
								<a href="{{ url('rectorcup') }}">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt">Rector Cup</span>
									</span>
								</a>
                                <!-- <a  class="nav-link" href="{{ url('rectorcup') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Rector Cup
                                </a> -->
                            </li>
                            @endif

                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="link-icon"></span>
                                    <span class="link-txt">
                                        <span class="link-ext"></span>
                                        <span class="txt">
                                            {{ Auth::user()->name}}
                                            <span class="submenu-expander">
                                                <i class="fa fa-angle-down"></i>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <ul class="nav-item-children">
                                    <li>
                                        <a href="{{ route('profile')}}">
                                            <span class="link-icon"></span>
                                            <span class="link-txt">
                                                <span class="link-ext"></span>
                                                <span class="txt">
                                                    Profil
                                                    <span class="submenu-expander">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="link-icon"></span>
                                            <span class="link-txt">
                                                <span class="link-ext"></span>
                                                <span class="txt text-danger">
                                                {{ __('Logout') }}
                                                    <span class="submenu-expander">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
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
<main id="content" class="content">
	<!-- Tabel Riwayat -->
	<section class="vc_row pt-100 pb-50">
		<div class="container">
			<div class="row">

				<div class="lqd-column col-md-6 col-md-offset-3 mb-35">

				<header class="fancy-header text-center">
					<h2 class="font-size-40">Daftar Cabang Rector Cup 2021</h2>
				</header>

				</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

				<div class="lqd-column col-md-12">

					<div class="fancy-box fancy-box-offer fancy-box-offer-header text-center">

						<div class="fancy-box-cell fancy-box-header">
							<h3>Riwayat Daftar</h3>
						</div><!-- /.fancy-box-header -->

						<div class="fancy-box-cell">
							<p>Tanggal dan<br>Jam Seleksi</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell">
							<p>Status</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell">
							<p>Nama<br>Koorcab</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell">
							<p>Kontak<br>(LINE)</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" style="display:none">
							<!-- Sengaja Kosong -->
						</div><!-- /.fancy-box-cell -->

					</div><!-- /.fancy-box fancy-box-booking -->

					<div class="fancy-box fancy-box-offer fancy-box-heading-sm text-center">

						<div class="fancy-box-cell fancy-box-header">

							<figure class="fancy-box-image">
								<img src="./assets/demo/misc/fb-15.jpg" alt="Icon Cabang">
							</figure>
							<h3>
								Nama Cabang
							</h3>

						</div><!-- /.fancy-box-header -->

						<div class="fancy-box-cell" data-text="Tanggal dan Jam Seleksi">
							<h5>
								Tanggal Seleksi
								<small>Jam Seleksi WIB</small>
							</h5>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" data-text="Status">
							<h5>
								Berdoa
							</h5>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" data-text="Nama Koorcab">
							<h5>
								Nama Koorcab
							</h5>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" data-text="Kontak (LINE)">
							<h5>
								ID Line
							</h5>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" style="display:none">
							<!-- Sengaja Kosong -->
						</div><!-- /.fancy-box-cell -->

					</div><!-- /.fancy-box fancy-box-booking -->

				</div><!-- /.lqd-column col-md-12 -->

			</div><!-- /.row -->

		</div><!-- /.container -->

	</section>
	<!-- End Tabel Riwayat -->

	<!-- Tabel Cabang Olahraga -->
	<section class="vc_row pt-50 pb-50">
		<div class="container">
			<div class="row">

				<div class="lqd-column col-md-12">

					<div class="fancy-box fancy-box-offer fancy-box-offer-header text-center">

						<div class="fancy-box-cell fancy-box-header">
							<h3>Daftar<br>Cabang RC</h3>
						</div><!-- /.fancy-box-header -->

						<div class="fancy-box-cell">
							<p>Status<br>Daftar</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell">
							<p>Kuota</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell">
							<p>Tanggal dan<br>Jam Seleksi</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell">
							<p>Syarat</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell">
							<!-- Sengaja Kosong -->
						</div><!-- /.fancy-box-cell -->

					</div><!-- /.fancy-box fancy-box-booking -->
						<div class="fancy-box fancy-box-offer fancy-box-heading-sm text-center">

							<div class="fancy-box-cell fancy-box-header">

								<figure class="fancy-box-image">
									<img src="./assets/demo/misc/fb-15.jpg" alt="Icon Cabang">
								</figure>
								<h3>
									Nama Cabang
								</h3>

							</div><!-- /.fancy-box-header -->

							<div class="fancy-box-cell" data-text="Status Daftar">
								<h5>
									Status
								</h5>
							</div><!-- /.fancy-box-cell -->

							<div class="fancy-box-cell" data-text="Kuota">
								<h5>
									Kuota
								</h5>
							</div><!-- /.fancy-box-cell -->

							<div class="fancy-box-cell" data-text="Tanggal dan Jam Seleksi">
								<h5>
									Tanggal Seleksi
									<small>Jam Seleksi WIB</small>
								</h5>
							</div><!-- /.fancy-box-cell -->

							<div class="fancy-box-cell" data-text="Syarat">
								<a href="#modalSyarat" class="btn btn-sm btn-bordered font-weight-bold lh-15" style="border-radius: 2rem" data-lity="#modalSyarat">
									<span>
										<span class="btn-txt">Lihat Syarat</span>
									</span>
								</a>
							</div><!-- /.fancy-box-cell -->

							<div class='fancy-box-cell' data-text='Aksi' id='btnDaftar'>
								<a href="#modalDaftar" class="btn btn-sm btn-bordered font-weight-bold lh-15" style="border-radius: 2rem" data-lity="#modalDaftar">
									<span>
										<span class="btn-txt">Daftar</span>
									</span>
								</a>
							</div><!-- /.fancy-box-cell -->

						</div><!-- /.fancy-box fancy-box-booking -->

				</div><!-- /.lqd-column col-md-12 -->

			</div><!-- /.row -->

		</div><!-- /.container -->

	</section>
	<!-- End Tabel Cabang Olahraga -->

	<!-- Modal Syarat -->
		<div id="modalSyarat" class="lqd-modal lity-hide col-md-12 justify-content-center">
			<div class="lqd-modal-inner">

				<div class="lqd-modal-head">
					<header class="fancy-heading text-center">
						<h2>Syarat dan Ketentuan</h2>
					</header>
				</div><!-- /.lqd-modal-head -->

				<div class="lqd-modal-content">

					<div class="row">
						<div class="col-md-12">

							<div class="row">
								<div class="lqd-column col-md-8 col-md-offset-2" id="contentSyarat">
									<p>Isi Syarat</p>
								</div><!-- /.col-md-8 col-md-offset-2 -->
							</div><!-- /.row -->

						</div><!-- /.col-md-12 -->

					</div><!-- /.row -->

				</div><!-- /.lqd-modal-content -->

			</div><!-- /.lqd-modal-inner -->

		</div><!-- /.lqd-modal -->
	<!-- End Modal Syarat -->

	<!-- Modal Daftar -->
	<div id="modalDaftar" class="lqd-modal lity-hide col-md-12 justify-content-center">
		<div class="lqd-modal-inner">

			<div class="lqd-modal-head">
				<header class="fancy-heading text-center">
					<h2>Daftar (Cabang Olahraga yang dipilih)</h2>
				</header>
			</div><!-- /.lqd-modal-head -->

			<div class="lqd-modal-content">

				<div class="row">
					<div class="col-md-12">

						<div class="row">

							<div class="lqd-column col-md-12 px-4 pt-10 pb-10">

								<div class="row">

									<div class="lqd-column col-md-10 col-md-offset-1">

										<div class="contact-form contact-form-inputs-underlined contact-form-button-circle">
											<form action="assets/php/mailer.php" method="post" novalidate="novalidate">
												<div class="row d-flex flex-wrap">
													<div class="lqd-column col-md-12 mb-10">
														<header class="fancy-heading">
															<h6>Prestasi yang pernah diperoleh</h6>
														</header>
														<textarea cols="10" rows="6" name="prestasi" aria-required="true" aria-invalid="false" placeholder="Isi Prestasi Disini" required></textarea>
													</div><!-- /.col-md-12 -->
													<div class="lqd-column col-md-12 mb-10">
														<header class="fancy-heading">
															<h6>Upload File Persyaratan (File dalam bentuk <b>.PDF</b>)</h6>
														</header>
														<input class="lh-25 mb-10" type="file" name="file" aria-invalid="false">
													</div>
													<div class="lqd-column col-md-12 text-md-right">
														<input type="submit" value="Daftar" class="font-size-13 ltr-sp-1 font-weight-bold">
													</div><!-- /.col-md-6 -->
												</div><!-- /.row -->
											</form>
											<div class="contact-form-result hidden"></div><!-- /.contact-form-result -->
										</div><!-- /.contact-form -->

									</div><!-- /.col-md-10 col-md-offset-1 -->

								</div><!-- /.row -->

							</div><!-- /.lqd-column col-md-12 -->

						</div><!-- /.row -->

					</div><!-- /.col-md-12 -->

				</div><!-- /.row -->

			</div><!-- /.lqd-modal-content -->

		</div><!-- /.lqd-modal-inner -->

	</div><!-- /.lqd-modal -->
	<!-- End Modal Daftar -->
</main><!-- /#content.content -->
@endsection