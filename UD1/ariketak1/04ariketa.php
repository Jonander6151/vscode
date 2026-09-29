<?php 
$zenb1 = 10;
$zenb2 = 5;
$zenb3 = 15;
$lag = 0;
$ordenatuta="";
if($zenb1>$zenb2){
    $lag = $zenb1;
    $zenb1 = $zenb2;
    $zenb2 = $lag;
}elseif($zenb1>$zenb3){
    $lag = $zenb1;
    $zenb1 = $zenb3;
    $zenb3 = $lag;
}elseif($zenb2>$zenb3){
    $lag = $zenb2;
    $zenb2 = $zenb3;
    $zenb3 = $lag;
}
echo "Zenbakiak gorantz:" . $zenb1 . " " . $zenb2 . " " . $zenb3;

echo "<br>Zenbakiak beherantz:" . $zenb3 . " " . $zenb2 . " " . $zenb1;
?>