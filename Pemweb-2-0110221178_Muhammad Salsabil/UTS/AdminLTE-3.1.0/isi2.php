<div class="row">
  <!-- Left col -->
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h4 class="card-title">Form Belanja</h4>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->

      <div class="card-body p-3">
        <div class="border border-primary rounded m-5 p-4">

          <div class="row">
            <div class="col-md-7">
              <form method="POST" action="praktikum2.php">
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Costumer</label>
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-address-card"></i>
                        </div>
                      </div>
                      <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control"
                        required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Pilih Produk</label>
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"
                        required="required">
                      <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"
                        required="required">
                      <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci"
                        required="required">
                      <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-archive"></i>
                        </div>
                      </div>
                      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control"
                        required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <input class="btn btn-success" type="submit" value="Kirim" name="proses">
                  </div>
                </div>
              </form>

              <div class="row">
                <div class="col-md-12">
                  <?php
$_nama = $_POST['nama'];
$_produk = $_POST['produk'];
$_jumlah = $_POST['jumlah'];

if ($_produk == 'tv') {
$total_harga = $_jumlah * 4200000;
} elseif($_produk == 'kulkas') {
$total_harga = $_jumlah * 3100000;
} elseif($_produk == 'mesin_cuci') {
$total_harga = $_jumlah * 3800000;
}else {
"mana ada mas !!!";
}

switch ($_produk) {
case('tv') :
  $nama_produk = "TV";
  break;
case ('kulkas'):
  $nama_produk = "KULKAS"; 
  break;

case ('mesin_cuci'):
  $nama_produk = "MESIN CUCI"; 
  break;

default:
  echo "mana ada mass !!";
}

echo 'Nama : '. $_nama;
echo '<br>Produk Pilihan : '. $nama_produk;
echo '<br>Jumlah : '. $_jumlah;

echo '<br><br>Total Harga : '. number_format($total_harga);

?>
                </div>
              </div>
            </div>

            <div class="col-md-4 ml-5">
              <ul class="list-group">
                <li class="list-group-item active">Daftar Harga</li>
                <li class="list-group-item">TV : 4.200.000></li>
                <li class="list-group-item">Kulkas : 3.100.000</li>
                <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
              </ul>
            </div>
          </div>

        </div>

      </div> <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas Form Processing</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
  <!-- /.Left col -->
</div>

<div class="row">
  <!-- Left col -->
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Form Nilai Siswa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>

          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-3 text-dark">

        <h3 class="text-center mt-3">Form Input Nilai</h3>
        <div class="border border-primary rounded m-5 p-4">
          <form method="POST" action="praktikum2.php" autocomplete="off">
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div>
                  <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" required="required"
                    class="form-control">
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
                  <input id="nilai_uts" name="nilai_uts" placeholder="Isi Nilai UTS" type="number" required="required"
                    class="form-control">
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
                  <input id="nilai_uas" name="nilai_uas" placeholder="Isi Nilai UAS" type="number" required="required"
                    class="form-control">
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
                  <input id="nilai_tugas" name="nilai_tugas" placeholder="Isi Nilai Tugas" type="number"
                    required="required" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <input type="submit" value="Simpan" name="proses">
              </div>
            </div>
          </form>
        </div>

        <?php
$_proses = $_POST['proses'];
$_nama = $_POST['nama'];
$_matkul = $_POST['matkul'];
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
    $_proses = $_POST['proses'];
    $_nilaiUas = $_POST['nilai_uas'];
    $_uts = $_POST['nilai_uts'];
    $_uas = $_POST['nilai_uas'];
    $_tugas = $_POST['nilai_tugas'];
  
    $nilai_akhir = ($_uts + $_tugas + $_uas)/3;

    if ($nilai_akhir <= 55) {
        $pernyataan = 'Tidak Lulus';
    } else {
        $pernyataan = 'Lulus';
    }
    
    if ($nilai_akhir <= 35) {
        $grade = "E";
    } elseif($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        $grade = "D";
    } elseif($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        $grade = "C";
    } elseif($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        $grade = "B";
    } elseif($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        $grade = "A";
    } else{
        echo "mana ada mas !!!";
    }
    
    switch ($grade) {
      case('A') :
          $predikat = "Sangat Memuaskan";
          break;
      case ('B'):
          $predikat = "Memuaskan"; 
          break;
      
      case ('C'):
          $predikat = "Cukup"; 
          break;

      case ('D'):
          $predikat = "Kurang"; 
          break;
      case ('E'):
          $predikat = "Sangat Kurang"; 
          break;
      case ('I'):
          $predikat = "Tidak Ada"; 
          break;
      default:
          echo "mana ada mass !!";
  }

  if (isset($_proses)) : 
?>

        <div class="border border-success rounded m-5 p-4">


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

        <?php endif?>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas Form Processing</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
  <!-- /.Left col -->
</div>
