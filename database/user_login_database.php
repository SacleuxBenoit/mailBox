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

$user_login = $bdd->prepare('SELECT email,pass FROM register WHERE email = :email');
$user_login->bindParam(':email', $_POST['loginEmail']);
$user_login->execute();
$donnees = $user_login->fetch();

if($_POST['loginEmail'] == $donnees['email'] && password_verify($_POST["loginPass"],$donnees['pass'])){
    header('Location: ./../home.php');
}else{
    header('Location: ./../login.php');
}
?>