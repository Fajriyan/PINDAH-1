<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class set_penguji extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_setpenguji','mahasiswa');
        $this->load->model('m_jadwalujian');
        $this->load->library('Template');
         $this->load->helper('url');
    }

    public function index()
    {
      $data['title'] = 'PERSETUJUAN JUDUL';
        // JUDUL NAMA DARI DATABASE
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        // AKHIR JUDUL NAMA
        $tabel_persetujuan['persetujuan_judul'] = $this->mahasiswa->show_list();
        $this->template->display('Dosen/v_setpenguji', $tabel_persetujuan + $data + $nama);
}
    
public function ajax_list()
    {
        $list = $this->mahasiswa->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $mahasiswa) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $mahasiswa->nim;
            $row[] = $mahasiswa->nama;            
            $row[] = $mahasiswa->judul_skripsi;           
            $row[] = "<div class='btn-group'>                      
                      <button type='button' class='btn btn-danger dropdown-toggle btn-xs' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu pull-right' role='menu'>
                        <li><a href='javascript:void(0)' title='View' onclick='view_mahasiswa(" . '"' . $mahasiswa->nim . '"' . ")'>VIEW MORE</a>
                        </li>
                        <li><a href='javascript:void(0)' title='Edit' onclick='edit_mahasiswa(" . '"' . $mahasiswa->nim . '"' . ")'>SET PENGUJI</a>
                        </li>
                        <li><a href='javascript:void(0)' title='Delete' onclick='delete_mahasiswa(" . '"' . $mahasiswa->nim . '"' . ")'>HAPUS MAHASISWA</a>
                        </li>
                      </ul>
                    </div>";
            //add html for action
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mahasiswa->count_all(),
            "recordsFiltered" => $this->mahasiswa->count_filtered(),
            "data" => $data
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->mahasiswa->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('nim', 'NIM', 'required|is_natural', array(
            'required'      => '%s Harus Di Isi Yaa'
        ));
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|alpha');
        $this->form_validation->set_rules(
            'program_studi',
            'Program Studi',
            'required|is_natural',
            array(
                'required'      => 'Harus Di Isi Yaa %s.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'judul_skripsi' => $this->input->post('judul'),
                'penguji1' => $this->input->post('penguji1'),
                'penguji2' => $this->input->post('penguji2'),
                'penguji3' => $this->input->post('penguji3'),
                'tgl_ujian' => $this->input->post('tgl_ujian'),
                'jam_ujian' => $this->input->post('jam_ujian'),
                'ruang_ujian' => $this->input->post('ruang_ujian')


                // 'program_studi' => $this->input->post('program_studi')
            );
            $insert = $this->mahasiswa->save($data);
            echo json_encode(array("penguji1","penguji2","penguji3" => TRUE));
        } else {
            $errors = array(
                'status'   => false,
                'npm_error' => form_error('npm'),
                'nama_error' => form_error('nama'),
                'program_studi_error' => form_error('program_studi')
            );
            echo json_encode($errors);
        }
    }

    public function ajax_update()
    {
        $data = array(
            'nim' => $this->input->post('nim'),
            'penguji1' => $this->input->post('penguji1'),
            'penguji2' => $this->input->post('penguji2'),
            'penguji3' => $this->input->post('penguji3'),
            'tgl_ujian' => $this->input->post('tgl_ujian'),
            'jam_ujian' => $this->input->post('jam_ujian'),
            'ruang_ujian' => $this->input->post('ruang_ujian')

            // 'program_studi' => $this->input->post('program_studi')
        );
        $this->mahasiswa->update($data, array('nim' => $this->input->post('hnpm')));
        echo json_encode(array("penguji1","penguji2","penguji3","tgl_ujian","jam_ujian","ruang_ujian" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->mahasiswa->delete_by_id($id);
        echo json_encode(array("penguji1","penguji2","penguji3","tgl_ujian","jam_ujian","ruang_ujian"  => TRUE));
    }
}

 ?>