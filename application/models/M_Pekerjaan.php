<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pekerjaan extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_pekerjaan(){
        $this->db->select("*");
        $this->db->from('pekerjaan');
        $this->db->join('layanan', 'layanan.id_layanan = pekerjaan.id_layanan');
        $query = $this->db->get();
        return $query->result();
        // $query = $this->db->get('layanan');
        // return $query->result();
    }

    public function input_data($data, $pekerjaan)
    {
        $this->db->insert($pekerjaan, $data);
    }

    public function edit_data($where,$pekerjaan){
        return $this->db->get_where($pekerjaan,$where);
    }

    public function hapus_pekerjaan($where,$pekerjaan){
        $this->db->where($where);
        $this->db->delete($pekerjaan);
    }
    
    public function update_data($where,$data,$pekerjaan){
        $this->db->where($where);
        $this->db->update($pekerjaan,$data);
    }

}
?>