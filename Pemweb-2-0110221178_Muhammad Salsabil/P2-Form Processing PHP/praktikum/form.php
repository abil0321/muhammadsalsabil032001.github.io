<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="border border-primary rounded m-5 p-4">
  <form method="GET" action="form.php" autocomplete="off">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="" selected disabled>Pilih</option>
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data 1</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-archive"></i>
          </div>
        </div> 
        <input id="nilai_uts" name="nilai_uts" placeholder="Isi Nilai UTS" type="number" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-archive"></i>
          </div>
        </div> 
        <input id="nilai_uas" name="nilai_uas" placeholder="Isi Nilai UAS" type="number" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-archive"></i>
          </div>
        </div> 
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Isi Nilai Tugas" type="number" required="required" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" value="submit" id="submit">Submit</button>
    </div>
  </div>
</form>
</div>

<div class="border border-danger rounded m-5 p-4">
<?php
if (isset($_GET['submit'])) {
  $_nama = $_GET['nama'];
  $_matkul = $_GET['matkul'];
// if ($_matkul == 'DDP') {
//   $nama_matkul = 'Dasar-Dasar Pemrograman';
// } elseif($_matkul == 'BDI') {
//   $nama_matkul = 'Basis Data';
// } elseif($_matkul == 'WEB1') {
//   $nama_matkul = 'Pemrograman Web';
// }

switch ($_matkul) {
  case 'DDP':
    $nama_matkul = 'Dasar-Dasar Pemrograman'; 
    break;
  case 'BDI':
    $nama_matkul = 'Basis Data'; 
    break;
  case 'WEB1':
    $nama_matkul = 'Pemrograman WEB'; 
    break;    
  default:"";
}

  $_nilaiUas = $_GET['nilai_uas'];
  $_uts = $_GET['nilai_uts'];
  $_uas = $_GET['nilai_uas'];
  $_tugas = $_GET['nilai_tugas'];

  $nilai_akhir = ($_uts + $_tugas + $_uas)/3;

  // echo 'Nama : '. $_nama;
  // echo '<br>Mata Kuliah : '. $_matkul;
  // echo '<br>Nilai UAS : '. $_uas;
  // echo '<br>Nilai UTS : '. $_uts;
  // echo '<br>Nilai Tugas : '. $_tugas;

  
}else {
  echo "Silahkan Isi Form Diatas Terlebih Dahulu";
}
?>

<P>Nama : <?= $_nama  ?></P>
<P>Mata Kuliah : <?= $nama_matkul  ?></P>
<P>Nilai UAS : <?= $_uas  ?></P>
<P>Nilai UTS : <?= $_uts  ?></P>
<P>Nilai Tugas : <?= $_tugas  ?></P>
<P>Nilai Akhir : <?= $nilai_akhir  ?></P>
</div>

</body>
</html>