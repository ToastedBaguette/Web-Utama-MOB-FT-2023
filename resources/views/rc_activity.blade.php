@extends('layouts.appwebsite')

@section('header')
<header id="navbar" class="main-header main-header-overlay" style='position: fixed; background-color:transparent;'>

    <div class="mainbar-wrap">
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="row mainbar-row align-items-lg-stretch px-4">
                    <div class="col pr-5">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/dashboard') }}" rel="home">
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
                                    <a href="#!">
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
<main class="content" style="background-image: url('./img/bg5.png');">
    <!-- Aktivitas RC -->
    <section class="vc_row pt-100 pb-60 mt-30">
        <div class="container">
            <header class="fancy-title text-center">
                <h2 class="my-0 text-glow">Aktivitas Rector Cup</h2>
                <br>
                <p class="my-0 text-white">Silahkan masukkan 6 kode huruf yang sudah dikumpulkan sesuai urutan
                    mendapatkannya</p>
            </header><!-- /.fancy-title -->

            <div class="row transparent-card py-3 mx-3">
                <div class="lqd-column col-md-4 col-md-offset-4">
                    @if (session('status'))
                    <div class="text-center "
                        style="color:#4B8B3B; background-color: #D2E7D6; padding: 1rem; border-radius: 0.5rem">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="text-center"
                        style="color:#F70000; background-color: #FFE4E2; padding: 1rem; border-radius: 0.5rem">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if(Auth::user()->status == 'maharu')
                    <form action="{{route('tebaksandi')}}" method="POST"
                        class="contact-form contact-form-inputs-underlined contact-form-button-circle">
                        @csrf
                        <div class="row mb-3">
                            <div class="lqd-column col-md-12">
                                <input type="text" id="katasandi" name="katasandi" class="text-white text-center"
                                    placeholder="Ketik Kode di sini"
                                    style="border: 0; outline: 0; background: transparent; border-bottom: 1px solid white; border-radius: 0;">
                            </div><!-- /.col-md-12 -->
                            <div class="lqd-column col-md-12 text-center">
                                <input type="submit" id="submit" name="submit" class="mx-auto" value="OK">
                            </div><!-- /.col-md-12 -->
                        </div>
                    </form>
                    @endif

                    <div class="wrapper">
                        @foreach($list as $l)
                        <div class="box">
                            @if($l->status_tebak == 1)
                            <img src="img/rc_activity/{{$l->image}}" alt="" style="width:100%">
                            @else
                            <div class="box text-center">{{$l->beta}}</div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Aktivitas RC -->
</main>
@endsection