<?php
 include("pertsonaia.php");
 include("salto.php");
 include("etsaia.php");
 include("mario.php");
 include("luigi.php");
 include("goomba.php");
 include("koopa.php");

 $mario = new Mario("Mariano",3, 1, 4, "Sua bota");
 $luigi = new Luigi("Luis", 3, 1, 3, "Handia egin");
 $koopa = new Koopa("Koldo", 2, 1, 1, 1, true);
 $goomba = new Goomba("Gorka", 1, 1, 2, 1, 2);

 echo "Marioren bizi puntuak" . $mario->getBiziPuntuak() . " dira eta boterera " . $mario->getGaitasunBerezia() ." da. " . $mario->mugitu() . " eta salto egin du " . $mario->saltoEgin() . " potentziarekin. <br>";
 echo "Lugiren bizi puntuak:" . $luigi->getBiziPuntuak() . " dira eta boterera " . $luigi->getGaitasunBerezia() ." da. " . $luigi->mugitu() . " eta salto egin du " . $luigi->saltoEgin() . " potentziarekin. <br>";
 echo "Kooparen bizi puntuak:" . $koopa->getBiziPuntuak() . " " . $koopa->mugitu() . ".<br>";
 echo "Goomba bizi puntuak:" . $goomba->getBiziPuntuak() . " " . $goomba-> mugitu() . ".<br>";
 echo "Koopak Mariori eraso dio...<br>";
 $mario->minaJaso($koopa->erasoEgin());
 echo "Koopak egingo dion erasoaren balioa:" . $koopa->erasoEgin() . ".<br>";
 echo "Mariori gelditzen zaion bizitza: " . $mario->getBiziPuntuak() . ".<br>"; 
  echo "Luigik Koopari eraso dio...<br>";
 $koopa->minaJaso($luigi->erasoEgin());
 echo "Luigik egingo dion erasoaren balioa:" . $luigi->erasoEgin() . ".<br>";
 echo "Koopari gelditzen zaion bizitza: " . $koopa->getBiziPuntuak() . ".<br>"; 
 echo "Koopa elimituatuta gelditu da... Baina Goombak atzetik Mariori eraso dio. <br>";
 $mario->minaJaso($goomba->erasoEgin());
 echo "Goombak egingo dion erasoaren balioa:" . $goomba->erasoEgin() . ".<br>";
 echo "Mariori gelditzen zaion bizitza: " . $mario->getBiziPuntuak() . ".<br>"; 
 echo "Mario eliminatu egin da. : (";
?>