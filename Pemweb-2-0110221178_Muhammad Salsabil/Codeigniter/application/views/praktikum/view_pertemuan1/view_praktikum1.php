<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum ke-1</title>

	<?php $this->load->view("backend/template/meta");?>
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake"
				src="<?php echo base_url("assets/template/backend/dist")?>/img/AdminLTELogo.png" alt="AdminLTELogo"
				height="60" width="60">
		</div>

		<!-- Navbar -->
		<?php $this->load->view("backend/template/navbar");?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view("backend/template/sidebar");?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Praktikum ke-1</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Praktikum ke-1</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<section class="col-lg-12 connectedSortable ui-sortable">
						<div class="card direct-chat direct-chat-primary">
							<div class="card-header ui-sortable-handle" style="cursor: move;">
								<h3 class="card-title">Array</h3>

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
							<p class="card-body p-3" style="display: inline;">
								<h6>Array</h6>

								<p class="m-5">

									<b>Array Buah</b><br><br>
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
								</p>

								<p>
									<b>Array Pop</b><br><br>
									<?php 
									$tim = ['erwin','heru','ali','zaki'];
									array_pop($tim);
								
									foreach ($tim as $value) {
										echo $value . '<br>' ;
									}
									?>
								</p>

								<p>
									<b>Array Push</b><br><br>
									<?php 
									 $tim = ['erwin','heru','ali','zaki'];
									 array_push($tim, 'wati');
								 
									 foreach ($tim as $value) {
										 echo $value . '<br>' ;
									 }
									?>
								</p>

								<p>
									<b>Array Shift</b><br><br>
									<?php
    $tim = ['erwin','heru','ali','zaki'];
    array_shift($tim);

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>

									<hr>
									<h3>Array Unshift</h3>
									<?php
    $tim = ['erwin','heru','ali','zaki'];
    array_unshift($tim, 'joko', 'wati');

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>
								</p>

								<p>
									<b>Array Siswa</b><br><br>
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
												<td><?= number_format(($key['uts'] + $key['uas']+$key['tugas'])/3,2,',','.') ?>
												</td>
											</tr>
											<?php endforeach ?>
										</tbody>
								</p>

								<p>
									<b>Sort Array</b> <br><br>
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
								</p>
							</p>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P1-Array</h5>
							</div>
							<!-- /.card-footer-->
						</div>

						<!-- /.card -->
					</section>
				</div><!-- /.container-fluid -->
			</section>

			<section class="content">
				<div class="container-fluid">
					<section class="col-lg-12 connectedSortable ui-sortable">
						<div class="card direct-chat direct-chat-primary">
							<div class="card-header ui-sortable-handle" style="cursor: move;">
								<h3 class="card-title">Variable</h3>

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
							<p class="card-body p-3" style="display: inline;">
								<h6>Variable</h6>
							</p>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P1-Variable</h5>

								<p>
									<b>Variabel Konstant</b><br><br>
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

								</p>

								<p>
									<b>Variabel</b>
									<?php 
$nama = "Rizki";
$umur = 20;
$berat = 60.2;

echo "Nama saya $nama umur saya $umur tahun saya memiliki berat badan $berat kg"
?>
								</p>

								<p>
									<b>Variabel System</b>

									<?php 
echo 'Dokumen Root : '. $_SERVER['DOCUMENT_ROOT']. '<br>';
echo 'Nama File : '. $_SERVER['PHP_SELF']; 
?>

								</p>
							</div>
							<!-- /.card-footer-->
						</div>

						<!-- /.card -->
					</section>
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<?php $this->load->view("backend/template/footer");?>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- JS -->
	<?php $this->load->view("backend/template/js");?>
	</body>

</html>
