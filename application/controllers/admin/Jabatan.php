<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Jabatan');


	}
	
	public function index()
	{	
		// $this->load->model('M_Jenis');
		$data['jabatan'] = $this->M_Jabatan->get_jabatan();
        $this->load->view('admin/jabatan', $data);
				
	}

	public function edit_jabatan($id_jabatan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
       
        $this->load->model('M_Jabatan');
        $data['jabatan'] = $this->M_Jabatan->get_jabatan();
        $where = array('id_jabatan' => $id_jabatan);
        $data['jabatan'] = $this->M_Jabatan->edit_data($where,'jabatan')->result();
        $this->load->view('admin/jabatan_edit', $data);
    }

	public function update(){
        $id_jabatan = $this->input->post('id_jabatan');
        $jabatan = $this->input->post('jabatan');
        

        $data = array(
            'id_jabatan' => $id_jabatan,
            'jabatan' => $jabatan,
        );

            $where = array(
                'id_jabatan' => $id_jabatan
            );

            $this->M_Jabatan->update_data($where,$data,'jabatan');
            redirect('admin/Jabatan');
        }

		public function tambah_jabatan()
	{
		$this->load->view('admin/jabatan_tambah');
		
    }

	 public function insert()
	{
		$jabatan = $this->input->post('jabatan');
        $data = array(
            'jabatan' => $jabatan,
        );
        $this->M_Jabatan->input_data($data, 'jabatan');
        redirect('admin/Jabatan');
	}

	Public function hapus_jabatan($id_jabatan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_jabatan'=> $id_jabatan);
        $this->M_Jabatan->hapus_jabatan($where,'jabatan');
        redirect('admin/Jabatan');
    } 


}
