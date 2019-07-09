<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public function cek_user($username, $password) {
    	$this->db->where('username', $username);
    	$this->db->where('pass', md5($password));
    	$query = $this->db->get('user');
    	return $query->row_array();
    }
    
}