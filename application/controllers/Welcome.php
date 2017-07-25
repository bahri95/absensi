<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
			$this->load->library('session');
	}
	public function index()
	{
		//$this->session->sess_destroy();
		$usernamenya=$this->session->userdata('username');
		$passwordnya=$this->session->userdata('password');
		$namenya=$this->session->userdata('name');

		if($usernamenya==""){
			$this->load->view('login');
			
		}else{
		  $datanya = array(
		    'username' => $usernamenya,
		    'password' => $passwordnya,
		    'name' => $namenya
		 );
		  $this->load->view('header', $datanya);
		  $this->load->view('body',$datanya);
		  $this->load->view('footer');
		}
		
	}
}
