<?php
include("IrudiGeometrikoa.php");
include("triangelua.php");

$irudia1 = new IrudiGeometrikoa();
$irudia1->setIzena("A");
$irudia1->setKolorea("urdina");
$irudia1->idatzi();
echo "<br>";
$triangelua= new Triangelua();
$triangelua->setIzena("B");
$triangelua->setKolorea("Berdea");
$triangelua->setAltuera(5);
$triangelua->setOinarria(3);
$triangelua->idatzi();
$triangelua->areaKalkulatu();
?>