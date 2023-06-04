<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Beranda | Kambing Perah</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529;">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Kambing Perah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>#Artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>#penyakit">Penyakit</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>#gejala">Gejala</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>#diagnosis">Diagnosis</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/auth/login'); ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Services-->

    <section class="bg-light" id="penyakit">
        <div class="container">
            <!-- Begin page content -->
            <ul class="list-group list-group-flush">
                <?php foreach ($artikel as $row_artikel) : ?>
                    <li class="list-group-item">
                        <h2 class="mt-5"><u><?= $row_artikel->judul_artikel ?></u></h2>
                        <blockquote class="blockquote">
                            <p class="mb-0"><?= $row_artikel->deskripsi_artikel ?></p>
                            <footer class="blockquote-footer mt-1">Sumber <cite title="Source Title"><a href="$row_artikel->sumber_artikel"><?= $row_artikel->sumber_artikel ?></a></cite></footer>
                        </blockquote>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Kambing Perah 2023</div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
</body>

</html>