<?php
echo "<link rel='stylesheet' href='taulak.css'>";

$produktuLista=array("Sagarra", "Platanoa", "Meloia", "Mandarina","Madaria");
$prezioaLista=array(2.5, 3, 7, 1, 2);
echo "<table><tr><th>Produktua</th><th>Prezioa(€)</th></tr>";
for($i=0;$i<count($produktuLista);$i++){
    echo "<tr><td>$produktuLista[$i]</td><td>$prezioaLista[$i]</td></tr>";
}
echo "</table>";