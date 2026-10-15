<?php
    if(!empty($_POST["zenbakia1"]) & !empty($_POST["zenbakia2"])){
        
        if(is_numeric($_POST["zenbakia1"]) & is_numeric($_POST["zenbakia2"])){

        if(isset($_POST["gehiketa"])){
            echo $_POST["zenbakia1"] . " + " . $_POST["zenbakia2"] . " = " . $_POST["zenbakia1"] + $_POST["zenbakia2"];
        }elseif(isset($_POST["kenketa"])){
            echo $_POST["zenbakia1"] . " - " . $_POST["zenbakia2"] . " = " . $_POST["zenbakia1"] - $_POST["zenbakia2"];
        }elseif(isset($_POST["biderketa"])){
            echo $_POST["zenbakia1"] . " x " . $_POST["zenbakia2"] . " = " . $_POST["zenbakia1"] * $_POST["zenbakia2"];
        }elseif(isset($_POST["zatiketa"])){
            echo $_POST["zenbakia1"] . " / " . $_POST["zenbakia2"] . " = " . $_POST["zenbakia1"] / $_POST["zenbakia2"];
        }
        }else{
            echo "<h1 style='color:red'>Ez dituzu balio osoak sartu edo ez dituzu zenbakiak sartu.</h1>";
        }
    }else{
        echo "<h1 style='color:red'>Ez dituzu balioak bete.</h1>";
    }
?>