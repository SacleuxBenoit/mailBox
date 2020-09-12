<?php
session_start();
include('pass.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">
        <p>
            <label for="deleteEmail">Email :</label>
            <input type="text" id="deleteEmail" name="deleteEmail">
        </p>

        <p>
            <label for="deletePass">Password :</label>
            <input type="password" id="deletePass" name="deletePass">
        </p>

            <input type="submit" value="Submit">
    </form>
</body>
</html>