<?php
$cookie_name = "lang";
$cookie_value = "en";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title> <link rel="icon" type="image/png" href="/images/icon.png"/>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/materialize.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
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
                  <span class="mdl-layout-title"><a href="/index.php" style="color: #EEE">SafeDriver</a></span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="/learn/index.html" style="color: #EEE">Learn</a>
                    <a class="mdl-navigation__link" href="/test/index.html" style="color: #EEE">Quiz</a>
                    <a class="mdl-navigation__link" href="/drive/status.php" style="color: #EEE"><div class="mdl-badge" data-badge="!">Road Status</div></a>
<!--                     <a class="mdl-navigation__link" href="" style="color: #EEE">Help</a> -->
                    <a class="mdl-navigation__link" href="/settings/" style="color: #EEE">Settings</a>
                </nav>
              </div>
            </div>
            <br>
            <br>
            <br>
            <div class="demo-grid-1 mdl-grid">
                <div class="mdl-cell mdl-cell--4-col">
                    <a href="learn/index.html">
                        <div class="mdl-card mdl-shadow--2dp card-square">
                          <div class="mdl-card__title mdl-card--expand" style="background: bottom right 15% no-repeat rgb(0,175,240)">
                            <h2 class="mdl-card__title-text" style="color: #111; font-weight: bold">Learn</h2>
                          </div>
                          <div class="mdl-card__supporting-text">
                            Learn about the essential rules that exist on New Zealand roads.
                          </div>
                        </div>
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <a href="test/index.html">
                          <div class="mdl-card mdl-shadow--2dp card-square" style="background-colour: blue">
                            <div class="mdl-card__title mdl-card--expand" style="background: bottom right 15% no-repeat rgb(194,144,8)">
                                <h2 class="mdl-card__title-text" style="color: #111; font-weight: bold">Quiz</h2>
                            </div>
                          <div class="mdl-card__supporting-text">
                            Test your knowledge of the rules on New Zealand roads.
                          </div>
                        </div>
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <a href="drive/status.php">
                          <div class="mdl-card mdl-shadow--2dp card-square" style="background-colour: blue">
                            <div class="mdl-card__title mdl-card--expand" style="background: bottom right 15% no-repeat rgb(120,170,28)">
                                <h2 class="mdl-card__title-text" style="color: #111; font-weight: bold">Road Status</h2>
                            </div>
                          <div class="mdl-card__supporting-text">
                            Find out about up to the minute road conditions, status and any major road closures in place.
                          </div>
                        </div>
                    </a>
                </div>
            </div>
    </div>
    </body>
</html>