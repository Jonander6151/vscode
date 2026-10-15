<?php
if(isset($_GET["lehena"]) and isset($_GET["azkena"])){
    $lehenZenb=$_GET["lehena"];
    $azkenZenb=$_GET["azkena"];
    $batuketa=0;
    for($i=$lehenZenb;$i<=$azkenZenb;$i++){
        $batuketa+=$i;
    }
    echo "Batuketa totala:" . $batuketa;
}else{
    echo "Balioak ez daude ondo sartuta!";
}

?>