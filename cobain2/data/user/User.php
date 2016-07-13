<?php
	class User{
		//Constructor
		public function __construct(){}
		//Atribut
		private $id;
        private $nik;
		private $username;
		private $password;
		private $name;
        private $kode_prodi;
        private $prodi;
        private $fakultas;
        private $kode_mk;
        private $nama_mk;
        private $sks;
        private $semester;
        private $kode_sem;
        private $kelas;
        private $nim;
        private $nama_mhs;
        private $nilai1;
        private $nilai2;
        private $nilai3;
        private $nilai4;
        private $nilai5;
        private $nilai6;
        private $nilai7;
        private $nilai8;
        private $total;
        private $huruf;
        private $tahun;
        
		//properties
		public function setId($id){
			$this->id=$id;
		}
		public function getId(){
			return $this->id;
		}
        
        public function setNik($nik){
			$this->nik=$nik;
		}
		public function getNik(){
			return $this->nik;
		}

		public function setUsername($username){
			$this->username = $username;
		}
		public function getUsername(){
			return $this->username;
		}

		public function setPassword($password){
			$this->password = $password;
		}
		public function getPassword(){
			return $this->password;
		}

		public function setPasswordBr($passwordbaru){
			$this->passwordbaru = $passwordbaru;
		}
		public function getPasswordBr(){
			return $this->passwordbaru;
		}

		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}
        
        public function setKodeProdi($kode_prodi){
			$this->kode_prodi = $kode_prodi;
		}
		public function getKodeProdi(){
			return $this->kode_prodi;
		}
        
        public function setProdi($prodi){
			$this->prodi = $prodi;
		}
		public function getProdi(){
			return $this->prodi;
		}
        
        public function setFakultas($fakultas){
			$this->fakultas = $fakultas;
		}
		public function getFakultas(){
			return $this->fakultas;
		}

		 public function setKodeMk($kode_mk){
			$this->kode_mk = $kode_mk;
		}
		public function getKodeMk(){
			return $this->kode_mk;
		}

		 public function setNamaMk($nama_mk){
			$this->nama_mk = $nama_mk;
		}
		public function getNamaMk(){
			return $this->nama_mk;
		}

		 public function setSks($sks){
			$this->sks = $sks;
		}
		public function getSks(){
			return $this->sks;
		}

		 public function setSemester($semester){
			$this->semester = $semester;
		}
		public function getSemester(){
			return $this->semester;
		}

		 public function setKodeSem($kode_sem){
			$this->kode_sem = $kode_sem;
		}
		public function getKodeSem(){
			return $this->kode_sem;
		}

		 public function setKelas($kelas){
			$this->kelas = $kelas;
		}
		public function getKelas(){
			return $this->kelas;
		}
        
        public function setNim($nim){
			$this->nim = $nim;
		}
		public function getNim(){
			return $this->nim;
		}
        
        public function setNamaMhs($nama_mhs){
			$this->nama_mhs = $nama_mhs;
		}
		public function getNamaMhs(){
			return $this->nama_mhs;
		}
        
        public function setNilai1($nilai1){
			$this->nilai1 = $nilai1;
		}
		public function getNilai1(){
			return $this->nilai1;
		}
        
         public function setNilai2($nilai2){
			$this->nilai2 = $nilai2;
		}
		public function getNilai2(){
			return $this->nilai2;
		}
        
         public function setNilai3($nilai3){
			$this->nilai3 = $nilai3;
		}
		public function getNilai3(){
			return $this->nilai3;
		}
        
         public function setNilai4($nilai4){
			$this->nilai4 = $nilai4;
		}
		public function getNilai4(){
			return $this->nilai4;
		}
        
         public function setNilai5($nilai5){
			$this->nilai5 = $nilai5;
		}
		public function getNilai5(){
			return $this->nilai5;
		}
        
         public function setNilai6($nilai6){
			$this->nilai6 = $nilai6;
		}
		public function getNilai6(){
			return $this->nilai6;
		}
        
         public function setNilai7($nilai7){
			$this->nilai7 = $nilai7;
		}
		public function getNilai7(){
			return $this->nilai7;
		}
        
         public function setNilai8($nilai8){
			$this->nilai8 = $nilai8;
		}
		public function getNilai8(){
			return $this->nilai8;
		}
        
         public function setTotal($total){
			$this->total = $total;
		}
		public function getTotal(){
			return $this->total;
		}
        
         public function setHuruf($huruf){
			$this->huruf = $huruf;
		}
		public function getHuruf(){
			return $this->huruf;
		}
        
        public function setTahun($tahun){
			$this->tahun = $tahun;
		}
		public function getTahun(){
			return $this->tahun;
		}


		public function toString(){
			$str = "" ;

			$str.= isset($this->id) 		? $this->id . "/" : "" ;
            $str.= isset($this->nik) 		? $this->nik . "/" : "" ;
			$str.= isset($this->username) 		? $this->username . "/" : "" ;
			$str.= isset($this->password) 		? $this->password . "/" : "" ;
			$str.= isset($this->name) 	? $this->name . "/" : "" ;
            $str.= isset($this->kode_prodi) 	? $this->kode_prodi . "/" : "" ;
            $str.= isset($this->prodi) 	? $this->prodi . "/" : "" ;
            $str.= isset($this->fakultas) 	? $this->fakultas . "/" : "" ;
            $str.= isset($this->kode_mk) 	? $this->kode_mk . "/" : "" ;
            $str.= isset($this->nama_mk) 	? $this->nama_mk . "/" : "" ;
            $str.= isset($this->sks) 	? $this->sks . "/" : "" ;
            $str.= isset($this->semester) 	? $this->semester . "/" : "" ;
            $str.= isset($this->kode_sem) 	? $this->kode_sem . "/" : "" ;
            $str.= isset($this->kelas) 	? $this->kelas . "/" : "" ;
            $str.= isset($this->nim) 	? $this->nim . "/" : "" ;
            $str.= isset($this->nama_mhs) 	? $this->nama_mhs . "/" : "" ;
            $str.= isset($this->nilai1) 	? $this->nilai1 . "/" : "" ;
            $str.= isset($this->nilai2) 	? $this->nilai2 . "/" : "" ;
            $str.= isset($this->nilai3) 	? $this->nilai3 . "/" : "" ;
            $str.= isset($this->nilai4) 	? $this->nilai4 . "/" : "" ;
            $str.= isset($this->nilai5) 	? $this->nilai5 . "/" : "" ;
            $str.= isset($this->nilai6) 	? $this->nilai6 . "/" : "" ;
            $str.= isset($this->nilai7) 	? $this->nilai7 . "/" : "" ;
            $str.= isset($this->nilai8) 	? $this->nilai8 . "/" : "" ;
            $str.= isset($this->total) 	? $this->total . "/" : "" ;
            $str.= isset($this->huruf) 	? $this->huruf . "/" : "" ;
            $str.= isset($this->tahun) 	? $this->tahun . "/" : "" ;

			$str = trim($str, "/") ;

			return $str ;
		}

		public function toJson(){
			$json = "" ;

			$json.= isset($this->id) 		? "{id:".$this->id."}," : "" ;
            $json.= isset($this->nik) 		? "{id:".$this->nik."}," : "" ;
			$json.= isset($this->username) 	? "{username:".$this->username."}," : "" ;
			$json.= isset($this->password) 	? "{password:".$this->password."}," : "" ;
			$json.= isset($this->name) 	? "{name:".$this->name."}," : "" ;
            $json.= isset($this->kode_prodi) 	? "{kode_prodi:".$this->kode_prodi."}," : "" ;
            $json.= isset($this->prodi) 	? "{prodi:".$this->prodi."}," : "" ;
            $json.= isset($this->fakultas) 	? "{fakultas:".$this->fakultas."}," : "" ;
            $json.= isset($this->kode_mk) 	? "{kode_mk:".$this->kode_mk."}," : "" ;
            $json.= isset($this->nama_mk) 	? "{nama_mk:".$this->nama_mk."}," : "" ;
            $json.= isset($this->sks) 	? "{sks:".$this->sks."}," : "" ;
            $json.= isset($this->semester) 	? "{semester:".$this->semester."}," : "" ;
            $json.= isset($this->kode_sem) 	? "{kode_sem:".$this->kode_sem."}," : "" ;
            $json.= isset($this->kelas) 	? "{kelas:".$this->kelas."}," : "" ;
            $json.= isset($this->nim) 	? "{kelas:".$this->nim."}," : "" ;
            $json.= isset($this->nama_mhs) 	? "{kelas:".$this->nama_mhs."}," : "" ;
            $json.= isset($this->nilai1) 	? "{kelas:".$this->nilai1."}," : "" ;
            $json.= isset($this->nilai2) 	? "{kelas:".$this->nilai2."}," : "" ;
            $json.= isset($this->nilai3) 	? "{kelas:".$this->nilai3."}," : "" ;
            $json.= isset($this->nilai4) 	? "{kelas:".$this->nilai4."}," : "" ;
            $json.= isset($this->nilai5) 	? "{kelas:".$this->nilai5."}," : "" ;
            $json.= isset($this->nilai6) 	? "{kelas:".$this->nilai6."}," : "" ;
            $json.= isset($this->nilai7) 	? "{kelas:".$this->nilai7."}," : "" ;
            $json.= isset($this->nilai8) 	? "{kelas:".$this->nilai8."}," : "" ;
            $json.= isset($this->total) 	? "{kelas:".$this->total."}," : "" ;
            $json.= isset($this->huruf) 	? "{kelas:".$this->huruf."}," : "" ;
            $json.= isset($this->tahun) 	? "{kelas:".$this->tahun."}," : "" ;

			$json = trim($json, ",") ;

			if ($json != "") {
				$json = "[".$json."]" ;
			}

			return $json ;
		}
	}
