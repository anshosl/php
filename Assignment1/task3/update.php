<?php
    require("connection.php");
    // if(isset($_POST['submit'])){
        session_start();
     $usermail = $_SESSION['email'];

    $toi = $_POST['toi'];
    $education = $_POST['education'];
    $profession = $_POST['profession'];
    $hobbies = $_POST['hobbies'];

    echo "<br>".$toi;


$sql = "UPDATE `complete` SET  toi='{$toi}', education='{$education}', profession='{$profession}', hobbies='{$hobbies}' WHERE email='{$usermail}'";
$conn->query($sql);
if($sql){
header("Location:about.php");
}
else{
    header("Location:profile.php");
}
// mysqli_query($conn,$sql);

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }


