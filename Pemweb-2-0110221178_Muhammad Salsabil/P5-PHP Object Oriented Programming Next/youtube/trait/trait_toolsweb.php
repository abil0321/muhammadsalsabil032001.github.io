<?php
trait Toolsweb{
    public function cetakJudul($str)
    {
        echo "<h2>$str</h2>";
    }

    public function cetakFormatUang($uang)
    {
        echo number_format($uang,0,",",".");
    }
}

class Kasir{
    use Toolsweb;
    public function cetak($costumer, $uangbayar)
    {
        $this->cetakJudul("Pelanggan ". $costumer);
        $this->cetakFormatUang($uangbayar);
    }
}

$kasir = new Kasir();
$__costumer = "Danira Lusi";
$__uangbayar = 500000;
$kasir->cetak($__costumer, $__uangbayar);
?>