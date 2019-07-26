<?php
class Lokasi extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Lokasi_model');
  }
  function index()
  {
    $data['lokasi_data_center'] = $this->Lokasi_model->get_lokasi();
    $this->load->view('LokasiDataCentre', $data);
  }
  function add_new()
  {
    $this->load->view('addLokasi');
  }
  function save()
  {
    $Nama_Lokasi_DC = $this->input->post('Nama_Lokasi_DC');
    $Alamat_Lokasi_DC = $this->input->post('Alamat_Lokasi_DC');
    $this->Lokasi_model->add($Nama_Lokasi_DC, $Alamat_Lokasi_DC);
    redirect('asset/lokasidatacentre');
  }
  function delete()
  {
    $ID_Lokasi_DC = $this->uri->segment(3);
    $ID_Lokasi_DC = $this->input->post('ID_Lokasi_DC');
    $this->Lokasi_model->delete($ID_Lokasi_DC);
    redirect('asset/lokasidatacentre');
  }
  function get_edit()
  {
    $ID_Lokasi_DC = $this->uri->segment(3);
    $result = $this->Lokasi_model->get_lokasi_id($ID_Lokasi_DC);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'ID_Lokasi_DC' => $i['ID_Lokasi_DC'],
        'Nama_Lokasi_DC' => $i['Nama_Lokasi_DC'],
        'Alamat_Lokasi_DC' => $i['Alamat_Lokasi_DC ']
      );
      $this->load->view('addLokasi', $data);
    }
  }

  function update()
  {
    $ID_Lokasi_DC = $this->input->post('ID_Lokasi_DC');
    $Nama_Lokasi_DC = $this->input->post('Nama_Lokasi_DC');
    $Alamat_Lokasi_DC = $this->input->post('Alamat_Lokasi_DC');
    $this->Lokasi_model->update($ID_Lokasi_DC,$Nama_Lokasi_DC, $Alamat_Lokasi_DC);
    redirect('asset/lokasidatacentre');
  }
}
