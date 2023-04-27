<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>我的社群</title>
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
            -webkit-animation: body 5s ease-out both;
	        animation: body 5s ease-out both;         
        }
        .spaceman {
            position: fixed;
            width: 30%;
            bottom: 50px;
            left: 50%;   
        }
        .container {
            display: flex;
            font-family: "cubic";
        }

        .left {
            flex: 1.5;
            background-color: transparent;
            /* #e0e0e0左側內容的樣式 */
        }
        .right {
            flex: 6;
            background-color: transparent;
            height: 570px;
            /* #e0e0e0右側內容的樣式 */
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
        .frame { /*透明框*/
            position: fixed;
            opacity: 0.5;
            filter: alpha(opacity=50);
            bottom: 1px;
            top: 1px;
            right: 1px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
        }
        .h-2{ /*我的社群*/
            position: fixed;
            color: #3f4577; 
            letter-spacing: 5px;
            background-clip: text;
            font-size: 27px;
            z-index: 2;
            top: 13%;
            left: 25%;
        }
        .h-3{
            position: fixed;
            color: #3f4577; 
            letter-spacing: 5px;
            background-clip: text;
            font-size: 35px;
            z-index: 2;
            top: 13%;
            right: 17%;
        }
        .h-4{ /*故障特效*/
            position: fixed;
            color: #3f4577; 
            letter-spacing: 5px;
            background-clip: text;
            font-size: 35px;
            z-index: 2;
            left: 28%;
            top: 30%;
            -webkit-animation: h-4 2s linear both;
	        animation: h-4 2s linear both;
        }
        @-webkit-keyframes h-4 {
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
        @keyframes h-4 {
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
        .container-1{
            display: grid; /* 將容器設定為 Grid 布局 */
            grid-template-rows: 1fr 3.5fr; /* 設定兩個行，每個行佔據可用空間的比例為 1:1 */
            height: 100vh; /* 設定容器高度為視窗高度，以填滿整個視窗 */
        }
        .top {
            background-color: transparent; /* 可選，設定上半部分的背景顏色 */
        }
        .bottom {
            background-color: transparent; /* 可選，設定下半部分的背景顏色 */
        }
    </style>
    <body>
        <div class="container">
            <div class="left">
                <a href="社群大廳.php"><span class="h-1">社群大廳</span></a>
            </div>
            <div class="right">
                <div class="spaceman"><img src="畢專介面/畢專01-2.png"></div>
                <div class="frame"><img height="750px" width="1300px" src="畢專介面/畢專06-2.png"></div>
                <div class="container-1">
                    <div class="top">
                        <span class="h-2">我的社群</span><span class="h-3">X</span>
                    </div>
                    <div class="bottom">
                        <table clss="list">
                            <tbody class="h-4">
                            <?php
                                require_once 'database.php';

                                $sql = "SELECT * FROM community";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr><td><a href="社群資料.php?community='.$row["community_id"].'">一'.$row["社群名稱"].'</td><a></tr>';
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>          
    </body>
</html>