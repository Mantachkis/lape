<?php

class Pinigine
{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    private $monetos = 0;
    private $popieriniai = 0;

    public function monetos($kiek)
    {
        $this->monetos++;
    }
    public function popieriniai($kiek)
    {
        $this->popieriniai++;
    }


    public function ideti($kiekis)
    {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
            $this->popieriniai($kiekis);
        } else {
            $this->metaliniaiPinigai += $kiekis;
            $this->monetos($kiekis);
        }
    }

    public function skaiciuoti()
    {
        $suma = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        echo "pinigineje yra $suma <br>";
        echo "buvo monetų  $this->monetos <br>";
        echo "buvo poieriniu  $this->popieriniai <br>";
    }
}