<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kondisi_model extends CI_Model
{
    private $_table = "kondisi_asset";

    public function get_kondisi()
    {
        $result = $this->db->get('kondisi_asset');
        return $result;
    }
    public function add($Kondisi_Asset)
    {
        $data = array('Kondisi_Asset' => $Kondisi_Asset);
        $this->db->insert('kondisi_asset', $data);
    }

    public function delete($ID_Kondisi)
    {
        $this->db->where('ID_Kondisi', $ID_Kondisi);
        $this->db->delete('kondisi_asset');
    }
    public function get__id($ID_Kondisi)
    {
        $query = $this->db->get_where('kondisi_asset', array('ID_Kondisi' => $ID_Kondisi));
        return $query;
    }
    public function update($ID_Kondisi, $Kondisi_Asset)
    {
        $data = array('Kondisi_Asset' => $Kondisi_Asset);
        $this->db->where('ID_Kondisi', $ID_Kondisi);
        $this->db->update('kondisi_asset', $data);
    }
}
