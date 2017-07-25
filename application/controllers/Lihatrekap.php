<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lihatrekap extends MY_Controller {
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
		$tgl2=$_POST['tanggalakhir'];
		$rekanan=$_POST['rekanan'];
		$tlp=$_POST['tlp'];
		$jenpro=$_POST['jenis'];
		$lopro=$_POST['lokasiproyek'];
		$tanggal = date("d-M-Y", strtotime($tgl));
		$tanggal2 = date("d-M-Y", strtotime($tgl2));
		//echo $username."<br>".$tanggal;
		$dataonlinenya=$this->dauo->ambilonlinesemuanya($username,$tanggal,$tanggal2);
		$datamanualnya=$this->dauo->ambilmanualsemuanya($username,$tanggal,$tanggal2);
		$dataevent=$this->dauo->ambileventsemua($username,$tanggal,$tanggal2);
		/*$dataout=$this->dauo->ambiloutmanual($username,$tanggal);*/
	

		$data['nama']=$namatenaga;
		$data['rekanan']=$rekanan;
		$data['tlp']=$tlp;
		$data['lopro']=$lopro;
		$data['jenpro']=$jenpro;
		$data['dataonlinenya']=$dataonlinenya;
		$data['datamanualnya']=$datamanualnya;
		$data['dataevent']=$dataevent;
		$this->load->view('lihatrekap',$data);

		}
}