<?php
require_once 'class_nilaisiswa.php';

$ns1 = new NilaiSiswa();
$ns1 -> nama = 'Faiz Fikri';
$ns1->nilai = 80;
echo $ns1->nama . ' Sekolah di ' . $ns1->sekolah . ' telah mendapatkan nilai ' . $ns1->nilai . ' pada saat ujian nasional';
echo "<br> ----------------------------------------------- <br><br>";

echo $ns1->nama . ' Sekolah di ' . $ns1->sekolah . ' telah mendapatkan nilai ' . $ns1->nilai . ' pada saat ujian nasional Dinyatakan ' . $ns1->getHasil();

?>