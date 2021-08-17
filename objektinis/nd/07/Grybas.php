<?php

class Grybas
{
    private $valgomas;
    private $sukirmyjes;
    private $svoris;

    public function __construct()
    {
        $this->valgomas = (bool)random_int(0, 1);
        $this->sukirmyjes = (bool)random_int(0, 1);
        $this->svoris = rand(5, 45);
    }

    public function getValgomas()
    {
        return $this->valgomas;
    }
    public function getSukirmyjes()
    {
        return $this->sukirmyjes;
    }
    public function getSvoris()
    {
        return $this->svoris;
    }


    public function __get($prop)
    {
        return $this->$prop;
    }
}