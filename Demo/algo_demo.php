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
            </ul>
        </nav>
    </header>
    <main>
        <h1>Les Functions</h1>
            <script>
                // En JS les variables peuvent être atteintent par les fonctions
                const A = "Constante";
                function echo(){
                    console.log(A); //Afficher Constante dans la console
                }

                echo();
            </script>

            <?php
                //En PHP, les variables ne peuvent pas être appelées par les fonctions
                $a = "Constante";

                function affichage(){
                    echo $a; // -> Erreur, les variables déclarées à l'extérieur d'une fonction ne sont pas exploitable au sein de la dite fonction
                }

                //affichage();

                //Version Corrigé :
                function affichage2($param, $param2 = 'Valeur par Défaut'){ // ici $param2 possède une valeur par défaut, ce qui le rend optionnelle
                    echo '<p>'.$param.' + '.$param2.'</p>';
                }

                affichage2($a); // pas de second paramètre, mais affichera Constante + Valeur par Défaut
                affichage2($a,"Hello World !"); //va afficher Constante + Hello World !
            ?>
        
        <h1>Les Conditions</h1>
        <?php
            $a = 2;
            $b = 5;
            echo "<p>\$a combiné \$b (\$a<=>\$b) donne : ".($a<=>$b)."</p>";
            echo "<p>si la valeur est -1, alors \$b est supérieur à \$a. Si la valeur est 1, alors \$a est supérieur à \$b. Si la valeur est 0, alors \$a et \$b sont égaux</p>";
            echo "<p>L'opérateur combiné est très pratique pour mettre en place des Switch...Case, car on n'a que 3 résultats possibles</p>";
        ?>
        <h2>Swtich Case</h2>
        <p>Une petite technique de ninja sur les Switch... Case pour utiliser les comparateur supérieur ou inférieur</p>
        <?php
            $a = 2;
            $b = 3;

            switch(true){
                case ($a > $b) :
                    echo "<p>\$a est supérieur \$b</p>";
                    break;
                case ($a < $b) :
                    echo "<p>\$a est inférieur \$b</p>";
                    break;
                default :
                    echo "<p>\$a est égale à \$b</p>";
            }

            //Par défaut pour le switch
            switch($a){
                case 1 : //si $a est égale à 1, on entre dans ce case
                    echo "<p>Ha ha ha ha, \$a est 1</p>";
                    break;
                case 2 : //si $a est égale à 2, on entre dans ce case
                    echo "<p>Bha, \$a est 2</p>";
                    break; 
                case 3 : //si $a est égale à 3, on entre dans ce case
                    echo "<p>Simplement 3, \$a est 3</p>";
                    break;
                default : //Si $a n'est égale ni à 1, ni à 2, ni à 3, on lance le cas par défaut
                      echo "<p>DEFAULT, \$a est $a</p>";
                      break;           
            }
        ?>
</main>
</body>
</html>