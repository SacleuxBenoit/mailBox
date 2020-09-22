<?php
session_start();
include('connection_database.php');


$get_email_pass = $bdd->prepare('SELECT email,pass FROM register where email = :email');
$get_email_pass->bindParam(':email', $_POST['deleteEmail']);
$get_email_pass->execute();
$donnees = $get_email_pass->fetch();

if($_POST['deleteEmail'] == $donnees['email'] && password_verify($_POST["deletePass"],$donnees['pass'])){
    $delete_account = $bdd->prepare('DELETE FROM register WHERE email = :email');
    $delete_account->bindParam(':email', $_POST['deleteEmail']);
    $delete_account->execute();
    echo "Your account is now deleted";
}else{
    ?>
        <p>The email address and the password doesn't match. <a href="../deleteAccount.php">Click here</a> for a redirection to the delete page</p>
    <?php
}
?>