<?php
//way to connect to a mysql database 
//mysqli extension and pdo(php data object) i stand for improve
//connnecting to the database
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$db = "registration";

//creating the connection object
$conn = mysqli_connect($servername,$username,$password);
// if($conn){
//  echo " succesfull";
// }
// else {
//     echo "database is not connected";
// }
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $lname = $_POST['lname'];

    $query = "INSERT INTO `form' (firstname,email,lastname) VALUES('$fname','$lname' ,'$email')";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "inserted";
    }
    else{
        echo "not inserted";
    }

// }

?>