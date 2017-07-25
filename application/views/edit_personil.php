                <div class="page-inner">
                <div class="page-title">
                    <h3>Edit Personil</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Dahsboard</a></li>
                            <li class="active"><a href="">Edit Personil</a></li>
                        </ol>
                    </div>
                </div>

                <div id="main-wrapper">
                    <div class="col-md-12">
                            <div class="panel panel-white">
                                
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="<?php echo site_url('updatedata');?>" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">INPUT DATA </h4>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">SATKER / PPK P2JN </label>
                                            <div class="col-sm-5">
                                                <select class="form-control m-b-sm" name="id_satker">
                                                    <option value="">-------</option>
                                                    <option value="1" <?php if($data[0]['id_satker'] == '1')  {
                                                      echo "selected"; } ?>>SATUAN KERJA PERENCANAAN DAN PENGAWASAN JALAN NASIONAL</option>
                                                    <option value="2" <?php if($data[0]['id_satker'] == '2')  {
                                                      echo "selected"; } ?> >PPK P2JN METRO SEMARANG</option>
                                                </select>
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kategori Tenaga </label>
                                            <div class="col-sm-5">
                                                <select class="form-control m-b-sm" name="kategori_tenaga">
                                                    <option value="">-------</option>
                                                    <option <?php if($data[0]['kategori_tenaga'] == '1')  {
                                                      echo "selected"; } ?> value="1">Tenaga Ahli</option>
                                                    <option <?php if($data[0]['kategori_tenaga'] == '2')  {
                                                      echo "selected"; } ?> value="2">Tenaga Pendukung</option>
                                                </select>
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Kepala Satker </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['kepala_satker']?>" class="form-control" id="input-Default" name="kepala_satker">
                                                </div>
                                                <label for="input-Default" class="col-sm-1 control-label">NIP </label>
                                                <div class="col-sm-4">
                                                    <input type="text" value="<?php echo $data[0]['nip_satker']?>" class="form-control" id="input-Default" name="nip_satker">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Tahun Anggaran </label>
                                                <div class="col-sm-2">
                                                    <input type="text" value="<?php echo $data[0]['tahun_anggaran']?>" class="form-control" id="input-Default" name="tahun_anggaran">
                                                </div>
                                        </div>
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">KONSULTAN SUPERVISI </h4>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">No Kontrak </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['no_kontrak']?>" name="no_kontrak" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                    <label class="col-sm-2 control-label">Tanggal Kontrak</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" value="<?php echo $data[0]['tgl_kontrak']?>" name="tgl_kontrak" class="form-control date-picker">
                                                    </div>
                                        </div>
                                         <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Nama Paket</label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['nama_paket']?>" name="nama_paket" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                         <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">PPK PJN </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['ppkpjn']?>" name="ppkpjn" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                         <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Nama PPKPJN </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['nama_ppkpjn']?>" name="nama_ppkpjn" class="form-control" id="input-Default" >
                                                </div>
                                                <label for="input-Default" class="col-sm-1 control-label">NIP </label>
                                                <div class="col-sm-4">
                                                    <input type="text" value="<?php echo $data[0]['nip_konsultan']?>" name="nip_konsultan" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Nama Konsultan </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['nama_konsultan']?>" name="nama_konsultan" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-5">
                                                <textarea name="alamat" class="form-control" ><?php echo $data[0]['alamat']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">No Telepon </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['tlp_konsultan']?>" name="tlp_konsultan" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">PERSONIL </h4>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Nama </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['namatenaga']?>" name="namatenaga" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kategori Tenaga </label>
                                            <div class="col-sm-5">
                                                <select class="form-control m-b-sm" name="kategori_tenaga">
                                                    <option value="">-------</option>
                                                    <option value="1">Tenaga Ahli</option>
                                                    <option value="2">Tenaga Pendukung</option>
                                                </select>
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Username </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['username']?>" name="username" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Password </label>
                                                <div class="col-sm-5">
                                                    <input type="password" name="password" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jabatan </label>
                                            <div class="col-sm-5">
                                                <select class="form-control m-b-sm" name="id_jabatan">
                                                     <?php
                                                      foreach ($jabatan as $jab) {
                                                        ?>
                                                      <option value="<?php echo $jab['id_jabatan'] ?>" <?php if($jab['id_jabatan'] == $data[0]['id_jabatan']){ echo "selected"; }  ?> ><?php echo $jab['jabatan'] ?></option>
                                                      <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">No Telepon </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['tlp']?>" name="tlp_personil" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                    <label class="col-sm-2 control-label">Tanggal Mobilisasi</label>
                                                    <div class="col-sm-5">
                                                        <div class="input-group input-append date" id="datePicker2">
                                                            <input type="text" value="<?php echo $data[0]['tgl_mobilisasi']?>" class="form-control" name="tgl_mobilisasi" />
                                                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="form-group">
                                                    <label class="col-sm-2 control-label">Tanggal Demobilisasi</label>
                                                    <div class="col-sm-5">
                                                        <div class="input-group input-append date" id="datePicker3">
                                                            <input type="text" value="<?php echo $data[0]['tgl_demobilisasi']?>" class="form-control" name="tgl_demobilisasi" />
                                                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">CAKUPAN LOKASI </h4>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Latitude </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['latitude']?>"  name="latitude" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Longitude </label>
                                                <div class="col-sm-5">
                                                    <input type="text" value="<?php echo $data[0]['longitude']?>"name="longitude" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                       <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label"></label>
                                            <div class="col-md-2">
                                                <img src="<?php echo $data[0]['fotokelas'];?>" id="image" style="cursor: pointer; cursor: hand; " name="image" width="130" height="200" alt="noPicture" onclick="window.open(this.src)">
                                            </div>
                                       </div>
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label"> Foto</label>
                                            <div class="col-sm-5">
                                            <input type="file" class="form-control" id="pic" name="pic" accept="image/jpg, image/JPG,image/JPEG, image/jpeg" onchange="Changes(this)">
                                            </div>
                                        </div>
                                        <div id="content" class="text-center col-md-12 col-md-offset-12;">
                                         <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <input type="submit" name="submit" value="Simpan" id="submit" class="btn btn-success submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
                