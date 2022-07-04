<?php
class NilaiMahasiswa{
    var $matakuliah, $nilai, $nim;
    function __construct($matkul, $nilai, $nim)
    {
        $this->matakuliah = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade()
    {
        if ($this->nilai < 36) {
            return $grade = 'E';
        } elseif($this->nilai > 35 && $this->nilai < 56) {
            return $grade = 'D';
        } elseif($this->nilai > 55 && $this->nilai < 70) {
            return $grade = 'C';
        } elseif($this->nilai > 69 && $this->nilai < 85) {
            return $grade = 'B';
        } elseif($this->nilai > 84 && $this->nilai <= 100 ) {
            return $grade = 'A';
        }else {
            return 'ngarang ko racun !!';
        }
    }

    function hasil()
    {
        if ($this->nilai < 56) {
            return 'TIDAK LULUS';
        } else {
            return 'LULUS';
        }
        
    }
}
?>