<?php
class bpjs {

	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM bpjs";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	public function tambah($nama, $alamat, $keterangan, $kk, $ktp, $sktm) {
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO bpjs VALUES ('', '$nama', '$alamat', '$keterangan', '$kk', '$ktp', '$sktm')") or die ($db->error);
	}
	}
	
?>