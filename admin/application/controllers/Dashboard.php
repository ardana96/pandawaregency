<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['judul'] = "Dashboard";
		$data['judul_top'] = "DASHBOARD | Masjid At - Taqwa Gabugan";
		$data['ses_level'] = $this->sesuserlevel;
		$data['pageM'] = 'dashboard';
		$data['page']  = '';
		// $data['bumm_count'] = $this->Dashboard_model->bumm_count();
		// $data['kegiatan_count'] = $this->Dashboard_model->kegiatan_count();
		// $data['donasi_count'] = $this->Dashboard_model->donasi_count();
		// $data['donatur_count'] = $this->Dashboard_model->donatur_count();
 
		$data['content'] ='v_dashboard/index';
		$this->load->view('template',$data);
	}

	
}
?>