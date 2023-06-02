<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Tambah Data Artikel</h5>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo base_url('index.php/artikel/tambah'); ?>">
					<div class="mb-3">
						<label class="form-label">Judul Artikel</label>
						<input name="judul_artikel" type="text" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">Deskripsi Artikel</label>
						<textarea name="deskripsi_artikel" class="form-control" rows="5"></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Sumber Artikel</label>
						<textarea name="sumber_artikel" class="form-control" rows="2"></textarea>
					</div>
					<div class="text-center">
						<button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>