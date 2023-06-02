<?php $dp=array(); $df_final=0;?>


<h1 class="h3 mb-3"><?php echo $pageTitle; ?></h1>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Hasil Diagnosa</h5>
			</div>
			<div class="card-body">

 
				<strong>Gejala Yang Anda Pilih</strong>
				<ul class="list-group mb-4">
				  <?php foreach($gejala as $e){ ?>
                	<li class="list-group-item">(<?=$e->id_gejala?>) <?=$e->gejala?></li>
				  <?php } ?>
				</ul>

				<strong>Rule Sesuai Gejala Yang Anda Pilih</strong>
				<table class="table table-striped">
					<thead>
						<th>No</th>
						<th>Hipotesa</th>
						<th>Evidence</th>
						<th>Belief</th>
					</thead>
					<tbody>
						<?php $x=1; foreach($data as $d){?>
						<tr>
							<td><?=$x++;?></td>
							<td><?=$d->nm_penyakit?></td>
							<td><?=$d->gejala?></td>
							<td><?=$d->bel?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
 
<!---PERHITUNGAN DEMPSTER -->

<?php $start_time = microtime(true); ?>

<?php  
	$x=0;
	$hasil_penyakit2=array();
	$kombinasi=1;
	$z=0;
foreach($sort_by as $a){
	$hasil_ds=array();
	$new_penyakit="";
	$ds_penyakit=array();
	$konflik=0;
	$nilai_d1=array();
	$hasil_penyakit=array();
	$d1=array();
	$penyakit="";
	$data=$this->db->get_where('tb_basis_pengetahuan',['id_gejala'=>$a['id_gejala']])->result_array();

	array_push($d1,$a['bel']);
	array_push($d1,$a['plau']);
							$no=0;
							$sum=0;
							foreach($data as $dt){
								if($no==0){
									$penyakit.=$dt['id_penyakit'];
								}else{
									$penyakit.="-".$dt['id_penyakit'];
								}

								$no++;
								$sum+=$dt['bel'];
								$suma=$sum/$no;
							}
							if($x==0){
								$x++;
								$z++;
								$d1=$data;
								$d2=$d1;

								foreach($d1 as $ulang){
									$hasil_penyakit=array();
									array_push($hasil_penyakit,$penyakit);
									array_push($hasil_penyakit,'&Theta;');
									
									$no=0;
									$total=count($hasil_penyakit)-1;
									
									
									//print_r($hasil_penyakit2);
								}
								foreach($hasil_penyakit as $hp){
										if($total==$no){
											array_push($nilai_d1,round(1-$suma,5));
										}else{
											array_push($nilai_d1,round($suma,5));
										}
										
									$no++;}
									$hasil_penyakit2=$hasil_penyakit;
									$nilai_d2=$nilai_d1;
								continue;
							}else{
								foreach($data as $ulang){

									array_push($hasil_penyakit,$penyakit);
									array_push($hasil_penyakit,'&Theta;');
									
									$no=0;
									$total=count($hasil_penyakit)-1;
									foreach($hasil_penyakit as $hp){
										if($total==$no){
											array_push($nilai_d1,round(1-$suma,5));
										}else{
											array_push($nilai_d1,round($suma,5));
										}
										
									$no++;}

									//print_r($hasil_penyakit2);
								}
							}
?>
						
									<strong>Kombinasi <?=$kombinasi++;?></strong>
										<br/>
	                					<span>Densitas Awal</span>
	                					<table class="table table-striped">
	                						<thead>
	                							<th></th>
	                							<th>Gejala</th>
	                							<th>Penyakit</th>
	                							<th>Believe</th>
	                							<th>Plau</th>
	                						</thead>
	                						<tbody>
	                							
	                							<tr>
	                								<td>M<?=$z?></td>
	                								<td><?php 
	                								if($x<2){echo $sort_by[$x-1]['gejala'];}?>
	                								</td>
	                								<td>
	                									<?php 
	                										$no=0;
	                										$count1=count($hasil_penyakit2)-1;
	                										foreach($hasil_penyakit2 as $hp){
	                											if($count1==$no){break;}
	                											echo $hasil_penyakit2[$no]."<br>";
	                										$no++;}
	                									?>
	                								</td>
	                								<td>
	                									<?php $no=0;
	                									$count1=count($nilai_d2)-1;
	                									foreach($nilai_d2 as $nhp){
	                										if($count1==$no){break;}
	                											echo $nilai_d2[$no]."<br>";
	                									$no++;} ?>
	                									</td>
	                								<td><?=$nilai_d2[$no];?></td>
	                							</tr>
	                							<tr>
	                								<td>M<?=$z+1?></td>
	                								<td><?=$sort_by[$x]['gejala']?></td>
	                								<td><?=$penyakit;?></td>
	                								<td><?=$nilai_d1[0]?>
	                								<td><?=$nilai_d1[1]?></td>
	                							</tr>
	                							
	                							
	                						</tbody>
	                					</table>
	                					<br>
	                					<h5>Kombinasis Densitas(<?=count($nilai_d2)?>)</h5>
                					  <table class="table table-striped">
                						<thead>
                							<th>#</th>
                							<th>M<?=$z+1?>[<?=$penyakit?>]</th>
                							<th>M<?=$z+1?>[&theta;]</th>
                						</thead>
                						<tbody>
                							<?php $no=0;$total=count($nilai_d2);$last=0;  
                							foreach($nilai_d2 as $nd2){ ?>
                							<tr>
                								<td>M<?=$z?>[<?=$hasil_penyakit2[$no]?>]</td>
                								<td><?php 
                									echo $hasil[$no]=round($nilai_d2[$no]*$nilai_d1[0],5);
                									$exp=explode('-',$hasil_penyakit2[$no]);
                									$exp_penyakit=explode('-',$penyakit);
                									//print_r($exp_penyakit);
                									$no_ep=0;

                									$cek_record=0;

                									foreach($exp_penyakit as $ep){

                										//$check = array_search($exp_penyakit[$no_ep],$exp);
                										$check = in_array($exp_penyakit[$no_ep],$exp);
                										$exp_penyakit[$no_ep];
                										if($check){
                											if($new_penyakit==""){
                												echo "-";
                												echo $new_penyakit=$exp_penyakit[$no_ep];
                											}else{
                												echo "-";
                												echo $new_penyakit=$exp_penyakit[$no_ep];
                											}
                											$cek_record++;
	                									}elseif($total-1==$no AND $last==0 ){
	                										echo "-";
	                										echo $new_penyakit=$penyakit;
	                										$cek_record++;
	                										$last=1;
	                									}
	                									if($cek_record==0){
	                											$konflik+=$hasil[$no];
	                											echo "-Konflik";
	                											$new_penyakit="konflik";
	                											break;
	                									}

	                									$no_ep++;

                									}
                									if($new_penyakit!="konflik"){
                										$cek_ds = in_array($new_penyakit,$ds_penyakit);	
	                									if(!$cek_ds){
	                										$ds_penyakit[] = $new_penyakit;

	                									}
	                									if(empty($hasil_ds[$new_penyakit])){
	                										// echo "(".$nilai_d2[$no].")";
	                										//$new_penyakit;
	                										$hasil_ds[$new_penyakit]=round($nilai_d2[$no]*$nilai_d1[0],5);
	                									}else{
	                										$hasil_ds[$new_penyakit]=round($hasil_ds[$new_penyakit]+($nilai_d2[$no]*$nilai_d1[0]),5);
	                									}
                									}
                									
                								?></td>
                								<td><?php 
                									//echo $hasil[$no]=$nilai_d2[$no]*$nilai_d1[1];
                									if($total-1==$no){
	                									echo round($nilai_d2[$no]*$nilai_d1[1],5)."-"."&Theta;"; 
	                									$hasil_ds['theta']=round($nilai_d2[$no]*$nilai_d1[1],5);
	                									$ds_penyakit[]="theta";
                									}else{
                										echo round($nilai_d1[1]*$nilai_d2[$no],5)."-".$hasil_penyakit2[$no];
	                									
	                									if(empty($hasil_ds[$hasil_penyakit2[$no]])){
	                										$hasil_ds[$hasil_penyakit2[$no]]=round($nilai_d2[$no]*$nilai_d1[1],5);
	                									}else{
	                										$hasil_ds[$hasil_penyakit2[$no]]=round($hasil_ds[$hasil_penyakit2[$no]]+($nilai_d2[$no]*$nilai_d1[1]),5);
	                									}
	                									$cek_ds = in_array($hasil_penyakit2[$no],$ds_penyakit);	
	                									if(!$cek_ds){
	                										$ds_penyakit[] = $hasil_penyakit2[$no];
	                									}
                									}
                								?></td>
                							</tr>
                							<?php $no++;} ?>
                						</tbody>
                					</table>
                				
                					<br>
                					<?php //print_r($ds_penyakit) ?>
                					<?php //print_r($hasil_ds) ?>
                					<table class="df" style="width:50%">
                					<h5>Dempster-Shafer(konflik:<?=$konflik?>)</h5>
                						<?php $ab=0;
                						$hasil_penyakit2=array();
                						$nilai_hasil_penyakit=array();
                						$Result = [];
                						$df_final=0;
                						foreach($ds_penyakit as $dsp){ ?>
                							<tr class="df">
                								<td class="df">M<?=$z+2?>['<?php if($ds_penyakit[$ab]=="theta"){echo "&Theta;";$name="theta";}else{echo $name=$ds_penyakit[$ab];} ?>']</td>
                								<td class="df">=</td>
                								<td class="df"><?php echo $hsl=round($hasil_ds[$name]/(1-$konflik),5);
                													if($df_final<$hsl){
                														$df_final=$hsl;
                													}
                								?></td>
                							</tr>
                						<?php 	
                						array_push($nilai_hasil_penyakit,$hsl);
                						array_push($hasil_penyakit2, $ds_penyakit[$ab]);
                						array_push($Result, [
                							'penyakit' => $ds_penyakit[$ab],
                							'nilai' => round($hasil_ds[$name]/(1-$konflik),5)
                						]);

                						$ab++;} 
                						$nilai_d2= $nilai_hasil_penyakit;
                						
                						//print_r($hasil_penyakit2);?>
                					</table>


<!-- <?php
// End clock time in seconds
$end_time = microtime(true);
  
// Calculate script execution time
$execution_time = ($end_time - $start_time);
  
echo " Execution time of script = ".round($execution_time, 5)." sec<br/><br/>";
?> -->

<?php 
$x++;
$z+=2;
}
?>
<?php
// End clock time in seconds
$end_time = microtime(true);
  
// Calculate script execution time
$execution_time = ($end_time - $start_time);
  
echo " Execution time of script = ".round($execution_time, 5)." sec<br/><br/>";
?>
<div>Keterangan :
<br>
P01 = Busuk Pangkal Batang
||  P02 = Busuk Batang Atas
||  P03 = Busuk Tandan <br>
P04 = Busuk Daun Corticium
||  P05 = BLAS
||  P06 = Penyakit Tajuk</div>
<br>
<br>	
<?php $this->load->view('diagnosa_hitung_cf', ['Result' => $Result,'df_final'=>$df_final,'gejala'=>$gejala]); ?>	