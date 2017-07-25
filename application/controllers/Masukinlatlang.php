<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Masukinlatlang extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
				$tanggal=$_POST['tgl'];
				$jam=$_POST['jam'];
$this->dauo->updatelat($_POST['username'],$_POST['latitude'],$_POST['longitude']);
$Durations = array(
			'username' => $_POST['username'],
			'latitude' => $_POST['latitude'],
			'longitude' => $_POST['longitude'],
			'tanggal' => $tanggal,
			'jam' => $jam
			);
$this->dauo->input_data($Durations,'pergerakan');
echo "sukses";
		}
}