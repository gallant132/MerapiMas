<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NamaKaryawan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_NamaKaryawan');


	}

	
	public function index()
	{
		$data['karyawan'] = $this->M_NamaKaryawan->get_karyawan();
        $this->load->view('admin/namakaryawan', $data);
		
	}

	public function edit_karyawan($id_karyawan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
       
        $this->load->model('M_Jabatan');
        $data['jabatan'] = $this->M_Jabatan->get_jabatan();
        $where = array('id_karyawan' => $id_karyawan);
        $data['karyawan'] = $this->M_NamaKaryawan->edit_data($where,'karyawan')->result();
        $this->load->view('admin/namakaryawan_edit', $data);

		// $this->load->model('M_kelas');
        // $data['kelas'] = $this->M_kelas->get_kelas();
        // $where = array('id_pendaftar' => $id_pendaftar);
        // $data['pendaftar'] = $this->M_daftar->edit_data($where,'pendaftar')->result();
        // $this->load->view('daftar_edit', $data);
    }

	public function update(){
		$id_karyawan					= $this->input->post('id_karyawan');
		$config['upload_path']          = FCPATH.'/upload/karyawan/';
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

			
			$id_karyawan = $this->input->post('id_karyawan');
			$nama_karyawan = $this->input->post('nama_karyawan');
			$id_jabatan = $this->input->post('id_jabatan');

			$data = array(
				'id_karyawan' => $id_karyawan,
				'nama_karyawan' => $nama_karyawan,
				'id_jabatan' => $id_jabatan,
				
			);

			$where = array(
                'id_karyawan' => $id_karyawan
            );

			$this->M_NamaKaryawan->update_data($where,$data,'karyawan');
			   redirect('admin/NamaKaryawan');

		}

		else
		{	
			$foto = $this->upload->data();
			$foto = $foto['file_name'];
			$id_karyawan = $this->input->post('id_karyawan');
			$nama_karyawan = $this->input->post('nama_karyawan');
			$id_jabatan = $this->input->post('id_jabatan');

			$data = array(
				'id_karyawan' => $id_karyawan,
				'nama_karyawan' => $nama_karyawan,
				'id_jabatan' => $id_jabatan,
				'foto' => $foto,
			);
			$where = array(
                'id_karyawan' => $id_karyawan
            );

			$this->M_NamaKaryawan->update_data($where,$data,'karyawan');
			redirect('admin/NamaKaryawan');

		}

        }
	
		public function tambah_karyawan()
	{
		$this->load->model('M_Jabatan');
        $data['jabatan'] = $this->M_Jabatan->get_jabatan();
		$this->load->view('admin/namakaryawan_tambah', $data);
		
    }
					
	 public function insert()
	{
						
				$config['upload_path']          = FCPATH.'/upload/karyawan/';
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
					$foto = $this->upload->data();
					$foto = $foto['file_name'];
					$id_karyawan = $this->input->post('id_karyawan');
					$nama_karyawan = $this->input->post('nama_karyawan');
					$id_jabatan = $this->input->post('id_jabatan');

					$data = array(
						'id_karyawan' => $id_karyawan,
						'nama_karyawan' => $nama_karyawan,
						'id_jabatan' => $id_jabatan,
						'foto' => $foto,
					);

					$this->M_NamaKaryawan->input_data($data,'karyawan');
           			redirect('admin/NamaKaryawan');
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
	

	 public function hapus_karyawan($id_karyawan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_karyawan'=> $id_karyawan);
        $this->M_NamaKaryawan->hapus_karyawan($where,'karyawan');
        redirect('admin/NamaKaryawan');
    } 

}
