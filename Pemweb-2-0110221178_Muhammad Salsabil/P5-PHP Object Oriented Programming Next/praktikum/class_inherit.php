<?php

class Fruit{
    public $name, $color;

    function __construct($name, $color)
    {
        $this->$name = $name;
        $this->$color = $color;
    }
}
?>