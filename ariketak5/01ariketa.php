<?php
echo "<link rel='stylesheet' href='../ariketak4/taulak.css'>";
$pertsona1 = ["Izena" => "Pepe", "Abizena" => "Garcia" , "NAN" => "12345678N"];
$pertsona2 = ["Izena" => "Juan", "Abizena" => "Luis" , "NAN" => "87654321K"];
echo "<table><tr><th>Izena</th><th>Abizena</th><th>NAN</th></tr>";
$lista =[$pertsona1,$pertsona2];
for($i=0;$i<count($lista);$i++){
    echo "<tr><td>" . $lista[$i]["Izena"] . "</td><td>" . $lista[$i]["Abizena"] . "</td><td>" . $lista[$i]["NAN"] . "</td></tr>";
}
echo "</table>";
?>