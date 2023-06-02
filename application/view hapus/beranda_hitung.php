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
        <section class="page-section" id="lakukan-diagnosis">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hasil Diagnosis</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" readonly="">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <textarea type="password" class="form-control" id="alamat" name="alamat" readonly=""><?php echo $alamat; ?></textarea>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $pekerjaan; ?>" readonly="">
                        </div>
                      </div>

                      <h4 class="mt-4">Gejala Yang Anda Pilih</h4>
                      <ul class="list-group mb-4">
                        <?php foreach($gejala as $e){ ?>
                                <li class="list-group-item">(<?=$e->id_gejala?>) <?=$e->gejala?></li>
                        <?php } ?>
                      </ul>

<?php
  $Result = [];
  $df_final = 0;
?>

<?php $this->load->view('beranda_hitung_cf', ['Result' => $Result,'df_final'=>$df_final,'gejala'=>$gejala, '_gejala' => $_gejala]); ?>  
                        
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
        <script type="text/javascript">
            const detailPenyakitBtn = document.querySelectorAll('.detail-penyakit');
            const dataTable = new simpleDatatables.DataTable("#datatable", {
                searchable: true,
            });
            const lakukanDiagnosisBtn = document.querySelector('#button-lakukan-diagnosis');

            let kodePenyakitP = document.querySelector('#p-kode-penyakit');
            let namaPenyakitP = document.querySelector('#p-nama-penyakit');
            let penyebabP = document.querySelector('#p-penyebab');
            let daurPenyakitP = document.querySelector('#p-daur-penyakit');
            let faktorP = document.querySelector('#p-faktor');
            let gambarPenykaitP = document.querySelector('#p-gambar-penyakit');
            let diagnosis = false;

            function bindEvent(callback, eventType, targets) {
               targets.forEach((target) => {
                 target.addEventListener(eventType, callback);
               });
            };

            bindEvent((e) => {
                fetch(`<?php echo base_url('index.php/beranda/detail-penyakit/'); ?>${e.target.dataset.id}`)
                  .then(response => response.json())
                  .then((data) => {
                    kodePenyakitP.innerHTML = data.id_penyakit;
                    namaPenyakitP.innerHTML = data.nm_penyakit;
                    penyebabP.innerHTML = data.penyebab;
                    daurPenyakitP.innerHTML = data.daur_penyakit;
                    faktorP.innerHTML = data.faktor;
                    if (data.gambar_penyakit != null) {
                        gambarPenykaitP.innerHTML = `<img src="uploads/${data.gambar_penyakit}" class="mx-auto d-block img-thumbnail" style="height: 200px;">`;
                    } else {
                        gambarPenykaitP.innerHTML = '';
                    }
                  });
            }, 'click', detailPenyakitBtn);

            lakukanDiagnosisBtn.addEventListener('click', () => {
                const lakukanDiagnosis = document.querySelector('#lakukan-diagnosis');

                if (!diagnosis) {
                    lakukanDiagnosis.classList.remove('d-none');
                    lakukanDiagnosisBtn.innerHTML = 'Tutup Diagnosis';

                    diagnosis = true;
                } else {
                    lakukanDiagnosis.classList.add('d-none');
                    lakukanDiagnosisBtn.innerHTML = 'Lakukan Diagnosis';

                    diagnosis = false;
                }
            });
        </script>
    </body>
</html>
