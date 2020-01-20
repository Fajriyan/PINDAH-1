<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_inputnilai extends CI_model{


	private $_table="list_pendaftar";

	public $nim;
	public $nama;
	public $nilai1;
	public $nilai2;
	public $nilai3;
	

	public function rules(){
		return[
			['field'=>'nilai1',
			'label'=>'nilai1',
			'rules'=>'required'],

			['field'=>'nilai2',
			'label'=>'nilai2',
			'rules'=>'required'],

			['field'=>'nilai3',
			'label'=>'nilai3',
			'rules'=>'required'],

			
		];

	} public function getAll(){
		return $this->db->get($this->_table)->result();
	}
	public function getByID($nim){
		
		return $this->db->get_where($this->_table,["nim" => $id])->row();
	}
	public function save (){
		$post = $this->input->post();
		$this->nilai11=$post["nilai1"];
		$this->nilai11=$post["nilai2"];
		$this->nilai11=$post["nilai3"];
		
		
		$this->db->insert($this->_table,$this);
	}

	function hasilujian()
	{
		$hasil=$this->db->query("select * from list_pendaftar");
		return $hasil;
	}
	function show_list(){
		 $hasil=$this->db->query("select * from list_pendaftar");
		return $hasil;
}
	function show_listnilai(){
		
		 $hasil=$this->db->query("select * from list_pendaftar ");
		return $hasil;
}
}
