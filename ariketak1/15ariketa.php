<?php
$esaldia="Kaixo mundua!";
$karakterea="*";
$tamaina=strlen($esaldia);
for($i=0;$i<$tamaina;$i++){
    if($esaldia[$i]=="a" or $esaldia[$i]=="e" or $esaldia[$i]=="i" or $esaldia[$i]=="o" or $esaldia[$i]=="u"){
    $esaldia[$i]=$karakterea;
    }elseif($esaldia[$i]=="A" or $esaldia[$i]=="E" or $esaldia[$i]=="I" or $esaldia[$i]=="O" or $esaldia[$i]=="U"){
    $esaldia[$i]=$karakterea;
    }
}
echo $esaldia;
?>