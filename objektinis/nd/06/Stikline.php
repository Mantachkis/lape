<?php

class Stikline
{

    private $turis;
    private $kiekis = 0;

    public function __construct($turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {

        if ($this->turis > $kiekis) {
            $this->kiekis += $kiekis;
        } else {
            $this->kiekis = $this->turis;
        }
    }

    public function kiekPripilta()
    {
        echo $this->kiekis, '<br>';
    }

    public function ispilti()
    {
        $temp = $this->kiekis;
        $this->kiekis = 0;
        return $temp;
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