<?php
echo "<h4>Ariketa hau array indexatu normalekin eginda dago:</h4><br>";
$lista = array();
for($i=0;$i<50;$i++){
    $lista[$i]=random_int(0,49);
}
sort($lista);
var_dump($lista);
$kontadorea = 1;
for($i=0;$i<count($lista);$i++){
    if($i!=count($lista)-1 and $lista[$i]!=$lista[$i+1]){
        echo "<br>" . $lista[$i] . " zenbakia " . $kontadorea . " biderrez agertu da.";
        $kontadorea = 1;
    }elseif($i==count($lista)-1){
        if($lista[$i]==$lista[$i-1]){
            echo "<br>" . $lista[$i] . " zenbakia " . $kontadorea+1 . " biderrez agertu da.";
        }else{
            echo "<br>" . $lista[$i] . " zenbakia 1 biderrez agertu da.";
        }
    }else{
        $kontadorea++;
    }
}
?>