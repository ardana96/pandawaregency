<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Dashboard_model extends CI_Model
{

	function kegiatan_view()
	{
		// $sql= "SELECT * FROM  kegiatan a
		// 		LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 
		// 		group by a.kategori_id			
		// 		Order By a.modified_date desc";
		$sql= "SELECT * FROM  kegiatan a
				LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 
				where a.modified_date
				IN (
				SELECT MAX(a.modified_date)
				FROM kegiatan a
				LEFT JOIN kategori b ON a.kategori_id = b.kategori_id 
				group BY a.kategori_id
				)";

				 

				return $this->db->query($sql)->result();
	}

	function kegiatan_sidebar_view()
	{
		$sql= "SELECT * FROM  kegiatan a
				LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 
						
				Order By a.modified_date desc
				LIMIT 10;
				";
		

				 

				return $this->db->query($sql)->result();
	}

	function divisi_view()
	{
		$sql = "SELECT * FROM  divisi d
				INNER JOIN divisi_detail dd ON d.divisi_id = dd.divisi_id 
				 ";

				return $this->db->query($sql)->result();
	}


	function bumm_view()
	{
		$sql = "SELECT * FROM  bumm a
				LEFT JOIN kategori k ON a.kategori_id = k.kategori_id

				 ";

				return $this->db->query($sql)->result();
	}

	function infak_prioritas_view()
	{
		$sql = "SELECT 
				d.donasi_target as target, 
				d.created_by, 
				d.donasi_nama as nama,
				d.donasi_isi as isi, 
				d.donasi_ringkasan as ringkasan, 
				sum(dr.donatur_jumlah) as jumlah,
				d.donasi_photo as photo,
				d.donasi_id as id,
				d.created_date
				FROM  donasi d
				LEFT JOIN donatur dr ON d.donasi_id = dr.donasi_id 
				group by d.donasi_id
				ORDER BY priority DESC, created_date DESC
				LIMIT 1

				 ";
				 return $this->db->query($sql)->result();
	}
	
}
?>