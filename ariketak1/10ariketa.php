<?php
$gaurkoData=new DateTime();
$irteeraData=new DateTime('2026-12-24 03:30:00');
echo "Gaurko data " . $gaurkoData -> format("%y urte, %m hilabete, %d egun, %h ordu, %m minutu") . "<br>";
echo "Irteera data " . $irteeraData . "<br>";
$diferentzia = date_diff($irteeraData,$gaurkoData);
echo "Geratzen den denbora: " . $diferentzia;
?>