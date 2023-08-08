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
  <link rel="shortcut icon" href="<?php echo e(url('./img/mob.png')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('./assets/css/plugins.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('./assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('./assets/css/colors/sky.css')); ?>">
  <link rel="preload" href="<?php echo e(url('./assets/css/fonts/urbanist.css')); ?>" as="style" onload="this.rel='stylesheet'">
  <link rel="stylesheet" href="<?php echo e(asset('admin/css/custom.css')); ?>">
</head>

<body style="background: url('./assets/mob-assets/background-ungu.jpg'); background-size: cover;">
  <div class="content-wrapper">
    
    <header class="wrapper bg-light">
      <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a class="main-font" style="font-size: 30px">
              MOB FT 2023
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('welcome')); ?>">Halaman awal</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
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
              <div class="col-lg-6">
                <form class="contact-form" method="post" action="<?php echo e(route('resetpassword')); ?>">
                  <?php echo csrf_field(); ?>
                  <h2 class="ms-2">Wah baru pertama kali login nih, silahkan masukkan password baru</h2>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input id="password" type="password" name="password"
                        class="pass-check form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required
                        autocomplete="current-password">
                      <label for="password">Password</label>
                    </div>
                  </div>

                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input id="password2" type="password" name="password2"
                        class="pass-check form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required
                        autocomplete="current-password">
                      <label for="password2">Confirm Password</label>
                    </div>
                  </div>

                  <!-- /column -->
                  <div class="col-12">
                    <div class="mb-4">
                      <input class="form-check-input" type="checkbox" onclick="showPassword()" value=""
                        id="invalidCheck">
                      <label class="form-check-label" for="invalidCheck">
                        Show password
                      </label>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="mb-4">
                      <h6 id="hint" style="display:none;">*Tekan sekali lagi untuk ganti</h6>
                      <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                      </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>

                  <!-- /column -->
                  <div class="col-12">
                    <input type="submit" id="gnti_pw" data-href="<?php echo e(url('/dashboard')); ?>"
                      class="btn btn-primary rounded-5 btn-send" href="#" value="Konfirmasi" disabled>
                  </div>
                  <!-- /column -->
                  <!-- </div> -->
                  <!-- /.row -->

                  <!-- <div class="form-group row">

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> font-size-24" name="password" required autocomplete="current-password">
                          <input type="checkbox" onclick="showPassword()"> Tampilkan Kata Sandi
                          <h6 id="hint" class="text-glow2" style="display:none;" >*Tekan sekali lagi untuk ganti</h6>
                          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($message); ?></strong>
                              </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                  </div>

                      <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                          <button id="gnti_pw" data-href="<?php echo e(url('/dashboard')); ?>" type="submit" class="btn btn-sm circle btn-solid font-size-14 ltr-sp-025 px-2 lh-15 mt-5 font-weight-semibold">
                              <span class="btn-gradient-bg"></span>
                              <span class="btn-txt">Konfirmasi</span>
                          </button>
                      </div>
                      </div> -->
                </form>
                <!-- /form -->
              </div>
              <!--/column -->
              <div class="col-lg-6">
                
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
  <script src="<?php echo e(url('./assets/js/plugins.js')); ?>"></script>
  <script src="<?php echo e(url('./assets/js/theme.js')); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      var helper = 0;
      $("#gnti_pw").click(function(){
        // $("#hint").css("display", "block");
        if(helper == 1){
            location.reload();
        }
        helper = 1;
      });

      $(".pass-check").on('input', function(){
        var pass1 = $("#password").val();
        var pass2 = $("#password2").val();
        var btn = document.getElementById("gnti_pw");
        if(pass1 === pass2){
          if(pass1 != ''){
            btn.disabled = false;
          }
        }
        else{
          btn.disabled = true;
        }
      });
    });

    function showPassword(){
        var pw = document.getElementById("password");
        if (pw.type === "password"){
            pw.type = "text";
        } else {
            pw.type = "password";
        }

        var pw2 = document.getElementById("password2");
        if (pw2.type === "password"){
            pw2.type = "text";
        } else {
            pw2.type = "password";
        }
    }
  </script>
</body>

</html><?php /**PATH C:\Github Repository\Web-Utama-MOB-FT-2023\resources\views/resetpassword2023.blade.php ENDPATH**/ ?>