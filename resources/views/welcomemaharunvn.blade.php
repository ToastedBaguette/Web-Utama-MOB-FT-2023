<style>
    html,
    body {
        font-family: Poppins, Helvetica, "sans-serif";
        /* font-style: italic; */
        font-size: 4.2vmin;
        line-height: 4.7vmin;
        color: rgba(255, 255, 255, 0.6);
        margin: 0;
        padding: 0;
        height: 100%;
        background: rgba(51, 59, 169, 1);
        background: -moz-linear-gradient(top, rgba(51, 59, 169, 1) 0%, rgba(31, 36, 107, 1) 73%, rgba(20, 22, 60, 1) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(66, 39, 71, 1)), color-stop(73%, rgba(43, 25, 46, 1)), color-stop(100%, rgba(19, 11, 20, 1)));
        background: -webkit-linear-gradient(top, rgba(51, 59, 169, 1) 0%, rgba(31, 36, 107, 1) 73%, rgba(20, 22, 60, 1) 100%);
        background: -o-linear-gradient(top, rgba(51, 59, 169, 1) 0%, rgba(31, 36, 107, 1) 73%, rgba(20, 22, 60, 1) 100%);
        background: -ms-linear-gradient(top, rgba(51, 59, 169, 1) 0%, rgba(31, 36, 107, 1) 73%, rgba(20, 22, 60, 1) 100%);
        background: linear-gradient(to bottom, rgba(51, 59, 169, 1) 0%, rgba(31, 36, 107, 1) 73%, rgba(20, 22, 60, 1) 100%);
    }

    a {
        color: rgba(255, 255, 255, 0.6);
    }

    #lampadario {
        position: fixed;
        left: 50%;
        top: 0;
    }

    #filo {
        position: relative;
        background-color: #000000;
        width: 2px;
        height: 150px;
        left: 50%;
        margin-left: -1px;
        z-index: 1;
        -webkit-transform-origin: 0% 0%;
        -moz-transform-origin: 0% 0%;
        -ms-transform-origin: 0% 0%;
        -o-transform-origin: 0% 0%;
        transform-origin: 0% 0%;
        -webkit-animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
        -moz-animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
        -ms-animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
        -o-animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
        animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
    }

    #filo:after {
        content: " ";
        left: -5px;
        top: 100%;
        position: absolute;
        border-bottom: 15px solid #000000;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        height: 0;
        width: 4px;
    }

    #lampadina {
        position: relative;
    }

    input[value="off"]:checked~#filo {
        -webkit-box-shadow: -80px -10px 7px 0 rgba(0, 0, 0, 0.1);
        -moz-box-shadow: -80px -10px 7px 0 rgba(0, 0, 0, 0.1);
        -ms-box-shadow: -80px -10px 7px 0 rgba(0, 0, 0, 0.1);
        -o-box-shadow: -80px -10px 7px 0 rgba(0, 0, 0, 0.1);
        box-shadow: -80px -10px 7px 0 rgba(0, 0, 0, 0.1);
    }

    input[value="off"]:checked~#filo:after {
        -webkit-box-shadow: -80px -10px 10px -2px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: -80px -10px 10px -2px rgba(0, 0, 0, 0.1);
        -ms-box-shadow: -80px -10px 10px -2px rgba(0, 0, 0, 0.1);
        -o-box-shadow: -80px -10px 10px -2px rgba(0, 0, 0, 0.1);
        box-shadow: -80px -10px 10px -2px rgba(0, 0, 0, 0.1);
    }

    input {
        position: absolute;
        width: 90px;
        height: 70px;
        top: 150px;
        margin-left: -45px;
        opacity: 0;
        z-index: 1;
        cursor: pointer;
    }

    input[value="on"] {
        top: 150px;
    }

    input[value="off"] {
        top: -100px;
    }

    input[value="on"]:checked {
        top: -100px;
    }

    input[value="on"]:checked+input[value="off"] {
        top: 150px;
    }

    label {
        width: 51px;
        height: 51px;
        top: 164px;
        position: absolute;
        left: 0;
        margin-left: -24px;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -ms-border-radius: 100%;
        -o-border-radius: 100%;
        border-radius: 100%;
        -webkit-animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
        -moz-animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
        -ms-animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
        -o-animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
        animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
    }

    input[value="off"]:checked~label {
        background: rgba(255, 255, 255, 0.03);
        -webkit-box-shadow: inset 0px 1px 5px rgba(255, 255, 255, 0.1), inset 0px 2px 20px rgba(255, 255, 255, 0.07), -80px -15px 15px -5px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: inset 0px 1px 5px rgba(255, 255, 255, 0.1), inset 0px 2px 20px rgba(255, 255, 255, 0.07), -80px -15px 15px -5px rgba(0, 0, 0, 0.1);
        -ms-box-shadow: inset 0px 1px 5px rgba(255, 255, 255, 0.1), inset 0px 2px 20px rgba(255, 255, 255, 0.07), -80px -15px 15px -5px rgba(0, 0, 0, 0.1);
        -o-box-shadow: inset 0px 1px 5px rgba(255, 255, 255, 0.1), inset 0px 2px 20px rgba(255, 255, 255, 0.07), -80px -15px 15px -5px rgba(0, 0, 0, 0.1);
        box-shadow: inset 0px 1px 5px rgba(255, 255, 255, 0.1), inset 0px 2px 20px rgba(255, 255, 255, 0.07), -80px -15px 15px -5px rgba(0, 0, 0, 0.1);
    }

    input[value="on"]:checked~label {
        background: rgba(255, 255, 255, 1);
        -webkit-box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8), 0px 0px 30px rgba(255, 255, 255, 0.8), 0px 0px 50px rgba(255, 255, 255, 0.6), 0px 0px 70px rgba(255, 255, 255, 0.6), -80px -15px 120px 0px rgba(255, 255, 255, 0.4);
        -moz-box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8), 0px 0px 30px rgba(255, 255, 255, 0.8), 0px 0px 50px rgba(255, 255, 255, 0.6), 0px 0px 70px rgba(255, 255, 255, 0.6), -80px -15px 120px 0px rgba(255, 255, 255, 0.4);
        -ms-box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8), 0px 0px 30px rgba(255, 255, 255, 0.8), 0px 0px 50px rgba(255, 255, 255, 0.6), 0px 0px 70px rgba(255, 255, 255, 0.6), -80px -15px 120px 0px rgba(255, 255, 255, 0.4);
        -o-box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8), 0px 0px 30px rgba(255, 255, 255, 0.8), 0px 0px 50px rgba(255, 255, 255, 0.6), 0px 0px 70px rgba(255, 255, 255, 0.6), -80px -15px 120px 0px rgba(255, 255, 255, 0.4);
        box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8), 0px 0px 30px rgba(255, 255, 255, 0.8), 0px 0px 50px rgba(255, 255, 255, 0.6), 0px 0px 70px rgba(255, 255, 255, 0.6), -80px -15px 120px 0px rgba(255, 255, 255, 0.4);
    }

    input[value="off"]:checked~label:after {
        content: " ";
        width: 15px;
        height: 15px;
        top: 0;
        position: absolute;
        left: 0;
        margin-left: 15px;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -ms-border-radius: 100%;
        -o-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(255, 255, 255, 0.03);
    }

    #sorpresa {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
    }

    input[value="off"]:checked~#lampadina #sorpresa {
        opacity: 0;
    }

    input[value="on"]:checked~#lampadina #sorpresa {
        opacity: 1;
    }

    #footer {
        position: fixed;
        width: 94%;
        text-align: center;
        bottom: 30%;
        padding: 0 3%;
        z-index: 1;
    }

    #shadow {
        position: fixed;
        width: 94%;
        text-align: center;
        bottom: 29%;
        padding: 0 3%;
        color: rgba(0, 0, 0, 0);
        -webkit-text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.3);
        -moz-text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.3);
        -ms-text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.3);
        -o-text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.3);
        text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.3);
        -webkit-transform-origin: 50% 0px;
        -moz-transform-origin: 50% 0px;
        -ms-transform-origin: 50% 0px;
        -o-transform-origin: 50% 0px;
        transform-origin: 50% 0px;
        -webkit-animation: ombraTesto .9s ease-in-out 0s infinite alternate;
        -moz-animation: ombraTesto .9s ease-in-out 0s infinite alternate;
        -ms-animation: ombraTesto .9s ease-in-out 0s infinite alternate;
        -o-animation: ombraTesto .9s ease-in-out 0s infinite alternate;
        animation: ombraTesto .9s ease-in-out 0s infinite alternate;
    }

    @-webkit-keyframes oscillaFilo {
        from {
            -webkit-transform: rotate(5deg);
        }

        to {
            -webkit-transform: rotate(-5deg);
        }
    }

    @-moz-keyframes oscillaFilo {
        from {
            -moz-transform: rotate(5deg);
        }

        to {
            -moz-transform: rotate(-5deg);
        }
    }

    @-ms-keyframes oscillaFilo {
        from {
            -ms-transform: rotate(5deg);
        }

        to {
            -ms-transform: rotate(-5deg);
        }
    }

    @-o-keyframes oscillaFilo {
        from {
            -o-transform: rotate(5deg);
        }

        to {
            -o-transform: rotate(-5deg);
        }
    }

    @keyframes oscillaFilo {
        from {
            transform: rotate(5deg);
        }

        to {
            transform: rotate(-5deg);
        }
    }

    @-webkit-keyframes oscillaLampadina {
        from {
            -webkit-transform: rotate(3deg) translate(-16.4px, -1px);
        }

        to {
            -webkit-transform: rotate(-3deg) translate(16.4px, -1px);
        }
    }

    @-moz-keyframes oscillaLampadina {
        from {
            -moz-transform: rotate(3deg) translate(-16.4px, -1px);
        }

        to {
            -moz-transform: rotate(-3deg) translate(16.4px, -1px);
        }
    }

    @-ms-keyframes oscillaLampadina {
        from {
            -ms-transform: rotate(3deg) translate(-16.4px, -1px);
        }

        to {
            -ms-transform: rotate(-3deg) translate(16.4px, -1px);
        }
    }

    @-o-keyframes oscillaLampadina {
        from {
            -o-transform: rotate(3deg) translate(-16.4px, -1px);
        }

        to {
            -o-transform: rotate(-3deg) translate(16.4px, -1px);
        }
    }

    @keyframes oscillaLampadina {
        from {
            transform: rotate(3deg) translate(-16.4px, -1px);
        }

        to {
            transform: rotate(-3deg) translate(16.4px, -1px);
        }
    }

    @-webkit-keyframes ombraTesto {
        from {
            -webkit-transform: translate(1px, 0px) scale(1.01, 1.06) skew(0.9deg, 0deg);
        }

        to {
            -webkit-transform: translate(-1px, 0px) scale(1.01, 1.06) skew(-0.9deg, 0deg);
        }
    }

    @-moz-keyframes ombraTesto {
        from {
            -moz-transform: translate(1px, 0px) scale(1.01, 1.06) skew(0.9deg, 0deg);
        }

        to {
            -moz-transform: translate(-1px, 0px) scale(1.01, 1.06) skew(-0.9deg, 0deg);
        }
    }

    @-ms-keyframes ombraTesto {
        from {
            -ms-transform: translate(1px, 0px) scale(1.01, 1.06) skew(0.9deg, 0deg);
        }

        to {
            -ms-transform: translate(-1px, 0px) scale(1.01, 1.06) skew(-0.9deg, 0deg);
        }
    }

    @-o-keyframes ombraTesto {
        from {
            -o-transform: translate(1px, 0px) scale(1.01, 1.06) skew(0.9deg, 0deg);
        }

        to {
            -o-transform: translate(-1px, 0px) scale(1.01, 1.06) skew(-0.9deg, 0deg);
        }
    }

    @keyframes ombraTesto {
        from {
            transform: translate(1px, 0px) scale(1.01, 1.06) skew(0.9deg, 0deg);
        }

        to {
            transform: translate(-1px, 0px) scale(1.01, 1.06) skew(-0.9deg, 0deg);
        }
    }
</style>
<div id="lampadario">
    <input type="radio" name="switch" value="on" />
    <input type="radio" name="switch" value="off" checked="checked" />
    <label for="switch"></label>
    <div id="filo"></div>
    <div id="lampadina">
        <div id="sorpresa">
            <div id="footer">
                Selamat Datang Maharu Fakultas Teknik!
            </div>
            <div id="shadow">
                Selamat Datang Maharu Fakultas Teknik!
            </div>
        </div>
    </div>
</div>