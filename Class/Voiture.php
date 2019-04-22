<?php
abstract class Voiture extends Vehicule {

    private $nbPortes;
    private $clim;
    private $siegeChauffant;
    protected $id;

    public function __set($name, $value){
        echo ('L\'attribut n\'existe pas ou est privé');
    }

    public function __get($name){
        echo ('Impossible d\'afficher la valeur');
    }


    public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant, $id)
    {
        parent::__construct($marque, $model, $prix);
        $this->nbPortes = $nbPortes;
        $this->clim = $clim;
        $this->siegeChauffant = $siegeChauffant;
        $this->id = $id;

    }

    public function persist(){
        $voitureManager = new VoitureManager();
        $voitureManager->insert($this);
    }

    public function erase(){
        $voitureManager = new VoitureManager();
        $voitureManager->delete($this);
    }

    public function update(){
        $voitureManager = new VoitureManager();
        $voitureManager->update($this);
    }

    public function getId()
    {
        return $this->id;
    }

    private function setId($id)
    {
        $this->id=$id;
    }

    /**
     * @return mixed
     */
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    /**
     * @param mixed $nbPortes
     */
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }

    /**
     * @return mixed
     */
    public function getClim()
    {
        return $this->clim;
    }

    /**
     * @param mixed $clim
     */
    public function setClim($clim)
    {
        $this->clim = $clim;
    }

    /**
     * @return mixed
     */
    public function getSiegeChauffant()
    {
        return $this->siegeChauffant;
    }

    /**
     * @param mixed $siegeChauffant
     */
    public function setSiegeChauffant($siegeChauffant)
    {
        $this->siegeChauffant = $siegeChauffant;
    }
}
?>