<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>

<body>
    <?php
    $_proses = $_POST['proses'];
    if (!empty($_proses)) {
        $_berat = $_POST['berat'];
        $_tinggi = $_POST['tinggi'];
        $_nama = $_POST['nama'];
        $_gol = $_POST['gol'];
        $_usia = $_POST['usia'];

        echo '<br> Nama Lengkap : ' . $_nama;
        echo '<br> Berat/Tinggi Badan : ' . $_berat . 'kg/' . $_tinggi . 'cm';
        echo '<br> Usia : ' . $_usia . ' Tahun';
        echo '<br> Golongan Darah : ' . $_gol;

        if ($_berat > 70) {
            echo '<br><br>Berat Anda Belum Ideal';
        } else {
            echo '<br><br>Berat Anda Ideal';
        }

        $status_umur = ($_usia <= 5) ? "Balita" : "Non Balita";
        echo '<br> Status Umur : ' . $status_umur;

        if ($_usia <= 5) {
            echo '<br> Kategori Usia Balita';
        } elseif ($_usia <= 13) {
            echo '<br> Kategori Usia Anak-Anak';
        } elseif ($_usia <= 20) {
            echo '<br> Kategori Usia Remaja';
        } elseif ($_usia <= 60) {
            echo '<br> Kategori Usia Dewasa';
        } else {
            echo '<br> Kategori Usia Lansia';
        }

        switch ($_gol) {
            case 'A':
                echo '<br> Hanya boleh donor ke Gol A';
                break;
            case 'B':
                echo '<br> Hanya boleh donor ke Gol B';
                break;
            case 'AB':
                echo '<br> Hanya boleh donor ke Gol AB';
                break;

            default:
                echo "<br>Boleh donor ke Gol A, B, AB, dan O";
                break;
        }
    }
    ?>
</body>

</html>