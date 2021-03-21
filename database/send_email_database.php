<?php
include('connection_database.php');

    $selectEmail = $bdd->prepare('SELECT email from register WHERE email= :email');
    $selectEmail->bindParam(':email', $_POST['user']);
    $selectEmail->execute();
    $userEmail = $selectEmail->fetch();

    if($_POST['user'] == $userEmail['email']){
        $sendEmail = $bdd->prepare('INSERT INTO register(contentEmail) WHERE email = :email VALUES(:contentEmail)');
        $sendEmail->bindParam(':email', $_POST['user']);
        $sendEmail->bindParam(':contentEmail', $_POST['contentEmail']);
        $sendEmail->execute();
        
        $fetchEmail = $getEmail->fetch();
        echo $fetchEmail['contentEmail'];
    }else{
        echo "user not found";
    }

?>