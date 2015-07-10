<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
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
        <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;퀴즈</h1>
        <br>
        <h2>당신이가지고 <?php echo $_SESSION['correct']?>/ 10 정확한</h2>
        <br>
        <?php
        if ($_SESSION['roundaboutq'] == "Wrong") {
            echo "<h2>원형 교차로에서 당신은 당신의 오른쪽에있는 모든 트래픽에 방법을 제공합니다</h2>";
            echo "<br>";
        }
        if ($_SESSION['onewayq'] == "Wrong") {
            echo "<h2>중지하고 모든 트래픽이 다리에 갈 허용해야합니다</h2>";
            echo "<img src=\"/images/onelane-giveway.gif\"/>";
            echo "<br>";
        }
        if ($_SESSION['railcrossingq'] == "Wrong") {
            echo "<h2>철도 건널목에서 당신은 중지해야하고 모든 철도 교통에 자리를 줘</h2>";
            echo "<br>";
        }
        if ($_SESSION['slowq'] == "Wrong") {
            echo "<h2>당신의 속도가 다른 차량 속도가 느려집니다 경우, 왼쪽으로 당겨하고 전달할 </h2>";
            echo "<br>";
        }
        if ($_SESSION['passingscenarioq'] == "Wrong") {
            echo "<h2>도로의 중간에 노란색 실선이있을 때 당신은 통과 할 수 없습니다</h2>";
            echo "<br>";
        }
        if ($_SESSION['unitsq'] == "Wrong") {
            echo "<h2>뉴질랜드에서 우리의 징후 미터에 있습니다. 속도 미터 거리에서 시간과 거리 당 킬로미터로 측정된다</h2>";
            echo "<br>";
        }
        if ($_SESSION['givewayq'] == "Wrong") {
            echo "<h2>당신이 T 교차로 또는 차도에있을 때 뉴질랜드는 직선을 통해 도로에 모든 트래픽에 방법을 제공에서</h2>";
            echo "<br><br>";
        }
        if ($_SESSION['passingq'] == "Wrong") {
            echo "<h2>전체 통과 기동을 완료하는 동안 뉴질랜드에서 당신은 분명 도로의 100m가 있어야합니다</h2>";
            echo "<br>";
        }
        if ($_SESSION['signq'] == "Wrong") {
            echo "<h2>뉴질랜드에서는 기호의 최대 속도 제한은 시속 50km 의미</h2>";
            echo "<br>";
        }
        if ($_SESSION['sideq'] == "Wrong") {
            echo "<h2>뉴질랜드에서는 도로의 좌측에 이용시</h2>";
            echo "<br>";
        }
        ?>
            <h2><b>뉴질랜드 도로 규칙에 대한 자세한 내용은 밖으로 확인 <a href="/kr/learn/index.html">배우 섹션에서</a></b></h2>
</body>