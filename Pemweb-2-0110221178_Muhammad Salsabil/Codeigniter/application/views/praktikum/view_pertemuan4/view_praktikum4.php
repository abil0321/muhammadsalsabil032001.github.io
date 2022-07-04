<?php
require_once 'siswa/percobaan1/class_mahasiswa.php';
$mahasiswa1 = new Mahasiswa('122456', 'Budiman', 2019, 4.0, 'informatika');
$mahasiswa2 = new Mahasiswa('122386', 'sumanto', 2019, 2.9, 'informatika');
$mahasiswa3 = new Mahasiswa('123426', 'ahmad yani', 2019, 3.5, 'informatika');
$mahasiswa4 = new Mahasiswa('122129', 'yani', 2019, 1.9, 'informatika');

$ar_siswa = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];
require_once 'siswa/percobaan2/class_nilaimahasiswa.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum ke-4</title>

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
							<h1 class="m-0">Praktikum ke-4</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Praktikum ke-4</li>
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
								<h3 class="card-title">Persegi</h3>

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

							<pre>
								#Kodingan
require_once 'persegi/persegi_panjang.php';

$persegi = new PersegiPanjang(5, 5);
echo "<br><br>Luas Persegi Panjang dengan Panjang  ". $persegi->p. ' dan Lebar '. $persegi->l . ' adalah ' .  $persegi->luasPersegiPanjang();
							</pre>
							<p class="card-body p-3" style="display: inline;">

								<span class="text-primary">result : </span>
								<?php
require_once 'persegi/persegi_panjang.php';

$persegi = new PersegiPanjang(5, 5);
echo "<br><br>Luas Persegi Panjang dengan Panjang  ". $persegi->p. ' dan Lebar '. $persegi->l . ' adalah ' .  $persegi->luasPersegiPanjang();
?>
							</p>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P4-OOP</h5>
							</div>
							<!-- /.card-footer-->
						</div>

						<!-- /.card -->
					</section>

					<section class="content">
						<div class="container-fluid">
							<section class="col-lg-12 connectedSortable ui-sortable">
								<div class="card direct-chat direct-chat-primary">
									<div class="card-header ui-sortable-handle" style="cursor: move;">
										<h3 class="card-title">Siswa</h3>

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
										<h3>percobaan 1</h3>
										<div class="row">
											<div class="col-md-12">
												<table class="table">
													<thead class="thead-dark">
														<tr>
															<th>
																No
															</th>
															<th>
																Nim
															</th>
															<th>
																Nama
															</th>
															<th>
																Prodi
															</th>
															<th>
																Tahun Angkatan
															</th>
															<th>
																IPK
															</th>
															<th>
																Predikat
															</th>
															<th>
																Action
															</th>
														</tr>
													</thead>
													<tbody>
														<?php
                            $no = 1;
                            foreach ($ar_siswa as $siswa) : ?>
														<tr>
															<td>
																<?= $no++?>
															</td>
															<td>
																<?= $siswa->nim ?>
															</td>
															<td>
																<?= $siswa->nama ?>
															</td>
															<td>
																<?= $siswa->prodi ?>
															</td>
															<td>
																<?= $siswa->thn_angkatan ?>
															</td>
															<td>
																<?= $siswa->ipk ?>
															</td>
															<td>
																<?= $siswa->predikat_ipk() ?>
															</td>
															<td>
																Default
															</td>
														</tr>
														<?php endforeach ?>
													</tbody>
												</table>

												<br><br>

												<h3>Perobaan 2</h3>

												<div class="row my-3 ml-2">
													<div class="col-md-12">
														<h2>Form Nilai Ujian</h2>
													</div>
												</div>
												<div class="row p-5 mx-5">
													<div class="col-md-12">
														<form
															action="<?= base_url('admin/dashboard/bukti_praktikum4')?>"
															method="POST">
															<div class="form-group row">
																<label for="nim"
																	class="col-4 col-form-label">NIM</label>
																<div class="col-8">
																	<div class="input-group">
																		<div class="input-group-prepend">
																			<div class="input-group-text">
																				<i class="fa fa-address-card"></i>
																			</div>
																		</div>
																		<input id="nim" name="nim" placeholder="NIM "
																			type="text" class="form-control"
																			required="required">
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<label for="matkul" class="col-4 col-form-label">Pilih
																	MK</label>
																<div class="col-8">
																	<select id="matkul" name="matkul"
																		class="custom-select" required="required">
																		<option value="dw">Data Warehouse</option>
																		<option value="da">Data Analiyst</option>
																		<option value="ds">Data Statistik</option>
																	</select>
																</div>
															</div>
															<div class="form-group row">
																<label for="nilai"
																	class="col-4 col-form-label">Nilai</label>
																<div class="col-8">
																	<div class="input-group">
																		<div class="input-group-prepend">
																			<div class="input-group-text">
																				<i class="fa fa-sort-numeric-asc"></i>
																			</div>
																		</div>
																		<input id="nilai" name="nilai"
																			placeholder="Nilai" type="text"
																			class="form-control" required="required">
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<div class="offset-4 col-8">
																	<button name="submit" type="submit"
																		class="btn btn-primary">Submit</button>
																</div>
															</div>
														</form>
													</div>
												</div>


												<?php

$_nim = $_POST['nim'];
$_nilai = $_POST['nilai'];
$_matkul = $_POST['matkul'];
$_submit = $_POST['submit'];

switch ($_matkul) {
    case 'dw':
        $nama_matkul = 'Data Warehouse';
        break;
    case 'da':
        $nama_matkul = 'Data Analiyst';
        break;
    case 'ds':
        $nama_matkul = 'Data Statistik';
        break;
        
    default:
    $nama_matkul = 'Salah Pilih Kang';
        break;
}

$mahasiswa = new NilaiMahasiswa($nama_matkul, $_nilai, $_nim);
if (isset($_submit)) :
?>
												<div class="row mx-5">
													<div class="col-md-12">
														<p>Nim : <?= $_nim?></p>
														<p>Nama Matakuliah : <?= $nama_matkul?></p>
														<p>Nilai : <?= $_nilai?></p>
														<p>Hasil Ujian : <?= $mahasiswa-> grade()?></p>
														<p>Grade : <?= $mahasiswa->hasil()?></p>
													</div>
												</div>

												<?php endif?>
											</div>
										</div>

									</p>
									<!-- /.card-body -->
									<div class="card-footer" style="display: block;">
										<h5>P4-OOP</h5>
									</div>
									<!-- /.card-footer-->
								</div>

								<!-- /.card -->
							</section>
						</div><!-- /.container-fluid -->
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
