
                      <?php $dp=array(); $df_final=0;?>

<!---PERHITUNGAN DEMPSTER -->

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
            
                  
                                    <?php 
                                      $no=0;
                                      $count1=count($hasil_penyakit2)-1;
                                      
                                    ?>
                                 
                                    <?php $no=0;
                                    $count1=count($nilai_d2)-1;
                                     ?>
                                    
                            
                              <?php $no=0;$total=count($nilai_d2);$last=0;  
                              foreach($nilai_d2 as $nd2){ ?>
                              <?php 
                                   $hasil[$no]=round($nilai_d2[$no]*$nilai_d1[0],5);
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
                                        $new_penyakit=$exp_penyakit[$no_ep];
                                      }else{
                                        $new_penyakit=$exp_penyakit[$no_ep];
                                      }
                                      $cek_record++;
                                    }elseif($total-1==$no AND $last==0 ){
                                      $new_penyakit=$penyakit;
                                      $cek_record++;
                                      $last=1;
                                    }
                                    if($cek_record==0){
                                        $konflik+=$hasil[$no];
                                        
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
                                  
                                ?>
                                <?php 
                                  //echo $hasil[$no]=$nilai_d2[$no]*$nilai_d1[1];
                                  if($total-1==$no){
                                     round($nilai_d2[$no]*$nilai_d1[1],5)."-"."&Theta;"; 
                                    $hasil_ds['theta']=round($nilai_d2[$no]*$nilai_d1[1],5);
                                    $ds_penyakit[]="theta";
                                  }else{
                                     round($nilai_d1[1]*$nilai_d2[$no],5)."-".$hasil_penyakit2[$no];
                                    
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
                                ?>
                              <?php $no++;} ?>
                        
                          
                            <?php $ab=0;
                            $hasil_penyakit2=array();
                            $nilai_hasil_penyakit=array();
                            $Result = [];
                            $df_final=0; 
                            foreach($ds_penyakit as $dsp){ ?>
                              <?php if($ds_penyakit[$ab]=="theta"){$name="theta";}else{ $name=$ds_penyakit[$ab];} ?>
                              <?php 
                                $hsl=round($hasil_ds[$name]/(1-$konflik),5);

                                if($df_final<$hsl){
                                  $df_final=$hsl;
                                }
                              ?>
                              
                            <?php   
                            array_push($nilai_hasil_penyakit,$hsl);
                            array_push($hasil_penyakit2, $ds_penyakit[$ab]);
                            array_push($Result, [ 
                              'penyakit' => $ds_penyakit[$ab],
                              'nilai' => round($hasil_ds[$name]/(1-$konflik),5),
                              // 'metode' => 'ds',
                            ]);

                            $ab++;} 
                            $nilai_d2= $nilai_hasil_penyakit;
                            
                            //print_r($hasil_penyakit2);?>
                          </table>


<?php 
$x++;
$z+=2;
}
?>  
