<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, target-densitydpi=high-dpi, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="/css/metro-bootstrap.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
        <link rel="stylesheet" href="/css/metro-bootstrap-responsive.css">         <link rel="stylesheet" href="/css/card.css"><link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/speed.js"></script>        <script src="/js/metro.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body class="metro">
        <div class="container">
        <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <a href="/index.php" style="color: #FFF"><item class="element">Home</item></a>
        <item class="element-divider"></item>
                <a href="../learn/index.html" style="color: #FFF"><item class="element">Learn</item></a>
        <item class="element-divider"></item>
                <a href="../test/index.html" style="color: #FFF"><item class="element">Test</item></a>     
        <item class="element-divider"></item>
                <a href="../drive/status.php" style="color: #FFF"><item class="element">Road Status</item></a>  
    </nav>
</nav>
            <br>
        <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;Quiz</h1><center><div class="card" style="width: 80%">    <div class="content">
        <br>
        <span class="title">What must you do at a rail crossing?</span>
            <br>
            <br>
                    </div>
                <div class="action"> <center>
                    <a href="processor.php?side=<?php echo $_SESSION['sideanswer']?>&speedsign=<?php echo $_SESSION['speedsignanswer']?>&passing=<?php echo $_SESSION['passinganswer']?>&giveway=<?php echo $_SESSION['givewayanswer']?>&units=<?php echo $_SESSION['unitsanswer']?>&passingscenario=<?php echo $_SESSION['passingscenarioanswer']?>&slow=<?php echo $_SESSION['slowanswer']?>&railcrossing=proceed">Unless there are bells sounding proceed through the crossing</a>
                    <br>
                    <br>
            <a href="processor.php?side=<?php echo $_SESSION['sideanswer']?>&speedsign=<?php echo $_SESSION['speedsignanswer']?>&passing=<?php echo $_SESSION['passinganswer']?>&giveway=<?php echo $_SESSION['givewayanswer']?>&units=<?php echo $_SESSION['unitsanswer']?>&passingscenario=<?php echo $_SESSION['passingscenarioanswer']?>&slow=<?php echo $_SESSION['slowanswer']?>&railcrossing=stop">Stop and ensure there is no rail traffic</a>
            </div>
        </div>
</body>