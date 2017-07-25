 <div class="page-inner">
                <div class="page-title">
                    <h3>Cetak</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                         
                            <li class="active">Cetak</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="invoice col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel panel-heading" style="height: 70px;">
                            		<form class="form-inline" method="post" action="<?php echo base_url('cetak/filter'); ?>">

									  <div class="form-group" >
									    <label for="satker">Satker</label>

									    <select name="id_satker" class="form-control">
                                                    <option value="1" <?php if (!empty($id_satker) AND $id_satker =='1'){ echo 'selected'; }?> 	
                                                  >SATUAN KERJA PERENCANAAN DAN PENGAWASAN JALAN NASIONAL</option>
                                            <option value="2" <?php if (!empty($id_satker) AND $id_satker =='2'){ echo 'selected';}?>>PPK P2JN METRO SEMARANG</option>
									    </select>
									  </div>
									  <div class="form-group">
									    <label for="ppk">PPK</label>
									    <select name="ppkpjn" class="form-control">
									    	<?php
									    		if(!empty($ppkpjn)){
									    	?>
									    	<option value="<?php echo $ppkpjn; ?>"><?php echo $ppkpjn; ?></option>
									    	<?php }else{ ?>
									    	<?php foreach ($data_combo as $key) {
									    		
									    	?>
									    	<option  value="<?php echo $key['ppkpjn']; ?>"><?php echo $key['ppkpjn']; ?></option>
									    	<?php } }?>

									    </select>
									  </div>
									  <div class="form-group">
									    <label for="ppk">Tahun</label>
									    <select name="tahun" class="form-control">
									    	<?php
									    		if(!empty($tahun)){
									    	?>
									    	<option value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>
									    	<?php }else{ ?>
									    	<?php foreach ($data_combo as $key) {
									    		
									    	?>
									    	<option  value="<?php echo substr($key['tgl_kontrak'], 0,4) ?>"><?php echo substr($key['tgl_kontrak'], 0,4) ?></option>
									    	<?php } }?>
									    	
									    </select>
									  </div>
									  <div class="form-group">
									    <label for="ppk">Bulan</label>
									    <select name="bulan" class="form-control">

									    	<?php if(!empty($bulan)){
									    	?>
									    	<option value="<?php echo $bulan;?>"><?php 
									    	if($bulan=='01'){
									    		echo "Januari";
									    	}elseif($bulan=='02'){
									    		echo "Februari";
									    	}elseif($bulan=='03'){
									    		echo "Maret";
									    	}elseif($bulan=='04'){
									    		echo "April";
									    	}elseif($bulan=='05'){
									    		echo "Mei";
									    	}elseif($bulan=='06'){
									    		echo "Juni";
									    	}elseif($bulan=='07'){
									    		echo "Juli";
									    	}elseif($bulan=='08'){
									    		echo "Agustus";
									    	}elseif($bulan=='09'){
									    		echo "September";
									    	}elseif($bulan=='10'){
									    		echo "Oktober";
									    	}elseif($bulan=='11'){
									    		echo "November";
									    	}elseif($bulan=='12'){
									    		echo "Desember";	
									    	 }?></option>
									    	
									    	<?php }else{ ?>
									   
									    	<?php foreach ($data_combo as $key) {
									    		
									    	?>

									    	<option value="<?php echo substr($key['tgl_kontrak'], 5,2)?>"><?php 
									    	if(substr($key['tgl_kontrak'], 5,2)=='01'){
									    		echo "Januari";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='02'){
									    		echo "Februari";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='03'){
									    		echo "Maret";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='04'){
									    		echo "April";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='05'){
									    		echo "Mei";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='06'){
									    		echo "Juni";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='07'){
									    		echo "Juli";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='08'){
									    		echo "Agustus";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='09'){
									    		echo "September";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='10'){
									    		echo "Oktober";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='11'){
									    		echo "November";
									    	}elseif(substr($key['tgl_kontrak'], 5,2)=='12'){
									    		echo "Desember";	
									    	 }?></option>
									    	
									    	<?php } }?>
									    </select>
									  </div>
									  <button type="submit" class="btn btn-primary">Cari</button>

									</form>

                            	</div>
                            	<?php if(!empty($hadir)){ ?>
                                <div class="panel-body">
                                <?php }else{ ?>
                                <div class="panel-body hidden">
                                <?php } ?>
                                    <div class="row">
                                    	<div class="col-md-4 col-md-offset-4">
                                    		<h1><center><b>DAFTAR HADIR</b></center></h1>
                                    	</div>
                                    	<div class="col-md-3 text-right">
                                            <h1>&nbsp;</h1>
                                            <a href="<?php echo base_url('cetak/export') ?>" class="btn btn-default"><i class="fa fa-print"></i> Cetak</a>
                                        </div>
                                    	&nbsp;
                                    	<?php foreach ($data as $value) { ?>
                                    	<div class="row">
	                                        
	                                        <div class="col-sm-1 col-sm-offset-2">
	                                            <h6>SATKER</h6>
	                                        </div>
	                                        <div class="col-md-6">
	                                        	<h6>: <?php
	                                        	if($value['id_satker']=='1'){
	                                        		echo 'SATUAN KERJA PERENCANAAN DAN PENGAWASAN JALAN NASIONAL';
	                                        		}else{
	                                        			echo 'PPK P2JN METRO SEMARANG';
	                                        			} ?></h6>
	                                        </div>
	                                    </div>
                                        <div class="row">
	                                        
	                                        <div class="col-sm-1 col-sm-offset-2">
	                                            <h6>PPK</h6>
	                                        </div>
	                                        <div class="col-md-6">
	                                        	<h6>: <?php echo $value['ppkpjn']; ?></h6>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        
	                                        <div class="col-sm-1 col-sm-offset-2">
	                                            <h6>KONSULTAN</h6>
	                                        </div>
	                                        <div class="col-md-6">
	                                        	<h6>: <?php echo $value['nama_konsultan']; ?></h6>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        
	                                        <div class="col-sm-1 col-sm-offset-2">
	                                            <h6>NO. KONTRAK</h6>
	                                        </div>
	                                        <div class="col-md-6">
	                                        	<h6>: <?php echo $value['no_kontrak']; ?></h6>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        
	                                        <div class="col-sm-1 col-sm-offset-2">
	                                            <h6>TGL. KONTRAK</h6>
	                                        </div>
	                                        <div class="col-md-6">
	                                        	<h6>: <?php echo  substr($value['tgl_kontrak'],9,10)." "; ?> <?php if(substr($value['tgl_kontrak'], 5,2)=='01'){
									    		echo "Januari";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='02'){
									    		echo "Februari";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='03'){
									    		echo "Maret";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='04'){
									    		echo "April";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='05'){
									    		echo "Mei";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='06'){
									    		echo "Juni";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='07'){
									    		echo "Juli";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='08'){
									    		echo "Agustus";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='09'){
									    		echo "September";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='10'){
									    		echo "Oktober";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='11'){
									    		echo "November";
									    	}elseif(substr($value['tgl_kontrak'], 5,2)=='12'){
									    		echo "Desember"; }?><?php echo " ".substr($value['tgl_kontrak'],0,4); ?></h6>
	                                        </div>
	                                    </div>
	                                    <?php } ?>
	                                    <div class="col-md-12">
                                    		<h5><center>PAKET 02 – PENGAWASAN TEKNIS JALAN DAN JEMBATAN </center></h5>
                                    	</div>
                                    	<div class="col-md-12">
                                    		<h5 style="color: red;"><center>BATAS JABAR - TEGAL - SLAWI (OPTIONAL)</center></h5>
                                    	</div>
                                    	<div class="row">
	                                    	<div class="col-md-5 col-sm-offset-9">
	                                    		Periode : 1   s/d  31 Bulan Maret 2017
	                                    	</div>
	                                    </div>
	                                    <br/>
                                        <div class="col-md-12">
                                        	<div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                    	
														
														
                                                        <th rowspan="2" style="width: 5%;">No</th>
                                                        <th rowspan="2" style="width: 10%;">Nama</th>
                                                        <th rowspan="2" style="width: 10%">Jabatan</th>
                                                        <th colspan="30"><center>Tanggal</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 1%;">1</th>
                                                        <th style="width: 1%;">2</th>
                                                        <th style="width: 1%;">3</th>
                                                       	<th style="width: 1%;">4</th>
                                                        <th style="width: 1%;">5</th>
                                                        <th style="width: 1%;">6</th>
                                                        <th style="width: 1%;">7</th>
                                                        <th style="width: 1%;">8</th>
                                                        <th style="width: 1%;">9</th>
                                                        <th style="width: 1%;">10</th>
                                                        <th style="width: 1%;">11</th>
                                                        <th style="width: 1%;">12</th>
                                                        <th style="width: 1%;">13</th>
                                                        <th style="width: 1%;">14</th>
                                                        <th style="width: 1%;">15</th>
                                                        <th style="width: 1%;">16</th>
                                                        <th style="width: 1%;">17</th>
                                                        <th style="width: 1%;">18</th>
                                                        <th style="width: 1%;">19</th>
                                                        <th style="width: 1%;">20</th>
                                                        <th style="width: 1%;">21</th>
                                                        <th style="width: 1%;">22</th>
                                                        <th style="width: 1%;">23</th>
                                                        <th style="width: 1%;">24</th>
                                                        <th style="width: 1%;">25</th>
                                                        <th style="width: 1%;">26</th>
                                                        <th style="width: 1%;">27</th>
                                                        <th style="width: 1%;">28</th>
                                                        <th style="width: 1%;">29</th>
                                                        <th style="width: 1%;">30</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="33"><b>I. Tenaga Ahli</b></td>
                                                        
                                                    </tr>
                                                    <?php 
                                                    $no = 1;
                                                    if($data !=''){
                                                    foreach ($data as $value) {
                                                    	if($value['kategori_tenaga']='1'){
                                                   ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $value['username']; ?></td>
                                                        <td><?php echo $value['jabatan']; ?></td>
                                                       
                                                       <?php foreach ($hadir as $key) {
                                                       ?>
                                                        <td><?php echo 'H'; ?></td>
                                                       <?php } ?>	
                                                    </tr>
                                                <?php 
                                                $no++;
                                                } } }?>
                                                   
                                                    <tr>
                                                        <td colspan="33"><b>II. Tenaga Pendukung</b></td>
                                                        
                                                    </tr>
                                                    <?php 
                                                    $no = 1;
                                                    if($data!=''){
                                                    foreach ($data as $value) {
                                                    	if($value['kategori_tenaga']='2'){
                                                   ?>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><?php echo $value['namatenaga'] ?></td>
                                                        <td><?php echo $value['jabatan'] ?></td>
                                                        <?php foreach ($hadir as $key) {
                                                       ?>
                                                        <td><?php echo 'H'; ?></td>
                                                       <?php } ?>	
                                                    </tr>
                                                    <?php 
                                                    $no++;
                                                    } }}?>
                                                    
                                                    
                                                </tbody>
                                            </table>


                                            </div>
                                            <br/>
                                             <div class="col-md-2">
                                            	Keterangan :<br/>
                                            	<table>
                                            	<tr>
                                            		<td>L</td><td>&nbsp;:</td><td>&nbsp;Libur</td>
                                            	</tr>
                                            	<tr>
                                            		<td>DL</td><td>&nbsp;:</td><td>&nbsp;Dinas Luar</td>
                                            	</tr>
                                            	<tr>
                                            		<td>A</td><td>&nbsp;:</td><td>&nbsp;Absen/Tidak Hadir</td>
                                            	</tr>
                                            	<tr>
                                            		<td>S</td><td>&nbsp;:</td><td>&nbsp;Sakit</td>
                                            	</tr>
                                            	<tr>
                                            		<td>C</td><td>&nbsp;:</td><td>&nbsp;Cuti</td>
                                            	</tr>
                                            	</table>
                                            </div>
                                            <div class="col-md-4">
                                            <table>	
                                            	<tr>
                                            		<td><center>SATUAN KERJA PERENCANAAN DAN PENGAWASAN</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>JALAN NASIONAL PROVINSI JAWA TENGAH</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>PPK PERENCANAAN DAN PENGAWASAN</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>JALAN NASIONAL PROVINSI JAWA TENGAH</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td>&nbsp;</td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>Ir. AGUNG HARI PRABOWO, MT</center></td>
                                            		
                                            	</tr>
                                            	<tr>
                                            		<td><center>NIP................................................</center></td>
                                            		
                                            	</tr>
                                            </table>
                                            </div>
                                            <div class="col-md-3">
                                            <table>	
                                            	<tr>
                                            		<td><center>PEJABAT PEMBUAT KOMITMEN							</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>...............................</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>&nbsp;</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>&nbsp;</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td>&nbsp;</td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>(NAMA PPK FISIK)</center></td>
                                            		
                                            	</tr>
                                            	<tr>
                                            		<td><center>NIP................................................</center></td>
                                            		
                                            	</tr>
                                            </table>
                                            </div>
                                            <div class="col-md-3">
                                            <table>	
                                            	<tr>
                                            		<td><center>KONSULTAN PENGAWASAN</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>PT...............................(KSO)</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>PT........................</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>&nbsp;</center></td>
                                            	</tr>
                                            	<tr>
                                            		<td>&nbsp;</td>
                                            	</tr>
                                            	<tr>
                                            		<td><center>(NAMA SITE ENGINEER)</center></td>
                                            		
                                            	</tr>
                                            	<tr>
                                            		<td><center>Site Engineer</center></td>
                                            		
                                            	</tr>
                                            </table>
                                            </div>
                                        </div>
                                       
                                        
                                    </div><!--row-->
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->