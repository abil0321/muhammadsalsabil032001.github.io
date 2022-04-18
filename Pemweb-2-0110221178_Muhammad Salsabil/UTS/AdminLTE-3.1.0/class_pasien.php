<?php
        require_once "class_bmiPasien.php";
        class Pasien extends BMI_Pasien{
            public $id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender;

            function __construct($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $id_pasien,$tanggal_regis, $tinggi_p, $berat_p)
            {
                parent::__construct($id_pasien,$tanggal_regis, $tinggi_p, $berat_p);
                $this->id = $id;
                $this->kode = $kode;
                $this->nama = $nama;
                $this->tmp_lahir = $tmp_lahir;
                $this->tgl_lahir = $tgl_lahir;
                $this->email = $email;
                $this->gender = $gender;
            }
            
        }

        ?>
