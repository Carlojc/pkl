<?php defined('BASEPATH') or exit('No direct script access allowed');

class jenis_hw_model extends CI_Model
{
    private $_table = "jenis_hardware";

    public function get_jenis_hardware()
    {
        $result = $this->db->get('jenis_hardware');
        return $result;
    }

    public function add($Type_HW, $Jenis_HW)
    {
        $data = array('Type_HW' => $Type_HW, 'Jenis_HW' => $Jenis_HW);
        $this->db->insert('jenis_hardware', $data);
    }

    public function delete($ID_Jenis_HW)
    {
        $this->db->where('ID_Jenis_HW', $ID_Jenis_HW);
        $this->db->delete('jenis_hardware');
    }
    public function get_jenis_hardware_id($ID_Jenis_HW)
    {
        $query = $this->db->get_where('jenis_hardware', array('ID_Jenis_HW' => $ID_Jenis_HW));
        return $query;
    }
    public function update($ID_Jenis_HW,$Type_HW, $Jenis_HW)
    {
        $data = array('Type_HW' => $Type_HW, 'Jenis_HW' => $Jenis_HW);
        $this->db->where('ID_Jenis_HW', $ID_Jenis_HW);
        $this->db->update('jenis_hardware', $data);
    }
}
