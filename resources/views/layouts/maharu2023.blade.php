<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>MOB FT 2023</title>
    <link rel="shortcut icon" href="{{ url('./img/mob.png') }}">
    <link rel="stylesheet" href="{{ url('./assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('./assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('./assets/css/colors/sky.css') }}">
    <link rel="preload" href="{{ url('./assets/css/fonts/urbanist.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom.css') }}">

    @yield('css')
    <style>
        .logout {
            display: none;
        }

        @media only screen and (max-width: 768px) {
            .logout {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        {{-- NAVBAR --}}
        <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg classic transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a class="main-font fs-24" href="{{ route('home') }}">MOB FT 2023</a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link secondary-font" href="{{ route('welcome') }}">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link secondary-font" href="{{ route('ormawa') }}">Ormawa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link secondary-font" href="{{ route('profile') }}">Ubah Profil</a>
                                </li>
                                <li class="logout">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="text-danger secondary-font">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a class="link-inverse">© Information Technology Department MOB FT 2023. </a>
                                    <nav class="nav social social-white mt-4">
                                        {{-- <a href="https://linktr.ee/MOBFT2022" target="_blank"><i
												class="uil uil-link-alt"></i></a> --}}
                                        <a href="https://www.instagram.com/mobftubaya/" target="_blank"><i
                                                class="uil uil-instagram"></i></a>
                                        <a href="https://www.youtube.com/channel/UCvXk_6SkGs3TEkvAMdsgzHw"
                                            target="_blank"><i class="uil uil-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other ms-lg-4">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-none d-md-block">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-sm secondary-font btn-danger rounded text-white pt-3" style="background-color: rgb(252, 56, 56)">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>

        @yield('content')

        <div class="overflow-hidden">
            <div class="divider text-navy mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                    <path fill="currentColor"
                        d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
                </svg>
            </div>
        </div>

    </div>
    {{-- FOOTER --}}
    <footer class="bg-footer text-inverse">
        <div class="container pt-12 pt-lg-6 pb-13 pb-md-15">
            <hr class="mt-3 mb-12" />
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <a class="main-font fs-24">MOB-FT 2023</a>
                        <p class="mb-4" style="color: white">© Information Technology Department MOB FT 2023. <br
                                class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                            {{-- <a href="https://linktr.ee/MOBFT2022" target="_blank"><i class="uil uil-link-alt"></i></a> --}}
                            <a href="https://www.instagram.com/mobftubaya/" target="_blank"><i
                                    class="uil uil-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCvXk_6SkGs3TEkvAMdsgzHw" target="_blank"><i
                                    class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">

                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <figure data-responsive-bg="true">
                        <img src="{{ url('./img/logoubaya.png') }}" alt="Minimalism" />
                    </figure>
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <figure data-responsive-bg="true" class="mt-2">
                        <img src="{{ url('./img/logobem.png') }}" alt="Minimalism" />
                    </figure>
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>

    {{-- PROGRESS ARROW --}}
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <script src="{{ url('./assets/js/plugins.js') }}"></script>
    <script src="{{ url('./assets/js/theme.js') }}"></script>
    @yield('script')
</body>

</html>
