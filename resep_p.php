<?php
include 'conn.php';
session_start();
$id = $_SESSION['id'];
$judul = $_POST['judul'];
$bahan = $_POST['bhn'];
$cara = $_POST['cra'];
$kat = $_POST['kat'];
$url = $_FILES['img'];
$tmp = $_FILES['img']['tmp_name'];

$sql = "INSERT INTO resep(idUser, namaResep, bahan, cara, idKat) VALUES('$id', '$judul', '$bahan', '$cara', '$kat')";
	$db->query($sql);
	$last_id = mysqli_insert_id($db);

$ext = explode(".", $_FILES['img']['name']);
$ext = end($ext);
$ext = strtolower($ext);
if ($ext == "jpg" || $ext=="png") {
	$pmn = "food/".$last_id.".".$ext;
    move_uploaded_file($tmp, $pmn);
	$sql = "UPDATE resep SET foto = '$pmn' WHERE idResep = '$last_id'";
	$db->query($sql);
	header("Location:profile.php");
}else{
	$sql = "DELETE FROM resep WHERE idResep = $last_id";
	$db->query($sql);
	header("Location:resep.php?s=fail");
}
    ?>
    