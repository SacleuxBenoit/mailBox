<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../Components/header.php');
    ?>
        <h1>Enter your login details</h1>

        <form action="#" method="post">
        <p>
            <label for="settingsEmail">Email :</label>
            <input type="email" id="settingsEmail" name="settingsEmail">
        </p>

        <p>
            <label for="settingsPass">Password :</label>
            <input type="password" id="settingsPass" name="settingsPass">
        </p>

            <input type="submit" value="Submit">
        </form>
</body>
</html>