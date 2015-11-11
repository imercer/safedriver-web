<!DOCTYPE html>
<html>
        <head><script src="/js/analytics.js"></script>        <script src="/drive/speed.js"></script><meta name="viewport" content="width=device-width, target-densitydpi=high-dpi, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><script src="/js/analytics.js"></script>        <script src="/drive/speed.js"></script><meta name="viewport" content="width=device-width, target-densitydpi=high-dpi, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
                <a href="/index.php" style="color: #FFF"><item class="element">홈</item></a>
        <item class="element-divider"></item>
                <a href="../learn/index.html" style="color: #FFF"><item class="element">알아</item></a>
        <item class="element-divider"></item>
                <a href="../test/index.html" style="color: #FFF"><item class="element">테스트</item></a>     
        <item class="element-divider"></item>
                <a href="../drive/status.php" style="color: #FFF"><item class="element">드라이브</item></a>  
    </nav>
</nav>
            <br>
            <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;비상 연락처 세부 사항</h1>
            <br>
            <h2>뉴질랜드의 긴급 번호는 <B> 111 </ B></h2>
            <h3>당신이 누군가가 상처 비상 사태에 관여하는 경우 즉시 경찰에 신고</h3>
            <br>
            <?php
            $cookiename = "name";
            if(!isset($_COOKIE[$cookiename])) {
            echo "<h3><i>당신은 어떤 비상 연락처를 정의하지 않은, 아래에 이렇게하십시오</i></h3>";
            } else {
            echo "
            <h3>이름:</h3>
            $_COOKIE[name]
            <br><h3>주소:</h3>
            $_COOKIE[address]
            <br><h3>담당자 :</h3>
            $_COOKIE[contactperson]
            <br><h3>연락 번호 :</h3>
            $_COOKIE[phone]
            "; 
            }
            ?>
            <br>
            <br>
            <br>
            <a href="emergency/update.php">업데이트 정보</a>
</body>