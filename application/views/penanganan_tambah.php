<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Tambah Data Penanganan</h5>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo base_url('index.php/penanganan/tambah'); ?>">
					<div class="mb-3">
						<label class="form-label">ID Penyakit</label>
						<select name="id_penyakit" class="form-select mb-3" value="<?php echo $penyakit->id_penyakit; ?>">
				          <option selected> -- Pilih Bagian -- </option>
				          <?php foreach($penyakit as $row): ?>
					          <option value="<?php echo $row->id_penyakit; ?>"><?php echo $row->nm_penyakit; ?></option>
					      <?php endforeach; ?>
				        </select>
					</div>
					<div class="mb-3">
						<label class="form-label">ID Solusi</label>
						<select name="id_solusi" class="form-select mb-3" value="<?php echo $solusi->id_solusi; ?>">
				          <option selected> -- Pilih Bagian -- </option>
				          <?php foreach($solusi as $row): ?>
					          <option value="<?php echo $row->id_solusi; ?>"><?php echo $row->solusi; ?></option>
					      <?php endforeach; ?>
				        </select>
					</div>
					<div class="text-center">
						<button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>