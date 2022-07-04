<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?php echo base_url("assets/template/backend/dist")?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url("assets/template/backend/dist")?>/img/user2-160x160.jpg"
					class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Praktikum
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url("admin/dashboard/bukti_praktikum1")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 1</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url("admin/dashboard/bukti_praktikum2")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 2</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url("admin/dashboard/bukti_praktikum3")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 3</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url("admin/dashboard/bukti_praktikum4")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 4</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url("admin/dashboard/bukti_praktikum5")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 5</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url("admin/dashboard/bukti_praktikum6")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 6</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url("admin/dashboard/bukti_praktikum7")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 7</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url("praktikum/praktikum_8/pertemuan8/index")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 8</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("praktikum/praktikum_9/pertemuan9/index")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 9</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("praktikum/praktikum_10/pertemuan10/index")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Praktikum 10</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("praktikum/praktikum_11/pertemuan11/index")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Peaktikum 11</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("praktikum/praktikum_12/auth/bukti")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Peaktikum 12</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url("praktikum/praktikum_13/page_user/bukti")?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Peaktikum 13</p>
							</a>
						</li>
					</ul>
				</li>
				<!-- <li class="nav-item">
					<a href="pages/widgets.html" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Widgets
							<span class="right badge badge-danger">New</span>
						</p>
					</a>
				</li>

				<li class="nav-header">EXAMPLES</li>
				<li class="nav-item">
					<a href="pages/calendar.html" class="nav-link">
						<i class="nav-icon far fa-calendar-alt"></i>
						<p>
							Calendar
							<span class="badge badge-info right">2</span>
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-envelope"></i>
						<p>
							Mailbox
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/mailbox/mailbox.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Inbox</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/mailbox/compose.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Compose</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/mailbox/read-mail.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Read</p>
							</a>
						</li>
					</ul>
				</li> -->
				<br><br>
				<li class="nav-item">
					<a href="<?= base_url('praktikum/praktikum_12/auth/logout')?>" style="color: black;"
						class="nav-link btn btn-warning">
						<i class="nav-icon fa fa-power-off"></i>
						<p>
							Logout
						</p>
					</a>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
