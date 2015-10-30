<!DOCTYPE html>
<html>
        <head><script src="/js/analytics.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><script src="/js/analytics.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="/css/metro-bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>SafeDriver - Drive Safe on New Zealand Roads</title> <link rel="icon" type="image/png" href="/images/icon.png"/>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/materialize.js"></script>
        <link rel="stylesheet" href="/css/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/css/card.css"/>
        <!-- Material Design Lite -->
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-red.min.css">
        <!-- Material Design icon font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
              <header class="mdl-layout__header" style="background-color: rgb(51,51,51); position: fixed">
                <div class="mdl-layout__header-row">
                  <!-- Title -->
                  <span class="mdl-layout-title">Quiz</span>
                  <!-- Add spacer, to align navigation to the right -->
                  <div class="mdl-layout-spacer"></div>
                  <!-- Navigation. We hide it in small screens.
                  <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                  </nav>
                     -->
                </div>
              </header>
              <div class="mdl-layout__drawer" style="background-color: rgb(51,51,51); border: 0; height: 100%; position: fixed">
                  <span class="mdl-layout-title"><a href="/index.php" style="color: #EEE">SafeDriver</a></span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="/learn/index.html" style="color: #EEE">Learn</a>
                    <a class="mdl-navigation__link" href="/test/index.html" style="color: #EEE">Quiz</a>
                    <a class="mdl-navigation__link" href="/drive/status.php" style="color: #EEE"><div class="mdl-badge" data-badge="!">Road Status</div></a>
<!--                     <a class="mdl-navigation__link" href="" style="color: #EEE">Help</a> -->
                    <a class="mdl-navigation__link" href="/settings/" style="color: #EEE">Settings</a>
                </nav>
              </div>
            </div>
        <br>
        <br>
        <br>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h4></span>";
                                            echo "
                                            <h3>At a roundabout you must give way to all vehicles to your right.</h3>
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
                        echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                                            echo "
                                            <h4>At a roundabout you must give way to all vehicles to your right.</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                                            echo "
                                            <h4>You must stop and give way to all opposing traffic on and approaching the bridge</h4>
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
                        echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                                            echo "
                                            <h4>You must stop and give way to all opposing traffic on and approaching the bridge</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                                            echo "
                                            <h4>You must stop and give way to all railway traffic before proceeding across the level crossing. If the barrier arms are lowered or the alarms are sounding you must wait until they stop before proceeding across the crossing, even if you can't see a train.</h4>
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
                        echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                                            echo "
                                            <h4>You must stop and give way to all railway traffic before proceeding across the level crossing. If the barrier arms are lowered or the alarms are sounding you must wait until they stop before proceeding across the crossing, even if you can't see a train.</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                                        echo "
                                        <h4>If your speed is impeding following traffic you must pull as far left as possible to allow them to pass</h4>
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
                    echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                                        echo "
                                        <h4>If your speed is impeding following traffic you must pull as far left as possible to allow them to pass</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                                echo "
                                <h4>You can not pass on a solid yellow line</h4>
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
            echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                                echo "
                                <h4>You can not pass on a solid yellow line</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                                echo "
                                <h4>In New Zealand our signs are in Metric. Speed is measured in Kilometres per Hour and Distances in metres and kilometres</h4>
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
            echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                                echo "
                                <h4>In New Zealand our signs are in Metric. Speed is measured in Kilometres per Hour and Distances in metres and kilometres</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                                echo "
                                <h4>In New Zealand give way to all traffic on the straight through road when you are at a T intersection or driveway</h4>
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
            echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                                echo "
                                <h4>In New Zealand give way to all traffic on the straight through road when you are at a T intersection or driveway</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                                echo "
                                <h4>In New Zealand you must have 100m of clear road while completing the entire passing manoeuvre</h4>
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
            echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                                echo "
                                <h4>In New Zealand you must have 100m of clear road while completing the entire passing manoeuvre</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                    echo "
                    <h4>In New Zealand this sign means the maximum speed limit is 50 kilometres per hour</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                    echo "
                    <h4>In New Zealand this sign means the maximum speed limit is 50 kilometres per hour</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#4CAF50\">Correct</h2></span>";
                    echo "
                    <h4>In New Zealand we Drive on the Left hand side of the road</h4>
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
echo "<span class=\"title\"><h2 style=\"color:#E53935\">Incorrect</h2></span>";
                    echo "
                    <h4>In New Zealand we Drive on the Left hand side of the road</h4>
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