<?php
echo "<link rel='stylesheet' href='taulak.css'>";
class Pertsona{
    public $izena;
    public $abizena;
    public $NAN;
}

$erab1=new Pertsona();
$erab2=new Pertsona();
$erab1->izena = "Pepe";
$erab1->abizena = "Garcia";
$erab1->NAN = "12345678A";
$erab2->izena = "Juan";
$erab2->abizena = "Luis";
$erab2->NAN = "87654321K";
$lista=array($erab1,$erab2);

echo "<table style='border-collapse:collapse;width:100%'><thead><tr><th>IZENA</th><th>ABIZENA</th><th>NAN</th></tr></thead>";
for($i=0;$i<count($lista);$i++){
    echo"<tr><td>" . $lista[$i]->izena . "</td><td>" . $lista[$i]->abizena . "</td><td>" . $lista[$i]->NAN . "</td></tr>";
}
echo "</table>"
?>
