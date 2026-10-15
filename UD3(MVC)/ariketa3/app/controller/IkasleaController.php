<?php
require_once __DIR__ . "/../model/Ikasleak.php";

class IkasleaController{
    public function erakutsiDenak(){
        $ikasleDatuak=Ikaslea::getIkasleak();
        require_once __DIR__ . "/../view/Hasiera.php";
}
}

?>