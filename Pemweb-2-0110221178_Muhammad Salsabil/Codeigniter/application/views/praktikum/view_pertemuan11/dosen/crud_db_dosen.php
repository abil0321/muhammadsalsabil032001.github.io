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
							<h1 class="m-0">View Form dosen</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">View Form dosen v1</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="row">
				<div class="col-md-12 px-4 pt-3">
					<a href="<?= base_url("praktikum/praktikum_11/pertemuan11/create_dosen")?>" type="button"
						class="btn btn-success">Tambah Dosen</a>
					<br><br>
					<!-- <h3 class="text-center">
						View dosen
					</h3> -->
					<table class="table" border="1" class="table-success">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Gender</th>
								<th>tmp_lahir</th>
								<th>tgl_lahir</th>
								<th>nidn</th>
								<th>Pendidikan</th>
								<th>Aksi</th>


							</tr>
						</thead>
						<tbody>

							<?php
							$no = 1;
                        foreach ($queryAllDsn as $dosen) {
                        ?>
							<tr>
								<td><?php echo $no++?></td>
								<td><?php echo $dosen->nama ?></td>
								<td><?php echo $dosen->gender ?></td>
								<td><?php echo $dosen->tmp_lahir ?></td>
								<td><?php echo $dosen->tgl_lahir ?></td>
								<td><?php echo $dosen->nidn ?></td>
								<td><?php echo $dosen->pendidikan ?></td>
								<td><a href="<?= base_url("praktikum/praktikum_11/pertemuan11/edit_db_dosen")?>/<?php echo $dosen->id?>"
										type="button" class="btn btn-info">Edit</a> <a href="" type="button"
										class="btn btn-primary">View</a> <a
										href="<?php echo base_url('praktikum/praktikum_11/pertemuan11/delete_db_dosen')?>/<?php echo $dosen->id?>"
										type="button" class="btn btn-danger">Delete</a></td>

							</tr>

							<?php
                        }?>
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
