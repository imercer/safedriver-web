<!DOCTYPE html>
<html>
        <head><script src="/js/analytics.js"></script>        <script src="/drive/speed.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><script src="/js/analytics.js"></script>        <script src="/drive/speed.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="/css/style.css"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>SafeDriver - Drive Safe on New Zealand Roads</title> <link rel="icon" type="image/png" href="/images/icon.png"/>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/jquery/jquery.widget.min.js"></script>
        <script src="/js/materialize.js"></script>
        <link rel="stylesheet" href="/css/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- Material Design Lite -->
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-red.min.css">
        <!-- Material Design icon font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script>
            if (localStorage.lang) {
                window.location = "/" + localStorage.lang + ".php";
            } else {
                window.location = "/welcome/languageselect.html";
            }
                 
        </script>
    </head>
<body>
    <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate progress-demo" style="width: 100%"></div>

<h1>Technical Malfunction</h1>
<h3 style="padding-left: 5px">Error: <i>None of you read this anyway, its not a critical error but something went wrong in the refresh process </i>(200).</h3>
    <h4 style="padding-left: 5px">The page is loading... or thats what its programmed to do anyway. If it doesn't load it means something is wrong. Not with you, but with the page. The posh like to call it a "Technical Malfunction". You can either sit here all day watching that magnificent progress bar do its thing, or you can try something else, like clicking <a href="/index.php" style="color: #EEE">here</a> to try again. There's no harm in trying.</h4>
<h4 style="padding-left: 5px">If you choose to wait, heres a video to keep you entertained, its ten hours. Perfect for watching that indeterminate progress bar, isn't it delightful.</h4>
<?php
$input = array("<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/7LKHpM1UeDA\" frameborder=\"0\" allowfullscreen></iframe>", "<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/wZZ7oFKsKzY\" frameborder=\"0\" allowfullscreen></iframe>", "<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/BROWqjuTM0g\" frameborder=\"0\" allowfullscreen></iframe>", "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/D18ilpkyMOc\" frameborder=\"0\" allowfullscreen></iframe>", "<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/wI__53kBBKM\" frameborder=\"0\" allowfullscreen></iframe>");
$website = $input[mt_rand(0, count($input) - 1)];
echo "$website";
?>