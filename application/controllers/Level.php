<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	function __construct()

	{
		parent::__construct();
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
		$data['judul'] = "Level";
		$data['judul_top'] = "Level | Sistem Informasi Akademik";

		$data['level_view'] = $this->Level_model->level_view();

		


		$data['content'] ='v_level/index';
		$this->load->view('template',$data);
	}

	function level_add()
	{
			

			$params = array(
				'level_nama'=>$this->input->post('level_nama'),
				'level_jabatan'=>$this->input->post('level_jabatan')
			);

			$this->Level_model->level_add($params);
			redirect('level');
	}


	function level_edit($level_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "Level";
		$data['judul_top'] = "Level | Sistem Informasi Akademik";
		
	
		$data['level'] = $this->Level_model->level_getid($level_id);
		$data['content'] ='v_level/edit';
		
		$this->load->view('template',$data);
	}

	function level_update($level_id){
		$params = array (
			
			'level_nama'=>$this->input->post('level_nama'),
			'level_jabatan'=>$this->input->post('level_jabatan')
						);

		$this->Level_model->level_update($level_id, $params);
		redirect('level');
	}

	function level_delete($level_id)
	{
		$level = $this->Level_model->level_getid($level_id);

		if(isset($level['level_id']))
		{

			$this->Level_model->level_delete($level_id);
			redirect('level');

		} else {

			show_error('');
		}
	
	}

}
?>