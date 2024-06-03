<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Donasi_model extends CI_Model
{

	function donasi_view()
	{
		$sql = "SELECT 
				d.donasi_target as target, 
				d.created_by, 
				d.donasi_nama as nama,
				d.donasi_isi as isi, 
				d.donasi_ringkasan as ringkasan, 
				sum(dr.donatur_jumlah) as jumlah,
				d.donasi_photo as photo,
				d.donasi_id as id 
				FROM  donasi d
				LEFT JOIN donatur dr ON d.donasi_id = dr.donasi_id 
				group by d.donasi_id
				Order by d.created_date DESC 

				 ";

				return $this->db->query($sql)->result();
	}

	function donasi_detail($donasi_id)
	{
		// $sql = "SELECT * FROM donasi WHERE donasi_id='$donasi_id'";

		$sql = "SELECT 
				d.donasi_target as target, 
				d.created_by, 
				d.donasi_nama as nama, 
				d.donasi_ringkasan as ringkasan, 
				sum(dr.donatur_jumlah) as jumlah,
				d.donasi_photo as photo,
				d.donasi_id as id,
				d.donasi_isi as isi,
				d.created_date
				FROM  donasi d
				LEFT JOIN donatur dr ON d.donasi_id = dr.donasi_id 
				where d.donasi_id = '$donasi_id'
				group by d.donasi_id
				Order by d.created_date DESC 

				 ";

		return $this->db->query($sql)->row_array();
	}


	
	
}
?>