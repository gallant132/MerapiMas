<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_TentangPerusahaan');
		$this->load->model('M_Visi');
		$this->load->model('M_Misi');
		$this->load->model('M_Cov');
		$this->load->model('M_NamaKaryawan');
		$this->load->model('M_Legalitas');
	}

	public function index()
	{
		$this->load->view('user/header');
		$data['tentang'] = $this->M_TentangPerusahaan->get_tentang();
		$data['visi'] = $this->M_Visi->get_visi();
		$data['misi'] = $this->M_Misi->get_misi();
		$data['cov'] = $this->M_Cov->get_cov();
		$data['karyawan'] = $this->M_NamaKaryawan->get_karyawan();
		$data['legalitas'] = $this->M_Legalitas->get_legalitas();
        $this->load->view('user/page3_tentang',$data);
        $this->load->view('user/footer');
	}
}
