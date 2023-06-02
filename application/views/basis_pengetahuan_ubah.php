<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Ubah Data Basis Pengetahuan</h5>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo base_url('index.php/basis_pengetahuan/ubah/' .$basis_pengetahuan->id_basis_pengetahuan); ?>">
					<div class="mb-3">
						<label class="form-label">Nama Penyakit</label>
						<select name="id_penyakit" class="form-select mb-3" value="<?php echo $penyakit->id_penyakit; ?>">
				          <option selected> -- Pilih Bagian -- </option>
				          <?php foreach($penyakit as $row): ?>
					          <option value="<?php echo $row->id_penyakit; ?>"><?php echo $row->nm_penyakit; ?></option>
					      <?php endforeach; ?>
				        </select>
					</div>
					<div class="mb-3">
						<label class="form-label">Gejala</label>
						<select name="id_gejala" class="form-select mb-3" value="<?php echo $gejala->id_gejala; ?>">
				          <option selected> -- Pilih Bagian -- </option>
				          <?php foreach($gejala as $row): ?>
					          <option value="<?php echo $row->id_gejala; ?>"><?php echo $row->gejala; ?></option>
					      <?php endforeach; ?>
				        </select>
					</div>
					<div class="mb-3">
						<label class="form-label">MB</label>
						<textarea name="mb" rows="3" class="form-control"><?php echo $basis_pengetahuan->mb; ?></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">MD</label>
						<textarea name="md" rows="3" class="form-control"><?php echo $basis_pengetahuan->md; ?></textarea>
					</div>
					<!-- <div class="mb-3">
						<label class="form-label">Bel</label>
						<textarea name="bel" rows="3" class="form-control"><?php echo $basis_pengetahuan->bel; ?></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Plausibility</label>
						<textarea name="plau" rows="3" class="form-control"><?php echo $basis_pengetahuan->plau; ?></textarea>
					</div> -->
					<div class="text-center">
						<button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>