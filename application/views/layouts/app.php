<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title><?php echo $pageTitle; ?> | Kambing Perah</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="<?php echo base_url('assets/adminkit/css/app.css'); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'>
    </script>  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'>
    </script> -->
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="<?php echo base_url('index.php/dashboard'); ?>">
					<span class="align-middle">Kambing Perah</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo base_url('index.php/dashboard'); ?>">
							<i class="align-middle" data-feather="command"></i> <span class="align-middle">Beranda</span>
						</a>
						<a class="sidebar-link" href="<?php echo base_url('index.php/data_master'); ?>">
							<i class="align-middle" data-feather="layers"></i> <span class="align-middle">Data Master</span>
						</a>
						<a class="sidebar-link" href="<?php echo base_url('index.php/penanganan'); ?>">
							<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Penanganan</span>
						</a>
						<a class="sidebar-link" href="<?php echo base_url('index.php/basis_pengetahuan'); ?>">
							<i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Basis Pengetahuan</span>
						</a>
						<a class="sidebar-link" href="<?php echo base_url('index.php/artikel'); ?>">
							<i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Artikel</span>
						</a>
						<a class="sidebar-link" href="<?php echo base_url('index.php/data_hasil_diagnosis'); ?>">
							<i class="align-middle" data-feather="database"></i> <span class="align-middle">Manajemen Hasil</span>
						</a>
						<a class="sidebar-link" href="<?php echo base_url('index.php/diagnosa'); ?>">
							<i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Perbandingan Perhitungan</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="<?php echo base_url('assets/adminkit/img/avatars/person.png'); ?>" class="avatar img-fluid rounded me-1" alt="" /> <span class="text-dark"><?php echo $this->session->userdata('name'); ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="<?php echo base_url('index.php/auth/logout'); ?>">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<?php echo $pageContent; ?>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
							<div class="col-lg-6 text-lg-start">Copyright &copy; Kambing Perah 2023</div>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="<?php echo base_url('assets/adminkit/js/app.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
	<script type="text/javascript">
		const dataTable = new simpleDatatables.DataTable("#datatable", {
			searchable: true,
		})
	</script>

</body>

</html>