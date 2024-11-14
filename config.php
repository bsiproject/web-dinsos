<?php
$host="localhost";
$user="root";
$pass="";
$db="dinsos";
$koneksi= new mysqli($host,$user,$pass,$db);
if ($koneksi->connect_error) {
	die('maaf gagal koneksi ke database='.$koneksi->connect_error);

}
?>