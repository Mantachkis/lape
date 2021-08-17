<?php

class Kibiras3
{
    protected $akmenuKiekis = 0;

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
}