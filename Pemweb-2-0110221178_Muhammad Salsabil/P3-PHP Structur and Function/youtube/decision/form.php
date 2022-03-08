<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kesehatan</title>
</head>
<body>
    <h3>Form Isian Kesehatan</h3>
    <form action="proses.php" method="post">
        Nama : <input type="text" name="nama" value="" size="30">
        <br>
        Berat Badan : <input type="number" name="berat" value="" size="10" id="">
        <br>
        Tinggi Badan : <input type="number" name="tinggi" value="" size="10" id="">
        <br>
        Usia : <input type="number" name="usia" value="" size="10" id="">
        <br>
        <br>
        Gol Darah : 
        <input type="radio" name="gol" value="A" size="10" id="">A
        <input type="radio" name="gol" value="B" size="10" id="">B
        <input type="radio" name="gol" value="AB" size="10" id="">AB
        <input type="radio" name="gol" value="O" size="10" id="">O
        <br>

        <input type="submit" value="Kirim" name="proses">

    </form>
</body>
</html>