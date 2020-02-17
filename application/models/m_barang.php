<?php
	//defined('BASEPATH') OR exit('No direct script acces')
	class m_barang extends CI_Model {
		public $_table = "barang";
		public $kode_barang;
		public $nama_barang;
		public $jenis;
		public $harga;
		public $nip;

		public function rules(){ 
			return[
				[
					'field' => 'Kode_Barang',
				 	'label' => 'Kode_Barang',
				 	'rules' => 'required'
				],
				[
					'field' => 'Nama_Barang',
				 	'label' => 'Nama_Barang',
				 	'rules' => 'required'
				],
				[
					'field' => 'Jenis',
				 	'label' => 'Jenis',
				 	'rules' => 'required'
				],
				[
					'field' => 'Harga',
				 	'label' => 'Harga',
				 	'rules' => 'numeric'
				],
				[
					'field' => 'NIP',
				 	'label' => 'NIP',
				 	'rules' => 'required'
				]
			];
		}
		public function getAll(){
			//return $this->db->get($this->_table)->result();
			return $this->db->query("SELECT * FROM barang")->result();
		}
		public function getByKB($where, $table){
			//return $this->db->get_where($this->_table, ["Kode_Barang" => $kode_barang]) -> row();	
			return $this->db->get_where($table,$where);
		}
		public function search($where){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->like('Nama_Barang',$where);
			$this->db->or_like('Jenis',$where);
			return $this->db->get()->result();
		}
		public function simpan(){
			$post = $this->input->POST();
			$this->kode_barang = $post["kode_barang"];
			$this->nama_file = $file["gambar"]["name"];
    		$this->ukuran = $file["gambar"]["size"];
    		$this->tipe = $file["gambar"]["type"];
    		$this->tmp_file = $file["gambar"]["tmp_name"];
			$this->nama_barang = $post["nama_barang"];
			$this->jenis = $post["jenis"];
			$this->tahun = $post["tahun"];
			//$this->deskripsi = $post["deskripsi"];
			$this->harga = $post["harga"];
			$this->nip = $post["nip"];
			$this->db->insert($this->_table, $this);
		}
		public function simpan_data($table, $data){
			$this->db->insert($table,$data);
		}
		public function simpan_file(){
			$file = $this->input->FILE();
			$post = $this->input->POST();
			$this->nama_file = $file["gambar"]["name"];
    		$this->ukuran_file = $file["gambar"]["size"];
    		$this->tipe_file = $file["gambar"]["type"];
    		$this->tmp_file = $file["gambar"]["tmp_name"];
    		$this->kode_barang = $file["kode_barang"];
			$this->db->insert($this->_table, $this);
		}
		public function simpan_data_file($table, $data){
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
		public function delete($kode_barang){
			return $this->db->delete($this->_table, array("kode_barang" => $Kode_Barang));
		}
		public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		}
	}
?>