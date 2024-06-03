<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

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
		$data['judul'] = "divisi";
		$data['judul_top'] = "divisi | Sistem Informasi Akademik";
		$data['pageM'] = 'master';
		$data['page']  = 'divisi_master';

		$data['divisi_view'] = $this->Divisi_model->divisi_view();

		


		$data['content'] ='v_divisi/index';
		$this->load->view('template',$data);
	}

	function divisi_add()
	{
			

			$params = array(
				'divisi_nama'=>$this->input->post('divisi_nama'),
				'divisi_ket'=>$this->input->post('divisi_ket'),
				'user_id'=>$this->sesid
			);

			$this->Divisi_model->divisi_add($params);
			redirect('divisi');
	}


	function divisi_edit($divisi_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "divisi";
		$data['judul_top'] = "divisi | Sistem Informasi Akademik";
		$data['pageM'] = 'master';
		$data['page']  = 'divisi_master';
		
	
		$data['divisi'] = $this->Divisi_model->divisi_getid($divisi_id);
		$data['content'] ='v_divisi/edit';
		
		$this->load->view('template',$data);
	}

	function divisi_update($divisi_id){
		$params = array (
			
			'divisi_nama'=>$this->input->post('divisi_nama'),
			'divisi_ket'=>$this->input->post('divisi_ket'),
			'user_id'=>$this->sesid
						);

		$this->Divisi_model->divisi_update($divisi_id, $params);
		redirect('divisi');
	}

	function divisi_delete($divisi_id)
	{
		$divisi = $this->Divisi_model->divisi_getid($divisi_id);

		if(isset($divisi['divisi_id']))
		{

			$this->Divisi_model->divisi_delete($divisi_id);
			redirect('divisi');

		} else {

			show_error('');
		}
	
	}

}
?>