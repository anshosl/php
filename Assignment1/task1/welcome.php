<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <button><a href="logout.php">logout</a></button><br>
    <?php
    echo "Hii, ".$_SESSION['fname']." ".$_SESSION['lname'] ."! <br>";
    echo "WE Welcome you to our <br>";
    echo "Community";
    ?>
</body>
</html>