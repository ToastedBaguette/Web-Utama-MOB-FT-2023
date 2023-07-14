@extends('layouts.appwebsite')

@section('header')
<header class="main-header main-header-overlay" style='position: fixed; background-color:transparent;'>

    <div class="mainbar-wrap">
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="row mainbar-row align-items-lg-stretch px-4">
                    <div class="col">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/" rel="home">
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
								<a href="/">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt text-white">< Halaman Awal</span>
									</span>
								</a>
							</li>
							@guest
                            <li >
									<div style="margin: auto;" >
									<a style="margin-left: 30px;"class="btn btn-solid text-uppercase circle btn-bordered border-thick font-size-12 font-weight-semibold" href="{{ route('login') }}">
									<span>
										<span class="btn-gradient-bg"></span>
										<span class="btn-txt">Masuk</span>
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" class="btn-gradient-border" width="100%" height="100%">
											<defs>
												<linearGradient id="svg-border-5c77b6395a8f2" x1="0%" y1="0%" x2="100%" y2="0%">
													<stop offset="0%"></stop>
													<stop offset="100%"></stop>
												</linearGradient>
											</defs>
										</svg>
									</span>
									</a>
									<div>
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
<section id="content" class="vc_row fullheight d-flex flex-wrap align-items-center bg-cover" style="background-image: url('./img/login.png'); background-color:#33334D;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card loginBox">
                <div class="card-header font-size-30 mb-10 font-weight-semibold text-white">Masuk</div><br><br>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row loginBox">
                            <label for="nrp" class="col-md-4 col-form-label text-md-left text-white">{{ __('NRP') }}</label>

                            <div class="col-md-6">
                                <input id="nrp" type="text" class="form-control text-white underline-form @error('nrp') is-invalid @enderror" name="nrp" value="{{ old('nrp') }}" required autofocus style="border: 0; outline: 0; background: transparent; border-bottom: 1px solid white; border-radius: 0;">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left text-white">Kata Sandi</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control text-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border: 0; outline: 0; background: transparent; border-bottom: 1px solid white; border-radius: 0;">
                                <br>
                                <input type="checkbox" onclick="showPassword()"> Tampilkan Kata Sandi
                                @if (count($errors)>0)
                                    <div class="invalid-feedback mt-3">
                                        <p style="color:#F70000; background-color: #FFE4E2; padding: 1rem; border-radius: 0.5rem">Ada yang salah nih, coba lagi</p>
                                    </div>
                                @endif
                            </div>
                            
                        </div>
                        
                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-sm circle btn-solid font-size-14 ltr-sp-025 px-2 lh-15 mt-5 buttonLogin font-weight-semibold">
                                    <span class="btn-gradient-bg"></span>
                                    <span style="align-items:right;" class="btn-txt">Masuk</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<script>

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
