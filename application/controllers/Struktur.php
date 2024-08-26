<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	function __construct()

	{
		parent::__construct();
		// $this->sesnama = $this->session->userdata('usersnama');
		// $this->sesjabatan = $this->session->userdata('usersjabatan');
		// $this->sesphoto = $this->session->userdata('usersphoto');
		// $this->sesstatus = $this->session->userdata('status');
		// $this->sesuserlevel = $this->session->userdata('userslevel');

		
	}

	public function index()

	{
		// $data['ses_nama'] = $this->sesnama;
		// $data['ses_jabatan'] = $this->sesjabatan;
		// $data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "Dashboard";
		$data['judul_top'] = "DASHBOARD | Pandawa Regency 2";
		// $data['ses_level'] = $this->sesuserlevel;
		// $data['kegiatan_view'] = $this->Dashboard_model->kegiatan_view();
		// $data['kegiatan_sidebar_view'] = $this->Dashboard_model->kegiatan_sidebar_view();
		//$data['divisi_view'] = $this->Dashboard_model->divisi_view();
		
		
		$data['divisi_view'] = $this->Divisi_model->divisi_view();
		//$data['kegiatan_kategori_view'] = $this->Kegiatan_model->kegiatan_kategori_view();

		// $data['jumlah_kegiatan'] = $this->Profile_model->jumlah_kegiatan();
		// $data['jumlah_divisi'] = $this->Profile_model->jumlah_divisi();
		// $data['jumlah_donatur'] = $this->Profile_model->jumlah_donatur();

		$data['topbar'] = 'Struktur';

		$data['content'] ='v_team/index';
		$this->load->view('template',$data);
	}


	function detail($id)

	{
		// $data['ses_nama'] = $this->sesnama;
		// $data['ses_jabatan'] = $this->sesjabatan;
		// $data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "Dashboard";
		$data['judul_top'] = "DASHBOARD | Masjid At - Taqwa Gabugan";
		//$data['ses_level'] = $this->sesuserlevel;
		$data['kegiatan_view'] = $this->Dashboard_model->kegiatan_view();
		$data['kegiatan_sidebar_view'] = $this->Dashboard_model->kegiatan_sidebar_view();
		//$data['divisi_view'] = $this->Dashboard_model->divisi_view();
		$data['divisi_view'] = $this->Divisi_model->divisi_view();
		$data['divisi_detail'] = $this->Divisi_model->divisi_detail($id);


		$data['kegiatan_kategori_view'] = $this->Kegiatan_model->kegiatan_kategori_view();

		// $data['jumlah_kegiatan'] = $this->Profile_model->jumlah_kegiatan();
		// $data['jumlah_divisi'] = $this->Profile_model->jumlah_divisi();
		// $data['jumlah_donatur'] = $this->Profile_model->jumlah_donatur();

		$data['topbar'] = 'divisi';

		$data['content'] ='v_divisi/detail_divisi';
		$this->load->view('template',$data);
	}




	
}
?>