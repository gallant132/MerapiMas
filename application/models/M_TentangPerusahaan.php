<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_TentangPerusahaan extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_pilihtentang(){
        $this->db->select('DISTINCT(id_tentang), nama_perusahaan');
        $this->db->group_by('id_tentang'); 
        // $query = $this->db->get('Books');
        // $this->db->select('id_tentang');
        $this->db->from('tentang');
        // $this->db->distinct();
        // $query = $this->db->get('Books');
        // $this->db->select("*");
        // $this->db->from('tentang');
        // $this->db->join('alamat', 'alamat.id_tentang = tentang.id_tentang');
        // $this->db->join('contact', 'contact.id_contact = tentang.id_contact');
        // $this->db->join('visi', 'visi.id_visi = tentang.id_visi');
        // $this->db->join('misi', 'misi.id_misi = tentang.id_misi');
        // $this->db->join('legalitas', 'legalitas.id_legalitas = tentang.id_legalitas');
        // $this->db->join('cov', 'cov.id_cov = tentang.id_cov');
        // $this->db->group_by('alamat'); 
        $query = $this->db->get();
        return $query->result();
        // $query = $this->db->get('layanan');
        // return $query->result();
    }

    public function get_tentang(){
        $this->db->select("*");
        $this->db->from('tentang');
        $query = $this->db->get();
        return $query->result();
    }


    public function input_data($data, $tentang)
    {
        
        $this->db->insert($tentang, $data);
    }

    public function edit_data($where,$tentang){
        return $this->db->get_where($tentang,$where);
    }

    public function hapus_tentang($where,$tentang){
        $this->db->where($where);
        $this->db->delete($tentang);
    }
    
    public function update_data($where,$data,$tentang){
        $this->db->where($where);
        $this->db->update($tentang,$data);
    }

    public function get_table_by_id_tentang($table, $id_tentang){
       $query = $this->db->get_where($table, array('id_tentang' => $id_tentang));
       return $query->result();
    }

    public function get_all(){
       $query = $this->db->get('tentang');
       return $query->result();
    }

}
?>