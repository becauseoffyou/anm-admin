<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_data extends CI_Model {
    
    function getImage($jenis)
	{
		$sql = "SELECT * FROM tb_image  WHERE jenis = $jenis";
		return $this->db->query($sql);
	}
}
