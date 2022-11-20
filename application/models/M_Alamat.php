<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Alamat extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_alamat(){
        // $query = $this->db->get('alamat');
        $this->db->select("*");
        $this->db->from('alamat');
        $this->db->join('tentang', 'tentang.id_tentang = alamat.id_tentang');
        $query = $this->db->get();
        return $query->result();
        // return $query->result();
    }

    public function input_data($data, $alamat)
    {
        $this->db->insert($alamat, $data);
    }

    public function edit_data($where,$alamat){
        return $this->db->get_where($alamat,$where);
    }

    public function hapus_alamat($where,$alamat){
        $this->db->where($where);
        $this->db->delete($alamat);
    }
    
    public function update_data($where,$data,$alamat){
        $this->db->where($where);
        $this->db->update($alamat,$data);
    }

}
?>