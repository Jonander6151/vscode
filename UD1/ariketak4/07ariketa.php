<?php
$lista=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
echo count($lista);
$lerroa="";
for($i=0;$i<count($lista);$i++){
    $lista[$i] = random_int(1,200);
}
echo "Ausazko zenbakien errelazioa:<br>";
for($i=0;$i<count($lista);$i++){
    $lerroa .= $lista[$i] . " ";
}
echo $lerroa;
echo "<br>Beste modu bat array bateko elemntuak bistaratzeko:<br>";
print_r($lista);
$lerroa="";
echo "<br>Ausazko zenbakien errelazioa alderantziz:<br>";
for($i=9;$i>=0;$i--){
    $lerroa .= $lista[$i] . " ";
}
echo $lerroa;


?>