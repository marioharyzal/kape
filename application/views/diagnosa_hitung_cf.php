<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row"> 
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Hasil Diagnosa</h5>
            </div>
            <div class="card-body">
                
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


<strong>Certainty Factor-Rule Sesuai Gejala Yang Anda Pilih</strong>
<table class="table table-striped">
    <thead>
        <th>No</th>
        <th>Hipotesa</th>
        <th>Evidence</th>
        <th>Mb</th>
        <th>Md</th>
    </thead>
    <tbody>
        <?php $start_time2 = microtime(true); ?>
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
        foreach ($data as $d) {
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
            <tr>
                <td><?= $x++; ?></td>
                <td><?= $d->nm_penyakit ?></td>
                <td><?= $d->gejala ?></td>
                <td><?= $d->mb ?></td>
                <td><?= $d->md ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br>
<?php if (count($P01) > 0) { ?>
    <strong>CF pada Penyakit <?= $P01_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[d]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P01 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P01 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>

<?php if (count($P02) > 0) { ?>
    <strong>CF pada Penyakit <?= $P02_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[e]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P02 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P02 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>
<?php if (count($P03) > 0) { ?>
    <strong>CF pada Penyakit <?= $P03_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[e]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P03 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P03 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>
<?php if (count($P04) > 0) { ?>
    <strong>CF pada Penyakit <?= $P04_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[e]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P04 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P04 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>
<?php if (count($P05) > 0) { ?>
    <strong>CF pada Penyakit <?= $P05_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[e]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P05 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P05 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>
<?php if (count($P06) > 0) { ?>
    <strong>CF pada Penyakit <?= $P06_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[e]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P06 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P06 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>
<?php if (count($P07) > 0) { ?>
    <strong>CF pada Penyakit <?= $P07_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[e]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P07 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P07 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>
<?php if (count($P08) > 0) { ?>
    <strong>CF pada Penyakit <?= $P08_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[e]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P08 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P08 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>
<?php if (count($P09) > 0) { ?>
    <strong>CF pada Penyakit <?= $P09_NAMA ?> </strong>
    <table class="table table-striped">
        <thead>
            <th style="width:10%;">No</th>
            <th>Evidence</th>
            <th>MB[e]</th>
            <th>MD[e]</th>
            <th>MB</th>
            <th>MD</th>
            <th>CF</th>
        </thead>
        <tbody>
            <?php $x = 0;
            $mb_lama = 0;
            $md_lama = 0;
            foreach ($P09 as $d) { ?>
                <tr>
                    <td><?= $x + 1 ?>-<?= $d['id_gejala'] ?></td>
                    <td><?= $d['gejala'] ?></td>
                    <td><?= $d['mb'] ?></td>
                    <td><?= $d['md'] ?></td>
                    <td><?php echo $mb_lama = $mb_lama + ($d['mb'] * (1 - $mb_lama)); ?></td>
                    <td><?php echo $md_lama = $md_lama + ($d['md'] * (1 - $md_lama)); ?></td>
                    <td><?php echo $cf_P09 = $mb_lama - $md_lama; ?></td>
                </tr>
            <?php $x++;
            } ?>
        </tbody>
    </table>
    <br>
<?PHP } ?>
<?php
if (!empty($cf_P01)) {
    echo $P01_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P01 . "<br>";
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
    echo $P02_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P02 . "<br>";
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
    echo $P03_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P03 . "<br>";
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
    echo $P04_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P04 . "<br>";
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
    echo $P05_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P05 . "<br>";
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
    echo $P06_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P06 . "<br>";
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
    echo $P07_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P07 . "<br>";
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
    echo $P08_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P08 . "<br>";
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
    echo $P09_NAMA . " Dengan Tingkat Kepercayaan : " . $cf_P09 . "<br>";
    array_push($Result, [
        'penyakit' => $P09_NAMA,
        'nilai' => $cf_P09,
    ]);
    array_push($cfResult, [
        'penyakit' => $P09_NAMA,
        'nilai' => $cf_P09,
    ]);
}


?>

<?php
// End clock time in seconds
$end_time2 = microtime(true);

// Calculate script execution time
$execution_time2 = ($end_time2 - $start_time2);

echo " Execution time of script = " . round($execution_time2, 5) . " sec<br/><br/>";
?>

<br />
<h4 class="mt-4">Penyakit yang terdiagnosa :</h4>
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
if ($Result[0]['penyakit'] == 'P01' || $Result[0]['penyakit'] == 'P02' || $Result[0]['penyakit'] == 'P03' || $Result[0]['penyakit'] == 'P04' || $Result[0]['penyakit'] == 'P05' || $Result[0]['penyakit'] == 'P06') {

    $chk = $this->db->get_where('tb_penyakit', ['id_penyakit' => $Result[0]['penyakit']])->result();
    $str = $chk[0]->nm_penyakit;
} else {
    $str = $Result[0]['penyakit'];
}

// echo '<br/>' . $str;
?>

<?php
$_penyakit = [];
for($i = 0; $i < count($Result); $i++) {
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

<?php 
    foreach ($_penyakit as $row) {
        echo '<br/>' .$row['penyakit'];
    } 
?>


</div>
</div>
</div>
<br>
