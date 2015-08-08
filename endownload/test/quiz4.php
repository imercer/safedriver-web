<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="../css/metro-bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>SafeDriver - Drive Safe on New Zealand Roads</title> <link rel="icon" type="image/png" href="../images/icon.png"/>
        <script src="../js/jquery/jquery.min.js"></script>
        <script src="../js/jquery/jquery.widget.min.js"></script>
        <script src="../js/materialize.js"></script>
        <link rel="stylesheet" href="../css/jquery-ui.css">
        <script src="../js/jquery-1.10.2.js"></script>
        <script src="../js/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="../css/card.css"/>
        <!-- Material Design Lite -->
        <script src="../js/material.min.js"></script>
        <link rel="stylesheet" href="../css/material.indigo-red.min.css">
        <!-- Material Design icon font -->
        <link rel="stylesheet" href="../css/icon.css">
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
                    <a class="mdl-navigation__link" href="../">Link</a>
                    <a class="mdl-navigation__link" href="../">Link</a>
                    <a class="mdl-navigation__link" href="../">Link</a>
                    <a class="mdl-navigation__link" href="../">Link</a>
                  </nav>
                     -->
                </div>
              </header>
              <div class="mdl-layout__drawer" style="background-color: rgb(51,51,51); border: 0; height: 100%; position: fixed">
                  <span class="mdl-layout-title"><a href="../en.html" style="color: #EEE">SafeDriver</a></span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="../learn/index.html" style="color: #EEE">Learn</a>
                    <a class="mdl-navigation__link" href="../test/index.html" style="color: #EEE">Quiz</a>
                    <a class="mdl-navigation__link" href="../drive/status.html" style="color: #EEE">Road Status</a>
<!--                     <a class="mdl-navigation__link" href="../" style="color: #EEE">Help</a> -->
                    <a class="mdl-navigation__link" href="../settings/index.html" style="color: #EEE">Settings</a>
                </nav>
              </div>
            </div>
        <br>
        <br>
        <br>
        <br>
        <center>
            <div class="card" style="width: 80%">    <center>            <img src="../images/q174.jpg">
</center><div class="content">
                <span class="title">Who needs to give way in this scenario?</span>
            <br>
            <br>
                </div>
                <div class="action"> <center>
            <a href="../processor.php?side=<?php echo $_SESSION['sideanswer']?>&speedsign=<?php echo $_SESSION['speedsignanswer']?>&passing=<?php echo $_SESSION['passinganswer']?>&giveway=red">Red Car</a>
            <a href="../processor.php?side=<?php echo $_SESSION['sideanswer']?>&speedsign=<?php echo $_SESSION['speedsignanswer']?>&passing=<?php echo $_SESSION['passinganswer']?>&giveway=blue">Blue Car</a>
            </div>
        </div>
</body>