<?php
class Software extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Software_model');
  }
  function index()
  {
    $data['software'] = $this->Software_model->get_software();
    print_r("hello");
    die();
  }
  function add_new()
  {
    $this->load->view('add_software');
  }

  function data_entity(){
    
  }
  function save(){
    $Nama_Aplikasi = $this->input->post('Nama_Aplikasi');
    $Owner_App = $this->input->post('Owner_App');
    $Jenis_App = $this->input->post('Jenis_App');
    $Kondisi_App = $this->input->post('Kondisi_App');
    $Status_App = $this->input->post('Status_App');
    $Nama_Server = $this->input->post('Nama_Server');
    $Fungsi = $this->input->post('Fungsi');
    $Detail_Deskripsi = $this->input->post('Detail_Deskripsi');
    $Spesifikasi = $this->input->post('Spesifikasi');
    $Platform = $this->input->post('Platform');
    $IP_Address = $this->input->post('IP_Address');
    $Database = $this->input->post('Database');
    $Hostname = $this->input->post('Hostname');
    $Memory = $this->input->post('Memory');
    $Storage = $this->input->post('Storage');
    $CPU = $this->input->post('CPU');
    $Mesin_Server = $this->input->post('Mesin_Server');
    $Lokasi = $this->input->post('Lokasi');
    $Lokasi_DC = $this->input->post('Lokasi_DC');
    $Developed_By = $this->input->post('Developed_By');
    $Region_Server = $this->input->post('Region_Server');
    $Site = $this->input->post('Site');
    $BackUp_Real_Time = $this->input->post('BackUp_Real_Time');
    $Tgl_Implementasi = $this->input->post('Tgl_Implementasi');
    $Berita_Acara = $this->input->post('Berita_Acara');
    $Harga = $this->input->post('Harga');
    $Tgl_Pembelian = $this->input->post('Tgl_Pembelian');
    $SKP = $this->input->post('SKP');
    $Tgl_Maintenance = $this->input->post('Tgl_Maintenance');
    $No_PKS = $this->input->post('No_PKS');
    $PKS = $this->input->post('PKS');
    $this->Software_model->add($Nama_Aplikasi,$Owner_App,$Jenis_App,$Kondisi_App,$Status_App,$Nama_Server,$Fungsi,$Detail_Deskripsi,$Spesifikasi,$Platform,$Database,$IP_Address,$Hostname,$Memory,$Storage,$CPU,$Mesin_Server,$Lokasi_DC,$Lokasi,$Developed_By,$Region_Server,$Site,$BackUp_Real_Time,$Tgl_Implementasi,$Berita_Acara,$Harga,$Tgl_Pembelian,$SKP,$Tgl_Maintenance,$No_PKS,$PKS);
    redirect('asset/software');

  }
  function delete()
  {
    $ID_SW = $this->uri->segment(3);
    $ID_SW = $this->input->post('ID_SW');
    $this->Software_model->delete($ID_SW);
    redirect('asset/software');
  }
  function get_edit()
  {
    $ID_SW = $this->uri->segment(3);
    $result = $this->Software_model->get_software_id($ID_SW);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'ID_SW' => $i['ID_SW'],
        'Nama_Aplikasi' => $i['Nama_Aplikasi'],
        'Owner_App' => $i['Owner_App'],
        'Jenis_App' => $i['Jenis_App'],
        'Kondisi_App' => $i['Kondisi_App'],
        'Status_App' => $i['Status_App'],
        'Nama_Server' => $i['Nama_Server'],
        'Fungsi' => $i['Fungsi'],
        'Detail_Deskripsi' => $i['Detail_Deskripsi'],
        'Spesifikasi' => $i['Spesifikasi'],
        'Platform' => $i['Platform'],
        'Database' => $i['Database'],
        'IP_Address' => $i['IP_Address'],
        'Hostname' => $i['Hostname'],
        'Memory' => $i['Memory'],
        'Storage' => $i['Storage'],
        'CPU' => $i['CPU'],
        'Mesin_Server' => $i['Mesin_Server'],
        'Lokasi_DC' => $i['Lokasi_DC'],
        'Developed_By' => $i['Developed_By'],
        'Region_Server' => $i['Region_Server'],
        'Site' => $i['Site'],
        'BackUp_Real_Time' => $i['BackUp_Real_Time'],
        'Tgl_Implementasi' => $i['Tgl_Implementasi'],
        'Berita_Acara' => $i['Berita_Acara'],
        'Harga' => $i['Harga'],
        'Tgl_Pembelian' => $i['Tgl_Pembelian'],
        'SKP' => $i['SKP'],
        'Tgl_Maintenance' => $i['Tgl_Maintenance'],
        'No_PKS' => $i['No_PKS'],
        'PKS' => $i['PKS'],
      );
      $this->load->view('add_software',$data);
    }
  }

  function update()
  {
    $ID_SW = $this->input->post('ID_SW');
    $Nama_Aplikasi = $this->input->post('Nama_Aplikasi');
    $Owner_App = $this->input->post('Owner_App');
    $Jenis_App = $this->input->post('Jenis_App');
    $Kondisi_App = $this->input->post('Kondisi_App');
    $Status_App = $this->input->post('Status_App');
    $Nama_Server = $this->input->post('Nama_Server');
    $Detail_Deskripsi = $this->input->post('Detail_Deskripsi');
    $Spesifikasi = $this->input->post('Spesifikasi');
    $IP_Address = $this->input->post('IP_Address');
    $Database = $this->input->post('Database');
    $Hostname = $this->input->post('Hostname');
    $Memory = $this->input->post('Memory');
    $Storage = $this->input->post('Storage');
    $CPU = $this->input->post('CPU');
    $Mesin_Server = $this->input->post('Mesin_Server');
    $Lokasi_DC = $this->input->post('Lokasi_DC');
    $Region_Server = $this->input->post('Region_Server');
    $Site = $this->input->post('Site');
    $BackUp_Real_Time = $this->input->post('BackUp_Real_Time');
    $Tgl_Implementasi = $this->input->post('Tgl_Implementasi');
    $Berita_Acara = $this->input->post('Berita_Acara');
    $Harga = $this->input->post('Harga');
    $Tgl_Pembelian = $this->input->post('Tgl_Pembelian');
    $SKP = $this->input->post('SKP');
    $Tgl_Maintenance = $this->input->post('Tgl_Maintenance');
    $No_PKSp = $this->input->post('No_PKS');
    $PKS = $this->input->post('PKS');
    $this->Software_model->update($ID_SW,$Nama_Aplikasi,$Owner_App,$Jenis_App,$Kondisi_App,$Status_App,$Nama_Server,$Fungsi,$Detail_Deskripsi,$Spesifikasi,$Platform,$Database,$IP_Address,$Hostname,$Memory,$Storage,$CPU,$Mesin_Server,$Lokasi_DC,$Developed_By,$Region_Server,$Site,$BackUp_Real_Time,$Tgl_Implementasi,$Berita_Acara,$Harga,$Tgl_Pembelian,$SKP,$Tgl_Maintenance,$No_PKS,$PKS);
    redirect('asset/software');
  }
}
