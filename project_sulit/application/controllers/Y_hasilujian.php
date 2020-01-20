<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Y_hasilujian extends CI_Controller{
		public function __construct(){
			parent ::__construct();
			$this->load->model('m_inputnilai');
			$this->load->library('form_validation');
			$this->load->library('Template');
			 $this->load->helper('url');
				// if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));

		}
		public function index(){
		$data['title'] = 'HALAMAN SKRIPSI';	

        // JUDUL NAMA DARI DATABASE
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        // AKHIR JUDUL NAMA 
         $x['data'] = $this->m_inputnilai->show_listnilai();

        $this->template->display('Mahasiswa/v_hasilujian',$x + $nama + $data);
		}

		public function cetakhasilujian(){
		$data['title'] = 'HALAMAN SKRIPSI';	

        // JUDUL NAMA DARI DATABASE
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        // AKHIR JUDUL NAMA 
         $x['data'] = $this->m_inputnilai->hasilujian();

        $this->load->view('Mahasiswa/v_cetakhasilujian',$x + $nama + $data);
		}
		

	}