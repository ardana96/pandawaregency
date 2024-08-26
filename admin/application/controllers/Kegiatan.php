<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

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
		$data['judul'] = "Kegiatan";
		$data['judul_top'] = "Kegiatan | Masjid At - Taqwa Gabugan";
		$data['kegiatan_view'] = $this->Kegiatan_model->kegiatan_view();
		$data['pageM'] = 'kegiatan';
		$data['page']  = '';

		$data['kategori_view'] = $this->Kegiatan_model->kategori_view();
		//$data['level_view'] = $this->Level_model->level_view();
		$data['content'] ='v_kegiatan/index';
		$this->load->view('template',$data);
	}

	function kegiatan_add()
	{
		$tanggal = date('Y-m-d');
		$kegiatan_tanggal = $this->input->post('kegiatan_tanggal');
        $kegiatan_tanggal_edit = date('Y-m-d', strtotime($kegiatan_tanggal));

		$config['upload_path']      = './images/kegiatan';
        $config['allowed_types']    = 'jpg|jpeg';
        $config['file_name']        = 'kegiatan-'.trim(str_replace(" ","",date('dmYHis')));
        //$config['file_name']        = $this->input->post('filephoto');
        $config['max_size']         = '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!empty($_FILES['filephoto']['name']))
		{
			//var_dump($this->upload->do_upload('filephoto'));
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
				    	
						
						'kegiatan_nama'=>$this->input->post('kegiatan_nama'),
						'kegiatan_ringkasan'=>$this->input->post('kegiatan_ringkasan'),
						'kegiatan_isi' =>$this->input->post('kegiatan_isi'),
						'kegiatan_tanggal' =>$kegiatan_tanggal_edit,
						'kategori_id' =>$this->input->post('kategori_id'),
						'kegiatan_photo' => $gbr['file_name'],
						'created_date' =>$tanggal,
						'created_by' => $this->sesnama,
						'modified_date' => $tanggal,
						'modified_by'=> $this->sesnama
						
				);

				$this->Kegiatan_model->kegiatan_add($params);
				redirect('kegiatan');
			}

		} else {

				redirect('kegiatan');
		}
	}


	function kegiatan_edit($kegiatan_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "kegiatan - UPDATE DATA";
		$data['judul_top'] = "kegiatan | Masjid At - Taqwa Gabugan";
		//$data['level_view'] = $this->Level_model->level_view();
		//$data['ses_level'] = $this->sesuserlevel;
		$data['kategori_view'] = $this->Kegiatan_model->kategori_view();
		$data['kegiatan'] = $this->Kegiatan_model->kegiatan_getid($kegiatan_id);
		$data['content'] ='v_kegiatan/edit';

		$data['pageM'] = 'kegiatan';
		$data['page']  = '';
		
		$this->load->view('template',$data);
	}

	function kegiatan_update($kegiatan_id){

		$tanggal = date('Y-m-d');
		$kegiatan_tanggal = $this->input->post('kegiatan_tanggal');
        $kegiatan_tanggal_edit = date('Y-m-d', strtotime($kegiatan_tanggal));
		$params = array(
				'kegiatan_nama'=>$this->input->post('kegiatan_nama'),
				'kegiatan_ringkasan'=>$this->input->post('kegiatan_ringkasan'),
				'kegiatan_isi' =>$this->input->post('kegiatan_isi'),
				'kegiatan_tanggal' =>$kegiatan_tanggal_edit,
				'kategori_id' =>$this->input->post('kategori_id'),
						
				'modified_date' =>$tanggal,
				'modified_by' => $this->sesnama
			);

		$this->Kegiatan_model->kegiatan_update($kegiatan_id, $params);
		redirect('kegiatan');
	}


	function kegiatan_edit_photo($kegiatan_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "kegiatan - UPDATE PHOTO";
		$data['judul_top'] = "kegiatan | Masjid At - Taqwa Gabugan";
		$data['level_view'] = $this->Level_model->level_view();
		//$data['ses_level'] = $this->sesuserlevel;

		$data['kegiatan'] = $this->Kegiatan_model->kegiatan_getid($kegiatan_id);
		$data['content'] ='v_kegiatan/edit_photo';
		
		$this->load->view('template',$data);
	}

	function kegiatan_update_photo($kegiatan_id)
	{
		$kegiatan = $this->Kegiatan_model->kegiatan_getid($kegiatan_id);
		//var_dump($user_photo);
		//unlink('images/user/'.$kegiatan_photo);
		
      						
		if(isset($kegiatan['kegiatan_id']))
		{



                $config['upload_path']      = './images/kegiatan';
                $config['allowed_types']    = 'jpg|jpeg|JPG';
                $config['file_name']        = 'kegiatan-'.trim(str_replace(" ","",date('dmYHis')));
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
				        $this->load->view('v_kegiatan/edit_photo', $error);
			            
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
							'kegiatan_photo' => $gbr['file_name']
				    	);

				    	
			        }

			      
			        
			        $this->Kegiatan_model->kegiatan_update($kegiatan_id,$params);
			        $lok='images/kegiatan/'.$kegiatan['kegiatan_photo'];
					var_dump($lok);
       				unlink($lok);
					redirect('kegiatan/kegiatan_edit/'.$kegiatan_id);

		        } else {

					redirect('kegiatan/kegiatan_edit/'.$kegiatan_id);					
					
		        }

		        

		} else {

			show_error('');
		}
	}




	function kegiatan_delete($kegiatan_id, $kegiatan_photo)
	{
		$kegiatan = $this->Kegiatan_model->kegiatan_getid($kegiatan_id);

		if(isset($kegiatan['kegiatan_id']))
		{

			$this->Kegiatan_model->kegiatan_delete($kegiatan_id);
			unlink('images/kegiatan/'.$kegiatan_photo);
			redirect('kegiatan');

		} else {

			show_error('');
		}
	
	}

}
?>