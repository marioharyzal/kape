<!DOCTYPE html>
<html lang="en">
    <style>
      /* div.transbox {
  background-color: black;
  opacity: 0.6;
} */
            div.third {
                /*setting alpha = 0.6*/
                background: rgba(0, 0, 0, 0.6);
            }

      </style>
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
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212429;">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Kambing Perah</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#penyakit">Penyakit</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gejala">Gejala</a></li>
                        <li class="nav-item"><a class="nav-link" href="#diagnosis">Diagnosis</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/auth/login'); ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" >
          
            <div class="third" >
                <div class="masthead-subheading" style="text-shadow: 2px 2px black">Selamat Datang!</div><!-- 
                <h1 class="masthead-heading text-uppercase" style="background-color:#ff6347;">Sistem Pakar Diagnosa Penyakit Tanaman Kelapa Sawit</h1> -->
                <div class="masthead-heading text-uppercase" style="text-shadow: 2px 2px black"> Sistem Pakar Diagnosa Penyakit Kambing Perah Anglo Nubian</div>
                <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> -->
            </div>
          </div>
        </header>
        <!-- Services-->
        <section class="page-section bg-light" id="penyakit">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Penyakit</h2>
                    <h3 class="section-subheading text-muted">Daftar Penyakit pada Tanaman Kelapa Sawit</h3>
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
                            <?php $no = 0; foreach($penyakit as $row): ?>
                                <tr>
                                    <td class="text-center"><?php echo ++$no; ?></td>
                                    <td class="text-center"><?php echo $row->id_penyakit; ?></td>
                                    <td><?php echo $row->nm_penyakit; ?></td>
                                    <td><?php echo $row->penyebab; ?></td>
                                    <!-- <td><?php echo $row->daur_penyakit; ?></td>
                                    <td><?php echo $row->faktor; ?></td>
-->                                 <td>
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
                        <br/>
                        <span id='p-daur-penyakit'></span>
                        <br/><br/>
                        <strong>Faktor</strong>
                        <br/>
                        <span id='p-faktor'></span>
                        <br/><br/>
                        <strong>Gambar Penyakit</strong>
                        <br/>
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
        <!-- Portfolio Grid-->
        <section class="page-section" id="gejala">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Gejala</h2>
                    <h3 class="section-subheading text-muted">Daftar Gejala pada Penyakit Kambing Perah Anglo Nubian</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion accordion-flush" id="accordion-gejala">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-gejala-akar" aria-expanded="false" aria-controls="flush-gejala-akar">
                                Akar
                              </button>
                            </h2>
                            <div id="flush-gejala-akar" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion-gejala">
                                <div class="accordion-body">
                                    <ul>
                                        <?php foreach ($gejalaAkar as $akar) : ?>
                                            <li><?php echo $akar->gejala; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-gejala-batang" aria-expanded="false" aria-controls="flush-gejala-batang">
                                Batang
                              </button>
                            </h2>
                            <div id="flush-gejala-batang" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordion-gejala">
                              <div class="accordion-body">
                                    <ul>
                                        <?php foreach ($gejalaBatang as $batang) : ?>
                                            <li><?php echo $batang->gejala; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-gejala-daun" aria-expanded="false" aria-controls="flush-gejala-daun">
                                Daun
                              </button>
                            </h2>
                            <div id="flush-gejala-daun" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordion-gejala">
                              <div class="accordion-body">
                                    <ul>
                                        <?php foreach ($gejalaDaun as $daun) : ?>
                                            <li><?php echo $daun->gejala; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-gejala-buah" aria-expanded="false" aria-controls="flush-gejala-buah">
                                Buah
                              </button>
                            </h2>
                            <div id="flush-gejala-buah" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordion-gejala">
                              <div class="accordion-body">
                                    <ul>
                                        <?php foreach ($gejalaBuah as $buah) : ?>
                                            <li><?php echo $buah->gejala; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="page-section bg-light" id="diagnosis">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Diagnosis</h2>
                    <h3 class="section-subheading text-muted">Daftar Riwayat Hasil diagnosis Penyakit Kambing Anglo Nubian</h3>
                </div>
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Waktu Diagnosa</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Hasil Dignosis</th>
                                    <th scope="col">Nilai Persentase</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $no = 0; foreach($hasil as $row): ?>
                                <tr>
                                    <td class="text-center"><?php echo ++$no; ?></td>
                                    <td><?php echo $row->tanggal; ?></td>
                                    <td><?php echo $row->nm_user; ?></td>
                                    <td><?php echo $row->nm_penyakit; ?></td>
                                    <td class="text-center">
                                      <?php 
                                        if ($row->cf >= $row->dempster) {
                                          echo $row->cf; 
                                        } else if ($row->dempster >= $row->cf) {
                                          echo $row->dempster; 
                                        }
                                      ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/beranda/detail_hasil/' .$row->id_hasil); ?>" class="btn btn-sm btn-info">
                                          <!-- <i class="fas fa-info"></i> -->
                                          Detail
                                        </button>
                                        <a href="<?php echo base_url('index.php/beranda/cetak/' .$row->id_hasil); ?>" class="btn btn-sm btn-secondary">
                                          <!-- <i class="fas fa-info"></i> -->
                                          Cetak
                                        </button>
                                    </td>
                                   
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>      
                    </div>
                    
                    <!-- AWAL GRAFIK -->
                    <!-- <div class="col-3">
                        <?php if($message = $this->session->flashdata('message')): ?>
                        <div class="alert alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                            <?php echo $message['message']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Grafik</h5>
                            </div>
                              <div class="card-body table-responsive">
                                  <div>
                                    <canvas id="myChart"></canvas>
                                  </div>
                              </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                    const data = {
                      labels: [
                      <?php foreach($total as $t){ ?>
                        '<?=$t->nm_penyakit?>',
                      <?php } ?>
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [<?php foreach($total as $t){echo $t->jumlah.",";}?>],
                        backgroundColor: [
                          'red',
                          'green',
                          'blue',
                          'gray',
                          'cyan',
                          'coklat',
                          'orange',
                        ],
                        hoverOffset: 4
                      }]
                    };
                    const config = {
                      type: 'pie',
                      data: data,
                    };

                    const myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                      );
                    </script> -->
                  <!-- STOP GRAFIK -->
                    
                    <div class="col-md-12 mt-2 text-center">
                        <button id="button-lakukan-diagnosis" class="btn btn-primary">Tutup Diagnosis</button>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="page-section" id="lakukan-diagnosis">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Lakukan Diagnosis</h2>
                    <h3 class="section-subheading text-muted">Silahkan lengkapi data di bawah ini</h3>
                </div>
                <div class="row">
                  <?php if($message = $this->session->flashdata('message')): ?>
                    <div class="alert alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                      <?php echo $message['message']; ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php endif; ?>
                    <div class="col-md-12">
                      <form action="<?php echo base_url('index.php/beranda/hitung'); ?>" method="post">
                      <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nama" required="" name="nama">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <textarea type="password" class="form-control" required="" id="alamat" name="alamat"></textarea>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" required="" id="pekerjaan" name="pekerjaan">
                        </div>
                      </div>

                      <h4 class="mt-4">Gejala</h4>
                      <h7 class="mt-4">Silahkan Memilih Gejala(Pilihlah 3 gejala atau lebih untuk hasil diagnosis yang lebih akurat)</h7>
                      <br></br> 
                      
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="akar-tab" data-bs-toggle="tab" data-bs-target="#akar" type="button" role="tab" aria-controls="akar" aria-selected="true">Akar</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="batang-tab" data-bs-toggle="tab" data-bs-target="#batang" type="button" role="tab" aria-controls="batang" aria-selected="false">Batang</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="daun-tab" data-bs-toggle="tab" data-bs-target="#daun" type="button" role="tab" aria-controls="daun" aria-selected="false">Daun</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="buah-tab" data-bs-toggle="tab" data-bs-target="#buah" type="button" role="tab" aria-controls="buah" aria-selected="false">Buah</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="akar" role="tabpanel" aria-labelledby="akar-tab">
                            <?php foreach ($gejalaAkar as $akar) : ?>
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="<?php echo $akar->id_gejala; ?>" name="gejala[]" id="gejalan-akar-<?php echo $akar->id_gejala; ?>">
                                  <label class="form-check-label" for="gejalan-akar-<?php echo $akar->id_gejala; ?>">
                                    <?php echo $akar->gejala; ?>
                                  </label>
                              </div>
                            <?php endforeach; ?>
                          </div>
                          <div class="tab-pane fade" id="batang" role="tabpanel" aria-labelledby="batang-tab">
                            <?php foreach ($gejalaBatang as $batang) : ?>
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="<?php echo $batang->id_gejala; ?>" name="gejala[]" id="gejalan-batang-<?php echo $batang->id_gejala; ?>">
                                  <label class="form-check-label" for="gejalan-batang-<?php echo $batang->id_gejala; ?>">
                                    <?php echo $batang->gejala; ?>
                                  </label>
                              </div>
                            <?php endforeach; ?>
                          </div>
                          <div class="tab-pane fade" id="daun" role="tabpanel" aria-labelledby="daun-tab">
                            <?php foreach ($gejalaDaun as $daun) : ?>
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="<?php echo $daun->id_gejala; ?>" name="gejala[]" id="gejalan-daun-<?php echo $daun->id_gejala; ?>">
                                  <label class="form-check-label" for="gejalan-daun-<?php echo $daun->id_gejala; ?>">
                                    <?php echo $daun->gejala; ?>
                                  </label>
                              </div>
                            <?php endforeach; ?>
                          </div>
                          <div class="tab-pane fade" id="buah" role="tabpanel" aria-labelledby="buah-tab">
                            <?php foreach ($gejalaBuah as $buah) : ?>
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="<?php echo $buah->id_gejala; ?>" name="gejala[]" id="gejalan-buah-<?php echo $buah->id_gejala; ?>">
                                  <label class="form-check-label" for="gejalan-buah-<?php echo $buah->id_gejala; ?>">
                                    <?php echo $buah->gejala; ?>
                                  </label>
                              </div>
                            <?php endforeach; ?>
                            
                          </div>
                        </div>
                        <div class="col-md-12 mt-2 text-center">
                          <button type="submit" class="btn btn-primary">Diagnosis</button>
                      </div>
                      </form>
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

            // let kodePenyakitP = document.querySelector('#p-kode-penyakit');
            // let namaPenyakitP = document.querySelector('#p-nama-penyakit');
            // let penyebabP = document.querySelector('#p-penyebab');
            let daurPenyakitP = document.querySelector('#p-daur-penyakit');
            let faktorP = document.querySelector('#p-faktor');
            let gambarPenykaitP = document.querySelector('#p-gambar-penyakit');
            let diagnosis = true;

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
