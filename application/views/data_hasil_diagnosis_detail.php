<?php
if ($data_hasil_diagnosis->cf) {
  $nilai = $data_hasil_diagnosis->cf;
}

?>
<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
  <div class="col-12">
    <?php if ($message = $this->session->flashdata('message')) : ?>
      <div class="alert alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
        <?php echo $message['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Hasil Diagnosis</h5>
      </div>
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
    </div>

    <div class="card">
      <div class="card-header">
        <h1 class="card-title mb-0">Hasil Diagnosis</h1>
      </div>
      <div class="card-body table-responsive">
        <div class="row">
          <div class="col-9">
            <p>Jenis Penyakit yang diderita adalah </p>
            <br>
            <h3><B><?= $data_hasil_diagnosis->nm_penyakit ?></B>/<?= round($nilai, 2) ?>% (<?= $nilai ?>)</h3>
          </div>
          <div class="md-3">
            <img class="mx-auto d-block img-thumbnail" style="height: 200px;" src="<?= base_url('uploads/' . $data_hasil_diagnosis->gambar_penyakit) ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>