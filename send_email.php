<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Send email</title>
</head>
<body>
    <?php
        include('Components/header.php')
    ?>

    <form action="database/send_email_database.php" method="post">
        <p>
            <label for="user">To :</label>
            <input type="email" name="user" id="user">
        </p>

        <p>
            <label for="object">Object :</label>
            <input type="text" name="object" id="object">
        </p>

        <p>
            <label for="message">Your message :</label>
            <input type="text" name="message" id="message">
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>