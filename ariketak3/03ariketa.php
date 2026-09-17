<?php
if(isset($_GET["bikoitiak"])){
    $alderdiBikoitiak = $_GET["bikoitiak"];
    if($alderdiBikoitiak){
        $limitea=random_int(1,99);
        echo "Auzaz hartutako zenbakia: " . $limitea . "<br>";
        for($i=2;$i<=$limitea;$i+=2){
            echo $i , ", ";
        }
    }else{
        for($i=1;$i<=99;$i+=2){
            echo $i , ", ";
        }
    }
}else{
    echo "Ez da balioa ondo esleitu!";
}
?>