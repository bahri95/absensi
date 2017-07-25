<?php

class Dauo extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
		return "sukses";
	}

	 public function get_users() {
        $query = $this->db->get('datatenaga');
        return $query->result_array();
    }
    public function checkpass($password)
		{
		     $dataSegmentations=$this->db->query("select * from datatenaga where  password='$password';");
		     return $dataSegmentations->num_rows();
	    }

	public function checklogin($username='kosong',$password='kosong')
		{
		     $dataSegmentations=$this->db->query("select * from admin where username='$username' and password='$password';");
		     return $dataSegmentations->num_rows();
	    }
	     public function getname($username='kosong',$password='kosong')
		{

		     $dataSegmentations=$this->db->query("select nama from admin where username='$username' and password='$password';");
		     $ret = $dataSegmentations->row();
		     return $ret->nama;
	    }
public function checkloginuser($username='kosong',$password='kosong')
		{
		     $dataSegmentations=$this->db->query("select * from datatenaga where username='$username' and password='$password';");
		     return $dataSegmentations->num_rows();
	    }
	     public function getnameuser($email='kosong',$password='kosong')
		{

		     $dataSegmentations=$this->db->query("select nama from datatenaga where username='$email' and password='$password';");
		     $ret = $dataSegmentations->row();
		     return $ret->nama;
	    }
	       public function Ambilmata($id)
		{

		     $dataSegmentations=$this->db->query("select * from datatenaga where id='$id'");
		  return $dataSegmentations->result_array();
	    }
	     public function updatedata($data,$table,$id)
				{
					$this->db->where('id', $id);
					return $this->db->update($table, $data);

			    }
	     public function ambildata()
		{

		     $dataSegmentations=$this->db->query("select a.*, b.id_jabatan, b.jabatan from datatenaga a inner join
				 jabatan b on a.id_jabatan = b.id_jabatan");
		  return $dataSegmentations->result_array();
	    }

			public function data_jabatan()
	 {

				$dataSegmentations=$this->db->query("select * from jabatan");
		 return $dataSegmentations->result_array();
		 }
 public function deletedata($table,$id)
		{
			 $this->db->where('id', $id);
			$this->db->delete($table);
		
	    }
	    public function updatelat($username,$lat,$lang)
		{
			  $this->db->query("UPDATE  datatenaga set latitude='$lat',longitude='$lang' where username='$username';");
		  return 'Update sukses';
	    }

	      public function getjam($username)
		{

		     $dataSegmentations=$this->db->query("select jammasuk from datatenaga where username='$username';");
		     $ret = $dataSegmentations->row();
		     return $ret->jammasuk;
	    }
	     public function ambilstatus($username)
		{

		     $dataSegmentations=$this->db->query("SELECT * FROM statustelat WHERE username='$username' ORDER BY id DESC;");
		  return $dataSegmentations->result_array();
	    }
	      public function ambilgerak()
		{

		     $dataSegmentations=$this->db->query("select a.*, b.id_jabatan, b.jabatan from datatenaga a inner join
				 jabatan b on a.id_jabatan = b.id_jabatan");
		  return $dataSegmentations->result_array();
	    }

	       public function ambilgeraks($username,$tanggal)
		{

		     $dataSegmentations=$this->db->query("SELECT * from pergerakan where username='$username' AND tanggal='$tanggal';");
		  return $dataSegmentations->result_array();
	    }

	    public function ambilrealtime($username)
		{

		     $dataSegmentations=$this->db->query("SELECT latitude as lat,longitude as longi,namatenaga as nama,fotokelas as foto from datatenaga where username='$username';");
		  return $dataSegmentations->result_array();
	    }

	     public function ambilonline($username,$tanggal)
		{

		     $dataSegmentations=$this->db->query("SELECT * from cekin where username='$username' AND tanggal='$tanggal' order by id limit 1;");
		  return $dataSegmentations->result_array();
	    }

	     public function ambilout($username,$tanggal)
		{

		     $dataSegmentations=$this->db->query("SELECT * from cekout where username='$username' AND tanggal='$tanggal' order by id limit 1;");
		  return $dataSegmentations->result_array();
	    }



	      public function ambilmanual($username,$tanggal)
		{

		     $dataSegmentations=$this->db->query("SELECT * from cekinmanual where username='$username' AND tanggal='$tanggal' order by id limit 1;");
		  return $dataSegmentations->result_array();
	    }


		public function ambilonlinesemuanya($username,$tanggal,$tanggal2)
		{
			$this->db->select('cekin.tanggal as tglcekin,cekin.jam as jamcekin ,cekout.tanggal as tglcekout,cekout.jam as jamcekout');
   				 $this->db->from('cekin');
    			$this->db->join('cekout', "cekin.username = cekout.username");
      			 $o="cekin.username ='$username' and cekin.tanggal BETWEEN '$tanggal' AND '$tanggal2'  and cekout.tanggal BETWEEN '$tanggal' AND '$tanggal2';";
   				 $this->db->where($o);
   				 $query = $this->db->get();
		return $query->result_array();

	    }




	     public function ambiloutmanual($username,$tanggal)
		{

		     $dataSegmentations=$this->db->query("SELECT * from cekoutmanual where username='$username' AND tanggal='$tanggal' order by id limit 1;");
		  return $dataSegmentations->result_array();
	    }


	    public function ambilmanualsemuanya($username,$tanggal,$tanggal2)
		{
			$this->db->select('cekinmanual.foto as fotocekin,cekinmanual.tanggal as tanggal,cekoutmanual.foto as fotocekout');
   				 $this->db->from('cekinmanual');
    			$this->db->join('cekoutmanual', "cekinmanual.username = cekoutmanual.username");
      			 $o="cekinmanual.username ='$username' and cekinmanual.tanggal BETWEEN '$tanggal' AND '$tanggal2'  and cekoutmanual.tanggal BETWEEN '$tanggal' AND '$tanggal2';";
   				 $this->db->where($o);
   				 $query = $this->db->get();
		return $query->result_array();

	    }


	       public function ambileventsemua($username,$tanggal1,$tanggal2)
		{

		     $dataSegmentations=$this->db->query("SELECT * from eventpeg where username='$username' AND tanggal BETWEEN '$tanggal1' AND '$tanggal2';");
		  return $dataSegmentations->result_array();
	    }
}
