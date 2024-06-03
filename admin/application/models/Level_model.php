<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Level_model extends CI_Model
{

	function level_view()
	{
		$sql = "SELECT *
				FROM  level l 
				 ";

				return $this->db->query($sql)->result();
	}

	function level_add($params)
	{

		$this->db->insert('level',$params);
		return $this->db->insert_id();
	}

	function level_delete($level_id)
	{
		return $this->db->delete('level',array('level_id'=>$level_id));
	}

	function level_getid($level_id)
	{
		$sql = "SELECT * FROM level WHERE level_id='$level_id'";

		return $this->db->query($sql)->row_array();
	}

	function level_update($level_id, $params)
	{

		$this->db->where('level_id', $level_id);
		return $this->db->update('level',$params);
	}
	
}
?>