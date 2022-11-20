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
        $id_jenislayanan = $this->input->post('id_jenislayanan');
        $JenisLayanan = $this->input->post('JenisLayanan');
        

        $data = array(
            'id_jenislayanan' => $id_jenislayanan,
            'JenisLayanan' => $JenisLayanan,
        );

            $where = array(
                'id_jenislayanan' => $id_jenislayanan
            );

            $this->M_JenisLayanan->update_data($where,$data,'jenis_layanan');
            redirect('admin/JenisLayanan');
        }

		public function tambah_jenis_layanan()
	{
		$this->load->view('admin/jenislayanan_tambah');
		
    }

	 public function insert()
	{
		$JenisLayanan = $this->input->post('JenisLayanan');
        $data = array(
            'JenisLayanan' => $JenisLayanan,
        );
        $this->M_JenisLayanan->input_data($data, 'jenis_layanan');
        redirect('admin/JenisLayanan');
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
