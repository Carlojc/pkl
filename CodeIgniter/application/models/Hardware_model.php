<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hardware_model extends CI_Model
{
    private $_table = "hardware";

    public function get_hardware() {
        $hardware = $this->db->get($this->_table)->result();
    	foreach ($hardware as $key => $value) {
            $this->db->where('ID_Entity', $value->Owner_HW);
            $entity = $this->db->get('entity')->row();
            $this->db->where('ID_Jenis_SW',$value->Jenis_HW);
            $jenis_software = $this->db->get('jenis_software')->row();
            $this->db->where('ID_Kondisi',$value->Kondisi_HW);
            $kondisi_asset = $this->db->get('kondisi_asset')->row();
            $this->db->where('ID_Status',$value->Status_HW);
            $status_asset = $this->db->get('status_asset')->row();
            $result[$key] = (object)array_merge((array)$hardware[$key], (array)$entity,(array)$jenis_software,(array)$kondisi_asset,(array)$status_asset);
        }
        return $result;
    	    }

    public function add($Nama_HW,$Owner_HW,$Jenis_HW,$Penyedia_HW,$Kondisi_HW,$Status_HW,$Fungsi,$Detail_Deskripsi,$Spesifikasi,$Lokasi_HW,$Tgl_Sewa,$SKP,$Status_Kepemilikan,$Harga_Barang,$Tgl_Implementasi,$Berita_Acara,$Tgl_Maintenance,$No_PKS,$PKS){
    	$data = array('Nama_HW' =>$Nama_HW ,
        'Owner_HW' =>$Owner_HW ,
        'Jenis_HW' =>$Jenis_HW ,
        'Penyedia_HW' =>$Penyedia_HW ,
        'Kondisi_HW' =>$Kondisi_HW ,
        'Status_HW' =>$Status_HW ,
        'Fungsi' =>$Fungsi ,
        'Detail_Deskripsi' =>$Detail_Deskripsi , 
        'Spesifikasi' =>$Spesifikasi ,
        'Lokasi_HW' =>$Lokasi_HW ,
        'Tgl_Sewa' =>$Tgl_Sewa ,
        'SKP' =>$SKP ,
        'Status_Kepemilikan' =>$Status_Kepemilikan ,
        'Harga_Barang' =>$Harga_Barang ,
        'Tgl_Implementasi' =>$Tgl_Implementasi ,
        'Berita_Acara' =>$Berita_Acara ,
        'Tgl_Maintenance' =>$Tgl_Maintenance ,
        'No_PKS' =>$No_PKS ,
        'PKS' =>$PKS ,
    	);
        $this->db->insert('hardware', $data);
    }
    
    public function delete($ID_HW)
    {
        $this->db->where('ID_HW', $ID_HW);
        $this->db->delete('hardware');
    }

    public function get_hardware_id($ID_HW)
    {
        $query = $this->db->get_where('hardware', array('ID_HW' => $ID_HW));
        return $query;
    }

    public function update($ID_HW,$Nama_HW,$Owner_HW,$Jenis_HW,$Penyedia_HW,$Kondisi_HW,$Status_HW,$Fungsi,$Detail_Deskripsi,$Spesifikasi,$Lokasi_HW,$Tgl_Sewa,$SKP,$Status_Kepemilikan,$Harga_Barang,$Tgl_Implementasi,$Berita_Acara,$Tgl_Maintenance,$No_PKS,$PKS)
    {
       $data = array('Nama_HW' =>$Nama_HW ,
        'Owner_HW' =>$Owner_HW ,
        'Jenis_HW' =>$Jenis_HW ,
        'Penyedia_HW' =>$Penyedia_HW ,
        'Kondisi_HW' =>$Kondisi_HW ,
        'Status_HW' =>$Status_HW ,
        'Fungsi' =>$Fungsi ,
        'Detail_Deskripsi' =>$Detail_Deskripsi , 
        'Spesifikasi' =>$Spesifikasi ,
        'Lokasi_HW' =>$Lokasi_HW ,
        'Tgl_Sewa' =>$Tgl_Sewa ,
        'SKP' =>$SKP ,
        'Status_Kepemilikan' =>$Status_Kepemilikan ,
        'Harga_Barang' =>$Harga_Barang ,
        'Tgl_Implementasi' =>$Tgl_Implementasi ,
        'Berita_Acara' =>$Berita_Acara ,
        'Tgl_Maintenance' =>$Tgl_Maintenance ,
        'No_PKS' =>$No_PKS ,
        'PKS' =>$PKS ,
        );
        $this->db->where('ID_HW', $ID_HW);
        $this->db->update('hardware', $data);
    }
}