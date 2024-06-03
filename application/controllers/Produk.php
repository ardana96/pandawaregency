<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct()

	{
		parent::__construct();
		$this->sesnama = $this->session->userdata('usersnama');
		$this->sesusername = $this->session->userdata('usersusername');
		$this->sesstatus = $this->session->userdata('status');
		$this->sesuserlevel = $this->session->userdata('userslevel');
		$this->sesusertingcode = $this->session->userdata('userstingcode');

		if ($this->sesstatus != 'login')
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_username'] = $this->sesusername;
		$data['judul'] = "Produk";
		$data['judul_top'] = "Labcitane";
		$level = $this->sesuserlevel;
		$data['produk_id'] = $this->Produk_model->kode_otomatis();
		
			$data['produk_view'] = $this->Produk_model->produk_view();
			$data['content'] ='v_produk/index_industri';
	




		
		$this->load->view('template',$data);
	}

	function produk_add()
	{


        $config['upload_path']      = './images/produk';
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
                $config['source_image']='./images/produk'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '70%';
                $config['new_image']= './images/produk'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

				$params = array(
				    	'produk_id'=>$this->input->post('produk_id'),
						'produk_nama'=>$this->input->post('produk_nama'),
						'produk_jenis'=>$this->input->post('produk_jenis'),
						'produk_ringkasan'=>$this->input->post('produk_ringkasan'),

						'produk_deskripsi'=>$this->input->post('produk_deskripsi'),
						'produk_status'=>$this->input->post('produk_status'),
						'produk_harga'=>$this->input->post('produk_harga'),
					
						'produk_photo' => $gbr['file_name']
				);

				$this->Produk_model->produk_add($params);
				redirect('produk');
			}

		} else {

				redirect('produk');
		}
	}


	function produk_edit($produk_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_username'] = $this->sesusername;
		$data['judul'] = "fakultas";
		$data['judul_top'] = "fakultas | Sistem Informasi Akademik";
		
		$data['ses_level'] = $this->sesuserlevel;
		$data['produk'] = $this->Produk_model->produk_getid($produk_id);
		$data['content'] ='v_produk/edit';
		
		$this->load->view('template',$data);
	}

	function produk_update($produk_id){
		$params = array (

			'produk_id'=>$this->input->post('produk_id'),
						'produk_nama'=>$this->input->post('produk_nama'),
						'produk_jenis'=>$this->input->post('produk_jenis'),
						'produk_ringkasan'=>$this->input->post('produk_ringkasan'),

						'produk_deskripsi'=>$this->input->post('produk_deskripsi'),
						'produk_status'=>$this->input->post('produk_status'),
						'produk_harga'=>$this->input->post('produk_harga')
			);

		$this->Produk_model->produk_update($produk_id, $params);
		redirect('produk');
	}


	function produk_edit_photo($produk_id)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_username'] = $this->sesusername;
		$data['judul'] = "Ganti Foto Produk";
		
		$data['ses_level'] = $this->sesuserlevel;
		$data['produk'] = $this->Produk_model->produk_getid($produk_id);
		$data['content'] ='v_produk/edit_photo';
		
		$this->load->view('template',$data);
	}

	function produk_update_photo($produk_id)
	{
		$produk = $this->Produk_model->produk_getid($produk_id);

		if(isset($produk['produk_id']))
		{

                $config['upload_path']      = './images/produk';
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
				        $this->load->view('v_produk/edit_photo', $error);
			            
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
							'produk_photo' => $gbr['file_name']
				    	);

				    	
			        }

			      

			        $this->Produk_model->produk_update($produk_id,$params);
					redirect('produk');

		        } else {

					redirect('produk');					
					
		        }

		} else {

			show_error('');
		}
	}



	function produk_delete($produk_id)
	{
		$produk = $this->Produk_model->produk_getid($produk_id);

		if(isset($produk['produk_id']))
		{

			$this->Produk_model->produk_delete($produk_id);
			redirect('produk');

		} else {

			show_error('');
		}
	
	}


}
?>