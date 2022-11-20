<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Contact extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_contact(){
        $query = $this->db->get('contact');
        return $query->result();
    }

    public function input_data($data, $contact)
    {
        $this->db->insert($contact, $data);
    }

    public function edit_data($where,$contact){
        return $this->db->get_where($contact,$where);
    }

    public function hapus_contact($where,$contact){
        $this->db->where($where);
        $this->db->delete($contact);
    }
    
    public function update_data($where,$data,$contact){
        $this->db->where($where);
        $this->db->update($contact,$data);
    }

}
?>