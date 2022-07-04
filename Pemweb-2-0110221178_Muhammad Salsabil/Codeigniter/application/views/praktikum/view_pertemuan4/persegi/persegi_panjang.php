<?php
class PersegiPanjang{
    var $p, $l;

    function __construct($p, $l)
    {
        $this->p = $p;
        $this->l = $l;
    }

    public function luasPersegiPanjang()
    {
        $panjang = $this->p;
        $lebar = $this->l;

        $luas = $panjang * $lebar;
        return $luas;
    }

    public function kelilingPersegiPanjang()
    {
        $panjang = $this->p;
        $lebar = $this->l;
        
        $keliling = 2 * ($panjang + $lebar);
        return $keliling;
    }
}

?>