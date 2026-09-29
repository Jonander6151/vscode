
<?php
session_start();
    $erabiltzaileOfiziala = "juan.luis.03@gmail.com";
    $pasahitzOfiziala = password_hash("1234Abcd", 2);
    if(!empty($_POST["erabiltzailea"]) & !empty($_POST["pasahitza"])){
    if($_POST["erabiltzailea"]== $erabiltzaileOfiziala & password_verify($_POST["pasahitza"],$pasahitzOfiziala)){
        echo "<h1>Ongi etorri zerbitzarira!</h1><br>";
        echo "Zure erabiltzailea " . $_POST["erabiltzailea"] . " da.";
        echo "Zure pasahitza " . $_POST["pasahitza"] . " da.";
    }else{
        $_SESSION["mezua"] = "ERROREA! Ez duzu erabiltzaile edo pasahitza ondo sartu!";
        header("Location: 01ariketaLoginHashIndex.php");
        exit();
    }
    
    }
?>