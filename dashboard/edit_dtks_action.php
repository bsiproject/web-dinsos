<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kecamatan = stripslashes(strip_tags(htmlspecialchars($_POST['kecamatan'] ,ENT_QUOTES)));
    $desa = stripslashes(strip_tags(htmlspecialchars($_POST['desa'] ,ENT_QUOTES)));
    $alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'] ,ENT_QUOTES)));
    $rt_rw = stripslashes(strip_tags(htmlspecialchars($_POST['rt_rw'] ,ENT_QUOTES)));
    $kk = stripslashes(strip_tags(htmlspecialchars($_POST['kk'] ,ENT_QUOTES)));
    $nik = stripslashes(strip_tags(htmlspecialchars($_POST['nik'] ,ENT_QUOTES)));
    $nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'] ,ENT_QUOTES)));
    $tgl_lahir = stripslashes(strip_tags(htmlspecialchars($_POST['tgl_lahir'] ,ENT_QUOTES)));
    $lahir = stripslashes(strip_tags(htmlspecialchars($_POST['lahir'] ,ENT_QUOTES)));
    $jk = stripslashes(strip_tags(htmlspecialchars($_POST['jk'] ,ENT_QUOTES)));
    $ibukandung = stripslashes(strip_tags(htmlspecialchars($_POST['ibukandung'] ,ENT_QUOTES)));
    $keluarga = stripslashes(strip_tags(htmlspecialchars($_POST['keluarga'] ,ENT_QUOTES)));

	$query = "UPDATE dtks SET kecamatan=?, desa=?, alamat=?, rt_rw=?, kk=?, nik=?, nama=?, tgl_lahir=?, lahir=?, jk=?, ibukandung=?, keluarga=? WHERE id=?";
    $dinsos = $db->prepare($query);
    $dinsos->bind_param("ssssssssssssi", $kecamatan, $desa, $alamat, $rt_rw, $kk, $nik, $nama, $tgl_lahir, $lahir, $jk, $ibukandung, $keluarga, $id);
    
    if ($dinsos->execute()) {
    	echo "<script>alert('Data Berhasil Diubah');location='dtks.php';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$db->close();
?>