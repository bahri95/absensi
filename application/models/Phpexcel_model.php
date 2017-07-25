<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


 
class Phpexcel_model extends CI_Model {

    function datatenaga() {
       $dataSegmentations=$this->db->query("select a.*, b.id_jabatan, b.jabatan from datatenaga a inner join
				 jabatan b on a.id_jabatan = b.id_jabatan");
		  return $dataSegmentations->result_array();
    }

    function datatenagaByTgl() {
       $dataSegmentations=$this->db->query("select a.*, b.id_jabatan, b.jabatan from datatenaga a inner join jabatan b on a.id_jabatan = b.id_jabatan where a.id = '1'");
		  return $dataSegmentations->result_array();
    }

    function filter($id_satker=0, $ppkpjn=0, $tahun=0, $bulan=0)
		{

		     $dataSegmentations=$this->db->query("select a.*, b.id_jabatan, b.jabatan, c.*, d.* from datatenaga a inner join
				 jabatan b on a.id_jabatan = b.id_jabatan
				 inner join
				 cekin c on a.username = c.username
				 inner join
				 cekout d on a.username = d.username
				  where id_satker = $id_satker AND ppkpjn = '".$ppkpjn."' AND MID(a.tgl_kontrak, 1, 4) = $tahun AND MID(a.tgl_kontrak, 6, 2) = $bulan GROUP BY a.id_satker");
		  return $dataSegmentations->result_array();
	    }

	function hadir($id_satker, $ppkpjn, $tahun, $bulan)
		{

		     $dataSegmentations=$this->db->query("select a.*, b.id_jabatan, b.jabatan, c.*, d.* from datatenaga a inner join
				 jabatan b on a.id_jabatan = b.id_jabatan
				 inner join
				 cekin c on a.username = c.username
				 inner join
				 cekout d on a.username = d.username
				  where id_satker = $id_satker AND ppkpjn = '".$ppkpjn."' AND MID(a.tgl_kontrak, 1, 4) = $tahun AND MID(a.tgl_kontrak, 6, 2) = $bulan GROUP BY c.tanggal");
		  return $dataSegmentations->result_array();
	    }

     function cekin() {
       $dataSegmentations=$this->db->query("select a.*, b.* from cekin a inner join datatenaga  b on a.id = b.id");
		  return $dataSegmentations->result_array();
    }

    function cekout() {
       $dataSegmentations=$this->db->query("select a.*, b.* from cekout a inner join datatenaga  b on a.id = b.id");
		  return $dataSegmentations->result_array();
    }


}
 