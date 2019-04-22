<?php
abstract class Moto extends Vehicule implements MotoInterface {


    private $topCase;
    private $nbPlaces;
    private $isJaponnaise;

    public function __set($name, $value){
        echo ('L\'attribut n\'existe pas ou est privé');
    }

    public function __get($name){
        echo ('Impossible d\'afficher la valeur');
    }



    public function __construct($marque, $model, $prix, $topCase, $isJaponnaise)
    {
        parent::__construct($marque, $model, $prix);
        $this->topCase = $topCase;
        $this->isJaponnaise = $isJaponnaise;

    }

    private function setId($id)
    {
        $this->id=$id;
    }
    /**
     * @return mixed
     */
    public function getTopCase()
    {
        return $this->topCase;
    }

    /**
     * @param mixed $topCase
     */
    public function setTopCase($topCase)
    {
        $this->topCase = $topCase;
    }

    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * @param mixed $nbPlaces
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;
    }

    /**
     * @return mixed
     */
    public function getIsJaponnaise()
    {
        return $this->isJaponnaise;
    }

    /**
     * @param mixed $isJaponnaise
     */
    public function setIsJaponnaise($isJaponnaise)
    {
        $this->isJaponnaise = $isJaponnaise;
    }

}
?>