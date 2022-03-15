<?php
class Matematika{
    // variable dalam bentuk static
    public static $counter = 100;
    
    // function dalam bentuk static
    public static function tambahkan($a, $b){
        return $a + $b;
    }
    public static function naikanCounter(){
        self::$counter++;
    }
        //menggunakan konstanta class
    const PHI = 3.14;
    public static function luasLingkaran($jari){
        $luas = self::PHI * $jari * $jari;
        return $luas;
    }
}
?>