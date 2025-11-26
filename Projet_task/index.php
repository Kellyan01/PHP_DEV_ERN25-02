<?php
//Démarage de la Session
session_start();

//Import des Ressources
include './utils/functions.php';
include './Model/UsersModel.php';
include './Model/CategoryModel.php';
include './Model/TaskModel.php';
include './View/header.php';
include './View/footer.php';

//Récupération du path de l'url
$url = parse_url($_SERVER['REQUEST_URI']);

//Test le path reçu dans $url
$path ='';
if(isset($url['path'])){
    //Correctement rempli, on le récupère dans une variable $path
    $path = $url['path'];
}else{
    //Sinon, on conserve l'url de la base du projet dans $path
    $path = "/projet_php/Projet_task/";
}

//Mise en place des routes
switch($path){
    case "/projet_php/Projet_task/" :
    case "/projet_php/Projet_task/accueil" :
        include './View/view_accueil.php';
        include './Controller/accueil.php';

        $accueil = new AccueilController();
        $accueil->displayAccueil();

        break;

    case "/projet_php/Projet_task/moncompte" :
        include './View/view_compte.php';
        include './Controller/info.php';

        $info = new InfoController();
        $info->displayInfo();

        break;

    case "/projet_php/Projet_task/mytodoes" :
        include './Controller/task.php';
        break;
    
    case "/projet_php/Projet_task/deco" :
        include './Controller/deco.php';
        break;

    default :
        echo "Erreur 404";
        break;
}