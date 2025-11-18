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
                <li><a href="#exercice22">Exercice 23</a></li>
                <li><a href="#exercice23">Exercice 23</a></li>
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

        <h2 id="exercice22">EXERCICE 22</h2>
        <?php
            /*Exercice 22 :
            Créer une page de Formulaire en méthode POST, qui va être un formulaire d'inscription. Il possèdera :
                - un champ login
                - un champ password
                - des checkbox pour savoir quel genre vous ailez (Fantasy, Science-Fiction, Horreur, Drame, Romance, Aventure, Comédie)
                - des boutons radio pour savoir si LE snack de ciné préféré (Popcorn, Glace, Chips)
                - un bouton Select pour connaître votre code postale à Toulouse (31000, 31100, 31200, 31300, 31400, 31500)

            Puis une fois que l'on soumet le formulaire, il affiche une liste avec l'ensemble des données envoyées*/

            //Initialiser la variable d'affichage
            $list = '';

            //Traitement du formulaire
            //1) Vérifier que le formulaire est réceptionné
            if(isset($_POST['inscription'])){
                $list = "<li>Login : {$_POST['login']}</li>
                        <li>Password : {$_POST['password']}</li>
                        <li>Mes genres de films : ";
                
                foreach($_POST['films'] as $value){
                    $list = $list."$value, ";
                }
                $list = $list."</li><li>Mon snack préféré : {$_POST['snack']}</li>
                    <li>Mon code postal : {$_POST['ville']}</li>";
            }
        ?>
        <form action="" method="post">
            <label for="login">Login</label><input type="text" id="login" name="login" required>
            <label for="password">Password</label><input type="text" id="password" name="password" required>
            <fieldset>
                <legend>Vos genres de film</legend>
                <input type="checkbox" id="fantasy" name="films[]" value="Fantasy"><label for="fantasy">Fantasy</label>
                <input type="checkbox" id="sf" name="films[]" value="Science-Fiction"><label for="sf">Science-Fiction</label>
                <input type="checkbox" id="horreur" name="films[]" value="Horreur"><label for="horreur">Horreur</label>
                <input type="checkbox" id="drame" name="films[]" value="Drame"><label for="drame">Drame</label>
                <input type="checkbox" id="romance" name="films[]" value="Romance"><label for="romance">Romance</label>
                <input type="checkbox" id="aventure" name="films[]" value="Aventure"><label for="aventure">Aventure</label>
                <input type="checkbox" id="comedie" name="films[]" value="Comedie"><label for="comedie">Comedie</label>
            </fieldset>

            <fieldset>
                <legend>Votre snack de ciné préféré :</legend>
                <input type="radio" id="popcorn" name="snack" value="Pop-Corn"><label for="popcorn">Pop-Corn</label>
                <input type="radio" id="glace" name="snack" value="Glace"><label for="glace">Glace</label>
                <input type="radio" id="chips" name="snack" value="Chips"><label for="chips">Chips</label>
            </fieldset>

            <fieldset>
                <legend>Indiquez votre code postal :</legend>
                <select name="ville">
                    <option value="31000">31000</option>
                    <option value="31100">31100</option>
                    <option value="31200">31200</option>
                    <option value="31300">31300</option>
                    <option value="31400">31400</option>
                    <option value="31500">31500</option>
                </select>
            </fieldset>

            <input type="submit" name="inscription" value="S'inscrire">
        </form>

        <ul>
            <?php echo $list ?>
        </ul>

        <h2 id="exercice23">Exercice 23 : Sécurité</h2>
        <?php
            /*Exercice 23 :
                Créer un formulaire qui va avoir :
                1 Login
                1 Email
                1 Mot de Passe
                1 Mot de Passe de vérification
                des checkbox pour des choix de plateforme VOD (Netflix, Prime Video, Disney+, HBO Max, Shadowz)

                1) Mettre en place la sécurité à la réception du formulaire (on a besoin qu'au moins une checkbox soit coché)
                2) Faire en sorte d'afficher les données sous forme de liste*/
        
            //Initialisation des variables d'affichages
            $erreur = '';
            $message = '';

            //Traitement du Formulaire
            //1) Vérifier la réception du formulaire
            if(isset($_POST['submitInscription'])){
                //2) Vérifier les champs vides
                if(!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordVerify']) && !empty($_POST['vods'])){
                    
                    //3) Vérifier le format des données
                    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

                        //BONUS : Vérification de l'intégrité des valeurs de mes checkbox
                        //Etape 1 : mettre une variable à true
                        $bool = true;
                        //Etape 2 : Vérifier chaque checkbox envoyé. Si au moins l'une d'elle ne correspond à aucune valeur attendue, je passe mon booléen à false
                        foreach($_POST['vods'] as $value){
                            if($value !== "Netflix" && $value !== "HBO Max" && $value !== "Prime Video" && $value !== "Disney+" ){
                                $bool = false;
                            }
                        }

                        //Etape 3 : je vérifie mon booléen. S'il est True, aucune corruption des valeurs, et donc je passe à la suite. S'il est False, alors il y a eu une manipulation d'au moins une valeur, et donc j'envoie une erreur
                        if($bool){
                            //4) Nettoyer les inputs
                            $login = htmlentities(stripslashes(strip_tags(trim($_POST['login']))));
                            $email = htmlentities(stripslashes(strip_tags(trim($_POST['email']))));
                            $password = htmlentities(stripslashes(strip_tags(trim($_POST['password']))));
                            $passwordVerify = htmlentities(stripslashes(strip_tags(trim($_POST['passwordVerify']))));

                            //Version Foreach
                            $tabVods = [];
                            foreach($_POST['vods'] as $value){
                                array_push($tabVods,htmlentities(stripslashes(strip_tags(trim($value)))));
                            }


                            //Version Array_map
                            $tabVodsBis = array_map(function($value){
                                return htmlentities(stripslashes(strip_tags(trim($value))));
                            },$_POST['vods']);

                            //6) Vérifier les correspondances des 2 mots de passe
                            if($password === $passwordVerify){

                                //7) Hasher le mot de passe
                                $password = password_hash($password, PASSWORD_DEFAULT);

                                //8) Affichage
                                $message = "<li>Login : $login</li>
                                            <li>Email : $email</li>
                                            <li>Password : $password</li>
                                            <li>VODs : ";
                                foreach($tabVods as $value){
                                    $message = $message."$value, ";
                                }
                                $message = $message."</li>";
                            
                            }else{
                                $erreur = "Vos mots de passe sont différents";
                            }

                        }else{
                            $erreur = "Valeur de checkbox inattendue !";
                        }
                        
                    }else{
                        $erreur = "Email pas au bon format";
                    }

                }else{
                    $erreur = "Il manque un truc !";
                }
            }
        ?>
        <form action="" method="post" style="display:flex; flex-direction:column; width:300px">
            <label for="login">Login</label><input id="login" type="text" name="login">
            <label for="email">Email</label><input id="email" type="email" name="email">
            <label for="password">Password</label><input id="password" type="password" name="password">
            <label for="passwordVerify">Retappez le Password</label><input id="passwordVerify" type="password" name="passwordVerify">
            <fieldset>
                <legend>Vos plateformes de VOD</legend>
                <input type="checkbox" id="netflix" name="vods[]" value="Netflix"><label for="netfilx">Netflix</label>
                <input type="checkbox" id="prime" name="vods[]" value="Prime Video"><label for="prime">Prime Video</label>
                <input type="checkbox" id="disney" name="vods[]" value="Disney+"><label for="disney">Disney+</label>
                <input type="checkbox" id="hbo" name="vods[]" value="HBO Max"><label for="hbo">HBO Max</label>
            </fieldset>
            <input type="submit" name="submitInscription" value="S'inscrire">
        </form>
        <p>
            <?php echo $erreur ?>
        </p>
        <ul>
            <?php echo $message ?>
        </ul>
    </main>
    <footer>
        <a href="#header" style="position:fixed; bottom:1em; right:1em; background-color:#333; color:#fff; padding:5px">RETOUR EN HAUT</a>
    </footer>

</body>
</html>