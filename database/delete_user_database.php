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

$get_email_pass = $bdd->prepare('SELECT email,pass FROM register where email = :email');
$get_email_pass->bindParam(':email', $_POST['deleteEmail']);
$get_email_pass->execute();
$donnees = $get_email_pass->fetch();

if($_POST['deleteEmail'] == $donnees['email'] && password_verify($_POST["deletePass"],$donnees['pass'])){
    echo "Your account is now deleted";
}else{
    echo "The email address and the password doesn't match.";
}
?>