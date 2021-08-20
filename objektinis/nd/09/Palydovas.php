<?php

class Palydovas
{
    private $name;
    public static $palydovas = ['Deimas', 'Fobas'];
    public static $naujasPalydovas = [];


    public static function getPalydovas()
    {

        if (count(self::$naujasPalydovas) < 2) {
            return  self::$naujasPalydovas[] = new self(self::$palydovas[count(self::$naujasPalydovas)]);
        } else {
            return  self::$naujasPalydovas[rand(0, 1)];
        }
    }

    private function __construct($name)
    {
        $this->name = $name;
    }
}