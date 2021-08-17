<?php

class Kibiras2
{

    protected $akmenuKiekis;

    public function __construct()
    {

        $this->akmenuKiekis = rand(5, 45);
    }

    public function getKibiroKiekis()
    {
        return $this->akmenuKiekis;
    }
}

class Utility
{
    public static function akmenuKiekisVisuoseKibiruose($a, $b, $c)
    {
        return $a + $b + $c;
    }
}