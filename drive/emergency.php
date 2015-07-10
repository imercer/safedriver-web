<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/materialize.js"></script>
        <link rel="stylesheet" href="/css/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
                  <span class="mdl-layout-title">SafeDriver</span>
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
                <span class="mdl-layout-title">SafeDriver</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="/learn/index.html" style="color: #EEE">Learn</a>
                    <a class="mdl-navigation__link" href="/test/index.html" style="color: #EEE">Quiz</a>
                    <a class="mdl-navigation__link" href="/drive/status.php" style="color: #EEE"><div class="mdl-badge" data-badge="!">Road Status</div></a>
                    <a class="mdl-navigation__link" href="" style="color: #EEE">Help</a>
                    <a class="mdl-navigation__link" href="/settings/" style="color: #EEE">Settings</a>
                </nav>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        <h1>Oohhh Spoooky! This page has been abandoned.</h1><br>
        <h2>For some reason you can see it. Please use the help section to report this error to the developer, its a shame you had to see this.</h2><br>
        <h3>abandonerror/emergency.php</h3><br><br>            <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;Emergency Contact Details</h1>
            <br>
            <h2>New Zealand's emergency number is <b>111</b></h2>
            <h3>If you are involved in an emergency where someone is injured call the police immediately</h3>
            <br>
            <?php
            $cookiename = "name";
            if(!isset($_COOKIE[$cookiename])) {
            echo "<h3><i>You have not defined any emergency contact details, please do this below</i></h3>";
            } else {
            echo "
            <h3>Name:</h3>
            $_COOKIE[name]
            <br><h3>Address:</h3>
            $_COOKIE[address]
            <br><h3>Contact Person:</h3>
            $_COOKIE[contactperson]
            <br><h3>Contact Number:</h3>
            $_COOKIE[phone]
            "; 
            }
            ?>
            <br>
            <br>
            <br>
            <a href="emergency/update.php">Update Details</a>
</body>