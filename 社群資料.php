<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>社群資料</title>
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
            background-color: #FFFFFF; 
        }
        .bottom {
            background-color: transparent;
        }
        .fontcontainer{
            display: flex; 
            align-items: center; /* 對齊項目垂直居中 */
            padding: 15px 15px;
            background-color: transparent;
            width: auto;
            z-index: 1;
        }
        .tablecontainer { /*內容物*/
            position: fixed;
            left: 25%;
            top: 23%;
        }
        .bottoncontainter { 
            position: absolute;
            bottom: 17%;
            right: 15%;
            width: 60%;
            height: auto;
            text-align: center;
            z-index: 2;
            background-color: transparent;
        }
        .button {
            display: inline-block;
            background-color: #3f4577;
            border-radius: 20px;
            border:none;
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
            color: #FFFFFF;
            font-family: "cubic";
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
        }
        .h-1-1 {
            position: fixed;
            color: white; 
            letter-spacing: 1px;
            font-weight: 500;
            background-clip: text;
            font-size: 30px;
            left: 3%;
            top: 2%;
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
            /*社群資料*/
            position: fixed;
            color: rgb(108, 88, 144); 
            letter-spacing: 5px;
            background-clip: text;
            font-size: 35px;
            z-index: 2;
            top: 13%;
            left: 25%;
        }
        .h-4{
            color: #3f4577; 
            letter-spacing: 5px;
            font-size: 24px;
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
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <a href="個別社群大廳.php"><span class="h-1-1">&larr;返回</span></a>
        </div>
        <div class="right">
            <div class="spaceman"><img src="畢專介面/畢專01-2.png"></div>
            <div class="frame"><img height="750px" width="1300px" src="畢專介面/畢專06-2.png"></div>           
            <div class="container11">
                <div class="top">
                    <span class="h-2">社群資料</span>
                </div>
                <div class="bottom">
                    <div class="bottoncontainter">
                        <button class="button" style="vertical-align:middle">
                            <a href="javascript:(0)"><span>修改資料</span></a>
                        </button>
                        <button class="button" style="vertical-align:middle">
                            <a href="delect_community.php?community='<?php echo $_GET["community"]?>'"><span>刪除社群</span></a>
                        </button>
                    </div>
                    <table class="tablecontainer">
                        <thead>
                            <tr>
                                <td class="h-4"><div class="fontcontainer">社群名稱：</div></td>
                            </tr>
                            <tr>
                                <td class="h-4"><div class="fontcontainer">社群主辦人：</div></td>
                            </tr>
                                <td class="h-4"><div class="fontcontainer">社群ID：</div></td>
                            </tr>
                            </tr>
                                <td class="h-4"><div class="fontcontainer">社群成員：</div></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require_once 'database.php';
                            $search_value = $_GET["community"];
                            $sql = "SELECT * FROM community WHERE community_id = $search_value";
                            
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $content = '<tr><td>社群名稱：</td><td>'.$row["社群名稱"].'</td></tr>';
                                    $content .= '<tr><td>社群主辦人：</td><td>'.$row["社群主辦人"].'</td></tr>';
                                    // $content .= '<tr><td>成員:</td><td>'.$row["成員"].'</td></tr>';
                                    $arr = explode(',',$row["社群成員"]);
                                    foreach ($arr as $key => $value) {
                                        if ($key == 0) {
                                            $content .= '<tr><td>社群成員：</td><td>'.$value.'</td></tr>';
                                        }
                                        else
                                        {
                                            $content .= '<tr><td></td><td>'.$value.'</td></tr>';
                                        }
                                    }
                                    $content .= '<tr><td></td><td><button onclick="myFunction()">新增成員＋</button></td></tr>';
                                }
                                echo $content;
                            }
                            mysqli_close($conn);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var inputValue = prompt("請輸入成員：");
                var queryString = window.location.search;
                var urlParams = new URLSearchParams(queryString);
                var id = urlParams.get('community');

            if (inputValue != null) {
                fetch('saveInputValue.php', {
                    method: 'POST',
                    body: JSON.stringify({id : id,name: inputValue}),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                    location.reload();
                })
                .catch(error => {
                    console.error('錯誤：', error);
                });
            }
        }
    </script>        
</body>
</html>