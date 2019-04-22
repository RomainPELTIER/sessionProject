<?php

class MotoManager extends Connect

        {
        const TABLE = 'Moto';

        public function __construct()
        {
        parent::__construct();
        }

        public function insert(Moto $moto){
        $query="INSERT INTO `Moto`( `$topCase`, `nbPlaces`, `isJaponnaise`) 
                VALUES    
                ('".$moto->getTopCase()."','"
            .$moto->getNbPlaces()."','"
            .$moto->getNbPlaces()."',"
            .", false)";
        parent::execute($query);
        }

        public function delete(){

        }

        public function update(){

        }

        public function select(){

        }

        public function selectAll(){

        }
}
?>
