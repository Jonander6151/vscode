<?php
$lista=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
for($i=0;$i<count($lista);$i++){
    $lista[$i] = random_int(0,99);
}

$min=9999999;
for($i=0;$i<count($lista);$i++){
    if($min>$lista[$i]){
        $min=$lista[$i];
    }
}
echo "Hurrengo lista aukerak ditugu:";
var_dump($lista);
echo "<br> Zenbaki hauetatik txikiena " . $min . " da.";
?>