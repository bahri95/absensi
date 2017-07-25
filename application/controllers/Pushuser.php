<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pushuser extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 
	}
	public function index()
	{
		$username=$_POST['username'];
/*		$username='boyke1212';
*/		
		$response=array();
		$datanya=$this->dauo->Ambilmata($username);
		//var_dump($datanya);
		foreach ($datanya as $dat) {
			array_push($response,array("namatenaga"=>$dat['namatenaga'],"keterangan"=>$dat['keterangan'],
				"rekanan"=>$dat['rekanan'],"tlp"=>$dat['tlp'],
				"fotokelas"=>$dat['fotokelas'],"latia"=>$dat['latia'],"longia"=>$dat['longia'],"jamsuk"=>$dat['jammasuk'],
				"jenpro"=>$dat['jenisproyek'],"lokpro"=>$dat['lokasiproyek'],"idpegawai"=>$dat['id'],"latitude"=>$dat['latitude'],
				"longitude"=>$dat['longitude']));
		}
		echo json_encode(array("datauser"=>$response));

	}
}