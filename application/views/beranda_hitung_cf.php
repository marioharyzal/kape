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
                        <?php foreach ($gejala as $e) { ?>
                            <li class="list-group-item">(<?= $e->id_gejala ?>) <?= $e->gejala ?></li>
                        <?php } ?>
                    </ul>

                    <?php $dp = array();
                    error_reporting(0);
                    $Result = [];
                    $cfResult = array();
                    $P01 = array();
                    $P02 = array();
                    $P03 = array();
                    $P04 = array();
                    $P05 = array();
                    $P06 = array();
                    $P07 = array();
                    $P08 = array();
                    $P09 = array();
                    $penyakit = array();
                    $gejala = array(); ?>


                    <?php $x = 1;
                    $P01N = 0;
                    $P02N = 0;
                    $P03N = 0;
                    $P04N = 0;
                    $P05N = 0;
                    $P06N = 0;
                    $P07N = 0;
                    $P08N = 0;
                    $P09N = 0;
                    foreach ($data as $d) { //big O(n)
                        if ($d->id_penyakit == "P01") {
                            $P01[$P01N]['id_penyakit'] = "P01";
                            $P01[$P01N]['gejala'] = $d->gejala;
                            $P01[$P01N]['mb'] = $d->mb;
                            $P01[$P01N]['md'] = $d->md;
                            $P01[$P01N]['id_gejala'] = $d->id_gejala;
                            $P01_NAMA = $d->nm_penyakit;
                            $P01N++;
                        } elseif ($d->id_penyakit == "P02") {
                            $P02[$P02N]['id_penyakit'] = "P02";
                            $P02[$P02N]['gejala'] = $d->gejala;
                            $P02[$P02N]['mb'] = $d->mb;
                            $P02[$P02N]['md'] = $d->md;
                            $P02[$P02N]['id_gejala'] = $d->id_gejala;
                            $P02_NAMA = $d->nm_penyakit;
                            $P02N++;
                        } elseif ($d->id_penyakit == "P03") {
                            $P03[$P03N]['id_penyakit'] = "P03";
                            $P03[$P03N]['gejala'] = $d->gejala;
                            $P03[$P03N]['mb'] = $d->mb;
                            $P03[$P03N]['md'] = $d->md;
                            $P03[$P03N]['id_gejala'] = $d->id_gejala;
                            $P03_NAMA = $d->nm_penyakit;
                            $P03N++;
                        } elseif ($d->id_penyakit == "P04") {
                            $P04[$P04N]['id_penyakit'] = "P04";
                            $P04[$P04N]['gejala'] = $d->gejala;
                            $P04[$P04N]['mb'] = $d->mb;
                            $P04[$P04N]['md'] = $d->md;
                            $P04[$P04N]['id_gejala'] = $d->id_gejala;
                            $P04_NAMA = $d->nm_penyakit;
                            $P04N++;
                        } elseif ($d->id_penyakit == "P05") {
                            $P05[$P05N]['id_penyakit'] = "P05";
                            $P05[$P05N]['gejala'] = $d->gejala;
                            $P05[$P05N]['mb'] = $d->mb;
                            $P05[$P05N]['md'] = $d->md;
                            $P05[$P05N]['id_gejala'] = $d->id_gejala;
                            $P05_NAMA = $d->nm_penyakit;
                            $P05N++;
                        } elseif ($d->id_penyakit == "P06") {
                            $P06[$P06N]['id_penyakit'] = "P06";
                            $P06[$P06N]['gejala'] = $d->gejala;
                            $P06[$P06N]['mb'] = $d->mb;
                            $P06[$P06N]['md'] = $d->md;
                            $P06[$P06N]['id_gejala'] = $d->id_gejala;
                            $P06_NAMA = $d->nm_penyakit;
                            $P06N++;
                        } elseif ($d->id_penyakit == "P07") {
                            $P07[$P07N]['id_penyakit'] = "P07";
                            $P07[$P07N]['gejala'] = $d->gejala;
                            $P07[$P07N]['mb'] = $d->mb;
                            $P07[$P07N]['md'] = $d->md;
                            $P07[$P07N]['id_gejala'] = $d->id_gejala;
                            $P07_NAMA = $d->nm_penyakit;
                            $P07N++;
                        } elseif ($d->id_penyakit == "P08") {
                            $P08[$P08N]['id_penyakit'] = "P08";
                            $P08[$P08N]['gejala'] = $d->gejala;
                            $P08[$P08N]['mb'] = $d->mb;
                            $P08[$P08N]['md'] = $d->md;
                            $P08[$P08N]['id_gejala'] = $d->id_gejala;
                            $P08_NAMA = $d->nm_penyakit;
                            $P08N++;
                        } elseif ($d->id_penyakit == "P09") {
                            $P09[$P09N]['id_penyakit'] = "P09";
                            $P09[$P09N]['gejala'] = $d->gejala;
                            $P09[$P09N]['mb'] = $d->mb;
                            $P09[$P09N]['md'] = $d->md;
                            $P09[$P09N]['id_gejala'] = $d->id_gejala;
                            $P09_NAMA = $d->nm_penyakit;
                            $P09N++;
                        }

                        if (array_search($d->id_penyakit, array_column($penyakit, 'id_penyakit')) === false) {
                            array_push($penyakit, [
                                'id_penyakit' => $d->id_penyakit,
                            ]);
                        }

                        array_push($gejala, $d->id_gejala);
                    ?>

                    <?php } ?>

                    <?php if (count($P01) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P01 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P01 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?PHP } ?>

                    <?php if (count($P02) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P02 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P02 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?php } ?>

                    <?php if (count($P03) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P03 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P03 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?PHP } ?>
                    <?php if (count($P04) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P04 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P04 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?PHP } ?>
                    <?php if (count($P05) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P05 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P05 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?PHP } ?>
                    <?php if (count($P06) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P06 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P06 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?PHP } ?>
                    <?php if (count($P07) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P07 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P07 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?PHP } ?>
                    <?php if (count($P08) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P08 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P08 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?PHP } ?>
                    <?php if (count($P09) > 0) { ?>

                        <?php $x = 0;
                        $mb_lama = 0;
                        $md_lama = 0;
                        //big O(n)
                        foreach ($P09 as $d) { ?>

                            <?php $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?>
                            <?php $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?>
                            <?php $cf_P09 = $mb_lama - $md_lama; ?>

                        <?php $x++;
                        } ?>

                    <?PHP } ?>
                    <?php
                    if (!empty($cf_P01)) {

                        array_push($Result, [
                            'penyakit' => $P01_NAMA,
                            'nilai' => $cf_P01,
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P01_NAMA,
                            'nilai' => $cf_P01,
                        ]);
                    }
                    if (!empty($cf_P02)) {

                        array_push($Result, [
                            'penyakit' => $P02_NAMA,
                            'nilai' => $cf_P02,
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P02_NAMA,
                            'nilai' => $cf_P02,
                        ]);
                    }
                    if (!empty($cf_P03)) {

                        array_push($Result, [
                            'penyakit' => $P03_NAMA,
                            'nilai' => $cf_P03,
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P03_NAMA,
                            'nilai' => $cf_P03,
                        ]);
                    }
                    if (!empty($cf_P04)) {

                        array_push($Result, [
                            'penyakit' => $P04_NAMA,
                            'nilai' => $cf_P04,
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P04_NAMA,
                            'nilai' => $cf_P04,
                        ]);
                    }
                    if (!empty($cf_P05)) {

                        array_push($Result, [
                            'penyakit' => $P05_NAMA,
                            'nilai' => $cf_P05,
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P05_NAMA,
                            'nilai' => $cf_P05,
                        ]);
                    }
                    if (!empty($cf_P06)) {

                        array_push($Result, [
                            'penyakit' => $P06_NAMA,
                            'nilai' => $cf_P06,
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P06_NAMA,
                            'nilai' => $cf_P06,
                        ]);
                    }
                    if (!empty($cf_P07)) {

                        array_push($Result, [
                            'penyakit' => $P07_NAMA,
                            'nilai' => $cf_P07,
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P07_NAMA,
                            'nilai' => $cf_P07,
                        ]);
                    }
                    if (!empty($cf_P08)) {

                        array_push($Result, [
                            'penyakit' => $P08_NAMA,
                            'nilai' => $cf_P08,
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P08_NAMA,
                            'nilai' => $cf_P08,
                        ]);
                    }
                    if (!empty($cf_P09)) {

                        array_push($Result, [
                            'penyakit' => $P09_NAMA,
                            'nilai' => $cf_P09,
                            'metode' => 'cf',
                        ]);
                        array_push($cfResult, [
                            'penyakit' => $P09_NAMA,
                            'nilai' => $cf_P09,
                        ]);
                    }
                    ?>

                    <!-- <br/>
                                                                        <h4 class="mt-4">Dari Gejala yang anda pilih sebelumnya dapat disimpulkan bahwa Penyakit pada Tanaman Kelapa Sawit yang sesuai adalah sebagai berikut :<!-- DARI GEJALA YANG ANDA PILIH SEBELUMNYA DAPAT DISIMPULKAN BAHWA PENYAKIT PADA TANAMAN KELAPA SAWIT YANG SESUAI ADALAH SEBAGAI BERIKUT : -->
                    </h4>


                    <!-- KONDISI UNTUK PERHITUNGAN MENJADI NILAI TERTINGGI -->

                    <h4 class="mt-4">Penyakit yg sesuai</h4>
                    <?php usort($Result, function ($a, $b) {
                        // return $a['nilai'] <=> $b['nilai'];
                        if ($a['nilai'] == $b['nilai']) return 0;
                        return ($a['nilai'] > $b['nilai']) ? -1 : 1;
                    });
                    usort($cfResult, function ($a, $b) {
                        // return $a['nilai'] <=> $b['nilai'];
                        if ($a['nilai'] == $b['nilai']) return 0;
                        return ($a['nilai'] > $b['nilai']) ? -1 : 1;
                    });
                    ?>

                    <?php
                    $_penyakit = [];
                    for ($i = 0; $i < count($Result); $i++) {
                        if ($Result[$i]['penyakit'] == 'P01' || $Result[$i]['penyakit'] == 'P02' || $Result[$i]['penyakit'] == 'P03' || $Result[$i]['penyakit'] == 'P04' || $Result[$i]['penyakit'] == 'P05' || $Result[$i]['penyakit'] == 'P06') {
                            $this->db->where('id_penyakit', $Result[$i]['penyakit']);
                            $_penyakitQuery = $this->db->get('tb_penyakit');
                            $_penyakitNama = $_penyakitQuery->row()->nm_penyakit;
                        } else {
                            $_penyakitNama = $Result[$i]['penyakit'];
                        }

                        if ($i < count($Result)) {
                            if ($Result[0]['nilai'] == $Result[$i]['nilai']) {
                                array_push($_penyakit, [
                                    'penyakit' => $_penyakitNama,
                                    'nilai' => $Result[$i]['nilai'],
                                ]);
                            } else if ($i == 0) {
                                array_push($_penyakit, [
                                    'penyakit' => $_penyakitNama,
                                    'nilai' => $Result[$i]['nilai'],
                                ]);
                            }
                        }
                    }
                    ?>

                    <?php foreach ($_penyakit as $row) : ?>
                        <?php
                        $this->db->where('nm_penyakit', $row['penyakit']);
                        $_penyakitDetailQuery = $this->db->get('tb_penyakit');

                        echo '<br/>' . $row['penyakit'] . '/' . $row['nilai'] * 100 . '(' . $row['nilai'] . ')';
                        echo
                        '
                <div class="text-center">
                    <img class="mx-auto d-block img-thumbnail" style="height: 200px;" src="' . base_url('uploads/' . $_penyakitDetailQuery->row()->gambar_penyakit) . '">
                </div>
            ';
                        ?>
                    <?php endforeach; ?>

                    <?php foreach ($_penyakit as $row) : ?>
                        <?php
                        $this->db->where('nm_penyakit', $row['penyakit']);
                        $_penyakitDetailQuery = $this->db->get('tb_penyakit');

                        echo
                        '
                <h4 class="mt-4">PENANGANAN PENYAKIT ' . strtoupper($_penyakitDetailQuery->row()->nm_penyakit) . '</h4>
            ';

                        $this->db->select('*');
                        $this->db->from('tb_penanganan');
                        $this->db->join('tb_solusi', 'tb_solusi.id_solusi = tb_penanganan.id_solusi');
                        $this->db->where('id_penyakit', $_penyakitDetailQuery->row()->id_penyakit);
                        $_solusi = $this->db->get()->result();
                        ?>

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
                                    //big O(n)
                                    foreach ($_solusi as $row) : ?>
                                        <tr>
                                            <td scope="col"><?php echo $no++ ?></td>
                                            <td scope="col"><?php echo $row->solusi ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>

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
            foreach ($_gejala as $row) {
                $this->db->select('*');
                $this->db->from('tb_penanganan_khusus');
                $this->db->where('tb_penanganan_khusus.id_gejala', $row);
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

                    <?php
                    foreach ($_penyakit as $row) {
                        $check = $this->db->get_where('tb_penyakit', ['nm_penyakit' => $row['penyakit']])->result();
                        if (count($check) > 0) {
                            $idp = $check[0]->id_penyakit;
                        } else {
                            $idp = $Result[0]['penyakit'];
                        }
                        $simpan_hasil = array(
                            'id_penyakit' => $idp,
                            'nm_user' => $nama,
                            'alamat_user' => $alamat,
                            'pekerjaan_user' => $pekerjaan,
                            'tanggal' => date('Y-m-d'),
                            'cf' => $cfResult[0]['nilai'],
                        );

                        $this->db->insert('tb_hasil', $simpan_hasil);
                        $id_hasil = $this->db->insert_id();
                        $simpan_diagnosis = array();
                        //big O(n)
                        foreach ($_gejala as $e) {
                            array_push($simpan_diagnosis, [
                                'id_hasil' => $id_hasil,
                                'id_gejala' => $e,
                            ]);
                        }
                        $this->db->insert_batch('tb_diagnosis', $simpan_diagnosis);
                    }
                    ?>

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