<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<?php if($message = $this->session->flashdata('message')); ?>
                    <div class="alert alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                      <?php echo $message['message']; ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Pilihlah Gejala di bawah ini :</h5>
			</div>

			<div class="card-body">
				<h6>Gejala</h6>
				<form  action="<?php echo base_url('index.php/diagnosa/hitung'); ?>" method="post">
				<?php foreach($gejala as $row): ?>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="<?php echo $row->id_gejala; ?>" id="gejala-<?php echo $row->id_gejala; ?>" name="gejala[]">
					  <label class="form-check-label" for="gejala-<?php echo $row->id_gejala; ?>">
					    <?php echo "[". $row->id_gejala. "]    ", $row->gejala; ?>
					  </label>
					</div>
				<?php endforeach; ?>
				<button type="submit" class="btn btn-primary mt-2">Lakukan Diagnosa</button>
			</div>
		</div>
	</div>
</div>