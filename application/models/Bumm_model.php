<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Bumm_model extends CI_Model
{

	
	function bumm_view($limit, $start)
	{	

		
		$sql = "SELECT * FROM  bumm
				LIMIT $start,$limit
				 ";
		$query = $this->db->query($sql);
				//return $this->db->query($sql)->result();
				 return $query;
	}

	function bumm_sidebar()
	{	

		
		$sql = "SELECT * FROM  bumm
				LIMIT 20
				 ";
	return $this->db->query($sql)->result();
				 
	}

	function bumm_detail($id)
	{	

		
		$sql = "SELECT * FROM  bumm
				WHERE bumm_id = '$id'
				 ";
	
				return $this->db->query($sql)->row_array();
				 
	}
	

	
	
}
?>