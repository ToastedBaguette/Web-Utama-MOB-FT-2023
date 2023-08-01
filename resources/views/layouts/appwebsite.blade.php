<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>MOB FT 2023</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    <link rel="stylesheet" href="https://use.typekit.net/dcf1bki.css">
    <link rel="shortcut icon" href="./img/mob.png" />
    <!-- <link rel="stylesheet" href="https://use.typekit.net/{YOUR_API_KEY}.css"> -->

    <link rel="stylesheet" href="{{ url ('website/assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/vendors/liquid-icon/liquid-icon.min.css')}}" />
    <link rel="stylesheet" href="{{ url ('website/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ url ('website/assets/css/theme-vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ url ('website/assets/css/theme.min.css') }}" />
    <!-- <link rel="stylesheet" href="{{ url ('website/assets/css/crypto.css') }}" /> -->

    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Head Libs -->
    <script async src="{{ url ('website/assets/vendors/modernizr.min.js') }}"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body style="background-color:#33334D;" data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left"
    data-mobile-nav-style="modern" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray"
    data-mobile-nav-breakpoint="1199">

    <div id="wrap">
        @yield('header')

        <main style="margin:auto;">
            @yield('content')
            <!-- @guest

@else
    @if (Auth::user()->status == 'maharu')
        @yield('home')
    @endif
@endguest   -->
        </main>
        <footer class="main-footer" style="background-color: #181b31;">
            <section class="vc_row d-flex flex-wrap align-items-center py-2 bg-cover">
                <div class="container">
                    <div class="row">
                        <div class="lqd-column col-md-12 text-center mt-3">
                            <div class="row">
                                <div class="lqd-column col-md-8 col-md-offset-2">
                                    <ul class="social-icon branded circle social-icon-sm mb-3"
                                        style="margin-bottom:5vh;">
                                        <li>
                                            <a href="https://www.instagram.com/mobft2021/" target="_blank">
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                                    </svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCvXk_6SkGs3TEkvAMdsgzHw"
                                                target="_blank">
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                                    </svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://linktr.ee/MOBFT2021" target="_blank">
                                                <i>
                                                    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 50 50" width="18px" height="18px">
                                                        <path
                                                            d="M 9 4 C 6.24 4 4 6.24 4 9 L 4 41 C 4 43.76 6.24 46 9 46 L 41 46 C 43.76 46 46 43.76 46 41 L 46 9 C 46 6.24 43.76 4 41 4 L 9 4 z M 25 11 C 33.27 11 40 16.359219 40 22.949219 C 40 25.579219 38.959297 27.960781 36.779297 30.300781 C 35.209297 32.080781 32.660547 34.040156 30.310547 35.660156 C 27.960547 37.260156 25.8 38.519609 25 38.849609 C 24.68 38.979609 24.44 39.039062 24.25 39.039062 C 23.59 39.039062 23.649219 38.340781 23.699219 38.050781 C 23.739219 37.830781 23.919922 36.789063 23.919922 36.789062 C 23.969922 36.419063 24.019141 35.830937 23.869141 35.460938 C 23.699141 35.050938 23.029062 34.840234 22.539062 34.740234 C 15.339063 33.800234 10 28.849219 10 22.949219 C 10 16.359219 16.73 11 25 11 z M 23.992188 18.998047 C 23.488379 19.007393 23 19.391875 23 20 L 23 26 C 23 26.552 23.448 27 24 27 C 24.552 27 25 26.552 25 26 L 25 23.121094 L 27.185547 26.580078 C 27.751547 27.372078 29 26.973 29 26 L 29 20 C 29 19.448 28.552 19 28 19 C 27.448 19 27 19.448 27 20 L 27 23 L 24.814453 19.419922 C 24.602203 19.122922 24.294473 18.992439 23.992188 18.998047 z M 15 19 C 14.448 19 14 19.448 14 20 L 14 26 C 14 26.552 14.448 27 15 27 L 18 27 C 18.552 27 19 26.552 19 26 C 19 25.448 18.552 25 18 25 L 16 25 L 16 20 C 16 19.448 15.552 19 15 19 z M 21 19 C 20.448 19 20 19.448 20 20 L 20 26 C 20 26.552 20.448 27 21 27 C 21.552 27 22 26.552 22 26 L 22 20 C 22 19.448 21.552 19 21 19 z M 31 19 C 30.448 19 30 19.448 30 20 L 30 26 C 30 26.552 30.448 27 31 27 L 34 27 C 34.552 27 35 26.552 35 26 C 35 25.448 34.552 25 34 25 L 32 25 L 32 24 L 34 24 C 34.553 24 35 23.552 35 23 C 35 22.448 34.553 22 34 22 L 32 22 L 32 21 L 34 21 C 34.552 21 35 20.552 35 20 C 35 19.448 34.552 19 34 19 L 31 19 z">
                                                    </svg>
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                    <p><span class="text-white">Information Technology Department MOB FT 2021</span></p>
                                    <p>All Rights Reserved</p>
                                </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
                            </div><!-- /.row -->
                        </div><!-- /.lqd-column col-md-12 text-center -->
                    </div><!-- /.row -->
                </div><!-- /.container -->

            </section>
        </footer><!-- /.main-footer -->
    </div><!-- /#wrap -->

    <script src="{{ url ('website/assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ url ('website/assets/js/theme-vendors.js') }}"></script>
    <script src="{{ url ('website/assets/js/theme.min.js') }}"></script>
    <script src="{{ url ('website/assets/js/liquidAjaxContactForm.min.js') }}"></script>
    <script src="{{ url ('website/assets/js/liquidAjaxMailchimp.min.js') }}"></script>
    <script>
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.backgroundColor = "#33334D";
            document.getElementById("navbar").style.transition = "all 0.5s";
            document.getElementById("navbar").style.transitionTimingFunction = "linear";
            document.getElementById("tandascroll").style.visibility = "hidden";
            document.getElementById("tandascroll").style.transition = "all 0.5s";
            document.getElementById("tandascroll").style.transitionTimingFunction = "linear";

        } else {
            // mantul
            // wkwkkwkw
            document.getElementById("navbar").style.backgroundColor = "transparent";
            document.getElementById("navbar").style.transition = "all 0.5s";
            document.getElementById("navbar").style.transitionTimingFunction = "linear";
            document.getElementById("tandascroll").style.visibility = "visible";
            document.getElementById("tandascroll").style.transition = "all 0.5s";
            document.getElementById("tandascroll").style.transitionTimingFunction = "linear";
        }
    }

    //easter egg inspect
    console.log('%c Widi ada bang jago 😄', 'color:red;font-size:50px;');
    console.log('%c Nyari apa disini bang? 😒', 'color:red;font-size:50px;');
    console.log('%c Tutup ga nih? Lapor SFD loh nantik 🤬', 'color:red;font-size:50px;');
    </script>
</body>

</html>