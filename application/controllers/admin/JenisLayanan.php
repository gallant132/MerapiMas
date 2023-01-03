<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisLayanan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_JenisLayanan');


	}
	
	public function index()
	{	
		// $this->load->model('M_Jenis');
		$data['jenislayanans'] = $this->M_JenisLayanan->get_jenis_layanan();
        $this->load->view('admin/jenislayanan', $data);
				
	}

	public function edit_jenislayanan($id_jenislayanan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
       
        $this->load->model('M_JenisLayanan');
        $data['jenis_layanan'] = $this->M_JenisLayanan->get_jenis_layanan();
        $where = array('id_jenislayanan' => $id_jenislayanan);
        $data['jenis_layanan'] = $this->M_JenisLayanan->edit_data($where,'jenis_layanan')->result();
        $this->load->view('admin/jenislayanan_edit', $data);
    }

	public function update(){
				$id_jenislayanan				= $this->input->post('id_jenislayanan');
                $config['upload_path']          = FCPATH.'upload/icon_jenis_layanan/';
				$config['allowed_types']        = 'gif|jpg|jpeg|png';
				$config['overwrite']            = true;
				$config['max_size']             = 10024; // 1MB
				$config['max_width']            = 10800;
				$config['max_height']           = 10800;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('userfile')) {

					$JenisLayanan = $this->input->post('JenisLayanan');
                    $data = array(
                        'JenisLayanan' => $JenisLayanan,
                        
                    );

                    $where = array(
                        'id_jenislayanan' => $id_jenislayanan
                    );

                    $this->M_JenisLayanan->update_data($where,$data,'jenis_layanan');
                    redirect('admin/JenisLayanan');
				}

                else
                {
					$icon = $this->upload->data();
					$icon = $icon['file_name'];
					$JenisLayanan = $this->input->post('JenisLayanan');
					

					$data = array(
						'JenisLayanan' => $JenisLayanan,
						'icon' => $icon,
					);

					$where = array(
                        'id_jenislayanan' => $id_jenislayanan
                    );

                    $this->M_JenisLayanan->update_data($where,$data,'jenis_layanan');
                    redirect('admin/JenisLayanan');
                }
        }

		public function tambah_jenis_layanan()
	{
		$this->load->view('admin/jenislayanan_tambah');
		
    }

	 public function insert()
	{
                $config['upload_path']          = FCPATH.'upload/icon_jenis_layanan/';
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
					$JenisLayanan = $this->input->post('JenisLayanan');
					

					$data = array(
						'JenisLayanan' => $JenisLayanan,
						'icon' => $icon,
					);

                    $this->M_JenisLayanan->input_data($data, 'jenis_layanan');
                    redirect('admin/JenisLayanan');
                }
       
	}

	Public function hapus_jenis_layanan($id_jenislayanan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_jenislayanan'=> $id_jenislayanan);
        $this->M_JenisLayanan->hapus_jenis_layanan($where,'jenis_layanan');
        redirect('admin/JenisLayanan');
    } 


}
