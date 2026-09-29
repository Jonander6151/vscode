<?php 
class IrudiGeometrikoa{
    private $izena;
    private $kolorea;


function __construct(){
}

public function getIzena(){
    return this -> izena;
}

public function getkolorea(){
    return this -> kolorea;
}

public function setIzena($izena){
    $this -> izena = $izena;
}

public function setKolorea($kolorea){
    $this -> kolorea = $kolorea;
}

public function idatzi(){
    echo "Izena: " . $this->izena . "<br>";
    echo "Kolorea: " . $this->kolorea . "<br>";
}
}
?>