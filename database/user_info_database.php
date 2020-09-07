<?php
session_start();
include('../pass.php');

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mailBox;charset=utf8', 'root', $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



    if($_POST['pass'] != $_POST['confirmPass']){
        header('Location: ../register.php');
    }else{
        $send_info = $bdd->prepare('INSERT INTO register(lastname, firstname, email, pass) VALUES(:lastname, :firstname, :email, :pass)');
        $send_info->bindParam(':lastname', $_POST['lastName']);
        $send_info->bindParam(':firstname', $_POST['firstName']);
        $send_info->bindParam(':email', $_POST['email']);
        $send_info->bindParam(':pass', $_POST['pass']);
        $send_info->execute();
        $send_info->closeCursor();
    }
?>
