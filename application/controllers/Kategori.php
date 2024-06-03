<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()

	{
		parent::__construct();
		$this->sesid = $this->session->userdata('usersid');
		$this->sesnama = $this->session->userdata('usersnama');
		$this->sesjabatan = $this->session->userdata('usersjabatan');
		$this->sesphoto = $this->session->userdata('usersphoto');
		$this->sesstatus = $this->session->userdata('status');
		$this->sesuserlevel = $this->session->userdata('userslevel');

		if ($this->sesstatus != 'login')
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "Kategori";
		$data['judul_top'] = "Kategori | Sistem Informasi Akademik";

		$data['kategori_view'] = $this->Kategori_model->kategori_view();

		


		$data['content'] ='v_kategori/index';
		$this->load->view('template',$data);
	}

	function kategori_add()
	{
			

			$params = array(
				'kategori_nama'=>$this->input->post('kategori_nama'),
				'user_id'=>$this->sesid
			);

			$this->Kategori_model->kategori_add($params);
			redirect('kategori');
	}


	function kategori_edit($kategori_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "Kategori";
		$data['judul_top'] = "Kategori | Sistem Informasi Akademik";
		
	
		$data['kategori'] = $this->Kategori_model->kategori_getid($kategori_id);
		$data['content'] ='v_kategori/edit';
		
		$this->load->view('template',$data);
	}

	function kategori_update($kategori_id){
		$params = array (
			
			'kategori_nama'=>$this->input->post('kategori_nama'),
			'user_id'=>$this->sesid
						);

		$this->Kategori_model->kategori_update($kategori_id, $params);
		redirect('kategori');
	}

	function kategori_delete($kategori_id)
	{
		$kategori = $this->Kategori_model->kategori_getid($kategori_id);

		if(isset($kategori['kategori_id']))
		{

			$this->Kategori_model->kategori_delete($kategori_id);
			redirect('kategori');

		} else {

			show_error('');
		}
	
	}

}
?>