<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Daftar_Judul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Template');
        $this->load->library('form_validation');
        $this->load->model('Skripsi_Model');
        // $this->load->library('upload');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Harus di Isi'
        ]);
        $this->form_validation->set_rules('email_1', 'Email_1', 'required|trim|valid_email|is_unique[list_pendaftar.email]', [
            'required' => 'Email Harus di Isi',
            'is_unique' => 'Email Sudah Digunakan'
        ]);
        $this->form_validation->set_rules('hp', 'Hp', 'required|trim', [
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
            $this->template->display('mahasiswa/fitur_1', $data + $nama);
        } else {
            $kirim = [
                'nim' => ($this->input->post('nim1')),
                'nama' => ($this->input->post('nama')),
                'email' => ($this->input->post('email_1')),
                'hp' => ($this->input->post('hp')),
                'judul_skripsi' => ($this->input->post('judul')),
                'draf' => ($this->input->post('draf') . ('||') . ($this->input->post('nama'))
                    . ('||') . ($this->input->post('nim1'))),
                'status' => ('- MENUNGGU -'),
                'time' => time()
            ];
            $this->db->insert('list_pendaftar', $kirim);
            redirect('index.php/Skripsi');
        }
    }
    public function upload_draf()
    {
        $config['upload_path']          = './uploads/draf';
        $config['allowed_types']        = 'doc|docx|pdf|txt';
        $config['max_size']             = 0;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('draf1')) {
            $error = array('error' => $this->upload->display_errors());
            $data2['title'] = 'HALAMAN SKRIPSI';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $nama1['nn'] = $data['user']['nomor'];
            $nama['nama_user'] = $data['user']['nama'];
            $this->template->display('mahasiswa/fitur_1', $data2 +  $nama1 + $nama + $error);
        } else {
            $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
                'required' => 'Nama Harus di Isi'
            ]);
            $this->form_validation->set_rules('email_1', 'Email_1', 'required|trim|valid_email|is_unique[list_pendaftar.email]', [
                'required' => 'Email Harus di Isi',
                'is_unique' => 'Email Sudah Digunakan'
            ]);
            $this->form_validation->set_rules('hp', 'Hp', 'required|trim', [
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
                $this->template->display('mahasiswa/fitur_1', $data + $nama);
            } else {
                $upload_data = $this->upload->data();
                $kirim = [
                    'nim' => ($this->input->post('nim1')),
                    'nama' => ($this->input->post('nama')),
                    'email' => ($this->input->post('email_1')),
                    'hp' => ($this->input->post('hp')),
                    'judul_skripsi' => ($this->input->post('judul')),
                    'draf' => $upload_data['file_name'] . ('||') . $this->input->post('nim1'),
                    'status' => ('- MENUNGGU -'),
                    'time' => time()
                ];
                $this->db->insert('list_pendaftar', $kirim);
                redirect('index.php/Skripsi');
            }
        }
    }
}
