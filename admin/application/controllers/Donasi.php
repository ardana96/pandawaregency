<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

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
		$data['judul'] = "DONASI";
		$data['judul_top'] = "DONASI | Masjid At - Taqwa Gabugan";
		$data['donasi_view'] = $this->Donasi_model->donasi_view();
		$data['pageM'] = 'donasi_m';
		$data['page']  = 'donasi';

		$data['divisi_view'] = $this->Divisi_model->divisi_view();
		$data['level_view'] = $this->Level_model->level_view();
		$data['content'] ='v_donasi/index';
		$this->load->view('template',$data);
	}

	function donasi_add()
	{
		$tanggal = date('Y-m-d');
		$config['upload_path']      = './images/donasi';
        $config['allowed_types']    = 'jpg|jpeg';
        $config['file_name']        = 'donasi-'.trim(str_replace(" ","",date('dmYHis')));
        //$config['file_name']        = $this->input->post('filephoto');
        $config['max_size']         = '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!empty($_FILES['filephoto']['name']))
		{
			if ($this->upload->do_upload('filephoto'))
            {
    	        $gbr = $this->upload->data();

                // $config['image_library']='gd2';
                // $config['source_image']='./images/user'.$gbr['file_name'];
                // $config['create_thumb']= FALSE;
                // $config['maintain_ratio']= FALSE;
                // $config['quality']= '70%';
                // $config['new_image']= './images/produk'.$gbr['file_name'];
                // $this->load->library('image_lib', $config);
                // $this->image_lib->resize();

				$params = array(
				    	
						
						'donasi_nama'=>$this->input->post('donasi_nama'),
						'donasi_ringkasan'=>$this->input->post('donasi_ringkasan'),
						'donasi_isi' =>$this->input->post('donasi_isi'),
						'donasi_target' =>$this->input->post('donasi_target'),
						'priority' => $this->input->post('priority'),
						'donasi_photo' => $gbr['file_name'],
						'created_date' =>$tanggal,
						'created_by' => $this->sesnama


						
				);

				$this->Donasi_model->donasi_add($params);
				redirect('donasi');
			}

		} else {

				redirect('donasi');
		}
	}


	function donasi_edit($donasi_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "DONASI - UPDATE DATA";
		$data['judul_top'] = "DONASI | Masjid At - Taqwa Gabugan";
		$data['pageM'] = 'donasi_m';
		$data['page']  = 'donasi';
		//$data['level_view'] = $this->Level_model->level_view();
		//$data['ses_level'] = $this->sesuserlevel;

		$data['donasi'] = $this->Donasi_model->donasi_getid($donasi_id);
		$data['content'] ='v_donasi/edit';
		
		$this->load->view('template',$data);
	}

	function donasi_update($donasi_id){

		$tanggal = date('Y-m-d');
		$params = array(
				'donasi_nama'=>$this->input->post('donasi_nama'),
				'donasi_ringkasan'=>$this->input->post('donasi_ringkasan'),
				'donasi_isi' =>$this->input->post('donasi_isi'),
				'donasi_target' =>$this->input->post('donasi_target'),
				'priority' => $this->input->post('priority'),
				//'donasi_photo' => $gbr['file_name'],
				'modified_date' =>$tanggal,
				'modified_by' => $this->sesnama
			);

		$this->Donasi_model->donasi_update($donasi_id, $params);
		redirect('donasi');
	}


	function donasi_edit_photo($donasi_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "DONASI - UPDATE PHOTO";
		$data['judul_top'] = "DONASI | Masjid At - Taqwa Gabugan";
		$data['level_view'] = $this->Level_model->level_view();
		$data['pageM'] = 'donasi_m';
		$data['page']  = 'donasi';
		//$data['ses_level'] = $this->sesuserlevel;

		$data['donasi'] = $this->Donasi_model->donasi_getid($donasi_id);
		$data['content'] ='v_donasi/edit_photo';
		
		$this->load->view('template',$data);
	}

	function donasi_update_photo($donasi_id)
	{
		$donasi = $this->Donasi_model->donasi_getid($donasi_id);
		//var_dump($user_photo);
		//unlink('images/user/'.$donasi_photo);
		
      						
		if(isset($donasi['donasi_id']))
		{



                $config['upload_path']      = './images/donasi';
                $config['allowed_types']    = 'jpg|jpeg|JPG';
                $config['file_name']        = 'donasi-'.trim(str_replace(" ","",date('dmYHis')));
                $config['max_size']         = 10000;
                 $config['max_width']       = 5000;
                $config['max_height']       = 5000;
		 
		        $this->load->library('upload');
		        $this->upload->initialize($config);

		       	if(!empty($_FILES['filephoto']['name']))
		        { 
			        if (!$this->upload->do_upload('filephoto'))
			        {
				        $error = array('error' => $this->upload->display_errors());
				        $this->load->view('v_donasi/edit_photo', $error);
			            
			        } else {

		    	        $gbr = $this->upload->data();

		                // $config['image_library']='gd2';
		                // $config['source_image']='./images/divisi'.$gbr['file_name'];
		                // $config['create_thumb']= FALSE;
		                // $config['maintain_ratio']= FALSE;
		                // $config['quality']= '100%';
		                // $config['new_image']= './images/divisi'.$gbr['file_name'];
		                // $this->load->library('image_lib', $config);
		                // $this->image_lib->resize();



						$params = array(
							'donasi_photo' => $gbr['file_name']
				    	);

				    	
			        }

			      
			        
			        $this->Donasi_model->donasi_update($donasi_id,$params);
			        $lok='images/donasi/'.$donasi['donasi_photo'];
					var_dump($lok);
       				unlink($lok);
					redirect('donasi/donasi_edit/'.$donasi_id);

		        } else {

					redirect('donasi/donasi_edit/'.$donasi_id);					
					
		        }

		        

		} else {

			show_error('');
		}
	}




	function donasi_delete($donasi_id, $donasi_photo)
	{
		$donasi = $this->Donasi_model->donasi_getid($donasi_id);

		if(isset($donasi['donasi_id']))
		{

			$this->Donasi_model->donasi_delete($donasi_id);
			unlink('images/donasi/'.$donasi_photo);
			redirect('donasi');

		} else {

			show_error('');
		}
	
	}

}
?>