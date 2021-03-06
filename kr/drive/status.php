<!DOCTYPE html>
<html>
    <head><script src="/js/analytics.js"></script>        <script src="/drive/speed.js"></script><meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>안전 운전</title> <link rel="icon" type="image/png" href="/images/icon.png"/>
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">        <script src="/geolocation/notify.js"></script>
                <style>
            .twitter-timeline {
                height: 6900px !important; 
            }
        </style>
    </head>
    <body>
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
              <header class="mdl-layout__header" style="background-color: rgb(51,51,51); position: fixed">
                <div class="mdl-layout__header-row">
                  <!-- Title -->
                  <span class="mdl-layout-title">도로 상황</span>
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
                  <span class="mdl-layout-title"><a href="/kr.html" style="color: #EEE">안전 운전</a></span>
                <nav class="mdl-navigation">
                     <a class="mdl-navigation__link" href="/kr/learn/index.html" style="color: #EEE">알아보기</a>
                    <a class="mdl-navigation__link" href="/kr/drive/status.php" style="color: #EEE"><div class="mdl-badge" data-badge="!">도로 상황</div></a>
                    <a class="mdl-navigation__link" href="/kr/settings/" style="color: #EEE">구성</a>
                </nav>
              </div>
            </div>
        <br>
        <br>
        <?php
            $msgfile = '/var/www/drivesafe/push/androidmsg';
            if (file_exists($msgfile)) {
                $pendingalert = file_get_contents($msgfile);
                if (isset($pendingalert)) {
                    echo "
                    <div style=\"background-color: rgba(255,58,0,0.85); width: 100%; height: auto; max-height:40%; color: #EEE\">
                    <br>
                    <center>
                    <h6>$pendingalert</h6></center>
                    <br>
                    </div>"; }
                else { 
                    echo "";
                }
            } else {
                echo "";
            }
        ?>
           
            <br>
            <br>
            <center>
            <a class="twitter-timeline" href="https://twitter.com/SafeDriverApp" data-widget-id="592239194820386817">Road Status Unavailable</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </center>
    </body>