<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>MOB FT 2023</title>
  <link rel="shortcut icon" href="{{ url('./img/mob.png') }}">
  <link rel="stylesheet" href="{{ url('./assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ url('./assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('./assets/css/colors/sky.css') }}">
  <link rel="preload" href="{{ url('./assets/css/fonts/urbanist.css') }}" as="style" onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
  <style>
    .bg-mob {
      background-size: cover; 
      background-image: url({{asset('assets/mob-assets/background1.jpg')}});
    }

    @media only screen and (max-width: 768px) {
    .bg-mob {
        background-image: url({{asset('./assets/mob-assets/bgmobile2.jpg')}});
      }
    }
  </style>
</head>

<body class="bg-mob">
  <div class="content-wrapper">
		{{-- INI NAVBAR TEMPLATE --}}
		<header class="wrapper bg-light">
				<nav class="navbar navbar-expand-lg classic transparent navbar-light">
					<div class="container flex-lg-row flex-nowrap align-items-center">
						<div class="navbar-brand w-100">
							<a href="{{ url('/')}}">
                <a class="main-font" style="font-size: 30px">MOB FT 2023</a>
							</a>
						</div>
						<div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
								<div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link secondary-font" href="{{route('welcome')}}">Halaman Awal</a>
										</li>
									</ul>
									<!-- /.navbar-nav -->
									<div class="offcanvas-footer d-lg-none">
										<div>
											<a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
											<br /> 00 (123) 456 78 90 <br />
											<nav class="nav social social-white mt-4">
												<a href="#"><i class="uil uil-twitter"></i></a>
												<a href="#"><i class="uil uil-facebook-f"></i></a>
												<a href="#"><i class="uil uil-dribbble"></i></a>
												<a href="#"><i class="uil uil-instagram"></i></a>
												<a href="#"><i class="uil uil-youtube"></i></a>
											</nav>
											<!-- /.social -->
										</div>
									</div>
									<!-- /.offcanvas-footer -->
								</div>
								<!-- /.offcanvas-body -->
						</div>
						<!-- /.navbar-other -->
					</div>
					<!-- /.container -->
				</nav>
				<!-- /.navbar -->
		</header>

    <section class="wrapper">
      <div class="container py-14 py-md-16">
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <div class="row gy-10 gx-lg-8 gx-xl-12">
              <div class="col-lg-6 me-auto">
                <form class="contact-form" method="post" action="{{ route('login') }}">
                @csrf
                <h2 class="ms-2 secondary-font">Login</h2>
                  <div class="row gx-4">
                    <div class="col-md-12">
                      <div class="form-floating mb-4">
                        <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" value="{{ old('nrp') }}" placeholder="NRP" required autofocus autocomplete="off">
                        <label for="nrp">{{ __('NRP') }}</label>
                        <div class="invalid-feedback">
                          NRP atau passwordmu sepertinya masih salah.
                        </div>
                      </div>
                    </div>

                    <!-- /column -->
                    <div class="col-md-12">
                      <div class="form-floating mb-4">
                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="password">
                        <label for="password">Password</label>
                        <div class="invalid-feedback">
                          NRP atau Passwordmu sepertinya masih salah.
                        </div>
                      </div>
                    </div>

                    <!-- /column -->
                    <div class="col-12">
                      <div class="mb-4">
                      <input class="form-check-input" type="checkbox"  onclick="showPassword()" value="" id="invalidCheck">
                        <label class="form-check-label" for="invalidCheck">
                          Show password
                        </label>
                      @if (count($errors)>0)
                        <div class="invalid-feedback mt-3">
                          <p style="color:#F70000; background-color: #FFE4E2; padding: 1rem; border-radius: 0.5rem">Ada yang salah nih, coba lagi</p>
                        </div>
                      @endif
                      </div>
                    </div>


                    <!-- /column -->
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary rounded-5 btn-send" href="#" value="Login">
                    </div>
                    <!-- /column -->
                  </div>
                  <!-- /.row -->
                </form>
                <!-- /form -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

	</div>
	<script src="{{ url('./assets/js/plugins.js') }}"></script>
	<script src="{{ url('./assets/js/theme.js') }}"></script>
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
</body>
</html>
