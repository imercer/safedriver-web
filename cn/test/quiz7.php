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
        <h2>有大量的汽車一字排開在你身後的，你應該做什麼？</h2>
            <br>
            <br>
        <a href="processor.php?side=<?php echo $_SESSION['sideanswer']?>&speedsign=<?php echo $_SESSION['speedsignanswer']?>&passing=<?php echo $_SESSION['passinganswer']?>&giveway=<?php echo $_SESSION['givewayanswer']?>&units=<?php echo $_SESSION['unitsanswer']?>&passingscenario=<?php echo $_SESSION['passingscenarioanswer']?>&slow=pullleft">
        <div class="tile bg-red" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">保持最左，可以允許車輛通行</span>
        </div>
        </div>
        </div>
        </a>
        <a href="processor.php?side=<?php echo $_SESSION['sideanswer']?>&speedsign=<?php echo $_SESSION['speedsignanswer']?>&passing=<?php echo $_SESSION['passinganswer']?>&giveway=<?php echo $_SESSION['givewayanswer']?>&units=<?php echo $_SESSION['unitsanswer']?>&passingscenario=<?php echo $_SESSION['passingscenarioanswer']?>&slow=wait">
        <div class="tile bg-green" style="padding-left: 25px; float: left">
        <div class="brand bg-black">
            <span class="label fg-white" style="text-align: left">一直走下去，讓汽車與你擦肩而過</span>
        </div>
        </div>
        </div>
        </a>
</body>