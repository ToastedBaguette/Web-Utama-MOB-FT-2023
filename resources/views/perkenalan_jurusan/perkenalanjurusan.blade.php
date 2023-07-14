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
	<!-- Perkenalan Jurusan -->
	<section class="vc_row pt-100 pb-60 mt-30">
        <div class="container">
            
        <header class="fancy-title text-center">
                        <h2 class="my-0 text-glow">Perkenalan Jurusan</h2>
                    </header><!-- /.fancy-title -->
            <div class="row transparent-card mx-3" style="padding-top:30px;">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
                <div class="lqd-column col-md-4 col-md-offset-4">


                    @if(Auth::user()->status == 'maharu')
                    @foreach($data as $d)
                    <header class="fancy-title text-center">
                        <h5 class="my-0 font-size-24 text-white ">Password Zoom-nya adalah</h5>
                        <br>
                        <h6 class="mt-2 mb-1 font-size-16 text-uppercase ltr-sp-15 text-white font-weight-semibold">{{$d->clue}}</h6>
                    </header><!-- /.fancy-title -->

                    <div class="contact-form contact-form-inputs-sm contact-form-inputs-underlined contact-form-button-md contact-form-button-block">
                        <div class="row">
                            <div class="lqd-column col-md-12">
                                <input type="text" id="jawaban" name="jawaban" aria-required="true" aria-invalid="false" class="text-center" placeholder="Tulis jawaban di sini" required>
                            </div><!-- /.col-md-12 -->
                            <div class="lqd-column col-md-12 text-center">
                                <a href="#modal" id="myBtn" class="btn btn-solid btn-lg circle font-size-12 lh-15 font-weight-semibold ltr-sp-2 mb-2 w-75" data-lity="#modalDaftar" style="justify-content:center">
                                    <span>
                                        <span class="btn-gradient-bg"></span>
                                        <span class="btn-txt">OK</span>
                                    </span>
                                </a>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.contact-form -->
                    @endforeach
                    @endif

                </div><!-- /.lqd-column col-md-4 col-md-offset-4 -->

            </div><!-- /.row -->

            <div class="row lqd-column col-md-12 px-4 pt-45 pb-30" style="border-radius: 1rem;" id="tableRCdanProfile">

                <div class="lqd-column col-md-12 text-center" style="margin-top:50px;">

                    <header class="fancy-title">
                        <h3 class="text-glow">Clue</h3>
                 
                    </header>

                </div><!-- /.col-md-12 text-center -->

                <div class="lqd-column col-md-12 justify-content-center">
                    <div class="liquid-img-group-container">
                        <div class="liquid-img-group-inner text-center">
                                <div class="row">
                                    <div class="lqd-column col-md-4">
                                        A : 12
                                        <br>
                                        B : 13
                                        <br>
                                        C : 14
                                        <br>
                                        D : 15
                                        <br>
                                        E : 16
                                        <br>
                                        F : 17
                                        <br>
                                        G : 18
                                        <br>
                                        H : 19
                                        <br>
                                        I : 20
                                        <br>
                                        J : 21
                                        <br>
                                        K : 22
                                        <br>
                                        L : 23
                                       
                                       
                                    </div>
                                    <div class="lqd-column col-md-4"> 
                                        M : 24
                                        <br>
                                        N : 25
                                        <br>
                                        O : 26
                                        <br>
                                        P : 1
                                        <br>
                                        Q : 2
                                        <br>
                                        R : 3
                                        <br>
                                        S : 4
                                        <br>
                                        T : 5
                                        <br>
                                        U : 6
                                        <br>
                                        V : 7
                                        <br>
                                        W : 8
                                        <br>
                                        X : 9
                                        <br>
                                        Y : 10
                                        <br>
                                        Z : 11
                                        </div>
                                    <div class="lqd-column col-md-4">
                                        1 : P
                                        <br>
                                        2 : Q
                                        <br>
                                        3 : R
                                        <br>
                                        4 : S
                                        <br>
                                        5 : T
                                        <br>
                                        6 : U
                                        <br>
                                        7 : V
                                        <br>
                                        8 : W
                                        <br>
                                        9 : X
                                        <br>
                                        0 : Y
                                    </div>
                                </div>
                        </div><!-- /.liquid-img-group-inner -->
                    </div><!-- /.liquid-img-group-container -->

                    <!-- <h6 class="mb-20 font-size-12 font-weight-semibold text-uppercase ltr-sp-1 text-primary">Koor ITD Kita</h6>

                    <p class="mb-35">Superstrong former athlete with numerous fitness and health awards with 7 published books on Crossfit lifestyle.</p> -->

                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
	<!-- End Jurusan -->

    <!-- Modal -->
		<div id="modal" class="lqd-modal lity-hide col-md-12 justify-content-center">
			<div class="lqd-modal-inner" id="isiModal">
                <div class="iconbox-icon-wrap text-center">
					<span class="iconbox-icon-container mb-45">
					    <img src="./img/loading.gif"/>
					</span>
				</div><!-- /.iconbox-icon-wrap -->
			</div><!-- /.lqd-modal-inner -->

		</div><!-- /.lqd-modal -->
	<!-- End Modal -->
</main><!-- /#content.content -->

<script>
$("#myBtn").click(function(){
    var jawaban = $("#jawaban").val();

    $.ajax({
      type:'POST',
      url:'{{route("cekjawabanjurusan")}}',
      data:{
        '_token':'<?php echo csrf_token() ?>',
        'jawaban':jawaban
      },
      success: function(data){
          if(data=="salah bos"){
            $("#pesan").css("display", "block");
          }else{
            $('#isiModal').html(data.msg)
          }
      }
    });

});

</script>
@endsection
