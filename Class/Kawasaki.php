<?php

class Kawasaki extends Moto implements KawasakiInterface {
    private $isJaponaise;

    public function __set($name, $value){
        echo ('L\'attribut n\'existe pas ou est privé');
    }

    public function __get($name){
        echo ('Impossible d\'afficher la valeur');
    }


    public function __construct($model, $prix, $topCase)
    {
        parent::__construct("Kawasaki", $model, $prix, $topCase, true);
        $this->isJaponaise = true;
    }

    private function setId($id)
    {
        $this->id=$id;
    }
}
?>