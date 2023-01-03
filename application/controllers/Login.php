<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header');
        $this->load->view('user/login');
        $this->load->view('user/footer');
	}
}
