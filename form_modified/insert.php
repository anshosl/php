<?php

include("connection.php");
if (isset($_POST["submit"])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $lname = $_POST['lname'];

    $sql1 = "SELECT * FROM form where email='{$email}'";
    $result = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result)){
        header("Location: http://localhost/php/form/update.php?email=$email&fname=$fname&lname=$lname");
    }
    else{
        $query = "INSERT INTO form(fname,lname,email) VALUES ('{$fname}','{$lname}' ,'{$email}')";
        $data = mysqli_query($conn, $query);
        if ($data) {
            echo "inserted";
        } else {
            echo "not inserted";
        }
    }
}
