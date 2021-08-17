<?php

class kibiras
{

    protected $akmenuKiekis = 100;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
    }
    public function pridetiDaugAkmeni($kiek)
    {
        $this->akmenuKiekis += $kiek;
    }
    public function kiekPririnktaAkmenu()
    {
        var_dump($this->akmenuKiekis);
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