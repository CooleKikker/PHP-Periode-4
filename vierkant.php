<?php

class Vierkant extends Figuur {
    public function __construct($Ix){
        $this->setX($Ix);
    }
    function berekenOppervlakte(){
        return pow($this->x, 2);
    }
    public function getX(){
        return $this->x;
    }
}

?>