<?php
include 'conn.php';

if (isset($_POST['skip'])) {
	header('Location:login.php');
}else{
	$id = $_GET['id'];
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
		$sql = "UPDATE user SET urlFoto = '$pmn', JenisKelamin = '$jk', Alamat = '$alamat' WHERE idUser = '$id'";
		$db->query($sql);
		header("Location:login.php");
		exit;
	}else{
		header("Location:daftar1.php?id=$id&s=fail");
	}
}
?>

