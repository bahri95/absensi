<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Absenmasuk extends MY_Controller {
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
			'foto' => $_POST['foto'],
			'tanggal' => $_POST['tanggal']
			);
$this->dauo->input_data($Durations,'cekinmanual');
echo "saved";
		}
}