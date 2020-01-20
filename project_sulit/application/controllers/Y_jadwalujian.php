<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Y_jadwalujian extends CI_Controller{
		public function __construct(){
			parent ::__construct();
			$this->load->model('m_jadwalujian');
			$this->load->library('form_validation');
			$this->load->library('Template');
			 $this->load->helper('url');
				// if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));

		}
		public function index()
   		{
        $data['title'] = 'HALAMAN SKRIPSI';
    	
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        $x['data'] = $this->m_jadwalujian->show_list();
        $this->template->display('Dosen/v_jadwal_ujian', $x + $data + $nama);
    }
}