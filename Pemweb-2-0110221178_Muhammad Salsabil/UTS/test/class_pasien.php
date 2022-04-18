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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
        // require_once "class_bmiPasien.php";
        require_once "class_pasien.php";
        // require_once "class_bmi.php";

        $no = 1;
        $ps1 = new Pasien(12345, "P001", "Ahmad", "Jakarta", "10-3-2000", "ahmadyani@gmail.com", "L", 1, "3-4-2022", 169, 69.8);
        $ps2 = new Pasien(23456, "P002", "Rina", "Depok", "2-2-2001", "Rinariana@gmail.com", "P", 2, "3-5-2022", 165, 55.3);
        $ps3 = new Pasien(34567, "P003", "Lutfi", "Jogja", "3-4-2001", "Lutfinurjannah@gmail.com", "L", 3, "4-5-2022", 171, 45.2);

        $array_pasien = [$ps1, $ps2, $ps3];
        ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal Periksa</th>
                <th scope="col">Kode Pasien</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Gender</th>
                <th scope="col">Berat (kg)</th>
                <th scope="col">Tinggi (cm)</th>
                <th scope="col">Nilai BMI</th>
                <th scope="col">Status BMI</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($array_pasien as $pasien) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $pasien->tanggal ?></td>
                <td><?= $pasien->kode ?></td>
                <td><?= $pasien->nama ?></td>
                <td><?= $pasien->gender ?></td>
                <td><?= $pasien->berat ?></td>
                <td><?= $pasien->tinggi ?></td>
                <td><?= $pasien->nilai_bmi() ?></td>
                <td><?= $pasien->status_bmi() ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <br><br><br>

    
</body>

</html>