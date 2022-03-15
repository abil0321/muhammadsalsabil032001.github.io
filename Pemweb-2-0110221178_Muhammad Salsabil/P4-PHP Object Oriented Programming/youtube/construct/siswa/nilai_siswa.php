<?php
class NilaiSiswa{
    public $nama;
    public $nilai;
    public $sekolah = 'SDIT NF';

    function __construct($nama, $nilai)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }
    public function get_hasil()
    {
        if ($this->nilai > 55) {
            return 'Lulus';
        } else {
            return 'Gak Lulus';
        }
        
    }
}
?>