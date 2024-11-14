<?php
class bansos {

	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM bansos";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	public function tambah($nama, $alamat, $jumlah, $keterangan) {
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO bansos VALUES ('', '$nama', '$alamat', '$jumlah', '$keterangan')") or die ($db->error);
	}
	}
	
?>