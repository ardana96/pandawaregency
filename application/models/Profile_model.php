<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Profile_model extends CI_Model
{



	function jumlah_kegiatan()
	{
		$sql= "SELECT * FROM  kegiatan a
				LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 
						
				Order By a.modified_date desc
				LIMIT 10;
				";
		

				 

				return $this->db->query($sql)->num_rows();
	}

	function jumlah_donasi()
	{
		$sql = "SELECT * FROM  donasi 

				 ";

				return $this->db->query($sql)->num_rows();
	}

	function jumlah_donatur()
	{
		$sql = "SELECT * FROM  donatur 

				 ";

				return $this->db->query($sql)->num_rows();
	}


	
	
}
?>