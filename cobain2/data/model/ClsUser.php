<?php
	class ClsUser extends ClsConnection {
		# CONSTRUCT
		public function __construct($cnx  = null)
		{
			$this->conn = $cnx;
		}
        
        public function login_by_user_password($user)
		{
			$username = $user->getUsername();
			$password   = $user->getPassword();

			$this->query = "SELECT * FROM dosen WHERE dosen.username='$username' AND dosen.password='$password'";

			$this->execute_query();

			$data = $this->rows ;

			return $data;
		}
		
		public function get_by_code($user)
		{
			$id = $user->getId();

			$this->query = "SELECT DISTINCT dosen.name, mhs.prodi, semester.tahun, semester.semester FROM dosen LEFT JOIN pengampu ON dosen.NIK=pengampu.NIK LEFT JOIN mhs ON pengampu.kode_prodi=mhs.kode_prodi LEFT JOIN semester ON pengampu.kode_sem=semester.kode_sem WHERE dosen.id='$id'";

			$this->execute_query();


			$data = $this->rows ;

			return $data;
		}
        
        public function get_daftar($user)
		{
			$id = $user->getId();

			$this->query = "SELECT DISTINCT matakuliah.kode_mk, matakuliah.nama_mk, pengampu.kelas
			FROM matakuliah, pengampu, dosen 
			WHERE matakuliah.kode_mk = pengampu.kode_mk AND
            matakuliah.kode_prodi = pengampu.kode_prodi AND dosen.id = '$id' AND
			pengampu.NIK=dosen.NIK";

			$this->execute_query();


			$data = $this->rows ;

			return $data;
		}
        
        public function get_nilai($user)
		{
			$id = $user->getId();


			$this->query = "SELECT DISTINCT krs.NIM, krs.kelas, krs.kode_mk, mhs.nama_mhs, krs.nilai1, krs.nilai2, krs.nilai3, krs.nilai4, krs.nilai5, krs.nilai6, krs.nilai7, krs.nilai8, krs.total, krs.huruf FROM dosen LEFT JOIN pengampu ON dosen.NIK=pengampu.NIK LEFT JOIN krs ON pengampu.kode_mk = krs.kode_mk AND pengampu.kelas=krs.kelas LEFT JOIN mhs ON krs.NIM=mhs.NIM WHERE dosen.id = '$id' ORDER BY krs.kode_mk, krs.kelas, krs.NIM ";

			$this->execute_query();


			$data = $this->rows ;

			return $data;
		}

		public function ubah_password($user)
		{
			$password = $user->getPassword();
			$passwordbaru = $user->getPasswordBr();
			$username = $user->getUsername();

			$this->query = "UPDATE dosen SET password='$passwordbaru' 
			WHERE password='$password' AND username='$username' LIMIT 1";

			$this->execute_password();

			$data = $this->rows;

			return $data;

		}

	}