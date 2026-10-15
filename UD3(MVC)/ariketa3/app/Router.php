<?php
class Router{
    public static function bideratu(){
        require_once __DIR__ . "/./controller/IkasleaController.php";

        if(isset($_GET['action']) && $_GET['action'] == 'editatu'){
            $ikasleaController = new IkasleaController();
            $ikasleaController->index();
        }elseif(isset($_GET['action']) && $_GET['action'] == 'ezabatu'){

        }elseif(isset($_GET['action']) && $_GET['action'] == 'gehitu'){

        }elseif(isset($_GET['action']) && $_GET['action'] == 'irakErakutsi'){

        }
            
    }
}
?>