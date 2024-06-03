<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {

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
		$data['judul'] = "Donatur";
		$data['judul_top'] = "Donatur | Masjid At - Taqwa Gabugan";
		$data['donatur_view'] = $this->Donatur_model->donatur_view();

		$data['donasi_view'] = $this->Donasi_model->donasi_view();
		//$data['level_view'] = $this->Level_model->level_view();
		$data['content'] ='v_donatur/index';
		$this->load->view('template',$data);
	}

	function donatur_add()
	{
		$tanggal = date('Y-m-d');
		$donatur_tanggal = $this->input->post('donatur_tanggal');
        $donatur_tanggal_edit = date('Y-m-d', strtotime($donatur_tanggal ));

				$params = array(
						
					'donatur_nama'=>$this->input->post('donatur_nama'),
					'donatur_jumlah'=>$this->input->post('donatur_jumlah'),
					'donatur_rekening' =>$this->input->post('donatur_rekening'),
					'donatur_tanggal' =>$donatur_tanggal_edit,
					'donasi_id' => $this->input->post('donasi_id'),
					'created_date' =>$tanggal,
					'created_by' => $this->sesnama
					
				);

				$this->Donatur_model->donatur_add($params);
				redirect('donatur');
			

		
	}


	function donatur_edit($donatur_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "Donatur - UPDATE DATA";
		$data['judul_top'] = "Donatur | Masjid At - Taqwa Gabugan";
		//$data['level_view'] = $this->Level_model->level_view();
		//$data['ses_level'] = $this->sesuserlevel;
		$data['donasi_view'] = $this->Donasi_model->donasi_view();
		$data['donatur'] = $this->Donatur_model->donatur_getid($donatur_id);
		$data['content'] ='v_donatur/edit';
		
		$this->load->view('template',$data);
	}

	function donatur_update($donatur_id){

		$tanggal = date('Y-m-d');
		$tmt_edit = date('Y-m-d', strtotime($tmt ));
		$params = array(
				'donatur_nama'=>$this->input->post('donatur_nama'),
				'donatur_jumlah'=>$this->input->post('donatur_jumlah'),
				'donatur_rekening' =>$this->input->post('donatur_rekening'),
				'donatur_tanggal' =>$this->input->post('donatur_tanggal'),
				'donasi_id' => $this->input->post('donasi_id'),
				'modified_date' =>$tanggal,
				'modified_by' => $this->sesnama
			);

		$this->Donatur_model->donatur_update($donatur_id, $params);
		redirect('donatur');
	}


	




	function donatur_delete($donatur_id)
	{
		$donatur = $this->Donatur_model->donatur_getid($donatur_id);

		if(isset($donatur['donatur_id']))
		{

			$this->Donatur_model->donatur_delete($donatur_id);
			redirect('donatur');

		} else {

			show_error('');
		}
	
	}

}
?>