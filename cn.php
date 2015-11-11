<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, target-densitydpi=high-dpi, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <script>
            localStorage.setItem("lang", "cn");
        </script>
        <link rel="stylesheet" href="/css/metro-bootstrap.css"><link rel="stylesheet" href="/css/style.css"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>Drive Safe on New Zealand Roads</title> <link rel="icon" type="image/png" href="/images/icon.png"/>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/materialize.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
                  <span class="mdl-layout-title">得知</span>
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
                  <span class="mdl-layout-title"><a href="/index.php" style="color: #EEE">安全驾驶</a></span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="/cn/learn/index.html" style="color: #EEE">得知</a>

                    <a class="mdl-navigation__link" href="/cn/drive/status.php" style="color: #EEE"><div class="mdl-badge" data-badge="!">道路现状</div></a>

                    <a class="mdl-navigation__link" href="/cn/settings/" style="color: #EEE">设置</a>
                </nav>
              </div>
            </div>
            <br>
            <br>
            <br>
            <div class="demo-grid-1 mdl-grid">
                <div class="mdl-cell mdl-cell--4-col">
                    <a href="learn/index.html">
                        <div class="mdl-card mdl-shadow--2dp card-square">
                          <div class="mdl-card__title mdl-card--expand" style="background: bottom right 15% no-repeat rgb(0,175,240)">
                            <h2 class="mdl-card__title-text" style="color: #111; font-weight: bold">得知</h2>
                          </div>
                          <div class="mdl-card__supporting-text">
                            了解新西兰的道路上存在的基本规则。
                          </div>
                        </div>
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <a href="drive/status.php">
                          <div class="mdl-card mdl-shadow--2dp card-square" style="background-colour: blue">
                            <div class="mdl-card__title mdl-card--expand" style="background: bottom right 15% no-repeat rgb(120,170,28)">
                                <h2 class="mdl-card__title-text" style="color: #111; font-weight: bold">道路现状</h2>
                            </div>
                          <div class="mdl-card__supporting-text">
                           了解最新的路况，状态和任何主要道路关闭到位。
                          </div>
                        </div>
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--4-col">
                    <a href="settings/index.html">
                          <div class="mdl-card mdl-shadow--2dp card-square" style="background-colour: blue">
                            <div class="mdl-card__title mdl-card--expand" style="background: bottom right 15% no-repeat rgb(194,144,8)">
                                <h2 class="mdl-card__title-text" style="color: #111; font-weight: bold">设置</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                            配置SafeDriver满足您的需求。
                          </div>
                        </div>
                    </a>
                </div>            </div>
    </div>
    </body>
</html>