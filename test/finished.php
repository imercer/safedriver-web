<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="/css/metro-bootstrap.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
        <link rel="stylesheet" href="/css/metro-bootstrap-responsive.css">
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/metro.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body class="metro" style="padding-left: 20px;">
        <div class="container">
        <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <a href="/index.php" style="color: #FFF"><item class="element">Home</item></a>
        <item class="element-divider"></item>
                <a href="../learn/index.html" style="color: #FFF"><item class="element">Learn</item></a>
        <item class="element-divider"></item>
                <a href="../test/index.html" style="color: #FFF"><item class="element">Test</item></a>     
        <item class="element-divider"></item>
                <a href="../drive/index.html" style="color: #FFF"><item class="element">Drive</item></a>  
    </nav>
</nav>
            <br>
        <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;Quiz</h1>
        <br>
        <h2>You got <?php echo $_SESSION['correct']?>/10 Correct</h2>
        <br>
        <?php
        if ($_SESSION['roundaboutq'] == "Wrong") {
            echo "<h2>At a roundabout you must give way to all traffic on your right</h2>";
            echo "<br>";
        }
        if ($_SESSION['onewayq'] == "Wrong") {
            echo "<h2>At a one lane bridge you must give way to all oncoming traffic when you see this sign</h2>";
            echo "<img src=\"/images/onelane-giveway.gif\"/>";
            echo "<br>";
        }
        if ($_SESSION['railcrossingq'] == "Wrong") {
            echo "<h2>At a rail crossing you must STOP and Give way to ALL rail traffic</h2>";
            echo "<br>";
        }
        if ($_SESSION['slowq'] == "Wrong") {
            echo "<h2>If your speed is impeding following traffic you must pull as far left as possible to allow them to pass</h2>";
            echo "<br>";
        }
        if ($_SESSION['passingscenarioq'] == "Wrong") {
            echo "<h2>You Can not pass when there is a solid yellow line on your side of the road</h2>";
            echo "<br>";
        }
        if ($_SESSION['unitsq'] == "Wrong") {
            echo "<h2>All New Zealand signs use metric measurements</h2>";
            echo "<br>";
        }
        if ($_SESSION['givewayq'] == "Wrong") {
            echo "<h2>In New Zealand give way to all traffic on the straight through road when you are at a T intersection or driveway</h2><i>Remember: Top of the T goes before me.</i>";
            echo "<br><br>";
        }
        if ($_SESSION['passingq'] == "Wrong") {
            echo "<h2>In New Zealand you must have 100m of clear road while completing the entire passing manoeuvre</h2>";
            echo "<br>";
        }
        if ($_SESSION['signq'] == "Wrong") {
            echo "<h2>New Zealand Speed Limit signs are Maximum speed permitted in kilometres per hour</h2>";
            echo "<br>";
        }
        if ($_SESSION['sideq'] == "Wrong") {
            echo "<h2>In New Zealand we drive on the left hand side of the road</h2>";
            echo "<br>";
        }
        ?>
            <h2><b>To learn more about rules on New Zealand roads check out the <a href="/learn/index.html">Learn section</a></b></h2>
</body>