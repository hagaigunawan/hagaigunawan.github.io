<?php
include 'conn.php';
	$id = $_GET['id'];
	$judul = $_POST['judul'];
	$bahan = $_POST['bhn'];
	$cara = $_POST['cra'];
	$kat = $_POST['kat'];
	$foto = $_FILES['img'];
	$tmp = $_FILES['img']['tmp_name'];
	var_dump($_FILES);

	$ext = explode(".", $_FILES['img']['name']);
	$ext = end($ext);
	$ext = strtolower($ext);
	if ($ext == "jpg" || $ext=="png") {
		$pmn = "user/".$id.".jpg";
		move_uploaded_file($tmp, $pmn);
		$sql = "UPDATE resep SET foto = '$pmn', namaResep = '$judul', bahan = '$bahan', cara = '$cara' WHERE idResep = '$id'";
		$db->query($sql);
		header("Location:profile.php");
		exit;
	}else{
		header("Location:updateR.php?id=$id&s=fail");
	}
	?>