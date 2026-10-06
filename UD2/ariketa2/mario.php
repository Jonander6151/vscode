<?php
class Mario extends Pertsonaia implements Salto{
    private string $gaitasunBerezia;

    function __construct(string $izena, int $biziPuntuak, int $indarra, int $arintasuna,  string $gaitasunBerezia){
        parent::__construct($izena, $biziPuntuak, $indarra, $arintasuna);
        $this->gaitasunBerezia=$gaitasunBerezia;
    }

    public function getGaitasunBerezia(){
        return $this->gaitasunBerezia;
    }
    public function mugitu():string{
        return "Mario mugitu da";
    }

    public function erasoEgin():int{
        return $this->getIndarra();
    }

    public function saltoEgin():int{
        return $this->getIndarra() * $this->getArintasuna();
    }
}
?>