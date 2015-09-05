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
            <h1><a href="../emergency.php"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;편집 비상 연락처 세부 사항</h1>
            <br>
            <h2>뉴질랜드의 긴급 번호는 <B> 111 </ B></h2>
            <h3>당신이 누군가가 상처 비상 사태에 관여하는 경우 즉시 경찰에 신고</h3>
            <form method="post" action="postdatabase.php">
            당신의 이름 :
            <input type="text" name="name" required>
            <br><br>

            주소 :
            <input type="text" name="address" required>
            <br><br>

            비상 담당자 :
            <input type="text" name="contactperson" required>
            <br><br>

            비상 연락 전화 번호 :
            <input type="text" name="phone" required>
            <br>
            <br>
            <input type="submit" value="저장을">
            </form>
</body>