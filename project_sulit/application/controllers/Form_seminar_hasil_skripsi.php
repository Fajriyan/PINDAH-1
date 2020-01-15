<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_seminar_hasil_skripsi extends CI_Controller
{
    function __construct(){
    parent::__construct();
    // $this->load->model('m_form_seminar_hasil_skripsi');
    $this->load->library('Template');
    // $this->load->modal();
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Harus di Isi'
        ]);                
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Nama Harus di Isi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'HALAMAN SKRIPSI';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $nama['nama_user'] = $data['user']['nama'];
            $nama['nn'] = $data['user']['nomor'];
            $nama['user_nama'] = $data['user']['nama'];            
            $jdl['judul'] = $this->db->get('list_pendaftar')->result();
            $this->template->display('mahasiswa/v_form_seminar_hasil_skripsi', $data + $nama+$jdl);
        } else {
            
            $kirim = [
                'nim' => ($this->input->post('nim1')),                                              
                'tgl_daftar_sempro' => date('Y-m-d H-i-s')
            ];            
            $data['user'] = $this->db->get_where('user', ['username' =>
                $this->session->userdata('username')])->row_array();
                $get=$data['user']['nomor'];

                $where = array('nim' => $get);
                $this->db->where($where);
                $this->db->update('list_pendaftar',$kirim);
                redirect('index.php/main');
        }
    }
}
