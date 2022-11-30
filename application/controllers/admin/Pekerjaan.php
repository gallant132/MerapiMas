<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Pekerjaan');


	}

	
	public function index()
	{
		$data['pekerjaan'] = $this->M_Pekerjaan->get_pekerjaan();
        $this->load->view('admin/pekerjaan', $data);
		
	}

	public function edit_pekerjaan($id_pekerjaan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
       
        $this->load->model('M_NamaLayanan');
        $data['layanan'] = $this->M_NamaLayanan->get_layanan();
        $where = array('id_pekerjaan' => $id_pekerjaan);
        $data['pekerjaan'] = $this->M_Pekerjaan->edit_data($where,'pekerjaan')->result();
        $this->load->view('admin/pekerjaan_edit', $data);

		// $this->load->model('M_kelas');
        // $data['kelas'] = $this->M_kelas->get_kelas();
        // $where = array('id_pendaftar' => $id_pendaftar);
        // $data['pendaftar'] = $this->M_daftar->edit_data($where,'pendaftar')->result();
        // $this->load->view('daftar_edit', $data);
    }

	public function update(){
		$id_pekerjaan					= $this->input->post('id_pekerjaan');
		$config['upload_path']          = FCPATH.'/upload/pekerjaan/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['overwrite']            = true;
		$config['max_size']             = 10024; // 1MB
		$config['max_width']            = 10800;
		$config['max_height']           = 10800;

		$this->load->library('upload', $config);

		if(!empty($_FILES['logo_client']['name'])){
			if(!empty($_FILES['thumbnail']['name'])){
				if (!$this->upload->do_upload('logo_client','thumbnail')) {
					// $data['error'] = $this->upload->display_errors();
					// check error
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				else
				{
					
					$this->upload->do_upload('logo_client');
						$data1 = $this->upload->data();
						$logo_client = $data1['file_name'];
					$this->upload->do_upload('thumbnail');
						$data2 = $this->upload->data();
						$thumbnail = $data2['file_name'];
					$id_pekerjaan = $this->input->post('id_pekerjaan');
					$nama_pekerjaan = $this->input->post('nama_pekerjaan');
					$detail_pekerjaan = $this->input->post('detail_pekerjaan');
					$tahun_pekerjaan = $this->input->post('tahun_pekerjaan');
					$nama_client = $this->input->post('nama_client');
					$id_layanan = $this->input->post('id_layanan');

					$data = array(
						'id_pekerjaan' => $id_pekerjaan,
						'nama_pekerjaan' => $nama_pekerjaan,
						'detail_pekerjaan' => $detail_pekerjaan,
						'tahun_pekerjaan' => $tahun_pekerjaan,
						'nama_client' => $nama_client,
						'logo_client' => $logo_client,
						'thumbnail' => $thumbnail,
						'id_layanan' => $id_layanan,
						
					);
					$where = array(
						'id_pekerjaan' => $id_pekerjaan
					);
		
					$this->M_Pekerjaan->update_data($where,$data,'pekerjaan');
					   redirect('admin/Pekerjaan');
				}

			} 
			else{
				if (!$this->upload->do_upload('logo_client')) {
					// $data['error'] = $this->upload->display_errors();
					// check error
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				else{

							$this->upload->do_upload('logo_client');
							$data1 = $this->upload->data();
							$logo_client = $data1['file_name'];
							
						
						$id_pekerjaan = $this->input->post('id_pekerjaan');
						$nama_pekerjaan = $this->input->post('nama_pekerjaan');
						$detail_pekerjaan = $this->input->post('detail_pekerjaan');
						$tahun_pekerjaan = $this->input->post('tahun_pekerjaan');
						$nama_client = $this->input->post('nama_client');
						$id_layanan = $this->input->post('id_layanan');
						$thumbnail = $this->input->post('thumbnail');
	
						$data = array(
							'id_pekerjaan' => $id_pekerjaan,
							'nama_pekerjaan' => $nama_pekerjaan,
							'detail_pekerjaan' => $detail_pekerjaan,
							'tahun_pekerjaan' => $tahun_pekerjaan,
							'nama_client' => $nama_client,
							'logo_client' => $logo_client,
							'thumbnail' => $thumbnail,
							'id_layanan' => $id_layanan,
							
						);
						$where = array(
							'id_pekerjaan' => $id_pekerjaan
						);
			
						$this->M_Pekerjaan->update_data($where,$data,'pekerjaan');
						   redirect('admin/Pekerjaan');
					}
				}

		} else{
			if(!empty($_FILES['thumbnail']['name'])){
				if (!$this->upload->do_upload('thumbnail')) {
					// $data['error'] = $this->upload->display_errors();
					// check error
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				else
				{
					
						$this->upload->do_upload('thumbnail');
						$data2 = $this->upload->data();
						$thumbnail = $data2['file_name'];
					
					$id_pekerjaan = $this->input->post('id_pekerjaan');
					$nama_pekerjaan = $this->input->post('nama_pekerjaan');
					$detail_pekerjaan = $this->input->post('detail_pekerjaan');
					$tahun_pekerjaan = $this->input->post('tahun_pekerjaan');
					$nama_client = $this->input->post('nama_client');
					$id_layanan = $this->input->post('id_layanan');
					$logo_client = $this->input->post('logo_client');

					$data = array(
						'id_pekerjaan' => $id_pekerjaan,
						'nama_pekerjaan' => $nama_pekerjaan,
						'detail_pekerjaan' => $detail_pekerjaan,
						'tahun_pekerjaan' => $tahun_pekerjaan,
						'nama_client' => $nama_client,
						'logo_client' => $logo_client,
						'thumbnail' => $thumbnail,
						'id_layanan' => $id_layanan,
						
					);
					$where = array(
						'id_pekerjaan' => $id_pekerjaan
					);
		
					$this->M_Pekerjaan->update_data($where,$data,'pekerjaan');
					   redirect('admin/Pekerjaan');
				}

			} 
			else{
				

							
						$id_pekerjaan = $this->input->post('id_pekerjaan');
						$nama_pekerjaan = $this->input->post('nama_pekerjaan');
						$detail_pekerjaan = $this->input->post('detail_pekerjaan');
						$tahun_pekerjaan = $this->input->post('tahun_pekerjaan');
						$nama_client = $this->input->post('nama_client');
						$id_layanan = $this->input->post('id_layanan');
						$thumbnail = $this->input->post('thumbnail');
						$logo_client = $this->input->post('logo_client');
						$thumbnail = $this->input->post('thumbnail');
	
						$data = array(
							'id_pekerjaan' => $id_pekerjaan,
							'nama_pekerjaan' => $nama_pekerjaan,
							'detail_pekerjaan' => $detail_pekerjaan,
							'tahun_pekerjaan' => $tahun_pekerjaan,
							'nama_client' => $nama_client,
							'logo_client' => $logo_client,
							'thumbnail' => $thumbnail,
							'id_layanan' => $id_layanan,
							
						);
						$where = array(
							'id_pekerjaan' => $id_pekerjaan
						);
			
						$this->M_Pekerjaan->update_data($where,$data,'pekerjaan');
						   redirect('admin/Pekerjaan');
					
				}
		}


        }
	
		public function tambah_pekerjaan()
	{
		$this->load->model('M_NamaLayanan');
        $data['layanan'] = $this->M_NamaLayanan->get_layanan();
		$this->load->view('admin/pekerjaan_tambah', $data);
		
    }
					
	 public function insert()
	 {
	 	
						
			$config['upload_path']          = FCPATH.'/upload/pekerjaan/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			$config['overwrite']            = true;
			$config['max_size']             = 10024; // 1MB
			$config['max_width']            = 10800;
			$config['max_height']           = 10800;

				$this->load->library('upload', $config);
				
				if(!empty($_FILES['logo_client']['name'])){
					if(!empty($_FILES['thumbnail']['name'])){
						if (!$this->upload->do_upload('logo_client','thumbnail')) {
							// $data['error'] = $this->upload->display_errors();
							// check error
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						else
						{
							
							$this->upload->do_upload('logo_client');
								$data1 = $this->upload->data();
								$logo_client = $data1['file_name'];
							$this->upload->do_upload('thumbnail');
								$data2 = $this->upload->data();
								$thumbnail = $data2['file_name'];
							$id_pekerjaan = $this->input->post('id_pekerjaan');
							$nama_pekerjaan = $this->input->post('nama_pekerjaan');
							$detail_pekerjaan = $this->input->post('detail_pekerjaan');
							$tahun_pekerjaan = $this->input->post('tahun_pekerjaan');
							$nama_client = $this->input->post('nama_client');
							$id_layanan = $this->input->post('id_layanan');
		
							$data = array(
								'id_pekerjaan' => $id_pekerjaan,
								'nama_pekerjaan' => $nama_pekerjaan,
								'detail_pekerjaan' => $detail_pekerjaan,
								'tahun_pekerjaan' => $tahun_pekerjaan,
								'nama_client' => $nama_client,
								'logo_client' => $logo_client,
								'thumbnail' => $thumbnail,
								'id_layanan' => $id_layanan,
								
							);
		
							$this->M_Pekerjaan->input_data($data,'pekerjaan');
							   redirect('admin/Pekerjaan');
						}

					} 
					else{
						if (!$this->upload->do_upload('logo_client')) {
							// $data['error'] = $this->upload->display_errors();
							// check error
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						else{
	
									$this->upload->do_upload('logo_client');
									$data1 = $this->upload->data();
									$logo_client = $data1['file_name'];
									
								
								$id_pekerjaan = $this->input->post('id_pekerjaan');
								$nama_pekerjaan = $this->input->post('nama_pekerjaan');
								$detail_pekerjaan = $this->input->post('detail_pekerjaan');
								$tahun_pekerjaan = $this->input->post('tahun_pekerjaan');
								$nama_client = $this->input->post('nama_client');
								$id_layanan = $this->input->post('id_layanan');
								$thumbnail = $this->input->post('thumbnail');
			
								$data = array(
									'id_pekerjaan' => $id_pekerjaan,
									'nama_pekerjaan' => $nama_pekerjaan,
									'detail_pekerjaan' => $detail_pekerjaan,
									'tahun_pekerjaan' => $tahun_pekerjaan,
									'nama_client' => $nama_client,
									'logo_client' => $logo_client,
									'thumbnail' => $thumbnail,
									'id_layanan' => $id_layanan,
									
								);
			
								$this->M_Pekerjaan->input_data($data,'pekerjaan');
								redirect('admin/Pekerjaan');
							}
						}

				} else{
					if(!empty($_FILES['thumbnail']['name'])){
						if (!$this->upload->do_upload('thumbnail')) {
							// $data['error'] = $this->upload->display_errors();
							// check error
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						else
						{
							
								$this->upload->do_upload('thumbnail');
								$data2 = $this->upload->data();
								$thumbnail = $data2['file_name'];
							
							$id_pekerjaan = $this->input->post('id_pekerjaan');
							$nama_pekerjaan = $this->input->post('nama_pekerjaan');
							$detail_pekerjaan = $this->input->post('detail_pekerjaan');
							$tahun_pekerjaan = $this->input->post('tahun_pekerjaan');
							$nama_client = $this->input->post('nama_client');
							$id_layanan = $this->input->post('id_layanan');
							$logo_client = $this->input->post('logo_client');
		
							$data = array(
								'id_pekerjaan' => $id_pekerjaan,
								'nama_pekerjaan' => $nama_pekerjaan,
								'detail_pekerjaan' => $detail_pekerjaan,
								'tahun_pekerjaan' => $tahun_pekerjaan,
								'nama_client' => $nama_client,
								'logo_client' => $logo_client,
								'thumbnail' => $thumbnail,
								'id_layanan' => $id_layanan,
								
							);
		
							$this->M_Pekerjaan->input_data($data,'pekerjaan');
							   redirect('admin/Pekerjaan');
						}

					} 
					else{
						
	
									
								$id_pekerjaan = $this->input->post('id_pekerjaan');
								$nama_pekerjaan = $this->input->post('nama_pekerjaan');
								$detail_pekerjaan = $this->input->post('detail_pekerjaan');
								$tahun_pekerjaan = $this->input->post('tahun_pekerjaan');
								$nama_client = $this->input->post('nama_client');
								$id_layanan = $this->input->post('id_layanan');
								$thumbnail = $this->input->post('thumbnail');
								$logo_client = $this->input->post('logo_client');
								$thumbnail = $this->input->post('thumbnail');
			
								$data = array(
									'id_pekerjaan' => $id_pekerjaan,
									'nama_pekerjaan' => $nama_pekerjaan,
									'detail_pekerjaan' => $detail_pekerjaan,
									'tahun_pekerjaan' => $tahun_pekerjaan,
									'nama_client' => $nama_client,
									'logo_client' => $logo_client,
									'thumbnail' => $thumbnail,
									'id_layanan' => $id_layanan,
									
								);
			
								$this->M_Pekerjaan->input_data($data,'pekerjaan');
								redirect('admin/Pekerjaan');
							
						}
				}
				

        }
	

	 public function hapus_pekerjaan($id_pekerjaan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_pekerjaan'=> $id_pekerjaan);
        $this->M_Pekerjaan->hapus_pekerjaan($where,'pekerjaan');
        redirect('admin/Pekerjaan');
    } 

}
