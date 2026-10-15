<?php
interface Elikadura{
    public function jatenDu():string;
    public function ankaDitu():string;
}

abstract class Animaliak{
    public function bizitzaDu(){
        return "Bizi-iraupena: ";
    }
}

class Katua extends Animaliak implements Elikadura{
    public function jatenDu():string{
        return "Katuak haragia jaten du!<br>";
    }
    public function ankaDitu():string{
        return "Katuak 4 anka ditu.<br>";
    }

    public function bizitzaDu(){
        return parent::bizitzaDu() . " 18 urte.<br>";
    }
}

class Kangurua extends Animaliak implements Elikadura{
    public function jatenDu():string{
        return "Kaguruak frutak eta belarrak jaten ditu!<br>";
    }
    public function ankaDitu():string{
        return "Kanguruak 2 anka ditu.<br>";
    }

    public function bizitzaDu(){
        return parent::bizitzaDu() . " 6 urte.<br>";
    }
}

$katua = new Katua();
echo $katua->jatenDu();
echo $katua->ankaDitu();
echo $katua->bizitzaDu();

$kangurua = new Kangurua();
echo $kangurua->jatenDu();
echo $kangurua->ankaDitu();
echo $kangurua->bizitzaDu();
?>