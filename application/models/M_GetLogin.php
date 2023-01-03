<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Getlogin extends CI_Model
{
        function cek_login($where){
                return $this->db->get_where('admin',$where);
        }
}
?>