<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Misi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Misi');


	}
	
	public function index()
	{	
		// $this->load->model('M_Jenis');
		$data['misi'] = $this->M_Misi->get_misi();
        $this->load->view('admin/misi', $data);
				
	}

	public function edit_misi($id_misi){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
        $this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
        $this->load->model('M_Misi');
        $data['misi'] = $this->M_Misi->get_misi();
        $where = array('id_misi' => $id_misi);
        $data['misi'] = $this->M_Misi->edit_data($where,'misi')->result();
        $this->load->view('admin/misi_edit', $data);
    }

	public function update(){
        $id_misi = $this->input->post('id_misi');
        $misi = $this->input->post('misi');
        $id_tentang = $this->input->post('id_tentang');
        

        $data = array(
            'id_misi' => $id_misi,
            'id_tentang' => $id_tentang,
            'misi' => $misi,
        );

            $where = array(
                'id_misi' => $id_misi
            );

            $this->M_Misi->update_data($where,$data,'misi');
            redirect('admin/misi');
        }

		public function tambah_misi()
	{   
        $this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
		$this->load->view('admin/misi_tambah',$data);
		
    }

	 public function insert()
	{
		$misi = $this->input->post('misi');
        $id_tentang = $this->input->post('id_tentang');
        $data = array(
            'id_tentang' => $id_tentang,
            'misi' => $misi,
        );
        $this->M_Misi->input_data($data, 'misi');
        redirect('admin/misi');
	}

	Public function hapus_misi($id_misi){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_misi'=> $id_misi);
        $this->M_Misi->hapus_misi($where,'misi');
        redirect('admin/misi');
    } 


}
