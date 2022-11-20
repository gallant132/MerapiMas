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

		$data['tentang'] = $this->M_TentangPerusahaan->get_tentang();
        // $data['all']= array(
        //     'alamat'=> $Qalamat,
        //     'visi' => $id_alamat,
        //     'misi'
        // )
        $this->load->view('admin/Tentang', $data);
		
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

	Public function hapus_layanan($id_layanan){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_layanan'=> $id_layanan);
        $this->M_NamaLayanan->hapus_layanan($where,'layanan');
        redirect('admin/NamaLayanan');
    } 

}
