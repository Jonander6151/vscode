
<?php
class Ikaslea{

    public static function getIkasleak(){   
        $mysqli = new mysqli("localhost", "root", "", "ikastola_php");
        if ($mysqli->connect_errno) {
            echo "Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        return $mysqli->query("SELECT izena, email FROM ikasleak;");
    }

    public static function updateIkasleak(int $id,string $izena, string $emaila){

    }
    public static function deleteIkasleak(int $id){
        
    }   
    public static function createIkasleak(string $izena, string $emaila){

    }
}
?>