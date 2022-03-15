<?php
class NilaiSiswa{
    // public $nama, $nilai, $sekolah = 'SDIT NF';
    public $nama;
    public $nilai;
    public $sekolah = 'SDIT NF';

    public function getHasil()
    {
        if ($this->nilai > 55) {
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
        
    }
    
}
?>