<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cekout extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
	
	$jammasuk=$_POST['jammasuk'];
	$jampulang=$_POST['jampulang'];

	$dua=strtotime($jampulang);	
	$satu=(strtotime($jammasuk));
	$total      = $dua - $satu;
	$tggal=date("d-M-Y");
	$hours= floor($total / 60 / 60);
		$dateing = array(
			'username' => $_POST['username'],
			'status' =>  " Tanggal : ".$tggal." anda Masuk Selama : ".$hours." Jam"
			);

$this->dauo->input_data($dateing,'statustelat');
		$Durations = array(
			'username' => $_POST['username'],
			'latitude' => $_POST['latitude'],
			'longitude' => $_POST['longitude'],
			'tanggal' => $_POST['tanggal'],
			'jam' => $_POST['jam']
			);
			$this->dauo->input_data($Durations,'cekout');
			echo "Saved";
		}
}