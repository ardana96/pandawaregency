<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Donatur_model extends CI_Model
{

	function donatur_view()
	{
		$sql = "SELECT * FROM  donatur a
		       LEFT JOIN donasi b ON  a.donasi_id = b.donasi_id

				 ";

				return $this->db->query($sql)->result();
	}

	function donatur_add($params)
	{

		$this->db->insert('donatur',$params);
		return $this->db->insert_id();
	}

	function donatur_delete($donatur_id)
	{
		return $this->db->delete('donatur',array('donatur_id'=>$donatur_id));
	}

	function donatur_getid($donatur_id)
	{
		$sql = "SELECT * FROM donatur WHERE donatur_id='$donatur_id'";

		return $this->db->query($sql)->row_array();
	}

	function donatur_update($donatur_id, $params)
	{

		$this->db->where('donatur_id', $donatur_id);
		return $this->db->update('donatur',$params);
	}
	
}
?>