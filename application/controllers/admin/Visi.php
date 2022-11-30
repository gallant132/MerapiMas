<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Visi');


	}
	
	public function index()
	{	
		// $this->load->model('M_Jenis');
		$data['visi'] = $this->M_Visi->get_visi();
        $this->load->view('admin/visi', $data);
				
	}

	public function edit_visi($id_visi){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
        $this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
        $this->load->model('M_Visi');
        $data['visi'] = $this->M_Visi->get_visi();
        $where = array('id_visi' => $id_visi);
        $data['visi'] = $this->M_Visi->edit_data($where,'visi')->result();
        $this->load->view('admin/visi_edit', $data);
    }

	public function update(){
        $id_visi = $this->input->post('id_visi');
        $visi = $this->input->post('visi');
        $id_tentang = $this->input->post('id_tentang');
        

        $data = array(
            'id_visi' => $id_visi,
            'id_visi' => $id_tentang,
            'visi' => $visi,
        );

            $where = array(
                'id_visi' => $id_visi
            );

            $this->M_Visi->update_data($where,$data,'visi');
            redirect('admin/visi');
        }

		public function tambah_visi()
	{   
        $this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
		$this->load->view('admin/visi_tambah',$data);
		
    }

	 public function insert()
	{      
        $id_tentang = $this->input->post('id_tentang');
		$visi = $this->input->post('visi');
        $data = array(
            'id_tentang' => $id_tentang,
            'visi' => $visi,
        );
        $this->M_Visi->input_data($data, 'visi');
        redirect('admin/Visi');
	}

	Public function hapus_visi($id_visi){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_visi'=> $id_visi);
        $this->M_Visi->hapus_visi($where,'visi');
        redirect('admin/visi');
    } 


}
