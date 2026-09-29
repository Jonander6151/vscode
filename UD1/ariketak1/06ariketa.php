<?php
$zenb1 = 1;
$zenb2 = 2;
$batura = $zenb1 + $zenb2;
$biderketa = $zenb1 * $zenb2;
echo("Lehen zenbakia: " . $zenb1);
echo("<br>Bigarren zenbakia: " . $zenb2);
echo("<br>Batura: " . $batura);
echo("<br>Biderketa: " . $biderketa . "<br>");
if($batura > $biderketa){
    echo ("<b>Batura biderketa baino handiagoa da!</b>");
}else{
    echo ("<b>Biderktea batura baino handiagoa da!</b>");
}
?>