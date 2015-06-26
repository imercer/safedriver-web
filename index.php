<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/metro-bootstrap.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/metro.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <style>
    eng {
  background: url(./images/UnitedKingdom.png) no-repeat scroll center top transparent;
  height: 100px;
}    
    </style>
    </head>
<body class="metro" style="padding-left: 20px;">
    <?php
$cookie_name = "lang";
if(isset($_COOKIE[$cookie_name])) {
    $lang = $_COOKIE[$cookie_name];
    echo "<script language = \"javascript\" type=\"text/javascript\">";
    echo "window.location = \"/$lang.php\";";
    echo "</script>";       
}
?>

        <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <h1 style="color: white">Drive Safe on New Zealand Roads</h1>
    </nav>
</nav>
            <br>
<center>
<h1>Select your Language</h1>
    <center>
  <div class="row" style="margin-left: auto; margin-right: auto; width: 80%">
    <div class="col-sm-6">
        <div class="col-xs-6">
            <a href="welcome/en.html"><img class="img-responsive" src="/images/UnitedKingdom.png"/>
            </p>English</a>
        </div>
        <div class="col-xs-6">
            <a href="welcome/cn.html"><img class="img-responsive" src="/images/China.png"/>
            </p>中國</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="col-xs-6">
            <a href="welcome/kr.html"><img class="img-responsive" src="/images/SouthKorea.png"/>
            </p>한국인</a>
        </div>
        <!--
        <div class="col-xs-6">
            <a href="jp.php"><img class="img-responsive" src="/images/Japan.png"/>
            </p>日本人</a>
        </div>
    </div>
    -->
    </div>
   </div>
</center>
</div>
</center>
</body>