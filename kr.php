<?php
$cookie_name = "lang";
$cookie_value = "kr";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day
?>
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/metro.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body class="metro">
        <div class="container">
        <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <h1 style="color: white">뉴질랜드 도로에서 안전 운전</h1>
    </nav>
</nav>
            <br>
<center style="padding-left: 20px">
        <a href="kr/learn/index.html">
    <div class="tile double bg-cyan" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">알아보기</span>
        </div>
        </div>
        </div>
        </a>
    <a href="kr/test/index.html">
    <div class="tile double bg-lightOrange" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">테스트</span>
        </div>
        </div>
        </div>
        </a>
    <a href="kr/drive/status.php">
    <div class="tile double bg-lightOlive" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">드라이브</span>
        </div>
        </div>
        </div>
        </a>
</center>
</body>