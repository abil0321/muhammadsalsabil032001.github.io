<div class="row">
  <!-- Left col -->
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h4 class="card-title">Array</h4>

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
        <ul style="list-style: circle;">
          <li class="my-3 text-bold">Array Buah</li>
          <?php
$array_buah = ['pisang','jeruk','apel','mangga'];

echo 'Menampilkan array ke-0 => ' . $array_buah[0] . '<br>';

echo "Menampilkan Jumlah Data Array => " . count($array_buah) . '<br>' . '<br>';

foreach ($array_buah as $key => $value) {
    echo "Menambahkan Data array ke-". $key . ' => ' . $value . '<br>';
}

echo '<ol>';
foreach ($array_buah as $value) {
    echo '<li>' . $value . '</li>';
}
echo '</ol>';
?>
          <li class="my-3 text-bold">Array Pop</li>
          <?php
    $tim = ['erwin','heru','ali','zaki'];
    array_pop($tim);

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>
          <li class="my-3 text-bold">Array Push</li>
          <?php
    $tim = ['erwin','heru','ali','zaki'];
    array_push($tim, 'wati');

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>
          <li class="my-3 text-bold">Array Shift</li>
          <?php
    $tim = ['erwin','heru','ali','zaki'];
    array_shift($tim);

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>

          <hr>
          <h4>Array Unshift</h4>
          <?php
    $tim = ['erwin','heru','ali','zaki'];
    array_unshift($tim, 'joko', 'wati');

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>
          <li class="my-3 text-bold">Array Siswa</li>

          <?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>

          <h3>Daftar Nilai Siswa</h3>
          <table border="1" width="100%" class="table table-dark table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
              </tr>
            </thead>
            <tbody>
              <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
            </tbody>
          </table>
          <hr>

          <table width="100%" border="1" class="table table-dark table-striped">
            <thead>
              <th>No</th>
              <th>NIM</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Nilai Akhir</th>
            </thead>
            <tbody>
              <?php foreach ($ar_nilai as $key) :?>
              <tr>
                <td><?= $key['id']?></td>
                <td><?= $key['nim']?></td>
                <td><?= $key['uts']?></td>
                <td><?= $key['uas']?></td>
                <td><?= $key['tugas']?></td>
                <td><?= number_format(($key['uts'] + $key['uas']+$key['tugas'])/3,2,',','.') ?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>

          <li class="my-3 text-bold">Sort Array</li>

          <?php
    //Array Buah
    $array_buah = [
        'p' => 'pisang',
        'j' => 'jeruk',
        'a' => 'apel',
        'm' => 'mangga',
    ];

    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>' . $key . ' - ' . $value . '</li>';
    }
    echo '</ol>';

    echo sort($array_buah);

    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>' . $key . ' - ' . $value . '</li>';
    }
    echo '</ol>';

?>
        </ul>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas Array</h4>
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
        <h4 class="card-title">Variable</h4>

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
        <ul style="list-style: circle;">
          <li class="my-3 text-bold">Variable</li>
          <?php 
$nama = "Rizki";
$umur = 20;
$berat = 60.2;

echo "Nama saya $nama umur saya $umur tahun saya memiliki berat badan $berat kg"
?>

          <li class="my-3 text-bold">Variable Konstan</li>
          <?php 
    define('PHI', 3.14);
    define('DBNAME', 'db_mahasiswa');
    define('DBSERVER', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'aziz');

    $jari = 10;
    $luas = PHI * $jari;
    $keliling = 2 * PHI * $jari;

    // TAMPIL HASIL
    echo 'Luas Lingkaran : '. $luas . '<br>';
    echo 'Keliling Lingkaran : '. $keliling . '<br>';

    echo '<hr>';

    // TAMPIL KONSTANTA
    echo 'Nama Database : '. DBNAME. '<br>';
    echo 'Server Database : '. DBSERVER. '<br>';
    echo 'Nama User Database : '. DBUSER. '<br>';
    echo 'Password Database : '. DBPASS. '<br>';
?>
          <li class="my-3 text-bold">Variable System</li>
          <?php 
echo 'Dokumen Root : '. $_SERVER['DOCUMENT_ROOT']. '<br>';
echo 'Nama File : '. $_SERVER['PHP_SELF']; 
?>

        </ul>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas Variable</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
  <!-- /.Left col -->
</div>
