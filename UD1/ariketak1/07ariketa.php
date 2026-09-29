<?php
$zenb=5;
echo ("NOTA: " . $zenb . "<br>");
if($zenb>=0 and $zenb<=4.9){
    echo ("Ez gaindituta!");
}else if($zenb>=5 and $zenb<=5.9){
    echo ("Nahiko!");
}else if($zenb>=6 and $zenb<=6.9){
    echo ("Ondo!");
}else if($zenb>=7 and $zenb<=8.9){
    echo ("Oso Ondo!");
}else if($zenb>=9 and $zenb<=10){
    echo ("Bikain!");
}else{
    echo ("AKATSA!");
}
?>