<?php
	//defined("BASEPATH") OR exit('No direct script access allwed');
	class c_barang extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('m_barang');
			if ($this->session->userdata('masuk') != TRUE) {
				
				$this->load->library('form_validation');
			}
			//$this->load->helper('url');
		}

		public function index()
		{ 
		$data['barang'] = $this->m_barang->getAll(); //panggil sql select
		 if($this->session->userdata('akses')=='1'){
			$this->load->view("admin/barang/v_list_barang", $data); //admin
		 } else if($this->session->userdata('akses')=='2') {
			$this->load->view("peserta/v_home", $data); //peserta
		 } else {
		 	echo "<script>alert('Login terlebih dahulu'</script>";
		 	 redirect(site_url('c_login/index'));
		 }
		}
		public function index2($kode_barang){
			if ($this->session->userdata('akses')=='1') {
				$where = array ('kode_barang' => $kode_barang);
				$data['barang'] = $this->m_barang->getByKB($where, "barang")->result();
				$this->load->view('admin/barang/v_detail_barang',$data);
			}
		}
		public function index3(){
			if ($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2') {
				$where = $this->input->post('cari');
				//$where = array ('nama_barang' => $nama_barang);
				$data['barang'] = $this->m_barang->search($where);
				$this->load->view('peserta/v_proses_lelang',$data);
			}
		}
		public function tambah(){
			$this->load->view("admin/barang/v_new_form_barang.php"); //akses GUI form
		}
		public function simpan_aksi(){
			if ($this->session->userdata('akses')=='1') {
				$kode_barang = $_POST['kode_barang'];
				$nama_file = $_FILES['gambar']['name'];
	    		$ukuran_file = $_FILES['gambar']['size'];
	    		$tipe_file = $_FILES['gambar']['type'];
	    		$tmp_file = $_FILES['gambar']['tmp_name'];
				$nama_barang = $_POST['nama_barang'];
				$jenis = $_POST['jenis'];
				$tahun = $_POST['tahun'];
				$deskripsi = $_POST['deskripsi'];
				$harga = $_POST['harga'];
				$nip = $_POST['nip'];

				$data = array(
					'Kode_Barang' => $kode_barang,
					'Nama_File' => $nama_file,
					'ukuran' => $ukuran_file,
					'tipe' => $tipe_file,
					'Nama_Barang' => $nama_barang,
					'Jenis' => $jenis,
					'Tahun' => $tahun,
					'deskripsi'=> $deskripsi,
					'Harga' => $harga,
					'NIP' => $nip
				);
				$path = "gambar/".$nama_file;
				if($tipe_file == "image/jpg" || $tipe_file == "image/png"){ 
			      if($ukuran_file <= 1000000){ 
			        if(move_uploaded_file($tmp_file, $path)){ 
			         $input = $this->m_barang->simpan_data_file('barang', $data);
					  if ($input >= 1) {
						echo "<script>alert('data telah tersimpan'</script>";
						redirect(site_url('c_barang/index'));
					}
					else {
						echo "<script>alert('anda belum beruntung')</script>";
						redirect(site_url('c_barang/index'));
					}  
			        }else{
			          echo "<script>alert('Maaf, Gambar gagal untuk diupload.'</script>";
			          redirect(site_url('c_barang/index'));
			        }
			      }else{
			        echo "<script>alert('Maaf, Gambar gagal untuk diupload.'</script>";
			          redirect(site_url('c_barang/index'));
			      }
			    }else{
			      echo "<script>alert('Maaf, Gambar gagal untuk diupload.'</script>";
			          redirect(site_url('c_barang/index'));
			    }
				//$input = $this->m_barang->simpan_data('barang', $data);
				//if ($input >= 1) {
				//	echo "<script>alert('data telah tersimpan'</script>";
				//	redirect(site_url('c_barang/index'));
				//}
				///else {
				//	echo "<script>alert('anda belum beruntung')</script>";
				////	redirect(site_url('c_barang/index'));
				//}
			}
		}
		public function edit($kode_barang){
			if ($this->session->userdata('akses')=='1') {
				$where = array ('kode_barang' => $kode_barang);
				$data['barang'] = $this->m_barang->edit_data($where, "barang")->result();
				$this->load->view('admin/barang/v_edit_barang',$data);
			}
		}
		public function update(){
			$kode_barang = $_POST['kode_barang'];
			$nama_barang = $_POST['nama_barang'];
			$jenis = $_POST['jenis'];
			$tahun = $_POST['tahun'];
			//$deskripsi = $_POST['deskripsi'];
			$harga = $_POST['harga'];
			$nip = $_POST['nip'];
			$data = array(
				'Kode_Barang' => $kode_barang,
				'Nama_Barang' => $nama_barang,
				'Jenis' => $jenis,
				'Tahun' => $tahun,
				//'deskripsi' => $deskripsi,
				'Harga' => $harga,
				'NIP' => $nip
			);
			$where = array('Kode_Barang' => $kode_barang);
			$this->m_barang->update_data($where, $data,'barang');
			redirect(site_url('c_barang/index'));
		}
		public function hapus($kode_barang){
		$where = array('kode_barang' => $kode_barang);
		$this->m_barang->hapus_data($where,'barang');
		redirect('c_barang/index');
		}
	}
?>