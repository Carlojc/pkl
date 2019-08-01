<?php defined('BASEPATH') or exit('No direct script access allowed');

class Software_model extends CI_Model
{
    private $_table = "software";

    public function get_software()
    {
        $software = $this->db->get($this->_table)->result();
        foreach ($software as $key => $value) {
            $this->db->where('ID_Entity', $value->Owner_App);
            $entity = $this->db->get('entity')->row();
            $this->db->where('ID_Jenis_SW', $value->Jenis_App);
            $jenis_software = $this->db->get('jenis_software')->row();
            $this->db->where('ID_Kondisi', $value->Kondisi_App);
            $kondisi_asset = $this->db->get('kondisi_asset')->row();
            $this->db->where('ID_Status', $value->Status_App);
            $status_asset = $this->db->get('status_asset')->row();
            $this->db->where('ID_Lokasi_DC', $value->Lokasi_DC);
            $lokasi_data_center = $this->db->get('lokasi_data_center')->row();
            $this->db->where('ID_Vendor', $value->Developed_By);
            $vendor = $this->db->get('vendor')->row();
            $this->db->where('ID_Region_Server', $value->Region_Server);
            $region_server = $this->db->get('region_server')->row();
            $result[$key] = (object) array_merge((array) $software[$key], (array) $entity, (array) $jenis_software, (array) $kondisi_asset, (array) $status_asset, (array) $lokasi_data_center, (array) $vendor, (array) $region_server);
        }
        return $result;
    }

    public function add($Nama_Aplikasi, $Owner_App, $Jenis_App, $Kondisi_App, $Status_App, $Nama_Server, $Fungsi, $Detail_Deskripsi, $Spesifikasi, $Platform, $Database, $IP_Address, $Hostname, $Memory, $Storage, $CPU, $Mesin_Server, $Lokasi, $Lokasi_DC, $Developed_By, $Region_Server, $Site, $BackUp_Real_Time, $Tgl_Implementasi, $Berita_Acara, $Harga, $Tgl_Pembelian, $SKP, $Tgl_Maintenance, $No_PKS, $PKS)
    {
        $data = array(
            'Nama_Aplikasi' => $Nama_Aplikasi,
            'Owner_App' => $Owner_App,
            'Jenis_App' => $Jenis_App,
            'Kondisi_App' => $Kondisi_App,
            'Status_App' => $Status_App,
            'Nama_Server' => $Nama_Server,
            'Fungsi' => $Fungsi,
            'Detail_Deskripsi' => $Detail_Deskripsi,
            'Spesifikasi' => $Spesifikasi,
            'Platform' => $Platform,
            'Database' => $Database,
            'IP_Address' => $IP_Address,
            'Hostname' => $Hostname,
            'Memory' => $Memory,
            'Storage' => $Storage,
            'CPU' => $CPU,
            'Mesin_Server' => $Mesin_Server,
            'Lokasi' => $Lokasi,
            'Lokasi_DC' => $Lokasi_DC,
            'Developed_By' => $Developed_By,
            'Region_Server' => $Region_Server,
            'Site' => $Site,
            'BackUp_Real_Time' => $BackUp_Real_Time,
            'Tgl_Implementasi' => $Tgl_Implementasi,
            'Berita_Acara' => $Berita_Acara,
            'Harga' => $Harga,
            'Tgl_Pembelian' => $Tgl_Pembelian,
            'SKP' => $SKP,
            'Tgl_Maintenance' => $Tgl_Maintenance,
            'No_PKS' => $No_PKS,
            'PKS' => $PKS,
        );
        $this->db->insert('software', $data);
    }

    public function delete($ID_SW)
    {
        $this->db->where('ID_SW', $ID_SW);
        $this->db->delete('software');
    }

    public function get_software_id($ID_SW)
    {
        $query = $this->db->get_where('software', array('ID_SW' => $ID_SW));
        return $query;
    }

    public function update($ID_SW, $Nama_Aplikasi, $Owner_App, $Jenis_App, $Kondisi_App, $Status_App, $Nama_Server, $Fungsi, $Detail_Deskripsi, $Spesifikasi, $Platform, $Database, $IP_Address, $Hostname, $Memory, $Storage, $CPU, $Mesin_Server, $Lokasi, $Lokasi_DC, $Developed_By, $Region_Server, $Site, $BackUp_Real_Time, $Tgl_Implementasi, $Berita_Acara, $Harga, $Tgl_Pembelian, $SKP, $Tgl_Maintenance, $No_PKS, $PKS)
    {
        $data = array(
            'Nama_Aplikasi' => $Nama_Aplikasi,
            'Owner_App' => $Owner_App,
            'Jenis_App' => $Jenis_App,
            'Kondisi_App' => $Kondisi_App,
            'Status_App' => $Status_App,
            'Nama_Server' => $Nama_Server,
            'Fungsi' => $Fungsi,
            'Detail_Deskripsi' => $Detail_Deskripsi,
            'Spesifikasi' => $Spesifikasi,
            'Platform' => $Platform,
            'Database' => $Database,
            'IP_Address' => $IP_Address,
            'Hostname' => $Hostname,
            'Memory' => $Memory,
            'Storage' => $Storage,
            'CPU' => $CPU,
            'Mesin_Server' => $Mesin_Server,
            'Lokasi' => $Lokasi,
            'Lokasi_DC' => $Lokasi_DC,
            'Developed_By' => $Developed_By,
            'Region_Server' => $Region_Server,
            'Site' => $Site,
            'BackUp_Real_Time' => $BackUp_Real_Time,
            'Tgl_Implementasi' => $Tgl_Implementasi,
            'Berita_Acara' => $Berita_Acara,
            'Harga' => $Harga,
            'Tgl_Pembelian' => $Tgl_Pembelian,
            'SKP' => $SKP,
            'Tgl_Maintenance' => $Tgl_Maintenance,
            'No_PKS' => $No_PKS,
            'PKS' => $PKS,
        );
        $this->db->where('ID_SW', $ID_SW);
        $this->db->update('software', $data);
    }
}
