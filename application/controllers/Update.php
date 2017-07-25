<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update extends MY_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');

	}
	public function edit($id)
	{
		$namenya=$this->session->userdata('name');
		$datanya=$this->dauo->Ambilmata($id);
		$data['data']= $datanya;
		$data['name']= $namenya;
		$data['jabatan'] = $this->dauo->data_jabatan();
		$this->load->view('header', $data);
		$this->load->view('edit_personil',$data);
		$this->load->view('footer');

		}
}
