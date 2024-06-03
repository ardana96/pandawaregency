<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Users_model extends CI_Model
{

	function users_view()
	{
		$sql = "SELECT *
				FROM users u, level l 
				WHERE u.level_id = l.level_id
				 ";

				return $this->db->query($sql)->result();
	}

	function users_add($params)
	{

		$this->db->insert('users',$params);
		return $this->db->insert_id();
	}

	function users_delete($users_id)
	{
		return $this->db->delete('users',array('user_id'=>$users_id));
	}

	function users_getid($users_id)
	{
		$sql = "SELECT * FROM users WHERE user_id='$users_id'";

		return $this->db->query($sql)->row_array();
	}

	function users_update($users_id, $params)
	{

		$this->db->where('user_id', $users_id);
		return $this->db->update('users',$params);
	}
	
}
?>