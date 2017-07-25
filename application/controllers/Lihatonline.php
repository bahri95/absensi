<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lihatonline extends MY_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
 		
	}
	public function index()
	{
		$namatenaga=$_POST['namatenaga'];
		$username=$_POST['usern'];
		$tgl=$_POST['tanggal'];
		$rekanan=$_POST['rekanan'];
		$tlp=$_POST['tlp'];
		$jenpro=$_POST['jenis'];
		$lopro=$_POST['lokasiproyek'];
		$tanggal = date("d-M-Y", strtotime($tgl));
		//echo $username."<br>".$tanggal;
		$datanya=$this->dauo->ambilonline($username,$tanggal);
		$dataout=$this->dauo->ambilout($username,$tanggal);
	
		$data['online']=$datanya;
		$data['out']=$dataout;
		$data['namatenaga']=$namatenaga;
		$data['rekanan']=$rekanan;
		$data['tlp']=$tlp;
		$data['jenpro']=$jenpro;
		$data['lopro']=$lopro;
		$this->load->view('lihatonlines',$data);

		}
}