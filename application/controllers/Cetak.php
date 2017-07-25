<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cetak extends MY_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('dauo');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('phpexcel_model');

	}
	public function index()
	{
		
		$datanya=$this->phpexcel_model->datatenaga();
		$data['data_combo']=$datanya;
		$data['data']=$datanya;
		$data['hadir']='';
		$data['name']=$this->session->userdata('name');
		$this->load->view('header',$data);
		$this->load->view('cetak',$data);
		$this->load->view('footer');
		// print_r($datanya);exit();


		}

		public function filter()
		{
			if($this->input->post('id_satker') != '' AND $this->input->post('ppkpjn') != '' AND
			$this->input->post('tahun') != '' AND $this->input->post('bulan') != ''){
			$data['id_satker'] = $this->input->post('id_satker');
			$data['ppkpjn'] = $this->input->post('ppkpjn');
			$data['tahun'] = $this->input->post('tahun');
			$data['bulan'] = $this->input->post('bulan');
			$datanya=$this->phpexcel_model->filter($data['id_satker'],$data['ppkpjn'],$data['tahun'],$data['bulan']);
			$datahadir=$this->phpexcel_model->hadir($data['id_satker'],$data['ppkpjn'],$data['tahun'],$data['bulan']);
			$data['data']=$datanya;
			$data['hadir']=$datahadir;
			$data['data_combo']=$this->phpexcel_model->datatenaga();
			$data['name']=$this->session->userdata('name');

			$this->load->view('header',$data);
			$this->load->view('cetak',$data);
			$this->load->view('footer');
			}else{
				redirect('cetak');
			}
		}
		public function export()  {

		$subscribers = $this->phpexcel_model->datatenaga();

		require_once APPPATH . '/third_party/Phpexcel/Bootstrap.php';

		// Create new Spreadsheet object
		$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Set document properties
		$spreadsheet->getProperties()->setCreator('Webeasystep.com ')
				->setLastModifiedBy('Ahmed Fakhr')
				->setTitle('Phpecxel codeigniter tutorial')
				->setSubject('integrate codeigniter with PhpExcel')
				->setDescription('this is the file test');

		// add style to the header
		// $styleArray = array(
		// 		'font' => array(
		// 				'bold' => true,
		// 		),
		// 		'alignment' => array(
		// 				'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
		// 				'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
		// 		),
		// 		'borders' => array(
		// 				'top' => array(
		// 						'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
		// 				),
		// 		),
		// 		'fill' => array(
		// 				'type' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
		// 				'rotation' => 90,
		// 				'startcolor' => array(
		// 						'argb' => 'FFA0A0A0',
		// 				),
		// 				'endcolor' => array(
		// 						'argb' => 'FFFFFFFF',
		// 				),
		// 		),
		// );
		// $spreadsheet->getActiveSheet()->getStyle('A1:F1')->applyFromArray($styleArray);


		// auto fit column to content

		foreach(range('A','F') as $columnID) {
			$spreadsheet->getActiveSheet()->getColumnDimension($columnID)
					->setAutoSize(true);
		}

		// set the names of header cells
		$spreadsheet->setActiveSheetIndex(0)
				->setCellValueByColumnAndRow("1",'2','JABATAN')
				->setCellValueByColumnAndRow("2",'2','Tanggal')
				;
		$kolom=2;
		for($i=1;$i<=30;$i++){
			$spreadsheet->setActiveSheetIndex(0)
					->setCellValueByColumnAndRow($kolom,'3',$i);
			$kolom++;			
		}
			$spreadsheet->setActiveSheetIndex(0)
					->setCellValueByColumnAndRow($kolom+1,'2','Total Durasi');
			$spreadsheet->setActiveSheetIndex(0)
					->setCellValueByColumnAndRow($kolom+2,'2','MM');
			$spreadsheet->setActiveSheetIndex(0)
					->setCellValueByColumnAndRow($kolom+3,'2','Tanda Tangan');

				// ->setCellValue("B1",'')
				// ->setCellValue("C1",'')
				// ->setCellValue("D1",'Jabatan')
				// ->setCellValue("E1",'No Telp')
				// ->setCellValue("F1",'Jam Datang')
				// ->setCellValue("G1",'Latitude')
				// ->setCellValue("H1",'Longitude')
				// ->setCellValue("I1",'Jam Pulang')
				// ->setCellValue("J1",'Latitude')
				// ->setCellValue("K1",'Longitude')
				// ->setCellValue("L1",'Durasi')
				// ->setCellValue("M1",'Keterangan Kegiatan')
				// ->setCellValue("N1",'Keterangan Tidak Masuk Kerja');

		// Add some data
		$baris= 3;
		foreach($subscribers as $sub){
			// $spreadsheet->setActiveSheetIndex(0)
			// 		->setCellValue("A$x",$sub['nama_paket'])
			// 		->setCellValue("B$x",$sub['nama_konsultan'])
			// 		->setCellValue("C$x",$sub['namatenaga'])
			// 		->setCellValue("D$x",$sub['jabatan'])
			// 		->setCellValue("E$x",$sub['tlp'])
			// 		->setCellValue("F$x",$sub['tlp'])
			// 		->setCellValue("G$x",$sub['latitude'])
			// 		->setCellValue("H$x",$sub['longitude'])
			// 		->setCellValue("I$x",$sub['tlp'])
			// 		->setCellValue("J$x",$sub['latitude'])
			// 		->setCellValue("K$x",$sub['longitude'])
			// 		->setCellValue("L$x",$sub['tlp'])
			// 		->setCellValue("M$x",$sub['tlp'])
			// 		->setCellValue("N$x",$sub['tlp']);
			// $x++;

			$spreadsheet->setActiveSheetIndex(0)
				->setCellValueByColumnAndRow(1,$baris,$sub['nama_konsultan'])
				->setCellValueByColumnAndRow(2,$baris,$sub['jabatan']);
			
			$kolom2=3;
			for($i=1;$i<=30;$i++){
				$spreadsheet->setActiveSheetIndex(0)
						->setCellValueByColumnAndRow($kolom,$baris,$i);
				$kolom2++;			
			}

			$baris++;

		}



// Rename worksheet
		$spreadsheet->getActiveSheet()->setTitle('Users Information');

// set right to left direction
//		$spreadsheet->getActiveSheet()->setRightToLeft(true);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Presensi_Manual.xlsx"');
		header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Excel2007');
		$writer->save('php://output');
		exit;

		//  create new file and remove Compatibility mode from word title


}
}