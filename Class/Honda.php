<?php

class Honda extends Moto implements HondaInterface{

    protected $turbo;



    public function __construct($id, $marque, $model, $prix, $topCase, $turbo, $isJaponnaise)
    {
        $this -> turbo = $turbo;
        parent::__construct($id, $marque, $model, $prix, $topCase, $isJaponnaise);
    }

    private function setId($id)
    {
        $this->id=$id;
    }

    /**
     * @return mixed
     */
    public function getTurbo()
    {
        return $this->turbo;
    }

    /**
     * @param mixed $turbo
     */
    public function setTurbo($turbo)
    {
        $this->turbo = $turbo;
    }
}

?>