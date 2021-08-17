<?php

class Pinigine
{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;


    public function ideti($kiekis)
    {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        } else
            $this->metaliniaiPinigai += $kiekis;
    }

    public function skaiciuoti()
    {
        $suma = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        echo "pinigineje yra $suma <br>";
    }


    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {

        $this->$prop = $value;
    }
}