<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'] ,ENT_QUOTES)));
    $alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'] ,ENT_QUOTES)));
    $jumlah = stripslashes(strip_tags(htmlspecialchars($_POST['jumlah'] ,ENT_QUOTES)));
    $keterangan = stripslashes(strip_tags(htmlspecialchars($_POST['keterangan'] ,ENT_QUOTES)));
    $tgl_penerima = stripslashes(strip_tags(htmlspecialchars($_POST['tgl_penerima'] ,ENT_QUOTES)));

	$query = "INSERT into bansos (nama, alamat, jumlah, keterangan, tgl_penerima) VALUES (?, ?, ?, ?, ?)";
    $dinsos = $db->prepare($query);
    $dinsos->bind_param("sssss", $nama, $alamat, $jumlah, $keterangan, $tgl_penerima);
    
    if ($dinsos->execute()) {
    	echo "<script>alert('Data Berhasil Ditambah');location='bansos.php';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$db->close();
?>