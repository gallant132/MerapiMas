<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_JenisLayanan');
		$this->load->model('M_NamaLayanan');
	}

	public function index()
	{
		$this->load->view('user/header');
		$data['jenis_layanan'] = $this->M_JenisLayanan->get_jenis_layanan();
        $this->load->view('user/page1_layanan', $data);
        $this->load->view('user/footer');
	}
}
