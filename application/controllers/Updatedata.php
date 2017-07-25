<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatedata extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');

	}
	public function index()
	{

		if(is_uploaded_file($_FILES['pic']['tmp_name'])){
				 			//echo basename($_FILES['imagi'.$i]["name"]);
				 			$target_dir = "image/";
							$target_file = $target_dir . basename($_FILES['pic']["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

							    $check = getimagesize($_FILES['pic']["tmp_name"]);
							    if($check !== false) {
							       /* echo "File ".basename($_FILES['pic']["name"])." is an image - " . $check["mime"] . "."."<br>";*/
							        $uploadOk = 1;
							    } else {
							        echo "File".basename($_FILES['pic']["name"])." is not an image."."<br>";
							        $uploadOk = 0;
							    }

									if (file_exists($target_file)) {
									    $reason="Sorry, file  ".basename( $_FILES['pic']["name"])." is already exists.";
									    echo '<script> var reason="'.$reason.'";</script>';
									    $uploadOk = 0;

									}

									if ($_FILES['pic']["size"] > 5000000) {
									     $reason="Sorry, your file".basename( $_FILES['pic']["name"])." is too large.";
									      echo '<script> var reason="'.$reason.'";</script>';
									    $uploadOk = 0;
									}

									if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
									&& $imageFileType != "gif" ) {
									    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."."<br>";
									    $uploadOk = 0;
									}
										if ($uploadOk == 0) {
														    echo "Sorry, your file".basename($_FILES['pic']["name"])." was not uploaded.<br><br>";
														       echo "<script>alert(reason+'Data Insertion Failed! Now you will redirect To Main Menu');</script>";
																	echo'<script>  setTimeout(function () {
															       window.location.href = "'.base_url().'"; //will redirect to your blog page (an ex: blog.html)
															    }, 7000); //will call the function after 2 secs.</script>';

													} else {
														    if (move_uploaded_file($_FILES['pic']["tmp_name"], $target_file)) {
														    	
														       $Durations = array(
																				'id_satker' => $_POST['id_satker'],
																				'kepala_satker' => $_POST['kepala_satker'],
																				'tahun_anggaran' => $_POST['tahun_anggaran'],
																				'nip_satker' => $_POST['nip_satker'],
																				'no_kontrak' => $_POST['no_kontrak'],
																				'tgl_kontrak' => $_POST['tgl_kontrak'],
																				'nama_paket' => $_POST['nama_paket'],
																				'ppkpjn' => $_POST['ppkpjn'],
																				'nama_ppkpjn' => $_POST['nama_ppkpjn'],
																				'nip_konsultan' => $_POST['nip_konsultan'],
																				'nama_konsultan' => $_POST['nama_konsultan'],
																				'alamat' => $_POST['alamat'],
																				'tlp_konsultan' => $_POST['tlp_konsultan'],
																				'namatenaga' => $_POST['namatenaga'],
																				'id_jabatan' => $_POST['id_jabatan'],
																				'tlp' => $_POST['tlp_personil'],
																				'tgl_mobilisasi' => $_POST['tgl_mobilisasi'],
																				'tgl_demobilisasi' => $_POST['tgl_demobilisasi'],
																				'latitude' => $_POST['latitude'],
																				'longitude' => $_POST['longitude'],
																				'username' => $_POST['username'],
																				'password' => md5($_POST['password']),
																				'kategori_tenaga' => $_POST['kategori_tenaga'],
																				'fotokelas' => base_url().$target_file);
																				$this->dauo->updatedata($Durations,'datatenaga', $_POST['id']);


																				echo '<script>alert("Data Terupdate")</script>';
																				echo '<script>document.location.href= "'.base_url('Preupdating').'"</script>';
																			} else {
																				echo '<script>alert("Data Gagal Terupdate")</script>';
																				echo '<script>document.location.href= "'.base_url('Preupdating').'"</script>';
																			}
														}
				 		}else{
						
								 $Durations = array(
											'id_satker' => $_POST['id_satker'],
											'kepala_satker' => $_POST['kepala_satker'],
											'tahun_anggaran' => $_POST['tahun_anggaran'],
											'nip_satker' => $_POST['nip_satker'],
											'no_kontrak' => $_POST['no_kontrak'],
											'tgl_kontrak' => $_POST['tgl_kontrak'],
											'nama_paket' => $_POST['nama_paket'],
											'ppkpjn' => $_POST['ppkpjn'],
											'nama_ppkpjn' => $_POST['nama_ppkpjn'],
											'nip_konsultan' => $_POST['nip_konsultan'],
											'nama_konsultan' => $_POST['nama_konsultan'],
											'alamat' => $_POST['alamat'],
											'tlp_konsultan' => $_POST['tlp_konsultan'],
											'namatenaga' => $_POST['namatenaga'],
											'id_jabatan' => $_POST['id_jabatan'],
											'tlp' => $_POST['tlp_personil'],
											'tgl_mobilisasi' => $_POST['tgl_mobilisasi'],
											'tgl_demobilisasi' => $_POST['tgl_demobilisasi'],
											'latitude' => $_POST['latitude'],
											'username' => $_POST['username'],
											'password' => md5($_POST['password']),
											'longitude' => $_POST['longitude']);
											$this->dauo->updatedata($Durations,'datatenaga', $_POST['id']);
											echo'<script>
													 window.location.href = "'.base_url('Preupdating').'";</script>';
				 		}
	}
}
