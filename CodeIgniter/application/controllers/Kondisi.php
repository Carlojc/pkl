<?php
class Kondisi extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Kondisi_model');
  }
  function index()
  {
    $data['kondisi_asset'] = $this->Kondisi_model->get_kondisi();
    $this->load->view('KondisiAsset', $data);
  }
  function add_new()
  {
    $this->load->view('addKondisi');
  }
  function save()
  {
    $Kondisi_Asset = $this->input->post('Kondisi_Asset');
    $this->Kondisi_model->add($Kondisi_Asset);
    redirect('asset/kondisi_asset');
  }
  function delete()
  {
    $ID_Kondisi = $this->uri->segment(3);
    $ID_Kondisi = $this->input->post('ID_Kondisi');
    $this->Kondisi_model->delete($ID_Kondisi);
    redirect('asset/kondisi_asset');
  }
  function get_edit()
  {
    $ID_Kondisi = $this->uri->segment(3);
    $result = $this->Kondisi_model->get_kondisi($ID_Kondisi);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'ID_Kondisi' => $i['ID_Kondisi'],
        'Kondisi_Asset' => $i['Kondisi_Asset'],
      );
      $this->load->view('addKondisi', $data);
    }
  }

  function update()
  {
    $ID_Kondisi = $this->input->post('ID_Kondisi');
    $Kondisi_Asset = $this->input->post('Kondisi_Asset');
    $this->Kondisi_model->update($ID_Kondisi, $Kondisi_Asset);
    redirect('asset/kondisi_asset');
  }
}
