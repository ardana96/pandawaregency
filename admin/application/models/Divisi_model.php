<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Divisi_model extends CI_Model
{

	function divisi_view()
	{
		$sql = "SELECT * FROM  divisi
				 ";

				return $this->db->query($sql)->result();
	}

	function divisi_add($params)
	{

		$this->db->insert('divisi',$params);
		return $this->db->insert_id();
	}

	function divisi_delete($divisi_id)
	{
		return $this->db->delete('divisi',array('divisi_id'=>$divisi_id));
	}

	function divisi_getid($divisi_id)
	{
		$sql = "SELECT * FROM divisi WHERE divisi_id='$divisi_id'";

		return $this->db->query($sql)->row_array();
	}

	function divisi_update($divisi_id, $params)
	{

		$this->db->where('divisi_id', $divisi_id);
		return $this->db->update('divisi',$params);
	}
	
}
?>