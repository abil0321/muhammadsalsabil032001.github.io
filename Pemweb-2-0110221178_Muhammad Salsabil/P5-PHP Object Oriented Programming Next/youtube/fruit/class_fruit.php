<?php
class Fruit{
    public $name, $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color {$this->color}.";
    }
}

class Strawberry extends Fruit{
    public function message()
    {
        echo "Am I a fruit or berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->message();
$strawberry->intro();
?>