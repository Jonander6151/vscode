<?php
abstract class Pertsonaia{
    private string $izena;
    private int $biziPuntuak;
    private int $indarra;
    private int $arintasuna;


        function __construct(string $izena, int $biziPuntuak, int $indarra, int $arintasuna){
        $this->izena=$izena;
        $this->biziPuntuak=$biziPuntuak;
        $this->indarra=$indarra;
        $this->arintasuna=$arintasuna;
        }
    public function getIzena(){
        return $this->izena;
    }
        public function getBiziPuntuak(){
        return $this->biziPuntuak;
    }
        public function getIndarra(){
        return $this->indarra;
    }
        public function getArintasuna(){
        return $this->arintasuna;
    }

    abstract function mugitu():string;
    abstract function erasoEgin():int;
    public function minaJaso(int $mina){
        if($this->biziPuntuak-$mina < 0){
            $this->biziPuntuak = 0;
        }else{
            $this->biziPuntuak -= $mina;
        }
        
    }

}
?>