<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Aplikasi Kel 7</title>
	<meta name="description" content="Backup my database is a free database backup software for any developer to use on your site to backup recent DATABASE." />
	<meta name="keywords" content="database, mysql, db, backup, localhost, username, user, password, phpmyadmin" />
	<meta name="author" content="Ritedev Technologies" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="ITS.png">
	<link rel="icon" href="ITS.png" type="image/x-icon">

	<!-- vector map CSS -->
	<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css" />

	<link href="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

	<!-- switchery CSS -->
	<link href="vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css" />

	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	<!-- SweetAlert 2 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">

	<!-- Bootstrap Core CSS -->
	<link href="vendors/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->

	<div class="wrapper pa-0">
		<header class="sp-header">
			<div class="sp-logo-wrap pull-left">
				<a href="index.html">
					<img class="brand-img mr-10" src="dist/img/logo.png" alt="brand" />
					<span class="brand-text">Backup my Database</span>
				</a>
			</div>
		</header>

		<!-- Main Content -->
		<div class="page-wrapper pa-0 ma-0 auth-page">
			<div class="container-fluid">
				<!-- Row -->
				<div class="table-struct full-width full-height">
					<div class="table-cell vertical-align-middle auth-form-wrap">
						<div class="auth-form  ml-auto mr-auto no-float">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="mb-30">
										<h3 class="text-center txt-dark mb-10">Halo dan Selamat Datang!</h3>
										<h5 class="text-center nonecase-font txt-grey">Masukkan detail database yang ingin kamu backup di bawah!</h5>
									</div>
									<div class="form-wrap">
										<form action="database_backup.php" method="post" id="">
											<div class="form-group">
												<label class="control-label mb-10">Host</label>
												<input type="text" class="form-control" placeholder="Enter Server Name, Default: localhost" name="server" id="server" required="" autocomplete="on">
											</div>
											<div class="form-group">
												<label class="control-label mb-10">Database Username</label>
												<input type="text" class="form-control" placeholder="Enter Database Username, Default: root" name="username" id="username" required="" autocomplete="on">
											</div>
											<div class="form-group">
												<label class="pull-left control-label mb-10">Database Password</label>
												<input type="password" class="form-control" placeholder="Enter Database Password" name="password" id="password">
											</div>
											<div class="form-group">
												<label class="pull-left control-label mb-10">Database Name</label>
												<input type="text" class="form-control" placeholder="Enter Database Name" name="dbname" id="dbname" required="" autocomplete="on">
											</div>
											<div class="form-group">
												<label class="control-label mb-10">Tipe Backup</label>
												<select class="form-control" name="backup_type" id="backup_type" required="">
													<option value="full">Full Backup</option>
													<option value="diff">Differential Backup</option>
													<option value="transaction_log">Transaction Log Backup</option>
													<option value="log_shipping">Log Shipping</option>
													<option value="automated">Automated</option>
												</select>
											</div>
											<div class="form-group text-center">
												<button type="submit" name="backupnow" class="btn btn-primary btn-rounded">Jalankan Backup</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>

		</div>
		<!-- /Main Content -->

	</div>
	<!-- /#wrapper -->

	<!-- JavaScript -->
	<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Owl JavaScript -->
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

	<!-- Switchery JavaScript -->
	<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>

	<!-- Init JavaScript -->
	<script src="dist/js/toast-data.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>

	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
</body>

</html>