<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Software_model extends CI_Model
{

    public function get_software() {
    	$this->db->select('software.*','entity.Nama_Unit');
        $this->db->from('software');
        $this->db->join('entity','entity.ID_Entity = software.Owner_App');
        $query =$this->db->get();
    	return $query->result();
    	    }

    public function add($Nama_Aplikasi,$Owner_App,$Jenis_App,$Kondisi_App,$Status_App,$Nama_Server,$Fungsi,$Detail_Deskripsi,$Spesifikasi,$Platform,$Database,$IP_Address,$Hostname,$Memory,$Storage,$CPU,$Mesin_Server,$Lokasi,$Lokasi_DC,$Developed_By,$Region_Server,$Site,$BackUp_Real_Time,$Tgl_Implementasi,$Berita_Acara,$Harga,$Tgl_Pembelian,$SKP,$Tgl_Maintenance,$No_PKS,$PKS){
    	$data = array('Nama_Aplikasi' =>$Nama_Aplikasi ,
        'Owner_App' =>$Owner_App ,
        'Jenis_App' =>$Jenis_App ,
        'Kondisi_App' =>$Kondisi_App ,
        'Status_App' =>$Status_App ,
        'Nama_Server' =>$Nama_Server ,
        'Fungsi' =>$Fungsi ,
        'Detail_Deskripsi' =>$Detail_Deskripsi , 
        'Spesifikasi' =>$Spesifikasi ,
        'Platform' =>$Platform ,
        'Database' =>$Database ,
        'IP_Address' =>$IP_Address ,
        'Hostname' =>$Hostname ,
        'Memory' =>$Memory ,
        'Storage' =>$Storage ,
        'CPU' =>$CPU ,
        'Mesin_Server' =>$Mesin_Server ,
        'Lokasi' =>$Lokasi ,
        'Lokasi_DC' =>$Lokasi_DC ,
        'Developed_By' =>$Developed_By ,
        'Region_Server' =>$Region_Server ,
        'Site' =>$Site ,
        'BackUp_Real_Time' =>$BackUp_Real_Time ,
        'Tgl_Implementasi' =>$Tgl_Implementasi ,
        'Berita_Acara' =>$Berita_Acara ,
        'Harga' =>$Harga ,
        'Tgl_Pembelian' =>$Tgl_Pembelian ,
        'SKP' =>$SKP ,
        'Tgl_Maintenance' =>$Tgl_Maintenance ,
        'No_PKS' =>$No_PKS ,
        'PKS' =>$PKS ,
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

    public function update($ID_SW,$Nama_Aplikasi,$Owner_App,$Jenis_App,$Kondisi_App,$Status_App,$Nama_Server,$Fungsi,$Detail_Deskripsi,$Spesifikasi,$Platform,$Database,$IP_Address,$Hostname,$Memory,$Storage,$CPU,$Mesin_Server,$Lokasi_DC,$Developed_By,$Region_Server,$Site,$BackUp_Real_Time,$Tgl_Implementasi,$Berita_Acara,$Harga,$Tgl_Pembelian,$SKP,$Tgl_Maintenance,$No_PKS,$PKS)
    {
        $data = array('Nama_Aplikasi' =>$Nama_Aplikasi ,
        'Owner_App' =>$Owner_App ,
        'Jenis_App' =>$Jenis_App ,
        'Kondisi_App' =>$Kondisi_App ,
        'Status_App' =>$Status_App,
        'Nama_Server' =>$Nama_Server,
        'Fungsi' =>$Fungsi ,
        'Detail_Deskripsi' =>$Detail_Deskripsi , 
        'Spesifikasi' =>$Spesifikasi ,
        'Platform' =>$Platform ,
        'Database' =>$Database ,
        'IP_Address' =>$IP_Address ,
        'Hostname' =>$Hostname ,
        'Memory' =>$Memory ,
        'Storage' =>$Storage ,
        'CPU' =>$CPU ,
        'Mesin_Server' =>$Mesin_Server ,
        'Lokasi_DC' =>$Lokasi_DC ,
        'Developed_By' =>$Developed_By ,
        'Region_Server' =>$Region_Server ,
        'Site' =>$Site ,
        'BackUp_Real_Time' =>$BackUp_Real_Time ,
        'Tgl_Implementasi' =>$Tgl_Implementasi ,
        'Berita_Acara' =>$Berita_Acara ,
        'Harga' =>$Harga ,
        'Tgl_Pembelian' =>$Tgl_Pembelian ,
        'SKP' =>$SKP ,
        'Tgl_Maintenance' =>$Tgl_Maintenance ,
        'No_PKS' =>$No_PKS ,
        'PKS' =>$PKS ,
        );
        $this->db->where('ID_SW', $ID_SW);
        $this->db->update('software', $data);
    }
}