<?php
//Démarer la Session
session_start();

print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil General</a></li>
                <li><a href="./index.php">Accueil ToDO</a></li>
                <li><a href="./deco.php">Se Deconnecter</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Voici Vos Infos</h1>
        <p>Pseudo : <?php echo $_SESSION['nickname'] ?> </p>
        <p>Email : <?php echo $_SESSION['email'] ?> </p>
        
    </main>
    <footer>

    </footer>
</body>
</html>