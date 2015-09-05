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
                <a href="/index.php" style="color: #FFF"><item class="element">Home</item></a>
        <item class="element-divider"></item>
                <a href="../learn/index.html" style="color: #FFF"><item class="element">Learn</item></a>
        <item class="element-divider"></item>
                <a href="../test/index.html" style="color: #FFF"><item class="element">Quiz</item></a>     
        <item class="element-divider"></item>
                <a href="../drive/status.php" style="color: #FFF"><item class="element">Road Status</item></a>  
    </nav>
</nav>
            <br>
            <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;測驗</h1>
            <br>
<?php
session_start();
        if (isset($_GET['side'])) {
            if (isset($_GET['speedsign'])) {
                if (isset($_GET['passing'])) {
                    if (isset($_GET['giveway'])) {
                        if (isset($_GET['units'])) {
                             if (isset($_GET['passingscenario'])) {
                                 if (isset($_GET['slow'])) {
                                     if (isset($_GET['railcrossing'])) {
                                         if (isset($_GET['oneway'])) {
                                             if (isset($_GET['roundabout'])) {
                                                 if ($_GET['roundabout'] == "blue") {
                                            $_SESSION['roundaboutanswer'] = $_GET['roundabout'];
                                            $_SESSION['roundaboutq'] = "Correct";
                                            $_SESSION['correct']++;
                                            echo "<h1>糾正</h1>";
                                            echo "
                                            <br>
                                            <h2>在環島，你必須讓位於所有的流量在你的右邊.</h2>
                                            <br>
                                            <a href=\"finished.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                            $_SESSION['roundaboutanswer'] = $_GET['roundabout'];
                                            $_SESSION['roundaboutq'] = "Wrong";
                                            echo "<h1>不正確</h1>";
                                            echo "
                                            <br>
                                            <h2>在環島，你必須讓位於所有的流量在你的右邊.</h2>
                                            <br>
                                            <a href=\"finished.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            }
                                             } else {
                                             if ($_GET['oneway'] == "giveway") {
                                            $_SESSION['onewayanswer'] = $_GET['oneway'];
                                            $_SESSION['onewayq'] = "Correct";
                                            $_SESSION['correct']++;
                                            echo "<h1>糾正</h1>";
                                            echo "
                                            <br>
                                            <h2>在一個車道的橋，你必須讓位於所有迎面而來的車輛，當你看到這種跡象</h2>
                                            <br>
                                            <a href=\"quiz10.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                            $_SESSION['onewayanswer'] = $_GET['oneway'];
                                            $_SESSION['onewayq'] = "Wrong";
                                            echo "<h1>不正確</h1>";
                                            echo "
                                            <br>
                                            <h2>在一個車道的橋，你必須讓位於所有迎面而來的車輛，當你看到這種跡象</h2>
                                            <br>
                                            <a href=\"quiz10.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            }
                                             }
                                         } else {
                                         if ($_GET['railcrossing'] == "stop") {
                                            $_SESSION['railcrossinganswer'] = $_GET['railcrossing'];
                                            $_SESSION['railcrossingq'] = "Correct";
                                            $_SESSION['correct']++;
                                            echo "<h1>糾正</h1>";
                                            echo "
                                            <br>
                                            <h2>在一個車道的橋，你必須讓位於所有迎面而來的車輛，當你看到這種跡象</h2>
                                            <br>
                                            <a href=\"quiz9.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                           $_SESSION['railcrossinganswer'] = $_GET['railcrossing'];
                                            $_SESSION['railcrossingq'] = "Wrong";
                                            echo "<h1>不正確</h1>";
                                            echo "
                                            <br>
                                            <h2>在一個車道的橋，你必須讓位於所有迎面而來的車輛，當你看到這種跡象</h2>
                                            <br>
                                            <a href=\"quiz9.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            }
                                         }
                                     } else {
                                     if ($_GET['slow'] == "pullleft") {
                                        $_SESSION['slowanswer'] = $_GET['slow'];
                                        $_SESSION['slowq'] = "Correct";
                                        $_SESSION['correct']++;
                                        echo "<h1>糾正</h1>";
                                        echo "
                                        <br>
                                        <h2>如果你的速度正在阻礙以下的交通，你必須拉遠左，允許他們通過</h2>
                                        <br>
                                        <a href=\"quiz8.php\">
                                        <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                        <div class=\"brand bg-black\">
                                            <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                        </div>
                                        </div>
                                        </div>
                                        </a>
                                        ";
                                        } else {
                                        $_SESSION['slowanswer'] = $_GET['slow'];
                                        $_SESSION['slowq'] = "Wrong";
                                        echo "<h1>不正確</h1>";
                                        echo "
                                        <br>
                                        <h2>如果你的速度正在阻礙以下的交通，你必須拉遠左，允許他們通過</h2>
                                        <br>
                                        <a href=\"quiz8.php\">
                                        <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                        <div class=\"brand bg-black\">
                                            <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                        </div>
                                        </div>
                                        </div>
                                        </a>
                                        ";
                                     }
                                     }
                                 } else {
                                 if ($_GET['passingscenario'] == "no") {
                                $_SESSION['passingscenarioanswer'] = $_GET['passingscenario'];
                                $_SESSION['passingscenarioq'] = "Correct";
                                $_SESSION['correct']++;
                                echo "<h1>糾正</h1>";
                                echo "
                                <br>
                                <h2>你不能超車當存在在路中間的黃線</h2>
                                <br>
                                <a href=\"quiz7.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                                                $_SESSION['passingscenarioanswer'] = $_GET['passingscenario'];
                                $_SESSION['passingscenarioq'] = "Wrong";
                                echo "<h1>不正確</h1>";
                                echo "
                                <br>
                                <h2>你不能超車當存在在路中間的黃線</h2>
                                <br>
                                <a href=\"quiz7.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } 
                                 }
                             } else {
                                if ($_GET['units'] == "metric") {
                                $_SESSION['unitsanswer'] = $_GET['units'];
                                $_SESSION['unitsq'] = "Correct";
                                $_SESSION['correct']++;
                                echo "<h1>糾正</h1>";
                                echo "
                                <br>
                                <h2>新西蘭所有體徵使用公制測量</h2>
                                <br>
                                <a href=\"quiz6.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                $_SESSION['unitsanswer'] = $_GET['units'];
                                $_SESSION['unitsq'] = "Wrong";
                                echo "<h1>不正確</h1>";
                                echo "
                                <br>
                                <h2>新西蘭所有體徵使用公制測量</h2>
                                <br>
                                <a href=\"quiz6.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                            }
                        }
                        }
                        else
                        {
                        if ($_GET['giveway'] == "blue") {
                                $_SESSION['givewayanswer'] = $_GET['giveway'];
                                $_SESSION['givewayq'] = "Correct";
                                $_SESSION['correct']++;
                                echo "<h1>糾正</h1>";
                                echo "
                                <br>
                                <h2>在新西蘭，讓路給所有交通直通道路上，當你在一個T型交叉口或車道</h2>
                                <br>
                                <a href=\"quiz5.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                               $_SESSION['givewayanswer'] = $_GET['giveway'];
                                $_SESSION['givewayq'] = "Wrong";
                                echo "<h1>不正確</h1>";
                                echo "
                                <br>
                                <h2>在新西蘭，讓路給所有交通直通道路上，當你在一個T型交叉口或車道</h2>
                                <br>
                                <a href=\"quiz5.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                            }
                        }
                        } else {
                            if ($_GET['passing'] == "100m") {
                                $_SESSION['passinganswer'] = $_GET['passing'];
                                $_SESSION['correct']++;
                                $_SESSION['passingq'] = "Correct";
                                echo "<h1>糾正</h1>";
                                echo "
                                <br>
                                <h2>在新西蘭，你必須有清晰的路線百米，而完成整個超車</h2>
                                <br>
                                <a href=\"quiz4.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                $_SESSION['passinganswer'] = $_GET['passing'];
                                $_SESSION['passingq'] = "Wrong";
                                echo "<h1>不正確</h1>";
                                echo "
                                <br>
                                <h2>在新西蘭，你必須有清晰的路線百米，而完成整個超車</h2>
                                <br>
                                <a href=\"quiz4.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                                }
                } } else {
                if ($_GET['speedsign'] == "max50") {
                    $_SESSION['speedsignanswer'] = $_GET['speedsign'];
                    $_SESSION['signq'] = "Correct";
                    $_SESSION['correct']++;
                    echo "<h1>糾正</h1>";
                    echo "
                    <br>
                    <h2>新西蘭限速標誌的最高允許速度每小時公里</h2>
                    <br>
                    <a href=\"quiz3.php\">
                    <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                    <div class=\"brand bg-black\">
                        <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                 } else {
                    $_SESSION['speedsignanswer'] = $_GET['speedsign'];
                    $_SESSION['signq'] = "Wrong";
                    echo "<h1>不正確</h1>";
                    echo "
                    <br>
                    <h2>新西蘭限速標誌的最高允許速度每小時公里</h2>
                    <br>
                    <a href=\"quiz3.php\">
                    <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                    <div class=\"brand bg-black\">
                        <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                    }
                }
            } else {
                if ($_GET['side'] == "left") {
                    $_SESSION['sideanswer'] = $_GET['side'];
                    $_SESSION['sideq'] = "Correct";
                    $_SESSION['correct'] = 0;
                    $_SESSION['correct']++;
                    echo "<h1>糾正</h1>";
                    echo "
                    <br>
                    <h2>在新西蘭，我們開車在公路的左側</h2>
                        <br>
                    <a href=\"quiz2.php\">
                    <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                    <div class=\"brand bg-black\">
                        <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                 } else {
                    $_SESSION['sideanswer'] = $_GET['side'];
                    $_SESSION['correct'] = 0;
                    $_SESSION['sideq'] = "Wrong";
                    echo "<h1>不正確</h1>";
                    echo "
                    <br>
                    <h2>在新西蘭，我們開車在公路的左側</h2>
                        <br>
                    <a href=\"quiz2.php\">
                    <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                    <div class=\"brand bg-black\">
                        <span class=\"label fg-white\" style=\"text-align: left\">下一個問題</span>
                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                    }
                }

        } else {

        }