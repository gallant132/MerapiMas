<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header');
        $this->load->view('user/page6_karir');
        $this->load->view('user/footer');
	}
}
