<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Bumm_model extends CI_Model
{

	function bumm_view()
	{
		$sql = "SELECT * FROM  bumm a
				LEFT JOIN kategori k ON a.kategori_id = k.kategori_id

				 ";

				return $this->db->query($sql)->result();
	}

	function bumm_add($params)
	{

		$this->db->insert('bumm',$params);
		return $this->db->insert_id();
	}

	function bumm_delete($bumm_id)
	{
		return $this->db->delete('bumm',array('bumm_id'=>$bumm_id));
	}

	function bumm_getid($bumm_id)
	{
		$sql = "SELECT * FROM bumm WHERE bumm_id='$bumm_id'";

		return $this->db->query($sql)->row_array();
	}

	function bumm_update($bumm_id, $params)
	{

		$this->db->where('bumm_id', $bumm_id);
		return $this->db->update('bumm',$params);
	}

	function kategori_view()
	{
		$sql = "SELECT *
				FROM  kategori k, kategori_status ks 
				where k.kategori_status_id = ks.kategori_status_id
				AND ks.kategori_status_id = 2
				 ";

				return $this->db->query($sql)->result();
	}
	
}
?>