<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_upload extends CI_Model {
    
    function getDataBanner() {
        $query = $this->db->get('tb_image');
        return $query->result();
    }
    
    function insertDataBanner($data) {
        $this->db->insert('tb_image', $data);
    }
}