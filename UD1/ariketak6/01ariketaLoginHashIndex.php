<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>01ariketaFormularioa</title>
    </head>

    <body>
        <h2>Sartu zure erabiltzailea eta pasahitza</h3>
        <form action="01ariketaLoginHash.php" method="post">
            Erabiltzailea:<input type="text" name="erabiltzailea">
            <br><br>
            Pasahitza:<input type="password" name="pasahitza">
            <br><br>
            <input type="submit" value="bidali">
        </form>
        <?php if(isset($_SESSION["mezua"])): ?>
        <p><?php echo $_SESSION["mezua"] ?>
        <?php unset($_SESSION["mezua"]) ?></p>
        <?php endif; ?>    
    </body>
</html>