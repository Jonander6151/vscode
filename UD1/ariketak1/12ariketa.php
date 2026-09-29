<?php
$hitza="Kaixo";
$tamaina=strlen($hitza);
$hitza_reves="";
for($i=--$tamaina;$i>=0;$i--){
$hitza_reves.=$hitza[$i];
}
echo $hitza_reves;
?>