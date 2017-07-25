            <div class="page-inner">
                <div class="page-title">
                    <h3>Data Personil</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Dahsboard</a></li>
                            <li class="active"><a href="">Data Personil</a></li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Data Personil</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                  <th>No</th>
                                                  <th>Nama Paket</th>
                                                 <th>Konsultan</th>
                                                  <th>Nama Personil</th>
                                                  <th>Jabatan</th>
                                                  <th>No Telp</th>
                                                  <th>Tgl/Bln/Tahun</th>
                                                  <th>Jam Datang</th>
                                                  <th>Latitude</th>
                                                  <th>Longitude</th>
                                                  <th>Jam Pulang</th>
                                                  <th>Latitude</th>
                                                  <th>Longitude</th>
                                                  <th>Durasi</th>
                                                  <th>Keterangan Kegiatan</th>
                                                  <th>Keterangan Tidak Masuk Kerja</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php $username='';$tanggal='';
                                                 $a = 1;
                                                 foreach ($data as $datanya) {?>
                                                <tr>
                                                <td><?php echo $a;?></td>
                                                <td><?php echo $datanya['nama_paket'];?></td>
                                                <td><?php echo $datanya['nama_konsultan'];?></td>
                                               <td><?php echo $datanya['namatenaga'];?></td>
                                               <td><?php echo $datanya['jabatan'];?></td>
                                               <td><?php echo $datanya['tgl_kontrak'];?></td>
                                               <td><?php echo $datanya['jammasuk'];?></td>
                                               <td><?php echo $datanya['latitude'];?></td>
                                               <td><?php echo $datanya['longitude'];?></td>
                                               <td><?php echo $datanya['tlp'];?></td>
                                               <td><?php echo $datanya['latitude'];?></td>
                                               <td><?php echo $datanya['longitude'];?></td>
                                               <td><?php echo $datanya['tlp'];?></td>
                                               <td><?php echo $datanya['keterangan'];?></td>
                                               <td><?php echo $datanya['tlp'];?></td>
                                               <td><?php echo $datanya['tlp'];?></td>
                                                </tr>
                                                <?php $a++; } ?>
                                        </tbody>
                                       </table>  
                                    </div>
                                     <div class="container">
                                      <div class="form-group">
                                        <br/>
                                        <a href="<?php echo base_url('manual/export'); ?>" class="btn btn-primary">Cetak</a>
                                      </div>
                                     </div>
                                </div>
                            </div>
                          
                           
                            
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
       