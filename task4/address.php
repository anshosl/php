<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX form</title>
</head>
<body>
    <h1>Update address</h1>
    <form action="update.php" method="post">
        <label for="country">Country</label><br>
        <select name="country" id="country">
            <option value="-------">-------</option>
            <option value="India">INDIA</option>
            <option value="USA">USA</option>
            <option value="UK">United Kingdom</option>
        </select><br>
        <label for="state">State</label><br>
        <select name="state" id="state">
            <option value="------">-------</option>
        </select><br>
        <label for="city">City</label><br>
        <select name="city" id="city">
            <option value="------">-------</option>
        </select><br>
        <label for="pc">Postal code</label><br>
        <input type="number" name="pc" id="pc"><br>
        <button type="submit">Submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="index.js">
    </script>
</body>
</html>