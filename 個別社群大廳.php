<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>個別社群大廳</title>
    <style>
        @font-face {
            font-family: "cubic";
            src: url("Cubic_11_1.013_R.ttf") format("opentype");
        }
        body {
            background-image: url("畢專介面/畢專06.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;          
        }
        .spaceman {
            position: fixed;
            height: 40%;
            width: auto;
            right: 25%;
            bottom: 15%;
            -webkit-animation: spaceman 1.1s both;
	        animation: spaceman 1.1s both;
        }
        @-webkit-keyframes spaceman {
            0% {
                -webkit-transform: translateY(-500px);
                        transform: translateY(-500px);
                -webkit-animation-timing-function: ease-in;
                        animation-timing-function: ease-in;
                opacity: 0;
            }
            38% {
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                        animation-timing-function: ease-out;
                opacity: 1;
            }
            55% {
                -webkit-transform: translateY(-65px);
                        transform: translateY(-65px);
                -webkit-animation-timing-function: ease-in;
                        animation-timing-function: ease-in;
            }
            72% {
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                        animation-timing-function: ease-out;
            }
            81% {
                -webkit-transform: translateY(-28px);
                        transform: translateY(-28px);
                -webkit-animation-timing-function: ease-in;
                        animation-timing-function: ease-in;
            }
            90% {
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                        animation-timing-function: ease-out;
            }
            95% {
                -webkit-transform: translateY(-8px);
                        transform: translateY(-8px);
                -webkit-animation-timing-function: ease-in;
                        animation-timing-function: ease-in;
            }
            100% {
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                        animation-timing-function: ease-out;
            }
        }
        @keyframes spaceman {
            0% {
                -webkit-transform: translateY(-500px);
                        transform: translateY(-500px);
                -webkit-animation-timing-function: ease-in;
                        animation-timing-function: ease-in;
                opacity: 0;
            }
            38% {
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                        animation-timing-function: ease-out;
                opacity: 1;
            }
            55% {
                -webkit-transform: translateY(-65px);
                        transform: translateY(-65px);
                -webkit-animation-timing-function: ease-in;
                        animation-timing-function: ease-in;
            }
            72% {
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                        animation-timing-function: ease-out;
            }
            81% {
                -webkit-transform: translateY(-28px);
                        transform: translateY(-28px);
                -webkit-animation-timing-function: ease-in;
                        animation-timing-function: ease-in;
            }
            90% {
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                        animation-timing-function: ease-out;
            }
            95% {
                -webkit-transform: translateY(-8px);
                        transform: translateY(-8px);
                -webkit-animation-timing-function: ease-in;
                        animation-timing-function: ease-in;
            }
            100% {
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                -webkit-animation-timing-function: ease-out;
                        animation-timing-function: ease-out;
            }
        }
        .container {
            display: flex;
            font-family: "cubic";
        }

        .left {
            flex: 2;
            background-color: transparent;
            /* 左側內容的樣式 */
        }
        .right {
            flex: 6;
            background-color: transparent;
            height: 570px;
            /* #e0e0e0右側內容的樣式 */
        }
        .container-1{
            display: grid; /* 將容器設定為 Grid 布局 */
            grid-template-rows: 1fr 1fr; /* 設定兩個行，每個行佔據可用空間的比例為 1:1 */
            height: 100vh; /* 設定容器高度為視窗高度，以填滿整個視窗 */
        }
        .top {
            background-color: transparent;
            z-index: 0;
        }
        .bottom {
            background-color: transparent;
            z-index: 0;
        }
        .img6-2{
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            bottom: 5%;
        }
        .h-1{ /*社群大廳*/
            position: fixed;
            color: white;
            letter-spacing: 1px;
            font-weight: 500;
            background-clip: text;
            font-size: 50px;
            top: 50px;
            left: 3%;
            animation: h-1 1.5s ease-in-out infinite alternate;
        }
        @keyframes h-1 {
            0%,
            100% {
                text-shadow: 0 0 20px #fff, 0 0 100px #fff, 0 0 20px #fff;
            }
            50% {
                text-shadow: 0 0 50px #fff, 0 0 150px #fff, 0 0 50px #fff;
            }
        }
        .h-1-1{ /*返回*/
            position: fixed;
            color: white; 
            letter-spacing: 1px;
            font-weight: 500;
            background-clip: text;
            font-size: 20px;
            left: 3%;  
        }
        .h-2{  /*社群資料*/
            position: fixed;
            color: #3f4577; 
            letter-spacing: 5px;
            background-clip: text;
            font-size: 27px;
            z-index: 2;
            bottom: 16%;
            left: 80px;
            -webkit-animation: h-2 2s linear both;
	        animation: h-2 2s linear both;
        }

        .h-3{ /*小工具*/
            position: absolute;
            color: rgb(108, 88, 144);
            letter-spacing: 3px;
            background-clip: text;
            font-size: 30px;
            z-index: 2;
            left: 17%;
            top: 33%;

        }
        @-webkit-keyframes h-2 {
            0% {
                opacity: 0;
            }
            10% {
                opacity: 0;
            }
            10.1% {
                opacity: 1;
            }
            10.2% {
                opacity: 0;
            }
            20% {
                opacity: 0;
            }
            20.1% {
                opacity: 1;
            }
            20.6% {
                opacity: 0;
            }
            30% {
                opacity: 0;
            }
            30.1% {
                opacity: 1;
            }
            30.5% {
                opacity: 1;
            }
            30.6% {
                opacity: 0;
            }
            45% {
                opacity: 0;
            }
            45.1% {
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            55% {
                opacity: 1;
            }
            55.1% {
                opacity: 0;
            }
            57% {
                opacity: 0;
            }
            57.1% {
                opacity: 1;
            }
            60% {
                opacity: 1;
            }
            60.1% {
                opacity: 0;
            }
            65% {
                opacity: 0;
            }
            65.1% {
                opacity: 1;
            }
            75% {
                opacity: 1;
            }
            75.1% {
                opacity: 0;
            }
            77% {
                opacity: 0;
            }
            77.1% {
                opacity: 1;
            }
            85% {
                opacity: 1;
            }
            85.1% {
                opacity: 0;
            }
            86% {
                opacity: 0;
            }
            86.1% {
                opacity: 1;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes h-2 {
            0% {
                opacity: 0;
            }
            10% {
                opacity: 0;
            }
            10.1% {
                opacity: 1;
            }
            10.2% {
                opacity: 0;
            }
            20% {
                opacity: 0;
            }
            20.1% {
                opacity: 1;
            }
            20.6% {
                opacity: 0;
            }
            30% {
                opacity: 0;
            }
            30.1% {
                opacity: 1;
            }
            30.5% {
                opacity: 1;
            }
            30.6% {
                opacity: 0;
            }
            45% {
                opacity: 0;
            }
            45.1% {
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            55% {
                opacity: 1;
            }
            55.1% {
                opacity: 0;
            }
            57% {
                opacity: 0;
            }
            57.1% {
                opacity: 1;
            }
            60% {
                opacity: 1;
            }
            60.1% {
                opacity: 0;
            }
            65% {
                opacity: 0;
            }
            65.1% {
                opacity: 1;
            }
            75% {
                opacity: 1;
            }
            75.1% {
                opacity: 0;
            }
            77% {
                opacity: 0;
            }
            77.1% {
                opacity: 1;
            }
            85% {
                opacity: 1;
            }
            85.1% {
                opacity: 0;
            }
            86% {
                opacity: 0;
            }
            86.1% {
                opacity: 1;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
    <body>
        <script>
            function goToAnotherPage() {
              window.location.href = "新增社群.php";
            }
        </script>
        <div class="container">
            <div class="left">
                <div class="container-1">
                    <div class="top">
                        <a href="我的社群.php"><span class="h-1-1">&larr;返回我的社群</span></a>
                        <span class="h-1">聖誕交換禮物團</span>
                        <a href="抽籤機頁面.php"><span class="h-3">小工具</span></a>
                    </div>
                    <div class="bottom">
                        <img class="img6-2" height="200px" width="auto" src="畢專介面/畢專06-2.png" alt="無法顯示"></img>
                        <a href="社群資料.php"><span class="h-2">社群資料</span></a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="container-1">
                    <div class=></div>
                    <div class="bottom">
                        <img src="畢專介面/畢專01-2.png" class="spaceman" id="character1">
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>