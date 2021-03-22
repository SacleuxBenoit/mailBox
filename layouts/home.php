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
    <link rel="stylesheet" href="../css/style_header.css">
    <link rel="stylesheet" href="../css/style_home.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../Components/header.php')
    ?>

    <nav class="navLeft">
        <ul>
            <li><a href="#">Write</a></li>
            <li><a href="#">Receive</a></li>
            <li><a href="#">Send</a></li>
            <li><a href="#">Star</a></li>
        </ul>
    </nav>
</body>
</html>