<?php
session_start();
require("connection.php");
if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM complete WHERE email = '$email' AND password = '$password'";
    $data = $conn->query($sql);
    if($data->num_rows > 0){
        $row = $data->fetch_assoc();
        while($row){
            $_SESSION['email'] = $row['email'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            header('Location:address.php'); //redirect to the Ajax address form
        }
    }
    else{
        header("Location:index.php");
    }
   
}
?>