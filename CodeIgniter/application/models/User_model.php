<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public function cek_user ($username, $password){
        $this->db->where('username',$username);
        $this->db->where('pass',md5($password));
        $query=$this->db->get('user');
        return $query->row_array();
    }

    public function get_user()
    {
        $result = $this->db->get('user');
        return $result;
    }
    public function add($Nama,$Hak_Akses)
    {
        $data = array('Nama' => $Nama, 'Hak_Akses' => $Hak_Akses);
        $this->db->insert('user', $data);
    }

    public function delete($ID_User)
    {
        $this->db->where('ID_User', $ID_User);
        $this->db->delete('user');
    }
    public function get_user_id($ID_User)
    {
        $query = $this->db->get_where('user', array('ID_User' => $ID_User));
        return $query;
    }
    public function update($ID_User, $Nama,$Hak_Akses)
    {
        $data = array('Nama' => $Nama, 'Hak_Akses' => $Hak_Akses);
        $this->db->where('ID_User', $ID_User);
        $this->db->update('user', $data);
    }
}
