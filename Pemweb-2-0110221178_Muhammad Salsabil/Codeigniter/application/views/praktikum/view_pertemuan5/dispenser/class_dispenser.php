<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    function __construct($vol, $vgel, $harga){
        $this->volume = $vol;
        $this->volumeGelas = $vgel;
        $this->hargaSegelas = $harga;

    }

    public function beli($segelas)
    {
        $isi = ($segelas * $this->volumeGelas);

        if ($this->volume > 0) {
            $this->volume = ($this->volume - $isi);
            echo "Pelanggan telah membeli $segelas gelas yang gelasnya berisi $this->volumeGelas ml.<br>Jadi sisa yang belum terjual ada $this->volume ml <br><br>";
        }
        else{
            echo "<b style=color:red>Maaf minuman telah habis, Tunggu pengisian selanjutnya !!!</b> <br><br>";
            // $this->volume = ($this->volume + $this->volume);
        }

    }

    public function refill($isi)
    {
        echo "<b style=color:green>Dispenser telah di isi, silahkan beli sebutuhnya !!!</b> <br><br>";

        $this->volume = ($this->volume + $isi);
    }
}


?>
