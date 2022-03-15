<?php
require_once 'class_matematika.php';

// variable dan function dalam bentuk static
Matematika::$counter++;
Matematika::$counter++;
echo 'Counter Sekarang : ' . Matematika::$counter;
echo "<br> ----------------------------------------------- <br><br>";

$x = Matematika::tambahkan(5,4);
echo "5 + 4 = " . $x;
echo "<br>-------------------------------------------------<br><br>";

Matematika::naikanCounter();
echo 'Counter Sekarang : ' . Matematika::$counter;
echo "<br>-------------------------------------------------<br><br>";

    //menggunakan konstanta class
echo 'NILAI PHI : ' . Matematika::PHI . '<br>';
$luasling = Matematika::luasLingkaran(8);
echo 'Luas Lingkaran dengan Jari2 nya sebesar 8 = ' . $luasling;
echo "<br>-------------------------------------------------<br><br>";



?>