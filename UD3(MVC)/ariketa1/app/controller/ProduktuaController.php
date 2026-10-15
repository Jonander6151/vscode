<?php
require_once __DIR__ . "/../model/Produktua.php";
class ProduktuaController{
    public function index(){
        $produktuak=Produktua::guztiak();
        require_once __DIR__ . "/../view/Produktuak.php";
}
}

?>