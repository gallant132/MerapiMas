<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Alamat');


	}
	
	public function index()
	{	
		// $this->load->model('M_Jenis');
		$data['alamat'] = $this->M_Alamat->get_alamat();
        $this->load->view('admin/alamat', $data);
				
	}

	public function edit_alamat($id_alamat){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }			
       
        $this->load->model('M_TentangPerusahaan');
        $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
        $this->load->model('M_Alamat');
        $data['alamat'] = $this->M_Alamat->get_alamat();
        $where = array('id_alamat' => $id_alamat);
        $data['alamat'] = $this->M_Alamat->edit_data($where,'alamat')->result();
        $this->load->view('admin/alamat_edit', $data);
    }

	public function update(){
        $id_alamat = $this->input->post('id_alamat');
        $alamat = $this->input->post('alamat');
        $id_tentang = $this->input->post('id_tentang');
        

        $data = array(
            'id_alamat' => $id_alamat,
            'id_tentang' => $id_tentang,
            'alamat' => $alamat,
        );

            $where = array(
                'id_alamat' => $id_alamat
            );

            $this->M_Alamat->update_data($where,$data,'alamat');
            redirect('admin/alamat');
        }

		public function tambah_alamat()
	{    $this->load->model('M_TentangPerusahaan');
         $data['tentang'] = $this->M_TentangPerusahaan->get_pilihtentang();
		$this->load->view('admin/alamat_tambah',$data);
		
    }

	 public function insert()
	{
		$alamat = $this->input->post('alamat');
        $id_tentang = $this->input->post('id_tentang');
        $data = array(
            'alamat' => $alamat,
            'id_tentang' => $id_tentang,
        );
        $this->M_Alamat->input_data($data, 'alamat');
        redirect('admin/alamat');
	}

	Public function hapus_alamat($id_alamat){
        // if($this->session->userdata('getlogin') != 'OK'){
        //     redirect(base_url("getlogin"));
        // }	
        
        $where = array ('id_alamat'=> $id_alamat);
        $this->M_Alamat->hapus_alamat($where,'alamat');
        redirect('admin/alamat');
    } 


}
