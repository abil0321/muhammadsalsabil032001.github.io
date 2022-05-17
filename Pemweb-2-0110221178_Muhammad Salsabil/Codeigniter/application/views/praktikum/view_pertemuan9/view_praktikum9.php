<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum ke-8</title>

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
							<h1 class="m-0">Praktikum ke-9</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Praktikum ke-9</li>
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
								<h3 class="card-title">Create Mahasiswa</h3>

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
							<a href="<?= base_url("praktikum/praktikum_8/mahasiswa/create")?>" class="card-body p-3"
								style="display: inline;">
								<h6>Form Mahasiswa</h6>
							</a>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P9-Basic Codeigniter</h5>
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
								<h3 class="card-title">Create Dosen</h3>

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
							<a href="<?= base_url("praktikum/praktikum_8/dosen/index")?>" class="card-body p-3"
								style="display: inline;" target="blank">
								<h6>Form Dosen</h6>
							</a>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P9-Basic Codeigniter</h5>
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
								<h3 class="card-title">Create Matakuliah</h3>

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
							<a href="<?= base_url("praktikum/praktikum_8/matakuliah/index")?>" class="card-body p-3"
								style="display: inline;" target="blank">
								<h6>Form Matakuliah</h6>
							</a>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P9-Basic Codeigniter</h5>
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
