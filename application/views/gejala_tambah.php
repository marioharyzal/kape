<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Tambah Data Gejala</h5>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo base_url('index.php/gejala/tambah'); ?>">
					<div class="mb-3">
						<label class="form-label">ID Gejala</label>
						<input name="id_gejala" type="text" class="form-control">

					</div>
					<div class="mb-3">
						<label class="form-label">Nama Gejala</label>
						<input name="gejala" type="text" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">Bagian</label>
						<select name="bagian" class="form-select mb-3" value="<?php echo $gejala->bagian; ?>">
				          <option selected> -- Pilih Bagian -- </option>
				          <option value="Akar">Akar</option>
				          <option value="Daun">Daun</option>
				          <option value="Batang">Batang</option>
				          <option value="Buah">Buah</option>
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