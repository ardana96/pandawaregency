<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Kegiatan_model extends CI_Model
{

	function kegiatan_view($limit, $start)
	{	

		
		$sql = "SELECT * FROM  kegiatan a
				LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 
				LIMIT $start,$limit
				 ";
		$query = $this->db->query($sql);
				//return $this->db->query($sql)->result();
				 return $query;
	}

	function kegiatan_perkategori_view($kategori_id, $limit, $start)
	{	
		
		
		$sql = "SELECT * FROM  kegiatan a
				LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 
				Where a.kategori_id = '$kategori_id'
				LIMIT $start,$limit
				 ";
		$query = $this->db->query($sql);
				//return $this->db->query($sql)->result();
				 return $query;
	}

	// function kegiatan_perkategori_view($kategori_id)
	// {	

		
	// 	$sql = "SELECT * FROM  kegiatan a
	// 			LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 
	// 			Where a.kategori_id = '$kategori_id'
				
	// 			 ";
	// 	//$query = $this->db->query($sql);
	// 			return $this->db->query($sql)->result();
	// 			// return $query;
	// }

	function count_kegiatan_kategori($kategori_id)
	{
		$sql = "SELECT * FROM  kegiatan a
				LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 
				Where a.kategori_id = '$kategori_id'";

		return $this->db->query($sql)->num_rows();
	}


	function kegiatan_kategori_view()
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


	

	function kegiatan_detail($kegiatan_id)
	{
		$sql = "SELECT * FROM  kegiatan a
				LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id
				WHERE a.kegiatan_id = '$kegiatan_id'
				";
		return $this->db->query($sql)->row_array();
	}

	function get_kegiatan_list($limit, $start){
        $query = $this->db->get('kegiatan', $limit, $start);
        return $query;
    }
	
}
?>