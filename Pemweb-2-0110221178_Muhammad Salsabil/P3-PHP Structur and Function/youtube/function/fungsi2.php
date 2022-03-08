<?php
function pangkatDua($a){
    global $a;
    $a = $a * $a;
    // echo $a;
}

$a = 20;
echo 'Sebelum Nilai $a : ' . $a . '<br>';

pangkatDua($a);
echo '<br> Sesudah Nilai $a : ' .$a;
?>