<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ijin extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
				$tanggal=$_POST['tanggal'];
				$jam=$_POST['jam'];
$Durations = array(
			'username' => $_POST['username'],
			'tanggal' => $tanggal,
			'jam' => $jam,
			'alasan' => $_POST['alasan']
			);
$res=$this->dauo->input_data($Durations,'ijin');
echo $res;
		}
}