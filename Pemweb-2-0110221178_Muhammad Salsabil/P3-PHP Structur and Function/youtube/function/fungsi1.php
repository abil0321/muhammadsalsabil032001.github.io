<?php
function salam($nama=''){
echo"Selamat Datang " . strtoupper($nama);
}

function jumlah($a, $b){
    return $a + $b;
}

salam('Budi');
echo '<br>';
salam();

echo '<br> 2 + 9 = ' . jumlah(2,9);

$nama="";
?>