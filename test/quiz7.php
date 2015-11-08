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
            <div class="card" style="width: 80%">    <div class="content">
                <span class="title">There are a large number of cars lined up behind you, what should you do?</span>
            <br>
            <br>
                </div>
                <div class="action"> <center>
            <a href="processor.php?side=<?php echo $_SESSION['sideanswer']?>&speedsign=<?php echo $_SESSION['speedsignanswer']?>&passing=<?php echo $_SESSION['passinganswer']?>&giveway=<?php echo $_SESSION['givewayanswer']?>&units=<?php echo $_SESSION['unitsanswer']?>&passingscenario=<?php echo $_SESSION['passingscenarioanswer']?>&slow=pullleft">Keep as far left as possible to allow vehicles to pass</a>
                    
                    <a href="processor.php?side=<?php echo $_SESSION['sideanswer']?>&speedsign=<?php echo $_SESSION['speedsignanswer']?>&passing=<?php echo $_SESSION['passinganswer']?>&giveway=<?php echo $_SESSION['givewayanswer']?>&units=<?php echo $_SESSION['unitsanswer']?>&passingscenario=<?php echo $_SESSION['passingscenarioanswer']?>&slow=wait">Wait for vehicles to overtake you</a>
            </div>
</body>