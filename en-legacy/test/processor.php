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
            <h1><a href="index.html"><img src="/images/Metro-Back-256.png" width="42px"></a>&nbsp;Quiz</h1><center>
            <br>
            <center>
            <div class="card" style="width: 90%; margin:0 auto; text-align: left">
  <div class="content">
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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                                            echo "
                                            <br>
                                            <h2>At a roundabout you must give way to all vehicles to your right.</h2>
                                            <br>
                                                            <div class=\"action\"><center><a href=\"finished.php\">
                                            Finished
                                            </a>

                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                            $_SESSION['roundaboutanswer'] = $_GET['roundabout'];
                                            $_SESSION['roundaboutq'] = "Wrong";
                        echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                                            echo "
                                            <br>
                                            <h2>At a roundabout you must give way to all vehicles to your right.</h2>
                                            <br>
                                                            <div class=\"action\"><center><a href=\"finished.php\">
                                            Finished                                            </a>

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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                                            echo "
                                            <br>
                                            <h2>You must stop and give way to all opposing traffic on and approaching the bridge</h2>
                                            <br>
                                                            <div class=\"action\"><center><a href=\"quiz10.php\">
                                            Next Question
                                            </a>

                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                            $_SESSION['onewayanswer'] = $_GET['oneway'];
                                            $_SESSION['onewayq'] = "Wrong";
                        echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                                            echo "
                                            <br>
                                            <h2>You must stop and give way to all opposing traffic on and approaching the bridge</h2>
                                            <br>
                                                            <div class=\"action\"><center><a href=\"quiz10.php\">
                                            Next Question
                                            </a>

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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                                            echo "
                                            <br>
                                            <h2>You must stop and give way to ALL railway traffic before proceeding across the level crossing</h2>
                                            <br>
                                                            <div class=\"action\"><center><a href=\"quiz9.php\">
                                            Next Question
                                            </a>

                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            ";
                                            } else {
                                           $_SESSION['railcrossinganswer'] = $_GET['railcrossing'];
                                            $_SESSION['railcrossingq'] = "Wrong";
                        echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                                            echo "
                                            <br>
                                            <h2>You must STOP and give way to ALL railway traffic before proceeding across the level crossing</h2>
                                            <br>
                                                            <div class=\"action\"><center><a href=\"quiz9.php\">
                                            Next Question
                                            </a>

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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                                        echo "
                                        <br>
                                        <h2>If your speed is impeding following traffic you must pull as far left as possible to allow them to pass</h2>
                                        <br>
                                                        <div class=\"action\"><center><a href=\"quiz8.php\">
                                        Next Question
                                        </a>
                    
                                        </div>
                                        </div>
                                        </div>
                                        </a>
                                        ";
                                        } else {
                                        $_SESSION['slowanswer'] = $_GET['slow'];
                                        $_SESSION['slowq'] = "Wrong";
                    echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                                        echo "
                                        <br>
                                        <h2>If your speed is impeding following traffic you must pull as far left as possible to allow them to pass</h2>
                                        <br>
                                                        <div class=\"action\"><center><a href=\"quiz8.php\">
                                        Next Question
                                        </a>
                    
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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                                echo "
                                <br>
                                <h2>You can not pass on a solid yellow line</h2>
                                <br>
                                                <div class=\"action\"><center><a href=\"quiz7.php\">
                                Next Question
                                </a>
            
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                                                $_SESSION['passingscenarioanswer'] = $_GET['passingscenario'];
                                $_SESSION['passingscenarioq'] = "Wrong";
            echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                                echo "
                                <br>
                                <h2>You can not pass on a solid yellow line</h2>
                                <br>
                                                <div class=\"action\"><center><a href=\"quiz7.php\">
                                Next Question
                                </a>
            
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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                                echo "
                                <br>
                                <h2>In New Zealand our signs are in Metric. Speed is measured in Kilometres per Hour and Distances in metres and kilometres</h2>
                                <br>
                                                <div class=\"action\"><center><a href=\"quiz6.php\">
                                Next Question
                                </a>
            
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                $_SESSION['unitsanswer'] = $_GET['units'];
                                $_SESSION['unitsq'] = "Wrong";
            echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                                echo "
                                <br>
                                <h2>In New Zealand our signs are in Metric. Speed is measured in Kilometres per Hour and Distances in metres and kilometres</h2>
                                <br>
                                                <div class=\"action\"><center><a href=\"quiz6.php\">
                                Next Question
                                </a>
            
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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                                echo "
                                <br>
                                <h2>In New Zealand give way to all traffic on the straight through road when you are at a T intersection or driveway</h2>
                                <br>
                                                <div class=\"action\"><center><a href=\"quiz5.php\">
                                Next Question
                                </a>
            
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                               $_SESSION['givewayanswer'] = $_GET['giveway'];
                                $_SESSION['givewayq'] = "Wrong";
            echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                                echo "
                                <br>
                                <h2>In New Zealand give way to all traffic on the straight through road when you are at a T intersection or driveway</h2>
                                <br>
                                                <div class=\"action\"><center><a href=\"quiz5.php\">
                                Next Question
                                </a>
            
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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                                echo "
                                <br>
                                <h2>In New Zealand you must have 100m of clear road while completing the entire passing manoeuvre</h2>
                                <br>
                                                <div class=\"action\"><center><a href=\"quiz4.php\">
                                Next Question
                                </a>
            
                                </div>
                                </div>
                                </div>
                                </a>
                                ";
                             } else {
                                $_SESSION['passinganswer'] = $_GET['passing'];
                                $_SESSION['passingq'] = "Wrong";
            echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                                echo "
                                <br>
                                <h2>In New Zealand you must have 100m of clear road while completing the entire passing manoeuvre</h2>
                                <br>
                                                <div class=\"action\"><center><a href=\"quiz4.php\">
                                Next Question
                                </a>
            
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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                    echo "
                    <br>
                    <h2>In New Zealand this sign means the maximum speed limit is 50 kilometres per hour</h2>
                    <br>
                                    <div class=\"action\"><center><a href=\"quiz3.php\">
                    Next Question
                    </a>

                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                 } else {
                    $_SESSION['speedsignanswer'] = $_GET['speedsign'];
                    $_SESSION['signq'] = "Wrong";
echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                    echo "
                    <br>
                    <h2>In New Zealand this sign means the maximum speed limit is 50 kilometres per hour</h2>
                    <br>
                                    <div class=\"action\"><center><a href=\"quiz3.php\">
                    Next Question
                    </a>

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
echo "<span class=\"title\"><h1 style=\"color:#4CAF50\">Correct</h1></span>";
                    echo "
                    <br>
                    <h2>In New Zealand we Drive on the Left hand side of the road</h2>
                        <br>
                                    <div class=\"action\"><center><a href=\"quiz2.php\">
                    Next Question
                    </a>

                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                 } else {
                    $_SESSION['sideanswer'] = $_GET['side'];
                    $_SESSION['correct'] = 0;
                    $_SESSION['sideq'] = "Wrong";
echo "<span class=\"title\"><h1 style=\"color:#E53935\">Incorrect</h1></span>";
                    echo "
                    <br>
                    <h2>In New Zealand we Drive on the Left hand side of the road</h2>
                        <br>
                                    <div class=\"action\"><center><a href=\"quiz2.php\">
                    Next Question
                    </a>

                    </div>
                    </div>
                    </div>
                    </a>
                    ";
                    }
                }

        } else {

        }