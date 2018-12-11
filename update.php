<?php
include 'conn.php';
session_start();
$id = $_SESSION['id'];
$nama = $_POST['nama'];
$jk = $_POST['radio'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto'];
$tmp = $_FILES['foto']['tmp_name'];

$ext = explode(".", $_FILES['foto']['name']);
$ext = end($ext);
$ext = strtolower($ext);
if ($ext == "jpg" || $ext=="png") {
	$pmn = "user/".$id.".jpg";
	move_uploaded_file($tmp, $pmn);
	$sql = "UPDATE user SET Nama = '$nama', JenisKelamin = '$jk', Alamat = '$alamat', urlFoto = '$pmn' WHERE idUser = '$id'";
	$db->query($sql);
	header("Location:profile2.php");
	exit;
}
?>