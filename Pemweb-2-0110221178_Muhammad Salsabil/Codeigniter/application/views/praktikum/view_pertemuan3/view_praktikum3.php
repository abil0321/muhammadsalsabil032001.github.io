<?php 
require_once 'nilai_siswa/libfungsi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum ke-3</title>

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
							<h1 class="m-0">Praktikum ke-3</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Praktikum ke-3</li>
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
								<h3 class="card-title">Nilai Siswa</h3>

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
								<h3 class="text-center mt-3">Form Input Nilai</h3>
								<div class="border border-primary rounded m-5 p-4">
									<form method="POST" action="<?=base_url('admin/dashboard/bukti_praktikum3')?>"
										autocomplete="off">
										<div class="form-group row">
											<label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
											<div class="col-8">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fa fa-address-card"></i>
														</div>
													</div>
													<input id="nama" name="nama"
														placeholder="Masukkan Nama Lengkap Anda" type="text"
														required="required" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
											<div class="col-8">
												<select id="matkul" name="matkul" class="custom-select"
													required="required">
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
													<input id="nilai_uts" name="nilai_uts" placeholder="Isi Nilai UTS"
														type="number" required="required" class="form-control">
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
													<input id="nilai_uas" name="nilai_uas" placeholder="Isi Nilai UAS"
														type="number" required="required" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas
												Praktikum</label>
											<div class="col-8">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fa fa-archive"></i>
														</div>
													</div>
													<input id="nilai_tugas" name="nilai_tugas"
														placeholder="Isi Nilai Tugas" type="number" required="required"
														class="form-control">
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
										<tr>
											<td>Nilai Akhir</td>
											<td>:</td>
											<td><?= $nilai_akhir;?></td>
										</tr>

									</tbody>
								</table>
								<h3 class="text-right">Predikat : <?= $predikat; ?></h3>
								<h3 class="text-right">Dinyatakan : <?= $pernyataan; ?></h3>
								<h6 class="text-center py-3 mt-5" style="background-color: #5eff89;">Proses:
									<?= $_proses?></h6>

							</p>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P3-Struktur Fungsi</h5>
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
