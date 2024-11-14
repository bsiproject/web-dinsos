<?php
class dtks {

	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM dtks";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	public function tambah($provinsi, $kabupaten, $kecematan, $desa, $alamat, $dusun, $rt, $rw ,$kk, $nik, $nama, $tgl_lahir, $lahir, $jk, $ibukandung, $keluarga) {
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO dtks VALUES ('', '$provinsi', '$kabupaten', '$kecematan', '$desa', '$alamat', '$dusun', '$rt', '$rw' ,'$kk', '$nik', '$nama', '$tgl_lahir', '$lahir', '$jk', '$ibukandung', '$keluarga')") or die ($db->error);
	}
	}
	
?>