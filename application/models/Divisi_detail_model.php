<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Divisi_detail_model extends CI_Model
{

	function divisi_detail_view()
	{
		$sql = "SELECT * FROM  divisi_detail a
		        LEFT JOIN divisi b ON  a.divisi_id = b.divisi_id

				 ";

				return $this->db->query($sql)->result();
	}

	function divisi_detail_add($params)
	{

		$this->db->insert('divisi_detail',$params);
		return $this->db->insert_id();
	}

	function divisi_detail_delete($divisi_detail_id)
	{
		return $this->db->delete('divisi_detail',array('divisi_det_id'=>$divisi_detail_id));
	}

	function divisi_detail_getid($divisi_detail_id)
	{
		$sql = "SELECT * FROM divisi_detail WHERE divisi_det_id='$divisi_detail_id'";

		return $this->db->query($sql)->row_array();
	}

	function divisi_detail_update($divisi_detail_id, $params)
	{

		$this->db->where('divisi_det_id', $divisi_detail_id);
		return $this->db->update('divisi_detail',$params);
	}
	
}
?>