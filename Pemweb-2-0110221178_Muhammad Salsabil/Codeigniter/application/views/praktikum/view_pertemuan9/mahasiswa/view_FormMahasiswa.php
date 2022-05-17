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
							<h1 class="m-0">View Form Mahasiswa</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">View Form Mahasiswa v1</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="row">
				<div class="col-md-12 px-4 pt-3">
					<a href="<?= base_url("praktikum/praktikum_8/mahasiswa/create")?>" class="btn btn-success">Back</a>
					<br><br>
					<!-- <h3 class="text-center">
						View Mahasiswa
					</h3> -->
					<table class="table" border="1" class="table-success">
						<thead>
							<tr>
								<th>#</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Gender</th>
								<th>tmp_lahir</th>
								<th>prodi</th>
								<th>IPK</th>


							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td><?= $mhs3->nim ?></td>
								<td><?= $mhs3->nama ?></td>
								<td><?= $mhs3->gender ?></td>
								<td><?= $mhs3->tmp_lahir ?></td>
								<td><?= $mhs3->prodi ?></td>
								<td><?= $mhs3->ipk ?></td>


							</tr>
						</tbody>
					</table>
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
