<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Visi extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_visi(){
        $this->db->select("*");
        $this->db->from('visi');
        $this->db->join('tentang', 'tentang.id_tentang = visi.id_tentang');
        $query = $this->db->get();
        // $query = $this->db->get('visi');
        //     return $query->result();
        return $query->result();
    }

    public function input_data($data, $visi)
    {
        $this->db->insert($visi, $data);
    }

    public function edit_data($where,$visi){
        return $this->db->get_where($visi,$where);
    }

    public function hapus_visi($where,$visi){
        $this->db->where($where);
        $this->db->delete($visi);
    }
    
    public function update_data($where,$data,$visi){
        $this->db->where($where);
        $this->db->update($visi,$data);
    }

}
?>