<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;

    function set_name($n)
    {
        $this->name = $n;
    }
    protected function set_color($n)
    {
        $this->name = $n;
    }
    private function set_weight($n)
    {
        $this->name = $n;
    }
}

// $manggo = new Fruit();

$manggo->name = 'Manggo'; //ok
$manggo->color = 'Yellow'; //error
$manggo->weight = '300'; //error

?>