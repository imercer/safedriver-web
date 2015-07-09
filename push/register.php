<?php
$deviceid = $_GET["deviceToken"];
$conn = new mysqli("localhost","root","is@@c801","safedriver");
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT deviceid FROM `device_ids` WHERE deviceid LIKE '$deviceid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         exit("Already Registered");
     }
} else {
     echo "Registering";
}

$conn->close();
$con=mysqli_connect("localhost","root","is@@c801","safedriver");
$sqldevid = mysqli_real_escape_string($con, $deviceid);

$sql="INSERT INTO `device_ids` (deviceid)
VALUES ('$sqldevid')";

if (mysqli_connect_errno()) {
    echo "Failed to connect to MYSQL: " . mysql_connect_error();
}

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>