<?php
	class c_login extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('m_login');
		}
		public function index(){
			$this->load->view('admin/v_login');
		}
		public function auth(){
			$username = $_POST['username'];
			$pass = $_POST['password'];
			$cek_petugas = $this->m_login->admin($username, $pass);
			if ($cek_petugas->num_rows() > 0) { //jika petugas
				$data = $cek_petugas->row_array();
				$this->session->set_userdata('masuk', TRUE);
				 $this->session->set_userdata('akses','1');
				$this->session->set_userdata('ses_id', $data['nip']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect(site_url('c_barang/index'));
			} else { // peserta
				$cek_peserta = $this->m_login->peserta($username, $pass);
				if ($cek_peserta->num_rows() > 0) {
					$data = $cek_peserta->row_array();
					$this->session->set_userdata('masuk', TRUE);
					 $this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_id', $data['username']);
					$this->session->set_userdata('ses_nama', $data['nama']);
					echo "<script>alert('data telah tersimpan'</script>";
					redirect(site_url('c_barang/index'));
				} else { //jika gagal
					echo "<script>alert('anda belum beruntung')</script>";
					redirect(site_url('c_login/index'));
				}
			}
		}
		public function logout(){
			$this->session->sess_destroy();
			$url = base_url('');
			redirect(site_url('c_login/index'));
		}
	}
?>