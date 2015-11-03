<?php
$servername = "localhost";
$username = "root";
$password = "is@@c801";
$dbname = "safedriver";
$location = $_GET['area'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT $location,id FROM `location-info`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $value = $row["$location"];
         $id = $row["id"];
    }
} else {
}
$conn->close();
$value = $value + 1;
$conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
            } 
            $trackingno = mysqli_real_escape_string($conn, $trackingno);
            $shorterdescriptionsql = mysqli_real_escape_string($conn, $shorterdescription);
            $longdescriptionsql = mysqli_real_escape_string($conn, $longdescription);
            $imagesql = mysqli_real_escape_string($conn, $image);
        
            $sql = "UPDATE `location-info` SET $location = '$value' WHERE id LIKE '$id';";
            if ($conn->query($sql) === TRUE) {
                     echo "$trackingno Entered in Database \n";
            } else {
                    die("Not Entered \n" . $conn->error);
            }
            $conn->close();
?>