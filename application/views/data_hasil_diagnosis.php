<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
    <div class="col-9">
        <?php if($message = $this->session->flashdata('message')): ?>
        <div class="alert alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
            <?php echo $message['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Data Hasil Diagnosis</h5>
            </div>
              <div class="card-body table-responsive">
                  <table id="datatable" class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Hasil Dignosis</th>
                        <th scope="col">Nilai Certainty Factor</th>
                        <!-- <th scope="col">Nilai Dempster Shafer</th> -->
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; foreach($data_hasil_diagnosis as $dt){ ?>
                      <tr>
                        <td scope="col"><?=$no++?></td>
                        <td scope="col"><?=$dt->nm_user?></td>
                        <td scope="col"><?=$dt->id_penyakit."-".$dt->nm_penyakit?></td>
                        <td scope="col"><?=$dt->cf?></td>
                        <!-- <td scope="col"><?=$dt->dempster?></td> -->
                        <td scope="col"><a href="<?=base_url('index.php/data_hasil_diagnosis/detail/'.$dt->id_hasil)?>" class="btn btn-warning">Detail</a>
                                        <a href="<?=base_url('index.php/beranda/cetak/' .$dt->id_hasil)?>" class="btn btn btn-secondary">
                                          <!-- <i class="fas fa-info"></i> -->
                                          Cetak
                                        </button>
                                      </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    </table>
                  </div>
        </div>
    </div>
    <div class="col-3">
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
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Hasil Diagnosis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin akan menghapus data ini?
      </div>
      <div class="modal-footer">
        <form action="#" method="post">
          <button type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script type="text/javascript">
  $('#datatable').on('click', '.delete', function(){
        let id = $(this).data('id');
        
        $('.modal-content form').attr('action', "<?php echo base_url('index.php/data_hasil_diagnosis/hapus/'); ?>" +id);
    });
</script>

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
      'Tomato',
      'DodgerBlue',
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
</script>