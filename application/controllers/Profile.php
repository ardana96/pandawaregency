<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()

	{
		parent::__construct();
		$this->sesnama = $this->session->userdata('usersnama');
		$this->sesjabatan = $this->session->userdata('usersjabatan');
		$this->sesphoto = $this->session->userdata('usersphoto');
		$this->sesstatus = $this->session->userdata('status');
		$this->sesuserlevel = $this->session->userdata('userslevel');

		
	}

	public function index()

	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "Dashboard";
		$data['judul_top'] = "DASHBOARD | Masjid At - Taqwa Gabugan";
		$data['ses_level'] = $this->sesuserlevel;
		$data['kegiatan_view'] = $this->Dashboard_model->kegiatan_view();
		$data['kegiatan_sidebar_view'] = $this->Dashboard_model->kegiatan_sidebar_view();
		$data['kegiatan_kategori_view'] = $this->Kegiatan_model->kegiatan_kategori_view();
		$data['divisi_view'] = $this->Dashboard_model->divisi_view();
		$data['bumm_view'] = $this->Dashboard_model->bumm_view();

		$data['jumlah_kegiatan'] = $this->Profile_model->jumlah_kegiatan();
		$data['jumlah_donasi'] = $this->Profile_model->jumlah_donasi();
		$data['jumlah_donatur'] = $this->Profile_model->jumlah_donatur();

		$data['topbar'] = 'profile';

		$data['content'] ='v_profile/index';
		$this->load->view('template',$data);
	}

	
}
?>