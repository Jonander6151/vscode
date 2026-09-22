<?php
$astea = $hilabeteak = ["Astelehena" => 1, "Asteartea" => 2, "Asteazkena" => 3, "Osteguna" => 4, "Ostirala" => 5, "Zapatua" => 6, "Igandea" => 7];
echo "Funtzioak erabilita:<br>";
echo "Batura:" . array_sum($astea) . "<br>";
echo "Batazbestekoa:" . array_sum($astea)/count($astea) . "<br>";
echo "Eskuz eginda:<br>";
$batura = 0;
$batazbestekoa = 0;
foreach($astea as $eguna => $balioa){
    $batura += $balioa;
}
echo "Batura guztira:" . $batura . "<br>";
echo "Batazbestekoa:" . $batura/count($astea);
?> 