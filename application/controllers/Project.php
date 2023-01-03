<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Pekerjaan');
	}

	public function index()
	{
		$this->load->view('user/header');
		$data['pekerjaan'] = $this->M_Pekerjaan->get_pekerjaan();
        $this->load->view('user/page2_pengalaman', $data);
        $this->load->view('user/footer');
	}
}
