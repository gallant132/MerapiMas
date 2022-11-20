<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_TentangPerusahaan extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_tentang(){
        $this->db->select("*");
        $this->db->from('tentang');
        $this->db->join('alamat', 'alamat.id_tentang = tentang.id_tentang');
        // $this->db->join('contact', 'contact.id_contact = tentang.id_contact');
        // $this->db->join('visi', 'visi.id_visi = tentang.id_visi');
        // $this->db->join('misi', 'misi.id_misi = tentang.id_misi');
        // $this->db->join('legalitas', 'legalitas.id_legalitas = tentang.id_legalitas');
        // $this->db->join('cov', 'cov.id_cov = tentang.id_cov');
        $this->db->group_by('alamat'); 
        $query = $this->db->get();
        return $query->result();
        // $query = $this->db->get('layanan');
        // return $query->result();
    }

    public function input_data($data, $tentang)
    {
        
        $this->db->insert($tentang, $data);
    }

    public function edit_data($where,$tentang){
        return $this->db->get_where($tentang,$where);
    }

    public function hapus_karyawan($where,$tentang){
        $this->db->where($where);
        $this->db->delete($tentang);
    }
    
    public function update_data($where,$data,$tentang){
        $this->db->where($where);
        $this->db->update($tentang,$data);
    }

}
?>