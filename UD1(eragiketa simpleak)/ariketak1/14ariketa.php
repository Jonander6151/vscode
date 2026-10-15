<?php
$esaldia="Kaixo zelan zaude?";

$kont=0;
if($esaldia==""){
    echo "0";
}else{
    foreach(str_split($esaldia) as $i => $letra){
        if($letra==" "){
            $kont++;
        }
    }
    $kont++;
    echo $kont;
}
?>