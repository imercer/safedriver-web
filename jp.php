<?php
$cookie_name = "lang";
$cookie_value = "jp";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day
?>
<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title> <link rel="icon" type="image/png" href="/images/icon.png"/>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/metro.min.js"></script>
        <link rel="stylesheet" href="/css/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body class="metro">
        <div class="container">
        <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <h1 style="color: white">ニュージーランドの道路で安全運転</h1>
    </nav>
</nav>
            <br>
<center style="padding-left: 20px">
        <a href="jp/learn/index.html">
    <div class="tile double bg-cyan" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">学ぶ</span>
        </div>
        </div>
        </div>
        </a>
    <a href="jp/test/index.html">
    <div class="tile double bg-lightOrange" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">テスト</span>
        </div>
        </div>
        </div>
        </a>
    <a href="jp/drive/status.php">
    <div class="tile double bg-lightOlive" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">ドライブ</span>
        </div>
        </div>
        </div>
        </a>
</center>
</body>