<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="/css/metro-bootstrap.css">         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title>
                <link rel="stylesheet" href="/css/metro-bootstrap-responsive.css">
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/metro.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body class="metro" style="padding-left: 20px;">
        <div class="container">
        <nav class="navigation-bar dark">
            <nav class="navigation-bar-content">
                <a href="/index.php" style="color: #FFF"><item class="element">홈</item></a>
        <item class="element-divider"></item>
                <a href="../learn/index.html" style="color: #FFF"><item class="element">알아</item></a>
        <item class="element-divider"></item>
                <a href="../test/index.html" style="color: #FFF"><item class="element">테스트</item></a>     
        <item class="element-divider"></item>
                <a href="../drive/index.html" style="color: #FFF"><item class="element">드라이브</item></a>  
    </nav>
</nav>
            <br>
            <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;퀴즈</h1>
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
                                            echo "<h1>옳은</h1>";
                                            echo "
                                            <br>
                                            <h2>원형 교차로에서 당신은 당신의 오른쪽에있는 모든 트래픽에 방법을 제공합니다.</h2>
                                            <br>
                                            <a href=\"finished.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                            $_SESSION['roundaboutanswer'] = $_GET['roundabout'];
                                            $_SESSION['roundaboutq'] = "Wrong";
                                            echo "<h1>부정확 한</h1>";
                                            echo "
                                            <br>
                                            <h2>원형 교차로에서 당신은 당신의 오른쪽에있는 모든 트래픽에 방법을 제공합니다.</h2>
                                            <br>
                                            <a href=\"finished.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                                            echo "<h1>옳은</h1>";
                                            echo "
                                            <br>
                                            <h2>중지하고 모든 트래픽이 다리에 갈 허용해야합니다</h2>
                                            <br>
                                            <a href=\"quiz10.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                            $_SESSION['onewayanswer'] = $_GET['oneway'];
                                            $_SESSION['onewayq'] = "Wrong";
                                            echo "<h1>부정확 한</h1>";
                                            echo "
                                            <br>
                                            <h2>중지하고 모든 트래픽이 다리에 갈 허용해야합니다</h2>
                                            <br>
                                            <a href=\"quiz10.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                                            echo "<h1>옳은</h1>";
                                            echo "
                                            <br>
                                            <h2>철도 건널목에서 당신은 중지해야하고 모든 철도 교통에 자리를 줘</h2>
                                            <br>
                                            <a href=\"quiz9.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                           $_SESSION['railcrossinganswer'] = $_GET['railcrossing'];
                                            $_SESSION['railcrossingq'] = "Wrong";
                                            echo "<h1>부정확 한</h1>";
                                            echo "
                                            <br>
                                            <h2>철도 건널목에서 당신은 중지해야하고 모든 철도 교통에 자리를 줘</h2>
                                            <br>
                                            <a href=\"quiz9.php\">
                                            <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                            <div class=\"brand bg-black\">
                                                <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                                        echo "<h1>옳은</h1>";
                                        echo "
                                        <br>
                                        <h2>당신의 속도가 다른 차량 속도가 느려집니다 경우, 왼쪽으로 당겨하고 전달할 </h2>
                                        <br>
                                        <a href=\"quiz8.php\">
                                        <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                        <div class=\"brand bg-black\">
                                            <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                                        </div>
                                        </div>
                                        </div>
                                        </a>
                                        ";
                                        } else {
                                        $_SESSION['slowanswer'] = $_GET['slow'];
                                        $_SESSION['slowq'] = "Wrong";
                                        echo "<h1>부정확 한</h1>";
                                        echo "
                                        <br>
                                        <h2>당신의 속도가 다른 차량 속도가 느려집니다 경우, 왼쪽으로 당겨하고 전달할 </h2>
                                        <br>
                                        <a href=\"quiz8.php\">
                                        <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                        <div class=\"brand bg-black\">
                                            <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                                echo "<h1>옳은</h1>";
                                echo "
                                <br>
                                <h2>도로의 중간에 노란색 실선이있을 때 당신은 통과 할 수 없습니다</h2>
                                <br>
                                <a href=\"quiz7.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                                                $_SESSION['passingscenarioanswer'] = $_GET['passingscenario'];
                                $_SESSION['passingscenarioq'] = "Wrong";
                                echo "<h1>부정확 한</h1>";
                                echo "
                                <br>
                                <h2>도로의 중간에 노란색 실선이있을 때 당신은 통과 할 수 없습니다</h2>
                                <br>
                                <a href=\"quiz7.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                                echo "<h1>옳은</h1>";
                                echo "
                                <br>
                                <h2>뉴질랜드에서 우리의 징후 미터에 있습니다. 속도 미터 거리에서 시간과 거리 당 킬로미터로 측정된다</h2>
                                <br>
                                <a href=\"quiz6.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                $_SESSION['unitsanswer'] = $_GET['units'];
                                $_SESSION['unitsq'] = "Wrong";
                                echo "<h1>부정확 한</h1>";
                                echo "
                                <br>
                                <h2>뉴질랜드에서 우리의 징후 미터에 있습니다. 속도 미터 거리에서 시간과 거리 당 킬로미터로 측정된다</h2>
                                <br>
                                <a href=\"quiz6.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                                echo "<h1>옳은</h1>";
                                echo "
                                <br>
                                <h2>당신이 T 교차로 또는 차도에있을 때 뉴질랜드는 직선을 통해 도로에 모든 트래픽에 방법을 제공에서</h2>
                                <br>
                                <a href=\"quiz5.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                               $_SESSION['givewayanswer'] = $_GET['giveway'];
                                $_SESSION['givewayq'] = "Wrong";
                                echo "<h1>부정확 한</h1>";
                                echo "
                                <br>
                                <h2>당신이 T 교차로 또는 차도에있을 때 뉴질랜드는 직선을 통해 도로에 모든 트래픽에 방법을 제공에서</h2>
                                <br>
                                <a href=\"quiz5.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                                echo "<h1>옳은</h1>";
                                echo "
                                <br>
                                <h2>전체 통과 기동을 완료하는 동안 뉴질랜드에서 당신은 분명 도로의 100m가 있어야합니다</h2>
                                <br>
                                <a href=\"quiz4.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                $_SESSION['passinganswer'] = $_GET['passing'];
                                $_SESSION['passingq'] = "Wrong";
                                echo "<h1>부정확 한</h1>";
                                echo "
                                <br>
                                <h2>전체 통과 기동을 완료하는 동안 뉴질랜드에서 당신은 분명 도로의 100m가 있어야합니다</h2>
                                <br>
                                <a href=\"quiz4.php\">
                                <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                                <div class=\"brand bg-black\">
                                    <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                    echo "<h1>옳은</h1>";
                    echo "
                    <br>
                    <h2>뉴질랜드에서는 기호의 최대 속도 제한은 시속 50km 의미</h2>
                    <br>
                    <a href=\"quiz3.php\">
                    <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                    <div class=\"brand bg-black\">
                        <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                 } else {
                    $_SESSION['speedsignanswer'] = $_GET['speedsign'];
                    $_SESSION['signq'] = "Wrong";
                    echo "<h1>부정확 한</h1>";
                    echo "
                    <br>
                    <h2>뉴질랜드에서는 기호의 최대 속도 제한은 시속 50km 의미</h2>
                    <br>
                    <a href=\"quiz3.php\">
                    <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                    <div class=\"brand bg-black\">
                        <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
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
                    echo "<h1>옳은</h1>";
                    echo "
                    <br>
                    <h2>뉴질랜드에서는 도로의 좌측에 이용시</h2>
                        <br>
                    <a href=\"quiz2.php\">
                    <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                    <div class=\"brand bg-black\">
                        <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                 } else {
                    $_SESSION['sideanswer'] = $_GET['side'];
                    $_SESSION['correct'] = 0;
                    $_SESSION['sideq'] = "Wrong";
                    echo "<h1>부정확 한</h1>";
                    echo "
                    <br>
                    <h2>뉴질랜드에서는 도로의 좌측에 이용시</h2>
                        <br>
                    <a href=\"quiz2.php\">
                    <div class=\"tile bg-blue\" style=\"padding-left: 25px; float: left\">
                    <div class=\"brand bg-black\">
                        <span class=\"label fg-white\" style=\"text-align: left\">다음 질문</span>
                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                    }
                }

        } else {

        }