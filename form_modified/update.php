<?php
    include("connection.php");
    $fname = $_GET['fname'];
    $email = $_GET['email'];
    $lname = $_GET['lname'];

    $sql = "UPDATE form SET fname='{$fname}', lname ='{$lname}', email='{$email}'";
    mysqli_query($conn,$sql);
    echo "connection is successful";
?>
