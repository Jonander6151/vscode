<?php
    $lista = ["Zaldia" => "Horse", "Behia" => "Cow", "Txakurra" => "Dog", "Katua" => "Cat", "Igela" => "Frog", "Sugea" => "Snake", "Txoria" => "Bird"];
    ksort($lista);
    echo "Gakoz ordenatuta:";
    var_dump($lista);
    echo "<br>Balioz ordenatuta:";
    natsort($lista);
    var_dump($lista);
?>