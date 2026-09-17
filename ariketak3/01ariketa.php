<?php
$letra="";
if(isset($_GET["lerroKopurua"])){
    $lerroak = $_GET["lerroKopurua"];
    for($i=0;$i<$lerroak;$i++){
        echo $letra="o" . $letra;
        echo "<br>";
}
}else{
    echo "Lerrokopurua parametroa definitu gabe!";
}


?>