<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cov extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_cov(){
        $query = $this->db->get('cov');
        return $query->result();
    }

    public function input_data($data, $cov)
    {
        $this->db->insert($cov, $data);
    }

    public function edit_data($where,$cov){
        return $this->db->get_where($cov,$where);
    }

    public function hapus_cov($where,$cov){
        $this->db->where($where);
        $this->db->delete($cov);
    }
    
    public function update_data($where,$data,$cov){
        $this->db->where($where);
        $this->db->update($cov,$data);
    }

}
?>