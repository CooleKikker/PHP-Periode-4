<?php

abstract class Figuur {
    public $PI = 3.1415;
    protected $x, $y;
    private $omschrijving = "Een basisfiguur.";
    public function __construct($Ix, $Iy){
        $this->setX($Ix);
        $this->setY($Iy);
    }
    public function setX($Ix){
        $this->x = $Ix;
    }
    public function setY($Iy){
        $this->y = $Iy;
    }
    abstract function berekenOppervlakte();
    public function getOmschrijving(){
        return $this->omschrijving;
    }
    public function setOmschrijving($newomschrijving){
        $this->omschrijving = $newomschrijving;
    }


}


?>