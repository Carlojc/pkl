<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asset extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Software_model');
		$this->load->model('Hardware_model');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function beranda()
	{
		$this->load->view('Beranda');
	}

	public function hardware()
	{
		$data['hardware'] = $this->Hardware_model->get_hardware();
		$this->load->view('assetHardware',$data);
	}

	public function jenis_hardware()
	{
		$this->load->view('JenisHardware');
	}

	public function add_hardware()
	{
		$this->load->view('addAssetHardware');
	}

	public function addJenis_HW()
	{
		$this->load->view('addJenis_HW');
	}

	public function addRegion()
	{
		$this->load->view('addRegion');
	}

	public function addVendor(){
		$this->load->view('addVendor');	
	}

	public function software()
	{
		$data['software'] = $this->Software_model->get_software();
		$this->load->view('assetSoftware', $data);
	}

	public function jenis_software()
	{
		$this->load->view('JenisSoftware');
	}
	public function add_software()
	{
		$this->load->view('addAssetSoftware');
	}
	public function kondisi_asset()
	{
		$this->load->view('KondisiAsset');
	}
	public function addkondisi()
	{
		$this->load->view('AddKondisi');
	}

	public function addLokasi(){
		$this->load->view('addLokasi');
	}

	public function addUser(){
		$this->load->view('addUser');
	}

	public function entity()
	{
		$this->load->view('entity');
	}
	public function lokasidatacentre()
	{
		$this->load->view('LokasiDataCentre');
	}
	public function regionserver()
	{
		$this->load->view('RegionServer');
	}
	public function user()
	{
		$this->load->view('user');
	}
	public function vendor()
	{
		$this->load->view('Vendor');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	
}
