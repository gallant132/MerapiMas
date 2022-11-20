<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Misi extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_misi(){
        $query = $this->db->get('misi');
        return $query->result();
    }

    public function input_data($data, $misi)
    {
        $this->db->insert($misi, $data);
    }

    public function edit_data($where,$misi){
        return $this->db->get_where($misi,$where);
    }

    public function hapus_misi($where,$misi){
        $this->db->where($where);
        $this->db->delete($misi);
    }
    
    public function update_data($where,$data,$misi){
        $this->db->where($where);
        $this->db->update($misi,$data);
    }

}
?>