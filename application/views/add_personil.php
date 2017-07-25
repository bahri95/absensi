                <div class="page-inner">
                <div class="page-title">
                    <h3>Tambah Personil</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Dahsboard</a></li>
                            <li class="active"><a href="">Tambah Personil</a></li>
                        </ol>
                    </div>
                </div>

                <div id="main-wrapper">
                    <div class="col-md-12">
                            <div class="panel panel-white">
                                
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="<?php echo site_url('upload');?>" enctype="multipart/form-data">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">INPUT DATA </h4>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">SATKER / PPK P2JN </label>
                                            <div class="col-sm-5">
                                                <select class="form-control m-b-sm" name="id_satker">
                                                    <option value="">-------</option>
                                                    <option value="1">SATUAN KERJA PERENCANAAN DAN PENGAWASAN JALAN NASIONAL</option>
                                                    <option value="2">PPK P2JN METRO SEMARANG</option>
                                                </select>
                                               
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Kepala Satker </label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input-Default" name="kepala_satker">
                                                </div>
                                                <label for="input-Default" class="col-sm-1 control-label">NIP </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="input-Default" name="nip_satker">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Tahun Anggaran </label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="input-Default" name="tahun_anggaran">
                                                </div>
                                        </div>
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">KONSULTAN SUPERVISI </h4>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">No Kontrak </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="no_kontrak" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Tanggal Kontrak</label>
                                            <div class="col-sm-5 date">
                                                <div class="input-group input-append date" id="datePicker">
                                                    <input type="text" class="form-control" name="tgl_kontrak" />
                                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Nama Paket</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="nama_paket" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                         <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">PPK PJN </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="ppkpjn" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                         <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Nama PPKPJN </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="nama_ppkpjn" class="form-control" id="input-Default" >
                                                </div>
                                                <label for="input-Default" class="col-sm-1 control-label">NIP </label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="nip_konsultan" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Nama Konsultan </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="nama_konsultan" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-5">
                                                <textarea name="alamat" class="form-control" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">No Telepon </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="tlp_konsultan" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">PERSONIL </h4>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Nama </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="namatenaga" class="form-control" id="input-Default" >
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
                                                    <input type="text" name="username" class="form-control" id="input-Default" >
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
                                                      <option value="<?php echo $jab['id_jabatan'] ?>"><?php echo $jab['jabatan'] ?></option>
                                                      <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">No Telepon </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="tlp_personil" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                    <label class="col-sm-2 control-label">Tanggal Mobilisasi</label>
                                                    <div class="col-sm-5">
                                                        <div class="input-group input-append date" id="datePicker2">
                                                            <input type="text" class="form-control" name="tgl_mobilisasi" />
                                                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="form-group">
                                                    <label class="col-sm-2 control-label">Tanggal Demobilisasi</label>
                                                    <div class="col-sm-5">
                                                        <div class="input-group input-append date" id="datePicker3">
                                                            <input type="text" class="form-control" name="tgl_demobilisasi" />
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
                                                    <input type="text" name="latitude" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-Default" class="col-sm-2 control-label">Longitude </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="longitude" class="form-control" id="input-Default" >
                                                </div>
                                        </div>
                                        <div id="picture" class="form-group">

                                            <label for="input-Default" class="col-sm-2 control-label">Foto </label>
                                            <div class="col-sm-2">
                                            <img src="#" id="image" style="cursor: pointer; cursor: hand; " name="image" width="150" height="200" alt="noPicture" onclick="window.open(this.src)"><br>
                                            </div>
                                             
                                        </div>
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label"> </label>
                                            <div class="col-sm-5">
                                            <input type="file" class="form-control" id="pic" name="pic" accept="image/jpg, image/JPG,image/JPEG, image/jpeg" value="" onchange="Changes(this)">
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
                
                