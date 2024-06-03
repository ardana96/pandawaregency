<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$data['judul'] = "USER";
		$data['judul_top'] = "USER | Masjid At - Taqwa Gabugan";
		$data['users_view'] = $this->Users_model->users_view();
		$data['level_view'] = $this->Level_model->level_view();
		$data['content'] ='v_users/index';
		$this->load->view('template',$data);
	}

	function users_add()
	{
			
		$config['upload_path']      = './images/user';
        $config['allowed_types']    = 'jpg|jpeg';
        $config['file_name']        = 'produk-'.trim(str_replace(" ","",date('dmYHis')));
        //$config['file_name']        = $this->input->post('filephoto');
        $config['max_size']         = '1000';
		 
		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!empty($_FILES['filephoto']['name']))
		{
			if ($this->upload->do_upload('filephoto'))
            {
    	        $gbr = $this->upload->data();

                $config['image_library']='gd2';
                $config['source_image']='./images/user'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '70%';
                $config['new_image']= './images/produk'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

				$params = array(
				    	'level_id'=>$this->input->post('level_id'),
						
						'user_name'=>$this->input->post('users_name'),
						'user_username'=>$this->input->post('users_username'),
						'user_password'=>MD5($this->input->post('users_password')),
						
						'user_aktif'=>'Y',
						
						'user_photo' => $gbr['file_name']
				);

				$this->Users_model->users_add($params);
				redirect('users');
			}

		} else {

				redirect('users');
		}
	}


	function users_edit($users_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "USER";
		$data['judul_top'] = "USER | Masjid At - Taqwa Gabugan";
		$data['level_view'] = $this->Level_model->level_view();
		//$data['ses_level'] = $this->sesuserlevel;

		$data['users'] = $this->Users_model->users_getid($users_id);
		$data['content'] ='v_users/edit';
		
		$this->load->view('template',$data);
	}

	function users_update($users_id){
		$params = array(
				'level_id'=>$this->input->post('level_id'),
				'user_name'=>$this->input->post('users_name'),
				//'users_tingcode'=>$this->input->post('users_tingcode'),
				'user_username'=>$this->input->post('users_username'),
				'user_password'=>MD5($this->input->post('users_password')),
				//'users_photo'=>$this->input->post('users_photo'),
				'user_aktif'=>$this->input->post('users_aktif')
			);

		$this->Users_model->users_update($users_id, $params);
		redirect('users');
	}


	function users_edit_photo($users_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "USER";
		$data['judul_top'] = "USER | Masjid At - Taqwa Gabugan";
		$data['level_view'] = $this->Level_model->level_view();
		//$data['ses_level'] = $this->sesuserlevel;

		$data['users'] = $this->Users_model->users_getid($users_id);
		$data['content'] ='v_users/edit_photo';
		
		$this->load->view('template',$data);
	}

	function users_update_photo($users_id, $users_photo)
	{
		$users = $this->Users_model->users_getid($users_id);
		//var_dump($user_photo);
		//unlink('images/user/'.$users_photo);
		
      						
		if(isset($users['user_id']))
		{



                $config['upload_path']      = './images/user';
                $config['allowed_types']    = 'jpg|jpeg';
                $config['file_name']        = 'produk-'.trim(str_replace(" ","",date('dmYHis')));
                $config['max_size']         = '1000';
		 
		        $this->load->library('upload');
		        $this->upload->initialize($config);

		       	if(!empty($_FILES['filephoto']['name']))
		        { 
			        if (!$this->upload->do_upload('filephoto'))
			        {
				        $error = array('error' => $this->upload->display_errors());
				        $this->load->view('v_users/edit_photo', $error);
			            
			        } else {

		    	        $gbr = $this->upload->data();

		                $config['image_library']='gd2';
		                $config['source_image']='./images/produk'.$gbr['file_name'];
		                $config['create_thumb']= FALSE;
		                $config['maintain_ratio']= FALSE;
		                $config['quality']= '70%';
		                $config['new_image']= './images/produk'.$gbr['file_name'];
		                $this->load->library('image_lib', $config);
		                $this->image_lib->resize();



						$params = array(
							'user_photo' => $gbr['file_name']
				    	);

				    	
			        }

			      
			        
			        $this->Users_model->users_update($users_id,$params);
			        $lok='images/user/'.$users_photo;
					var_dump($lok);
       				unlink($lok);
					redirect('users/users_edit/'.$users_id);

		        } else {

					redirect('users/users_edit/'.$users_id);					
					
		        }

		        

		} else {

			show_error('');
		}
	}




	function users_delete($users_id, $users_photo)
	{
		$users = $this->Users_model->users_getid($users_id);

		if(isset($users['user_id']))
		{

			$this->Users_model->users_delete($users_id);
			unlink('images/user/'.$users_photo);
			redirect('users');

		} else {

			show_error('');
		}
	
	}

}
?>