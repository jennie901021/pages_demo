<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>新增社群</title>
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
            z-index: -2;   
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
            height: 650px;
        }
        .container1{
            display: grid; /* 將容器設定為 Grid 布局 */
            grid-template-rows: 1fr 3.5fr; /* 設定兩個行，每個行佔據可用空間的比例為 1:1 */
            height: 100vh; /* 設定容器高度為視窗高度，以填滿整個視窗 */
        }
        .top {
            background-color: transparent; 
        }
        .bottom {
            background-color: transparent;
        }
        .formcontainer{
            position: fixed;
            left: 25%;
            top: 29%;
        }
        .inputContainer { /* 文字容器 */
            display: flex; 
            align-items: center; /* 對齊項目垂直居中 */
            padding: 25px 15px;
            background-color: transparent;
            width: auto;
            z-index: 1;
        }
        .label {
            margin-right: 10px; /* 設置文字標籤與輸入框之間的右邊距 */
        }
        .input1 { /*數入框樣式*/
            padding: 8px 15px;
            letter-spacing: 1px;
            border-radius: 10px;
            box-shadow: 0 5px 15px #3f4577(0, 0, 0, 0.05);
            width: 300px;
        }
        /*提交按鈕*/
        .bottomcontainter {
            position: absolute;
            bottom: 17%;
            right: 15%;
            margin-left: -65px;
            margin-top: -20px;
            width: auto;
            height: auto;
            text-align: center;
            z-index: 2;
        }
        .button {
            display: inline-block;
            background-color: #3f4577;
            border-radius: 20px;
            border:none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 10px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }
        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        .button:hover span {
            padding-right: 25px;
        }
        .button:hover span:after {
            opacity: 1;
            right: 0;
        }/*提交按鈕*/
        .h-1{ 
            /*社群大廳*/
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
        .h-2{ 
            /*我的社群*/
            position: fixed;
            color: #3f4577; 
            letter-spacing: 5px;
            background-clip: text;
            font-size: 27px;
            z-index: 2;
            top: 14%;
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
        .h-4{
            color: #3f4577; 
            letter-spacing: 5px;
            font-size: 32px;
            z-index: 2;
        }
        .frame { 
            /*透明框*/
            position: fixed;
            opacity: 0.5;
            filter: alpha(opacity=50);
            bottom: 1px;
            top: 1px;
            right: 1px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <a href="社群大廳.php"><span class="h-1">社群大廳</span></a>
        </div>
        <div class="right">
            <div class="spaceman"><img src="畢專介面/畢專01-2.png"></div>
            <div class="frame"><img height="750px" width="1300px" src="畢專介面/畢專06-2.png"></div>           
            <div class="container11">
                <div class="top">
                    <span class="h-2">建立社群</span><span class="h-3">X</span>
                </div>
                <div class="bottom">
                    <form method="post" action="save_from.php">
                    <div class="bottomcontainter">
                        <button class="button" style="vertical-align:middle">
                            <span>提交</span>
                        </button>
                    </div>
                    <div class="formcontainer">
                            <div class="inputContainer">
                                <label for="name" class="h-4">社群名稱：</label>
                                <input class="input1" type="text" id="name" name="社群名稱" placeholder="請輸入社群名稱">
                            </div>
                            <div class="inputContainer">
                                <label for="host" class="h-4">社群主辦人：</label>
                                <input class="input1" type="text" id="host" name="社群主辦人" placeholder="請輸入主辦人ID">
                            </div>
                            <div class="inputContainer">
                                <label for="member" class="h-4">社群ID：</label>
                                <input class="input1" type="number" id="member" name="社群成員" placeholder="請輸入社群ID">
                            </div>        
                        </div>                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>          
</body>
</html>