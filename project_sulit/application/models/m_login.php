<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function getLoginData($data)
	{
		$login['username'] = $data['username'];
		$login['password'] = $data['password'];
		$cek = $this->db->get_where('user', $login);
		if ($cek->num_rows() > 0) {
			foreach ($cek->result() as $qad) {
				$sess_data['logged_in'] = 'yesGetMeLoginBaby';
				$sess_data['nomor'] = $qad->id;
				$sess_data['nama'] = $qad->username;
				$sess_data['username'] = $qad->username;
				$sess_data['level'] = $qad->level;
				$sess_data['ip_address'] = $this->input->ip_address();
				$this->session->set_userdata($sess_data);
			}
			if ($sess_data['level'] == '2') {
				redirect(base_url(''));
			} else if ($sess_data['level'] == '1') {
				redirect(base_url(''));
			} else {
			}
		} else {
			$this->session->set_flashdata('result_login', "Maaf, kombinasi username dan password yang anda masukkan tidak valid");
			header('location:' . base_url('index.php/login') . '');
		}
	}
}
