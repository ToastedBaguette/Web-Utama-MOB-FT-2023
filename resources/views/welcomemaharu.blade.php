<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>MOB FT 2021</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    <link rel="stylesheet" href="https://use.typekit.net/dcf1bki.css">
    <link rel="shortcut icon" href="./img/mob.png" />
    <!-- <link rel="stylesheet" href="{{ url ('website/assets/css/custom.css') }}" /> -->
    <script src="https://unpkg.com/css-doodle@0.19.1/css-doodle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap");

        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            background-color: #141419;
        }

        html {
            overflow-y: hidden;
            overflow-x: hidden;
            padding: 0;
            margin: 0;
        }

        body {
            overflow-x: hidden;
            overflow-y: hidden;
            height=100%;
            padding: 0;
            margin: 0;
        }

        @-webkit-keyframes arrow_anim {
            from {
                margin-top: 58px;
            }

            to {
                margin-top: 67px;
            }
        }

        @-moz-keyframes arrow_anim {
            from {
                margin-top: 58px;
            }

            to {
                margin-top: 67px;
            }
        }

        @-ms-keyframes arrow_anim {
            from {
                margin-top: 58px;
            }

            to {
                margin-top: 67px;
            }
        }

        @-o-keyframes arrow_anim {
            from {
                margin-top: 58px;
            }

            to {
                margin-top: 67px;
            }
        }

        @keyframes arrow_anim {
            from {
                margin-top: 58px;
            }

            to {
                margin-top: 67px;
            }
        }

        #arrow {
            display: inline-block;
            /* vertical-align: baseline; */
            border-style: solid;
            border-width: 8px 5px 0 5px;
            border-color: red transparent transparent transparent;

            /* border-left: 10px solid rgba(48, 48, 72, .1000);
            border-right: 10px solid rgba(48, 48, 72, .15);
            border-top: 10px solid red; */
            height: 0;
            /* salah satu aja */
            margin: 80% 0px 0px 44%;
            /* margin: 0px 0px 0px 30px; */
            position: absolute;
            top: 0%;
            left: 0px;
            width: 0;
            font-family: "Press Start 2P", sans-serif;
            cursor: pointer;
            color: rgba(101, 222, 191, 1);
            -webkit-animation: arrow_anim .3s steps(3) infinite;
            -moz-animation: arrow_anim .3s steps(3) infinite;
            -ms-animation: arrow_anim .3s steps(3) infinite;
            -o-animation: arrow_anim .3s steps(3) infinite;
            animation: arrow_anim .3s steps(3) infinite;
        }

        .dialog {
            height: 15%;

            /* border-radius: 1rem;  */
            border-radius: 20px 20px 0px 0px;
            /* background-color: rgba(255, 255, 255, .15);  */
            background-color: rgba(48, 48, 72, .100);
            /* background-color: #16161B;  */
            box-shadow: 0px 0px 200px #70e8c675;
            backdrop-filter: blur(25px);

            /* background: #16161B; */
            /* box-shadow: 0 0 0 6px #75EECB; */
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            line-height: 0.5cm;
            font-weight: bold;
            padding: 20px 20px 20px 20px;
            position: relative;
            text-transform: uppercase;
            word-spacing: 3px;
            /* min-width:100%; */
            max-width: 100%;
            min-width: 100%;
            margin: auto;
        }

        #dialog {
            padding-left: 15%;
        }


        @-webkit-keyframes spaceboots {
            0% {
                -webkit-transform: translate(2px, 1px) rotate(0deg);
            }

            10% {
                -webkit-transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                -webkit-transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                -webkit-transform: translate(0px, 2px) rotate(0deg);
            }

            40% {
                -webkit-transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                -webkit-transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                -webkit-transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                -webkit-transform: translate(2px, 1px) rotate(-1deg);
            }

            80% {
                -webkit-transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                -webkit-transform: translate(2px, 2px) rotate(0deg);
            }

            100% {
                -webkit-transform: translate(1px, -2px) rotate(-1deg);
            }
        }

        .shake {
            -webkit-animation-name: spaceboots;
            -webkit-animation-duration: 0.8s;
            -webkit-transform-origin: 50% 50%;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
        }

        #nayla {
            width: 20%;
            position: absolute;
            z-index: 1;
            background-color: transparent;
            z-index: 1;
            bottom: 0;
            left: 0;
        }

        @media (max-width: 575px) {
            body {
                overflow: hidden;
            }

            .dialog {
                max-width: 90%;
                min-width: 90%;
                height: 100px;
                font-size: 14px;
            }

            #arrow {
                /* margin: 100px 0px 0px 200px; */
                margin: 10% 0px 0px 50%;
                font-size: 14px;
            }

            #nayla {
                width: 45%;
                bottom: 0px;
                left: -5%;
            }

            body {
                max-width: 100%;
                max-height: 100%;
            }

            #C {
                max-width: 100%;
                max-height: 100%;
            }

            #dialog {
                padding-left: 35%;
                font-size: 14px;

            }

            #arrow {
                position: absolute;
                top: 30%;
            }
        }

        a:visited * {
            color: red !important;
        }
    </style>

</head>

<body>
    <canvas id="C" class="shake" style="position:relative; z-index:0px;">
    </canvas>
    <!-- <div>
        <img style="margin-top:-1500px; width:50%; margin-left:-500px; posisition:relative;z-index: 1;" src="{{ url ('./img//welcome/karakter-01.png') }}">
        </div> -->
    <img style="" id="nayla" src="{{ url ('./img//welcome/karakter-01.png') }}">
    <!-- <img style="margin-top:-1500px; width:50%; margin-left:-500px; position:relative;z-index: 1;bottom:156px;left:20px;" src="{{ url ('./img//welcome/karakter-01.png') }}"> -->

    <div class="dialog" style=" position:absolute; 
                bottom:0;">
        <div id="dialog" style="background:transparent;">

        </div>

    </div>




    <script>
        window.onload = function() {
                window.requestAnimFrame = (function() {
                return window.requestAnimationFrame ||window.webkitRequestAnimationFrame ||window.mozRequestAnimationFrame ||
                    function(callback) {
                        window.setTimeout(callback, 1000 / 60);
                    };
            })();

            var C = document.getElementById("C");
            var ctx = C.getContext("2d");

            var num = 4800; //jumlah partikel
            var added_mass = 0; //jumlah partikel yang udah kesedot
            var holeRadius = 35;
            var radiusLimit = (C.width + C.height) / 20;
            var hole_volume = 0;
            var G = .3; //daya hisep

            var R = [];
            var star = function(x, y, r, volume, color, angle, orbitRadius, angularSpeed, randomSpeed0, acceleration) {
            this.x = x;
            this.y = y;
            this.r = r;
            this.volume = volume;
            this.color = color;
            this.angle = angle;
            this.orbitRadius = orbitRadius;
            this.angularSpeed = angularSpeed;
            this.randomSpeed0 = randomSpeed0;
            this.acceleration = acceleration;
            };

            function makeStar(new_star) {
            var x, y, r, volume, color, angle, orbitRadius, angularSpeed, randomSpeed0, acceleration;

            x = C.width / 2;
            y = C.height / 2;
            r = Math.ceil(Math.random() * 2);
            volume = (4 / 3) * Math.PI * Math.pow(r, 3);
            color = "rgba(255,255,255,1)";
            angle = Math.random() * (2 * Math.PI);

            if (new_star == 0) {
                orbitRadius = (Math.random() * (C.width + C.height)) / 3;
            } else {
                orbitRadius =
                    Math.sqrt((C.width / 2 - C.width) * (C.width / 2 - C.width) + (C.height / 2 - C.height) * (C.height / 2 - C.height)) + Math.random() * 200;
            }

            angularSpeed = .8 * Math.random() * (Math.PI / orbitRadius);
            randomSpeed0 = Math.random() * (Math.PI / (10 * orbitRadius));
            acceleration = 0;

            R.push(
                new star(x, y, r, volume, color, angle, orbitRadius, angularSpeed, randomSpeed0, acceleration)
            );
            }

            function init() {
            for (var i = 0; i < num; i++) {
                makeStar(0);
            }
            }

            function setCanvasSize() {
            C.width = window.innerWidth;
            C.height = window.innerHeight;

            radiusLimit = (C.width + C.height) / 10;
            }

            function setBG() {
                // ctx.fillStyle = "#1b1b29";
                ctx.fillStyle = "rgba(27, 27, 41,.2)";
                ctx.fillRect(0, 0, C.width, C.height);
            }

            function drawCenter() {

            // ctx.fillStyle = "#0e0e16";
            ctx.fillStyle = "rgb(14, 14, 22)";
            ctx.shadowColor = "rgba(101,222,191,1)";
            ctx.shadowBlur = .5 * holeRadius;

            ctx.beginPath();
            ctx.arc(C.width / 2, C.height / 2, holeRadius, 0, 2 * Math.PI);
            ctx.closePath();
            ctx.fill();

            ctx.shadowColor = "none";
            ctx.shadowBlur = 0;

            if (holeRadius <= radiusLimit) {
                holeRadius = 1 * Math.sqrt(added_mass / Math.PI) + 10;
            }

            }

            function updateStar(i) {
            var star = R[i];

            star.x = C.width / 2 + Math.cos(star.angle) * star.orbitRadius;
            star.y = C.height / 2 + Math.sin(star.angle) * star.orbitRadius;
            if(!mousedown)
                star.angle += star.angularSpeed;

            star.acceleration = G * (star.r * hole_volume) / Math.pow(star.orbitRadius, 2) + 0.1;

            star.color = "rgba(101,222,191,1)";

            if (star.orbitRadius >= holeRadius) {
                star.orbitRadius -= star.acceleration;
            } else {
                added_mass += star.r;

                R.splice(i, 1);
                makeStar(1);

            }
            }

            function isVisible(star) {
            if (
                star.x > C.width ||
                star.x + star.r < 0 ||
                star.y > C.height ||
                star.y + star.r < 0
            )
                return false;

            return true;
            }

            function drawStar(star) {
            ctx.fillStyle = star.color;

            ctx.beginPath();
            ctx.fillRect(star.x, star.y, star.r, star.r);
            ctx.fill();
            }

            function loop() {
            setBG();
            var star;

            hole_volume = (3 / 4) * Math.PI * Math.pow(holeRadius, 3);
            for (var i = 0; i < R.length; i++) {
                star = R[i];
                if (isVisible(star)) drawStar(star);

                updateStar(i);
            }

            drawCenter();
            requestAnimFrame(loop);
            }

            window.addEventListener("resize", function() {
            setCanvasSize();
            });

            var mousedown=false;
            window.addEventListener("mousedown",function(){
            mousedown=true;
            });
            window.addEventListener("mouseup",function(){
            mousedown=false;
            });

            setCanvasSize();
            setBG();
            init();
            loop();

        }

        var dialogs = [
            'Hai! Senang akhirnya kamu sampai juga... Kami sudah menunggumu sejak tadi', 
            'Sepertinya kita mengalami sedikit masalah di sini...', 
            'Mesin waktu kita rusak dan mengakibatkan robeknya dimensi waktu...',
            'Robekkan dimensi ini menciptakan lubang besar yang menghisap segalanya dengan cepat', 
            'Ayo! Waktu kita tidak banyak... Cepat bergabung dengan Roamerus lainnya disini'],  
        initial = 0;
        individual = dialogs[initial].split('');

        function createDiag ( dialog ) {

        //change foto
        if(initial == 0)
        $("#nayla").attr("src", "{{ url ('./img//welcome/karakter-01.png') }}");
        else if(initial == 1)
        $("#nayla").attr("src", "{{ url ('./img//welcome/karakter-05.png') }}");
        else if(initial == 2)
        $("#nayla").attr("src", "{{ url ('./img//welcome/karakter-03.png') }}");
        else if(initial == 3)
        $("#nayla").attr("src", "{{ url ('./img//welcome/karakter-02.png') }}");
        else if(initial == 4)
        $("#nayla").attr("src", "{{ url ('./img//welcome/karakter-04.png') }}");

        for(i = 0; i < dialog.length; i++) {
            (function(i){
                
            setTimeout(function(){
                $('#dialog').text($('#dialog').text() +   dialog[i]);
                if (i == dialog.length-1 ) {
                $('#dialog').prepend('<div id="arrow" style="">Lanjut</div>');

                //change arrow to masuk
                if(initial == (dialogs.length-1)){
                    $('#arrow').html('<a href="{{url("login")}}" style="background-color:transparent;color:red;text-decoration:none;position:absolute;top:30%;" >Masuk</a>');
                }
                
                $("#arrow").click(function(){
                    if (dialogs[initial+1]) {
                        $('#dialog').text('');
                        initial += 1;
                        individual = dialogs[initial].split('');
                        createDiag( individual );
                        
                        
                    }
                });
                }
            }, 50*i);  
            
            }(i));
            
        }

        }

        createDiag( individual );

        
    </script>

</body>

</html>