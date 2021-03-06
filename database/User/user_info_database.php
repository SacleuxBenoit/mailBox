<?php
session_start();
include('../connection_database.php');

    if($_POST['pass'] != $_POST['confirmPass']){
        header('Location: ../../layouts/User/register.php');
    }
    
    $verif_email = $bdd->prepare('SELECT email FROM register WHERE email = :email');
    $verif_email->bindParam(':email', $_POST['email']);
    $verif_email->execute();
    $donnees = $verif_email->fetch();

    // verify if an input is empty

    if(empty($_POST['lastName']) || empty($_POST['firstName']) || empty($_POST['email']) || empty($_POST['pass'])){
        header('Location: ../../layouts/User/register.php');
    }
    
    // verify if the email address is already taken

    else if($_POST['email'] == $donnees['email']){
        echo "The email address is already taken";
    }
    
    // if no problem -> add to the database

    else{
        $pass_hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);   

        $send_info = $bdd->prepare('INSERT INTO register(lastname, firstname, email, pass) VALUES(:lastname, :firstname, :email, :pass)');
        $send_info->bindParam(':lastname', $_POST['lastName']);
        $send_info->bindParam(':firstname', $_POST['firstName']);
        $send_info->bindParam(':email', $_POST['email']);
        $send_info->bindParam(':pass', $pass_hash);
        $send_info->execute();
        $send_info->closeCursor();

        header('Location: ../../layouts/home.php');
    }
?>
