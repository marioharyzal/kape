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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
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
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/beranda'); ?>#artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/beranda'); ?>#penyakit">Penyakit</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/beranda'); ?>#diagnosis">Diagnosis Penyakit</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/beranda/galeri_penyakit'); ?>">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/auth/login'); ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Services-->

    <section class="page-section bg-light" id="penyakit">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5">Penyakit</h2>
                <h3 class="section-subheading text-muted">Daftar Penyakit pada Kambing Perah Anglo Nubian</h3>
            </div>
            <main role="main" class="container">
                <ul class="list-group list-group-flush">
                    <?php foreach ($penyakit as $row_penyakit) : ?>
                        <li class="list-group-item mb-2">
                            <div class="row">
                                <div class="col-md-8 blog-main">
                                    <h3 class="pb-4 mb-4 mt-2 font-italic border-bottom">
                                        <?= $row_penyakit->nm_penyakit ?>
                                    </h3>

                                    <div class="blog-post">
                                        <p class="blog-post-meta">ID Penyakit: <?= $row_penyakit->id_penyakit ?></p>
                                        <p>Deskripsi: <br><?= $row_penyakit->daur_penyakit ?></p>
                                        <hr>
                                        <p>Peneyebab: <br><?= $row_penyakit->penyebab ?></p>
                                        <hr>
                                        <p>Faktor: <br><?= $row_penyakit->faktor ?></p>
                                    </div>

                                </div>

                                <aside class="col-md-4 blog-sidebar">
                                    <div class="col-md">
                                        <div class="card mb-4 shadow-sm">
                                            <img src="<?= base_url('uploads/' . $row_penyakit->gambar_penyakit) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <title>Placeholder</title>
                                            </img>

                                            <div class="card-body">
                                                <p class="card-text">Gamber penyakit <?= $row_penyakit->nm_penyakit ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </aside><!-- /.blog-sidebar -->

                            </div><!-- /.row -->
                        </li>
                    <?php endforeach; ?>
                </ul>
            </main><!-- /.container -->

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