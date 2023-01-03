<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getlogin extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('M_Getlogin');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('admin/auth-login');
		
	}
	public function login_aksi()
	{
		$username = $this->input->post('username',true);
		$password = md5($this->input->post('password',true));
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		#rule validasi
		if($this->form_validation->run() != FALSE){
			$where = array(
				'username' => $username,
				'password' => $password
			);
			$cekLogin = $this->M_Getlogin->cek_login($where)->num_rows();
			$datauser = $this->M_Getlogin->cek_login($where)->row();
			if($cekLogin > 0){
				$sess_data = array(
					// 'username' => $username,
					// 'password' => $password,
					'username' => $datauser->username,
					'getlogin' => 'OK'
				);
				$this->session->set_userdata($sess_data);
				redirect(base_url("admin/tentang"));
			}else{
				redirect(base_url('admin/getlogin'));
			}
			}else{
				// $this->load->view('login');
				redirect(base_url('admin/getlogin'));
			}
		}

	public function logout(){
	  $this->session->sess_destroy();
	  redirect(base_url('admin/getlogin'));
	}

}

?>