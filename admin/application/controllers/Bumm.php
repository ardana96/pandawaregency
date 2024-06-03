<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bumm extends CI_Controller {

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
		$data['judul'] = "BUMM";
		$data['judul_top'] = "BUMM | Masjid At - Taqwa Gabugan";
		$data['bumm_view'] = $this->Bumm_model->bumm_view();
		$data['pageM'] = 'bumm';
		$data['page']  = '';

		$data['kategori_view'] = $this->Bumm_model->kategori_view();
		$data['level_view'] = $this->Level_model->level_view();  
		$data['content'] ='v_bumm/index';
		$this->load->view('template',$data);
	}

	function bumm_add()
	{
		$tanggal = date('Y-m-d');
		$config['upload_path']      = './images/bumm';
        $config['allowed_types']    = 'jpg|jpeg';
        $config['file_name']        = 'bumm-'.trim(str_replace(" ","",date('dmYHis')));
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
				    	
						
						'bumm_produk'=>$this->input->post('bumm_produk'),
						'bumm_harga'=>$this->input->post('bumm_harga'),
						'bumm_pemilik'=>$this->input->post('bumm_pemilik'),
						'bumm_ringkasan'=>$this->input->post('bumm_ringkasan'),
						'bumm_isi' =>$this->input->post('bumm_isi'),
						'kategori_id' =>$this->input->post('kategori_id'),
						'bumm_photo' => $gbr['file_name'],
						'created_date' =>$tanggal,
						'created_by' => $this->sesnama
						
				);

				$this->Bumm_model->bumm_add($params);
				redirect('bumm');
			}

		} else {

				redirect('bumm');
		}
	}


	function bumm_edit($bumm_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "BUMM - UPDATE DATA";
		$data['judul_top'] = "BUMM | Masjid At - Taqwa Gabugan";
		$data['pageM'] = 'bumm';
		$data['page']  = '';
		//$data['level_view'] = $this->Level_model->level_view();
		//$data['ses_level'] = $this->sesuserlevel;
		$data['kategori_view'] = $this->Bumm_model->kategori_view();
		$data['bumm'] = $this->Bumm_model->bumm_getid($bumm_id);
		$data['content'] ='v_bumm/edit';
		
		$this->load->view('template',$data);
	}

	function bumm_update($bumm_id){

		$tanggal = date('Y-m-d');
		$params = array(
				'bumm_produk'=>$this->input->post('bumm_produk'),
				'bumm_harga'=>$this->input->post('bumm_harga'),
				'bumm_pemilik'=>$this->input->post('bumm_pemilik'),
				'bumm_ringkasan'=>$this->input->post('bumm_ringkasan'),
				'bumm_isi' =>$this->input->post('bumm_isi'),
				'kategori_id' =>$this->input->post('kategori_id'),
						
				'modified_date' =>$tanggal,
				'modified_by' => $this->sesnama
			);

		$this->Bumm_model->bumm_update($bumm_id, $params);
		redirect('bumm');
	}


	function bumm_edit_photo($bumm_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "BUMM - UPDATE PHOTO";
		$data['judul_top'] = "BUMM | Masjid At - Taqwa Gabugan";
		$data['pageM'] = 'bumm';
		$data['page']  = '';
		$data['level_view'] = $this->Level_model->level_view();
		//$data['ses_level'] = $this->sesuserlevel;

		$data['bumm'] = $this->Bumm_model->bumm_getid($bumm_id);
		$data['content'] ='v_bumm/edit_photo';
		
		$this->load->view('template',$data);
	}

	function bumm_update_photo($bumm_id)
	{
		$bumm = $this->Bumm_model->bumm_getid($bumm_id);
		//var_dump($user_photo);
		//unlink('images/user/'.$bumm_photo);
		
      						
		if(isset($bumm['bumm_id']))
		{



                $config['upload_path']      = './images/bumm';
                $config['allowed_types']    = 'jpg|jpeg|JPG';
                $config['file_name']        = 'bumm-'.trim(str_replace(" ","",date('dmYHis')));
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
				        $this->load->view('v_bumm/edit_photo', $error);
			            
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
							'bumm_photo' => $gbr['file_name']
				    	);

				    	
			        }

			      
			        
			        $this->Bumm_model->bumm_update($bumm_id,$params);
			        $lok='images/bumm/'.$bumm['bumm_photo'];
					var_dump($lok);
       				unlink($lok);
					redirect('bumm/bumm_edit/'.$bumm_id);

		        } else {

					redirect('bumm/bumm_edit/'.$bumm_id);					
					
		        }

		        

		} else {

			show_error('');
		}
	}




	function bumm_delete($bumm_id, $bumm_photo)
	{
		$bumm = $this->Bumm_model->bumm_getid($bumm_id);

		if(isset($bumm['bumm_id']))
		{

			$this->Bumm_model->bumm_delete($bumm_id);
			unlink('images/bumm/'.$bumm_photo);
			redirect('bumm');

		} else {

			show_error('');
		}
	
	}

	// public function resizeImage($filename)
 //   {
 //      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $filename;
 //      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/thumbnail/';
 //      $config_manip = array(
 //          'image_library' => 'gd2',
 //          'source_image' => $source_path,
 //          'new_image' => $target_path,
 //          'maintain_ratio' => TRUE,
 //          'create_thumb' => TRUE,
 //          'thumb_marker' => '_thumb',
 //          'width' => 150,
 //          'height' => 150
 //      );


 //      $this->load->library('image_lib', $config_manip);
 //      if (!$this->image_lib->resize()) {
 //          echo $this->image_lib->display_errors();
 //      }


 //      $this->image_lib->clear();
 //   }

}
?>