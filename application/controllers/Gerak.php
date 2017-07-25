kan<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gerak extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
		
	
		$datanya=$this->dauo->ambilgerak();
		$data['data']=$datanya;
		$this->load->view('pregerak',$data);


		}
}