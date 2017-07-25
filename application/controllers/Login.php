<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 
	}
	public function index()
	{

		$username=$_POST['username'];
		$pw=$_POST['password'];
		$password=md5($pw);
		$datanya=$this->dauo->checkloginuser($username,$password);
		if($datanya>0){	
			echo "Login succes...";
		}else{
			echo "gagal";
		}
	}
}
