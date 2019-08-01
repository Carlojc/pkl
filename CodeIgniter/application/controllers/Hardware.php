<?php
class Hardware extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Hardware_model');
  }

  function save(){
    $Nama_HW = $this->input->post('Nama_HW');
    $Owner_HW = $this->input->post('Owner_HW');
    $Jenis_HW = $this->input->post('Jenis_HW');
    $Penyedia_HW = $this->input->post('Penyedia_HW');
    $Kondisi_HW = $this->input->post('Kondisi_HW');
    $Status_HW = $this->input->post('Status_HW');
    $Fungsi = $this->input->post('Fungsi');
    $Detail_Deskripsi = $this->input->post('Detail_Deskripsi');
    $Spesifikasi = $this->input->post('Spesifikasi');
    $Lokasi_HW = $this->input->post('Lokasi_HW');
    $Tgl_Sewa = $this->input->post('Tgl_Sewa');
    $SKP = $this->input->post('SKP');
    $Status_Kepemilikan = $this->input->post('Status_Kepemilikan');
    $Harga_Barang = $this->input->post('$Harga_Barang');
    $Tgl_Implementasi = $this->input->post('Tgl_Implementasi');
    $Berita_Acara = $this->input->post('Berita_Acara');
    $Tgl_Maintenance = $this->input->post('Tgl_Maintenance');
    $No_PKS = $this->input->post('No_PKS');
    $PKS = $this->input->post('PKS');
    $this->Hardware_model->add($Nama_HW,$Owner_HW,$Jenis_HW,$Penyedia_HW,$Kondisi_HW,$Status_HW,$Fungsi,$Detail_Deskripsi,$Spesifikasi,$Lokasi_HW,$Tgl_Sewa,$SKP,$Status_Kepemilikan,$Harga_Barang,$Tgl_Implementasi,$Berita_Acara,$Tgl_Maintenance,$No_PKS,$PKS);
    redirect('asset/hardware');

  }
  function delete()
  {
    $ID_HW = $this->uri->segment(3);
    $ID_HW = $this->input->post('ID_HW');
    $this->Hardware_model->delete($ID_HW);
    redirect('asset/hardware');
  }
  function get_edit()
  {
    $ID_HW = $this->uri->segment(3);
    $result = $this->Hardware_model->get_hardware_id($ID_HW);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
     $data = array('Nama_HW' =>$i['Nama_HW'] ,
        'Owner_HW' =>$i['Owner_HW'] ,
        'Jenis_HW' =>$i['Jenis_HW'] ,
        'Penyedia_HW' =>$i['Penyedia_HW'] ,
        'Kondisi_HW' =>$i['Kondisi_HW'] ,
        'Status_HW' =>$i['Status_HW'] ,
        'Fungsi' =>$i['Fungsi'] ,
        'Detail_Deskripsi' =>$i['Detail_Deskripsi'] , 
        'Spesifikasi' =>$i['Spesifikasi'] ,
        'Lokasi_HW' =>$i['Lokasi_HW'] ,
        'Tgl_Sewa' =>$i['Tgl_Sewa'] ,
        'SKP' =>$i['SKP'] ,
        'Status_Kepemilikan' =>$i['Status_Kepemilikan'] ,
        'Harga_Barang' =>$i['Harga_Barang'] ,
        'Tgl_Implementasi' =>$i['Tgl_Implementasi'] ,
        'Berita_Acara' =>$i['Berita_Acara'] ,
        'Tgl_Maintenance' =>$i['Tgl_Maintenance'] ,
        'No_PKS' =>$i['No_PKS'] ,
        'PKS' =>$i['PKS'] ,
        );
      $this->load->view('assetHardware',$data);
    }
  }

  function update()
  {
    $Nama_HW = $this->input->post('Nama_HW');
    $Owner_HW = $this->input->post('Owner_HW');
    $Jenis_HW = $this->input->post('Jenis_HW');
    $Penyedia_HW = $this->input->post('Penyedia_HW');
    $Kondisi_HW = $this->input->post('Kondisi_HW');
    $Status_HW = $this->input->post('Status_HW');
    $Fungsi = $this->input->post('Fungsi');
    $Detail_Deskripsi = $this->input->post('Detail_Deskripsi');
    $Spesifikasi = $this->input->post('Spesifikasi');
    $Lokasi_HW = $this->input->post('Lokasi_HW');
    $Tgl_Sewa = $this->input->post('Tgl_Sewa');
    $SKP = $this->input->post('SKP');
    $Status_Kepemilikan = $this->input->post('Status_Kepemilikan');
    $Harga_Barang = $this->input->post('$Harga_Barang');
    $Tgl_Implementasi = $this->input->post('Tgl_Implementasi');
    $Berita_Acara = $this->input->post('Berita_Acara');
    $Tgl_Maintenance = $this->input->post('Tgl_Maintenance');
    $No_PKS = $this->input->post('No_PKS');
    $PKS = $this->input->post('PKS');
    $this->Hardware_model->add($Nama_HW,$Owner_HW,$Jenis_HW,$Penyedia_HW,$Kondisi_HW,$Status_HW,$Fungsi,$Detail_Deskripsi,$Spesifikasi,$Lokasi_HW,$Tgl_Sewa,$SKP,$Status_Kepemilikan,$Harga_Barang,$Tgl_Implementasi,$Berita_Acara,$Tgl_Maintenance,$No_PKS,$PKS);
    redirect('asset/hardware');
  }
}




