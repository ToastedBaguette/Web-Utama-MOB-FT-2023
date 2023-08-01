<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Website utama MOB FT 2023 untuk membantu mahasiswa baru mengetahui beberapa informasi mengenai MOB FT 2023.">
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
      background-image: url({{asset('assets/mob-assets/background1.jpg')
    }
    });
    }

    .arcade_machine {
      width: 50%;
    }

    @media only screen and (max-width: 768px) {
      .bg-mob {
        background-image: url({{asset('./assets/mob-assets/bgmobile2.jpg')
      }
    });
    }

    .arcade_machine {
      width: auto;
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
          <div class="navbar-brand w-50">
            <a href="#beranda">
              <a class="main-font" style="font-size: 30px">MOB FT 2023</a>
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <?php 
                  use Illuminate\Support\Facades\Auth;
                  $login = false;
                  if (Auth::check()) {
                    $login = true;
                  } 
                  ?>
                <li class="nav-item">
                  <a class="nav-link secondary-font" href="#storyline">Storyline</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link secondary-font" href="#jadwal">Jadwal</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link secondary-font" href="#faq">FAQ</a>
                </li>
              </ul>

              {{-- OFFCANVAS (FOR MOBILE SCREEN) --}}
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a class="link-inverse">© Information Technology Department MOB FT 2023. </a>
                  <nav class="nav social social-white mt-4">
                    <a href="https://linktr.ee/MOBFT2022" target="_blank"><i class="uil uil-link-alt"></i></a>
                    <a href="https://www.instagram.com/mobftubaya/" target="_blank"><i
                        class="uil uil-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCvXk_6SkGs3TEkvAMdsgzHw" target="_blank"><i
                        class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-none d-md-block">
                @if(!$login)
                <a href="{{route('login')}}" class="btn btn-sm btn-success rounded-pill"
                  style="background-color: #45C4A0; border-color: #45C4A0">Login</a>
                @else
                <a href="/dashboard" class="btn btn-sm btn-primary rounded-pill">Home</a>
                @endif
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"></button>
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

    {{-- SELAMAT DATANG DI MOB FT 2023 --}}
    <section id="beranda" class="wrapper bg-light bg-mob">
      <div class="container pt-10 pt-md-14 pb-md-16 text-center">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 mb-14 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="img-auto" src="{{ url('./img/logo.png') }}"
                srcset="{{ url('./assets/mob-assets/logo.png') }} 2x" alt=""
                style="max-height: 70vh; max-width: 70vh;" /></figure>
            @if(!$login)
            <a href="{{route('login')}}" class="mt-8 btn btn-lg btn-success rounded-pill d-lg-none">Login</a>
            @else
            <a href="/dashboard" class="mt-8 btn btn-lg btn-primary rounded-pill d-lg-none">Home</a>
            @endif
          </div>
          <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
            <h1 class="display-1 fs-54 mb-5 mx-md-n5 mx-lg-0 mt-7 main-font">Selamat Datang di <br
                class="d-md-none"><span class="main-font">MOB FT 2023</span></h1>
            <div>
              <h2 class="fs-30 secondary-font">Virtus Adaptionis Magna Est</h2>
              <p class="lead fs-lg mb-7 fst-italic secondary-font">"The Power Of Adaptation is Extraordinary"</p>
            </div>
            {{-- BUTTON UNDUH MODUL --}}
            <a href="https://drive.google.com/drive/folders/17mJxXajLYIMQSxfWazQveW6gbvDTy-I0" target="_blank"
              class="btn btn-lg btn-outline-primary rounded-pill">Unduh Modul</a>
          </div>
        </div>
      </div>
      <div class="overflow-hidden">
        <div class="divider text-soft-primary mx-n2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
          </svg>
        </div>
      </div>
    </section>

    {{-- STORYLINE --}}
    <section id="storyline" class="wrapper bg-gradient-primary">
      <div class="container pt-14 py-md-16">

        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center">
          <div class="col-lg-6 position-relative">
            <figure>
              <img class="img-fluid floating" src="{{ url('./assets/mob-assets/mascot floating.png') }}"
                srcset="{{ url('./assets/mob-assets/mascot floating.png') }} 2x" alt="" style="margin-left: 0" />
            </figure>
          </div>
          <div class="col-lg-6">
            <h3 class="display-5 mb-5 text-center secondary-font">Storyline</h3>
            <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-md="1"
              data-items-xs="1">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="item-inner">
                      <p class="mb-7">Di suatu Benua bernama Apollo terdapat suatu kerajaan yang bernama Kerajaan
                        Xavier. Kerajaan Xavier merupakan kerajaan yang indah pada awal masa kejayaannya, namun karena
                        kerajaan Xavier dipimpin oleh seorang raja yang sangat tamak dan haus kekuasaan, maka Kerajaan
                        Xavier kondisinya semakin memprihatinkan. Seiring dengan berjalannya waktu, kondisi kerajaan
                        Xavier mulai menurun hingga menuju ke masa kehancurannya. Caden, yang merupakan pangeran
                        kerajaan Xavier sekaligus anak dari raja yang berkuasa di Kerajaan Xavier berinisiatif untuk
                        memulihkan Xavier dengan mencari suatu berkat yang merupakan legenda mitos dari kerajaan
                        tersebut.</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item-inner">
                      <p class="mb-7">Legenda itu mengatakan bahwa ada suatu berkat bernama Solasta yang dapat
                        memulihkan keadaan Xavier seperti pada masa kejayaannya. Konon katanya, jika Solasta berhasil
                        ditemukan, maka keinginan terbesar dari penemunya akan terwujud. Namun untuk mendapatkan Solasta
                        tersebut, Caden harus melewati berbagai tantangan yang ada di depannya.</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item-inner">
                      <p class="mb-7">Dalam segala situasi, Caden selalu membawa hewan peliharaan kesayangannya yang ia
                        beri nama Luxor. Saat Kerajaan Xavier masih indah seperti sedia kala, Luxor memiliki tugas untuk
                        mengamati para warga. Bersama dengan Luxor yang merupakan elang kesayangan Caden, mereka
                        berpetualang mencari Solasta. Warga kerajaan Xavier yang mendapatkan gelar Survivor memiliki
                        tugas untuk ikut serta bersama Pangeran Caden dalam tujuan menyelamatkan rumah mereka yaitu
                        Xavier seperti sedia kala. Selama perjalanan yang mereka lalui, mereka akan bertemu dengan para
                        Observer yang akan berusaha untuk menguji apakah mereka tulus dan semangat untuk menjadikan
                        Kerajaan Xavier menjadi baik seperti sedia kala.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
  </div>
  <!-- /.container -->
  </section>

  {{-- JADWAL --}}
  <section id="jadwal" class="wrapper bg-light">
    <div class="container pt-14 py-md-16">
      <div class="row text-center">
        <div class="col-xl-10 mx-auto">
          <h3 class="display-4 mb-10 px-xxl-15 secondary-font">Jadwal MOB FT 2023</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row gy-6">
        <div class="col-md-6 col-lg-4">
          <a class="card shadow-lg lift h-100">
            <div class="card-body p-5 d-flex flex-row">
              <div>
                <span class="avatar bg-footer text-white w-11 h-11 fs-20 me-4">17</span>
              </div>
              <div>
                <span class="badge bg-footer text-white rounded py-1 mb-2">Agustus 2023</span>
                <h4 class="mb-1">MOB FT Hari Pertama</h4>
              </div>
            </div>
          </a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-4">
          <a class="card shadow-lg lift h-100">
            <div class="card-body p-5 d-flex flex-row">
              <div>
                <span class="avatar bg-footer text-white w-11 h-11 fs-20 me-4">18</span>
              </div>
              <div>
                <span class="badge bg-footer text-white rounded py-1 mb-2">Agustus 2023</span>
                <h4 class="mb-1">MOB FT Hari Kedua</h4>
              </div>
            </div>
          </a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-4">
          <a class="card shadow-lg lift h-100">
            <div class="card-body p-5 d-flex flex-row">
              <div>
                <span class="avatar bg-footer text-white w-11 h-11 fs-20 me-4">19</span>
              </div>
              <div>
                <span class="badge bg-footer text-white rounded py-1 mb-2">Agustus 2023</span>
                <h4 class="mb-1">MOB FT Hari Ketiga</h4>
              </div>
            </div>
          </a>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
  </section>

  {{-- FAQ --}}
  <section id="faq" class="wrapper bg-light">
    <div class="container py-10 py-md-12">
      <div class="row gx-lg-8 gx-xl-12 gy-10">
        <div class="col-lg-12 d-flex justify-content-center">
          <img class="img-fluid arcade_machine" src="{{ url('./assets/mob-assets/ArcadeMachine.gif')}}" alt="" />
        </div>
        <!--/column -->
        <div class="col-lg-12">
          <h2 class="display-4 mb-3 text-center secondary-font">FAQ</h2>
          <div class="accordion accordion-wrapper" id="accordionExample-2">
            <div class="card  accordion-item">
              <div class="card-header" id="headingOne-2">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne-2"
                  aria-expanded="true" aria-controls="collapseOne-2">Kapan MOB FT 2023 dilaksanakan?</button>
              </div>
              <!--/.card-header -->
              <div id="collapseOne-2" class="accordion-collapse collapse show" aria-labelledby="headingOne-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Pra-MOB dilaksanakan pada tanggal 17 Agustus, sementara MOB FT akan dilaksanakan pada 22 hingga 24
                    Agustus 2023, Rector Cup akan dilaksanakan setiap Sabtu mulai tanggal 27 Agustus hingga 17 September
                    2023.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingTwo-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2"
                  aria-expanded="false" aria-controls="collapseTwo-2"> Apakah MOB FT 2023 berlangsung offline
                  sepenuhnya?</button>
              </div>
              <!--/.card-header -->
              <div id="collapseTwo-2" class="accordion-collapse collapse" aria-labelledby="headingTwo-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Iya, MOB FT 2023 berlangsung offline sepenuhnya</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingThree-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree-2"
                  aria-expanded="false" aria-controls="collapseThree-2"> Dimanakah lokasi MOB FT 2023 berlangsung?
                </button>
              </div>
              <!--/.card-header -->
              <div id="collapseThree-2" class="accordion-collapse collapse" aria-labelledby="headingThree-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Fakultas Teknik, Universitas Surabaya</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingFour-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour-2"
                  aria-expanded="false" aria-controls="collapseFour-2"> Apakah modul wajib diprint? </button>
              </div>
              <!--/.card-header -->
              <div id="collapseFour-2" class="accordion-collapse collapse" aria-labelledby="headingFour-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p> Iya, semua halaman wajib di print.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingFive-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive-2"
                  aria-expanded="false" aria-controls="collapseFive-2"> Bagaimana ketentuan print modul? </button>
              </div>
              <!--/.card-header -->
              <div id="collapseFive-2" class="accordion-collapse collapse" aria-labelledby="headingFive-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Kertas berukuran A4, dijilid menggunakan lakban hitam dan mika bening dengan urutan
                    mika-modul-mika, boleh hitam putih atau berwarna, dan boleh bolak-balik.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingSix-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix-2"
                  aria-expanded="false" aria-controls="collapseSix-2"> Pakaian apa yang harus digunakan saat MOB FT 2023
                  berlangsung? </button>
              </div>
              <!--/.card-header -->
              <div id="collapseSix-2" class="accordion-collapse collapse" aria-labelledby="headingSix-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Baju berkerah dengan bawahan hitam, ketentuan warna baju ada pada modul MOB FT 2023.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingSeven-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven-2"
                  aria-expanded="false" aria-controls="collapseSeven-2"> Apa saja kriteria kelulusan MOB FT 2023?
                </button>
              </div>
              <!--/.card-header -->
              <div id="collapseSeven-2" class="accordion-collapse collapse" aria-labelledby="headingSeven-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Kriteria kelulusan dapat dilihat di modul MOB FT 2023 pada bagian Poin Kelulusan</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingEight-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight-2"
                  aria-expanded="false" aria-controls="collapseEight-2"> Jika tidak lulus MOB FT 2023, konsekuensi apa
                  yang akan diterima? </button>
              </div>
              <!--/.card-header -->
              <div id="collapseEight-2" class="accordion-collapse collapse" aria-labelledby="headingEight-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Peserta harus mengulang MOB FT pada tahun berikutnya</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingNine-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine-2"
                  aria-expanded="false" aria-controls="collapseNine-2"> Bagaimana cara untuk melihat absensi? </button>
              </div>
              <!--/.card-header -->
              <div id="collapseNine-2" class="accordion-collapse collapse" aria-labelledby="headingNine-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Melalui website MOB FT 2023 dengan login terlebih dahulu</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card  accordion-item">
              <div class="card-header" id="headingTen-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTen-2"
                  aria-expanded="false" aria-controls="collapseTen-2"> Apabila lupa password untuk login website, siapa
                  yang harus saya hubungi? </button>
              </div>
              <!--/.card-header -->
              <div id="collapseTen-2" class="accordion-collapse collapse" aria-labelledby="headingTen-2"
                data-bs-parent="#accordionExample-2">
                <div class="card-body">
                  <p>Menghubungi maping yang bersangkutan pada sesi tersebut</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
          </div>
          <!--/.accordion -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->

    <div class="overflow-hidden">
      <div class="divider text-navy mx-n2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
          <path fill="currentColor"
            d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
        </svg>
      </div>
    </div>
  </section>

  </div>

  {{-- FOOTER --}}
  <footer class="bg-footer bg-footer text-inverse">
    <div class="container pt-12 pt-lg-6 pb-13 pb-md-15">
      <hr class="mt-3 mb-12" />
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget main-font">
            <a class="main-font fs-24">MOB FT 2023</a>
            <p class="mb-4" style="color: white">© Information Technology Department MOB FT 2023. <br
                class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="https://linktr.ee/MOBFT2022" target="_blank"><i class="uil uil-link-alt"></i></a>
              <a href="https://www.instagram.com/mobftubaya/" target="_blank"><i class="uil uil-instagram"></i></a>
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
            <img src="{{ url('./img/logoubaya.png')}}" alt="Minimalism" />
          </figure>
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3 mt-2">
          <figure data-responsive-bg="true">
            <img src="{{ url('./img/logobem.png')}}" alt="Minimalism" />
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
</body>

</html>