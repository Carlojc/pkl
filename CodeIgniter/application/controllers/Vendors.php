<?php
class Vendors extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Vendor_model');
  }
  function index()
  {
    $data['vendor'] = $this->Vendor_model->get_vendor();
    $this->load->view('vendor', $data);
  }
  function add_new()
  {
    $this->load->view('addVendor');
  }
  function save()
  {
    $nama_vendor = $this->input->post('Nama_Vendor');
    $alamat = $this->input->post('Alamat');
    $No_Telp = $this->input->post('No_Telp');
    $No_Fax = $this->input->post('No_Fax');
    $Email = $this->input->post('Email');
    $this->Vendor_model->add($nama_vendor,$alamat,$No_Telp,$No_Fax,$Email);
    redirect('asset/vendor');
  }
  function delete()
  {
    $ID_Vendor = $this->uri->segment(3);
    $ID_Vendor = $this->input->post('ID_Vendor');
    $this->Vendor_model->delete($ID_Vendor);
    redirect('asset/vendor');
  }
  function get_edit()
  {
    $ID_Vendor = $this->uri->segment(3);
    $result = $this->Vendor_model->get_vendor_id($ID_Vendor);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'ID_Vendor' => $i['ID_Vendor'],
        'Nama_Vendor' => $i['Nama_Vendor'],
        'Alamat' => $i['Alamat'],
        'No_Telp' => $i['No_Telp'],
        'No_Fax' => $i['No_Fax'],
        'Email' => $i['Email']
      );
      $this->load->view('addVendor', $data);
    }
  }

  function update()
  {
    $ID_Vendor = $this->input->post('ID_Vendor');
    $nama_vendor = $this->input->post('Nama_Vendor');
    $alamat = $this->input->post('Alamat');
    $No_Telp = $this->input->post('No_Telp');
    $No_Fax = $this->input->post('No_Tax');
    $Email = $this->input->post('Email');
    $this->Vendor_model->update($ID_Vendor,$nama_vendor,$alamat,$No_Telp,$No_Fax,$Email);
    redirect('asset/vendor');
  }
}
