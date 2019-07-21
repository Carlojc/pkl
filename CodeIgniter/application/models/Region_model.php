<?php defined('BASEPATH') or exit('No direct script access allowed');

class Region_model extends CI_Model
{
    private $_table = "region_server";

    public function get_region()
    {
        $result = $this->db->get('region_server');
        return $result;
    }
    public function add($GAS, $DEV, $PROD)
    {
        $data = array('GAS' => $GAS, 'DEV' => $DEV, 'PROD' => $PROD);
        $this->db->insert('region_server', $data);
    }

    public function delete($ID_Region_Server)
    {
        $this->db->where('ID_Region_Server', $ID_Region_Server);
        $this->db->delete('region_server');
    }
    public function get_region_id($ID_Region_Server)
    {
        $query = $this->db->get_where('region_server', array('ID_Region_Server' => $ID_Region_Server));
        return $query;
    }
    public function update($ID_Region_Server, $GAS, $DEV, $PROD)
    {
        $data = array('GAS' => $GAS, 'DEV' => $DEV, 'PROD' => $PROD);
        $this->db->where('ID_Region_Server', $ID_Region_Server);
        $this->db->update('region_server', $data);
    }
}
