<?php
$message = "Welcome to New Zealand";
$idfile = '/var/www/drivesafe/push/androidid';
$msgfile = '/var/www/drivesafe/push/androidmsg';
$currentid = file_get_contents($idfile);
$newid = $currentid + 1;
file_put_contents($msgfile, $message);
file_put_contents($idfile, $newid);