<?php
session_start();
include('../connection_database.php');

$user_login = $bdd->prepare('SELECT * FROM register WHERE email = :email');
$user_login->bindParam(':email', $_POST['loginEmail']);
$user_login->execute();
$donnees = $user_login->fetch();

$_SESSION['email'] = $donnees['email'];
$_SESSION['firstName'] = $donnees['firstName'];
$_SESSION['lastName'] = $donnees['lastName'];

if($_POST['loginEmail'] == $donnees['email'] && password_verify($_POST["loginPass"],$donnees['pass'])){
    header('Location: ../../layouts/home.php');
}else{
    header('Location: ../../layouts/User/login.php');
}
?>