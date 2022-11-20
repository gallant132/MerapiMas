<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_NamaKaryawan extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_karyawan(){
        $this->db->select("*");
        $this->db->from('karyawan');
        $this->db->join('jabatan', 'jabatan.id_jabatan = karyawan.id_jabatan');
        $query = $this->db->get();
        return $query->result();
        // $query = $this->db->get('layanan');
        // return $query->result();
    }

    public function input_data($data, $karyawan)
    {
        $this->db->insert($karyawan, $data);
    }

    public function edit_data($where,$karyawan){
        return $this->db->get_where($karyawan,$where);
    }

    public function hapus_karyawan($where,$karyawan){
        $this->db->where($where);
        $this->db->delete($karyawan);
    }
    
    public function update_data($where,$data,$karyawan){
        $this->db->where($where);
        $this->db->update($karyawan,$data);
    }

}
?>