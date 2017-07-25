<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Online extends MY_Controller {
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
		$data['name']=$this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('onlines',$data);
		$this->load->view('footer');


		}
}
