<?php
    class triangelua extends IrudiGeometrikoa{
        private $oinarria;
        private $altuera;

        public function setOinarria($oinarria){
    $this -> oinarria = $oinarria;
}

public function setAltuera($altuera){
    $this -> altuera = $altuera;
}
    public function idatzi(){
        parent::idatzi();
            echo "Oinarria: " . $this->oinarria . "<br>";
            echo "Altuera: " . $this->altuera . "<br>";
    }



    public function areaKalkulatu(){
        $triangeluArea=($this->oinarria * $this->altuera)/2;
        echo "Triangeluaren area: " . $triangeluArea . " da.";
    }
    }
?>