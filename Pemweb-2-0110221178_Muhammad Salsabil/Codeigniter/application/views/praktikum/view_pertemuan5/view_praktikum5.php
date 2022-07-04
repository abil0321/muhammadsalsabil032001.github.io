<?php
// require_once 'bank/account.php';
require_once 'bank/class_account.php';
require_once 'bank/class_bankAccount.php';

require_once 'dispenser/class_dispenser.php';

require_once 'fruit/test1/class_fruit.php';
require_once 'fruit/test2/class_fruit.php';
require_once 'fruit/test2/class_strawberry.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum ke-5</title>

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
							<h1 class="m-0">Praktikum ke-5</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Praktikum ke-5</li>
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
								<h3 class="card-title">Fruit</h3>

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
							<div class="pl-4">
								<h4>Test 1</h4>
								<p class="card-body p-3" style="display: inline;">
									$manggo->name = 'Manggo'; //ok
									<br>
									<?php
							$manggo = new Fruit1('star', 'gold');

							$manggo->name = 'Manggo'; //ok
							// $manggo->color = 'Yellow'; //error
							// $manggo->weight = '300'; //error		
							?>
									<span style="color: green;"><?=  $manggo->name;?></span>
									<br><br>
									<span style="color: red;">
										$manggo->color = 'Yellow'; //error
										<br>
										$manggo->weight = '300'; //error
									</span>

								</p>
							</div>

							<div class="pl-4">
								<h4>Test 2</h4>
								<p class="card-body p-3" style="display: inline;">

									<?php
								$straberry = new Strawberry("Strawberry", "red");
								?>
									<span style="color: red;"><?=$straberry->intro();?></span>
									<br>
									<span style="color: green;"><?= $straberry->message();?></span>


								</p>

							</div>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P5-OOP</h5>
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
								<h3 class="card-title">Dispenser</h3>

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
								<?php
								$bl = new Dispenser(1000, 250, 5000);			
								?>

								<span><?= $bl->beli(2);?></span>
								<span><?= $bl->beli(2);?></span>
								<span><?= $bl->beli(1);?></span>
								<span><?= $bl->refill(1000);?></span>
								<span><?= $bl->beli(1);?></span>
							</p>
							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P5-OOP</h5>
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
								<h3 class="card-title">Bank</h3>

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
								<h1>Kodingan Aksi</h1>
								<pre>
$bnk1 = new BankAccount('C001', 6000000, 'Ahmad');
$bnk2 = new BankAccount('C002', 5350000, 'Budi');
$bnk3 = new BankAccount('C003',2500000, 'Kurniawan');
$array1 = [$bnk1, $bnk2, $bnk3];

$bnk1->deposit(1000000);
$bnk1->transfer($bnk2, 500000);
$bnk1->transfer($bnk3, 1500000);
// $bnk1->cetak();
$bnk1->withdraw(2500000);
								</pre>
								<h1>Daftar Account</h1>
								<table class="table">
									<thead class="thead-dark">
										<tr>
											<th scope="col">No</th>
											<th scope="col">No.Account</th>
											<th scope="col">Pemilik</th>
											<th scope="col">Saldo</th>
										</tr>
									</thead>
									<tbody>
										<?php
                $no = 1;
                foreach ($array1 as $arc) : ?>
										<tr>
											<th scope="row"><?= $no++;?></th>
											<td><?= $arc->nomor?></td>
											<td><?= $arc->costumer?></td>
											<td><?= $arc->saldo?></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<br><br>

							</p>

							<!-- /.card-body -->
							<div class="card-footer" style="display: block;">
								<h5>P5-OOP</h5>
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
