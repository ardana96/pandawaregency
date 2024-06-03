<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Kegiatan_model extends CI_Model
{

	function kegiatan_view()
	{
		$sql = "SELECT * FROM  kegiatan a
				LEFT JOIN kategori b ON  a.kategori_id = b.kategori_id 

				 ";

				return $this->db->query($sql)->result();
	}

	function kegiatan_add($params)
	{

		$this->db->insert('kegiatan',$params);
		return $this->db->insert_id();
	}

	function kegiatan_delete($kegiatan_id)
	{
		return $this->db->delete('kegiatan',array('kegiatan_id'=>$kegiatan_id));
	}

	function kegiatan_getid($kegiatan_id)
	{
		$sql = "SELECT * FROM kegiatan WHERE kegiatan_id='$kegiatan_id'";

		return $this->db->query($sql)->row_array();
	}

	function kegiatan_update($kegiatan_id, $params)
	{

		$this->db->where('kegiatan_id', $kegiatan_id);
		return $this->db->update('kegiatan',$params);
	}

	function kategori_view()
	{
		$sql = "SELECT *
				FROM  kategori k, kategori_status ks 
				where k.kategori_status_id = ks.kategori_status_id
				AND ks.kategori_status_id = 1
				 ";

				return $this->db->query($sql)->result();
	}
	
}
?>