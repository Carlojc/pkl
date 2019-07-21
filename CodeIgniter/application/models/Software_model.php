<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Software_model extends CI_Model
{
    private $_table = "software";

    public function get_software () {
    	$result = $this->db->get('software');
    	return $result;
    	    }
    public function save(){
    	$data = array('' => , );
    	
    }
    public function add(){

    }
    public function delete(){

    }

}