<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Legalitas extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_legalitas(){
        $query = $this->db->get('legalitas');
        return $query->result();
    }

    public function input_data($data, $legalitas)
    {
        $this->db->insert($legalitas, $data);
    }

    public function edit_data($where,$legalitas){
        return $this->db->get_where($legalitas,$where);
    }

    public function hapus_legalitas($where,$legalitas){
        $this->db->where($where);
        $this->db->delete($legalitas);
    }
    
    public function update_data($where,$data,$legalitas){
        $this->db->where($where);
        $this->db->update($legalitas,$data);
    }

}
?>