<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tambah extends MY_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');

	}
	public function index()
	{

		$namenya=$this->session->userdata('name');
		$data['name']= $namenya;
		$data['jabatan'] = $this->dauo->data_jabatan();
		$this->load->view('header', $data);
		$this->load->view('add_personil',$data);
		$this->load->view('footer');

		}
}
