@extends('layouts.appwebsite')

@section('header')
<header id="navbar" class="main-header main-header-overlay" style='position: fixed; background-color:transparent;'>

    <div class="mainbar-wrap">
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="row mainbar-row align-items-lg-stretch px-4">

                    <div class="col">
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
                                <li class="is-active">
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
<main class="content bg-cover" style="background-image: url('./img/bg5.png');">
    <!-- Hi Maharu -->
    <section id="content" class="vc_row py-5 mb-60 fullheight d-flex flex-wrap align-items-center"
        style="background-color: transparent;">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-lg-7 col-md-8" data-custom-animations="true"
                    data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                    <div class="ld-fancy-heading">
                        <h2 class="h1 text-white" data-fittext="true"
                            data-fittext-options='{"compressor":0.5,"maxFontSize":"currentFontSize","minFontSize":"35"}'
                            data-split-text="true" data-split-options='{"type":"lines"}'>
                            <span class="ld-fh-txt text-glow2"> Hi, {{Auth::user()->name}}</span>
                        </h2>
                    </div><!-- /.ld-fancy-heading -->
                    <a href="#modalPresensi"
                        class="btn btn-sm circle btn-solid font-size-14 ltr-sp-025 px-2 lh-15 mt-5 font-weight-semibold"
                        data-lity="#modalPresensi">
                        <span>
                            <span class="btn-gradient-bg"></span>
                            <span class="btn-txt">Presensi</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xml:space="preserve" class="btn-gradient-border" width="100%" height="100%">
                                <defs>
                                    <linearGradient id="svg-border-5c77b6395a8f2" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%"></stop>
                                        <stop offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <rect x="0.5" y="0.5" rx="24" ry="24" width="100%" height="100%"
                                    stroke="url(#svg-border-5c77b6395a8f2)"></rect>
                            </svg>
                        </span>
                    </a>
                </div><!-- /.lqd-column -->
                <div class="scroll-down" id="tandascroll"></div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Hi Maharu -->
    <!-- Pengumuman -->
    <section id="pengumuman" class="vc_row pt-100 pb-50 bg-cover" data-custom-animations="true"
        data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-6 col-md-offset-3">
                    <header class="fancy-heading text-center mb-4">
                        <h2 style="margin-bottom: 100px;" class="font-size-40 my-0 text-glow">Pengumuman</h2>
                        <br>
                    </header>
                </div><!-- /.lqd-column col-md-6 col-md-offset-3 -->
                <div class="lqd-column col-md-12 mb-50">
                    <div class="lqd-column-inner transparent-card px-5 px-md-7 pt-5 pb-3">
                        <div
                            class="carousel-container carousel-nav-floated carousel-nav-center carousel-nav-middle carousel-nav-md carousel-dots-style1">
                            <div class="carousel-items row"
                                data-lqd-flickity='{"cellAlign":"center","prevNextButtons":true,"buttonsAppendTo":"self","pageDots":false,"groupCells":true,"pauseAutoPlayOnHover":false,"navArrow":"1","navOffsets":{"nav":{"top":"42%"}}}'>
                                @foreach($pengumuman as $p)
                                <div class="carousel-item col-xs-12 px-md-7">
                                    <!-- <h3 class="font-size-40 text-glow text-center">Pengumuman</h3> -->
                                    <blockquote class="px-md-5">
                                        <p class="text-justify text-white">
                                            <?php
                                            echo $p->isi;
                                        ?>
                                        </p>
                                    </blockquote>
                                </div><!-- /.carousel-item col-xs-12 -->
                                @endforeach
                            </div><!-- /.carousel-items row -->
                        </div><!-- /.carousel-container -->
                    </div><!-- /.lqd-column-inner -->
                </div><!-- /.lqd-column col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Pengumuman -->

    <!-- Acara yang sedang berjalan -->
    <section id="acara" class="vc_row pt-100 pb-110" data-custom-animations="true"
        data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-6 col-md-offset-3">
                    <header class="fancy-heading text-center mb-4">
                        <h2 class="font-size-40 my-0" style="color: #4fda91; text-shadow: 2px 0px 20px #70E8C6">Kegiatan
                            Saat Ini</h2>
                    </header>
                    <br>
                </div><!-- /.lqd-column col-md-6 col-md-offset-3 -->
            </div>
            <div class="row">
                <div class="lqd-column col-md-8 col-md-offset-2">
                    <div class='pricing-table transparent-card pricing-table-minimal' style="padding: 45px 50px 50px">
                        <div class='pricing-table-body'>
                            <?php
                                use Carbon\Carbon;
                                $now = date('H:i:s',strtotime(Carbon::now()));
                                $ada_jadwal = 'false';
                                foreach ($jadwal as $j){
                                    if(($now>= $j->waktu_awal) && ($now<= $j->waktu_akhir)){
                                        $rd_awal = date('H:i',strtotime($j->waktu_awal));
                                        $rd_akhir = date('H:i',strtotime($j->waktu_akhir));
                                        $ada_jadwal = 'true';
                                        echo " <h2>
                                                ".$j->kegiatan."
                                                </h2>
                                                <p class='font-size-17 lh-175'>".$rd_awal." - ".$rd_akhir."</p>";
                                        if($j->content != null){
                                            if($j->media == "youtube"){
                                                echo "<div class='lqd-column col-md-12'>
                                                <h4 class='text-center'>Video</h4>
                                                <iframe width='560' height='315' src='".$j->content."' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                                </div>";
                                            }
                                            else if($j->media == "form"){
                                                echo "<div class='lqd-column col-md-12'>
                                                <iframe width='560' height='315' src='".$j->content."' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                                </div>";
                                            }
                                            echo "<div class='pricing-table-footer'>
                                                <a target='_blank' href='".$j->content."' class='btn btn-md btn-solid round lh-15 wide px-2' style='border-radius: 3rem;'>
                                                    <span>
                                                        <span class='btn-txt'>Pergi Ke Link</span>
                                                    </span>
                                                </a>
                                            </div>";
                                        }
                                    }
                                }
                                if($ada_jadwal == 'false'){
                                    echo "<img src='./img/kosong.png' alt='Kosong' style='width: 50%; height: 50%'>";
                                    echo "<h4>Belum ada kegiatan untuk saat ini</h4>";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="lqd-column col-md-2">
                        <!-- Emang kosongan biar bisa ditengah -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
    </section>
    <!-- End Acara yang sedang berjalan -->

    <!-- Jadwal MOB -->
    <section id="jadwal" class="vc_row pt-90 pb-90" data-parallax="true" data-parallax-options='{"parallaxBG":true}'>
        <div class="container">
            <div class="row">

                <div class="lqd-column col-md-6 col-md-offset-3 px-md-5 mb-60">
                    <header class="fancy-heading text-center">
                        <h2 class="mt-0 font-size-44" style="color: #4fda91; text-shadow: 2px 0px 20px #70E8C6">Jadwal
                            MOB FT 2021</h2>
                        <p class="font-size-17 lh-175 text-glow2">
                            @if ((\Carbon\Carbon::now()) < (\Carbon\Carbon::parse('July 30 2021')))
                                @elseif((\Carbon\Carbon::now()) < (\Carbon\Carbon::parse('July 31 2021'))) MOB FT 2021
                                Hari Pertama @elseif((\Carbon\Carbon::now()) < (\Carbon\Carbon::parse('August 01
                                2021'))) MOB FT 2021 Hari Kedua @elseif((\Carbon\Carbon::now()) <
                                (\Carbon\Carbon::parse('August 03 2021'))) MOB FT 2021 Hari Ketiga
                                @elseif((\Carbon\Carbon::now()) < (\Carbon\Carbon::parse('August 04 2021'))) MOB FT 2021
                                Hari Keempat @elseif((\Carbon\Carbon::now()) < (\Carbon\Carbon::parse('August 05
                                2021'))) Rector Cup Hari Pertama @elseif((\Carbon\Carbon::now()) <
                                (\Carbon\Carbon::parse('August 06 2021'))) Rector Cup Hari Kedua
                                @elseif((\Carbon\Carbon::now()) < (\Carbon\Carbon::parse('August 07 2021'))) Rector Cup
                                Hari Ketiga dan Hari Apreasi Seni @endif </p>
                    </header><!-- /.fancy-heading -->
                </div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

                <div class="lqd-column col-md-10 col-md-offset-1">

                    <div class="one-roadmap" data-custom-animations="true"
                        data-ca-options='{"triggerHandler": "inview", "animationTarget": ".one-roadmap-item", "duration": 1200, "delay": 150, "easing": "easeOutQuint", "initValues": { "translateY": 50, "translateZ": -150, "rotateX": -95, "opacity": 0 }, "animations": { "translateY": 0, "translateZ": 0, "rotateX": 0, "opacity": 1 }}'>

                        <div class="one-roadmap-inner">

                            @foreach($jadwal as $j)
                            <?php
                                 $now = date('H:i:s',strtotime(Carbon::now()));
                                 if($now > $j->waktu_akhir){
                                    echo "<div class='one-roadmap-item one-roadmap-item-checked text-white'>";
                                 }
                                 else {
                                    echo "<div class='one-roadmap-item text-white'>";
                                 }
                            ?>

                            <span class="one-roadmap-bar"></span>

                            <div class="one-roadmap-info">
                                <h6>
                                    <?php echo date('d M Y',strtotime($j->tanggal))."<br>".date('H:i',strtotime($j->waktu_awal))." - ".date('H:i',strtotime($j->waktu_akhir)); ?>
                                    WIB
                                </h6>
                                <p>{{$j-> kegiatan}}</p>
                            </div><!-- /.one-roadmap-info -->

                            <?php
                                    $now = date('H:i:s',strtotime(Carbon::now()));
                                    if($now > $j->waktu_akhir){
                                        echo " <span class='one-roadmap-mark'>
                                        <i>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#fff' class='bi bi-check-lg' viewBox='0 0 16 16'>
                                                <path d='M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z'/>
                                            </svg>
                                        </i>
                                    </span>";
                                    }
                                    else{
                                        echo "<span class='one-roadmap-mark'></span>";
                                    }
                                ?>
                        </div><!-- /.one-roadmap-item -->
                        @endforeach

                    </div><!-- /.one-roadmap-inner -->

                </div><!-- /.one-roadmap -->

            </div><!-- /.lqd-column col-md-10 -->

        </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Jadwal MOB -->

    <!-- Modal Presensi -->
    <div id="modalPresensi" class="lqd-modal lity-hide col-md-12 justify-content-center">
        <div class="lqd-modal-inner">

            <div class="lqd-modal-head">
                <header class="fancy-heading text-center">
                    <h2>Presensi</h2>
                </header>
            </div><!-- /.lqd-modal-head -->

            <div class="lqd-modal-content">

                <div class="row">
                    <div class="col-md-12 text-center">
                        @if(($p_awal != '') && ($p_akhir != ''))
                        <div class="row">
                            <div class="lqd-column col-md-8 col-md-offset-2">
                                @if($status == 'belum')
                                <p style="color: darkgray" id="presensi_text">Apakah kamu yakin melakukan presensi pada
                                    Jam
                                    <?php echo date('H:i',strtotime($p_awal)); ?> WIB hingga
                                    <?php echo date('H:i',strtotime($p_akhir)); ?> WIB?
                                </p>
                                @endif
                            </div><!-- /.col-md-8 col-md-offset-2 -->
                        </div><!-- /.row -->
                        @endif

                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->

            </div><!-- /.lqd-modal-content -->
            <div class="lqd-modal-foot">
                <div class="col-md-12 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000"
                        class="bi bi-x-lg lity-close" viewBox="0 0 16 16" data-lity-close>
                        <path
                            d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                    </svg>
                    @if ($presensi == 'false')
                    <div class="row">
                        <div class="lqd-column col-md-8 col-md-offset-2">
                            <svg id="f4dfef0e-e963-4752-8b60-16883a06d9db" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" width="250" height="250"
                                viewBox="0 0 1080.0487 748.00219">
                                <path
                                    d="M832.20759,587.46822c0,67.693-40.24241,91.32887-89.88394,91.32887s-89.88394-23.63587-89.88394-91.32887,89.88394-153.80916,89.88394-153.80916S832.20759,519.77523,832.20759,587.46822Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#209c8c" />
                                <polygon
                                    points="679.994 535.79 718.305 465.702 680.138 526.903 680.552 501.43 706.956 450.722 680.662 494.688 681.406 448.873 709.68 408.504 681.523 441.669 681.988 357.66 679.191 464.109 650.56 420.284 678.845 473.092 676.166 524.259 676.087 522.901 642.948 476.597 675.986 527.699 675.651 534.098 675.591 534.195 675.619 534.72 668.823 603 677.902 603 678.992 597.484 711.949 546.507 679.074 592.443 679.994 535.79"
                                    fill="#3f3d56" />
                                <path
                                    d="M1140.02435,369.81269c0,129.31047-76.873,174.46085-171.7007,174.46085s-171.7007-45.15038-171.7007-174.46085S968.32365,75.99891,968.32365,75.99891,1140.02435,240.50222,1140.02435,369.81269Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#f2f2f2" />
                                <polygon
                                    points="902.093 448.494 903.851 340.273 977.035 206.388 904.127 323.296 904.918 274.635 955.355 177.771 905.127 261.758 905.127 261.759 906.549 174.24 960.558 97.124 906.772 160.478 907.661 0 902.078 212.444 902.537 203.68 847.625 119.628 901.656 220.503 896.54 318.246 896.387 315.652 833.084 227.2 896.196 324.817 895.556 337.041 895.441 337.225 895.494 338.228 882.513 586.21 899.856 586.21 901.937 458.123 964.894 360.745 902.093 448.494"
                                    fill="#3f3d56" />
                                <path
                                    d="M1132.97565,640.5574c0,38.59549-250.36912,183.44369-543.05156,183.44369S59.97565,749.0362,59.97565,710.44071s231.44239,7.27952,524.12483,7.27952S1132.97565,601.96192,1132.97565,640.5574Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#3f3d56" />
                                <path
                                    d="M1132.97565,640.5574c0,38.59549-250.36912,183.44369-543.05156,183.44369S59.97565,749.0362,59.97565,710.44071s231.44239,7.27952,524.12483,7.27952S1132.97565,601.96192,1132.97565,640.5574Z"
                                    transform="translate(-59.97565 -75.99891)" opacity="0.1" />
                                <path
                                    d="M1132.97565,640.5574c0,38.59549-250.36912,139.76663-543.05156,139.76663S59.97565,749.0362,59.97565,710.44071,291.418,674.04316,584.10048,674.04316,1132.97565,601.96192,1132.97565,640.5574Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#3f3d56" />
                                <ellipse cx="535.87833" cy="641.77394" rx="225.04403" ry="17.40672" opacity="0.1" />
                                <path d="M417.57367,368.96457s65.88345,1.22006,53.68281,12.81067-57.953,0-57.953,0Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#a0616a" />
                                <path
                                    d="M280.30415,228.18183s26.60021-4.75031,35.84921,16.72359,28.244,82.71589,28.244,82.71589,50.83308,33.64785,60.079,32.54232,25.05178,1.15023,22.15247,11.2372-1.6122,21.52484-8.28694,22.92668-17.29058-11.97954-25.415-5.53421-80.53015-17.09648-85.17856-21.97431-43.27878-110.50134-43.27878-110.50134S266.01479,227.83769,280.30415,228.18183Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#209c8c" />
                                <polygon
                                    points="277.379 605.607 280.429 631.228 254.808 637.939 240.167 631.228 240.167 608.657 277.379 605.607"
                                    fill="#a0616a" />
                                <polygon
                                    points="208.445 622.078 211.495 647.699 185.874 654.41 171.233 647.699 171.233 625.128 208.445 622.078"
                                    fill="#a0616a" />
                                <path
                                    d="M339.7946,401.60128l11.59061,42.0922L368.4661,529.098s4.88026,20.74108-4.88025,45.75239S336.13441,681.60593,339.7946,686.48618s-41.48217,8.54045-40.87214,3.66019,6.71036-71.98376,6.71036-71.98376,8.54044-59.1731,12.81067-66.49348-19.521-25.62134-19.521-25.62134-6.10031,70.15367-15.25079,76.254S275.74125,702.957,271.471,704.17711s-35.38185,6.10032-39.042,0,0-107.97565,0-107.97565,20.74108-77.47406,16.47086-88.45463-1.8301-57.953-1.8301-57.953-15.86083-35.99189-7.32038-54.90287Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#2f2e41" />
                                <path
                                    d="M337.96451,167.349s-25.62134,31.72166-24.40128,45.75239-40.26211-25.62134-40.26211-25.62134,29.89157-40.2621,29.89157-48.80255S337.96451,167.349,337.96451,167.349Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#a0616a" />
                                <circle cx="277.68384" cy="62.98363" r="40.26211" fill="#a0616a" />
                                <path
                                    d="M236.19284,378.78c-1.824,6.79577-4.08719,14.50047-3.76385,20.99122.20746,4.20313,11.36489,6.96045,26.79255,8.76616,14.30529,1.67758,32.283,2.53161,48.62569,2.97085,17.16021.46363,32.50245.46363,39.87779.46363,21.96115,0,4.27022-14.03074-4.27023-20.74109s-6.71035-101.87533-6.10031-114.076-5.49029-47.58249-5.49029-54.29285-14.35407-24.22438-14.35407-24.22438-3.33686,9.58362-16.75756-3.227-31.11163-16.47086-31.11163-16.47086c-13.4207,4.88025-35.99188,58.56306-37.21194,67.71354-.49417,3.71507-.08542,22.742.74422,44.46523,1.20174,31.75216,3.30029,69.2874,4.74606,73.27093C239.06,367.531,237.7973,372.80166,236.19284,378.78Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#209c8c" />
                                <polygon
                                    points="241.387 338.413 245.657 353.664 229.186 370.745 223.696 346.953 241.387 338.413"
                                    fill="#a0616a" />
                                <path
                                    d="M306.85288,700.51692s12.81067,14.64076,22.57118,4.88025,9.15048-15.86083,10.98058-15.86083,29.28153,24.40128,29.28153,24.40128,46.97245,10.98057,21.35111,18.911-98.21513,2.44013-98.21513,0-1.8301-34.77182,4.88025-34.77182Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#2f2e41" />
                                <path
                                    d="M237.91927,716.98778s12.81067,14.64076,22.57118,4.88025,9.15048-15.86083,10.98058-15.86083,29.28153,24.40128,29.28153,24.40128,46.97246,10.98057,21.35112,18.911-98.21514,2.44013-98.21514,0-1.8301-34.77182,4.88025-34.77182Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#2f2e41" />
                                <path
                                    d="M292.45633,171.12178c-1.30065.84028-2.99385,1.69175-4.29617.85407a194.661,194.661,0,0,1-10.803-37.40333c-.82225-4.49515-1.393-9.49233,1.10424-13.3194.9849-1.50939,2.40274-2.74371,3.12416-4.39532,1.09254-2.50124.37345-5.39643.73641-8.10163.76042-5.66737,6.11775-9.62022,11.505-11.5373s11.23835-2.51176,16.37345-5.02733c4.87591-2.38861,8.78111-6.35,13.3025-9.35611s10.31287-5.0615,15.34812-3.03018c4.45436,1.797,7.229,6.33734,11.43921,8.64913,2.8571,1.5688,6.17272,2.00534,9.36187,2.67875a59.9218,59.9218,0,0,1,24.33972,11.30812,17.67252,17.67252,0,0,1,4.42964,4.56639c5.40289,8.8953-4.27062,20.98885-.00283,30.48113l-9.22662-7.28052a32.13074,32.13074,0,0,0-8.24035-5.237c-3.05623-1.15765-6.67559-1.29745-9.45179.42692-3.89609,2.42-4.95269,7.47582-6.3137,11.8557s-4.3705,9.23676-8.95561,9.12455c-6.23545-.15259-8.41611-8.85468-14.012-11.60979-3.6479-1.796-8.23962-.61324-11.34953,2.00618-3.10968,2.61923-4.97572,6.41973-6.34429,10.24826-.85526,2.39254-1.65774,5.08957-3.1768,7.16346-1.6754,2.28735-3.81829,2.47136-5.60773,4.17946C301.08225,162.81226,298.21838,167.39921,292.45633,171.12178Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#2f2e41" />
                                <path
                                    d="M236.19284,378.78c7.58272,10.99889,16.12928,22.34547,23.0287,29.75738,14.30529,1.67758,32.283,2.53161,48.62569,2.97085a38.52679,38.52679,0,0,0-10.75486-9.90691C289.162,396.721,270.251,338.768,270.251,338.768s23.18122-59.78313,29.28154-82.35431-17.69093-35.38185-17.69093-35.38185C270.861,211.88135,251.95,233.23247,251.95,233.23247s-9.65075,29.1107-18.7768,57.88593c1.20174,31.75216,3.30029,69.2874,4.74606,73.27093C239.06,367.531,237.7973,372.80166,236.19284,378.78Z"
                                    transform="translate(-59.97565 -75.99891)" opacity="0.1" />
                                <path
                                    d="M280.01148,216.15157s23.79124,12.81067,17.69092,35.38185-29.28153,82.35431-29.28153,82.35431,18.911,57.953,26.8414,62.83329,18.911,16.47086,10.37055,22.57118-14.64077,15.86083-20.74109,12.81067-6.10032-20.13105-16.47086-20.13105-52.46275-63.44332-53.07278-70.15367,34.77182-113.46594,34.77182-113.46594S269.0309,207.00109,280.01148,216.15157Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#209c8c" />
                                <path
                                    d="M774.7215,382.89095l-6.8628-6.86279a21.34485,21.34485,0,0,0-30.18617,0L604.55734,509.14335,471.44215,376.02816a21.34485,21.34485,0,0,0-30.18617,0l-6.86279,6.86279a21.34484,21.34484,0,0,0,0,30.18618L567.50837,546.19232,434.39319,679.3075a21.34484,21.34484,0,0,0,0,30.18618l6.86279,6.86279a21.34485,21.34485,0,0,0,30.18617,0L604.55734,583.24128,737.67253,716.35647a21.34485,21.34485,0,0,0,30.18617,0l6.8628-6.86279a21.34486,21.34486,0,0,0,0-30.18618L641.60631,546.19232,774.7215,413.07713A21.34486,21.34486,0,0,0,774.7215,382.89095Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#ff6584" />
                                <path
                                    d="M429.6427,686.54463,558.80505,557.38235l-1.24334-1.24334L434.39317,679.30748A21.2598,21.2598,0,0,0,429.6427,686.54463Z"
                                    transform="translate(-59.97565 -75.99891)" opacity="0.1" />
                                <path
                                    d="M432.5526,387.21818a21.34488,21.34488,0,0,1,30.18621,0L595.854,520.33335,728.96915,387.21818a21.34488,21.34488,0,0,1,30.18621,0l6.86279,6.86279a21.34354,21.34354,0,0,1,4.75047,22.949l3.95289-3.95289a21.34479,21.34479,0,0,0,0-30.18614l-6.86279-6.86279a21.3449,21.3449,0,0,0-30.18621,0L604.55734,509.14331,471.44217,376.02814a21.3449,21.3449,0,0,0-30.18621,0l-6.86279,6.86279a21.2598,21.2598,0,0,0-4.75047,7.23715Z"
                                    transform="translate(-59.97565 -75.99891)" opacity="0.1" />
                                <path
                                    d="M642.84968,547.43565l-9.94669,9.9467L766.01815,690.49752a21.34356,21.34356,0,0,1,4.75047,22.94907l3.95289-3.953a21.34479,21.34479,0,0,0,0-30.18614Z"
                                    transform="translate(-59.97565 -75.99891)" opacity="0.1" />
                                <path
                                    d="M214.97565,636.19129c0,56.22159-33.42284,75.85206-74.652,75.85206s-74.652-19.63047-74.652-75.85206,74.652-127.7443,74.652-127.7443S214.97565,579.96971,214.97565,636.19129Z"
                                    transform="translate(-59.97565 -75.99891)" fill="#209c8c" />
                                <polygon
                                    points="78.393 580.392 110.212 522.181 78.513 573.011 78.857 551.854 100.786 509.739 78.948 546.255 79.566 508.204 103.048 474.675 79.663 502.221 80.049 432.448 77.726 520.858 53.947 484.46 77.438 528.318 75.214 570.815 75.148 569.687 47.625 531.23 75.064 573.672 74.786 578.987 74.736 579.067 74.759 579.503 69.115 636.212 76.656 636.212 77.561 631.631 104.933 589.293 77.629 627.444 78.393 580.392"
                                    fill="#3f3d56" />
                            </svg>
                            <h4>Maaf presensi sudah tutup,<br>jangan telat lagi di absen berikutnya</h4>
                        </div><!-- /.col-md-8 col-md-offset-2 -->
                    </div><!-- /.row -->
                    @else
                    @if ($status == 'belum')
                    <div id="sudah_presensi">
                        <a href="#modalInfoPresensi" id="presensi-sekarang"
                            class="btn btn-solid btn-bordered border-thin circle font-size-12 lh-15 font-weight-bold ltr-sp-05 mb-2"
                            data-lity="#modalInfoPresensi">
                            <input type="hidden" id="presensi-sekarang2" name="" value="{{$jam_presensi}}">
                            <span>
                                <span class="btn-txt">Presensi Sekarang</span>
                            </span>
                        </a>
                    </div>
                    @else
                    <div class="row">
                        <div class="lqd-column col-md-8 col-md-offset-2">
                            <svg id="a65bca02-317b-4705-84dd-2a5586816ee4" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" width="250" height="250"
                                viewBox="0 0 680.83858 584.23207">
                                <path id="b9ccae5a-ffdd-4f5c-9c1e-05af9f0f3372" data-name="Path 438"
                                    d="M310.70569,694.02818a24.21459,24.21459,0,0,0,23.38269-4.11877c8.18977-6.87441,10.758-18.196,12.8467-28.68191l6.17973-31.01657-12.9377,8.90837c-9.30465,6.40641-18.81826,13.01866-25.26011,22.29785s-9.25223,21.94707-4.07792,31.988"
                                    transform="translate(-259.58071 -157.88396)" fill="#e6e6e6" />
                                <path id="f4ad1d06-bd03-4ced-a5c4-c19a65ab4ee5" data-name="Path 439"
                                    d="M312.7034,733.73874c-1.62839-11.86368-3.30382-23.88078-2.15884-35.87167,1.01467-10.64932,4.26373-21.04881,10.87831-29.57938a49.20592,49.20592,0,0,1,12.62466-11.44039c1.26215-.79648,2.42409,1.20354,1.16733,1.997a46.77949,46.77949,0,0,0-18.50446,22.32562c-4.02857,10.24607-4.67545,21.41582-3.98154,32.3003.41944,6.58218,1.31074,13.1212,2.20588,19.65251a1.19817,1.19817,0,0,1-.808,1.42251,1.16348,1.16348,0,0,1-1.42253-.808Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#f2f2f2" />
                                <path id="baf785f8-b4c6-42cf-85bd-8a16037845f7" data-name="Path 442"
                                    d="M324.42443,714.70229a17.82513,17.82513,0,0,0,15.53141,8.01862c7.8644-.37318,14.41806-5.85973,20.31713-11.07027l17.452-15.4088-11.54987-.55281c-8.30619-.39784-16.82672-.771-24.73813,1.79338s-15.20758,8.72639-16.654,16.91541"
                                    transform="translate(-259.58071 -157.88396)" fill="#e6e6e6" />
                                <path id="a14e4330-7125-4e03-a856-d6453c34f6cc" data-name="Path 443"
                                    d="M308.10042,740.55843c7.83972-13.87142,16.93234-29.28794,33.1808-34.21552a37.02609,37.02609,0,0,1,13.95545-1.441c1.48189.128,1.11179,2.41174-.367,2.28454a34.39833,34.39833,0,0,0-22.27164,5.89215c-6.27994,4.27453-11.16975,10.21755-15.30781,16.51907-2.53511,3.86051-4.80576,7.88445-7.07642,11.903C309.48824,742.78513,307.36641,741.85759,308.10042,740.55843Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#f2f2f2" />
                                <path id="ac20a106-7eb8-4a45-8835-674ef3bf3222" data-name="Path 141"
                                    d="M935.3957,569.31654H503.18092a5.03014,5.03014,0,0,1-5.02359-5.02359V162.90754a5.03017,5.03017,0,0,1,5.02359-5.02358H935.3957a5.03017,5.03017,0,0,1,5.02359,5.02358V564.292a5.02922,5.02922,0,0,1-5.02359,5.02359Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#fff" />
                                <path id="a8878079-c7cd-406f-a434-8b15b914b9b4" data-name="Path 141"
                                    d="M935.3957,569.31654H503.18092a5.03014,5.03014,0,0,1-5.02359-5.02359V162.90754a5.03017,5.03017,0,0,1,5.02359-5.02358H935.3957a5.03017,5.03017,0,0,1,5.02359,5.02358V564.292a5.02922,5.02922,0,0,1-5.02359,5.02359ZM503.18092,159.88944a3.01808,3.01808,0,0,0-3.01152,3.01151V564.292a3.01808,3.01808,0,0,0,3.01152,3.01152H935.3957a3.01717,3.01717,0,0,0,3.01153-3.01152V162.90754a3.01809,3.01809,0,0,0-3.01153-3.01151Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#cacaca" />
                                <path id="af64f961-e9a2-4c53-a333-5060c7f850d2" data-name="Path 142"
                                    d="M707.41023,262.18528a3.41053,3.41053,0,0,0,0,6.82105H894.55305a3.41053,3.41053,0,0,0,0-6.82105Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#e4e4e4" />
                                <path id="baad4cfb-158d-4439-9cc3-22475bf47b22" data-name="Path 143"
                                    d="M707.41023,282.65037a3.41054,3.41054,0,0,0,0,6.82106h95.54019a3.41054,3.41054,0,0,0,0-6.82106Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#e4e4e4" />
                                <path id="f3456279-91e5-49ad-aa43-9838b26fb6ca" data-name="Path 142"
                                    d="M543.84146,392.7046a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#e4e4e4" />
                                <path id="a3288adf-49f8-485f-8ae9-1e4f1a13d849" data-name="Path 143"
                                    d="M543.84146,413.1697a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#e4e4e4" />
                                <path id="e63a5b48-5a7d-40a2-b9b0-6adec326348a" data-name="Path 142"
                                    d="M543.84146,433.17177a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#e4e4e4" />
                                <path id="a1c669b4-dfc3-4cfa-a7be-66b71399844d" data-name="Path 143"
                                    d="M543.84146,453.63687a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#e4e4e4" />
                                <path id="bfec50d1-ffb1-4de6-a9ef-a1085e40e016" data-name="Path 142"
                                    d="M543.84146,474.17177a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#e4e4e4" />
                                <path id="bc9696ec-ec99-41d5-9116-3ad9737a38ac" data-name="Path 143"
                                    d="M543.84146,494.63687a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#e4e4e4" />
                                <path
                                    d="M599.41943,324.82812a49,49,0,1,1,48.99952-49A49.05567,49.05567,0,0,1,599.41943,324.82812Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#209c8c" />
                                <path
                                    d="M450.67833,510.10041a12.24754,12.24754,0,0,0-14.953-11.36231l-16.19641-22.82521-16.27138,6.45945,23.32519,31.91237a12.31392,12.31392,0,0,0,24.09559-4.1843Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#a0616a" />
                                <path
                                    d="M419.11211,508.40888l-49.00774-63.57777L388.46714,387.12c1.34563-14.50936,10.425-18.56089,10.81135-18.72645l.5893-.25281,15.979,42.6119-11.73235,31.28625,28.79671,48.4319Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#3f3d56" />
                                <path
                                    d="M589.30794,312.41993a12.24758,12.24758,0,0,0-10.17219,15.78672l-21.50463,17.91269,7.69816,15.72326,30.01343-25.72272a12.31392,12.31392,0,0,0-6.03477-23.69995Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#a0616a" />
                                <path
                                    d="M590.06206,344.02244l-59.59835,53.77665-58.95815-13.84578c-14.57-.21979-19.31136-8.9587-19.50629-9.33113l-.29761-.568,41.2489-19.22578,32.0997,9.27828,46.06046-32.45509Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#3f3d56" />
                                <polygon
                                    points="227.248 568.437 243.261 568.436 250.878 506.672 227.245 506.673 227.248 568.437"
                                    fill="#a0616a" />
                                <path
                                    d="M483.39733,721.74476h50.32614a0,0,0,0,1,0,0V741.189a0,0,0,0,1,0,0h-36.207a14.11914,14.11914,0,0,1-14.11914-14.11914v-5.32505A0,0,0,0,1,483.39733,721.74476Z"
                                    transform="translate(757.57348 1305.02654) rotate(179.99738)" fill="#2f2e41" />
                                <polygon
                                    points="163.247 568.437 179.26 568.436 186.878 506.672 163.245 506.673 163.247 568.437"
                                    fill="#a0616a" />
                                <path
                                    d="M419.397,721.74476H469.7231a0,0,0,0,1,0,0V741.189a0,0,0,0,1,0,0h-36.207A14.11914,14.11914,0,0,1,419.397,727.06981v-5.32505a0,0,0,0,1,0,0Z"
                                    transform="translate(629.57273 1305.02946) rotate(179.99738)" fill="#2f2e41" />
                                <polygon
                                    points="157.552 342.991 158.858 434.42 160.165 554.584 188.899 551.972 203.267 386.094 221.553 551.972 251.218 551.972 254.206 384.788 243.757 348.216 157.552 342.991"
                                    fill="#2f2e41" />
                                <path
                                    d="M473.37417,513.1531c-31.26533.00239-60.04471-14.14839-60.43319-14.34263l-.32273-.16136-2.62373-62.96637c-.76082-2.22509-15.74263-46.13091-18.28-60.08625-2.57083-14.13882,34.68842-26.54742,39.213-27.99853l1.02678-11.37405,41.75366-4.49918,5.292,14.5536,14.97942,5.6168a7.40924,7.40924,0,0,1,4.59212,8.7043l-8.32539,33.85619,20.33325,112.01266-4.37755.18946C495.709,511.39658,484.38425,513.1525,473.37417,513.1531Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#3f3d56" />
                                <circle cx="454.46738" cy="294.45965" r="30.06284"
                                    transform="matrix(0.87745, -0.47966, 0.47966, 0.87745, -345.12824, 96.19037)"
                                    fill="#a0616a" />
                                <path
                                    d="M430.1166,323.56132c5.72926,6.10289,16.36927,2.82672,17.1158-5.51069a10.07153,10.07153,0,0,0-.01268-1.94523c-.38544-3.69311-2.519-7.046-2.008-10.94542a5.73974,5.73974,0,0,1,1.05046-2.687c4.56548-6.11359,15.28263,2.73444,19.59138-2.8,2.642-3.39359-.46364-8.73664,1.56381-12.52956,2.67591-5.006,10.60183-2.53654,15.57222-5.27809,5.53017-3.05032,5.1994-11.53517,1.55907-16.6961-4.43955-6.294-12.22348-9.65241-19.91044-10.13643s-15.32094,1.59394-22.4974,4.39069c-8.15392,3.17767-16.23969,7.56925-21.25749,14.739-6.10218,8.71919-6.68942,20.44132-3.6376,30.63677C419.10222,311.0013,425.43805,318.57766,430.1166,323.56132Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#2f2e41" />
                                <path d="M641.58071,741.9626h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#cacaca" />
                                <path
                                    d="M596.58984,294.33545a3.488,3.488,0,0,1-2.38134-.93555l-16.15723-15.00732a3.49994,3.49994,0,0,1,4.76367-5.12891l13.68555,12.71192,27.07666-27.07618a3.5,3.5,0,1,1,4.94922,4.9502l-29.46094,29.46094A3.49275,3.49275,0,0,1,596.58984,294.33545Z"
                                    transform="translate(-259.58071 -157.88396)" fill="#fff" />
                            </svg>
                            <h4>Kamu sudah presensi kok, tenang aja</h4>
                        </div><!-- /.col-md-8 col-md-offset-2 -->
                    </div><!-- /.row -->
                    @endif
                    @endif
                </div>
            </div><!-- /.lqd-modal-foot -->

        </div><!-- /.lqd-modal-inner -->
    </div><!-- /.lqd-modal -->
    <!-- End Modal Presensi -->

    <!-- Modal Info Presensi -->
    <div id="modalInfoPresensi" class="lqd-modal lity-hide col-md-12 justify-content-center">
        <div class="lqd-modal-inner">

            <div class="lqd-modal-head">
                <header class="fancy-heading text-center">
                    <h2>Informasi</h2>
                </header>
            </div><!-- /.lqd-modal-head -->

            <div class="lqd-modal-content">

                <div class="row">
                    <div class="col-md-12 text-center" id="modalProfileContent" style="color: darkgray">

                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->

            </div><!-- /.lqd-modal-content -->
            <div class="lqd-modal-foot">
                <div class="col-md-12 text-center" id="modalContent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000"
                        class="bi bi-x-lg lity-close" viewBox="0 0 16 16" data-lity-close>
                        <path
                            d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                    </svg>
                </div>
            </div><!-- /.lqd-modal-foot -->

        </div><!-- /.lqd-modal-inner -->
    </div><!-- /.lqd-modal -->
    <!-- End Modal Info Presensi -->
</main><!-- /#content.content -->

<script>
    $('#presensi-sekarang').on('click', function(e){
				// alert('dor');
                var presensi = $('#presensi-sekarang2').attr('value');
				$.ajax({
				type: 'POST',
				url:'{{ route("presensiOk") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
					'presensi': presensi
				},
				success: function(data){
                    if((data.status == "berhasil") || (data.status == "Sudah Absensi")){
                        $('#modalProfileContent').html(data.msg);
                        $('#presensi_text').html('');
                        $("#sudah_presensi").html(`<div class="row">
                             <div class="lqd-column col-md-8 col-md-offset-2">
							 	<svg id="a65bca02-317b-4705-84dd-2a5586816ee4" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 680.83858 584.23207"><path id="b9ccae5a-ffdd-4f5c-9c1e-05af9f0f3372" data-name="Path 438" d="M310.70569,694.02818a24.21459,24.21459,0,0,0,23.38269-4.11877c8.18977-6.87441,10.758-18.196,12.8467-28.68191l6.17973-31.01657-12.9377,8.90837c-9.30465,6.40641-18.81826,13.01866-25.26011,22.29785s-9.25223,21.94707-4.07792,31.988" transform="translate(-259.58071 -157.88396)" fill="#e6e6e6"/><path id="f4ad1d06-bd03-4ced-a5c4-c19a65ab4ee5" data-name="Path 439" d="M312.7034,733.73874c-1.62839-11.86368-3.30382-23.88078-2.15884-35.87167,1.01467-10.64932,4.26373-21.04881,10.87831-29.57938a49.20592,49.20592,0,0,1,12.62466-11.44039c1.26215-.79648,2.42409,1.20354,1.16733,1.997a46.77949,46.77949,0,0,0-18.50446,22.32562c-4.02857,10.24607-4.67545,21.41582-3.98154,32.3003.41944,6.58218,1.31074,13.1212,2.20588,19.65251a1.19817,1.19817,0,0,1-.808,1.42251,1.16348,1.16348,0,0,1-1.42253-.808Z" transform="translate(-259.58071 -157.88396)" fill="#f2f2f2"/><path id="baf785f8-b4c6-42cf-85bd-8a16037845f7" data-name="Path 442" d="M324.42443,714.70229a17.82513,17.82513,0,0,0,15.53141,8.01862c7.8644-.37318,14.41806-5.85973,20.31713-11.07027l17.452-15.4088-11.54987-.55281c-8.30619-.39784-16.82672-.771-24.73813,1.79338s-15.20758,8.72639-16.654,16.91541" transform="translate(-259.58071 -157.88396)" fill="#e6e6e6"/><path id="a14e4330-7125-4e03-a856-d6453c34f6cc" data-name="Path 443" d="M308.10042,740.55843c7.83972-13.87142,16.93234-29.28794,33.1808-34.21552a37.02609,37.02609,0,0,1,13.95545-1.441c1.48189.128,1.11179,2.41174-.367,2.28454a34.39833,34.39833,0,0,0-22.27164,5.89215c-6.27994,4.27453-11.16975,10.21755-15.30781,16.51907-2.53511,3.86051-4.80576,7.88445-7.07642,11.903C309.48824,742.78513,307.36641,741.85759,308.10042,740.55843Z" transform="translate(-259.58071 -157.88396)" fill="#f2f2f2"/><path id="ac20a106-7eb8-4a45-8835-674ef3bf3222" data-name="Path 141" d="M935.3957,569.31654H503.18092a5.03014,5.03014,0,0,1-5.02359-5.02359V162.90754a5.03017,5.03017,0,0,1,5.02359-5.02358H935.3957a5.03017,5.03017,0,0,1,5.02359,5.02358V564.292a5.02922,5.02922,0,0,1-5.02359,5.02359Z" transform="translate(-259.58071 -157.88396)" fill="#fff"/><path id="a8878079-c7cd-406f-a434-8b15b914b9b4" data-name="Path 141" d="M935.3957,569.31654H503.18092a5.03014,5.03014,0,0,1-5.02359-5.02359V162.90754a5.03017,5.03017,0,0,1,5.02359-5.02358H935.3957a5.03017,5.03017,0,0,1,5.02359,5.02358V564.292a5.02922,5.02922,0,0,1-5.02359,5.02359ZM503.18092,159.88944a3.01808,3.01808,0,0,0-3.01152,3.01151V564.292a3.01808,3.01808,0,0,0,3.01152,3.01152H935.3957a3.01717,3.01717,0,0,0,3.01153-3.01152V162.90754a3.01809,3.01809,0,0,0-3.01153-3.01151Z" transform="translate(-259.58071 -157.88396)" fill="#cacaca"/><path id="af64f961-e9a2-4c53-a333-5060c7f850d2" data-name="Path 142" d="M707.41023,262.18528a3.41053,3.41053,0,0,0,0,6.82105H894.55305a3.41053,3.41053,0,0,0,0-6.82105Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="baad4cfb-158d-4439-9cc3-22475bf47b22" data-name="Path 143" d="M707.41023,282.65037a3.41054,3.41054,0,0,0,0,6.82106h95.54019a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="f3456279-91e5-49ad-aa43-9838b26fb6ca" data-name="Path 142" d="M543.84146,392.7046a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="a3288adf-49f8-485f-8ae9-1e4f1a13d849" data-name="Path 143" d="M543.84146,413.1697a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="e63a5b48-5a7d-40a2-b9b0-6adec326348a" data-name="Path 142" d="M543.84146,433.17177a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="a1c669b4-dfc3-4cfa-a7be-66b71399844d" data-name="Path 143" d="M543.84146,453.63687a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="bfec50d1-ffb1-4de6-a9ef-a1085e40e016" data-name="Path 142" d="M543.84146,474.17177a3.41054,3.41054,0,0,0,0,6.82106h350.8937a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path id="bc9696ec-ec99-41d5-9116-3ad9737a38ac" data-name="Path 143" d="M543.84146,494.63687a3.41054,3.41054,0,0,0,0,6.82106H803.13254a3.41054,3.41054,0,0,0,0-6.82106Z" transform="translate(-259.58071 -157.88396)" fill="#e4e4e4"/><path d="M599.41943,324.82812a49,49,0,1,1,48.99952-49A49.05567,49.05567,0,0,1,599.41943,324.82812Z" transform="translate(-259.58071 -157.88396)" fill="#209c8c"/><path d="M450.67833,510.10041a12.24754,12.24754,0,0,0-14.953-11.36231l-16.19641-22.82521-16.27138,6.45945,23.32519,31.91237a12.31392,12.31392,0,0,0,24.09559-4.1843Z" transform="translate(-259.58071 -157.88396)" fill="#a0616a"/><path d="M419.11211,508.40888l-49.00774-63.57777L388.46714,387.12c1.34563-14.50936,10.425-18.56089,10.81135-18.72645l.5893-.25281,15.979,42.6119-11.73235,31.28625,28.79671,48.4319Z" transform="translate(-259.58071 -157.88396)" fill="#3f3d56"/><path d="M589.30794,312.41993a12.24758,12.24758,0,0,0-10.17219,15.78672l-21.50463,17.91269,7.69816,15.72326,30.01343-25.72272a12.31392,12.31392,0,0,0-6.03477-23.69995Z" transform="translate(-259.58071 -157.88396)" fill="#a0616a"/><path d="M590.06206,344.02244l-59.59835,53.77665-58.95815-13.84578c-14.57-.21979-19.31136-8.9587-19.50629-9.33113l-.29761-.568,41.2489-19.22578,32.0997,9.27828,46.06046-32.45509Z" transform="translate(-259.58071 -157.88396)" fill="#3f3d56"/><polygon points="227.248 568.437 243.261 568.436 250.878 506.672 227.245 506.673 227.248 568.437" fill="#a0616a"/><path d="M483.39733,721.74476h50.32614a0,0,0,0,1,0,0V741.189a0,0,0,0,1,0,0h-36.207a14.11914,14.11914,0,0,1-14.11914-14.11914v-5.32505A0,0,0,0,1,483.39733,721.74476Z" transform="translate(757.57348 1305.02654) rotate(179.99738)" fill="#2f2e41"/><polygon points="163.247 568.437 179.26 568.436 186.878 506.672 163.245 506.673 163.247 568.437" fill="#a0616a"/><path d="M419.397,721.74476H469.7231a0,0,0,0,1,0,0V741.189a0,0,0,0,1,0,0h-36.207A14.11914,14.11914,0,0,1,419.397,727.06981v-5.32505a0,0,0,0,1,0,0Z" transform="translate(629.57273 1305.02946) rotate(179.99738)" fill="#2f2e41"/><polygon points="157.552 342.991 158.858 434.42 160.165 554.584 188.899 551.972 203.267 386.094 221.553 551.972 251.218 551.972 254.206 384.788 243.757 348.216 157.552 342.991" fill="#2f2e41"/><path d="M473.37417,513.1531c-31.26533.00239-60.04471-14.14839-60.43319-14.34263l-.32273-.16136-2.62373-62.96637c-.76082-2.22509-15.74263-46.13091-18.28-60.08625-2.57083-14.13882,34.68842-26.54742,39.213-27.99853l1.02678-11.37405,41.75366-4.49918,5.292,14.5536,14.97942,5.6168a7.40924,7.40924,0,0,1,4.59212,8.7043l-8.32539,33.85619,20.33325,112.01266-4.37755.18946C495.709,511.39658,484.38425,513.1525,473.37417,513.1531Z" transform="translate(-259.58071 -157.88396)" fill="#3f3d56"/><circle cx="454.46738" cy="294.45965" r="30.06284" transform="matrix(0.87745, -0.47966, 0.47966, 0.87745, -345.12824, 96.19037)" fill="#a0616a"/><path d="M430.1166,323.56132c5.72926,6.10289,16.36927,2.82672,17.1158-5.51069a10.07153,10.07153,0,0,0-.01268-1.94523c-.38544-3.69311-2.519-7.046-2.008-10.94542a5.73974,5.73974,0,0,1,1.05046-2.687c4.56548-6.11359,15.28263,2.73444,19.59138-2.8,2.642-3.39359-.46364-8.73664,1.56381-12.52956,2.67591-5.006,10.60183-2.53654,15.57222-5.27809,5.53017-3.05032,5.1994-11.53517,1.55907-16.6961-4.43955-6.294-12.22348-9.65241-19.91044-10.13643s-15.32094,1.59394-22.4974,4.39069c-8.15392,3.17767-16.23969,7.56925-21.25749,14.739-6.10218,8.71919-6.68942,20.44132-3.6376,30.63677C419.10222,311.0013,425.43805,318.57766,430.1166,323.56132Z" transform="translate(-259.58071 -157.88396)" fill="#2f2e41"/><path d="M641.58071,741.9626h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-259.58071 -157.88396)" fill="#cacaca"/><path d="M596.58984,294.33545a3.488,3.488,0,0,1-2.38134-.93555l-16.15723-15.00732a3.49994,3.49994,0,0,1,4.76367-5.12891l13.68555,12.71192,27.07666-27.07618a3.5,3.5,0,1,1,4.94922,4.9502l-29.46094,29.46094A3.49275,3.49275,0,0,1,596.58984,294.33545Z" transform="translate(-259.58071 -157.88396)" fill="#fff"/></svg>
                                <h4>Kamu sudah presensi kok, tenang aja</h4>
                             </div>
                        </div>`);
                    }
                    else{
                        $('#modalProfileContent').html(data.msg);
                    }
				}, error: function(err) {
                    $('#modalProfileContent').html("Gagal Melakukan Presensi, Silahkan di Coba Kembali");
                }
				});
			});
</script>
@endsection