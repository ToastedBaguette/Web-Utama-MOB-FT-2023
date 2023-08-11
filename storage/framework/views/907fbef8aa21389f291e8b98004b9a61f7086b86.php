<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
	<meta charset="utf-8" />
	<title>MOB FT 2023</title>
	<!-- <meta name="description" content="Pagination options datatables examples" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- <link rel="canonical" href="https://keenthemes.com/metronic" /> -->
	<!--begin::Fonts-->
	<link rel="shortcut icon" href="<?php echo e(asset('img/mob.png')); ?>" />
	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<?php echo $__env->yieldContent('style'); ?>
	<!--end::Page Vendors Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/plugins/global/plugins.bundle.css')); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/plugins/custom/prismjs/prismjs.bundle.css')); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/style.bundle.css')); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/custom.css')); ?>">
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<!-- <link rel="shortcut icon" href="<button id=" tampil" type="submit" class="btn btn-success mt-4">Tampil</button>" /> -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
		<!--begin::Logo-->
		<a class="main-font fs-24" href="/homeadmin">MOB FT 2023</a>
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
					<div class="btn btn-icon btn-light-primary mr-2">
						<i class="flaticon2-user"></i>
					</div>
					<!-- <div class="btn font-weight-bolder btn-sm btn-light-success px-5"><?php echo e(Auth::user()->name); ?></div> -->
				</div>
				<!--end::Toggle-->
				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-md">
					<!--begin::Navigation-->
					<ul class="navi navi-hover py-5">
						<li class="navi-item">
							<a href="<?php echo e(url('/dashboard')); ?>" class="navi-link">
								<span class="navi-icon">
									<i class="flaticon-users"></i>
								</span>
								<span class="navi-text">Dashboard Maharu</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="<?php echo e(route('logout')); ?>" class="navi-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								<span class="navi-icon">
									<i class="flaticon-logout"></i>
								</span>
								<span class="navi-text">Keluar</span>
								<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
									<?php echo csrf_field(); ?>
								</form>
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
					<div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1"
						data-menu-scroll="1" data-menu-dropdown-timeout="500">
						<!--begin::Menu Nav-->
						<ul class="menu-nav">
							<?php if(Auth::user()->divisi =='MAPING'): ?>
							<?php echo $__env->yieldContent('navmaping'); ?>
							<?php elseif(Auth::user()->divisi =='SFD'): ?>
							<?php echo $__env->yieldContent('navsfd'); ?>
							<?php elseif(Auth::user()->divisi =='AD'): ?>
							<?php echo $__env->yieldContent('navad'); ?>
							<?php elseif(Auth::user()->divisi =='ED'): ?>
							<?php echo $__env->yieldContent('naved'); ?>
							<?php elseif(Auth::user()->divisi =='KOORCAB'): ?>
							<?php echo $__env->yieldContent('navkoorcab'); ?>
							<?php elseif(Auth::user()->divisi =='KONTINGEN'): ?>
							<?php echo $__env->yieldContent('navkontingen'); ?>
							<?php elseif(Auth::user()->divisi =='BPH'): ?>
							<?php echo $__env->yieldContent('navbph'); ?>
							<?php elseif(Auth::user()->divisi =='ITD'): ?>
							<?php echo $__env->yieldContent('navitd'); ?>
							<?php endif; ?>
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
				<div id="kt_header" class="header header-fixed">
					<!--begin::Container-->
					<div class="container d-flex align-items-stretch justify-content-between">
						<!--begin::Left-->
						<div class="d-none d-lg-flex align-items-center mr-3">
							<!--begin::Aside Toggle-->
							<button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
								<span class="svg-icon svg-icon-xxl svg-icon-dark-75">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Align-left.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1">
											</rect>
											<rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2"
												rx="1"></rect>
											<path
												d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z"
												fill="#000000" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
							</button>
							<!-- <button class="btn p-0 burger-icon rounded-0 burger-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
					<span></span>
				</button> -->
							<!--end::Aside Toggle-->
							<!--begin::Logo-->
							<a class="main-font fs-24" href="/homeadmin">
								MOB FT 2023
								<!-- <img alt="Logo" src="<?php echo e(asset('img/logopink.png')); ?>" class="logo-sticky max-h-35px" /> -->
							</a>
							<!--end::Logo-->
							<!--begin::Desktop Search-->

							<!--end::Desktop Search-->
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
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
														fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path
														d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
														fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Toggle-->
								<!--begin::Dropdown-->

								<!--end::Dropdown-->
							</div>
							<!--end::Tablet & Mobile Search-->
							<!--begin::Nama-->
							<div class="dropdown">
								<!--begin::Toggle-->
								<div class="topbar-item mr-4" data-toggle="dropdown" data-offset="10px,0px">
									<div class="btn btn-icon btn-light-primary mr-2">
										<i class="flaticon2-user"></i>
									</div>
									<!-- <div class="btn font-weight-bolder btn-sm btn-light-success px-5"><?php echo e(Auth::user()->name); ?></div> -->
								</div>
								<!--end::Toggle-->
								<!--begin::Dropdown-->
								<div
									class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-md">
									<!--begin::Navigation-->
									<ul class="navi navi-hover py-5">
										<li class="navi-item">
											<a href="<?php echo e(url('/dashboard')); ?>" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon-users"></i>
												</span>
												<span class="navi-text">Dasbor Maharu</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="<?php echo e(route('logout')); ?>" class="navi-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
												<span class="navi-icon">
													<i class="flaticon-logout"></i>
												</span>
												<span class="navi-text">Keluar</span>
												<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
													class="d-none">
													<?php echo csrf_field(); ?>
												</form>
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
				<!--begin::Content-->
				<?php echo $__env->yieldContent('content'); ?>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
					<!-- style="position: absolute;bottom: 0;width: 100%; z-index:100;" -->
					<!--begin::Container-->
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted font-weight-bold mr-2">2023©</span>
							<span class="text-dark-75 text-hover-primary">Information Technology Department</span>
							<!-- <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Information Technology Department</a> -->
						</div>
						<!--end::Copyright-->
						<!--begin::Nav-->
						<div class="nav nav-dark order-1 order-md-2">
							<span class="text-dark-75 text-hover-primary">MOB FT 2023</span>
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
	</div>
	<script>
		var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
	</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1200
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#6993FF",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#F3F6F9",
						"dark": "#212121"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#E1E9FF",
						"secondary": "#ECF0F3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#212121",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#ECF0F3",
					"gray-300": "#E5EAEE",
					"gray-400": "#D6D6E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#80808F",
					"gray-700": "#464E5F",
					"gray-800": "#1B283F",
					"gray-900": "#212121"
				}
			},
			"font-family": "Poppins"
		};
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="<?php echo e(asset('admin/plugins/global/plugins.bundle.js')); ?>"></script>
	<script src="<?php echo e(asset('admin/plugins/custom/prismjs/prismjs.bundle.js')); ?>"></script>
	<script src="<?php echo e(asset('admin/js/scripts.bundle.js')); ?>"></script>
	<!--end::Global Theme Bundle-->
	<?php echo $__env->yieldContent('script'); ?>
</body>
<!--end::Body-->

</html><?php /**PATH C:\Users\nicov\Documents\GitHub\Web-Utama-MOB-FT-2023\resources\views/layouts/admin.blade.php ENDPATH**/ ?>