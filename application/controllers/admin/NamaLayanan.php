<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NamaLayanan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_NamaLayanan');


	}

	
	public function index()
	{
		$data['layanans'] = $this->M_NamaLayanan->get_layanan();
        $this->load->view('admin/namalayanan', $data);
		
	}

	public function edit_layanan($id_layanan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
       
        $this->load->model('M_JenisLayanan');
        $data['jenis_layanan'] = $this->M_JenisLayanan->get_jenis_layanan();
        $where = array('id_layanan' => $id_layanan);
        $data['layanan'] = $this->M_NamaLayanan->edit_data($where,'layanan')->result();
        $this->load->view('admin/namalayanan_edit', $data);

		// $this->load->model('M_kelas');
        // $data['kelas'] = $this->M_kelas->get_kelas();
        // $where = array('id_pendaftar' => $id_pendaftar);
        // $data['pendaftar'] = $this->M_daftar->edit_data($where,'pendaftar')->result();
        // $this->load->view('daftar_edit', $data);
    }

	public function update(){
        $id_layanan = $this->input->post('id_layanan');
        $Nama_Layanan = $this->input->post('Nama_layanan');
        $id_jenislayanan = $this->input->post('id_jenislayanan');

        $data = array(
            'id_layanan' => $id_layanan,
            'Nama_layanan' => $Nama_Layanan,
			'id_jenislayanan' => $id_jenislayanan,
        );

            $where = array(
                'id_layanan' => $id_layanan
            );

            $this->M_NamaLayanan->update_data($where,$data,'layanan');
            redirect('admin/NamaLayanan');
        }
	
		public function tambah_layanan()
	{
		$this->load->model('M_JenisLayanan');
        $data['jenis_layanan'] = $this->M_JenisLayanan->get_jenis_layanan();
		$this->load->view('admin/namalayanan_tambah', $data);
		
    }

	 public function insert()
	{
		$Nama_layanan = $this->input->post('Nama_layanan');
		$id_jenislayanan = $this->input->post('id_jenislayanan');

        $data = array(
            'Nama_layanan' => $Nama_layanan,
			'id_jenislayanan' => $id_jenislayanan,
        );
        $this->M_NamaLayanan->input_data($data, 'layanan');
        redirect('admin/NamaLayanan');
	}

	Public function hapus_layanan($id_layanan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_layanan'=> $id_layanan);
        $this->M_NamaLayanan->hapus_layanan($where,'layanan');
        redirect('admin/NamaLayanan');
    } 

}
