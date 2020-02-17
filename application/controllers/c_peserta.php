<?php
	//defined("BASEPATH") OR exit('No direct script access allwed');
	class c_peserta extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('m_peserta');
			if ($this->session->userdata('masuk') != TRUE) {
				
				$this->load->library('form_validation');
			}
			//$this->load->helper('url');
		}

		public function index()
		{ 
		$data['peserta'] = $this->m_peserta->getAll(); //panggil sql select
		 if($this->session->userdata('akses')=='1'){
			$this->load->view("admin/peserta/v_list_peserta", $data); //admin
		 } else {
		 	echo "<script>alert('Login terlebih dahulu'</script>";
		 	 redirect(site_url('c_login/index'));
		 }
		}
		public function index2($username){
			if ($this->session->userdata('akses')=='1') {
				$where = array ('username' => $username);
				$data['peserta'] = $this->m_barang->getByKB($where, "peserta")->result();
				//$this->load->view('admin/barang/v_detail_peserta',$data);
			}
		}
		public function tambah(){
			$this->load->view("admin/peserta/v_new_form_peserta.php"); //akses GUI form
		}
		public function simpan_aksi(){
			if ($this->session->userdata('akses')=='1') {
				$nik = $_POST['nik'];
				$nama = $_POST['nama'];
				$username = $_POST['username'];
				$pass = $_POST['password'];
				$data = array(
					'NIK' => $nik,
					'Nama' => $Nama,
					'username' => $username,
					'pass' => $pass,
				);
				$input = $this->m_peserta->simpan_data('peserta', $data);
				if ($input >= 1) {
					echo "<script>alert('data telah tersimpan'</script>";
					redirect(site_url('c_peserta/index'));
				}
				else {
					echo "<script>alert('anda belum beruntung')</script>";
					redirect(site_url('c_peserta/index'));
				}
			}
		}
		public function edit($nik){
			if ($this->session->userdata('akses')=='1') {
				$where = array ('nik' => $nik);
				$data['peserta'] = $this->m_peserta->edit_data($where, "peserta")->result();
				$this->load->view('admin/peserta/v_edit_peserta',$data);
			}
		}
		public function update(){
			$nik = $_POST['nik'];
				$nama = $_POST['nama'];
				$username = $_POST['tahun'];
				$pass = $_POST['password'];
				$data = array(
					'NIK' => $nik,
					'Nama' => $Nama,
					'username' => $username,
					'pass' => $pass,
				);
			$where = array('NIK' => $nik);
			$this->m_peserta->update_data($where, $data,'peserta');
			redirect(site_url('c_peserta/index'));
		}
		public function hapus($nik){
		$where = array('nik' => $nik);
		$this->m_peserta->hapus_data($where,'peserta');
		redirect('c_peserta/index');
		}
	}
?>