<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends CI_Controller {

	public function beranda()
	{
		$this->load->view('Beranda');
	}

	public function hardware()
	{
		$this->load->view('assetHardware');
	}

	public function jenis_hardware()
	{
		$this->load->view('JenisHardware');
	}

	public function add_hardware()
	{
		$this->load->view('addAssetHardware');
	}

	public function software()
	{
		$this->load->view('assetSoftware');
	}

	public function jenis_software()
	{
		$this->load->view('JenisSoftware');
	}
	public function add_software()
	{
		$this->load->view('addAssetSoftware');
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
}
