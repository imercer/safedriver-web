<?php
$servername = "localhost";
$username = "root";
$password = "is@@c801";
$dbname = "safedriver";
$message = $_GET['message'];
$nameArray = array();
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT deviceid FROM `device_ids`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        $nameArray[] = $row['deviceid'];   
    }
} else {
     echo "<br>No Device Tokens in the System<br>";
}
$conn->close();
$arrlength = count($nameArray);
for($x = 0; $x < $arrlength; $x++) {
        echo $nameArray[$x];
        echo "<br>";
        // Put your device token here (without spaces):
        $token = $nameArray[$x];
        $deviceToken = "$token";

        // Put your private key's passphrase here:
        $passphrase = "is@@c801";

        // Put your alert message here:

        ////////////////////////////////////////////////////////////////////////////////

        $ctx = stream_context_create();
        stream_context_set_option($ctx, 'ssl', 'local_cert', 'ck.pem');
        stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

        // Open a connection to the APNS server
        $fp = stream_socket_client(
            'ssl://gateway.push.apple.com:2195', $err,
            $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

        if (!$fp)
            exit("Failed to connect: $err $errstr" . PHP_EOL);

        echo 'Connected to APNS' . PHP_EOL;

        // Create the payload body
        $body['aps'] = array(
            'alert' => $message,
            'sound' => "event.aiff"
            );

        // Encode the payload as JSON
        $payload = json_encode($body);

        // Build the binary notification
        $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

        // Send it to the server
        $result = fwrite($fp, $msg, strlen($msg));

        if (!$result)
            echo 'Message not delivered' . PHP_EOL;
        else
            echo 'Message successfully delivered';

        // Close the connection to the server
        fclose($fp);
}

$idfile = '/var/www/drivesafe/push/androidid';
$msgfile = '/var/www/drivesafe/push/androidmsg';
$currentid = file_get_contents($idfile);
$newid = $currentid + 1;
file_put_contents($msgfile, $message);
sleep(10);
file_put_contents($idfile, $newid);
// require codebird
require_once('codebird.php');
 
\Codebird\Codebird::setConsumerKey("4d5SQPcrdfGCvI4Gm7u64NUik", "jA0eppU5iLJ8FY0wiGIkPMaPk8RSfWRS1k5zIZjJZKntElefqd");
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("3174625284-PueDjm5YbE7oeS8xoYsZUFsdnGkkXhsp4dboPN0", "tUlkwD6j7j8tpbTK4qI9QrdAXaKfGddIZNkk6ejj2tKyJ");
 
$params = array(
  'status' => "$message"
);
$reply = $cb->statuses_update($params);
$status = $reply->httpstatus;
    if($status == 200) {
 
      echo "Tweeted";
      $tweet = "Done";
 
      } else {
      echo "Failed to Tweet";
      $tweet = "Failed $status";
      }
            echo "<script language = \"javascript\" type=\"text/javascript\">";
            echo "window.location = \"messagesent.php?type=event&number=$x&twitter=$tweet\";";
            echo "</script>";