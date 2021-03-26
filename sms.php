<?php

class Frult
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new Frult('Apple', 'Blue');
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();


class Names {
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$name = new Names('John');
echo $name->get_name();