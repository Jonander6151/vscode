<?php
$lista=array(1, 2, 4, 8, 2, 1, -1, 7, 9, 5);
$max=-9999999;
for($i=0;$i<count($lista);$i++){
    if($max<$lista[$i]){
        $max=$lista[$i];
    }
}
echo "Hurrengo lista aukerak ditugu:";
var_dump($lista);
echo "<br> Zenbaki hauetatik handiena " . $max . " da.";
?>