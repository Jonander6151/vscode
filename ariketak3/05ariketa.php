<?php
if(isset($_GET["zenbakia"])){
    $lehena=$_GET["zenbakia"];
    $segida="1 ";
    $lehena_da=true;
    $i=3;
    while($i<$lehena){
        $j=2;
        while($j<$i & $lehena_da){
            if($i % $j == 0){
                $lehena_da=false;
            }else{
                $j++;
            }
        }
        if($lehena_da){
            $segida.=$i . " ";
        }
        $i++;
        $lehena_da=true;
    }
    echo $segida;
}else{
    echo "Ez du balio onik eselituta!";
}
?>