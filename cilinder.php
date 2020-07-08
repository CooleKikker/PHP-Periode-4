<?php
class Cilinder extends Figuur{
    public function __construct($Ir, $Ih){
        $this->r = $Ir;
        $this->h = $Ih;
    }
    public function getR(){
        return $this->r;
    }
    public function getH(){
        return $this->h;
    }
    function berekenOppervlakte(){

        $Cirkels_opp = 2 * $this->PI * pow($this->r,2);
        $Buis_opp = 2 * $this->PI * $this->r * $this->h;
        return $Cirkels_opp + $Buis_opp;


    }

}
?>