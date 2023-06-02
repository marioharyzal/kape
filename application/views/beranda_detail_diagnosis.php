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
  <section class="page-section">
    <div class="container">
      <div class="text-center mt-2">
        <h2 class="section-heading text-uppercase">Detail Hasil Diagnosis</h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h4 class="mt-4">Gejala</h4>
          <div class="card-body table-responsive">
            <table id="" class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kode</th>
                  <th scope="col">Gejala yang dialami</th>
                  <th scope="col">Bagian</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($gejala as $dt) { ?>
                  <tr>
                    <td scope="col"><?= $no++ ?></td>
                    <td scope="col"><?= $dt->id_gejala ?></td>
                    <td scope="col"><?= $dt->gejala ?></td>
                    <td scope="col"><?= $dt->bagian ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <h4 class="mt-4">Penyakit</h4>
          <?php $nilai = $data_hasil_diagnosis->cf ?>
          <?= $data_hasil_diagnosis->nm_penyakit ?>/<?= round($nilai * 100, 2) ?>% (<?= $nilai ?>)
          <div class="text-center">
            <img class="mx-auto d-block img-thumbnail" style="height: 200px;" src="<?= base_url('uploads/' . $data_hasil_diagnosis->gambar_penyakit) ?>">
          </div>

          <h4 class="mt-4">Penanganan</h4>
          <div class="card-body table-responsive">
            <table id="" class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Solusi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($solusi as $dt) { ?>
                  <tr>
                    <td scope="col"><?= $no++ ?></td>
                    <td scope="col"><?= $dt->solusi ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <!-- <h4 class="mt-4">Penanganan Khusus</h4>
                        <div class="card-body table-responsive">
                            <table id="" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Gejala</th>
                                        <th scope="col">Solusi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $_no = 1;
                                    foreach ($gejala as $row) {
                                      $this->db->select('*');
                                      $this->db->from('tb_penanganan_khusus');
                                      $this->db->where('tb_penanganan_khusus.id_gejala', $row->id_gejala);
                                      $this->db->join('tb_gejala', 'tb_gejala.id_gejala = tb_penanganan_khusus.id_gejala');
                                      $_gejalaKhususDetailQuery = $this->db->get();
                                      // var_dump($_gejalaKhususDetailQuery->row());
                                      if ($_gejalaKhususDetailQuery->row() != null) {
                                        echo '<tr>';
                                        echo '<td>' . $_no++ . '</td>';
                                        echo '<td>' . $_gejalaKhususDetailQuery->row()->gejala . '</td>';
                                        echo '<td>' . $_gejalaKhususDetailQuery->row()->solusi_khusus . '</td>';
                                        echo '</tr>';
                                      }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div> -->
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
</body>

</html>