<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header');
        $this->load->view('user/page4_video');
        $this->load->view('user/footer');
	}
}
