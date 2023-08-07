<?php
    // require("connection.php");
    $name = $_POST['fname'];
    $email = $_POST['email'];

    // echo $name."<br>";
    // echo $email."<br>";

    $cookie_name = "Name";
    $cookie_value = $name;
    $cookies= setcookie($cookie_name, $cookie_value, time() + 120, "/");
    // if($cookies){
        echo "Thanks ,".$cookie_value . " For <br>";
        echo "SUBSCRIBING TO OUR <br>";
        echo "NEWSLETTER";

    // }
    // else{
    //     echo "Cookies is not set";
    // }

    header("Refresh:120; url=index.php");

?>