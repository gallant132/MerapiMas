<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jabatan extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_jabatan(){
        $query = $this->db->get('jabatan');
        return $query->result();
    }

    public function input_data($data, $jabatan)
    {
        $this->db->insert($jabatan, $data);
    }

    public function edit_data($where,$jabatan){
        return $this->db->get_where($jabatan,$where);
    }

    public function hapus_jabatan($where,$jabatan){
        $this->db->where($where);
        $this->db->delete($jabatan);
    }
    
    public function update_data($where,$data,$jabatan){
        $this->db->where($where);
        $this->db->update($jabatan,$data);
    }

}
?>