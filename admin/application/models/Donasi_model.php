<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Donasi_model extends CI_Model
{

	function donasi_view()
	{
		$sql = "SELECT * FROM  donasi 

				 ";

				return $this->db->query($sql)->result();
	}

	function donasi_add($params)
	{

		$this->db->insert('donasi',$params);
		return $this->db->insert_id();
	}

	function donasi_delete($donasi_id)
	{
		return $this->db->delete('donasi',array('donasi_id'=>$donasi_id));
	}

	function donasi_getid($donasi_id)
	{
		$sql = "SELECT * FROM donasi WHERE donasi_id='$donasi_id'";

		return $this->db->query($sql)->row_array();
	}

	function donasi_update($donasi_id, $params)
	{

		$this->db->where('donasi_id', $donasi_id);
		return $this->db->update('donasi',$params);
	}
	
}
?>