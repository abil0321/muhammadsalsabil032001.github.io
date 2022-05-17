<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Dashboard</title>

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
							<h1 class="m-0">Dashboard</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Mahasiswa</a></li>
								<li class="breadcrumb-item active">Create Mahasiswa</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="row">
				<div class="col-md-12 px-5">
					<?php echo form_open('praktikum/praktikum_8/mahasiswa/save') ?>
					<?php
// $attributes = ['method' => 'POST'] 
?>
					<div class="form-group row">
						<label for="nim" class="col-4 col-form-label">NIM</label>
						<div class="col-8">
							<input id="nim" name="nim" placeholder="NIM" type="text" class="form-control"
								required="required">
						</div>
					</div>
					<div class="form-group row">
						<label for="nama" class="col-4 col-form-label">Nama</label>
						<div class="col-8">
							<input id="nama" name="nama" placeholder="nama" type="text" class="form-control"
								required="required">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-4">Jenis Kelamin</label>
						<div class="col-8">
							<div class="custom-control custom-radio custom-control-inline">
								<input name="gender" id="jk_0" type="radio" class="custom-control-input" value="L">
								<label for="jk_0" class="custom-control-label">Laki-laki</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
								<label for="jk_1" class="custom-control-label">Perempuan</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
						<div class="col-8">
							<input id="tmp_lahir" name="tmp_lahir" placeholder="Tempat lahir" type="text"
								class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
						<div class="col-8">
							<input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="prodi" class="col-4 col-form-label">Porgram Studi</label>
						<div class="col-8">
							<select id="prodi" name="prodi" class="custom-select">
								<option value="si">Sistem Informasi</option>
								<option value="ti">Teknik Informatika</option>
								<option value="bd">Bisnis Digital</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="ipk" class="col-4 col-form-label">IPK</label>
						<div class="col-8">
							<input id="ipk" name="ipk" placeholder="ipk" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-4 col-8">
							<button name="submit" type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>


					<?php echo form_close() ?>
				</div>
			</div>
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
