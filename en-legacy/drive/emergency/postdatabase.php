<?php   

// Get form entries
$field_name = $_POST['name'];
$field_address = $_POST['address'];
$field_person = $_POST['contactperson'];
$field_phone = $_POST['phone'];

$cookie_name = "name";
$cookie_value = "$field_name";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day

$cookie_name = "address";
$cookie_value = "$field_address";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day


$cookie_name = "contactperson";
$cookie_value = "$field_person";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day

$cookie_name = "phone";
$cookie_value = "$field_phone";
setcookie($cookie_name, $cookie_value, time() + (2592000 * 30), "/"); // 2592000 = 1 day


echo "<script language = \"javascript\" type=\"text/javascript\">";
echo "window.location = \"/drive/emergency.php\";";
echo "</script>";

?>