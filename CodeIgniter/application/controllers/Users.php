<?php
class Users extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
  }
  function index()
  {
    $data['user'] = $this->User_model->get_user();
    $this->load->view('user', $data);
  }
  function add_new()
  {
    $this->load->view('addUser');
  }
  function save()
  {
    $Nama = $this->input->post('Nama');
    $Hak_Akses = $this->input->post('Hak_Akses');
    $this->User_model->add($Nama,$Hak_Akses);
    redirect('asset/user');
  }
  function delete()
  {
    $ID_User = $this->uri->segment(3);
    $ID_User = $this->input->post('ID_User');
    $this->User_model->delete($ID_User);
    redirect('asset/user');
  }
  function get_edit()
  {
    $ID_User = $this->uri->segment(3);
    $result = $this->User_model->get_user_id($ID_User);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'ID_User' => $i['ID_User'],
        'Nama' => $i['Nama'],
        '$Hak_Akses' => $i['$Hak_Akses']
      );
      $this->load->view('addUser', $data);
    }
  }

  function update()
  {
    $ID_User = $this->input->post('ID_User');
    $Nama = $this->input->post('Nama');
    $Hak_Akses = $this->input->post('Hak_Akses');
    $this->User_model->update($ID_User,$Nama, $Hak_Akses);
    redirect('asset/user');
  }
}
