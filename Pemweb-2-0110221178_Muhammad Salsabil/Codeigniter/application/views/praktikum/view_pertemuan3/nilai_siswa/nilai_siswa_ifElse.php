<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai IfElse</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="border border-success rounded m-5 p-4">
    <?php
    require_once('libfungsi.php');
    $grade = predikat($nilai_akhir);
    $pernyataan = kelulusan($nilai_akhir);
    $predikat = grade($grade);
    $nama_matkul = matkul($_matkul);
    
?>

    <div class="row mx-2">
      <div class="col-md-6">
        <h4>
          Nama: <?= $_nama?>
        </h4>
      </div>
      <div class="col-md-6" style="display: flex; justify-content: right;">
        <table width="70%" class="text-left">
          <tr>
            <td>
              <h5>Mata Kuliah</h5>
            </td>
            <td>
              <h5>:</h5>
            </td>
            <td>
              <h5><?= $nama_matkul?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Grading</h5>
            </td>
            <td>
              <h5>:</h5>
            </td>
            <td>
              <h5><?= $grade?></h5>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>Penilaian</th>
          <th></th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nilai UAS</td>
          <td>:</td>
          <td><?= $_uas;?></td>
        </tr>
        <tr>
          <td>Nilai UTS</td>
          <td>:</td>
          <td><?= $_uts;?></td>
        </tr>
        <tr>
          <td>Nilai Tugas</td>
          <td>:</td>
          <td><?= $_tugas;?></td>
        </tr>
        <tr class="<?= $table?>">
          <td>Nilai Akhir</td>
          <td>:</td>
          <td><?= $nilai_akhir;?></td>
        </tr>

      </tbody>
    </table>
    <h3 class="text-right">Predikat : <?= $predikat; ?></h3>
    <h3 class="text-right">Dinyatakan : <?= $pernyataan; ?></h3>
    <h6 class="text-center py-3 mt-5" style="background-color: #5eff89;">Proses: <?= $_proses?></h6>

  </div>

</body>

</html>