<?php

class Cars {
    public $wheel = 4;
    static $doors = 5;

    function __construct(){
        echo $this->wheel;
        echo self::$doors++;
    }
}

$bmw = new Cars();

$toyota = new Cars();