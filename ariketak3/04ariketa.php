<?php
if(isset($_GET["zenbakia"])){
    $lehena=$_GET["zenbakia"];
    $lehena_da=true;
    for($i=2;$i<$lehena;$i++){
        if($lehena % $i ==0){
            $lehena_da=false;
        }
    }
    if($lehena_da){
        echo "Lehena da!";
    }else{
        echo "Ez da lehena!";
    }
}else{
    echo "Ez du balio onik eselituta!";
}
?>