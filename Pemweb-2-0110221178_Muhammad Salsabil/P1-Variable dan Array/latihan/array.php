<?php 
$_fruits = ["apple", "orange", "manggo"];

echo 'elemen buah index ke-2'. $_fruits[2];
echo '<br> jumlah Buah : ' . count($_fruits);
?>

<h3>Daftar Buah</h3>
<ol>
    <?php 
    $jumlah = count($_fruits);
    
    for ($i=0; $i < $jumlah ; $i++) { 
        echo '<li>' . $_fruits[$i] . '</li>';
    }
    ?>
</ol>

<?php 
    $umur = ['ahmad'=>20, 'ali'=>21, 'dewi'=>19];
    foreach ($umur as $k => $v) {
        echo '<br>'. $k . 'Usianya : ' . $v;
    }
?>

<?php 
$ar_jus = [
    ['buah'=>'mangga', 'harga'=>8000],
    ['buah'=>'Alpukat', 'harga'=>10000],
    ['buah'=>'durian', 'harga'=>14000],
];
?>

<ol>
    <?php
    foreach ($ar_jus as $jus) {
        echo '<li> Jus '. $jus['buah'] . 'harga : ' . $jus['harga'] . '</li>';
    }
    ?>
</ol>