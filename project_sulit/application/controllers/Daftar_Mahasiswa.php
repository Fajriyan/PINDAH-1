<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Template');
        $this->load->model('m_list_pendaftar');
        $this->load->model('m_persetujuan_judul');
        $this->load->library('form_validation');
        // $this->load->library('upload');
    }
    public function index()
    {
        $this->form_validation->set_rules('nim', 'Nim', 'required|trim|is_unique[user.nomor]', [
            'required' => 'NIM Harus di Isi',
            'is_unique' => 'NIM Sudah Digunakan'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'NAMA Harus di Isi'
        ]);
        $this->form_validation->set_rules('username_mahasiswa', 'MHS', 'required|trim', [
            'required' => 'USERNAME Harus di Isi'
        ]);
        $this->form_validation->set_rules('pass', 'pass', 'required|trim', [
            'required' => 'PASSWORD Harus di Isi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'PENDAFTARAN MAHASISWA';

            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();

            $nama['nama_user'] = $data['user']['nama'];
            $this->template->display('dosen/v_daftar_Mahasiswa', $data + $nama);
        } else {
            $kirim = [
                'nomor' => ($this->input->post('nim')),
                'nama' => ($this->input->post('nama')),
                'username' => ($this->input->post('username_mahasiswa')),
                'password' => ($this->input->post('pass')),
                'level' => ($this->input->post('level')),
            ];
            $this->db->insert('user', $kirim);
            redirect('index.php/Daftar_Mahasiswa');
        }
    }
}
