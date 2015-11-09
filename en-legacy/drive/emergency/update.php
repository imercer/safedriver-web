<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no" />
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
            <h1><a href="../emergency.php"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;Edit Emergency Contact Details</h1>
            <br>
            <h2>New Zealand's emergency number is <b>111</b></h2>
            <h3>If you are involved in an emergency where someone is hurt call the police immediately</h3>
            <form method="post" action="postdatabase.php">
            Your Name:
            <input type="text" name="name" required>
            <br><br>

            Your Address:
            <input type="text" name="address" required>
            <br><br>

            Emergency Contact Person:
            <input type="text" name="contactperson" required>
            <br><br>

            Emergency Contact Phone Number:
            <input type="text" name="phone" required>
            <br>
            <br>
            <input type="submit" value="Submit">
            </form>
</body>