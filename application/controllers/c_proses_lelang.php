<?php
	class c_proses_lelang extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('m_proses_lelang');
			if ($this->session->userdata('masuk') != TRUE) {
				
				$this->load->library('form_validation');
			}
			//$this->load->helper('url');
		}
	public function tawar(){
			$kode_barang = $_POST['kode_barang'];
			$harga = $_POST['harga'];
			$user = $_POST['user'];
			$penawaran = $_POST['penawaran'];
			$data = array(
					'kondisi' => $user,
					'harga_penawaran' => $penawaran,
				);
			if ($penawaran > $harga) {
				$where = array('kode_barang' => $kode_barang);
				$this->m_proses_lelang->update_data($where, $data,'proses_lelang2');
				redirect(site_url('c_barang/index'));
			} else {
				echo "Penawaran Anda Kurang Dari Harga Minimum";
			}
		}	
			
	}
?>