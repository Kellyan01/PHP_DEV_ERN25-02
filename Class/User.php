<?php
class User {
    //Attribut
    private ?string $nom;
    private ?string $prenom;
    private ?array $phones;

    public function __construct($nom, $prenom, $listPhones){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->phones = $listPhones;
    }

    //Getter, retourne le nom de l'objet
    public function getNom(){
        return $this->nom;
    }

    //Sette, modifier le nom de l'objet
    private function setNom($newNom){
        $this->nom = $newNom;
        return $this;
    }

    //Getter Phone
    public function getPhones():array{
        return $this->phones;
    }

    //METHODS
    protected function sayHello(){
        echo "Hello !";
    }
}