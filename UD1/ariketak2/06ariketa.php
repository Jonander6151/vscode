<?php
$lehenZenb=2;
$azkenZenb=5;
$batuketa=$lehenZenb;
$batuketa_proz="" . $lehenZenb;
for($i=1;$i<=$azkenZenb;$i++){
    $batuketa+=$i;
    $batuketa_proz.=" + " . $i;
}
echo $batuketa_proz;
echo "<br>Emaitza: " . $batuketa;
?>