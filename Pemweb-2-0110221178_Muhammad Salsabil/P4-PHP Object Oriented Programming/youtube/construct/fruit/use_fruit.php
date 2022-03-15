<?php
require_once ('class_fruit.php');

$apple = new Fruit('Apple', 'Red');
echo $apple->get_name();
echo '<br>';
echo $apple->get_color();

?>