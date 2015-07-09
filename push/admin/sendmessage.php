<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
                <link rel="stylesheet" href="/css/metro-bootstrap-responsive.css">         <link rel="stylesheet" href="/css/card.css"><link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/metro.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body class="metro">
        <div class="container">
         <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <h1 style="color: white">Road Status Safe on New Zealand Roads</h1>
    </nav>
</nav>
            <br>
            <h1><a href="index.php"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;Send a Message</h1>
                <b>Message Type: </b><?php echo $_GET['ref'];?>
                <br>
                <form method="get" action="<?php echo $_GET['ref'];?>.php"><b>Message Text: </b><textarea name="message" rows="10" cols="30">
</textarea>
                                    <br>
<input type="submit" value="Submit">
                </form>
</body>