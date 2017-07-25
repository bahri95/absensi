<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
  $namenya=$this->session->userdata('name');
  echo "<script> var lati=[];var longi=[];var a=0;var jam=[];var besar=0;</script>";
foreach ($pergerakan as $gerak) {
 echo '<script>    
     jam[a]="'.$gerak['jam'].'";lati[a]='.$gerak['latitude'].';longi[a]='.$gerak['longitude'].';a++;</script>';
}
echo "<script>besar=lati.length;</script>";

?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon"  href="<?php echo base_url();?>image/logo.png" />
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">

	<title>Pergerakan</title>
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
<body> 
   <div class="navbar navbar-inverse  navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="glyphicon glyphicon-th-list"></span>
            </a>
        </div>
        <div class="container" style="font-family: 'El Messiri', sans-serif;" >
            

            
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
              <li class="dropdown" style="margin-top:20px;font-family: 'El Messiri', sans-serif;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Presensi<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('manual');?>">Manual</a></li>
                  <li><a href="<?php echo site_url('online');?>">Online</a></li>          
                </ul>
              </li>
              <li style="margin-top:20px;font-family: 'El Messiri', sans-serif;">
                <a href="<?php echo site_url('gerak');?>">Lokasi </a>
              </li>
               <li style="margin-top:20px;font-family: 'El Messiri', sans-serif;">
                <a href="<?php echo site_url('rekap');?>">Rekap </a>
              </li>
              <li style="margin-top:20px;font-family: 'El Messiri', sans-serif;">
                <a href="<?php echo site_url('rekap');?>">Cetak </a>
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
 <body style="background-image: url('<?php echo base_url();?>image/back.jpg');
   background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;font-family: 'El Messiri', sans-serif;">
<div class="container-fluid"  style="margin-top:122px;max-width:60%;opacity:0.8;">
<h1 style="text-align:center">Berikut Lokasi Pergerakan Pegawai</h1>
<hr>

 <div style="height:100%; width:100%;">
         <div id="map" style="height:100%; width:100%;"></div>
    </div>
   <hr>
  <footer class="navbar-fixed-bottom" style="text-align:center;background-color:black;color:red;">
	<p >(C)2017 Satker P2JN Jateng</p>
</footer>
</div>
</body>
</html>
<script type="text/javascript">
var marker; var triangleCoords;
if(besar==0){
  alert('tidak ada data');
}
function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lati[0], lng: longi[0]},
          zoom: 14
        });
     for (var i = 0; i < besar; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(lati[i], longi[i]),
        map: map,
        title: jam[i]
      });
      



      }
    }
    </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0zWo35-Jw0joh7Om9GzxQvI9hvkP_csg&callback=initMap&libraries=places"
        async defer></script>
