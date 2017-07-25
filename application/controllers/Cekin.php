<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cekin extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
	
		$Durations = array(
			'username' => $_POST['username'],
			'latitude' => $_POST['latitude'],
			'longitude' => $_POST['longitude'],
			'tanggal' => $_POST['tanggal'],
			'jam' => $_POST['jam'],
			'foto' => $_POST['foto']
			);
$this->dauo->input_data($Durations,'cekin');
/*$jamnya=$this->dauo->getjam($_POST['username']);
$dua=strtotime($jamnya);	
$satu=(strtotime($_POST['jam']));
$total      = $dua - $satu;
$tggal=date("d-M-Y");
$hours= floor($total / 60 / 60);*/
/*if($hours<0){
	$dateing = array(
			'username' => $_POST['username'],
			'status' =>  $tggal." anda telat : ".$hours." Jam"
			);

$this->dauo->input_data($dateing,'statustelat');

}else{
	$dateing = array(
		'username' => $_POST['username'],
			'status' => "anda Masuk Tepat : ".$hours." Jam"
			);

$this->dauo->input_data($dateing,'statustelat');
	
}*/
echo "Saved";
	}
}