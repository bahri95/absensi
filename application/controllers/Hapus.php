<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hapus extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
	
		$id = $_POST['id'];
		$this->dauo->deletedata('datatenaga',$id);
		echo '<script>document.location.href= "'.base_url('Preupdating').'"</script>';
		}
}