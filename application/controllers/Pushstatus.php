<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pushstatus extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 
	}
	public function index()
	{
		$username=$_POST['username'];
		/*$username='boyke1212';
		*/
		$response=array();
		$datanya=$this->dauo->ambilstatus($username);
		//var_dump($datanya);
		foreach ($datanya as $dat) {
			array_push($response,array("status"=>$dat['status']));
		}
		echo json_encode(array("datauser"=>$response));

	}
}