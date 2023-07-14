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
                            <li class="menu-item-has-children">
                                <a href="#profile">
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
    <!-- Form Kendala -->
    <section class="vc_row pt-100 pb-30 mt-30" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
		<div class="container">
			<div class="row">

				<div class="lqd-column col-md-12 px-4 pt-45 pb-30 transparent-card" style="border-radius: 1rem;" id="tableRCdanProfile">

					<div class="row d-flex flex-wrap align-items-center">

						<div class="lqd-column col-md-8 col-md-offset-1">

							<header class="fancy-title">
								<h4 class="text-white">Lapor Kendala</h4>
							</header><!-- /.fancy-title -->

						</div><!-- /.lqd-column col-md-6 col-md-offset-1 -->

					</div><!-- /.row -->

					<div class="row">

						<div class="lqd-column col-md-10 col-md-offset-1">
                            
							<!-- <div class="contact-form contact-form-inputs-underlined contact-form-button-circle"> -->
                            @if((\Carbon\Carbon::now()) >= (\Carbon\Carbon::parse('today 07:15:00')) && (\Carbon\Carbon::now()) < (\Carbon\Carbon::parse('today 17:00:59')))
                            <form action="{{route('tambahBukti')}}" method="POST" enctype="multipart/form-data" class="contact-form contact-form-inputs-underlined contact-form-button-circle">
                                @csrf
									<div class="row d-flex flex-wrap">
										<div class="lqd-column col-sm-10 mb-10">
                                            <h5 class="text-white">Kendala:</h5>
                                            <textarea style="border: 0; outline: 0; background: transparent; border-bottom: 1px solid white; border-radius: 0; color: lightgray;" cols="10" rows="6" name="kendala" id="kendala" aria-required="true" aria-invalid="false" placeholder="Ceritakan kendala di sini" required></textarea>
                                            <h5 class="text-white" for="filebukti">Unggah bukti:</h5>
                                            <!-- <p for="filebukti" style="color: lightgray">Format penamaan bukti kendala: Nama_NRP_Kendala</p> -->
                                            <p for="filebukti" style="color: lightgray">Bukti harus menunjukkan HARI, TANGGAL, dan WAKTU terjadinya kendala</p>
                                            <input class="mt-4" type="file" name="filebukti" id="filebukti" aria-invalid="false" required style="border: 0; outline: 0; background: transparent; border-bottom: 1px solid white; border-radius: 0; color: lightgray;">
										</div><!-- /.col-md-6 -->
										<div class="lqd-column col-sm-12 text-md-left">
                                            <input type="submit" class="btn btn-sm btn-solid font-weight-semibold lh-15 font-size-13 ltr-sp-1" style="border-radius: 2rem" value="Kirim">
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->
                                </form>
							<!-- </div> -->
                            @endif

						</div><!-- /.col-md-10 col-md-offset-1 -->

					</div><!-- /.row -->
				</div><!-- /.lqd-column col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!-- End Form Kendala -->

    <!-- Riwayat Kendala -->
    <section class="vc_row pt-100 pb-100" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
		<div class="container">
			<div class="row">

				<div class="lqd-column col-md-12 px-4 pt-45 pb-30">

					<div class="row">

					<div class="lqd-column col-md-12 transparent-card" id="tableRCdanProfile">

					<div class="fancy-box fancy-box-offer fancy-box-offer-header text-center">

						<div class="fancy-box-cell fancy-box-header">
							<h4 class="text-white">Riwayat Kendala</h4>
						</div><!-- /.fancy-box-header -->

						<div class="fancy-box-cell">
							<p class="text-white">Keluhan</p>
						</div><!-- /.fancy-box-cell -->

						<div  class="fancy-box-cell">
							<p class="text-white">File</p>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" style="display:none">
							<p>Sengaja Kosong</p>
						</div><!-- /.fancy-box-cell -->

					</div><!-- /.fancy-box fancy-box-booking -->
					@if(count($listkendala) < 1)
						<div class="iconbox text-center iconbox-xl iconbox-icon-image px-5 pt-40 mx-md-2">
							<div class="iconbox-icon-wrap">
								<svg class="text-center" id="a706cf1c-1654-439b-8fcf-310eb7aa0e00" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 1120.59226 777.91584"><circle cx="212.59226" cy="103" r="64" fill="#ff6584"/><path d="M563.68016,404.16381c0,151.01141-89.77389,203.73895-200.51559,203.73895S162.649,555.17522,162.649,404.16381,363.16457,61.04208,363.16457,61.04208,563.68016,253.1524,563.68016,404.16381Z" transform="translate(-39.70387 -61.04208)" fill="#f2f2f2"/><polygon points="316.156 523.761 318.21 397.378 403.674 241.024 318.532 377.552 319.455 320.725 378.357 207.605 319.699 305.687 319.699 305.687 321.359 203.481 384.433 113.423 321.621 187.409 322.658 0 316.138 248.096 316.674 237.861 252.547 139.704 315.646 257.508 309.671 371.654 309.493 368.625 235.565 265.329 309.269 379.328 308.522 393.603 308.388 393.818 308.449 394.99 293.29 684.589 313.544 684.589 315.974 535.005 389.496 421.285 316.156 523.761" fill="#3f3d56"/><path d="M1160.29613,466.01367c0,123.61-73.4842,166.77-164.13156,166.77s-164.13156-43.16-164.13156-166.77S996.16457,185.15218,996.16457,185.15218,1160.29613,342.40364,1160.29613,466.01367Z" transform="translate(-39.70387 -61.04208)" fill="#f2f2f2"/><polygon points="950.482 552.833 952.162 449.383 1022.119 321.4 952.426 433.154 953.182 386.639 1001.396 294.044 953.382 374.329 953.382 374.329 954.741 290.669 1006.369 216.952 954.954 277.514 955.804 124.11 950.467 327.188 950.906 318.811 898.414 238.464 950.064 334.893 945.173 428.327 945.027 425.847 884.514 341.294 944.844 434.608 944.232 446.293 944.123 446.469 944.173 447.428 931.764 684.478 948.343 684.478 950.332 562.037 1010.514 468.952 950.482 552.833" fill="#3f3d56"/><ellipse cx="554.59226" cy="680.47903" rx="554.59226" ry="28.03433" fill="#3f3d56"/><ellipse cx="892.44491" cy="726.79663" rx="94.98858" ry="4.80162" fill="#3f3d56"/><ellipse cx="548.71959" cy="773.11422" rx="94.98858" ry="4.80162" fill="#3f3d56"/><ellipse cx="287.94432" cy="734.27887" rx="217.01436" ry="10.96996" fill="#3f3d56"/><circle cx="97.08375" cy="566.26982" r="79" fill="#2f2e41"/><rect x="99.80546" y="689.02332" width="24" height="43" transform="translate(-31.32451 -62.31008) rotate(0.67509)" fill="#2f2e41"/><rect x="147.80213" y="689.58887" width="24" height="43" transform="translate(-31.31452 -62.87555) rotate(0.67509)" fill="#2f2e41"/><ellipse cx="119.54569" cy="732.61606" rx="7.5" ry="20" transform="translate(-654.1319 782.47948) rotate(-89.32491)" fill="#2f2e41"/><ellipse cx="167.55414" cy="732.18168" rx="7.5" ry="20" transform="translate(-606.25475 830.05533) rotate(-89.32491)" fill="#2f2e41"/><circle cx="99.31925" cy="546.29477" r="27" fill="#fff"/><circle cx="99.31925" cy="546.29477" r="9" fill="#3f3d56"/><path d="M61.02588,552.94636c-6.04185-28.64075,14.68758-57.26483,46.30049-63.93367s62.13813,11.14292,68.18,39.78367-14.97834,38.93-46.59124,45.59886S67.06774,581.58712,61.02588,552.94636Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M257.29613,671.38411c0,55.07585-32.73985,74.3063-73.13,74.3063q-1.40351,0-2.80255-.0312c-1.87139-.04011-3.72494-.1292-5.55619-.254-36.45135-2.57979-64.77127-22.79937-64.77127-74.02113,0-53.00843,67.73872-119.89612,72.827-124.84633l.00892-.00889c.19608-.19159.29409-.28516.29409-.28516S257.29613,616.30827,257.29613,671.38411Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M181.50168,737.26482l26.747-37.37367-26.81386,41.4773-.07125,4.29076c-1.87139-.04011-3.72494-.1292-5.55619-.254l2.88282-55.10258-.0223-.42775.049-.0802.27179-5.20415-26.88076-41.5798,26.96539,37.67668.06244,1.105,2.17874-41.63324-23.0132-42.96551,23.29391,35.6583,2.26789-86.31419.00892-.294v.28516l-.37871,68.064,22.91079-26.98321-23.00435,32.84678-.60595,37.27566L204.18523,621.958l-21.4805,41.259-.33863,20.723,31.05561-49.79149-31.17146,57.023Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><circle cx="712.48505" cy="565.41532" r="79" fill="#2f2e41"/><rect x="741.77716" y="691.82355" width="24" height="43" transform="translate(-215.99457 191.86399) rotate(-17.08345)" fill="#2f2e41"/><rect x="787.6593" y="677.72286" width="24" height="43" transform="matrix(0.95588, -0.29376, 0.29376, 0.95588, -209.82788, 204.72037)" fill="#2f2e41"/><ellipse cx="767.887" cy="732.00275" rx="20" ry="7.5" transform="translate(-220.8593 196.83312) rotate(-17.08345)" fill="#2f2e41"/><ellipse cx="813.47537" cy="716.94619" rx="20" ry="7.5" transform="translate(-214.42477 209.56103) rotate(-17.08345)" fill="#2f2e41"/><circle cx="708.52153" cy="545.71023" r="27" fill="#fff"/><circle cx="708.52153" cy="545.71023" r="9" fill="#3f3d56"/><path d="M657.35526,578.74316c-14.48957-25.43323-3.47841-59.016,24.59412-75.0092s62.57592-8.34055,77.06549,17.09268-2.39072,41.6435-30.46325,57.63671S671.84483,604.17639,657.35526,578.74316Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M611.29613,661.29875c0,50.55711-30.05368,68.20979-67.13,68.20979q-1.28835,0-2.57261-.02864c-1.71785-.03682-3.41933-.1186-5.10033-.23313-33.46068-2.36813-59.45707-20.92878-59.45707-67.948,0-48.65932,62.18106-110.05916,66.85186-114.60322l.00819-.00817c.18-.17587.27-.26177.27-.26177S611.29613,610.74164,611.29613,661.29875Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M541.72029,721.77424l24.55253-34.30732-24.6139,38.07426-.0654,3.93872c-1.71785-.03682-3.41933-.1186-5.10033-.23313l2.6463-50.58165-.02047-.39266.045-.07361.24949-4.77718-24.67531-38.16836,24.753,34.58547.05731,1.01433,2-38.21741-21.12507-39.44039L541.80616,625.928l2.08182-79.23247.00819-.26994v.26177l-.34764,62.47962,21.031-24.76934-21.11693,30.15184-.55624,34.21735,19.63634-32.839-19.71812,37.87389-.31085,19.0228,28.50763-45.70631-28.614,52.34448Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><path d="M875.29613,682.38411c0,55.07585-32.73985,74.3063-73.13,74.3063q-1.4035,0-2.80255-.0312c-1.87139-.04011-3.72494-.1292-5.55619-.254-36.45135-2.57979-64.77127-22.79937-64.77127-74.02113,0-53.00843,67.73872-119.89612,72.827-124.84633l.00892-.00889c.19608-.19159.29409-.28516.29409-.28516S875.29613,627.30827,875.29613,682.38411Z" transform="translate(-39.70387 -61.04208)" fill="#209c8c"/><path d="M799.50168,748.26482l26.747-37.37367-26.81386,41.4773-.07125,4.29076c-1.87139-.04011-3.72494-.1292-5.55619-.254l2.88282-55.10258-.0223-.42775.049-.0802.27179-5.20415L770.108,654.01076l26.96539,37.67668.06244,1.105,2.17874-41.63324-23.0132-42.96551,23.29391,35.6583,2.26789-86.31419.00892-.294v.28516l-.37871,68.064,22.91079-26.98321-23.00435,32.84678-.606,37.27566L822.18523,632.958l-21.4805,41.259-.33863,20.723,31.05561-49.79149-31.17146,57.023Z" transform="translate(-39.70387 -61.04208)" fill="#3f3d56"/><ellipse cx="721.51694" cy="656.82212" rx="12.40027" ry="39.5" transform="translate(-220.83517 966.22323) rotate(-64.62574)" fill="#2f2e41"/><ellipse cx="112.51694" cy="651.82212" rx="12.40027" ry="39.5" transform="translate(-574.07936 452.71367) rotate(-68.15829)" fill="#2f2e41"/></svg>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<p><span style="font-size: 20px;line-height: 30px">Kamu belum pernah melaporkan kendala apapun</span></p>
                            <br>
							</div><!-- /.contants -->
						</div><!-- /.iconbox -->
						@else
						@foreach($listkendala as $l)


						<div class="fancy-box fancy-box-offer fancy-box-heading-sm text-center">

						<div class="fancy-box-cell fancy-box-header">
							<h3 class="text-white">
							{{$l->idkendala}}
							</h3>

						</div><!-- /.fancy-box-header -->

						<div class="fancy-box-cell" data-text="Keluhan">
							<h5 class="text-white">
							{{$l->deskripsi}}
							</h5>
						</div><!-- /.fancy-box-cell -->

						<div class="fancy-box-cell" data-text="Nama File">
							<h5 class="text-white">
							<a class="text-white" href="{{ asset('img/sfd_bukti/'.$l->file)}}" target="_blank">{{$l->file}}</a>
							</h5>
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
    <!-- End Riwayat Kendala -->
</main><!-- /#content.content -->


<script>
	//cek kalo file lebih dari 2MB
var uploadField = document.getElementById("filebukti");

uploadField.onchange = function() {
    if(this.files[0].size > 2097152){
       alert("Ukuran file kamu kebesaran nih... Harus dibawah 2Mb ya");
       this.value = "";
    };
};

</script>
@endsection
