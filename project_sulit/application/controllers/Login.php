<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->model('m_login','login');
    }
	public function index()
	{
		$data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        
		if ($this->session->userdata('logged_in') !=""){
            $this->template->display('main/beranda', $data + $nama);
		}
		else{
			$this->load->view('Dosen/v_login', $data);
		}	
    }
   
    public function login_app()
	{			
		$data['judul']='LOGIN';
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Dosen/v_login',$data);

		}
		else
		{
			$dt['username'] = $this->input->post('username');
			$dt['password'] = $this->input->post('password');
			$this->login->getLoginData($dt);
        }
    }

    function logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'');
	}
	
}
