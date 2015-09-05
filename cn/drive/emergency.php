<!DOCTYPE html>
<html>
        <head><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title> <link rel="icon" type="image/png" href="/images/icon.png"/>
                <link rel="stylesheet" href="/css/metro-bootstrap-responsive.css">         <link rel="stylesheet" href="/css/card.css"><link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/metro.min.js"></script>
        <link rel="stylesheet" href="/css/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body class="metro">
        <div class="container">
         <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <a href="/cn.php" style="color: #FFF"><item class="element">家</item></a>
        <item class="element-divider"></item>
                <a href="../learn/index.html" style="color: #FFF"><item class="element">學習</item></a>
        <item class="element-divider"></item>
                <a href="../test/index.html" style="color: #FFF"><item class="element">測試</item></a>     
        <item class="element-divider"></item>
                <a href="../drive/status.php" style="color: #FFF"><item class="element">驅動器</item></a>  
    </nav>
            </nav>
            <br>
            <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;緊急聯繫方式</h1>
            <br>
            <h2>新西蘭緊急救援號碼是<B>111</ B></h2>
            <h3>在緊急呼叫警察的事件或有關當局</h3>
            <br>
            <?php
            $cookiename = "name";
            if(!isset($_COOKIE[$cookiename])) {
            echo "<h3><i>你還沒有分配的聯繫方式，請在下面輸入他們為他們出現在這裡</i></h3>";
            } else {
            echo "
            <h3>名字:</h3>
            $_COOKIE[name]
            <br><h3>地址:</h3>
            $_COOKIE[address]
            <br><h3>聯絡人:</h3>
            $_COOKIE[contactperson]
            <br><h3>聯繫電話:</h3>
            $_COOKIE[phone]
            "; 
            }
            ?>
            <br>
            <br>
            <a href="emergency/update.php">更新詳細信息</a>
</body>