<?php
class Region extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Region_model');
  }
  function index(){
    $data['region_server'] = $this->Region_model->get_region();
    $this->load->view('RegionServer',$data);
  }
  function add_new(){
    $this->load->view('addRegion');
  }
  function save(){
    $GAS = $this->input->post('GAS');
    $DEV = $this->input->post('DEV');
    $PROD = $this->input->post('PROD');
    $this->product_model->save($GAS,$DEV,$PROD);
    redirect('region_server');
  }
  function delete(){
    $ID_Region_Server = $this->uri->segment(3);
    $this->Region_model->delete($ID_Region_Server);
    redirect('region_server');
  }
  function get_edit(){
     $ID_Region_Server = $this->uri->segment(3);
     $result = $this->Region_model->get_region_id($ID_Region_Server);
     if($result->num_rows()>0){
      $i = $result->row_array();
      $data = array('ID_Region_Server' => $i['ID_Region_Server'],
                    'GAS' => $i['GAS'],
                    'DEV' => $i['DEV'],
                    'PROD' => $i['PROD'], );
      $this->load->view('addRegion',$data);
     }

  }

  function update(){
    $ID_Region_Server = $this->input->post('ID_Region_Server');
    $GAS = $this->input->post('GAS');
    $DEV = $this->input->post('DEV');
    $PROD = $this->input->post('PROD');
    $this->product_model->update($ID_Region_Server,$GAS,$DEV,$PROD);
    redirect('region_server');
  }

}