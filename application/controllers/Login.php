<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->load->view('v_login/index');
	}

	function auth()
	{
		$username = $this->input->post('username');
		$password = MD5($this->input->post('password'));

		$Cek = $this->Login_model->cek_login_users($username, $password);

		if ($Cek >= 1)
		{
			$users = $this->Login_model->get_data_users($username,$password);
			foreach ($users as $data) 
			{
			$this->session->set_userdata('usersid', $data->user_id);
			$this->session->set_userdata('usersnama', $data->user_name);
			$this->session->set_userdata('usersjabatan', $data->level_jabatan);
			//$this->session->set_userdata('userslevel', $data->level_id);
			$this->session->set_userdata('usersphoto', $data->user_photo);
			$this->session->set_userdata('status','login' );

			$level = $data->level_id;

				
					redirect('dashboard');
			

			}
		}	else {

			redirect('login');
		}
		

	}
}
?>