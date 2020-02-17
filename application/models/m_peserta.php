<?php
	//defined('BASEPATH') OR exit('No direct script acces')
	class m_peserta extends CI_Model {
		public $_table = "peserta";
		public $NIK;
		public $nama;
		public $username;
		public $password;


		public function rules(){ 
			return[
				[
					'field' => 'NIK',
				 	'label' => 'NIK',
				 	'rules' => 'required'
				],
				[
					'field' => 'Nama',
				 	'label' => 'Nama',
				 	'rules' => 'required'
				],
				[
					'field' => 'username',
				 	'label' => 'username',
				 	'rules' => 'required'
				],
				[
					'field' => 'password',
				 	'label' => 'password',
				 	'rules' => 'required'
				]
			];
		}
		public function getAll(){
			//return $this->db->get($this->_table)->result();
			return $this->db->query("SELECT * FROM peserta")->result();
		}
		public function getByKB($username){
			return $this->db->get_where($this->_table, ["username" => $username]) -> row();	
		}
		public function simpan(){
			$post = $this->input->POST();
			$this->nik = $post["nik"];
			$this->nama = $post["nama"];
			$this->username = $post["username"];
			$this->pass = $post["password"];
			$this->db->insert($this->_table, $this);
		}
		public function simpan_data($table, $data){
			$this->db->insert($table,$data);
		}
		public function edit_data($where, $table){
			return $this->db->get_where($table,$where);
		}
		public function update_data($where, $data, $table){
			/*$post = $this->input->post();
			$this->kode_barang = $post["Kode_Barang"];
			$this->nama_barang = $post["Nama_Barang"];
			$this->jenis = $post["Jenis"];
			$this->harga = $post["Harga"];
			$this->nip = $post["NIP"];
			$this->db->update($this->_table, $this, array('kode_barang' => $post['Kode_Barang']));*/
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		public function delete($nik){
			return $this->db->delete($this->_table, array("nik" => $Kode_Barang));
		}
		public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		}
	}
?>