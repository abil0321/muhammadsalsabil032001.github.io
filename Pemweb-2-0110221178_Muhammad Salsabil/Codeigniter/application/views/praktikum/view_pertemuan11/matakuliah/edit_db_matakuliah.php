<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Matakuliah</title>

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
							<h1 class="m-0">Edit Matakuliah</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Crud Matakuliah</a></li>
								<li class="breadcrumb-item active">Edit Matakuliah</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo base_url("praktikum/praktikum_11/pertemuan11/fungsi_edit_matakuliah")?>"
						method="post">
						<div class="form-group row">
							<label for="nama" class="col-4 col-form-label">Nama</label>
							<div class="col-8">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-address-card"></i>
										</div>
									</div>
									<input id="nama" name="nama" placeholder="nama matkul" type="text"
										class="form-control" required="required"
										value="<?php echo $queryDetailMtl->nama?>">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="sks" class="col-4 col-form-label">SKS</label>
							<div class="col-8">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-archive"></i>
										</div>
									</div>
									<input id="sks" name="sks" placeholder="masukkan jumlah sks" type="text"
										required="required" class="form-control"
										value="<?php echo $queryDetailMtl->sks?>">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="kode" class="col-4 col-form-label">Kode</label>
							<div class="col-8">
								<input id="kode" name="kode" type="text" required="required" class="form-control"
									value="<?php echo $queryDetailMtl->kode?>">
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
