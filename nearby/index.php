<?php
$cookie_name = "lang";
$cookie_value = "en";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="/js/analytics.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="/css/metro-bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/card.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>SafeDriver - Drive Safe on New Zealand Roads</title>
        <link rel="icon" type="image/png" href="/images/icon.png"/>
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
                  <span class="mdl-layout-title">SafeDriver</span>
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
            <div class="demo-grid-1 mdl-grid">
                <div id="queenstown" style="display: none">
                <div id="region-header"><h1>Queenstown</h1></div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/Milford-Road.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Nearby</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--2-col">Glenorchy</div>
                            <div class="mdl-cell mdl-cell--2-col">Arrowtown</div>
                            <div class="mdl-cell mdl-cell--2-col">Milford Sound</div>

                        </div>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/IMG_20150415_120116.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">High Risk Roads</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--2-col">Crown Range Road</div>
                        <div class="mdl-cell mdl-cell--2-col">Milford Road</div>
                        </div>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/one%20lane%20bridge%20with%20track.JPG" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Important Information</span>
                 </div>
               <div class="content">
                        <ul>
                            <li>Roads in this area are often narrow, winding and steep</li>
                            <li>During winter months the roads are often subject to icy road conditions</li>
                            <li>Avoid driving on mountain passes, if possible, during the winter months</li>
                        </ul>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/IMG_20150415_122517.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Road Status</span>
                 </div>
               <div class="content">
                       <i style="color: red">Road Status Unavailable</i>
               </div>
                </div>
            </div>
            <div id="auckland" style="display: none">
                <div class="region-header"><h1>Auckland</h1></div>
                <!--<div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/Milford-Road.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Attractions</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--2-col">Tamaki Drive</div>
                            <div class="mdl-cell mdl-cell--2-col">Arrowtown</div>
                        </div>
               </div>
                </div>-->
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/aklmwy.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Motorways</span>
                 </div>
               <div class="content">
                        <ul>
                            <li>Auckland motorways have generally speed limit of 100km/h</li>
                            <li>Some stretches of motorway have a lower speed limit in place, such as the Auckland Harbour Bridge (80km/h)</li>
                            <li>Indicate before changing lanes</li>
                            <li>Follow the directions of the signs</li>
                        </ul>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/kroad.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Important Information</span>
                 </div>
               <div class="content">
                        <ul>
                            <li>Auckland's roads are generally well developed and travel through built-up areas</li>
                            <li>Expect traffic and delays during peak periods</li>
                            <li>Plan your journey before driving</li>
                            <li>The speed limit in built-up areas is generally 50km/h</li>
                            <li>Use motorways wherever possible</li>
                        </ul>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/statusakl.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Road Status</span>
                 </div>
               <div class="content">
                       <i style="color: red">Road Status Unavailable</i>
               </div>
                </div>
            </div>
        <div id="hamilton" style="display: none">
                <div class="region-header"><h1>Hamilton</h1></div>
                <!--<div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/Milford-Road.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Attractions</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--2-col">Tamaki Drive</div>
                            <div class="mdl-cell mdl-cell--2-col">Arrowtown</div>
                        </div>
               </div>
                </div>-->
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/Hamilton-City.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Attractions</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid" style="text-align: center">
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/GardenPlaceHamilton.jpg" style="width: 100%"></img><br>Garden Place</div>                            
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/hamiltonzoo.jpg" style="width: 100%"></img><br>Hamilton Zoo</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/waitomocaves.jpg" style="width: 100%"></img><br>Waitomo Caves</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/waikatoriver.jpg" style="width: 100%"></img><br>Waikato River</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/Ngaruawahia.jpg" style="width: 100%"></img><br>Ngaruawahia</div>
                        </div>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/Fairfield_Bridge7.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Important Information</span>
                 </div>
               <div class="content">
                        <ul>
                            <li>Hamilton City's roads are generally well developed and travel through built-up areas</li>
                            <li>Hamilton has many bridges to cross the Waikato River, which travells through the center of the city</li>
                            <li>Plan your journey before driving</li>
                            <li>The speed limit in built-up areas is generally 50km/h</li>
                            <li>Many roads outside of Hamilton City are rural roads, often less maintained than the roads found in the built-up areas</li>
                            <li>Watch for farm animals on rural roads</li>
                        </ul>
               </div>
                </div>
            </div>
        <div id="northland" style="display: none">
                <div class="region-header"><h1>Northland</h1></div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/IMG_20150118_184250.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Nearby Locations</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid" style="text-align: center">
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/Bay-of-Islands.jpg" style="width: 100%"></img><br>Bay of Islands</div>                            
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/cape-reinga-northland-novy-zeland-241.jpg" style="width: 100%"></img><br>Cape Reinga</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/Hokianga_Harbour.jpg" style="width: 100%"></img><br>Hokianga Harbour</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/350px-Kerikeri_historic_buildings.jpg" style="width: 100%"></img><br>Kerikeri</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/ninetymile.jpg" style="width: 100%"></img><br>Ninety Mile Beach</div>

                        </div>
               </div>
                </div>
            <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/IMG_20150121_131748.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">High Risk Roads</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--4-col">Brynderwyn Hills</div>
                            <div class="mdl-cell mdl-cell--4-col">Ninety Mile Beach</div>
                        </div>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/IMG_20150121_112938.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Important Information</span>
                 </div>
               <div class="content">
                        <ul>
                            <li>Many Northland roads are winding and narrow</li>
                            <li>Main Northland roads are often prone to wet conditions and may close</li>
                            <li>Plan your journey before driving</li>
                            <li>The speed limit in built-up areas is generally 50km/h</li>
                            <li>Brush up on your One Way rules as many Northland bridges are one way</li>
                            <li>Your rental car agreement may prohibit you from driving on Ninety-Mile Beach</li>
                        </ul>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/statusnorthland.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Road Status</span>
                 </div>
               <div class="content">
                       <i style="color: red">Road Status Unavailable</i>
               </div>
                </div>
            </div>
<div id="cni" style="display: none">
                <div class="region-header"><h1>Rotorua & Taupo</h1></div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/thermalnz.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Nearby Locations</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid" style="text-align: center">
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/ruapehu.jpg" style="width: 100%"></img><br>Mt Ruapehu</div>                            
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/Huka_Falls.jpg" style="width: 100%"></img><br>Huka Falls</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/tauranga.jpg" style="width: 100%"></img><br>Tauranga</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/bluelake.jpg" style="width: 100%"></img><br>Central Lakes</div>
                            <div class="mdl-cell mdl-cell--2-col"><img src="/images/rotorua.jpg" style="width: 100%"></img><br>Rotorua Geothermal Activity</div>

                        </div>
               </div>
                </div>
            <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/napiertaupo.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">High Risk Roads</span>
                 </div>
               <div class="content">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--3-col">Napier-Taupo Road</div>
                            <div class="mdl-cell mdl-cell--3-col">Desert Road</div>
                            <div class="mdl-cell mdl-cell--3-col">Turangi to Taumaranui Road</div>
                            <div class="mdl-cell mdl-cell--3-col">Central Plateau</div>
                        </div>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/desert.jpg" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Important Information</span>
                 </div>
               <div class="content">
                        <ul>
                            <li>Many Central North Island roads are winding and narrow</li>
                            <li>Central Plateau roads may close due to snow</li>
                            <li>Plan your journey before driving</li>
                            <li>The speed limit in built-up areas is generally 50km/h</li>
                            <li>Ensure you secure your car when parking at tourist attractions</li>
                        </ul>
               </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="image">
                    <img src="/images/Desert%20Road%20closed.JPG" style="width: 100%"></img>
                    <span class="title" style="text-overflow: ellipsis">Road Status</span>
                 </div>
               <div class="content">
                       <i style="color: red">Road Status Unavailable</i>
               </div>
                </div>
            </div>
    </div>
    </body>
<script>
$(document).ready(function() {
    $(window.location.hash).show();
});
</script>
</html>