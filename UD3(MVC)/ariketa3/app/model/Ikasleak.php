
<?php
class Ikaslea{

    public static function getIkasleak(){   
        $mysqli = new mysqli("localhost", "root", "", "ikastola_php");
        if ($mysqli->connect_errno) {
            echo "Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        return $mysqli->query("SELECT izena, email, irakasgaia FROM ikasleak ikas INNER JOIN irakasgaiak irak WHERE ikas.id=irak.ikasle_id;")->fetchAll();
    }
    public static function updateIkasleak(){

    }
    public static function deleteIkasleak(){

    }
}
?>