<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Daftar_Proposal extends CI_Controller
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
            $this->template->display('mahasiswa/v_daftar_proposal', $data + $nama);
        } else {
            $kirim = [
                'judul_proposal' => ($this->input->post('judul')),
                'draf_proposal' => ($this->input->post('draf') . ('||') . ($this->input->post('nama'))
                    . ('||') . ($this->input->post('nim1')))

            ];
            // $this->db->insert('list_pendaftar', $kirim);
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $nama123 = $data['user']['nomor'];

            $where = array('nim' => $nama123);
            $this->db->where($where);
            $this->db->update('list_pendaftar', $kirim);
            // var_dump($where);
        }
    }
    public function upload_draf()
    {
        $config['upload_path']          = './uploads/draft_proposal';
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
                    'judul_proposal' => ($this->input->post('judul')),
                    'draf_proposal' => $upload_data['file_name'] . ('||') . $this->input->post('nim1')

                ];

                // $this->db->insert('list_pendaftar', $kirim);
                $data['user'] = $this->db->get_where('user', ['username' =>
                $this->session->userdata('username')])->row_array();
                $nama123 = $data['user']['nomor'];

                $where = array('nim' => $nama123);
                $this->db->where($where);
                $this->db->update('list_pendaftar', $kirim);
                redirect('index.php/List_proposal3');
            }
        }
    }
}
