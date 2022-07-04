<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum ke-2</title>

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
							<h1 class="m-0">Praktikum ke-2</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Praktikum ke-2</li>
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
								<h3 class="card-title">Belanja</h3>

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
								<div class="row">
									<div class="col-md-7">
										<form method="POST" action="<?=base_url('admin/dashboard/bukti_praktikum2')?>">
											<div class="form-group row">
												<label for="nama" class="col-4 col-form-label">Costumer</label>
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa fa-address-card"></i>
															</div>
														</div>
														<input id="nama" name="nama" placeholder="Nama Costumer"
															type="text" class="form-control" required="required">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-4">Pilih Produk</label>
												<div class="col-8">
													<div class="custom-control custom-radio custom-control-inline">
														<input name="produk" id="produk_0" type="radio"
															class="custom-control-input" value="tv" required="required">
														<label for="produk_0" class="custom-control-label">TV</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input name="produk" id="produk_1" type="radio"
															class="custom-control-input" value="kulkas"
															required="required">
														<label for="produk_1"
															class="custom-control-label">KULKAS</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input name="produk" id="produk_2" type="radio"
															class="custom-control-input" value="mesin_cuci"
															required="required">
														<label for="produk_2" class="custom-control-label">MESIN
															CUCI</label>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="jumlah" class="col-4 col-form-label">Jumlah</label>
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa fa-archive"></i>
															</div>
														</div>
														<input id="jumlah" name="jumlah" placeholder="Jumlah"
															type="text" class="form-control" required="required">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<div class="offset-4 col-8">
													<input class="btn btn-success" type="submit" value="Kirim"
														name="proses">
												</div>
											</div>
										</form>

										<div class="row">
											<div class="col-md-12">
												<?php
$_nama = $_POST['nama'];
$_produk = $_POST['produk'];
$_jumlah = $_POST['jumlah'];

if ($_produk == 'tv') {
    $total_harga = $_jumlah * 4200000;
} elseif($_produk == 'kulkas') {
    $total_harga = $_jumlah * 3100000;
} elseif($_produk == 'mesin_cuci') {
    $total_harga = $_jumlah * 3800000;
}else {
    "mana ada mas !!!";
}

switch ($_produk) {
  case('tv') :
      $nama_produk = "TV";
      break;
  case ('kulkas'):
      $nama_produk = "KULKAS"; 
      break;
  
  case ('mesin_cuci'):
      $nama_produk = "MESIN CUCI"; 
      break;

  default:
      echo "mana ada mass !!";
}

echo 'Nama : '. $_nama;
echo '<br>Produk Pilihan : '. $nama_produk;
echo '<br>Jumlah : '. $_jumlah;

echo '<br><br>Total Harga : '. number_format($total_harga);

?>
											</div>
										</div>
									</div>

									<div class="col-md-4 ml-5">
										<ul class="list-group">
											<li class="list-group-item active">Daftar Harga</li>
											<li class="list-group-item">TV : 4.200.000></li>
											<li class="list-group-item">Kulkas : 3.100.000</li>
											<li class="list-group-item">MESIN CUCI : 3.800.000</li>
											<li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
										</ul>
									</div>
								</div>
							</p>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P2-Form Processing</h5>
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
