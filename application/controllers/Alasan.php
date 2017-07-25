<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Alasan extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
$alasan = array(
			'username' => $_POST['username'],
			'tanggal' => $_POST['tanggal'],
			'foto' => $_POST['foto'],
			'keterangan' => $_POST['alasan']
			);
$aku=$this->dauo->input_data($alasan,'eventpeg');
if($aku=="sukses"){
echo "saved";	
}else{
	echo "gagal";
}

		}
}