<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Login_model extends CI_Model
{

	function cek_login_users($username, $password)
	{
		$sql = "SELECT *
				FROM users AS u
				WHERE 	(u.user_username = '$username') AND 
						(u.user_password = '$password') AND
						(u.user_aktif = 'Y') ";
				return $this->db->query($sql)->num_rows();
	}

	function get_data_users($username, $password)
	{
		$sql = "SELECT *
				FROM users AS u, level AS l
				WHERE 	(u.user_username = '$username') AND 
						(u.user_password = '$password') AND
						(u.level_id = l.level_id)
				";
				return $this->db->query($sql)->result();

					}
}
?>