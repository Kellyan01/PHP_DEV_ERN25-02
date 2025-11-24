<?php
include 'Phone.php';
include "Admin.php";

$mathieu = new Admin("Mithridate","Mathieu",[new Phone("Noir"), new Phone("Blanc")]);

//var_dump($mathieu);

//L'objet Mathieu possède un tableau de téléphone
//Pour appeler avec un téléphone il doit :
// - prendre ses téléphone (->getPhones)
// - en choisir un (->getPhones[0])
// - utiliser la méthode call() tu téléphone choisi (->call())
$mathieu->getPhones()[0]->call(33068789632145);
?>