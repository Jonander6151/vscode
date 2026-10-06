<?php
abstract class Etsaia extends Pertsonaia
{
    private int $boterea;

    public function __construct(string $izena, int $biziPuntuak, int $indarra, int $arintasuna, int $boterea){
        parent::__construct($izena, $biziPuntuak, $indarra, $arintasuna);
        $this->boterea = $boterea;
    }

    public function getBoterea(){
        return $this->boterea;
    }

    abstract public function mugitu(): string;
    abstract public function erasoEgin(): int;

}
