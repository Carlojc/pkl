<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model
{
    private $_table = "vendor";

    public function get_region () {
    	$result = $this->db->get('vendor');
    	return $result;
    	    }
    public function add($nama_vendor,$alamat,$No_Telp,$No_Fax,$Email){
    	$data = array('nama_vendor' =>$nama_vendor ,
			 'alamat' =>$alamat ,
			 'No_telp' =>$No_telp ,
			 'No_fax' =>$No_fax , 
			 'email' =>$email ,);
		$this->db->insert('vendor',$data);
    }

    public function delete($ID_Vendor){
        $this->db->where('ID_Vendor',$ID_Vendor);
        $this->db->delete('vendor');
    }
    
    public function get_vendor_id($ID_Vendor){
        $query = $this->db->get_where('vendor',array('ID_Vendor'=>$ID_Vendor));
    }

    public function update($ID_Vendor,$nama_vendor,$alamat,$No_Telp,$No_Fax,$Email){
        $data = array(
        	'nama_vendor' =>$nama_vendor ,
			 'alamat' =>$alamat ,
			 'No_telp' =>$No_telp ,
			 'No_fax' =>$No_fax , 
			 'email' =>$email ,);
        $this->db->where('ID_Vendor',$ID_Vendor);
        $this->db->update('vendor',$data);
    }

}