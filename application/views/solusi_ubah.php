<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Ubah Data Solusi</h5>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo base_url('index.php/solusi/ubah/' .$solusi->id_solusi); ?>">
					<div class="mb-3">
						<label class="form-label">ID Solusi</label>
						<input name="id_solusi" type="text" class="form-control" value="<?php echo $solusi->id_solusi; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Solusi</label>
						<input name="solusi" type="text" class="form-control" value="<?php echo $solusi->solusi; ?>">
					</div>
					<div class="text-center">
						<button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>