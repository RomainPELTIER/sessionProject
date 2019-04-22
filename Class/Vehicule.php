<?php

abstract class Vehicule implements VehiculeInterface
{
    private $marque;
    private $model;
    private $prix;

    public function __set($name, $value){
        echo ('L\'attribut n\'existe pas ou est privé');
    }

    public function __get($name){
        echo ('Impossible d\'afficher la valeur');
    }


    public function __construct($marque, $model, $prix)
    {
        $this->marque = $marque;
        $this->model = $model;
        $this->prix = $prix;
    }

    private function setId($id)
    {
        $this->id=$id;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}

?>