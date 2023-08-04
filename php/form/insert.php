<?php 
@include "validation.php";
$fname = $_POST['fname'];
$email = $_POST['email'];
$lname = $_POST['lname'];

$query = "INSERT INTO `form`.`Registration form` (firstname,email,lastname) VALUES('$fname','$lname' ,'$email')";
$data = mysqli_query($conn,$query);
if($data){
    echo "inserted";
}
else{
    echo "not inserted";
}
?>