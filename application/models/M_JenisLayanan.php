<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_JenisLayanan extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_jenis_layanan(){
        $query = $this->db->get('jenis_layanan');
        return $query->result();
    }

    public function input_data($data, $jenislayanan)
    {
        $this->db->insert($jenislayanan, $data);
    }

    public function edit_data($where,$jenislayanan){
        return $this->db->get_where($jenislayanan,$where);
    }

    public function hapus_jenis_layanan($where,$jenislayanan){
        $this->db->where($where);
        $this->db->delete($jenislayanan);
    }
    
    public function update_data($where,$data,$jenislayanan){
        $this->db->where($where);
        $this->db->update($jenislayanan,$data);
    }

}
?>