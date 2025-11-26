<?php
//Démarrage de la session
session_start();

//Importer les ressources
include './model/userModel.php';


//1) Je vais devoir récupérer l'url entré par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);

//Différence entre REQUEST URI, et parse_url : rajouter derrière votre url ?x=17  (une variable GET)
echo "REQUEST URI : ".$_SERVER['REQUEST_URI']; //REQUEST URI ne fait pas la distinction entre le path seul et le path+variable GET

echo "<br><br>";

var_dump($url); //parse_url découpe l'url pour avoir d'un côté le path, et de l'autre les variables GET

echo "<br><br>";

//1.2) Vérifie si l'utilisateur à entre l'url (le path) d'une page de notre site, ou bien s'il a juste entré le nom de domaine
$path='';
if(isset($url['path'])){ //l'utilisateur a entré une url, on conserve l'url
    $path = $url['path'];
}else{ //l'utilisateur a entré le nom de domaine, on conserve la racine du site
    $path = '/projet_php/Router/';
}

//2) Je vais devoir comparer cette url aux routes que j'ai mis en place (mes propres url que j'ai choisis pour mon site)
switch($path){
    //Chemin vers le domaine / page d'accueil
    case '/projet_php/Router/' :
    case '/projet_php/Router/home' :
        //3) J'appelle le controller de la route correspond à l'url demandé par le client
        include './controller/home.php';
        break;
    
    //Chemin vers la page du compte utilisateur
    case '/projet_php/Router/moncompte' :
        //3) J'appelle le controller de la route correspond à l'url demandé par le client
        include  './controller/account.php';
        break;

    //Par défaut : Erreur 404
    default :
        include './controller/404.php';
}

?>