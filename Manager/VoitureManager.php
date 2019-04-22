<?php

class VoitureManager extends Connect
{
    const TABLE = 'VoitureManager';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(Voiture $voiture){
        $query="INSERT INTO `Voiture`
                        ( `id`, `marque`, `model`,`prix`, `nbPortes`, `clim` , `siegeChauffant`, `isQuatro`) 
                VALUES   
                ('" . $voiture->getMarque() .
            "','" . $voiture->getModel() .
            "','" . $voiture->getPrix() .
            "','" . $voiture->getNbPortes() .
            "','" . $voiture->getClim() .
            "'," . $voiture->getSiegeChauffant() .
            ", false)";

        var_dump($query);
        
        $voiture->setId();
       
       (parent::execute($query));

    }


    public function insert(Voiture $voiture)
    {
        $query = "INSERT INTO `Voiture`
                       (`marque`, `model`,`prix`, `nbPortes`, `clim` , `siegeChauffant`, `isQuatro`)
                 VALUES
                       ('" . $voiture->getMarque() .
            "','" . $voiture->getModel() .
            "','" . $voiture->getPrix() .
            "','" . $voiture->getNbPortes() .
            "','" . $voiture->getClim() .
            "'," . $voiture->getSiegeChauffant() .
            ", false)";

        var_dump($query);

        parent::execute($query);
    }

    public function delete(Voiture $voiture){
        $query = "DELETE FROM `Voiture` WHERE `id` = ". $voiture->getId();
        parent::execute($query);
    }

    public function update(Voiture $voiture){
        $query = "UPDATE `Voiture` SET marque = voiture.marque,
                                      model = voiture.model,
                                      prix = voiture.prix,
                                      nbPortes = voiture.nbPortes,
                                      clim = voiture.clim,
                                      siegeChauffant = voiture.siegeChauffant,
                                      isQuatro = voiture.isQuatro,
                                      WHERE `id` = ". $voiture->getId();
        parent::execute($query);

    }

    public function select(){

    }

    public function selectAll(){

    }
}
?>