<?php
session_start();
require("connection.php");

$usermail = $_SESSION['email'];

$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$pc = $_POST['pc'];

echo "<br>" . $country;


$sql = "UPDATE `complete` SET  country='{$country}', state='{$state}', city='{$city}', pc='{$pc}' WHERE email='{$usermail}'";
$conn->query($sql);
if ($sql) {
    header("Location:welcome.php");
} else {
    header("Location:address.php");
}
