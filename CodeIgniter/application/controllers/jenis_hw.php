<?php
class jenis_hw extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('jenis_hw_model');
  }
  function index()
  {
    $data['jenis_hardware'] = $this->jenis_hw_model->get_jenis_hardware();
    $this->load->view('jenis_hardware', $data);
  }
  function add_new()
  {
    $this->load->view('addJenis_HW');
  }
  function save()
  {
    $Type_HW = $this->input->post('Type_HW');
    $Jenis_HW = $this->input->post('Jenis_HW');
    $this->jenis_hw_model->add($Type_HW, $Jenis_HW);
    redirect('asset/jenis_hardware');
  }
  function delete()
  {
    $ID_Jenis_HW = $this->uri->segment(3);
    $ID_Jenis_HW = $this->input->post('ID_Jenis_HW');
    $this->jenis_hw_model->delete($ID_Jenis_HW);
    redirect('asset/jenis_hardware');
  }
  function get_edit()
  {
    $ID_Jenis_HW = $this->uri->segment(3);
    $result = $this->jenis_hw_model->get_jenis_hardware_id($ID_Jenis_HW);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'ID_Jenis_HW' => $i['ID_Jenis_HW'],
        'Type_HW' => $i['Type_HW'],
        'Jenis_HW' => $i['Jenis_HW']
      );
      $this->load->view('addJenis_HW', $data);
    }
  }

  function update()
  {
    $ID_Jenis_HW = $this->input->post('ID_Jenis_HW');
    $Type_HW = $this->input->post('Type_HW');
    $Jenis_HW = $this->input->post('Jenis_HW');
    $this->jenis_hw_model->update($ID_Jenis_HW, $Type_HW, $Jenis_HW);
    redirect('asset/jenis_hardware');
  }
}
