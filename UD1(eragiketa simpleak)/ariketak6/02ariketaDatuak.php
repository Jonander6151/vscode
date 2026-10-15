<?php 
 echo "<h1>Datu pertsonalak</h1><br><br>";
 if(!empty($_POST["izena"])){
    echo "Zure izena " . $_POST["izena"] . " da.<br><br>";
 }else{
    echo "<p style='color:red'>Ez duzu adierazi zure izena.</p><br><br>";
 }
 if(!empty($_POST["abizena"])){
    echo "Zure abizenak " . $_POST["abizena"] . " dira.<br><br>";
 }else{
    echo "<p style='color:red'>Ez dituzu adierazi zure abizenak.</p><br><br>";
 }
  if(!empty($_POST["adina"])){
    echo "Zure adina " . $_POST["adina"] . " da.<br><br>";
 }else{
    echo "<p style='color:red'>Ez duzu adierazi zure adina.</p><br><br>";
 }
  if(!empty($_POST["pisua"])){
    echo "Zure pisua " . $_POST["pisua"] . " da.<br><br>";
 }else{
    echo "<p style='color:red'>Ez duzu adierazi zure pisua.</p><br><br>";
 }
   if(!empty($_POST["sexua"])){
    echo "Zure sexua " . $_POST["sexua"] . " da.<br><br>";
 }else{
    echo "<p style='color:red'>Ez duzu adierazi zure sexua.</p><br><br>";
 }
   if(!empty($_POST["estatuZibila"])){
    echo "Zure estatu zibila " . $_POST["estatuZibila"] . " da.<br><br>";
 }else{
    echo "<p style='color:red'>Ez duzu adierazi zure estatu zibila.</p><br><br>";
 }
   if(!empty($_POST("afizioa"))){
    echo "Zure afizioak: ";
    foreach($_POST("afizioa") as $afizioa){
      echo $afizioa . ", ";
    }
    echo " dira.<br>";
 }else{
    echo "<p style='color:red'>Ez duzu/dituzu adierazi zure afizioak.</p><br><br>";
 }
 echo "<button onclick='history.back()'>Bueltatu Formulariora</button>";
?>