<?php
require("connection.php");
// echo "Hey welcome to the profile section";
session_start();
$toi = $education = $profession = $hobbies = '';
if(!isset($_SESSION['email'])){
    header("Location:index.php");
}
else{
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM complete WHERE email = '$email'";
    $data = $conn->query($sql);

    if ($data->num_rows > 0){

        while($row =$data->fetch_assoc()){
            $toi = $row['toi'];
            $education =$row['education'];
            $profession = $row['profession'];
            $hobbies = $row['hobbies'];
        }
    }
    else{
        echo "0 results";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="text" name="toi" placeholder="Topic of Interest" value="<?php echo $toi;?>"><br>
        <input type="text" name="education" placeholder="Education" value="<?php echo $education;?>"><br>
        <input type="text" name="profession"  placeholder="Profession" value="<?php echo $profession;?>"><br>
        <input type="text" name="hobbies"  placeholder="hobbies" value="<?php echo $hobbies;?>"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>