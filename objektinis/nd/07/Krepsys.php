<?php

class Krepsys
{
    private $dydis = 0;

    function krepsioDysis()
    {

        echo $this->dydis, '<br>';
        return $this->dydis;
    }


    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {

        $this->$prop += $value;
    }
}