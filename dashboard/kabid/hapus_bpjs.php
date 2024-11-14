<?php
include '../koneksi.php';

if (isset($_GET['aa'])) {
    // data difilter terlebih dahulu & base64_decode berguna untuk mendeskripsi id yg sebelumnya di enkripsi/encoding
	$id = stripslashes(strip_tags(htmlspecialchars( base64_decode($_GET['aa']) ,ENT_QUOTES)));

	$query = "DELETE FROM bpjs WHERE id=?";
    $dinsos = $db->prepare($query);
    $dinsos->bind_param("i", $id);
    
    if ($dinsos->execute()) {
    	echo "<script>alert('Data Berhasil Dihapus');location='bpjs.php';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$db->close();
?>