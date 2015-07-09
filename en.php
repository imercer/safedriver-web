<?php
$cookie_name = "lang";
$cookie_value = "en";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/metro-bootstrap.css"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/materialize.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body class="metro">
        <div class="container">
        <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <h1 style="color: white">Drive Safe on New Zealand Roads</h1>
    </nav>
</nav>
            <br>
<center>
    <a href="learn/index.html">
    <div class="tile double bg-blue" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">Learn</span>
        </div>
        </div>
        </div>
        </a>
    <a href="test/index.html">
    <div class="tile double bg-lightOrange" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">Test</span>
        </div>
        </div>
        </div>
        </a>
    <a href="drive/index.html">
    <div class="tile double bg-lightOlive" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">Drive</span>
        </div>
        </div>
        </div>
        </a>
    </div>
</center>
</body>