<?php
session_start();
include('../pass.php');
include('connection_database.php');

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