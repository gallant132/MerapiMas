<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_TentangPerusahaan');
		$this->load->model('M_Pekerjaan');
	}

	public function index()
	{
		$this->load->view('user/header');
		$data['tentang'] = $this->M_TentangPerusahaan->get_tentang();
		$data['pekerjaan'] = $this->M_Pekerjaan->get_pekerjaan();
        $this->load->view('user/dashboard', $data);
        $this->load->view('user/footer');
	}
}
