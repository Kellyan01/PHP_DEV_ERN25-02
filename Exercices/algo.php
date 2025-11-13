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
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="#exercice01">Exercice 01</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2 id="exercice01">EXERCICE 01</h2>
        <?php
            /*Exercice 1 :
            -Créer une variable de type int avec pour valeur 5,*/
            $int = 5;

            /*-Afficher le contenu de la variable (utilisation de la fonction php echo),*/ 
            echo "<p>Affichage de \$int : ".$int."</p>";

            /*-Afficher son type (utilisation de la fonction php gettype),*/
            echo "<p>Affichage du type de \$int : ".gettype($int)."<p>";

            /*-Créer une variable de type String avec pour valeur votre prénom,*/
            $string = "Yoann";

            /*-Afficher le contenu de la variable (utilisation de la fonction php echo),*/
            echo "<p>Affichage de \$string : $string</p>";

            /*-Créer une variable de type booléen avec pour valeur false,*/
            $bool = false;

            /*-Afficher son type (utilisation de la fonction php gettype).*/
            echo '<p>Affichage du type de $bool : '.gettype($bool).'</p>';
        ?>

    </main>
</body>
</html>