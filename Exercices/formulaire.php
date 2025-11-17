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
                <li><a href="#exercice20">Exercice 20</a></li>
                <li><a href="#exercice21">Exercice 21</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2 id="exercice20">EXERCICE 20</h2>
        <?php
            /*Exercice 20 :
            Créer une page de formulaire dans laquelle on aura 2 champs de formulaire de type
            nombre.
            Afficher dans cette même page la somme des 2 champs avec un affichage du style :
            La somme est égale à : valeur*/

            //Declaration de ma varibale d'affichage, remplie avec une string vide
            $result = '';

            //Vérifier que je reçois le formulaire
            if(isset($_POST['submitAdd'])){
                //Puisque je reçois le formulaire, alors j'additionne les input number et stocke le résultat dans $result
                $result = "La somme est égale à : ".$_POST["number1"] + $_POST["number2"];
            }
        ?>
        <form action="" method="post">
            <label for="number1">Nombre 1 :</label><input id="number1" type="number" name="number1">
            <label for="number2">Nombre 2 :</label><input id="number2" type="number" name="number2">
            <input type="submit" name="submitAdd" value="Additionner">
        </form>
        <p><?php echo $result ?></p>

        <h2 id="exercice21">EXERCICE 21</h2>
        <?php
            /*Exercice 21 :
            Créer une page de formulaire dans laquelle on aura 3 champs de formulaire de type
            nombre :
            1 champ de formulaire qui demande un prix HT d’un article,
            1 champ de formulaire qui demande le nombre d’article,
            1 champ de formulaire qui demande le taux de TVA,

            Afficher dans cette même page le prix TTC (prix HT * (1 + taux TVA) * quantité) avec un affichage du
            style :
            Le prix TTC est égal à : valeur €.*/

            //Initialisation de la variable d'affichage :
            $prixTTC = '';

            //Traitement du formulaire
            //1) Vérifier que je reçois le formulaire
            if(isset($_POST["submitPrix"])){
                $prixTTC = $_POST['prixHT'] * (1 + $_POST['tva']/100) * $_POST['quantite'];
                $prixTTC = "Le prix TTC est égal à : $prixTTC euros";
            }
        ?>
        <form action="" method="post">
            <label for="prixHT">Prix HT :</label><input id="prixHT" type="number" name="prixHT" step="0.01">
            <label for="quantite">Quantite :</label><input id="quantite" type="number" name="quantite">
            <label for="tva">TVA :</label><input id="tva" type="number" name="tva" step="0.5">
            <input type="submit" name="submitPrix" value="Calculer Prix TTC">
        </form>
        <p><?php echo $prixTTC ?></p>
    </main>
    <footer>
        <a href="#header" style="position:fixed; bottom:1em; right:1em; background-color:#333; color:#fff; padding:5px">RETOUR EN HAUT</a>
    </footer>

</body>
</html>