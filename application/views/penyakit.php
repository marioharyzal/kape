<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<div class="col-12">
		<?php if($message = $this->session->flashdata('message')): ?>
		<div class="alert alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
		  	<?php echo $message['message']; ?>
		  	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php endif; ?>
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Data Penyakit</h5>
				<br><a href="<?php echo base_url('index.php/penyakit/tambah'); ?>" class="btn btn-primary">
                    Tambah Data
                </a></br>
			</div>
			<div class="card-body table-responsive">
				<table id="datatable" class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Kode</th>
				      <th scope="col">Nama Penyakit</th>
				      <th scope="col">Penyebab</th>
				      <th scope="col">Daur Penyakit</th>
				      <th scope="col">Faktor</th>
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
                            <td><?php echo $row->daur_penyakit; ?></td>
                            <td><?php echo $row->faktor; ?></td>
                            <td>
                            	<a href="<?php echo base_url('index.php/penyakit/ubah/' .$row->id_penyakit); ?>" class="btn btn-sm btn-warning">
				                    <i class="align-middle" data-feather="edit"></i>
				                </a>
				                <button type="button" class="btn btn-sm btn-danger delete" data-id="<?php echo $row->id_penyakit; ?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
				                    <i class="align-middle" data-feather="trash"></i>
				                </button>
                            </td>
                        </tr>
				  	<?php endforeach; ?>
				  </tbody>
				</table>
				
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Penyakit</h5>
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
<script type="text/javascript">
	$('#datatable').on('click', '.delete', function(){
        let id = $(this).data('id');
        
        $('.modal-content form').attr('action', "<?php echo base_url('index.php/penyakit/hapus/'); ?>" +id);
    });
</script>