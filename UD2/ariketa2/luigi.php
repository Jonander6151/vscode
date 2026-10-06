<?php
class Luigi extends Pertsonaia implements Salto
{
    private string $gaitasunBerezia;

    public function __construct(string $izena, int $biziPuntuak, int $indarra, int $arintasuna, string $gaitasunBerezia){
        parent::__construct($izena, $biziPuntuak, $indarra, $arintasuna);
        $this->gaitasunBerezia = $gaitasunBerezia;
    }

    public function getGaitasunBerezia()
    {
        return $this->gaitasunBerezia;
    }

    public function mugitu():string
    {
        return "Luigi mugitu da";
    }

    public function erasoEgin():int
    {
        return $this->getIndarra() + $this->getArintasuna();
    }

    public function saltoEgin():int
    {
        return $this->getIndarra() * $this->getArintasuna();
    }
}
