<?php
class Phone {
    //ATTRIBUTS
    private ?string $couleur;

    //Constructeur
    public function __construct(string $couleur){
        $this->couleur = $couleur;
    }

    //GETTER ET SETTER
    public function getCouleur():string{
        return $this->couleur;
    }

    public function setCouleur(string $couleur):Self{
        $this->couleur = $couleur;
        return $this;
    }

    //METHOD
    public function call(int $phoneNumber):Void{
        echo "Appel sortant vers $phoneNumber";
    }
}