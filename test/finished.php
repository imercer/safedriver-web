<?php
session_start();
?>
<!DOCTYPE html>
<html>
            <head><script src="/js/analytics.js"></script>        <script src="/drive/speed.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><script src="/js/analytics.js"></script>        <script src="/drive/speed.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="/css/metro-bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>SafeDriver - Drive Safe on New Zealand Roads</title> <link rel="icon" type="image/png" href="/images/icon.png"/>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/materialize.js"></script>
        <link rel="stylesheet" href="/css/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/css/card.css"/>
        <!-- Material Design Lite -->
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-red.min.css">
        <!-- Material Design icon font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
              <header class="mdl-layout__header" style="background-color: rgb(51,51,51); position: fixed">
                <div class="mdl-layout__header-row">
                  <!-- Title -->
                  <span class="mdl-layout-title">Quiz</span>
                  <!-- Add spacer, to align navigation to the right -->
                  <div class="mdl-layout-spacer"></div>
                  <!-- Navigation. We hide it in small screens.
                  <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                  </nav>
                     -->
                </div>
              </header>
              <div class="mdl-layout__drawer" style="background-color: rgb(51,51,51); border: 0; height: 100%; position: fixed">
                  <span class="mdl-layout-title"><a href="/index.php" style="color: #EEE">SafeDriver</a></span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="/learn/index.html" style="color: #EEE">Learn</a>

                    <a class="mdl-navigation__link" href="/drive/status.php" style="color: #EEE"><div class="mdl-badge" data-badge="!">Road Status</div></a>

                    <a class="mdl-navigation__link" href="/settings/" style="color: #EEE">Settings</a>
                </nav>
              </div>
            </div>
        <br>
        <br>
        <br>
        <br>
        <center>
            <div class="card" style="width: 80%"><div class="content" style="text-align: left">
                <span class="title"><h1>You got <?php echo $_SESSION['correct']?>/10 Correct</h1></span>
        <?php
        if ($_SESSION['roundaboutq'] == "Wrong") {
            echo "<h4>At a roundabout you must give way to all traffic on your right</h4>";
            echo "<br>";
        }
        if ($_SESSION['onewayq'] == "Wrong") {
            echo "<h4>At a one lane bridge you must give way to all oncoming traffic when you see this sign</h4>";
            echo "<img src=\"/images/onelane-giveway.gif\"/>";
            echo "<br>";
        }
        if ($_SESSION['railcrossingq'] == "Wrong") {
            echo "<h4>You must stop and give way to all railway traffic before proceeding across the level crossing. If the barrier arms are lowered or the alarms are sounding you must wait until they stop before proceeding across the crossing, even if you can't see a train.</h4>";
            echo "<br>";
        }
        if ($_SESSION['slowq'] == "Wrong") {
            echo "<h4>If your speed is impeding following traffic you must pull as far left as possible to allow them to pass</h4>";
            echo "<br>";
        }
        if ($_SESSION['passingscenarioq'] == "Wrong") {
            echo "<h4>You Can not pass when there is a solid yellow line on your side of the road</h4>";
            echo "<br>";
        }
        if ($_SESSION['unitsq'] == "Wrong") {
            echo "<h4>All New Zealand signs use metric measurements</h4>";
            echo "<br>";
        }
        if ($_SESSION['givewayq'] == "Wrong") {
            echo "<h4>In New Zealand give way to all traffic on the straight through road when you are at a T intersection or driveway</h4><i>Remember: Top of the T goes before me.</i>";
            echo "<br><br>";
        }
        if ($_SESSION['passingq'] == "Wrong") {
            echo "<h4>In New Zealand you must have 100m of clear road while completing the entire passing manoeuvre</h4>";
            echo "<br>";
        }
        if ($_SESSION['signq'] == "Wrong") {
            echo "<h4>New Zealand Speed Limit signs are Maximum speed permitted in kilometres per hour</h4>";
            echo "<br>";
        }
        if ($_SESSION['sideq'] == "Wrong") {
            echo "<h4>In New Zealand we drive on the left hand side of the road</h4>";
            echo "<br>";
        }
        ?>
                <br>
            <h3><b>To learn more about rules on New Zealand roads check out the <a href="/learn/index.html">Learn section</a></b></h3>
</body>