<h1 class="h3 mb-3">
	<!-- <?php echo $pageTitle; ?> -->
	Beranda
</h1>

<div class="row">
	<div class="col-md-12 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-6">
					<div class="card" style="background-color:Tomato">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title" style="color:black" "font-size:30px">Jumlah Penyakit</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="slack"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3"><?php echo $jumlahPenyakit; ?></h1>
						</div>
					</div>
					<div class="card" style="background-color:Orange">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title" style="color : black">Jumlah Solusi</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="link"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3"><?php echo $jumlahSolusi; ?></h1>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card" style="background-color:DodgerBlue">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title" style="color : black">Jumlah Gejala</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="feather"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3"><?php echo $jumlahGejala; ?></h1>
						</div>
					</div>
					<div class="card" style="background-color:MediumSeaGreen">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title" style="color : black">Total Hasil Diagnosa</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="users"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3"><?php echo $totalDiagnosa; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>