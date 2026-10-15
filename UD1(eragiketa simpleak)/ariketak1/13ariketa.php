<?php
$hitza="aitorroia";
$tamaina=strlen($hitza);
$j=$tamaina-1;
$palindromoa=true;
for($i=0;$i<$tamaina/2;$i++){
    if($hitza[$i]!=$hitza[$j]){
        $palindromoa=false;
    }
    $j--;
}
if($palindromoa){
    echo "Palindromoa da!";
}else{
    echo "Ez da palindromoa!";
}

?>