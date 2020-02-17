<?php
	class m_login extends CI_Model{
		private $username;
		private $password;
		//cek login admin
		public function admin($username,$password){
			$query = $this->db->query("SELECT * FROM petugas WHERE nip = '$username' AND pass = '$password'");
			return $query;
		}
		// cek login peserta
		public function peserta($username,$password){
			$query = $this->db->query("SELECT * FROM peserta WHERE username = '$username' AND pass = '$password'");
			return $query;
		}	
	}
?>