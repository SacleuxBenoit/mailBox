<?php
session_start();
include('../../pass.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
<title>Document</title>
</head>
<body>
    <?php
        include('../../Components/header.php')
    ?>
    
    <h1>Login</h1>

    <form action="../../database/User/user_login_database.php" method="post">
        <p>
            <label for="loginEmail">Email :</label>
            <input type="text" id="loginEmail" name="loginEmail">
        </p>

        <p>
            <label for="loginPass">Password :</label>
            <input type="password" id="loginPass" name="loginPass">
        </p>

            <input type="submit" value="Submit">
    </form>

        <p>
            If you don't have an account <a href="register.php">click here.</a>
        </p>

</body>
</html>