<?php
require_once ('nilai_siswa.php');

$ns1 = new NilaiSiswa('Rosa', 90);
$ns2 = new NilaiSiswa('Badu', 60);
$ns3 = new NilaiSiswa('Faiz', 70);
$ns4 = new NilaiSiswa('Rio', 50);
$ar_siswa = [$ns1, $ns2, $ns3, $ns4];

// echo $ns1->nama . ' : ' . $ns1->get_hasil(); 
// echo '<br>';
// echo $ns2->nama . ' : ' . $ns2->get_hasil(); 

foreach ($ar_siswa as $sis) {
    echo $sis->nama . ' Dengan Nilai ' . $sis->nilai . ' Dinyatakan ' . $sis->get_hasil() . '<br>'; 
}

?>