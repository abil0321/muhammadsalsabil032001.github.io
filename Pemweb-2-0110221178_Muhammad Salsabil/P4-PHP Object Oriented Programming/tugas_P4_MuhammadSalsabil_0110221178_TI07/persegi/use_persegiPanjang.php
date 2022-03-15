<?php
require_once 'persegi_panjang.php';

$persegi = new PersegiPanjang(5, 5);
echo "<br><br>Luas Persegi Panjang dengan Panjang  ". $persegi->p. ' dan Lebar '. $persegi->l . ' adalah ' .  $persegi->luasPersegiPanjang();
?>