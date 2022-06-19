<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Log in</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins")?>/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet"
		href="<?php echo base_url("assets/plugins")?>/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins")?>/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins")?>/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url("assets/template/backend/dist")?>/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet"
		href="<?php echo base_url("assets/plugins")?>/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins")?>/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins")?>/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Admin</b>LTE</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in to start your session</p>

				<?= $this->session->flashdata('message'); ?>

				<form action="<?php base_url('praktikum/praktikum_12/auth/index') ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Email" id="email" name="email"
							value="<?= set_value('email'); ?>">
						<div class="input-group-append">

							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<small style="color: red;" class="text-right"><?= form_error('email')?></small>

					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" id="password"
							name="password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<small style="color: red;" class="text-right"><?= form_error('password')?></small>
					<div class="row" style="justify-content: center;">

						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<!-- /.social-auth-links -->
				<br><br>
				<p class="mb-1">
					<a href="forgot-password.html">I forgot my password</a>
				</p>
				<p class="mb-0">
					<a href="<?= base_url('praktikum/praktikum_12/auth/registration'); ?>" class="text-center">Register
						a new membership</a>
				</p>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?php echo base_url("assets/plugins")?>/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url("assets/plugins")?>/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)

	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url("assets/plugins")?>/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url("assets/plugins")?>/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url("assets/plugins")?>/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?php echo base_url("assets/plugins")?>/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url("assets/plugins")?>/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url("assets/plugins")?>/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url("assets/plugins")?>/moment/moment.min.js"></script>
	<script src="<?php echo base_url("assets/plugins")?>/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo base_url("assets/plugins")?>/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
	</script>
	<!-- Summernote -->
	<script src="<?php echo base_url("assets/plugins")?>/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo base_url("assets/plugins")?>/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url("assets/template/backend/dist")?>/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url("assets/template/backend/dist")?>/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url("assets/template/backend/dist")?>/js/pages/dashboard.js"></script>

</body>

</html>
