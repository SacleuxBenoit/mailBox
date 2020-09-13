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
    include('../Components/header.php')
    ?>
    <form action="#" method="post">
        <p>
            <label for="changeFirstName">First name :</label>
            <input type="text" id="changeFirstName" name="changeFirstName">
        </p>

        <p>
            <label for="changeLastName">Last name :</label>
            <input type="text" id="changeLastName" name="changeLastName">
        </p>
        
        <p>
            <label for="changeEmail">Email :</label>
            <input type="email" id="changeEmail" name="changeEmail">
        </p>

        <p>
            <label for="changePass">Password :</label>
            <input type="password" id="changePass" name="changePass">
        </p>
            


        <input type="submit" value="Submit">
    </form>
</body>
</html>