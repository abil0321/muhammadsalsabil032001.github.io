<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Dosen</title>

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
							<h1 class="m-0">Edit Dosen</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Crud Dosen</a></li>
								<li class="breadcrumb-item active">Edit Dosen</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo base_url("praktikum/praktikum_11/pertemuan11/fungsi_edit_dosen")?>"
						method="post">

						<div class="form-group row" style="display: none;">
							<label for="id" class="col-4 col-form-label">Id</label>
							<div class="col-8">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-address-card"></i>
										</div>
									</div>
									<input id="id" name="id" placeholder="id mahasiswa" type="text" class="form-control"
										required="required" value="<?php echo $queryDetailDsn->id?>">
								</div>
							</div>
						</div>

						<div class="form-group row">
							<label for="nama" class="col-4 col-form-label">Nama</label>
							<div class="col-8">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-address-card"></i>
										</div>
									</div>
									<input id="nama" name="nama" placeholder="nama dosen" type="text"
										class="form-control" required="required"
										value="<?php echo $queryDetailDsn->nama?>">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4">Gender</label>
							<div class="col-8">
								<div class="custom-control custom-radio custom-control-inline">
									<input name="gender" id="gender_0" type="radio" class="custom-control-input"
										value="lk" required="required">
									<label for="gender_0" class="custom-control-label">Laki-Laki</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input name="gender" id="gender_1" type="radio" class="custom-control-input"
										value="pr" required="required">
									<label for="gender_1" class="custom-control-label">Perempuan</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
							<div class="col-8">
								<input id="tmp_lahir" name="tmp_lahir" placeholder="masukkan tempat lahir" type="text"
									class="form-control" required="required"
									value="<?php echo $queryDetailDsn->tmp_lahir?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
							<div class="col-8">
								<input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control"
									required="required" value="<?php echo $queryDetailDsn->tgl_lahir?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="nidn" class="col-4 col-form-label">NIDN</label>
							<div class="col-8">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-500px"></i>
										</div>
									</div>
									<input id="nidn" name="nidn" placeholder="masukkan NIDN" type="text"
										required="required" class="form-control"
										value="<?php echo $queryDetailDsn->nidn?>">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="pendidikan" class="col-4 col-form-label">Pendidikan</label>
							<div class="col-8">
								<input id="pendidikan" name="pendidikan" placeholder="masukkan pendidikan akhir"
									type="text" required="required" class="form-control"
									value="<?php echo $queryDetailDsn->pendidikan?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="offset-4 col-8">
								<button name="submit" type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
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
