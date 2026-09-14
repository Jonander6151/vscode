<?php
$minutuak=10;

$kostua=10;
echo("Deiketa denbora: " . $minutuak . " minutu.<br>");
if($minutuak<=3){
    echo("Deiko kostu totala: " . $kostua . " zentimo.");
}else{
    $minutuak-=3;
    while($minutuak!=0){
        $kostua+=5;
        $minutuak--;
    }
    echo("Deiko kostu totala: " . $kostua . " zentimo.");
}

?>