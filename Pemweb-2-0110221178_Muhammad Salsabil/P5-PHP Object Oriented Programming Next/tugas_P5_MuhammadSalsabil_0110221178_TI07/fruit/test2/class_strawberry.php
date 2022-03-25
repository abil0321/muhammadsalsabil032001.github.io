<?php

use Strawberry as GlobalStrawberry;

require_once 'class_fruit.php';

class Strawberry extends Fruit{
    public function message()
    {
        echo "Am I a fruit or berry? ";
    }
}

$straberry = new GlobalStrawberry("Strawberry", "red");
$straberry->message();
$straberry->intro();
?>