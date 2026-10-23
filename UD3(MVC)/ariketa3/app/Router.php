<?php 
class Router{
    public static function bideratu(){
        require_once __DIR__ . "/./controller/IkasleaController.php";
        $ikasleaController = new IkasleaController();
        $ikasleaController->erakutsiDenak();
        if(isset($_GET['action']) && $_GET['action'] == 'editatu'){

        }elseif(isset($_GET['action']) && $_GET['action'] == 'ezabatu'){

        }elseif(isset($_GET['action']) && $_GET['action'] == 'gehitu'){
            
        }elseif(isset($_GET['action']) && $_GET['action'] == 'irakErakutsi'){

        }
        Router::bideratu();
    }
}
?>