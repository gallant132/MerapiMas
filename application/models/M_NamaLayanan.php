<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_NamaLayanan extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_layanan(){
        $this->db->select("*");
        $this->db->from('layanan');
        $this->db->join('jenis_layanan', 'jenis_layanan.id_jenislayanan = layanan.id_jenislayanan');
        $query = $this->db->get();
        return $query->result();
        // $query = $this->db->get('layanan');
        // return $query->result();
    }

    public function input_data($data, $layanan)
    {
        $this->db->insert($layanan, $data);
    }

    public function edit_data($where,$layanan){
        return $this->db->get_where($layanan,$where);
    }

    public function hapus_layanan($where,$layanan){
        $this->db->where($where);
        $this->db->delete($layanan);
    }
    
    public function update_data($where,$data,$layanan){
        $this->db->where($where);
        $this->db->update($layanan,$data);
    }

}
?>