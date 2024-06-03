<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Divisi_model extends CI_Model
{

	function divisi_view()
	{
		$sql = "SELECT * FROM  divisi d
				INNER JOIN divisi_detail dd ON d.divisi_id = dd.divisi_id 
				 ";

				return $this->db->query($sql)->result();
	}

	function divisi_detail($id)
	{
		$sql = "SELECT * FROM  divisi d
				INNER JOIN divisi_detail dd ON d.divisi_id = dd.divisi_id 
				WHERE dd.divisi_det_id = '$id' ";

				return $this->db->query($sql)->row_array();
	}
	
	
}
?>