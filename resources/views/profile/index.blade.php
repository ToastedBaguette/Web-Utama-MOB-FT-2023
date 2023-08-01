@extends('layouts.appwebsite')

@section('header')
<header id="navbar" class="main-header main-header-overlay" style='position: fixed; background-color:transparent;'>
    <div class="mainbar-wrap">
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="row mainbar-row align-items-lg-stretch px-4">
                    <div class="col">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/dashboard') }}" rel="home">
                                <span class="navbar-brand-inner">
									<img class="logo-dark" src="{{ url ('./img/mobft.png') }}" alt="Ave HTML Template">
                                    <img class="logo-sticky" src="{{ url ('./img/mobft.png') }}" alt="Ave HTML Template">
                                    <img class="mobile-logo-default" src="{{ url ('./img/mobft.png') }}" alt="Ave HTML Template">
                                    <img class="logo-default" src="{{ url('./img/mobft.png') }}" style="max-height:50px;" alt="Ave HTML Template">
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
										<span class="txt text-white">< Halaman Awal</span>
									</span>
								</a>
                            </li>
                            <li>
								<a href="{{ url('/dashboard') }}">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt text-white">Dasbor</span>
									</span>
								</a>
                            </li>
                        @guest
                           <!-- guest ga bisa ke page ini -->
                        @else
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
                            <li>
								<a href="{{ url('rectorcup') }}">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt text-white">Rector Cup</span>
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
                            <li class="menu-item-has-children is-active">
                                <a href="#!">
                                    <span class="link-icon"></span>
                                    <span class="link-txt">
                                        <span class="link-ext"></span>
                                        <span class="txt text-white">
                                            {{ Auth::user()->name}}
                                            <span class="submenu-expander">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <ul class="nav-item-children">
                                    <li>
                                        <a href="{{ route ('profile')}}">
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
                                                Keluar
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
<main class="content bg-cover"  style="background-image: url('./img/bg5.png');">
	<!-- Profile -->
	<section class="vc_row pt-100 pb-30 mt-30" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
		<div class="container">
			<div class="row">
				<div class="lqd-column col-md-12 px-4 pt-45 pb-30 transparent-card" style="border-radius: 1rem;" id="tableRCdanProfile">
					<div class="row d-flex flex-wrap align-items-center">
						<div class="lqd-column col-md-8 col-md-offset-1">
							<header class="fancy-title">
								<h4 class="text-white">Profil</h4>
								<p style="color: lightgray">Klik simpan untuk mengubah data</p>
							</header><!-- /.fancy-title -->
						</div><!-- /.lqd-column col-md-6 col-md-offset-1 -->
					</div><!-- /.row -->
					<div class="row">
						<div class="lqd-column col-md-10 col-md-offset-1">
							<div class="contact-form contact-form-inputs-underlined contact-form-button-circle">
								<div class="row d-flex flex-wrap">
									<div class="lqd-column col-sm-6 mb-10">
									@foreach($maharu as $mhr)
										<h5 class="text-white">Nama Lengkap</h5>
										<input class="lh-25 mb-30" type="text" name="nama" id="nama" aria-required="true" aria-invalid="false" placeholder="Nama Lengkap" value="{{$mhr->name}}" required style="color:lightgray">
										<h5 class="text-white">Asal Sekolah</h5>
										<input class="lh-25 mb-30" type="text" name="sekolah" id="sekolah" aria-required="true" aria-invalid="false" placeholder="Asal Sekolah" value="{{$mhr->asal_sekolah}}" required style="color:lightgray">
										<h5 class="text-white">No. Telp</h5>
										<input class="lh-25 mb-30" type="tel" name="no_telp" id="no_telp" aria-required="true" aria-invalid="false" placeholder="No. Telp" value="{{$mhr->no_hp}}" required style="color:lightgray">
										<h5 class="text-white">ID Line</h5>
										<input class="lh-25 mb-30" type="text" name="line" id="line" aria-required="true" aria-invalid="false" placeholder="ID Line" value="{{$mhr->id_line}}" required style="color:lightgray">
										<h5 class="text-white">Instagram</h5>
										<input class="lh-25 mb-30" type="text" name="instagram" id="instagram" aria-required="true" aria-invalid="false" placeholder="Instagram" required value="{{$mhr->instagram}}" style="color:lightgray">
										<h5 class="text-white">Email</h5>
										<input class="lh-25 mb-30" type="email" name="email" id="email" aria-required="true" aria-invalid="false" placeholder="Email" required value="{{$mhr->email}}" style="color:lightgray">
									</div><!-- /.col-md-6 -->
									@endforeach
									<div class="lqd-column col-sm-12 text-md-left">
										<a href="#modalProfile" class="btn btn-sm btn-solid font-weight-semibold lh-15" id="simpan" class="font-size-13 ltr-sp-1 font-weight-bold" style="border-radius: 2rem" data-lity="#modalProfile">
											<span>
											<span class="btn-gradient-bg"></span>
												<span class="btn-txt">Simpan</span>
											</span>
										</a>
									</div><!-- /.col-md-6 -->
								</div><!-- /.row -->
							</div><!-- /.contact-form -->
						</div><!-- /.col-md-10 col-md-offset-1 -->
					</div><!-- /.row -->
				</div><!-- /.lqd-column col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!-- End Profile -->

	<!-- Absensi -->
	<section class="vc_row pt-100 pb-30" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
		<div class="container">
			<div class="row">
				<div class="lqd-column col-md-12 px-4 pt-45 pb-30">
					<div class="row">
					<div class="lqd-column col-md-12 transparent-card" id="tableRCdanProfile">
					<div class="fancy-box fancy-box-offer fancy-box-offer-header">
						<div class="fancy-box-cell fancy-box-header">
							<h4 class="text-white">Absensi</h4>
						</div><!-- /.fancy-box-header -->
						<div class="fancy-box-cell text-center">
							<p class="text-white">Absen Awal</p>
						</div><!-- /.fancy-box-cell -->
						<div class="fancy-box-cell text-center">
							<p class="text-white">Absen Akhir</p>
						</div><!-- /.fancy-box-cell -->
						<div class="fancy-box-cell" style="display:none">
							<p>Sengaja Kosong</p>
						</div><!-- /.fancy-box-cell -->
					</div><!-- /.fancy-box fancy-box-booking -->
					@if(count($absensi) < 1)
						<div class="iconbox text-center iconbox-xl iconbox-icon-image px-5 pt-40 mx-md-2">
							<div class="iconbox-icon-wrap">
								<svg class="text-center" id="a706cf1c-1654-439b-8fcf-310eb7aa0e00" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 1120.59226 777.91584"><circle cx="212.59226" cy="103" r="64" fill="#ff6584"/><path d="M563.68016,404.16381c0,151.01141-89.77389,203.73895-200.51559,203.73895S162.649,555.17522,162.649,404.16381,363.16457,61.04208,363.16457,61.04208,563.68016,253.1524,563.68016,404.16381Z" transform="translate(-39.70387 -61.04208)" fill="#f2f2f2"/><polygon points="316.156 523.761 318.21 397.378 403.674 241.024 318.532 377.552 319.455 320.725 378.357 207.605 319.699 305.687 319.699 305.687 321.359 203.481 384.433 113.423 321.621 187.409 322.658 0 316.138 248.096 316.674 237.861 252.547 139.704 315.646 257.508 309.671 371.654 309.493 368.625 235.565 265.329 309.269 379.328 308.522 393.603 308.388 393.818 308.449 394.99 293.29 684.589 313.544 684.589 315.974 535.005 389.496 421.285 316.156 523.761" fill="#3f3d56"/><path d="M1160.29613,466.01367c0,123.61-73.4842,166.77-164.13156,166.77s-164.13156-43.16-164.13156-166.77S996.16457,185.15218,996.16457,185.15218,1160.29613,342.40364,1160.29613,466.01367Z" transform="translate(-39.70387 -61.04208)" fill="#f2f2f2"/><polygon points="950.482 552.833 952.162 449.383 1022.119 321.4 952.426 433.154 953.182 386.639 1001.396 294.044 953.382 374.329 953.382 374.329 954.741 290.669 1006.369 216.952 954.954 277.514 955.804 124.11 950.467 327.188 950.906 318.811 898.414 238.464 950.064 334.893 945.173 428.327 945.027 425.847 884.514 341.294 944.844 434.608 944.232 446.293 944.123 446.469 944.173 447.428 931.764 684.478 948.343 684.478 950.332 562.037 1010.514 468.952 950.482 552.833" fill="#3f3d56"/><ellipse cx="554.59226" cy="680.47903" rx="554.59226" ry="28.03433" fill="#3f3d56"/><ellipse cx="892.44491" cy="726.79663" rx="94.98858" ry="4.80162" fill="#3f3d56"/><ellipse cx="548.71959" cy="773.11422" rx="94.98858" ry="4.80162" fill="#3f3d56"/><ellipse cx="287.94432" cy="734.27887" rx="217.01436" ry="10.96996" fill="#3f3d56"/><circle cx="97.08375" cy="566.26982" r="79" fill="#2f2e41"/><rect x="99.80546" y="689.02332" width="24" height="43" transform="translate(-31.32451 -62.31008) rotate(0.67509)" fill="#2f2e41"/><rect x="147.80213" y="689.58887" width="24" height="43" transform="translate(-31.31452 -62.87555) rotate(0.67509)" fill="#2f2e41"/><ellipse cx="119.54569" cy="732.61606" rx="7.5" ry="20" transform="translate(-654.1319 782.47948) rotate(-89.32491)" fill="#2f2e41"/><ellipse cx="167.55414" cy="732.18168" rx="7.5" ry="20" transform="translate(-606.25475 830.05533) rotate(-89.32491)" fill="#2f2e41"/><circle cx="99.31925" cy="546.29477" r="27" fill="#fff"/><circle cx="99.31925" cy="546.29477" r="9" fill="#3f3d56"/><path d="M61.02588,552.94636c-6.04185-28.64075,14.68758-57.26483,46.30049-63.93367s62.13813,11.14292,68.18,39.78367-14.97834,38.93-46.59124,45.59886S67.06774,581.58712,61.02588,552.94636Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M257.29613,671.38411c0,55.07585-32.73985,74.3063-73.13,74.3063q-1.40351,0-2.80255-.0312c-1.87139-.04011-3.72494-.1292-5.55619-.254-36.45135-2.57979-64.77127-22.79937-64.77127-74.02113,0-53.00843,67.73872-119.89612,72.827-124.84633l.00892-.00889c.19608-.19159.29409-.28516.29409-.28516S257.29613,616.30827,257.29613,671.38411Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M181.50168,737.26482l26.747-37.37367-26.81386,41.4773-.07125,4.29076c-1.87139-.04011-3.72494-.1292-5.55619-.254l2.88282-55.10258-.0223-.42775.049-.0802.27179-5.20415-26.88076-41.5798,26.96539,37.67668.06244,1.105,2.17874-41.63324-23.0132-42.96551,23.29391,35.6583,2.26789-86.31419.00892-.294v.28516l-.37871,68.064,22.91079-26.98321-23.00435,32.84678-.60595,37.27566L204.18523,621.958l-21.4805,41.259-.33863,20.723,31.05561-49.79149-31.17146,57.023Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><circle cx="712.48505" cy="565.41532" r="79" fill="#2f2e41"/><rect x="741.77716" y="691.82355" width="24" height="43" transform="translate(-215.99457 191.86399) rotate(-17.08345)" fill="#2f2e41"/><rect x="787.6593" y="677.72286" width="24" height="43" transform="matrix(0.95588, -0.29376, 0.29376, 0.95588, -209.82788, 204.72037)" fill="#2f2e41"/><ellipse cx="767.887" cy="732.00275" rx="20" ry="7.5" transform="translate(-220.8593 196.83312) rotate(-17.08345)" fill="#2f2e41"/><ellipse cx="813.47537" cy="716.94619" rx="20" ry="7.5" transform="translate(-214.42477 209.56103) rotate(-17.08345)" fill="#2f2e41"/><circle cx="708.52153" cy="545.71023" r="27" fill="#fff"/><circle cx="708.52153" cy="545.71023" r="9" fill="#3f3d56"/><path d="M657.35526,578.74316c-14.48957-25.43323-3.47841-59.016,24.59412-75.0092s62.57592-8.34055,77.06549,17.09268-2.39072,41.6435-30.46325,57.63671S671.84483,604.17639,657.35526,578.74316Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M611.29613,661.29875c0,50.55711-30.05368,68.20979-67.13,68.20979q-1.28835,0-2.57261-.02864c-1.71785-.03682-3.41933-.1186-5.10033-.23313-33.46068-2.36813-59.45707-20.92878-59.45707-67.948,0-48.65932,62.18106-110.05916,66.85186-114.60322l.00819-.00817c.18-.17587.27-.26177.27-.26177S611.29613,610.74164,611.29613,661.29875Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M541.72029,721.77424l24.55253-34.30732-24.6139,38.07426-.0654,3.93872c-1.71785-.03682-3.41933-.1186-5.10033-.23313l2.6463-50.58165-.02047-.39266.045-.07361.24949-4.77718-24.67531-38.16836,24.753,34.58547.05731,1.01433,2-38.21741-21.12507-39.44039L541.80616,625.928l2.08182-79.23247.00819-.26994v.26177l-.34764,62.47962,21.031-24.76934-21.11693,30.15184-.55624,34.21735,19.63634-32.839-19.71812,37.87389-.31085,19.0228,28.50763-45.70631-28.614,52.34448Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><path d="M875.29613,682.38411c0,55.07585-32.73985,74.3063-73.13,74.3063q-1.4035,0-2.80255-.0312c-1.87139-.04011-3.72494-.1292-5.55619-.254-36.45135-2.57979-64.77127-22.79937-64.77127-74.02113,0-53.00843,67.73872-119.89612,72.827-124.84633l.00892-.00889c.19608-.19159.29409-.28516.29409-.28516S875.29613,627.30827,875.29613,682.38411Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M799.50168,748.26482l26.747-37.37367-26.81386,41.4773-.07125,4.29076c-1.87139-.04011-3.72494-.1292-5.55619-.254l2.88282-55.10258-.0223-.42775.049-.0802.27179-5.20415L770.108,654.01076l26.96539,37.67668.06244,1.105,2.17874-41.63324-23.0132-42.96551,23.29391,35.6583,2.26789-86.31419.00892-.294v.28516l-.37871,68.064,22.91079-26.98321-23.00435,32.84678-.606,37.27566L822.18523,632.958l-21.4805,41.259-.33863,20.723,31.05561-49.79149-31.17146,57.023Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><ellipse cx="721.51694" cy="656.82212" rx="12.40027" ry="39.5" transform="translate(-220.83517 966.22323) rotate(-64.62574)" fill="#2f2e41"/><ellipse cx="112.51694" cy="651.82212" rx="12.40027" ry="39.5" transform="translate(-574.07936 452.71367) rotate(-68.15829)" fill="#2f2e41"/></svg>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<p><span style="font-size: 20px;line-height: 30px">Kamu belum pernah absen, buruan absen</span></p>
							</div><!-- /.contants -->
						</div><!-- /.iconbox -->
						@else
							@foreach($absensi as $absen)
							<div class="fancy-box fancy-box-offer fancy-box-heading-sm">
								<div class="fancy-box-cell fancy-box-header">
									<h3 class="text-white">
									<?php echo date('d-M-Y',strtotime($absen->tanggal));?>
									</h3>
								</div><!-- /.fancy-box-header -->

								<div class="fancy-box-cell text-center" data-text="Absen Awal">
								@if($absen->rekap_awal == 0)
									<div>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16" style="background-color: #dc3545; padding: 2px; border-radius:0.2rem">
											<path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
										</svg>
									</div>
								@else
									<div>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-lg" viewBox="0 0 16 16" style="background-color: #198754; padding: 2px; border-radius:0.2rem">
											<path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
										</svg>
									</div>
								@endif
								</div><!-- /.fancy-box-cell -->

								<div class="fancy-box-cell text-center" data-text="Absen Akhir">
								@if($absen->rekap_akhir == 0)
									<div>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16" style="background-color: #dc3545; padding: 2px; border-radius:0.2rem">
											<path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
										</svg>
									</div>
								@else
									<div>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-lg" viewBox="0 0 16 16" style="background-color: #198754; padding: 2px; border-radius:0.2rem">
											<path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
										</svg>
									</div>
								@endif
								</div><!-- /.fancy-box-cell -->
								<div class="fancy-box-cell" style="display:none">
									<p>Sengaja Kosong</p>
								</div><!-- /.fancy-box-cell -->
							</div><!-- /.fancy-box fancy-box-booking -->
							@endforeach
					@endif
				</div><!-- /.lqd-column col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.lqd-column col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!-- End Absensi -->

	<!-- Pelanggaran -->
	<section class="vc_row pt-100 pb-100" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
		<div class="container">
			<div class="row">
				<div class="lqd-column col-md-12 px-4 pt-45 pb-30">
					<div class="row">
					<div class="lqd-column col-md-12 transparent-card" id="tableRCdanProfile">
					<div class="fancy-box fancy-box-offer fancy-box-offer-header text-center">
						<div class="fancy-box-cell fancy-box-header">
							<h4 class="text-white">Pelanggaran</h4>
						</div><!-- /.fancy-box-header -->

						<div class="fancy-box-cell">
							<p class="text-white">Jenis</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell">
							<p class="text-white">Tanggal</p>
						</div><!-- /.fancy-box-cell -->

						<div  class="fancy-box-cell">
							<p class="text-white">Keterangan</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" style="display:none">
							<p>Sengaja Kosong</p>
						</div><!-- /.fancy-box-cell -->

					</div><!-- /.fancy-box fancy-box-booking -->
					@if(count($pelanggaran) < 1)
						<div class="iconbox text-center iconbox-xl iconbox-icon-image px-5 pt-40 mx-md-2">
							<div class="iconbox-icon-wrap">
								<svg class="text-center" id="a706cf1c-1654-439b-8fcf-310eb7aa0e00" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 1120.59226 777.91584"><circle cx="212.59226" cy="103" r="64" fill="#ff6584"/><path d="M563.68016,404.16381c0,151.01141-89.77389,203.73895-200.51559,203.73895S162.649,555.17522,162.649,404.16381,363.16457,61.04208,363.16457,61.04208,563.68016,253.1524,563.68016,404.16381Z" transform="translate(-39.70387 -61.04208)" fill="#f2f2f2"/><polygon points="316.156 523.761 318.21 397.378 403.674 241.024 318.532 377.552 319.455 320.725 378.357 207.605 319.699 305.687 319.699 305.687 321.359 203.481 384.433 113.423 321.621 187.409 322.658 0 316.138 248.096 316.674 237.861 252.547 139.704 315.646 257.508 309.671 371.654 309.493 368.625 235.565 265.329 309.269 379.328 308.522 393.603 308.388 393.818 308.449 394.99 293.29 684.589 313.544 684.589 315.974 535.005 389.496 421.285 316.156 523.761" fill="#3f3d56"/><path d="M1160.29613,466.01367c0,123.61-73.4842,166.77-164.13156,166.77s-164.13156-43.16-164.13156-166.77S996.16457,185.15218,996.16457,185.15218,1160.29613,342.40364,1160.29613,466.01367Z" transform="translate(-39.70387 -61.04208)" fill="#f2f2f2"/><polygon points="950.482 552.833 952.162 449.383 1022.119 321.4 952.426 433.154 953.182 386.639 1001.396 294.044 953.382 374.329 953.382 374.329 954.741 290.669 1006.369 216.952 954.954 277.514 955.804 124.11 950.467 327.188 950.906 318.811 898.414 238.464 950.064 334.893 945.173 428.327 945.027 425.847 884.514 341.294 944.844 434.608 944.232 446.293 944.123 446.469 944.173 447.428 931.764 684.478 948.343 684.478 950.332 562.037 1010.514 468.952 950.482 552.833" fill="#3f3d56"/><ellipse cx="554.59226" cy="680.47903" rx="554.59226" ry="28.03433" fill="#3f3d56"/><ellipse cx="892.44491" cy="726.79663" rx="94.98858" ry="4.80162" fill="#3f3d56"/><ellipse cx="548.71959" cy="773.11422" rx="94.98858" ry="4.80162" fill="#3f3d56"/><ellipse cx="287.94432" cy="734.27887" rx="217.01436" ry="10.96996" fill="#3f3d56"/><circle cx="97.08375" cy="566.26982" r="79" fill="#2f2e41"/><rect x="99.80546" y="689.02332" width="24" height="43" transform="translate(-31.32451 -62.31008) rotate(0.67509)" fill="#2f2e41"/><rect x="147.80213" y="689.58887" width="24" height="43" transform="translate(-31.31452 -62.87555) rotate(0.67509)" fill="#2f2e41"/><ellipse cx="119.54569" cy="732.61606" rx="7.5" ry="20" transform="translate(-654.1319 782.47948) rotate(-89.32491)" fill="#2f2e41"/><ellipse cx="167.55414" cy="732.18168" rx="7.5" ry="20" transform="translate(-606.25475 830.05533) rotate(-89.32491)" fill="#2f2e41"/><circle cx="99.31925" cy="546.29477" r="27" fill="#fff"/><circle cx="99.31925" cy="546.29477" r="9" fill="#3f3d56"/><path d="M61.02588,552.94636c-6.04185-28.64075,14.68758-57.26483,46.30049-63.93367s62.13813,11.14292,68.18,39.78367-14.97834,38.93-46.59124,45.59886S67.06774,581.58712,61.02588,552.94636Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M257.29613,671.38411c0,55.07585-32.73985,74.3063-73.13,74.3063q-1.40351,0-2.80255-.0312c-1.87139-.04011-3.72494-.1292-5.55619-.254-36.45135-2.57979-64.77127-22.79937-64.77127-74.02113,0-53.00843,67.73872-119.89612,72.827-124.84633l.00892-.00889c.19608-.19159.29409-.28516.29409-.28516S257.29613,616.30827,257.29613,671.38411Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M181.50168,737.26482l26.747-37.37367-26.81386,41.4773-.07125,4.29076c-1.87139-.04011-3.72494-.1292-5.55619-.254l2.88282-55.10258-.0223-.42775.049-.0802.27179-5.20415-26.88076-41.5798,26.96539,37.67668.06244,1.105,2.17874-41.63324-23.0132-42.96551,23.29391,35.6583,2.26789-86.31419.00892-.294v.28516l-.37871,68.064,22.91079-26.98321-23.00435,32.84678-.60595,37.27566L204.18523,621.958l-21.4805,41.259-.33863,20.723,31.05561-49.79149-31.17146,57.023Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><circle cx="712.48505" cy="565.41532" r="79" fill="#2f2e41"/><rect x="741.77716" y="691.82355" width="24" height="43" transform="translate(-215.99457 191.86399) rotate(-17.08345)" fill="#2f2e41"/><rect x="787.6593" y="677.72286" width="24" height="43" transform="matrix(0.95588, -0.29376, 0.29376, 0.95588, -209.82788, 204.72037)" fill="#2f2e41"/><ellipse cx="767.887" cy="732.00275" rx="20" ry="7.5" transform="translate(-220.8593 196.83312) rotate(-17.08345)" fill="#2f2e41"/><ellipse cx="813.47537" cy="716.94619" rx="20" ry="7.5" transform="translate(-214.42477 209.56103) rotate(-17.08345)" fill="#2f2e41"/><circle cx="708.52153" cy="545.71023" r="27" fill="#fff"/><circle cx="708.52153" cy="545.71023" r="9" fill="#3f3d56"/><path d="M657.35526,578.74316c-14.48957-25.43323-3.47841-59.016,24.59412-75.0092s62.57592-8.34055,77.06549,17.09268-2.39072,41.6435-30.46325,57.63671S671.84483,604.17639,657.35526,578.74316Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M611.29613,661.29875c0,50.55711-30.05368,68.20979-67.13,68.20979q-1.28835,0-2.57261-.02864c-1.71785-.03682-3.41933-.1186-5.10033-.23313-33.46068-2.36813-59.45707-20.92878-59.45707-67.948,0-48.65932,62.18106-110.05916,66.85186-114.60322l.00819-.00817c.18-.17587.27-.26177.27-.26177S611.29613,610.74164,611.29613,661.29875Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M541.72029,721.77424l24.55253-34.30732-24.6139,38.07426-.0654,3.93872c-1.71785-.03682-3.41933-.1186-5.10033-.23313l2.6463-50.58165-.02047-.39266.045-.07361.24949-4.77718-24.67531-38.16836,24.753,34.58547.05731,1.01433,2-38.21741-21.12507-39.44039L541.80616,625.928l2.08182-79.23247.00819-.26994v.26177l-.34764,62.47962,21.031-24.76934-21.11693,30.15184-.55624,34.21735,19.63634-32.839-19.71812,37.87389-.31085,19.0228,28.50763-45.70631-28.614,52.34448Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><path d="M875.29613,682.38411c0,55.07585-32.73985,74.3063-73.13,74.3063q-1.4035,0-2.80255-.0312c-1.87139-.04011-3.72494-.1292-5.55619-.254-36.45135-2.57979-64.77127-22.79937-64.77127-74.02113,0-53.00843,67.73872-119.89612,72.827-124.84633l.00892-.00889c.19608-.19159.29409-.28516.29409-.28516S875.29613,627.30827,875.29613,682.38411Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M799.50168,748.26482l26.747-37.37367-26.81386,41.4773-.07125,4.29076c-1.87139-.04011-3.72494-.1292-5.55619-.254l2.88282-55.10258-.0223-.42775.049-.0802.27179-5.20415L770.108,654.01076l26.96539,37.67668.06244,1.105,2.17874-41.63324-23.0132-42.96551,23.29391,35.6583,2.26789-86.31419.00892-.294v.28516l-.37871,68.064,22.91079-26.98321-23.00435,32.84678-.606,37.27566L822.18523,632.958l-21.4805,41.259-.33863,20.723,31.05561-49.79149-31.17146,57.023Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><ellipse cx="721.51694" cy="656.82212" rx="12.40027" ry="39.5" transform="translate(-220.83517 966.22323) rotate(-64.62574)" fill="#2f2e41"/><ellipse cx="112.51694" cy="651.82212" rx="12.40027" ry="39.5" transform="translate(-574.07936 452.71367) rotate(-68.15829)" fill="#2f2e41"/></svg>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<p><span style="font-size: 20px;line-height: 30px">Kamu belum melakukan pelanggaran kok</span></p>
							</div><!-- /.contants -->
						</div><!-- /.iconbox -->
						@else
						@foreach($pelanggaran as $p)
						<div class="fancy-box fancy-box-offer fancy-box-heading-sm text-center">

						<div class="fancy-box-cell fancy-box-header">
							<h3 class="text-white">
							{{$p->nama_pelanggaran}}
							</h3>

						</div><!-- /.fancy-box-header -->

						<div class="fancy-box-cell" data-text="Jenis">
							<h5 class="text-white">
							{{$p->jenis_pelanggaran}}
							</h5>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" data-text="Tanggal">
							<h5 class="text-white">
							<?php echo date('d-M-Y',strtotime($p->tanggal));?>
							</h5>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" data-text="Keterangan">
							<h5 class="text-white">
							{{$p->keterangan}}
							</h5>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" style="display:none">
							<p>Sengaja Kosong</p>
						</div><!-- /.fancy-box-cell -->
					</div><!-- /.fancy-box fancy-box-booking -->
						@endforeach
					@endif
					<!-- button kendala  -->
					<p>Apabila ada kendala saat proses MOB FT 2021, mahasiswa baru bisa menekan tombol berikut untuk melaporkan kendala yang dialami</p>
					<a href="{{url('/kendala')}}" class="btn btn-sm btn-solid font-weight-semibold lh-15" style="border-radius: 2rem; margin-bottom:25px;">
						<span class="btn-gradient-bg"></span>
						<span>
						<span class="btn-txt">Laporkan kendala</span>
						</span>
					</a>
					<!-- end button kendala  -->
				</div><!-- /.lqd-column col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.lqd-column col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!-- End Pelanggaran -->

	<!-- Modal Profile -->
	<div id="modalProfile" class="lqd-modal lity-hide col-md-12 justify-content-center">
         <div class="lqd-modal-inner">

             <div class="lqd-modal-head">
                 <header class="fancy-heading text-center">
                     <h2>Status Ubah Profil</h2>
                 </header>
             </div><!-- /.lqd-modal-head -->

             <div class="lqd-modal-content">
                 <div class="row">
                     <div class="col-md-12 text-center">
                         <div class="row">
                             <div class="lqd-column col-md-8 col-md-offset-2">
							 	<svg id="a65bca02-317b-4705-84dd-2a5586816ee4" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 680.83858 584.23207"><path id="b9ccae5a-ffdd-4f5c-9c1e-05af9f0f3372" data-name="Path 438" d="M310.70569,694.02818a24.21459,24.21459,0,0,0,23.38269-4.11877c8.18977-6.87441,10.758-18.196,12.8467-28.68191l6.17973-31.01657-12.9377,8.90837c-9.30465,6.40641-18.81826,13.01866-25.26011,22.29785s-9.25223,21.94707-4.07792,31.988" transform="translate(-259.58071 -157.88396)" fill="#e6e6e6"/><path id="f4ad1d06-bd03-4ced-a5c4-c19a65ab4ee5" data-name="Path 439" d="M312.7034,733.73874c-1.62839-11.86368-3.30382-23.88078-2.15884-35.87167,1.01467-10.64932,4.26373-21.04881,10.87831-29.57938a49.20592,49.20592,0,0,1,12.62466-11.44039c1.26215-.79648,2.42409,1.20354,1.16733,1.997a46.77949,46.77949,0,0,0-18.50446,22.32562c-4.02857,10.24607-4.67545,21.41582-3.98154,32.3003.41944,6.58218,1.31074,13.1212,2.20588,19.65251a1.19817,1.19817,0,0,1-.808,1.42251,1.16348,1.16348,0,0,1-1.42253-.808Z" transform="translate(-259.58071 -157.88396)" fill="#f2f2f2"/><path id="baf785f8-b4c6-42cf-85bd-8a16037845f7" data-name="Path 442" d="M324.42443,714.70229a17.82513,17.82513,0,0,0,15.53141,8.01862c7.8644-.37318,14.41806-5.85973,20.31713-11.07027l17.452-15.4088-11.54987-.55281c-8.30619-.39784-16.82672-.771-24.73813,1.79338s-15.20758,8.72639-16.654,16.91541" transform="translate(-259.58071 -157.88396)" fill="#e6e6e6"/><path id="a14e4330-7125-4e03-a856-d6453c34f6cc" data-name="Path 443" d="M308.10042,740.55843c7.83972-13.87142,16.93234-29.28794,33.1808-34.21552a37.02609,37.02609,0,0,1,13.95545-1.441c1.48189.128,1.11179,2.41174-.367,2.28454a34.39833,34.39833,0,0,0-22.27164,5.89215c-6.27994,4.27453-11.16975,10.21755-15.30781,16.51907-2.53511,3.86051-4.80576,7.88445-7.07642,11.903C309.48824,742.78513,307.36641,741.85759,308.10042,740.55843Z" transform="translate(-259.58071 -157.88396)" fill="#f2f2f2"/><path id="ac20a106-7eb8-4a45-8835-674ef3bf3222" data-name="Path 141" d="M935.3957,569.31654H503.18092a5.03014,5.03014,0,0,1-5.02359-5.02359V162.90754a5.03017,5.03017,0,0,1,5.02359-5.02358H935.3957a5.03017,5.03017,0,0,1,5.02359,5.02358V564.292a5.02922,5.02922,0,0,1-5.02359,5.02359Z" transform="translate(-259.58071 -157.88396)" fill="#fff"/><path id="a8878079-c7cd-406f-a434-8b15b914b9b4" data-name="Path 141" d="M935.3957,569.31654H503.18092a5.03014,5.03014,0,0,1-5.02359-5.02359V162.90754a5.03017,5.03017,0,0,1,5.02359-5.02358H935.3957a5.03017,5.03017,0,0,1,5.02359,5.02358V564.292a5.02922,5.02922,0,0,1-5.02359,5.02359ZM503.18092,159.88944a3.01808,3.01808,0,0,0-3.01152,3.01151V564.292a3.01808,3.01808,0,0,0,3.01152,3.01152H935.3957a3.01717,3.01717,0,0,0,3.01153-3.01152V162.90754a3.01809,3.01809,0,0,0-3.01153-3.01151Z" transform="translate(-259.58071 -157.88396)" fill="#cacaca"/><path id="af64f961-e9a2-4c53-a333-5060c7f850d2" data-name="Path 142" d="M707.41023,262.18528a3.41053,3.41053,0,0,0,0,6.82105H894.55305a3.41053,3.41053,0,0,0,0-6.82105Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="baad4cfb-158d-4439-9cc3-22475bf47b22" data-name="Path 143" d="M707.41023,282.65037a3.41054,3.41054,0,0,0,0,6.82106h95.54019a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="f3456279-91e5-49ad-aa43-9838b26fb6ca" data-name="Path 142" d="M543.84146,392.7046a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="a3288adf-49f8-485f-8ae9-1e4f1a13d849" data-name="Path 143" d="M543.84146,413.1697a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="e63a5b48-5a7d-40a2-b9b0-6adec326348a" data-name="Path 142" d="M543.84146,433.17177a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="a1c669b4-dfc3-4cfa-a7be-66b71399844d" data-name="Path 143" d="M543.84146,453.63687a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="bfec50d1-ffb1-4de6-a9ef-a1085e40e016" data-name="Path 142" d="M543.84146,474.17177a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="bc9696ec-ec99-41d5-9116-3ad9737a38ac" data-name="Path 143" d="M543.84146,494.63687a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path d="M599.41943,324.82812a49,49,0,1,1,48.99952-49A49.05567,49.05567,0,0,1,599.41943,324.82812Z" transform="translate(-259.58071 -157.88396)" fill="#209c8c"/><path d="M450.67833,510.10041a12.24754,12.24754,0,0,0-14.953-11.36231l-16.19641-22.82521-16.27138,6.45945,23.32519,31.91237a12.31392,12.31392,0,0,0,24.09559-4.1843Z" transform="translate(-259.58071 -157.88396)" fill="#a0616a"/><path d="M419.11211,508.40888l-49.00774-63.57777L388.46714,387.12c1.34563-14.50936,10.425-18.56089,10.81135-18.72645l.5893-.25281,15.979,42.6119-11.73235,31.28625,28.79671,48.4319Z" transform="translate(-259.58071 -157.88396)" fill="#3f3d56"/><path d="M589.30794,312.41993a12.24758,12.24758,0,0,0-10.17219,15.78672l-21.50463,17.91269,7.69816,15.72326,30.01343-25.72272a12.31392,12.31392,0,0,0-6.03477-23.69995Z" transform="translate(-259.58071 -157.88396)" fill="#a0616a"/><path d="M590.06206,344.02244l-59.59835,53.77665-58.95815-13.84578c-14.57-.21979-19.31136-8.9587-19.50629-9.33113l-.29761-.568,41.2489-19.22578,32.0997,9.27828,46.06046-32.45509Z" transform="translate(-259.58071 -157.88396)" fill="#3f3d56"/><polygon points="227.248 568.437 243.261 568.436 250.878 506.672 227.245 506.673 227.248 568.437" fill="#a0616a"/><path d="M483.39733,721.74476h50.32614a0,0,0,0,1,0,0V741.189a0,0,0,0,1,0,0h-36.207a14.11914,14.11914,0,0,1-14.11914-14.11914v-5.32505A0,0,0,0,1,483.39733,721.74476Z" transform="translate(757.57348 1305.02654) rotate(179.99738)" fill="#2f2e41"/><polygon points="163.247 568.437 179.26 568.436 186.878 506.672 163.245 506.673 163.247 568.437" fill="#a0616a"/><path d="M419.397,721.74476H469.7231a0,0,0,0,1,0,0V741.189a0,0,0,0,1,0,0h-36.207A14.11914,14.11914,0,0,1,419.397,727.06981v-5.32505a0,0,0,0,1,0,0Z" transform="translate(629.57273 1305.02946) rotate(179.99738)" fill="#2f2e41"/><polygon points="157.552 342.991 158.858 434.42 160.165 554.584 188.899 551.972 203.267 386.094 221.553 551.972 251.218 551.972 254.206 384.788 243.757 348.216 157.552 342.991" fill="#2f2e41"/><path d="M473.37417,513.1531c-31.26533.00239-60.04471-14.14839-60.43319-14.34263l-.32273-.16136-2.62373-62.96637c-.76082-2.22509-15.74263-46.13091-18.28-60.08625-2.57083-14.13882,34.68842-26.54742,39.213-27.99853l1.02678-11.37405,41.75366-4.49918,5.292,14.5536,14.97942,5.6168a7.40924,7.40924,0,0,1,4.59212,8.7043l-8.32539,33.85619,20.33325,112.01266-4.37755.18946C495.709,511.39658,484.38425,513.1525,473.37417,513.1531Z" transform="translate(-259.58071 -157.88396)" fill="#3f3d56"/><circle cx="454.46738" cy="294.45965" r="30.06284" transform="matrix(0.87745, -0.47966, 0.47966, 0.87745, -345.12824, 96.19037)" fill="#a0616a"/><path d="M430.1166,323.56132c5.72926,6.10289,16.36927,2.82672,17.1158-5.51069a10.07153,10.07153,0,0,0-.01268-1.94523c-.38544-3.69311-2.519-7.046-2.008-10.94542a5.73974,5.73974,0,0,1,1.05046-2.687c4.56548-6.11359,15.28263,2.73444,19.59138-2.8,2.642-3.39359-.46364-8.73664,1.56381-12.52956,2.67591-5.006,10.60183-2.53654,15.57222-5.27809,5.53017-3.05032,5.1994-11.53517,1.55907-16.6961-4.43955-6.294-12.22348-9.65241-19.91044-10.13643s-15.32094,1.59394-22.4974,4.39069c-8.15392,3.17767-16.23969,7.56925-21.25749,14.739-6.10218,8.71919-6.68942,20.44132-3.6376,30.63677C419.10222,311.0013,425.43805,318.57766,430.1166,323.56132Z" transform="translate(-259.58071 -157.88396)" fill="#2f2e41"/><path d="M641.58071,741.9626h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-259.58071 -157.88396)" fill="#cacaca"/><path d="M596.58984,294.33545a3.488,3.488,0,0,1-2.38134-.93555l-16.15723-15.00732a3.49994,3.49994,0,0,1,4.76367-5.12891l13.68555,12.71192,27.07666-27.07618a3.5,3.5,0,1,1,4.94922,4.9502l-29.46094,29.46094A3.49275,3.49275,0,0,1,596.58984,294.33545Z" transform="translate(-259.58071 -157.88396)" fill="#fff"/></svg>
                                <h4 id="isiModalProfile">
								</h4>
                             </div><!-- /.col-md-8 col-md-offset-2 -->
                         </div><!-- /.row -->
                     </div><!-- /.col-md-12 -->
                 </div><!-- /.row -->

             </div><!-- /.lqd-modal-content -->
			 <div class="lqd-modal-foot">
                <div class="col-md-12 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000" class="bi bi-x-lg lity-close" viewBox="0 0 16 16" data-lity-close>
                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                    </svg>
                </div>
             </div><!-- /.lqd-modal-foot -->
         </div><!-- /.lqd-modal-inner -->
     </div><!-- /.lqd-modal -->
    <!-- End Modal Presensi -->
	<!-- End Modal Profile -->
</main><!-- /#content.content -->
		<script>
			$('#simpan').on('click', function(e){
				// alert('dor');
				// $('#modalProfile').modal('show');
				var nama = $('#nama').val();
				var sekolah = $('#sekolah').val();
				var no_telp = $('#no_telp').val();
				var line = $('#line').val();
				var instagram = $('#instagram').val();
				var email = $('#email').val();

				$.ajax({
				type: 'POST',
				url:'{{ route("profileSimpan") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
					'nama': nama,
					'sekolah': sekolah,
					'no_telp': no_telp,
					'line': line,
					'instagram': instagram,
					'email': email
				},
				success: function(data){
					$('#isiModalProfile').html(data.msg);
				}
				});
			});
    	</script>
@endsection
