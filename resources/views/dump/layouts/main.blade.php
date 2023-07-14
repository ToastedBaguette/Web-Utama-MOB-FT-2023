
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
        <!-- <base href="../../../"> -->
		<meta charset="utf-8" />
		<title>Footer Callback Examples | Keenthemes</title>
		<meta name="description" content="Footer callback datatables examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
        @yield('style')
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="./img/mob.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
					<span></span>
				</button>
					<!--begin::Nama-->
					<div class="dropdown" style="margin-left: 1vh;">
						<!--begin::Toggle-->
						<div class="topbar-item mr-4" data-toggle="dropdown" data-offset="10px,0px">
							<div class="btn font-weight-bolder btn-sm btn-light-success px-5">{{Auth::user()->name}}</div>
						</div>
						<!--end::Toggle-->
						<!--begin::Dropdown-->
						<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-md">
							<!--begin::Navigation-->
							<ul class="navi navi-hover py-5">
								<li class="navi-item">
									<a href="#" class="navi-link">
										{{-- <span class="navi-icon">
											<i class="flaticon2-drop"></i>
										</span> --}}
										<span class="navi-text">Log Out</span>
									</a>
								</li>
								</ul>
							<!--end::Navigation-->
						</div>
						<!--end::Dropdown-->
					</div>
					<!--end::Nama-->

			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								@if(Auth::user()->divisi =='MAPING')
								@yield('navmaping')
								@elseif(Auth::user()->divisi =='SFD')
								@yield('navsfd')
								@endif


							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed" style="background-color:#33334d;">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-none d-lg-flex align-items-center mr-3">
								<!--begin::Aside Toggle-->
								<button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
									<span class="svg-icon svg-icon-xxl svg-icon-dark-75">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Align-left.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1" />
												<rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1" />
												<path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</button>
								<!--end::Aside Toggle-->
								<!--begin::Logo-->
								<a href="index.html">
									<img alt="Logo" src="./img/mob.png" class="logo-sticky max-h-35px" />
								</a>
								<!--end::Logo-->

							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::Tablet & Mobile Search-->
								<div class="dropdown d-flex d-lg-none">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
											<span class="svg-icon svg-icon-xl">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
											<!--begin:Form-->
											<form method="get" class="quick-search-form">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
													</div>
													<input type="text" class="form-control" placeholder="Search..." />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
														</span>
													</div>
												</div>
											</form>
											<!--end::Form-->
											<!--begin::Scroll-->
											<div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
											<!--end::Scroll-->
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Tablet & Mobile Search-->
								<!--begin::Nama-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item mr-4" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn font-weight-bolder btn-sm btn-light-success px-5">{{Auth::user()->name}}</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-md">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													{{-- <span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span> --}}
													<span class="navi-text">Log Out</span>
												</a>
											</li>
											</ul>
										<!--end::Navigation-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Nama-->

							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					@yield('content')
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021©</span>
								<span class="text-dark-75 text-hover-primary">Information Technology Department</span>
								<!-- <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Information Technology Department</a> -->
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
							<span class="text-dark-75 text-hover-primary">MOBFT 2021</span>
								<!-- <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3"> </a> -->
								<!-- <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0"> </a> -->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->

		<!--begin::Demo Panel-->
		<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
				<h4 class="font-weight-bold m-0">Select A Demo</h4>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Wrapper-->
				<div class="offcanvas-wrapper mb-5 scroll-pull">
					<h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo1.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo1/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo1/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo2.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo2/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo2/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo3.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo3/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo3/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo4.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo4/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo4/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo5.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo5/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo5/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo6.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo6/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo6/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo7.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo7/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo7/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo8.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo8/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo8/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo9.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo9/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo9/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo10.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo10/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo10/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo11.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo11/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo11/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo12.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo12/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo12/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo13.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../../../../demo13/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo13/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo14.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo15.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo16.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo17.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo18.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo19.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo20.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo21.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo22.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo23.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo24.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo25.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo26.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo27.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo28.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo29.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo30.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
				</div>
				<!--end::Wrapper-->
				<!--begin::Purchase-->
				<div class="offcanvas-footer">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
				</div>
				<!--end::Purchase-->
			</div>
	
		</div>

		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('admin/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
		<!--end::Global Theme Bundle-->
		@yield('script')
	</body>
	<!--end::Body-->
</html>
