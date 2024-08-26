<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi_detail extends CI_Controller {

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
		$data['judul'] = "DIVISI";
		$data['judul_top'] = "DIVISI | Masjid At - Taqwa Gabugan";
		$data['divisi_detail_view'] = $this->Divisi_detail_model->divisi_detail_view();
		$data['pageM'] = 'divisi';
		$data['page']  = '';

		$data['divisi_view'] = $this->Divisi_model->divisi_view();
		$data['level_view'] = $this->Level_model->level_view();
		$data['content'] ='v_divisi_detail/index';
		$this->load->view('template',$data);
	}

	function divisi_detail_add()
	{
		$tanggal = date('Y-m-d');
		$tes = 'tes';
		$config['upload_path']      = './images/divisi';
        $config['allowed_types']    = 'jpg|jpeg|png';
        $config['file_name']        = 'divisi-'.trim(str_replace(" ","",date('dmYHis')));
        //$config['file_name']        = $this->input->post('filephoto');
        $config['max_size']         = '10000';

		 //var_dump($this->input->post('divisi_id'));
		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!empty($_FILES['filephoto']['name']))
		{
			//var_dump($this->upload->do_upload());
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
				    	
						
						'divisi_det_ringkasan'=>$this->input->post('divisi_det_ringkasan'),
						//'divisi_det_isi'=>$this->input->post('divisi_det_isi'),
						'divisi_det_isi'=>$tes,
						'created_date' =>$tanggal,
						'created_by' => $this->sesnama,
						'modified_date' =>$tanggal,
						'modified_by' => $this->sesnama,
						'divisi_id'=>$this->input->post('divisi_id'),
						'divisi_det_photo' => $gbr['file_name']
				);

			
				$this->Divisi_detail_model->divisi_detail_add($params);
				//var_dump($this->Divisi_detail_model->divisi_detail_add($params));
				redirect('divisi_detail');
			}else{
				//var_dump('test');

			}

		} else {

				redirect('divisi_detail');
		}
	}


	function divisi_detail_edit($divisi_detail_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "USER";
		$data['judul_top'] = "USER | Masjid At - Taqwa Gabugan";
		$data['level_view'] = $this->Level_model->level_view();
		$data['pageM'] = 'divisi';
		$data['page']  = '';
		//$data['ses_level'] = $this->sesuserlevel;
		$data['divisi_view'] = $this->Divisi_model->divisi_view();
		$data['divisi_detail'] = $this->Divisi_detail_model->divisi_detail_getid($divisi_detail_id);
		$data['content'] ='v_divisi_detail/edit';
		
		$this->load->view('template',$data);
	}

	function divisi_detail_update($divisi_detail_id){

		$tanggal = date('Y-m-d');
		$params = array(
				'divisi_id' => $this->input->post('divisi_id'),
				'divisi_det_ringkasan'=>$this->input->post('divisi_det_ringkasan'),
				'divisi_det_isi'=>$this->input->post('divisi_det_isi'),
				'modified_date' =>$tanggal,
				'modified_by' => $this->sesnama,
			);

		$this->Divisi_detail_model->divisi_detail_update($divisi_detail_id, $params);
		redirect('divisi_detail');
	}


	function divisi_detail_edit_photo($divisi_detail_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_jabatan'] = $this->sesjabatan;
		$data['ses_photo'] = $this->sesphoto;
		$data['judul'] = "USER";
		$data['judul_top'] = "USER | Masjid At - Taqwa Gabugan";
		$data['level_view'] = $this->Level_model->level_view();
		$data['pageM'] = 'divisi';
		$data['page']  = '';
		//$data['ses_level'] = $this->sesuserlevel;

		$data['divisi_detail'] = $this->Divisi_detail_model->divisi_detail_getid($divisi_detail_id);
		$data['content'] ='v_divisi_detail/edit_photo';
		
		$this->load->view('template',$data);
	}

	function divisi_detail_update_photo($divisi_detail_id)
	{
		$divisi_detail = $this->Divisi_detail_model->divisi_detail_getid($divisi_detail_id);
		//var_dump($user_photo);
		//unlink('images/user/'.$divisi_detail_photo);
		
      						
		if(isset($divisi_detail['divisi_det_id']))
		{



                $config['upload_path']      = './images/divisi';
                $config['allowed_types']    = 'jpg|jpeg|JPG';
                $config['file_name']        = 'divisi-'.trim(str_replace(" ","",date('dmYHis')));
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
				        $this->load->view('v_divisi_detail/edit_photo', $error);
			            
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
							'divisi_det_photo' => $gbr['file_name']
				    	);

				    	
			        }

			      
			        
			        $this->Divisi_detail_model->divisi_detail_update($divisi_detail_id,$params);
			        $lok='images/divisi/'.$divisi_detail['divisi_det_photo'];
					//var_dump($lok);
       				//unlink($lok);
					redirect('divisi_detail/divisi_detail_edit/'.$divisi_detail_id);

		        } else {

					redirect('divisi_detail/divisi_detail_edit/'.$divisi_detail_id);					
					
		        }

		        

		} else {

			show_error('');
		}
	}




	function divisi_detail_delete($divisi_detail_id, $divisi_detail_photo)
	{
		$divisi_detail = $this->Divisi_detail_model->divisi_detail_getid($divisi_detail_id);

		if(isset($divisi_detail['divisi_det_id']))
		{

			$this->Divisi_detail_model->divisi_detail_delete($divisi_detail_id);
			unlink('images/divisi/'.$divisi_detail_photo);
			redirect('divisi_detail');

		} else {

			show_error('');
		}
	
	}

}
?>