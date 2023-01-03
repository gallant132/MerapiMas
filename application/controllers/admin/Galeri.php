<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Galeri');


	}

	
	public function index()
	{
		$data['galeri'] = $this->M_Galeri->get_galeri();
        $this->load->view('admin/galeri', $data);
		
	}

	public function edit_galeri($id_galeri){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
		$this->load->model('M_Galeri');
        $data['galeri'] = $this->M_Galeri->get_galeri();
        $this->load->view('admin/galeri_edit', $data);
    }

	public function update(){
		$id_cov					= $this->input->post('id_cov');
		$config['upload_path']          = FCPATH.'/upload/icon_cov/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['overwrite']            = true;
		$config['max_size']             = 10024; // 1MB
		$config['max_width']            = 10800;
		$config['max_height']           = 10800;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			// $data['error'] = $this->upload->display_errors();
			// $error = array('error' => $this->upload->display_errors());
			// print_r($error);

			
			$id_cov = $this->input->post('id_cov');
			$nama = $this->input->post('nama');
			$detail = $this->input->post('detail');
			$id_tentang = $this->input->post('id_tentang');

			$data = array(
				'id_cov' => $id_cov,
				'id_tentang' => $id_tentang,
				'nama' => $nama,
				'detail' => $detail,
				
			);

			$where = array(
                'id_cov' => $id_cov
            );

			$this->M_Cov->update_data($where,$data,'cov');
			redirect('admin/cov');

		}

		else
		{	
			$icon = $this->upload->data();
			$icon = $icon['file_name'];
			$id_cov = $this->input->post('id_cov');
			$nama = $this->input->post('nama');
			$detail = $this->input->post('detail');
			$id_tentang = $this->input->post('id_tentang');

			$data = array(
				'id_cov' => $id_cov,
				'id_tentang' => $id_tentang,
				'nama' => $nama,
				'detail' => $detail,
				'icon' => $icon,
			);
			$where = array(
                'id_cov' => $id_cov
            );

			$this->M_Cov->update_data($where,$data,'cov');
			redirect('admin/cov');

		}

        }

        public function tambah_galeri()
	{
		$this->load->model('M_Pekerjaan');
        $data['pekerjaan'] = $this->M_Pekerjaan->get_pekerjaan();
		$this->load->view('admin/galeri_tambah', $data);
		
    }
	
		function upload()
	{

		$countFiles = count($_FILES['uploadedFiles']['name']);
		$countUploadedFiles=0;
		$countErrorUploadFiles=0;
		for($i=0;$i<$countFiles;$i++)
		{
			$_FILES['uploadFile']['name'] = $_FILES['uploadedFiles']['name'][$i]; 
			$_FILES['uploadFile']['type'] = $_FILES['uploadedFiles']['type'][$i];
			$_FILES['uploadFile']['size'] = $_FILES['uploadedFiles']['size'][$i];
			$_FILES['uploadFile']['tmp_name'] = $_FILES['uploadedFiles']['tmp_name'][$i];
			$_FILES['uploadFile']['error'] = $_FILES['uploadedFiles']['error'][$i];

			$uploadStatus = $this->uploadFile('uploadFile');
			if($uploadStatus!=false)
			{
				$countUploadedFiles++;
				$this->load->model('M_Galeri');
                $id_pekerjaan = $this->input->post('id_pekerjaan');
				$data =array(
					'foto'=>$uploadStatus,
					'video'=>$uploadStatus,
                    'id_pekerjaan'=>$id_pekerjaan,
				);
				$this->M_Galeri->upload_data($data);
			}
			else
			{
				$countErrorUploadFiles++;
			}

		}

		$this->session->set_flashdata('messgae','Files Uploaded. Successfull Files Uploaded:'.$countUploadedFiles. ' and Error Uploading Files:'.$countErrorUploadFiles);
		redirect(base_url('admin/galeri'));

	}

	function uploadFile($name)
	{
		$uploadPath='upload/galeri';
		if(!is_dir($uploadPath))
		{
			mkdir($uploadPath,0777,TRUE);
		}

		$config['upload_path'] = $uploadPath;
		$config['allowed_types']= 'jpeg|JPEG|JPG|jpg|png|PNG';
		$config['encrypt_name']=TRUE;

		$this->load->library('upload',$config);
		// $this->M_Galeri->initialize($config);
        $this->upload->initialize($config);
		if($this->upload->do_upload($name))
		{
			$fileData = $this->upload->data();
            $foto = $fileData['file_name'];
            $id_pekerjaan = $this->input->post('id_pekerjaan');

			return $fileData['file_name'];
		}
		else
		{
			return false;
		}
	}


	 public function hapus_cov($id_cov){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_cov'=> $id_cov);
        $this->M_Cov->hapus_cov($where,'cov');
        redirect('admin/cov');
    } 

}
