<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_model extends CI_Model
{
    private $_table = "lokasi_data_center";

    public function get_lokasi()
    {
        $result = $this->db->get('lokasi_data_center');
        return $result;
    }
    public function add($Nama_Lokasi_DC,$Alamat_Lokasi_DC)
    {
        $data = array('Nama_Lokasi_DC' => $Nama_Lokasi_DC, 'Alamat_Lokasi_DC' => $Alamat_Lokasi_DC);
        $this->db->insert('lokasi_data_center', $data);
    }

    public function delete($ID_Lokasi_DC)
    {
        $this->db->where('ID_Lokasi_DC', $ID_Lokasi_DC);
        $this->db->delete('lokasi_data_center');
    }
    public function get_lokasi_id($ID_Lokasi_DC)
    {
        $query = $this->db->get_where('lokasi_data_center', array('ID_Lokasi_DC' => $ID_Lokasi_DC));
        return $query;
    }
    public function update($ID_Lokasi_DC,$Nama_Lokasi_DC,$Alamat_Lokasi_DC)
    {
        $data = array('Nama_Lokasi_DC' => $Nama_Lokasi_DC, 'Alamat_Lokasi_DC' => $Alamat_Lokasi_DC);
        $this->db->where('ID_Lokasi_DC', $ID_Lokasi_DC);
        $this->db->update('lokasi_data_center', $data);
    }
}
