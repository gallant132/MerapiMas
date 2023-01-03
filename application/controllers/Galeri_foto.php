<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_foto extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header');
        $this->load->view('user/page5_galeri');
        $this->load->view('user/footer');
	}
}
