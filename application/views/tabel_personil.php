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
                                                <th>foto</th>
                                                <th>Nama</th>
                                                <th>No Kontrak</th>
                                                <th>Telpon</th>
                                                <th>Jabatan</th>
                                                
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>foto</th>
                                                <th>Nama</th>
                                                <th>No Kontrak</th>
                                                <th>Telpon</th>
                                                <th>Jabatan</th>
                                                
                                                <th></th>
                                               
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         <?php 
                                         $no = 1;
                                         foreach ($data as $datanya) {?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><img src="<?php echo $datanya['fotokelas'];?>" style="width:104px;height:80px;"></td>
                                                <td><?php echo $datanya['namatenaga'];?></td>
                                                <td><?php echo $datanya['no_kontrak'];?></td>
                                                <td><?php echo $datanya['tlp'];?></td>
                                                <td><?php echo $datanya['jabatan'];?></td>
                                                
                                                <td><form action = "<?php echo site_url('hapus');?>" method = "POST">
                                                 <input type="text" value="<?php echo $datanya['id'];?>" name="id" hidden/>
                                                 <input type = "submit" name = "hapus"  value = "Hapus" id="hapus" class = "btn btn-danger" >
                                                </form>
                                                <a class="btn btn-primary" href="<?php echo base_url('update'.'/edit/'.$datanya['id']); ?>"> Edit </a>
                                                </td>
                                             
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                          
                           
                            
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
       