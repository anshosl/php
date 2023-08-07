<?php
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$db="profile";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if($conn){
    echo "Connection is established";
}
else{
    echo "connection is failed ";
}
?>