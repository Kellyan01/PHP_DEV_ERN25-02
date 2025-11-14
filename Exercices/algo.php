<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header id='header'>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="#exercice01">Exercice 01</a></li>
                <li><a href="#exercice02">Exercice 02</a></li>
                <li><a href="#exercice03">Exercice 03</a></li>
                <li><a href="#exercice04">Exercice 04</a></li>
                <li><a href="#exercice05">Exercice 05</a></li>
                <li><a href="#exercice06">Exercice 06</a></li>
                <li><a href="#exercice07">Exercice 07</a></li>
                <li><a href="#exercice08">Exercice 08</a></li>
                <li><a href="#exercice09">Exercice 09</a></li>
                <li><a href="#exercice10">Exercice 10</a></li>
                <li><a href="#exercice11">Exercice 11</a></li>
                <li><a href="#exercice12">Exercice 12</a></li>
                <li><a href="#exercice13">Exercice 13</a></li>
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

        <h2 id="exercice02">EXERCICE 02</h2>
        <?php
            /*Exercice 2 :
            Créer une variable $sasha, qui contient "pikachu"
            Créer une variable $pierre, qui contient "onyx"
            Faites en sorte que $sasha et $pierre s'échange leur pokémon*/
            $sasha = "pikachu";
            $pierre = "onyx";
            $echange = $sasha;
            $sasha = $pierre;
            $pierre = $echange;

            //Alternative : destructuring de tableau
            [$sasha, $pierre] = [$pierre, $sasha];
        ?>

        <h2 id="exercice03">EXERCICE 03</h2>
        <?php
            /*Exercice 3 :
            -Créer 3 variables $a, $b et $c qui ont pour valeur $a =5, $b =3 et $c = $a+$b,*/
            $a = 5;
            $b = 3;
            $c = $a + $b;

            /*-Afficher la valeur de chaque variable (utilisez la fonction echo).,*/
            echo "<p>Affichage de \$a : $a</p>";
            echo "<p>Affichage de \$b : $b</p>";
            echo "<p>Affichage de \$c : $c</p>";

            /*-passer la valeur de $a à 2,*/
            $a = 2;

            /*-Afficher la valeur de $a,*/
            echo "<p>Affichage de la nouvelle valeur de \$a : $a</p>";

            /*-passer la valeur de $c à $b - $a,*/
            $c = $b-$a;

            /*-Afficher la valeur de chaque variable (utilisez la fonction echo).*/
            echo "<p>Affichage de la nouvelle valeur de \$a : $a</p>";
            echo "<p>Affichage de la nouvelle valeur de \$b : $b</p>";
            echo "<p>Affichage de la nouvelle valeur de \$c : $c</p>";
        ?>

        <h2 id="exercice04">EXERCICE 04</h2>
        <?php
            /*Exercice 4 :
            -Ecrire un programme qui prend le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui fournit le prix
            total TTC correspondant.*/
            $prixHT = 100;
            $tauxTVA = 20;
            $nbrArticle = 5;

            $prixTTC = $prixHT * (1 + $tauxTVA/100) * $nbrArticle;

            /*-Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),*/
            echo "<p>le prix HT est de : $prixHT euros</p>";
            echo "<p>la TVA est de : {$tauxTVA}%</p>";
            echo "<p>le nombre d'article est de : $nbrArticle</p>";

            /*-Afficher le résultat (utilisez la fonction echo).
            NOTE : le prix TTC = prixHT * (1 + tauxTVA)*/
            echo "<p>le prix TTC est de : $prixTTC euros</p>";

        ?>

        <h2 id="exercice05">EXERCICE 05</h2>
        <?php
            /*Exercice 5 :
            -Créer 1 variable $a qui a pour valeur « bon »,*/
            $a = 'bon';

            /*-Créer 1 variable $b qui a pour valeur « jour »,*/
            $b = 'jour';

            /*-Créer 1 variable $c qui a pour valeur 10,*/
            $c = 10;

            /*-Concaténer $a, $b et $c +1,
            -Afficher le résultat de la concaténation.*/
            echo "<p>$a$b".($c+1)."</p>";
        ?>

        <h2 id="exercice06">EXERCICE 06</h2>
        <?php
            /*Exercice 6 :
            -Créer une variable $a qui a pour valeur bonjour,*/
            $a = 'bonjour';

            /*-Afficher un paragraphe (balise html) et à l’intérieur les mots suivants :l’adrar,-Ajouter la variable $a avant la phase dans le paragraphe,
            -Cela doit donner :
            <p>bonjour l’adrar</p>*/?>
        <p><?php echo $a." "; ?>l'adrar</p>
            
        <h2 id="exercice07">EXERCICE 07</h2>
        <?php
            /*Exercice 7 :
            -Créer une fonction qui soustrait à $a la variable $b (2 paramètres en entrée),
            -la fonction doit renvoyer le résultat de la soustraction $a-$b (return).*/
            function soustraction($a,$b){
                return $a-$b;
            }
            echo "<p>La soustraction de 10 par 7 est : ".soustraction(10,7)."</p>";
        ?>

        <h2 id="exercice08">EXERCICE 08</h2>
        <?php
            /*Exercice 8 :
            Créer une fonction qui prend en entrée un nombre à virgule (float),
            la fonction doit renvoyer l’arrondi (return) du nombre en entrée.*/
            function arrondie($float){
                return round($float);
            }
            echo "<p>L'arrondi de 15,35 est : ".arrondie(15.35)."</p>";
            echo "<p>L'arrondi de 17,65 est : ".arrondie(17.65)."</p>";
        ?>

        <h2 id="exercice09">EXERCICE 09</h2>
        <?php
            /*Exercice 9 :
            Créer une fonction qui prend en entrée 3 valeurs et renvoie la somme des 3 valeurs.*/
            function addition($a,$b,$c){
                return $a+$b+$c;
            }
            echo "<p>La somme de 1, 2 et 3 donne : ".addition(1,2,3)."</p>";
        ?>

        <h2 id="exercice10">EXERCICE 10</h2>
        <?php
            /*Exercice 10 :
            -Créer une fonction qui teste si un nombre est positif ou négatif (echo dans la page web).*/
            function positif($nbr){
                if($nbr < 0){
                    echo "<p>$nbr est négatif.</p>";
                }else if($nbr > 0){
                    echo "<p>$nbr est positif.</p>";
                }else{
                    echo "<p>$nbr est nulle.</p>";
                }
            }
            positif(5);
            positif(-5);
            positif(0);
        ?>

        <h2 id="exercice11">EXERCICE 11</h2>
        <?php
            /*Exercice 11 :
            -Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web).*/
            function plusGrand($a, $b, $c){
                if($a>=$b and $a>=$c){
                    echo "<p>$a est le plus grand.</p>";
                }else if($b>=$a and $b>=$c){
                    echo "<p>$b est le plus grand.</p>";
                }else{
                    echo "<p>$c est le plus grand.</p>";
                }
            }

            plusGrand(1,2,3);
            plusGrand(5,4,3);
            plusGrand(7,9,8);
        ?>

        <h2 id="exercice12">EXERCICE 12</h2>
        <?php
            /*Exercice 12 :
            Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus petit (echo dans la page web).*/
            function plusPetit($a, $b, $c){
                if($a<=$b and $a<=$c){
                    echo "<p>$a est le plus petit.</p>";
                }else if($b<=$a and $b<=$c){
                    echo "<p>$b est le plus petit.</p>";
                }else{
                    echo "<p>$c est le plus petit.</p>";
                }
            }

            plusPetit(1,2,3);
            plusPetit(5,4,3);
            plusPetit(7,9,8);
        ?>

        <h2 id="exercice13">EXERCICE 13</h2>
        <?php
            /*Exercice 13 :
                -Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans
                la page web) :
                x "Poussin" de 6 à 7 ans
                x "Pupille" de 8 à 9 ans
                x "Minime" de 10 à 11 ans
                x "Cadet" après 12 ans*/
                function categorie($age){
                    if($age >= 6 and $age<=7){
                        echo "<p>Poussin</p>";
                    }else if($age >= 8 and $age<=9){
                        echo "<p>Pupille</p>";
                    }else if($age >= 10 and $age<=11){
                        echo "<p>Minime</p>";
                    }else if($age >= 12){
                        echo "<p>Cadet</p>";
                    }else{
                        echo "<p>Hors Catégorie</p>";
                    }
                }
                categorie(5);
                categorie(6);
                categorie(7);
                categorie(8);
                categorie(9);
                categorie(10);
                categorie(11);
                categorie(12);
                categorie(30);
        ?>

        <h2 id="exercice14">EXERCICE 14</h2>
        <?php
            /*Exercice 14 :
            Refaire l’exercice 13 en utilisant le switch case.*/
            function categorieSwitch($age){
                    switch($age){
                        case 6 :
                        case 7 :
                            echo "<p>Poussin</p>";
                            break;
                        case 8 :
                        case 9 :
                            echo "<p>Pupille</p>";
                            break;
                        case 10 :
                        case 11 :
                            echo "<p>Minime</p>";
                            break;
                        case 12 :
                            echo "<p>Cadet</p>";
                            break;
                        default :
                            echo "<p>Hors Catégorie</p>";
                            break;
                    }
            }
                categorieSwitch(5);
                categorieSwitch(6);
                categorieSwitch(7);
                categorieSwitch(8);
                categorieSwitch(9);
                categorieSwitch(10);
                categorieSwitch(11);
                categorieSwitch(12);
                categorieSwitch(30);

            function categorieSwitchNinja($age){
                    switch(true){
                        case ($age >= 6 and $age <= 7) :
                            echo "<p>Poussin</p>";
                            break;
                        case ($age >= 8 and $age <= 9) :
                            echo "<p>Pupille</p>";
                            break;
                        case ($age >= 10 and $age <= 11) :
                            echo "<p>Minime</p>";
                            break;
                        case ($age >= 12) :
                            echo "<p>Cadet</p>";
                            break;
                        default :
                            echo "<p>Hors Catégorie</p>";
                            break;
                    }
            }
            echo "<p>------ SWITCH NINJA ------</p>";
            categorieSwitchNinja(5);
            categorieSwitchNinja(6);
            categorieSwitchNinja(7);
            categorieSwitchNinja(8);
            categorieSwitchNinja(9);
            categorieSwitchNinja(10);
            categorieSwitchNinja(11);
            categorieSwitchNinja(12);
            categorieSwitchNinja(30);
        ?>

    </main>
    <footer>
        <a href="#header" style="position:fixed; bottom:1em; right:1em; background-color:#333; color:#fff; padding:5px">RETOUR EN HAUT</a>
    </footer>
</body>
</html>