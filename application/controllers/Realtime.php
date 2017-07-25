<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Realtime extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
		$username=$_POST['username'];

		$datanya=$this->dauo->ambilrealtime($username);
		$data['pergerakan']=$datanya;
		$this->load->view('realtime',$data);

		}
}