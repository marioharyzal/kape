<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Ubah Data Penyakit</h5>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo base_url('index.php/penyakit/ubah/' .$penyakit->id_penyakit); ?>" enctype="multipart/form-data">
					<div class="mb-3">
						<label class="form-label">ID Penyakit</label>
						<input name="id_penyakit" type="text" class="form-control" value="<?php echo $penyakit->id_penyakit; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Penyakit</label>
						<input name="nama_penyakit" type="text" class="form-control" value="<?php echo $penyakit->nm_penyakit; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Penyebab</label>
						<textarea name="penyebab" rows="3" class="form-control"><?php echo $penyakit->penyebab; ?></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Daur Penyakit</label>
						<textarea name="daur_penyakit" rows="3" class="form-control"><?php echo $penyakit->daur_penyakit; ?></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Faktor</label>
						<textarea name="faktor" rows="3" class="form-control"><?php echo $penyakit->faktor; ?></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Gambar Penyakit</label>
						<?php if ($penyakit->gambar_penyakit != null): ?>
							<img src="<?php echo base_url('/Uploads/' .$penyakit->gambar_penyakit); ?>" class="d-block img-thumbnail" style="    height: 200px;">
						<?php endif; ?>
						<div class="input-group">
						 	<input type="file" class="form-control" id="gambar-penyakit" name="gambar_penyakit" value="<?php echo $penyakit->gambar_penyakit; ?>" accept="image/png, image/gif, image/jpeg">
						  	<label class="input-group-text" for="gambar-penyakit">Upload</label>
						</div>
					</div>
					<div class="text-center">
						<button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>