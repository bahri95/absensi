<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
  $namenya=$this->session->userdata('name');


?><!DOCTYPE html>
<html lang="en">
<head>

<link rel="icon"  href="<?php echo base_url();?>image/logo.png" />
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Data Kelas</title>
  <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <link rel="stylesheet"
    href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css?n=1" />
    <script src="http://code.jquery.com/jquery-1.12.4.js?n=1"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js?n=1"></script>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?n=1" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js?n=1"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/tinymce/tinymce.min.js"></script>
</head>
<body style="background-image: url('<?php echo base_url();?>image/back.jpg');
   background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;font-family: 'El Messiri', sans-serif;color:#94b7ef">
       <div class="navbar navbar-inverse  navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="glyphicon glyphicon-th-list"></span>
            </a>
        </div>
        <div class="container" >



            <nav class="navbar-collapse collapse " style="line-height:40px; height:40px;">
                <ul class="nav navbar-nav" style="display:inline-block;">
                <li>
                 <a href="<?php echo site_url('welcome');?>">
                     <img src="<?php echo base_url();?>image/logo.png" height="80" width="80" class="logo img-responsive" style="margin-top:-10px">
                 </a>
                 </li>
                 <li class="active" style="margin-top:20px;font-family: 'El Messiri', sans-serif;"><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="dropdown" style="margin-top:20px;font-family: 'El Messiri', sans-serif;">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tambah atau Edit Personil<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('Tambah');?>">Tambah Personil</a></li>
                        <li><a href="<?php echo site_url('Preupdating');?>">Edit Personil</a></li>
                      </ul>
                    </li>
             <li style="margin-top:20px;font-family: 'El Messiri', sans-serif;">
                <a href="<?php echo site_url('gerak');?>">Lokasi</a>

              </li>
               <li style="margin-top:20px;font-family: 'El Messiri', sans-serif;">
                <a href="<?php echo site_url('rekap');?>">Rekap</a>
              </li>
               <li style="margin-top:20px;font-family: 'El Messiri', sans-serif;">
                <a href="<?php echo site_url('rekap');?>">Cetak</a>
              </li>
                </ul>
                <ul>
                 <div class="navbar-header pull-right">
                <h5 style="color:white;font-family: 'El Messiri', sans-serif;">hello <?php echo $namenya;?></h5>
                 <a href="<?php echo site_url('Logout');?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
              </div>
                </ul>
            </nav>
        </div>
    </div>

<div class="container" style="margin-top:120px;margin-bottom:60px;font-family: 'El Messiri', sans-serif;">
  <form method="POST" action="<?php echo site_url('updatedata');?>" enctype="multipart/form-data">
  	<div id="content" class="text-center col-md-12 col-md-offset-12;">
  	<h1>Silahkan Input Data Personil</h1>
    <hr>
      </div>
      <label><h3><b>SATKER / PPK P2JN :</b></h3></label><br>
      <input hidden="hidden" type="text" name="id" value="<?php echo $data[0]['id']?>">
      <select name="id_satker" class="col-md-6">
          <option value="">-------</option>
          <option value="1" <?php if($data[0]['id_satker'] == '1')  {
            echo "selected"; } ?>>SATUAN KERJA PERENCANAAN DAN PENGAWASAN JALAN NASIONAL</option>
          <option value="2" <?php if($data[0]['id_satker'] == '2')  {
            echo "selected"; } ?> >PPK P2JN METRO SEMARANG</option>
      </select>
    <br><br>
      <label>Kepala Satker :</label><br>
            <input type="text" value="<?php echo $data[0]['kepala_satker']?>" class="col-md-6" placeholder="Kepala Satker" id="kepala_satker" name="kepala_satker"  required="" autofocus />
            <span class="col-md-1">NIP :</span><input type="text" value="<?php echo $data[0]['nip_satker']?>" class="col-md-5" placeholder="NIP" name="nip_satker"  required="" autofocus />
      <br><br>
       <label>Tahun Anggaran : </label><br>
      <input type="text" value="<?php echo $data[0]['tahun_anggaran']?>" class="col-md-6"placeholder="Tahun Anggaran" id="tahun_anggaran" name="tahun_anggaran"  required="" autofocus />
      <br><br>
      <label><h3><b>KONSULTAN SUPERVISI  : </b></h3></label><br>
    <label>Nomor Kontrak : </label><br>
    <input type="text" value="<?php echo $data[0]['no_kontrak']?>" class="col-md-6" placeholder="Input Nomer Kontrak" id="no_kontrak" name="no_kontrak"  required="" autofocus />
    <br><br>
    <label>Tanggal Kontrak : </label><br>
    <input type="date" value="<?php echo $data[0]['tgl_kontrak']?>" class="col-md-3" placeholder="Input Tanggal Kontrak" id="tgl_kontrak" name="tgl_kontrak"  required="" autofocus />
    <br><br>
    <label>Nama Paket : </label><br>
    <input type="text" value="<?php echo $data[0]['nama_paket']?>" class="col-md-6" placeholder="Pengawas" id="nama_paket" name="nama_paket"  required="" autofocus />
    <br><br>
    <label>PPK PJN : </label><br>
    <input type="text" value="<?php echo $data[0]['ppkpjn']?>" class="col-md-6"placeholder="jakarta" id="ppkpjn" name="ppkpjn"  required="" autofocus />
    <br><br>
      <label>Nama PPK PJN : </label><br>
    <input type="text" value="<?php echo $data[0]['nama_ppkpjn']?>" class="col-md-6"placeholder="Input PPK PJN" id="nama_ppkpjn" name="nama_ppkpjn"  required="" autofocus />
    <span class="col-md-1">NIP :</span><input type="text" value="<?php echo $data[0]['nip_konsultan']?>" class="col-md-5" placeholder="NIP" name="nip_konsultan"  required="" autofocus />
    <br><br>

     <label>Nama Konsultan: </label><br>
    <input type="text" value="<?php echo $data[0]['nama_konsultan']?>" class="col-md-6"placeholder="Nama Konsultan" id="nama_konsultan" name="nama_konsultan"  required="" autofocus />
    <br><br>
    <label>Alamat : </label><br>
    <textarea name="alamat" rows="3" cols="78">
      <?php echo $data[0]['alamat']?>
    </textarea>
    <br><br>
   <label>Telepon : </label><br>
  <input type="text" value="<?php echo $data[0]['tlp_konsultan']?>" class="col-md-6"placeholder="Telepon" id="tlp_konsultan" name="tlp_konsultan"  required="" autofocus />
  <br><br>




    <label><h3><b>Personil : </b></h3></label><br>
     <label>Nama : </label><br>
    <input type="text" value="<?php echo $data[0]['namatenaga']?>" class="col-md-6"placeholder="Nama" id="namatenaga" name="namatenaga"  required="" autofocus />
    <br><br>

    <label>Rekanan : </label><br>
   <input type="text" value="<?php echo $data[0]['rekanan']?>" class="col-md-6" placeholder="Rekanan" id="rekanan" name="rekanan"  required="" autofocus />
   <br><br>

   <label>Keterangan : </label><br>
   <textarea name="keterangan" rows="8" cols="78">
     <?php echo $data[0]['keterangan']?>
   </textarea>
  <br><br>
  <label>Jabatan :</label><br>
  <select name="id_jabatan" class="col-md-3">
      <?php
      foreach ($jabatan as $jab) {
        ?>
      <option value="<?php echo $jab['id_jabatan'] ?>" <?php if($jab['id_jabatan'] == $data[0]['id_jabatan']){ echo "selected"; }  ?> ><?php echo $jab['jabatan'] ?></option>
      <?php } ?>
  </select>
  <br><br>
     <label>No. Telp : </label><br>
    <input type="text" value="<?php echo $data[0]['tlp']?>" class="col-md-6"placeholder="08xx-xxxx-xxx" id="tlp_personil" name="tlp_personil"  required="" autofocus />
    <br><br>
     <label>Tgl. Mobilisasi : </label><br>
    <input type="date" value="<?php echo $data[0]['tgl_mobilisasi']?>" class="col-md-6"placeholder="17/06/2017" id="tgl_mobilisasi" name="tgl_mobilisasi"  required="" autofocus />
    <br><br>
     <label>Tgl Demobilisasi : </label><br>
    <input type="date" value="<?php echo $data[0]['tgl_demobilisasi']?>" class="col-md-6"placeholder="17/06/2017" id="tgl_demobilisasi" name="tgl_demobilisasi"  required="" autofocus />
    <br><br>
    <label><h4><b>Cakupan Lokasi </b></h4></label><br>
    <label>Latitude Lokasi proyek </label><br>
    <input type="text" value="<?php echo $data[0]['latitude']?>" class="col-md-6"placeholder="-7.058205" id="latitude" name="latitude"  required="" autofocus />
    <br><br>
    <label>Longitude Lokasi proyek: </label><br>
    <input type="text" value="<?php echo $data[0]['longitude']?>" class="col-md-6"placeholder="110.417894" id="longitude" name="longitude"  required="" autofocus />
    <br><br>
	 <div id="picture">

                         <label for="file">Upload Foto Personil</label><br>
                         <img src="<?php echo $data[0]['fotokelas'];?>" id="image" style="cursor: pointer; cursor: hand; " name="image" width="130" height="200" alt="noPicture" onclick="window.open(this.src)"><br>

                         <input type="file" id="pic" name="pic" accept="image/jpg, image/JPG,image/JPEG, image/jpeg" value="" onchange="Changes(this)">


     </div>
     <br>
     <div id="content" class="text-center col-md-12 col-md-offset-12;">.
     <hr>
		<input type="submit" name="submit" class="submit" id="submit">
		</div>
		</form>
<footer class="navbar-fixed-bottom" style="text-align:center;background-color:black;color:red;">
	<p ></p>
</footer>
</div>
</body>
</html>

<script type="text/javascript">
	tinymce.init({
             selector: 'textarea#keterangan',
                 plugins: "link emoticons textcolor colorpicker",
              menubar: "insert cut copy paste selectall",
              link_context_toolbar: true,
                    toolbar:['forecolor backcolor | emoticons | cut copy paste selectall | format ',
              'link advlist autolink  undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code']

            });

	function Changes(input) {
  var fileName = document.getElementById("pic").value
        if (fileName == "") {
            alert("Browse to upload a valid File with Image extension");
            return false;
        }

          else if (fileName.split(".")[1].toUpperCase() == "JPG"){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {

                    $('#image')
                        .attr('src', e.target.result);

                };

                reader.readAsDataURL(input.files[0]);

            }
            return true;
          }
   else if (fileName.split(".")[1].toUpperCase() == "PNG"){
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                 var namagbr=document.getElementById("pic").value;
                    $('#image')
                        .attr('src', e.target.result);

                };


                reader.readAsDataURL(input.files[0]);


            }
            return true;
          }

          else if (fileName.split(".")[1].toUpperCase() == "JPEG"){
            if (input.files && input.files[0]) {
                var reader = new FileReader();

               reader.onload = function (e) {
                 var namagbr=document.getElementById("pic").value;
                    $('#image')
                        .attr('src', e.target.result);


                };


                reader.readAsDataURL(input.files[0]);


            }
            return true;
          }

        else {
            alert("File with " + fileName.split(".")[1] + " is invalid. Upload a validfile with Image extensions");
            document.getElementById("pic").value="";
            return false;
        }
        return true;



        }
</script>
