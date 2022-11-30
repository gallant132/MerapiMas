<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_TentangPerusahaan');


	}

	
	public function index()
	{
        // $Qalamat = $this->M_TentangPerusahaan->get_array_list(id_tentang);
        $perusahaan = $this->M_TentangPerusahaan->get_all();

        foreach ($perusahaan as $key => $per) {
            $per->alamat =  $this->M_TentangPerusahaan->get_table_by_id_tentang('alamat', $per->id_tentang);
            $per->contact =  $this->M_TentangPerusahaan->get_table_by_id_tentang('contact', $per->id_tentang);
            $per->visi =  $this->M_TentangPerusahaan->get_table_by_id_tentang('visi', $per->id_tentang);
            $per->misi =  $this->M_TentangPerusahaan->get_table_by_id_tentang('misi', $per->id_tentang);
            $per->legalitas =  $this->M_TentangPerusahaan->get_table_by_id_tentang('legalitas', $per->id_tentang);
            $per->cov =  $this->M_TentangPerusahaan->get_table_by_id_tentang('cov', $per->id_tentang);
        }

        
        $this->load->view('admin/Tentang', ['perusahaan' => $perusahaan]);
		
	}

	public function edit_tentang($id_tentang){

        $this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_tentang();
        $where = array('id_tentang' => $id_tentang);
        $data['tentang'] = $this->M_TentangPerusahaan->edit_data($where,'tentang')->result();
        $this->load->view('admin/tentang_edit', $data);

       
    }

	public function update(){
        $id_tentang = $this->input->post('id_tentang');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $tentangperusahaan = $this->input->post('tentangperusahaan');
        

        $data = array(
            'id_tentang' => $id_tentang,
            'nama_perusahaan' => $nama_perusahaan,
            'tentangperusahaan' => $tentangperusahaan,
        );

            $where = array(
                'id_tentang' => $id_tentang
            );

            $this->M_TentangPerusahaan->update_data($where,$data,'tentang');
            redirect('admin/Tentang');
        }
	
		public function tambah_tentang()
	{
		// $this->load->model('M_Alamat');
        // $data['alamat'] = $this->M_Alamat->get_alamat();
        // $this->load->model('M_Contact');
        // $data['contact'] = $this->M_Contact->get_contact();
        // $this->load->model('M_Visi');
        // $data['visi'] = $this->M_Visi->get_visi();
        // $this->load->model('M_Misi');
        // $data['misi'] = $this->M_Misi->get_misi();
        // $this->load->model('M_Legalitas');
        // $data['legalitas'] = $this->M_Legalitas->get_legalitas();
        // $this->load->model('M_Cov');
        // $data['cov'] = $this->M_Cov->get_cov();

        // $this->load->model('M_Alamat');
        // $data['alamat'] = $this->M_Alamat->get_alamat();
		// // $this->load->view('admin/namalayanan_tambah', $data);
		$this->load->view('admin/tentang_tambah');
		
    }
    
    
	 public function insert()
	{
        
		$tentangperusahaan = $this->input->post('tentangperusahaan');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
		// $id_alamat = $this->input->post('id_alamat');
        // // $valamat = implode(",", $id_alamat);
		// $id_contact = $this->input->post('id_contact');
		// $id_visi = $this->input->post('id_visi');
		// $id_misi = $this->input->post('id_misi');
		// $id_legalitas = $this->input->post('id_legalitas');
		// $id_cov = $this->input->post('id_cov');
        
        
        $data = array(
            'tentangperusahaan' => $tentangperusahaan,
            'nama_perusahaan' => $nama_perusahaan,
			// 'id_alamat' => json_encode(implode(",", $id_alamat)),
			// 'id_contact' => $id_contact,
			// 'id_visi' => $id_visi,
			// 'id_misi' => $id_misi,
			// 'id_legalitas' => $id_legalitas,
			// 'id_cov' => $id_cov,
        );
        $this->M_TentangPerusahaan->input_data($data, 'tentang');
        redirect('admin/Tentang');
	}

	Public function hapus_tentang($id_tentang){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_tentang'=> $id_tentang);
        $this->M_TentangPerusahaan->hapus_tentang($where,'tentang');
        redirect('admin/Tentang');
    } 

}
