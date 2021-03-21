<?php
session_start();
include('../pass.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Register</title>
</head>
<body>
    <?php
        include('../Components/header.php')
    ?>
    <form action="../database/user_info_database.php" method="post">

        <p>
            <label for="firstName">First name :</label>
            <input type="text" id="firstName" name="firstName">
        </p>

        <p>
            <label for="lastName">Last name :</label>
            <input type="text" id="lastName" name="lastName">
        </p>

        <p>
            <label for="email">New email address :</label>
            <input type="email" id="email" name="email">
        </p>

        <p>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass">
        </p>

        <p>
            <label for="confirmPass">Confirm your password</label>
            <input type="password" id="confirmPass" name="confirmPass">
        </p>

        <input type="submit" value="Submit">

    </form>

    <p>If you already have an account <a href="login.php">click here</a></p>

</body>
</html>