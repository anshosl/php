<?php 

include ("connection.php");
if(isset($_POST["submit"])) {
$fname = $_POST['fname'];
$email = $_POST['email'];
$lname = $_POST['lname'];

$query = "INSERT INTO form(fname,lname,email) VALUES ('{$fname}','{$lname}' ,'{$email}')";
$data = mysqli_query($conn,$query);
if($data){
    echo "inserted";
}
else{
    echo "not inserted";
}
}
?>