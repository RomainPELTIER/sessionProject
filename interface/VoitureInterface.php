<?php
interface VoitureInterface extends VehiculeInterface {
    public function getNbPortes();
    public function setNbPortes($nbPortes);
    public function getClim();
    public function setClim($clim);
    public function getSiegeChauffant();
    public function setSiegeChauffant($siegeChauffant);
    public function getId();
}
?>