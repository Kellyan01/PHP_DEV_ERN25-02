<?php
//Démarer la Session
session_start();
$title = 'Mon Compte Utilisateur';

include './View/header.php';
?>


        <h1>Voici Vos Infos</h1>
        <p>Pseudo : <?php echo $_SESSION['nickname'] ?> </p>
        <p>Email : <?php echo $_SESSION['email'] ?> </p>
        <p>Role : <?php echo $_SESSION['role'] ?> </p>
        

<?php

include './View/footer.php';

?>

