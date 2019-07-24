<?php defined('BASEPATH') or exit('No direct script access allowed');

class jenis_hw_model extends CI_Model
{
    public $_table = "jenis_hardware";

    public function show($limit, $offset)
    {
        $query = $this->db->get($this->table, $limit, $offset);
        $data['object'] = $query->result();
        $data['array'] = $query->result_array();
        $data['count'] = $query->num_rows();
        return $data;
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $ID_Jenis_HW)
    {
        return $this->db->update($this->table, $data, array('ID_Jenis_HW' => $ID_Jenis_HW));
    }

    public function delete($ID_Jenis_HW)
    {
        return $this->db->delete($this->table, array('ID_Jenis_HW' => $ID_Jenis_HW));
    }
}