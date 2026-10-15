<?php
class Koopa extends Etsaia
{
    private bool $oskolBerdeaDa;


    function __construct(string $izena, int $biziPuntuak, int $indarra, int $arintasuna,  int $boterea, bool $oskolBerdeaDa){
        parent::__construct($izena, $biziPuntuak, $indarra, $arintasuna, $boterea);
        $this->oskolBerdeaDa=$oskolBerdeaDa;
    }

    public function isOskolBerdea(){
        return $this->oskolBerdeaDa;
    }

    public function mugitu():string{
        return "Koopa mugitu da";
    }

    public function erasoEgin():int{
        if ($this->oskolBerdeaDa) {
            return $this->getArintasuna() * 2;
        } else {
            return $this->getArintasuna();
        }

    }
}
