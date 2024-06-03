<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bumm extends CI_Controller {

	function __construct()

	{
		parent::__construct();
		// $this->sesnama = $this->session->userdata('usersnama');
		// $this->sesjabatan = $this->session->userdata('usersjabatan');
		// $this->sesphoto = $this->session->userdata('usersphoto');
		// $this->sesstatus = $this->session->userdata('status');
		// $this->sesuserlevel = $this->session->userdata('userslevel');
		$this->load->library('pagination');
		
	}

	public function index()

	{
		// $data['ses_nama'] = $this->sesnama;
		// $data['ses_jabatan'] = $this->sesjabatan;
		// $data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "Dashboard";
		$data['judul_top'] = "DASHBOARD | Masjid At - Taqwa Gabugan";
		// $data['ses_level'] = $this->sesuserlevel;
		// $data['kegiatan_view'] = $this->Dashboard_model->kegiatan_view();
		// $data['kegiatan_sidebar_view'] = $this->Dashboard_model->kegiatan_sidebar_view();
		// $data['divisi_view'] = $this->Dashboard_model->divisi_view();
		//$data['kegiatan_view'] = $this->Kegiatan_model->kegiatan_view();
		$data['kegiatan_kategori_view'] = $this->Kegiatan_model->kegiatan_kategori_view();
		//untuk sidebar popular
		$data['kegiatan_sidebar_view'] = $this->Dashboard_model->kegiatan_sidebar_view();

		//untuk sidebar category Division
		$data['divisi_view'] = $this->Dashboard_model->divisi_view();

		// $data['jumlah_kegiatan'] = $this->Profile_model->jumlah_kegiatan();
		// $data['jumlah_kegiatan'] = $this->Profile_model->jumlah_kegiatan();
		// $data['jumlah_donatur'] = $this->Profile_model->jumlah_donatur();

		$data['topbar'] = 'kegiatan';




		  //konfigurasi pagination
        $config['base_url'] = site_url('bumm/index'); //site url
        $config['total_rows'] = $this->db->count_all('bumm'); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

         // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Bumm_model->bumm_view($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();






		$data['content'] ='v_bumm/index';
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
		$data['divisi_view'] = $this->Dashboard_model->divisi_view();
		$data['donasi_view'] = $this->Donasi_model->donasi_view();
		$data['bumm_detail'] = $this->Bumm_model->bumm_detail($id);
		$data['bumm_sidebar'] = $this->Bumm_model->bumm_sidebar();


		$data['kegiatan_kategori_view'] = $this->Kegiatan_model->kegiatan_kategori_view();

		// $data['jumlah_kegiatan'] = $this->Profile_model->jumlah_kegiatan();
		// $data['jumlah_donasi'] = $this->Profile_model->jumlah_donasi();
		// $data['jumlah_donatur'] = $this->Profile_model->jumlah_donatur();

		$data['topbar'] = 'donasi';

		$data['content'] ='v_bumm/detail_bumm';
		$this->load->view('template',$data);
	}

}