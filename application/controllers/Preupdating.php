<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Preupdating extends MY_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');

	}
	public function index()
	{

		$username=$this->session->userdata('username');
		$datanya=$this->dauo->ambildata();
		$data['data']=$datanya;
		$data['name']=$username;
		$this->load->view('header', $data);
		$this->load->view('tabel_personil',$data);
		$this->load->view('footer');

		

		}
}
