<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();

        $this->load->model('user_model');
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function proses_login() { 
        $user = $this->input->post('username'); 
        $pass = $this->input->post('password');

        // print_r($this->input->post());
        // die();
        
        $login = $this->user_model->cek_user($user, $pass);

        if (!empty($login)) { 
            // login berhasil 
            $data_session = array(
                        'user' => $user,
                        'status' => "login"
                        );
            $this->session->set_userdata($data_session);
            redirect(base_url('asset/beranda')); 
        } else { 
            // login gagal 
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
            redirect(base_url('login')); 
        } 
    }
}
