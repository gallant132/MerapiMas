<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Contact');


	}

	
	public function index()
	{
		$data['contact'] = $this->M_Contact->get_contact();
        $this->load->view('admin/contact', $data);
		
	}

	public function edit_contact($id_contact){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
       
		$this->load->model('M_Contact');
        $data['contact'] = $this->M_Contact->get_contact();
        $where = array('id_contact' => $id_contact);
        $data['contact'] = $this->M_Contact->edit_data($where,'contact')->result();
        $this->load->view('admin/contact_edit', $data);
    }

	public function update(){
		$id_contact						= $this->input->post('id_contact');
		$config['upload_path']          = FCPATH.'/upload/icon_contact/';
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

			
			$id_contact = $this->input->post('id_contact');
			$contact = $this->input->post('contact');
		

			$data = array(
				'id_contact' => $id_contact,
				'contact' => $contact,
				
				
			);

			$where = array(
                'id_contact' => $id_contact
            );

			$this->M_Contact->update_data($where,$data,'contact');
			redirect('admin/contact');

		}

		else
		{	
			$icon = $this->upload->data();
			$icon = $icon['file_name'];
			$id_contact = $this->input->post('id_contact');
			$contact = $this->input->post('contact');

			$data = array(
				'id_contact' => $id_contact,
				'contact' => $contact,
				'icon' => $icon,
			);
			$where = array(
                'id_contact' => $id_contact
            );

			$this->M_Contact->update_data($where,$data,'contact');
			redirect('admin/contact');

		}

        }
	
		public function tambah_contact()
	{
		$this->load->model('M_Contact');
        $data['contact'] = $this->M_Contact->get_contact();
		$this->load->view('admin/contact_tambah', $data);
		
    }
					
	 public function insert()
	{
						
				$config['upload_path']          = FCPATH.'/upload/icon_contact/';
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
					$id_contact = $this->input->post('id_contact');
			$contact = $this->input->post('contact');

					$data = array(
						'id_contact' => $id_contact,
						'contact' => $contact,
						'icon' => $icon,
					);

					$this->M_Contact->input_data($data,'contact');
           			redirect('admin/contact');
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
	

	 public function hapus_contact($id_contact){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_contact'=> $id_contact);
        $this->M_Cov->hapus_contact($where,'contact');
        redirect('admin/contact');
    } 

}
