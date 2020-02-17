<?php 
	class m_proses_lelang extends CI_Model{
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
	}
?>