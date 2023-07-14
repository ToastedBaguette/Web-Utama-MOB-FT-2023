@extends('layouts.appwebsite')

@section('header')
<header class="main-header main-header-overlay" style='position: fixed; background-color:#33334D;'>

    <div class="mainbar-wrap">
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="row mainbar-row align-items-lg-stretch px-4">

                    <div class="col">
                        <div class="navbar-header">
                            <a class="navbar-brand pt-35 pb-35" href="#" rel="home">
                                <span class="navbar-brand-inner">
                                    <img class="logo-dark" src="{{ url ('website/assets/img/logo/logo-1.svg') }}" alt="Ave HTML Template">
                                    <img class="logo-sticky" src="{{ url ('website/assets/img/logo/logo-1.svg') }}" alt="Ave HTML Template">
                                    <img class="mobile-logo-default" src="{{ url ('website/assets/img/logo/logo-1.svg') }}" alt="Ave HTML Template">
                                    <img class="logo-default" src="{{ url ('website/assets/img/logo/logo-light.svg') }}" alt="Ave HTML Template">
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

							<li class="is-active">
								<a href="#content">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt">Beranda</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#storyline">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt">Storyline</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#jadwal">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt">Jadwal</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#rectorcup">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt">Rector Cup</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#faq">
									<span class="link-icon"></span>
									<span class="link-txt">
										<span class="link-ext"></span>
										<span class="txt">FAQ</span>
									</span>
								</a>
							</li>

							@guest
								<li>
									<div style="margin: auto">
									<a class="nav-link btn btn-solid btn-sm circle btn-bordered border-thick btn-gradient font-size-14 ltr-sp-025 px-2 lh-15" href="{{ route('login') }}">
									<span>
										<span class="btn-gradient-bg"></span>
										<span class="btn-txt">{{ __('Login') }}</span>
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
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nrp" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" value="{{ old('nrp') }}" required autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
