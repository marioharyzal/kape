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
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>#penyakit">Penyakit</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>#gejala">Gejala</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>#diagnosis">Diagnosis</a></li>
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
            <div class="row text-left">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama Penyakit</th>
                                <th scope="col">Penyebab</th>
                                <!-- <th scope="col">Daur Penyakit</th>
                              <th scope="col">Faktor</th> -->
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($penyakit as $row) : ?>
                                <tr>
                                    <td class="text-center"><?php echo ++$no; ?></td>
                                    <td class="text-center"><?php echo $row->id_penyakit; ?></td>
                                    <td><?php echo $row->nm_penyakit; ?></td>
                                    <td><?php echo $row->penyebab; ?></td>
                                    <!-- <td><?php echo $row->daur_penyakit; ?></td>
                                    <td><?php echo $row->faktor; ?></td>
-->
                                    <td>
                                        <button type="button" class="btn btn-sm btn-info detail-penyakit" data-id="<?php echo $row->id_penyakit; ?>" data-bs-toggle="modal" data-bs-target="#modal-penyakit">
                                            <!-- <i class="fas fa-info"></i> -->
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-penyakit" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Penyakit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <!-- <strong>Kode Penyakit</strong>
                        <br/>
                        <span id='p-kode-penyakit'></span>
                        <br/><br/>
                        <strong>Nama Penyakit</strong>
                        <br/>
                        <span id='p-nama-penyakit'></span>
                        <br/><br/>
                        <strong>Penyebab</strong>
                        <br/>
                        <span id='p-penyebab'></span>
                        <br/><br/> -->
                            <strong>Daur Penyakit</strong>
                            <br />
                            <span id='p-daur-penyakit'></span>
                            <br /><br />
                            <strong>Faktor</strong>
                            <br />
                            <span id='p-faktor'></span>
                            <br /><br />
                            <strong>Gambar Penyakit</strong>
                            <br />
                            <span id='p-gambar-penyakit'></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
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
    <script>
        const detailPenyakitBtn = document.querySelectorAll('.detail-penyakit');

        let daurPenyakitP = document.querySelector('#p-daur-penyakit');
        let faktorP = document.querySelector('#p-faktor');
        let gambarPenykaitP = document.querySelector('#p-gambar-penyakit');

        function bindEvent(callback, eventType, targets) {
            targets.forEach((target) => {
                target.addEventListener(eventType, callback);
            });
        };

        bindEvent((e) => {
            fetch(`<?php echo base_url('index.php/beranda/detail-penyakit/'); ?>${e.target.dataset.id}`)
                .then(response => response.json())
                .then((data) => {
                    // kodePenyakitP.innerHTML = data.id_penyakit;
                    // namaPenyakitP.innerHTML = data.nm_penyakit;
                    // penyebabP.innerHTML = data.penyebab;
                    daurPenyakitP.innerHTML = data.daur_penyakit;
                    faktorP.innerHTML = data.faktor;
                    if (data.gambar_penyakit != null) {
                        gambarPenykaitP.innerHTML = `<img src="/kape/uploads/${data.gambar_penyakit}" class="mx-auto d-block img-thumbnail" style="height: 200px;">`;
                    } else {
                        gambarPenykaitP.innerHTML = '';
                    }
                });
        }, 'click', detailPenyakitBtn);
    </script>
</body>

</html>