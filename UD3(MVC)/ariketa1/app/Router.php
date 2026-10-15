<?php
class Router{
    public static function bideratu(){
        if(isset($_GET['action']) && $_GET['action'] == 'produktuak'){
            $produktuaController = new ProduktuaController();
            $produktuaController->index();
        }else{
            require __DIR__ . "/view/Hasiera.php";
        }
    }
}
?>