<?php
$hitza="Kaixo";
$tamaina=strlen($hitza);
$kontadorea=0;
for($i=0;$i<$tamaina;$i++){
    if($hitza[$i]=="a" or $hitza[$i]=="e" or $hitza[$i]=="i" or $hitza[$i]=="o" or $hitza[$i]=="u"){
    $kontadorea++;
    }elseif($hitza[$i]=="A" or $hitza[$i]=="E" or $hitza[$i]=="I" or $hitza[$i]=="O" or $hitza[$i]=="U"){
    $kontadorea++;
    }
}
echo $kontadorea;
?>