<?php
if (!  defined('BASEPATH')) exit ('No direct script access allowed');

class Produk_model extends CI_Model{

	function produk_view(){
		$sql = "SELECT * FROM produk ";

		return $this->db->query($sql)->result();
	}

	function produk_add($params)
	{

		$this->db->insert('produk',$params);
		return $this->db->insert_id();
	}

	function produk_getid($produk_id)
	{
		$sql = "SELECT * FROM produk WHERE produk_id='$produk_id'";

		return $this->db->query($sql)->row_array();
	}

	function produk_update($produk_id, $params){

		$this->db->where('produk_id', $produk_id);
		return $this->db->update('produk',$params);
	}

	function produk_delete($produk_id)
	{
		return $this->db->delete('produk',array('produk_id'=>$produk_id));
	}

	function produk_view_industri($industri_id){
		$sql = "SELECT * FROM produk p, industri i, kategori k
		        WHERE (p.industri_id = i.industri_id) AND
		        	  (p.industri_id = '$industri_id') AND
		        	  (p.kategori_id = k.kategori_id)";

		return $this->db->query($sql)->result();
	}

	function kode_otomatis()
    {

        $this->db->select('Right(produk.produk_id,4) as kode ',false);
        $this->db->order_by('produk_id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('produk');
        
        if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode = 1;
        }
                
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "B".$kodemax;

        return $kodejadi;

    }
}

?>