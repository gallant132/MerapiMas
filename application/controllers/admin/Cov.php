<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cov extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Cov');


	}

	
	public function index()
	{
		$data['cov'] = $this->M_Cov->get_cov();
        $this->load->view('admin/cov', $data);
		
	}

	public function edit_cov($id_cov){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
		$this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
		$this->load->model('M_Cov');
        $data['cov'] = $this->M_Cov->get_cov();
        $where = array('id_cov' => $id_cov);
        $data['cov'] = $this->M_Cov->edit_data($where,'cov')->result();
        $this->load->view('admin/cov_edit', $data);
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
	
		public function tambah_cov()
	{
		$this->load->model('M_TentangPerusahaan');
         $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
		$this->load->view('admin/cov_tambah', $data);
		
    }
					
	 public function insert()
	{
						
				$config['upload_path']          = FCPATH.'/upload/icon_cov/';
				$config['allowed_types']        = 'gif|jpg|jpeg|png';
				$config['overwrite']            = true;
				$config['max_size']             = 10024; // 1MB
				$config['max_width']            = 10800;
				$config['max_height']           = 10800;


				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('userfile')) {
					// $data['error'] = $this->upload->display_errors();
					// check error
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
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

					$this->M_Cov->input_data($data,'cov');
           			redirect('admin/Cov');
                }


				// $id_karyawan = $this->input->post('id_karyawan');
				// $nama_karyawan = $this->input->post('nama_karyawan');
				// $foto = $this->input->post('foto');
				// $id_jabatan = $this->input->post('id_jabatan');

				// $data = array(
				//     'id_karyawan' => $id_karyawan,
				//     'nama_karyawan' => $nama_karyawan,
				// 	'foto' => $foto,
				// 	'id_jabatan' => $id_jabatan,
				// );

				//     $this->M_NamaKaryawan->input_data($data,'karyawan');
				//     redirect('admin/NamaKaryawan');
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
