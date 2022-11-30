<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legalitas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Legalitas');


	}
	
	public function index()
	{	
		// $this->load->model('M_Jenis');
		$data['legalitas'] = $this->M_Legalitas->get_legalitas();
        $this->load->view('admin/legalitas', $data);
				
	}

	public function edit_legalitas($id_legalitas){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
        $this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
        $this->load->model('M_Legalitas');
        $data['legalitas'] = $this->M_Legalitas->get_legalitas();
        $where = array('id_legalitas' => $id_legalitas);
        $data['legalitas'] = $this->M_Legalitas->edit_data($where,'legalitas')->result();
        $this->load->view('admin/legalitas_edit', $data);
    }

	public function update(){
        $id_legalitas = $this->input->post('id_legalitas');
        $id_tentang = $this->input->post('id_tentang');
        $legalitas = $this->input->post('legalitas');
		$Keterangan = $this->input->post('Keterangan');
        

        $data = array(
            'id_legalitas' => $id_legalitas,
            'id_tentang' => $id_tentang,
            'legalitas' => $legalitas,
			'Keterangan' => $Keterangan,
        );

            $where = array(
                'id_legalitas' => $id_legalitas
            );

            $this->M_Legalitas->update_data($where,$data,'legalitas');
            redirect('admin/legalitas');
        }

		public function tambah_legalitas()
	{   
        $this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
		$this->load->view('admin/legalitas_tambah',$data);
		
    }

	 public function insert()
	{   
        $id_tentang = $this->input->post('id_tentang');
		$legalitas = $this->input->post('legalitas');
		$Keterangan = $this->input->post('Keterangan');
        $data = array(
            'id_tentang' => $id_tentang,
            'legalitas' => $legalitas,
			'Keterangan' => $Keterangan,
        );
        $this->M_Legalitas->input_data($data, 'legalitas');
        redirect('admin/legalitas');
	}

	Public function hapus_legalitas($id_legalitas){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_legalitas'=> $id_legalitas);
        $this->M_Legalitas->hapus_legalitas($where,'legalitas');
        redirect('admin/legalitas');
    } 


}
