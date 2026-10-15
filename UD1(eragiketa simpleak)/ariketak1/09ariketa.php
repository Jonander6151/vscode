<?php
$zenb1=5;
$zenb2=8;
$batazbestekoa = ($zenb1 + $zenb2)/2;
echo("Nota 1= " . $zenb1 . "<br>");
echo("Nota 2= " . $zenb2 . "<br>");
echo("Batazbestekoa= " . $batazbestekoa . "<br>");
if($batazbestekoa>=0 and $batazbestekoa <= 4.9){
    echo("Ez gainditua!");
}else if($batazbestekoa>=5 and $batazbestekoa <= 10){
    echo("Gainditua!");
}else{
    echo("Ez daude ondo kalifikazioak!");
}
?>