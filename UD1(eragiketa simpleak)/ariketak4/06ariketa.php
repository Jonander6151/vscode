<?php
$lista=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$batura=0;
for($i=0;$i<count($lista);$i++){
    $lista[$i] = random_int(0,99);
}

for($i=0;$i<count($lista);$i++){
    $batura+=$lista[$i];
}
echo "Hurrengo lista dugu:";
var_dump($lista);
echo "<br> Zenbaki hauen batazbestekoa " . $batura/10 . " da.";
?>