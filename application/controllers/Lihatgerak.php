<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lihatgerak extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
		$username=$_POST['usern'];
		$tgl=$_POST['tanggal'];
		$tanggal = date("d-M-Y", strtotime($tgl));
		//echo $username."<br>".$tanggal;
		$datanya=$this->dauo->ambilgeraks($username,$tanggal);
		$data['pergerakan']=$datanya;
		$this->load->view('pregeraks',$data);

		}
}