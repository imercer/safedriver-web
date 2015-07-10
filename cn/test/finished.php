<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
        <link rel="stylesheet" href="/css/metro-bootstrap-responsive.css">         <link rel="stylesheet" href="/css/card.css"><link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
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
                <a href="/cn.php" style="color: #FFF"><item class="element">家</item></a>
        <item class="element-divider"></item>
                <a href="../learn/index.html" style="color: #FFF"><item class="element">學習</item></a>
        <item class="element-divider"></item>
                <a href="../test/index.html" style="color: #FFF"><item class="element">測試</item></a>     
        <item class="element-divider"></item>
                <a href="../drive/status.php" style="color: #FFF"><item class="element">驅動器</item></a>  
    </nav>
            </nav>
            <br>
        <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;測驗</h1>
        <br>
        <h2>你有 <?php echo $_SESSION['correct']?>/10糾正</h2>
        <br>
        <?php
        if ($_SESSION['roundaboutq'] == "Wrong") {
            echo "<h2>在環島，你必須讓位於所有的流量在你的右邊</h2>";
            echo "<br>";
        }
        if ($_SESSION['onewayq'] == "Wrong") {
            echo "<h2>在一個車道的橋，你必須讓位於所有迎面而來的車輛，當你看到這種跡象</h2>";
            echo "<img src=\"/images/onelane-giveway.gif\"/>";
            echo "<br>";
        }
        if ($_SESSION['railcrossingq'] == "Wrong") {
            echo "<h2>在一個鐵路過路時，必須停止，並讓路給所有軌道交通</h2>";
            echo "<br>";
        }
        if ($_SESSION['slowq'] == "Wrong") {
            echo "<h2>如果你的速度正在阻礙以下的交通，你必須拉遠左，允許他們通過</h2>";
            echo "<br>";
        }
        if ($_SESSION['passingscenarioq'] == "Wrong") {
            echo "<h2>你不能超車當存在在路中間的黃線</h2>";
            echo "<br>";
        }
        if ($_SESSION['unitsq'] == "Wrong") {
            echo "<h2>新西蘭所有體徵使用公制測量</h2>";
            echo "<br>";
        }
        if ($_SESSION['givewayq'] == "Wrong") {
            echo "<h2>在新西蘭，讓路給所有交通直通道路上，當你在一個T型交叉口或車道</h2><i>記住：頂部的T去我面前.</i>";
            echo "<br><br>";
        }
        if ($_SESSION['passingq'] == "Wrong") {
            echo "<h2>在新西蘭，你必須有清晰的路線百米，而完成整個超車</h2>";
            echo "<br>";
        }
        if ($_SESSION['signq'] == "Wrong") {
            echo "<h2>新西蘭限速標誌的最高允許速度每小時公里</h2>";
            echo "<br>";
        }
        if ($_SESSION['sideq'] == "Wrong") {
            echo "<h2>在新西蘭，我們開車在公路的左側</h2>";
            echo "<br>";
        }
        ?>
            <h2><b>欲了解更多關於新西蘭的道路規則檢查出<a href="/cn/learn/index.html">學習部分</a></ B></ H2>
</body>