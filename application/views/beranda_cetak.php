<table align="center" style="border-bottom-style: double; border-width: 2px; border-bottom-width:2px; width: 100%;">
    <tr>
        <!-- <td width="10"><img width=75 height=75 src='assets/Logo.png'></td> -->
        <td align="center">
            <p style="font-size: 16px;"> HASIL DIAGNOSA</p>
            <!-- <p style="font-size: 16px;"> PENYAKIT KAMBING PERAH ANGLO NUBIAN</p> -->
            <p style="font-size: 14px;"> SISTEM PAKAR DIAGNOSA PENYAKIT PADA KAMBING PERAH ANGLO NUBIAN</p>
        </td>
    </tr>
</table>

<div class="container" align="center">
    <p style="font-size: 14px;" align="left"><b>Gejala Yang Dipilih :</p>

    <table class="table" border="1" align="center" style="border: 1px solid black;
    border-collapse: collapse;" cellspacing="0" width="100%">
        <thead>
            <tr bgcolor="#CDCACA">
                <th>No</th>
                <th>Kode</th>
                <th>Gejala yang dialami</th>
                <th>Bagian</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($gejala as $dt) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td align="center"><?= $dt->id_gejala ?></td>
                    <td><?= $dt->gejala ?></td>
                    <td><?= $dt->bagian ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>

    <p style="font-size: 14px;" align="left"><b>Dari gejala yang anda pilih sebelumnya maka dapat diketahui bahwa penyakit yang diderita pada kambing Anglo Nubian anda adalah :</p>

    <p>
        <?php $nilai = $data_hasil_diagnosis->cf ?>
        <?= $data_hasil_diagnosis->nm_penyakit ?>/<?= round($nilai * 100, 2) ?>% (<?= $nilai ?>)
    </p>
    <div class="text-center">
        <img class="mx-auto d-block img-thumbnail" style="height: 200px;" src="<?= $_SERVER["DOCUMENT_ROOT"] . base_url('/uploads/' . $data_hasil_diagnosis->gambar_penyakit) ?>">
        <p><?= $_SERVER["DOCUMENT_ROOT"] . base_url('/uploads/' . $data_hasil_diagnosis->gambar_penyakit) ?></p>
    </div>
</div>

<p style="font-size: 14px;" align="left"><b>Penanganan</p>
<table id="datatable-fixed-header" class="table table-striped table-bordered" border="1" align="center" style="border: 1px solid black;
    border-collapse: collapse;" cellspacing="0" width="100%">
    <thead>
        <tr bgcolor="#CDCACA">
            <th>No</th>
            <th>Solusi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($solusi as $dt) { ?>
            <tr>
                <td align="center"><?= $no++ ?></td>
                <td><?= $dt->solusi ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>