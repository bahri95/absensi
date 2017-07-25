<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 
	}

public function index()
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$datanya=$this->dauo->checklogin($username,$password);
			if($datanya>0){
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('password',$password);
				$name=$this->dauo->getname($username,$password);
				$this->session->set_userdata('name',$name);
					$datanya = array(
				    'username' => $username,
				    'password' => $password,
				    'name' => $name
			 		);
			$data['name'] = $name;
			$this->load->view('header', $data);
			 $this->load->view('body',$datanya);
			$this->load->view('footer');
		}else{
			echo "<h6>ANDA TIDAK TERDAFTAR..... AKAN DIALIHKAN KE HALAMAN LOGIN </h6>";
			redirect('/Welcome', 'refresh');
		}
	}
	
}
