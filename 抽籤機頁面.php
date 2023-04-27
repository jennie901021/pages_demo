<!DOCTYPE html>
<html lang="zh-tw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale1=1.0">
  <title>抽籤機</title>
  <style>
    @font-face {
        font-family: "cubic";
        src: url("Cubic_11_1.013_R.ttf") format("opentype");
    }
    body {
      position: absolute;
      background-color: #cdd4f0;
      background-image: url("畢專介面/畢專10.jpg");
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%; 
      z-index: -100;
    }
    .container {
      font-family: "cubic";
      display: flex;
      height: 100vh; /* 設定高度，這裡使用100vh表示佔滿整個視窗高度 */
      width: 200vh;
    }
    .item {
      flex: 30; /* 使用flex: 1來佔據剩餘的空間，將三個區塊平均分佈 */
    }
    .h-1 {
      position: relative;
      color: #3f4577;
      font-size: 24px;
      left: 5%;
      animation: h-1 1.5s ease-in-out infinite alternate;
      /* 返回 */
    }
    @keyframes h-1 {
      0%,
      100% {
          text-shadow: 0 0 20px #3f4577, 0 0 100px #3f4577, 0 0 20px #3f4577;
      }
      50% {
        text-shadow: 0 0 50px #3f4577, 0 0 150px #3f4577, 0 0 50px #3f4577;
      }
    }
    .h-2{
      position: relative;
      color: #3f4577;
      font-size: 40px;
      left: 5%;
      /* 小工具 */
    }
    .h-3{
      position: absolute;
      color:rgb(108, 88, 144);
      letter-spacing: 40px;
      font-size: 50px;
      left: 46%;
      top: 3%;
      /* 抽籤機 */
    }
    .h-4 {
      position: absolute;
      color:rgb(108, 88, 144);
      letter-spacing: 5px;
      font-size: 30px;
      top: 17%;
      /* 抽中 */
    }
    .circle {  
      width: 150px;
      height: 150px;
      border: 2px solid rgb(108, 88, 144);
      border-radius: 50%;
      text-align: center; /* 居中对齐文本 */
      line-height: 150px; /* 让文本在垂直方向上居中 */
      position: absolute; /* 使 ::before 伪元素相对于 .circle 元素定位 */
      bottom: 3%;
      right: 0;
      color:rgb(108, 88, 144);
      font-size: 38px;
      letter-spacing: 5px;
      background-color: transparent;
      font-family: "cubic";
    }
    .circle::before {
      content: ""; /* 设置伪元素的内容为空 */
      display: block; /* 将伪元素设为块级元素，占据一行 */
      width: 100%; /* 伪元素宽度为 100%，与 .circle 元素同宽 */
      height: 100%; /* 伪元素高度为 100%，与 .circle 元素同高 */
      position: absolute; /* 使伪元素绝对定位在 .circle 元素内 */
      top: -2px; /* 将伪元素向上偏移 2px，使其处于边框的内侧 */
      left: -2px; /* 将伪元素向左偏移 2px，使其处于边框的内侧 */
      border: 2px solid rgb(108, 88, 144); /* 伪元素的边框样式 */
      border-radius: 50%; /* 伪元素的圆角半径 */
      /* 抽籤 */
    }
    .textarea {
      position: absolute;
      width: 300px; 
      height: 100px; 
      padding: 10px; 
      border: none;
      background-color: transparent;
      font-size: 45px; 
      color:  rgb(108, 88, 144);
      font-family: "cubic";
      margin-left: 8%;
      margin-top: 37%;
      justify-content: center;
      text-align: center;
    }
    .character {
      position: fixed;
      width: 400px;
      height: 330px;
      margin-top: 13%;
      margin-left: 2%;
      background-size: 120% auto;
      background-repeat: no-repeat;
      background-color: transparent;
      background-image: url("畢專介面/畢專01-2.png");
      -webkit-animation: character 1.1s both;
	    animation: character 1.1s both;
    }
    @-webkit-keyframes character { /*太空人*/
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
    @keyframes bounce-in-top {
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
    a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <script>
      var members = <?php echo json_encode($members); ?>; // 从 PHP 代码中获取人员名单

      function drawWinner() { // 随机抽取一个人员名字
          var winner = members[Math.floor(Math.random() * members.length)];
          document.getElementById('winner').innerHTML =  winner;
      }
  </script>
  <div class="container">
    <div class="item">
      <a href="個別社群大廳.php"><p class="h-1">&larr;返回</p></a>
      <p class="h-2">小工具</p>
    </div>
    <div class="item">
      <h1 class="h-3">抽籤機</h1>
      <h2 class="h-4">抽中的是...</h2>
      <script src="抽籤機.js"></script>
      <div class="character"></div>
      <textarea id="winner" rows="4" class="textarea">中獎者</textarea>
    </div>
    <div class="item">
      <button onclick="drawWinner()" class="circle">抽籤</button>
    </div>
  </div>
  </div>
</body>
</html>
