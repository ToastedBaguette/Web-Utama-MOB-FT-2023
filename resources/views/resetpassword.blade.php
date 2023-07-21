@extends('layouts.appwebsite')

@section('header')
<header class="main-header main-header-overlay" style='position: fixed; background-color:transparent;'>

    <div class="mainbar-wrap">
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="row mainbar-row align-items-lg-stretch px-4">
                    <div class="col">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/dashboard" rel="home">
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
                                <li>
                                    <a href="{{ url('/') }}">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
                                            <span class="link-ext"></span>
                                            <span class="txt text-white">
                                                < Halaman Awal</span>
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
                                <li>
                                    <a href="{{ url('rectorcup') }}">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
                                            <span class="link-ext"></span>
                                            <span class="txt text-white">Rector Cup</span>
                                        </span>
                                    </a>
                                </li>


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
                                @if (Auth::user()->status == 'maharu')
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
                                            <span class="link-ext"></span>
                                            <span class="txt text-white">
                                                {{ Auth::user()->name}}
                                                <span class="submenu-expander">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-chevron-down"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
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
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @elseif (Auth::user()->status == 'panitia')
                                <li>
                                    <a href="{{ url('/homeadmin') }}">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
                                            <span class="link-ext"></span>
                                            <span class="txt text-white">Halaman Admin</span>
                                        </span>
                                    </a>
                                </li>
                                @endif
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
<main id="content" class="content bg-cover" style="background-image: url('./img/login.png');">
    <section class="vc_row mt-200 mb-200 d-flex flex-wrap align-items-center ">
        <div class="container">
            <div class="row">

                <div class="lqd-column col-md-12 px-4 pt-45 pb-20">

                    <div class="row d-flex flex-wrap align-items-center">

                        <div class="lqd-column col-md-6 col-md-offset-1">

                            <header class="fancy-title">
                                <h2 style="color: #fff">Ganti Kata Sandi</h2>
                                <p>Silahkan masukkan password baru</p>
                            </header><!-- /.fancy-title -->

                        </div><!-- /.lqd-column col-md-6 col-md-offset-1 -->

                        <div class="lqd-column col-md-4 hidden-sm hidden-xs text-right">


                        </div><!-- /.lqd-column col-md-4 hidden-sm hidden-xs -->

                    </div><!-- /.row -->

                    <div class="row">

                        <div class="lqd-column col-md-10 col-md-offset-1">

                            <div class="contact-form contact-form-inputs-underlined contact-form-button-circle">

                                <!-- form -->
                                <form method="POST" action="{{ route('resetpassword') }}">
                                    <iframe style="display: none" id="rfFrame" name="rfFrame"
                                        src="about:blank"></iframe>
                                    @csrf

                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror text-white font-size-24"
                                                name="password" required autocomplete="current-password">
                                            <input type="checkbox" onclick="showPassword()"> Tampilkan Kata Sandi
                                            <h6 id="hint" class="text-glow2" style="display:none;">*Tekan sekali lagi
                                                untuk ganti</h6>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button id="gnti_pw" data-href="{{url('/dashboard')}}" type="submit"
                                                class="btn btn-sm circle btn-solid font-size-14 ltr-sp-025 px-2 lh-15 mt-5 font-weight-semibold">
                                                <span class="btn-gradient-bg"></span>
                                                <span class="btn-txt">Konfirmasi</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <div class="contact-form-result hidden"></div><!-- /.contact-form-result -->
                            </div><!-- /.contact-form -->

                        </div><!-- /.col-md-10 col-md-offset-1 -->

                    </div><!-- /.row -->

                </div><!-- /.lqd-column col-md-12 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
</main><!-- /#content.content -->

<script>
    $(document).ready(function() {
    var helper = 0;
  $("#gnti_pw").click(function(){
    $("#hint").css("display", "block");
    if(helper == 1){
        location.reload();
    }
    helper = 1;
  });
});

function showPassword(){
    var pw = document.getElementById("password");
    if (pw.type === "password"){
        pw.type = "text";
    } else {
        pw.type = "password";
    }
}


</script>

@endsection