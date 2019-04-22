<?php
class Audi extends Voiture implements AudiInterface {

    private $isQuatro;


    public function __set($name, $value){
        echo ('L\'attribut n\'existe pas ou est privé');
    }

    public function __get($name){
        echo ('Impossible d\'afficher la valeur');
    }


    public function __construct( $marque, $model, $prix, $nbPortes, $clim, $siegeChauffant,  $id, $isQuatro){
        parent::__construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant, $id);
        $this->isQuatro = $isQuatro;
    }

    private function setId($id)
    {
        $this->id=$id;
    }

    /**
     * @return mixed
     */
    public function getisQuatro()
    {
        return $this->isQuatro;
    }

    /**
     * @param mixed $isQuatro
     */
    public function setIsQuatro($isQuatro)
    {
        $this->isQuatro = $isQuatro;
    }
}
?>